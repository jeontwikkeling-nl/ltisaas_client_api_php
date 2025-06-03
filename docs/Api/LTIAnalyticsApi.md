# LtiSaasApi\LTIAnalyticsApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**courseLtiRegistrationsByDay()**](LTIAnalyticsApi.md#courseLtiRegistrationsByDay) | **GET** /course/lti/registrations_by_day | Get LTI registrations by day |
| [**courseLtiRegistrationsSumByCourse()**](LTIAnalyticsApi.md#courseLtiRegistrationsSumByCourse) | **GET** /course/lti/registrations_sum_by_course | Get total LTI registrations per course |


## `courseLtiRegistrationsByDay()`

```php
courseLtiRegistrationsByDay($from, $till, $toolid): \LtiSaasApi\Model\CourseLtiRegistrationsByDay200Response
```

Get LTI registrations by day

This endpoint retrieves the Learning Tools Interoperability (LTI) registrations grouped by day. The results      *     provide insights into daily registration and can be used for analytical purposes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\LTIAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The end date (format: DD-MM-YYYY)
$toolid = 56; // int | The identifier of the LTI tool (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsByDay($from, $till, $toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LTIAnalyticsApi->courseLtiRegistrationsByDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start date (format: DD-MM-YYYY) | |
| **till** | **\DateTime**| The end date (format: DD-MM-YYYY) | |
| **toolid** | **int**| The identifier of the LTI tool (optional) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseLtiRegistrationsByDay200Response**](../Model/CourseLtiRegistrationsByDay200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseLtiRegistrationsSumByCourse()`

```php
courseLtiRegistrationsSumByCourse($from, $till, $courseid): \LtiSaasApi\Model\CourseLtiRegistrationsSumByCourse200Response
```

Get total LTI registrations per course

This endpoint retrieves the total number of Learning Tools Interoperability (LTI) registrations for each      *     course. The results can be used to gain insight into the overall registration activities of each course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\LTIAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The end date (format: DD-MM-YYYY)
$courseid = 56; // int | The identifier of the course (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsSumByCourse($from, $till, $courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LTIAnalyticsApi->courseLtiRegistrationsSumByCourse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The start date (format: DD-MM-YYYY) | |
| **till** | **\DateTime**| The end date (format: DD-MM-YYYY) | |
| **courseid** | **int**| The identifier of the course (optional) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseLtiRegistrationsSumByCourse200Response**](../Model/CourseLtiRegistrationsSumByCourse200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
