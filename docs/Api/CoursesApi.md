# LtiSaasApi\CoursesApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**courseAdd()**](CoursesApi.md#courseAdd) | **GET** /course/add | Create a new course |
| [**courseDelete()**](CoursesApi.md#courseDelete) | **GET** /course/delete | Delete an existing course by its ID |
| [**courseGradeSet()**](CoursesApi.md#courseGradeSet) | **POST** /course/grade | Set or reset a user&#39;s course grade |
| [**courseList()**](CoursesApi.md#courseList) | **GET** /course/list | Retrieve all courses |
| [**courseUpdate()**](CoursesApi.md#courseUpdate) | **GET** /course/update | Update an existing course |


## `courseAdd()`

```php
courseAdd($coursename, $coursenameshort): \LtiSaasApi\Model\CourseAdd200Response
```

Create a new course

This endpoint allows you to create a new course. The course name should be passed as a query parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursename = 'coursename_example'; // string | The name of the course to be created
$coursenameshort = 'coursenameshort_example'; // string | The shortname of the course to be created

try {
    $result = $apiInstance->courseAdd($coursename, $coursenameshort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->courseAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coursename** | **string**| The name of the course to be created | |
| **coursenameshort** | **string**| The shortname of the course to be created | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseAdd200Response**](../Model/CourseAdd200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseDelete()`

```php
courseDelete($courseid): \LtiSaasApi\Model\CourseDelete200Response
```

Delete an existing course by its ID

This endpoint allows you to delete an existing course by providing its unique identifier (course ID).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The unique identifier of the course to be deleted

try {
    $result = $apiInstance->courseDelete($courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->courseDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The unique identifier of the course to be deleted | |

### Return type

[**\LtiSaasApi\Model\CourseDelete200Response**](../Model/CourseDelete200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseGradeSet()`

```php
courseGradeSet($userid, $courseid, $grade, $reset): \LtiSaasApi\Model\CourseGradeSet200Response
```

Set or reset a user's course grade

Set or reset a user's course grade. Grade between 0 and 100, interpreted as a manual entry in the Moodle gradebook. If reset=1, removes the override and restores the original calculated grade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userid = 56; // int | Moodle user ID of the student
$courseid = 56; // int | Identifier of the course
$grade = 56; // int | Grade between 0 and 100
$reset = 56; // int | If 1, resets the course grade to its original calculated value (removes override)

try {
    $result = $apiInstance->courseGradeSet($userid, $courseid, $grade, $reset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->courseGradeSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userid** | **int**| Moodle user ID of the student | |
| **courseid** | **int**| Identifier of the course | |
| **grade** | **int**| Grade between 0 and 100 | |
| **reset** | **int**| If 1, resets the course grade to its original calculated value (removes override) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseGradeSet200Response**](../Model/CourseGradeSet200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseList()`

```php
courseList(): \LtiSaasApi\Model\CourseList200Response
```

Retrieve all courses

Fetches a list of courses along with associated LTI information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->courseList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->courseList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\LtiSaasApi\Model\CourseList200Response**](../Model/CourseList200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseUpdate()`

```php
courseUpdate($coursename, $courseid, $coursenameshort): \LtiSaasApi\Model\CourseUpdate200Response
```

Update an existing course

This endpoint allows you to update an existing course. The course id should be passed as a query      *     parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursename = 'coursename_example'; // string | The name of the course to be created
$courseid = 56; // int | The unique identifier of the course to be deleted
$coursenameshort = 'coursenameshort_example'; // string | The name of the course to be created

try {
    $result = $apiInstance->courseUpdate($coursename, $courseid, $coursenameshort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->courseUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coursename** | **string**| The name of the course to be created | |
| **courseid** | **int**| The unique identifier of the course to be deleted | |
| **coursenameshort** | **string**| The name of the course to be created | [optional] |

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
