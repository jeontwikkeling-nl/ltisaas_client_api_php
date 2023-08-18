### Building example - for developers

This is a step by step guide to build the example from scratch. Note that this is personal and not a guide for everyone.

```bash
# Script to build the example
./update.sh

# Manual

# Build the client
cd ~/PROJECTEN/ltisaas_client_api_php 


# Extract the current version using jq
current_version=$(jq -r '.version' composer.json)

# Split the version into its components
major=$(echo $current_version | cut -d. -f1)
minor=$(echo $current_version | cut -d. -f2)
patch=$(echo $current_version | cut -d. -f3)

# Increment the minor version
newpatch=$((patch + 1))

# Construct the new version string
version="$major.$minor.$newpatch"

echo "$version"

rm -rf /tmp/ltisaas_client
swagger-codegen generate \
-i https://provider42luuk.web11.webv.nl/local/ltisaas/docs.php \
-l php \
--http-user-agent "LTISaasClient V$version" \
-D composerProjectName=ltisaas_client_api_php \
-D modelPackage=LtiSaasApi \
--git-repo-id=ltisaas_client_api_php \
--git-user-id=jeontwikkeling-nl \
-D composerVendorName=ltisaas \
--invoker-package LtiSaasApi \
-D invokerPackage=LtiSaasApi \
-D apiPackage=LtiSaasApi \
-D artifactVersion="$version" \
-o /tmp/ltisaas_client/

# Copy needed files to this project.
rsync -av /tmp/ltisaas_client/SwaggerClient-php/ ~/PROJECTEN/ltisaas_client_api_php

# Push version
git add .
git commit -m "Update to version V$version"
git tag "V$version"
git push origin "V$version"

git push origin main
```