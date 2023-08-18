# LtiSaasApi\DefaultApi

All URIs are relative to https://provider42luuk.web11.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**courseAdd()**](DefaultApi.md#courseAdd) | **GET** /course/add | Create a new course |
| [**courseDelete()**](DefaultApi.md#courseDelete) | **GET** /course/delete | Delete an existing course by its ID |
| [**courseLearningObjectDelete()**](DefaultApi.md#courseLearningObjectDelete) | **GET** /course/learningobject/delete | Delete a specific learning object |
| [**courseLearningObjectScromAdd()**](DefaultApi.md#courseLearningObjectScromAdd) | **POST** /course/learningobject/scrom/add | Add an SCORM package to a course |
| [**courseLearningobjectList()**](DefaultApi.md#courseLearningobjectList) | **GET** /course/learningobject/list | Get learning objects for a course |
| [**courseLearningobjectScormUpdate()**](DefaultApi.md#courseLearningobjectScormUpdate) | **POST** /course/learningobject/scrom/update | Update SCORM Learning Object |
| [**courseList()**](DefaultApi.md#courseList) | **GET** /course/list | Retrieve all courses |
| [**courseLtiRegistrationsByDay()**](DefaultApi.md#courseLtiRegistrationsByDay) | **GET** /course/lti/registrations_by_day | Get LTI registrations by day |
| [**courseLtiRegistrationsSumByCourse()**](DefaultApi.md#courseLtiRegistrationsSumByCourse) | **GET** /course/lti/registrations_sum_by_course | Get total LTI registrations per course |
| [**courseToolAdd()**](DefaultApi.md#courseToolAdd) | **GET** /course/tool/add | Add new tool to a course |
| [**courseToolDelete()**](DefaultApi.md#courseToolDelete) | **GET** /course/tool/delete | Delete a specific course tool |
| [**courseToolList()**](DefaultApi.md#courseToolList) | **GET** /course/tool/list | List all LTI tools within a course |
| [**courseToolUpdate()**](DefaultApi.md#courseToolUpdate) | **GET** /course/tool/update | Update a specific course tool |
| [**courseUpdate()**](DefaultApi.md#courseUpdate) | **GET** /course/update | Update an existing course |
| [**tokenAdd()**](DefaultApi.md#tokenAdd) | **GET** /token/add | Add a new API token |
| [**tokenDelete()**](DefaultApi.md#tokenDelete) | **GET** /token/delete | Delete an API token |
| [**tokenList()**](DefaultApi.md#tokenList) | **GET** /token/list | Get list of API tokens |
| [**userDelete()**](DefaultApi.md#userDelete) | **GET** /user/delete | Delete a user by ID |
| [**userDeleteBulk()**](DefaultApi.md#userDeleteBulk) | **GET** /user/delete_bulk | Delete multiple users by IDs |
| [**userList()**](DefaultApi.md#userList) | **GET** /user/list | Get list of users in a tool |


## `courseAdd()`

```php
courseAdd($coursename): \LtiSaasApi\Model\CourseAdd200Response
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursename = 'coursename_example'; // string | The name of the course to be created

try {
    $result = $apiInstance->courseAdd($coursename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coursename** | **string**| The name of the course to be created | |

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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->courseDelete: ', $e->getMessage(), PHP_EOL;
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

## `courseLearningObjectDelete()`

```php
courseLearningObjectDelete($learningobjectid): \LtiSaasApi\Model\CourseUpdate200Response
```

Delete a specific learning object

This endpoint deletes a specific learning object based on the given identifier.      *     It returns a success response upon successful deletion and relevant error responses for invalid requests or unauthorized      *     access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learningobjectid = 56; // int | The identifier of the learning object

try {
    $result = $apiInstance->courseLearningObjectDelete($learningobjectid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLearningObjectDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learningobjectid** | **int**| The identifier of the learning object | |

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

## `courseLearningObjectScromAdd()`

```php
courseLearningObjectScromAdd($courseid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride): \LtiSaasApi\Model\CourseLearningObjectScromAdd200Response
```

Add an SCORM package to a course

This endpoint allows adding a SCORM package as a learning object to a specified course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The unique identifier of the course
$packagefile = "/path/to/file.txt"; // \SplFileObject | The .zip file of the SCORM package
$name = 'name_example'; // string | The name of the SCORM package
$popup = 56; // int | Indicates if the SCORM package should open in a new window (1) or not (0)
$width = 56; // int | The display width for the SCORM package
$height = 56; // int | The display height for the SCORM package
$grademethod = 56; // int | The grading method for the SCORM package (0: learning objects, 1: highest grade, 2: average      *                     grade, 3: sum grade)
$maxgrade = 56; // int | The maximum grade possible for the SCORM package
$maxattempt = 56; // int | The maximum number of attempts allowed for the SCORM package
$whatgrade = 56; // int | The grading strategy for multiple attempts (0: highest attempt, 1: average grade, 2: first      *                     attempt)
$forcenewattempt = 56; // int | Policy for forcing new attempts (0: no, 1: every new attempt is a new grade, 2: every new      *                     attempt resets previous grades)
$lastattemptlock = 56; // int | Indicates if the SCORM package should be locked after the last attempt (0: no, 1: yes)
$autocommit = 56; // int | Indicates if the SCORM package grades should auto commit (0: no, 1: yes)
$masteryoverride = 56; // int | Indicates if the mastery grade overrides the max grade (0: no, 1: yes)

try {
    $result = $apiInstance->courseLearningObjectScromAdd($courseid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLearningObjectScromAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The unique identifier of the course | |
| **packagefile** | **\SplFileObject****\SplFileObject**| The .zip file of the SCORM package | |
| **name** | **string**| The name of the SCORM package | |
| **popup** | **int**| Indicates if the SCORM package should open in a new window (1) or not (0) | [optional] |
| **width** | **int**| The display width for the SCORM package | [optional] |
| **height** | **int**| The display height for the SCORM package | [optional] |
| **grademethod** | **int**| The grading method for the SCORM package (0: learning objects, 1: highest grade, 2: average      *                     grade, 3: sum grade) | [optional] |
| **maxgrade** | **int**| The maximum grade possible for the SCORM package | [optional] |
| **maxattempt** | **int**| The maximum number of attempts allowed for the SCORM package | [optional] |
| **whatgrade** | **int**| The grading strategy for multiple attempts (0: highest attempt, 1: average grade, 2: first      *                     attempt) | [optional] |
| **forcenewattempt** | **int**| Policy for forcing new attempts (0: no, 1: every new attempt is a new grade, 2: every new      *                     attempt resets previous grades) | [optional] |
| **lastattemptlock** | **int**| Indicates if the SCORM package should be locked after the last attempt (0: no, 1: yes) | [optional] |
| **autocommit** | **int**| Indicates if the SCORM package grades should auto commit (0: no, 1: yes) | [optional] |
| **masteryoverride** | **int**| Indicates if the mastery grade overrides the max grade (0: no, 1: yes) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseLearningObjectScromAdd200Response**](../Model/CourseLearningObjectScromAdd200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseLearningobjectList()`

```php
courseLearningobjectList($courseid): \LtiSaasApi\Model\CourseLearningobjectList200Response
```

Get learning objects for a course

This endpoint retrieves a list of learning objects associated with a specific course identified by its      *     unique ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The unique identifier of the course

try {
    $result = $apiInstance->courseLearningobjectList($courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLearningobjectList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The unique identifier of the course | |

### Return type

[**\LtiSaasApi\Model\CourseLearningobjectList200Response**](../Model/CourseLearningobjectList200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseLearningobjectScormUpdate()`

```php
courseLearningobjectScormUpdate($learningobjectid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride): \LtiSaasApi\Model\CourseUpdate200Response
```

Update SCORM Learning Object

This endpoint enables the updating of a SCORM learning object within a course. Required parameters include      *     the ID of the learning object, the .zip package file, name, popup mode, and other grading and display properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learningobjectid = 56; // int | The ID of the learning object
$packagefile = "/path/to/file.txt"; // \SplFileObject | The .zip file of the SCORM package
$name = 'name_example'; // string | The name of the SCORM package
$popup = 56; // int | Indicates if the SCORM package should open in a new window (1) or not (0)
$width = 56; // int | The display width for the SCORM package
$height = 56; // int | The display height for the SCORM package
$grademethod = 56; // int | The grading method for the SCORM package (0: learning objects, 1: highest grade, 2: average      *                     grade, 3: sum grade)
$maxgrade = 56; // int | The maximum grade possible for the SCORM package
$maxattempt = 56; // int | The maximum number of attempts allowed for the SCORM package
$whatgrade = 56; // int | The grading strategy for multiple attempts (0: highest attempt, 1: average grade, 2: first      *                     attempt)
$forcenewattempt = 56; // int | Policy for forcing new attempts (0: no, 1: every new attempt is a new grade, 2: every new      *                     attempt resets previous grades)
$lastattemptlock = 56; // int | Indicates if the SCORM package should be locked after the last attempt (0: no, 1: yes)
$autocommit = 56; // int | Indicates if the SCORM package grades should auto commit (0: no, 1: yes)
$masteryoverride = 56; // int | Indicates if the mastery grade overrides the max grade (0: no, 1: yes)

try {
    $result = $apiInstance->courseLearningobjectScormUpdate($learningobjectid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLearningobjectScormUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **learningobjectid** | **int**| The ID of the learning object | |
| **packagefile** | **\SplFileObject****\SplFileObject**| The .zip file of the SCORM package | [optional] |
| **name** | **string**| The name of the SCORM package | [optional] |
| **popup** | **int**| Indicates if the SCORM package should open in a new window (1) or not (0) | [optional] |
| **width** | **int**| The display width for the SCORM package | [optional] |
| **height** | **int**| The display height for the SCORM package | [optional] |
| **grademethod** | **int**| The grading method for the SCORM package (0: learning objects, 1: highest grade, 2: average      *                     grade, 3: sum grade) | [optional] |
| **maxgrade** | **int**| The maximum grade possible for the SCORM package | [optional] |
| **maxattempt** | **int**| The maximum number of attempts allowed for the SCORM package | [optional] |
| **whatgrade** | **int**| The grading strategy for multiple attempts (0: highest attempt, 1: average grade, 2: first      *                     attempt) | [optional] |
| **forcenewattempt** | **int**| Policy for forcing new attempts (0: no, 1: every new attempt is a new grade, 2: every new      *                     attempt resets previous grades) | [optional] |
| **lastattemptlock** | **int**| Indicates if the SCORM package should be locked after the last attempt (0: no, 1: yes) | [optional] |
| **autocommit** | **int**| Indicates if the SCORM package grades should auto commit (0: no, 1: yes) | [optional] |
| **masteryoverride** | **int**| Indicates if the mastery grade overrides the max grade (0: no, 1: yes) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseUpdate200Response**](../Model/CourseUpdate200Response.md)

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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->courseList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseList: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date (format: DD-MM-YYYY)
$toolid = 56; // int | The identifier of the LTI tool (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsByDay($from, $till, $toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLtiRegistrationsByDay: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date (format: DD-MM-YYYY)
$courseid = 56; // int | The identifier of the course (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsSumByCourse($from, $till, $courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLtiRegistrationsSumByCourse: ', $e->getMessage(), PHP_EOL;
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

## `courseToolAdd()`

```php
courseToolAdd($courseid, $ltiversion, $name, $publishmode, $learningobjectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate): \LtiSaasApi\Model\CourseToolAdd200Response
```

Add new tool to a course

This endpoint allows you to add a new tool to an existing course. You must provide the course ID and the      *     details of the tool to be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The ID of the course
$ltiversion = 'ltiversion_example'; // string | The version of LTI
$name = 'name_example'; // string | The name
$publishmode = 'publishmode_example'; // string | The mode of publishing (course or activity)
$learningobjectid = 56; // int | The ID of the learning object. Only required if publishmode is set to activity
$maxenrolled = 56; // int | The maximum enrollment
$roleinstructor = 56; // int | The role of the instructor
$rolelearner = 56; // int | The role of the learner
$provisioningmodeinstructor = 56; // int | The provisioning mode of the instructor
$provisioningmodelearner = 56; // int | The provisioning mode of the learner
$gradesync = 56; // int | Whether grade sync is enabled. Grade synchronization (1=Yes, 0=No)
$gradesynccompletion = 56; // int | Require course or activity completion prior to grade synchronisation (1=Yes, 0=No)
$membersync = 56; // int | Whether member sync is enabled. User synchronisation (1=Yes, 0=No)
$membersyncmode = 56; // int | User synchronisation mode (1=Enrol new and unenrol missing users, 2=Enrol new users, 3=Unenrol missing users)
$enrolperiod = 56; // int | The duration of the enrolment (in seconds)
$enrolstartdate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The enrolment start date (YYYY-MM-DDTHH:mm)
$enrolenddate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The enrolment end date (YYYY-MM-DDTHH:mm)

try {
    $result = $apiInstance->courseToolAdd($courseid, $ltiversion, $name, $publishmode, $learningobjectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseToolAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The ID of the course | |
| **ltiversion** | **string**| The version of LTI | |
| **name** | **string**| The name | |
| **publishmode** | **string**| The mode of publishing (course or activity) | |
| **learningobjectid** | **int**| The ID of the learning object. Only required if publishmode is set to activity | [optional] |
| **maxenrolled** | **int**| The maximum enrollment | [optional] |
| **roleinstructor** | **int**| The role of the instructor | [optional] |
| **rolelearner** | **int**| The role of the learner | [optional] |
| **provisioningmodeinstructor** | **int**| The provisioning mode of the instructor | [optional] |
| **provisioningmodelearner** | **int**| The provisioning mode of the learner | [optional] |
| **gradesync** | **int**| Whether grade sync is enabled. Grade synchronization (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **gradesynccompletion** | **int**| Require course or activity completion prior to grade synchronisation (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **membersync** | **int**| Whether member sync is enabled. User synchronisation (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **membersyncmode** | **int**| User synchronisation mode (1&#x3D;Enrol new and unenrol missing users, 2&#x3D;Enrol new users, 3&#x3D;Unenrol missing users) | [optional] |
| **enrolperiod** | **int**| The duration of the enrolment (in seconds) | [optional] |
| **enrolstartdate** | **\DateTime**| The enrolment start date (YYYY-MM-DDTHH:mm) | [optional] |
| **enrolenddate** | **\DateTime**| The enrolment end date (YYYY-MM-DDTHH:mm) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseToolAdd200Response**](../Model/CourseToolAdd200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseToolDelete()`

```php
courseToolDelete($toolid): \LtiSaasApi\Model\CourseUpdate200Response
```

Delete a specific course tool

This endpoint deletes a specific tool in a course. Upon successful operation, the tool will be removed from      *     the course. If the tool is not found or cannot be deleted due to any reason, appropriate error responses will be      *     returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$toolid = 56; // int | The identifier of the lti tool

try {
    $result = $apiInstance->courseToolDelete($toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseToolDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolid** | **int**| The identifier of the lti tool | |

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

## `courseToolList()`

```php
courseToolList($courseid, $ltitype): \LtiSaasApi\Model\CourseToolList200Response
```

List all LTI tools within a course

This endpoint will list all the LTI tools associated within a course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The ID of the course
$ltitype = 'ltitype_example'; // string | The version of LTI

try {
    $result = $apiInstance->courseToolList($courseid, $ltitype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseToolList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The ID of the course | |
| **ltitype** | **string**| The version of LTI | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseToolList200Response**](../Model/CourseToolList200Response.md)

### Authorization

[token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `courseToolUpdate()`

```php
courseToolUpdate($toolid, $ltiversion, $name, $publishmode, $learningobjectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate): \LtiSaasApi\Model\CourseToolAdd200Response
```

Update a specific course tool

This endpoint updates a specific tool in a course. Detailed information about the tool such as tool's      *     identifier, name, ltiversion, etc. need to be provided. Successful operation will update the tool's details in the      *     course.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: token
$config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = LtiSaasApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$toolid = 56; // int | The ID of the lti tool
$ltiversion = 'ltiversion_example'; // string | The version of LTI
$name = 'name_example'; // string | The name
$publishmode = 'publishmode_example'; // string | The mode of publishing (course or activity)
$learningobjectid = 56; // int | The ID of the learning object. Only required if publishmode is set to activity
$maxenrolled = 56; // int | The maximum enrollment
$roleinstructor = 56; // int | The role of the instructor
$rolelearner = 56; // int | The role of the learner
$provisioningmodeinstructor = 56; // int | The provisioning mode of the instructor
$provisioningmodelearner = 56; // int | The provisioning mode of the learner
$gradesync = 56; // int | Whether grade sync is enabled. Grade synchronization (1=Yes, 0=No)
$gradesynccompletion = 56; // int | Require course or activity completion prior to grade synchronisation (1=Yes, 0=No)
$membersync = 56; // int | Whether member sync is enabled. User synchronisation (1=Yes, 0=No)
$membersyncmode = 56; // int | User synchronisation mode (1=Enrol new and unenrol missing users, 2=Enrol new users, 3=Unenrol missing users)
$enrolperiod = 56; // int | The duration of the enrolment (in seconds)
$enrolstartdate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The enrolment start date (YYYY-MM-DDTHH:mm)
$enrolenddate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The enrolment end date (YYYY-MM-DDTHH:mm)

try {
    $result = $apiInstance->courseToolUpdate($toolid, $ltiversion, $name, $publishmode, $learningobjectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseToolUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toolid** | **int**| The ID of the lti tool | |
| **ltiversion** | **string**| The version of LTI | [optional] |
| **name** | **string**| The name | [optional] |
| **publishmode** | **string**| The mode of publishing (course or activity) | [optional] |
| **learningobjectid** | **int**| The ID of the learning object. Only required if publishmode is set to activity | [optional] |
| **maxenrolled** | **int**| The maximum enrollment | [optional] |
| **roleinstructor** | **int**| The role of the instructor | [optional] |
| **rolelearner** | **int**| The role of the learner | [optional] |
| **provisioningmodeinstructor** | **int**| The provisioning mode of the instructor | [optional] |
| **provisioningmodelearner** | **int**| The provisioning mode of the learner | [optional] |
| **gradesync** | **int**| Whether grade sync is enabled. Grade synchronization (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **gradesynccompletion** | **int**| Require course or activity completion prior to grade synchronisation (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **membersync** | **int**| Whether member sync is enabled. User synchronisation (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **membersyncmode** | **int**| User synchronisation mode (1&#x3D;Enrol new and unenrol missing users, 2&#x3D;Enrol new users, 3&#x3D;Unenrol missing users) | [optional] |
| **enrolperiod** | **int**| The duration of the enrolment (in seconds) | [optional] |
| **enrolstartdate** | **\DateTime**| The enrolment start date (YYYY-MM-DDTHH:mm) | [optional] |
| **enrolenddate** | **\DateTime**| The enrolment end date (YYYY-MM-DDTHH:mm) | [optional] |

### Return type

[**\LtiSaasApi\Model\CourseToolAdd200Response**](../Model/CourseToolAdd200Response.md)

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
courseUpdate($coursename, $courseid): \LtiSaasApi\Model\CourseUpdate200Response
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursename = 'coursename_example'; // string | The name of the course to be created
$courseid = 56; // int | The unique identifier of the course to be deleted

try {
    $result = $apiInstance->courseUpdate($coursename, $courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coursename** | **string**| The name of the course to be created | |
| **courseid** | **int**| The unique identifier of the course to be deleted | |

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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->tokenAdd: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->tokenDelete: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tokenList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tokenList: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->userDelete: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->userDeleteBulk: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->userList: ', $e->getMessage(), PHP_EOL;
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
