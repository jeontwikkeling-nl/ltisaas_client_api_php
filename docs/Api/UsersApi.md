# LtiSaasApi\UsersApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userDelete()**](UsersApi.md#userDelete) | **GET** /user/delete | Delete a user by ID |
| [**userDeleteBulk()**](UsersApi.md#userDeleteBulk) | **GET** /user/delete_bulk | Delete multiple users by IDs |
| [**userList()**](UsersApi.md#userList) | **GET** /user/list | Get list of users in a tool |


## `userDelete()`

```php
userDelete($id): \LtiSaasApi\Model\CourseUpdate200Response
```

Delete a user by ID

This endpoint deletes a user based on a given ID.      *     Upon successful deletion, the user will be removed from the system.      *     In case the user ID is not found or cannot be deleted due to certain reasons, appropriate error responses will be      *     returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the user

try {
    $result = $apiInstance->userDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The identifier of the user | |

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

## `userDeleteBulk()`

```php
userDeleteBulk($ids): \LtiSaasApi\Model\CourseUpdate200Response
```

Delete multiple users by IDs

This endpoint deletes multiple users based on given IDs. Upon successful deletion, the users will be      *     removed from the system. In case any of the user IDs are not found or cannot be deleted due to certain reasons, an      *     appropriate error response will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(56); // int[] | Comma-separated list of identifiers of the users to delete

try {
    $result = $apiInstance->userDeleteBulk($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**int[]**](../Model/int.md)| Comma-separated list of identifiers of the users to delete | |

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

## `userList()`

```php
userList($toolid): \LtiSaasApi\Model\UserList200Response
```

Get list of users in a tool

This endpoint retrieves a list of users that are registered in a specific tool. The result is a list of      *     users with their respective information, which can be used for further operations or analysis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$toolid = 56; // int | The identifier of the tool (optional)

try {
    $result = $apiInstance->userList($toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolid** | **int**| The identifier of the tool (optional) | [optional] |

### Return type

[**\LtiSaasApi\Model\UserList200Response**](../Model/UserList200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
