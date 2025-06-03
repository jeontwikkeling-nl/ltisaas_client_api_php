# LtiSaasApi\MembersApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**memberList()**](MembersApi.md#memberList) | **GET** /member/list | Get a list of LTI system members that are unique on the system |


## `memberList()`

```php
memberList(): \LtiSaasApi\Model\MemberList200Response
```

Get a list of LTI system members that are unique on the system

This endpoint retrieves a list of members that are unique on the system. The result is a list of      *     users with their respective information, which can be used for further operations or analysis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->memberList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->memberList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LtiSaasApi\Model\MemberList200Response**](../Model/MemberList200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
