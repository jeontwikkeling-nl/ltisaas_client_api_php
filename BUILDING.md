### Building example - for developers

This is a step by step guide to build the example from scratch. Note that this is personal and not a guide for everyone.

```bash
# Build the client
cd ~/PROJECTEN/ltisaas_client_api_php 

echo "Version like 1.0.1:"
read -r version
echo $version

echo "Press enter to continue..." 
read -r key

rm -rf /tmp/ltisaas_client
swagger-codegen generate \
-i https://provider42luuk.web11.webv.nl/local/ltisaas/docs.php \
-l php \
--http-user-agent LTISaasClientv1 \
-D composerProjectName=ltisaas_client_api_php \
-D modelPackage=LtiSaasApi \
--git-repo-id=ltisaas_client_api_php \
--git-user-id=jeontwikkeling-nl \
-D composerVendorName=ltisaas \
--invoker-package LtiSaasApi \
-D invokerPackage=LtiSaasApi \
-D apiPackage=LtiSaasApi \
-D artifactVersion=$version \
-o /tmp/ltisaas_client/

# Copy needed files to this project.
rsync -av /tmp/ltisaas_client/ ~/PROJECTEN/ltisaas_client_api_php 

# Push version
git tag v$version
git push origin v$version

# update on packagist.com
# https://packagist.org/packages/jeontwikkeling-nl/ltisaas_client_api_php

```