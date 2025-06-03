#!/bin/bash

# Configuration
PROJECT_NAME="ltisaas_client_api_php"
API_ENDPOINT="https://linqur45.web09.webv.nl/local/ltisaas/docs.php"
OUTPUT_DIR="/tmp/ltisaas_client"
TARGET_DIR=~/PROJECTEN/ltisaas_client_api_php

# Extract and increment version
current_version=$(jq -r '.version' version.json)
major=$(echo $current_version | cut -d. -f1)
minor=$(echo $current_version | cut -d. -f2)
patch=$(echo $current_version | cut -d. -f3)
newpatch=$((patch + 1))
new_version="${major}.${minor}.${newpatch}"

# Update version file
jq --arg version "$new_version" '.version = $version' version.json >tmp.json && mv tmp.json version.json

echo "$new_version"

# Generate API client
rm -rf $OUTPUT_DIR

# Check if openapi-generator exists
if ! command -v openapi-generator &>/dev/null; then
  echo "Error: openapi-generator is not installed or not in PATH"
  exit 1
fi

openapi-generator generate \
  -g php \
  -i $API_ENDPOINT \
  --http-user-agent "LTISaasClient V$new_version" \
  --enable-post-process-file \
  -p composerProjectName=$PROJECT_NAME \
  --git-repo-id=$PROJECT_NAME \
  --git-user-id=jeontwikkeling-nl \
  -p composerVendorName=ltisaas \
  -p invokerPackage=LtiSaasApi \
  -p packageVersion="$version" \
  -o $OUTPUT_DIR

find . -type f ! -name "*.sh" -exec grep -Iq . {} \; -exec sed -i 's/provider42luuk\.web11\.webv\.nl/example\.com/g' {} \;

# Copy files to project directory
rsync -av $OUTPUT_DIR/ $TARGET_DIR

# Git operations
git add .
git commit -m "Update to version V$new_version"
git tag "V$new_version"
git push origin "V$new_version"
git push origin main
