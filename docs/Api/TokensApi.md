# LtiSaasApi\TokensApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tokenAdd()**](TokensApi.md#tokenAdd) | **GET** /token/add | Add a new API token |
| [**tokenDelete()**](TokensApi.md#tokenDelete) | **GET** /token/delete | Delete an API token |
| [**tokenList()**](TokensApi.md#tokenList) | **GET** /token/list | Get list of API tokens |


## `tokenAdd()`

```php
tokenAdd($name): \LtiSaasApi\Model\TokenAdd200Response
```

Add a new API token

This endpoint creates a new API token.      *     It requires necessary name for creating a new API token.      *     Upon successful operation, a new API token will be added to the system and its details will be returned.      *     In case the API token cannot be created due to certain reasons, appropriate error responses will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the token for your own administration purposes

try {
    $result = $apiInstance->tokenAdd($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokenAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the token for your own administration purposes | |

### Return type

[**\LtiSaasApi\Model\TokenAdd200Response**](../Model/TokenAdd200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenDelete()`

```php
tokenDelete($token): \LtiSaasApi\Model\CourseUpdate200Response
```

Delete an API token

This endpoint deletes an API token based on a given token ID.      *     It requires the token of the API to perform this operation.      *     Upon successful deletion, the API token will be removed from the system.      *     In case the token ID is not found or cannot be deleted due to certain reasons,      *     appropriate error responses will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The tokenkey you want to delete

try {
    $result = $apiInstance->tokenDelete($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokenDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The tokenkey you want to delete | |

### Return type

[**\LtiSaasApi\Model\CourseUpdate200Response**](../Model/CourseUpdate200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenList()`

```php
tokenList(): \LtiSaasApi\Model\TokenList200Response
```

Get list of API tokens

This endpoint retrieves a list of all API tokens. The result is a list of API tokens with their respective      *     information,  such as token, endpoint, name, etc. This can be used for managing or auditing the use of API tokens in the      *     system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tokenList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokenList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LtiSaasApi\Model\TokenList200Response**](../Model/TokenList200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
