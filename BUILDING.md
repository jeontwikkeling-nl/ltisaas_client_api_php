
### Building example - for developers
```txt

# Build the client
cd ~/PROJECTEN/ltisaas_client_api_php 

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
-D artifactVersion=1.0.1 \
-o /tmp/ltisaas_client

open /tmp/ltisaas_client

# Copy needed files to this project.

# Push version
git tag v1.0.1
git push origin v1.0.1

# update on packagist.com
https://packagist.org/packages/jeontwikkeling-nl/ltisaas_client_api_php

```