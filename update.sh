#!/bin/bash

# Extract the current version using jq
# Extract the current version using jq
current_version=$(jq -r '.version' version.json)

# Split the version into its components
major=$(echo $current_version | cut -d. -f1)
minor=$(echo $current_version | cut -d. -f2)
patch=$(echo $current_version | cut -d. -f3)

# Increment the patch version
newpatch=$((patch + 1))

# Construct the new version string
new_version="${major}.${minor}.${newpatch}"

# Update the version.json file with the new version
jq --arg version "$new_version" '.version = $version' version.json > tmp.json && mv tmp.json version.json


echo "$new_version"

rm -rf /tmp/ltisaas_client
openapi-generator generate \
-g php \
-i https://provider42luuk.web11.webv.nl/local/ltisaas/docs.php \
--http-user-agent "LTISaasClient V$new_version" \
-p composerProjectName=ltisaas_client_api_php \
-p modelPackage=LtiSaasApi \
--git-repo-id=ltisaas_client_api_php \
--git-user-id=jeontwikkeling-nl \
-p composerVendorName=ltisaas \
-p invokerPackage=LtiSaasApi \
-p apiPackage=LtiSaasApi \
-p packageVersion="$version" \
-o /tmp/ltisaas_client/

# Copy needed files to this project.
rsync -av /tmp/ltisaas_client/ ~/PROJECTEN/ltisaas_client_api_php

# Push version
git add .
git commit -m "Update to version V$new_version"
git tag "V$new_version"
git push origin "V$new_version"

git push origin main