# LtiSaasApi\LearningObjectsApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**courseLearningObjectDelete()**](LearningObjectsApi.md#courseLearningObjectDelete) | **GET** /course/learningobject/delete | Delete a specific learning object |
| [**courseLearningObjectScromAdd()**](LearningObjectsApi.md#courseLearningObjectScromAdd) | **POST** /course/learningobject/scrom/add | Add an SCORM package to a course |
| [**courseLearningobjectList()**](LearningObjectsApi.md#courseLearningobjectList) | **GET** /course/learningobject/list | Get learning objects for a course |
| [**courseLearningobjectScormUpdate()**](LearningObjectsApi.md#courseLearningobjectScormUpdate) | **POST** /course/learningobject/scrom/update | Update SCORM Learning Object |


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


$apiInstance = new LtiSaasApi\Api\LearningObjectsApi(
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
    echo 'Exception when calling LearningObjectsApi->courseLearningObjectDelete: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\LearningObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The unique identifier of the course
$packagefile = '/path/to/file.txt'; // \SplFileObject | The .zip file of the SCORM package
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
    echo 'Exception when calling LearningObjectsApi->courseLearningObjectScromAdd: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\LearningObjectsApi(
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
    echo 'Exception when calling LearningObjectsApi->courseLearningobjectList: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\LearningObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learningobjectid = 56; // int | The ID of the learning object
$packagefile = '/path/to/file.txt'; // \SplFileObject | The .zip file of the SCORM package
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
    echo 'Exception when calling LearningObjectsApi->courseLearningobjectScormUpdate: ', $e->getMessage(), PHP_EOL;
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
