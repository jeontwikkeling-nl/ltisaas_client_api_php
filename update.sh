#!/bin/bash

# LTI SaaS Client API PHP Generation Script
# Generates PHP client from OpenAPI spec with version management

set -e  # Exit on any error

# Configuration
PROJECT_NAME="ltisaas_client_api_php"
API_ENDPOINT="https://linqur45luuk2.web09.webv.nl/local/ltisaas/docs.php"
OUTPUT_DIR="/tmp/ltisaas_client"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Logging function
log() {
    echo -e "${GREEN}[$(date +'%Y-%m-%d %H:%M:%S')]${NC} $1"
}

error() {
    echo -e "${RED}[ERROR]${NC} $1" >&2
}

warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

# Check required commands
check_requirements() {
    local missing_tools=()

    for tool in jq openapi-generator git rsync; do
        if ! command -v $tool &>/dev/null; then
            missing_tools+=($tool)
        fi
    done

    if [ ${#missing_tools[@]} -ne 0 ]; then
        error "Missing required tools: ${missing_tools[*]}"
        echo "Please install missing tools and try again."
        exit 1
    fi
}

# Validate version.json exists
if [ ! -f "version.json" ]; then
    error "version.json not found in current directory"
    exit 1
fi

# Check requirements
check_requirements

# Extract and increment version
log "Reading current version..."
current_version=$(jq -r '.version' version.json 2>/dev/null || echo "0.0.0")

if [ "$current_version" == "null" ] || [ -z "$current_version" ]; then
    error "Invalid version in version.json"
    exit 1
fi

# Parse version components
IFS='.' read -r major minor patch <<< "$current_version"
newpatch=$((patch + 1))
new_version="${major}.${minor}.${newpatch}"

log "Current version: $current_version"
log "New version: $new_version"

# Update version file
log "Updating version.json..."
jq --arg version "$new_version" '.version = $version' version.json > tmp.json && mv tmp.json version.json

if [ $? -ne 0 ]; then
    error "Failed to update version.json"
    exit 1
fi

echo "$new_version"

# Clean up previous generation
log "Cleaning up previous generation..."
rm -rf "$OUTPUT_DIR"

# Generate API client
log "Generating API client..."
openapi_generator_output=$(openapi-generator generate \
    -g php \
    -i "$API_ENDPOINT" \
    --http-user-agent "LTISaasClient V$new_version" \
    --enable-post-process-file \
    -p composerProjectName="$PROJECT_NAME" \
    --git-repo-id="$PROJECT_NAME" \
    --git-user-id=jeontwikkeling-nl \
    -p composerVendorName=ltisaas \
    -p invokerPackage=LtiSaasApi \
    -p packageVersion="$new_version" \
    -o "$OUTPUT_DIR" 2>&1)

if [ $? -ne 0 ]; then
    error "OpenAPI generation failed:"
    echo "$openapi_generator_output"
    exit 1
fi

log "API client generated successfully"

# Post-process generated files - fix the domain replacement
log "Post-processing generated files..."
if [ -d "$OUTPUT_DIR" ]; then
    find "$OUTPUT_DIR" -type f ! -name "*.sh" -exec grep -Iq . {} \; -exec sed -i 's/provider42luuk\.web11\.webv\.nl/example\.com/g' {} \; 2>/dev/null || true
else
    warning "Output directory not found for post-processing"
fi

# Copy files to current directory
log "Copying files to current directory..."
rsync -av "$OUTPUT_DIR/" ./

if [ $? -ne 0 ]; then
    error "Failed to copy files to current directory"
    exit 1
fi

# Check if we're in a git repository
if ! git rev-parse --git-dir > /dev/null 2>&1; then
    warning "Not in a git repository. Skipping git operations."
    log "Generation completed successfully!"
    exit 0
fi

# Git operations
log "Performing git operations..."

# Check if there are changes
if git diff --quiet && git diff --cached --quiet; then
    warning "No changes detected. Skipping commit."
else
    # Add all changes
    git add .

    # Commit with version message
    git commit -m "Update to version V$new_version" || {
        error "Git commit failed"
        exit 1
    }

    log "Changes committed"
fi

# Create tag
git tag "V$new_version" || {
    warning "Tag V$new_version already exists or creation failed"
}

# Push changes (with error handling)
log "Pushing changes to remote..."

# Push tag
git push origin "V$new_version" 2>/dev/null || {
    warning "Failed to push tag V$new_version (might already exist)"
}

# Push main branch
git push origin main || {
    error "Failed to push to main branch"
    echo "You may need to push manually: git push origin main"
    exit 1
}

log "✅ Generation completed successfully!"
log "New version: V$new_version"
log "Files generated in current directory: $(pwd)"