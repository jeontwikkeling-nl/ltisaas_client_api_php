# LtiSaasApi\LTIToolsApi

All URIs are relative to https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**courseToolAdd()**](LTIToolsApi.md#courseToolAdd) | **GET** /course/tool/add | Add new tool to a course |
| [**courseToolDelete()**](LTIToolsApi.md#courseToolDelete) | **GET** /course/tool/delete | Delete a specific course tool |
| [**courseToolList()**](LTIToolsApi.md#courseToolList) | **GET** /course/tool/list | List all LTI tools within a course |
| [**courseToolUpdate()**](LTIToolsApi.md#courseToolUpdate) | **GET** /course/tool/update | Update a specific course tool |


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


$apiInstance = new LtiSaasApi\Api\LTIToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The ID of the course
$ltiversion = 'ltiversion_example'; // string | The version of LTI. Either LTI Advantage or Legacy LTI
$name = 'name_example'; // string | The name
$publishmode = 'publishmode_example'; // string | The mode of publishing (course or activity)
$learningobjectid = 56; // int | The ID of the learning object. Only required if publishmode is set to activity
$maxenrolled = 56; // int | The maximum enrollment. Defaults to unlimited (0).
$roleinstructor = 56; // int | The role of the instructor. Defaults to 3
$rolelearner = 56; // int | The role of the learner. Defaults to 5
$provisioningmodeinstructor = 56; // int | The provisioning mode of the instructor. Defaults to 2
$provisioningmodelearner = 56; // int | The provisioning mode of the learner. Defaults to 1
$gradesync = 56; // int | Whether grade sync is enabled. Grade synchronization (1=Yes, 0=No)
$gradesynccompletion = 56; // int | Require course or activity completion prior to grade synchronisation (1=Yes, 0=No)
$membersync = 56; // int | Whether member sync is enabled. User synchronisation (1=Yes, 0=No)
$membersyncmode = 56; // int | User synchronisation mode (1=Enrol new and unenrol missing users, 2=Enrol new users, 3=Unenrol missing      *          users)
$enrolperiod = 56; // int | The duration of the enrolment (in seconds)
$enrolstartdate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The enrolment start date (YYYY-MM-DDTHH:mm)
$enrolenddate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The enrolment end date (YYYY-MM-DDTHH:mm)

try {
    $result = $apiInstance->courseToolAdd($courseid, $ltiversion, $name, $publishmode, $learningobjectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LTIToolsApi->courseToolAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The ID of the course | |
| **ltiversion** | **string**| The version of LTI. Either LTI Advantage or Legacy LTI | |
| **name** | **string**| The name | |
| **publishmode** | **string**| The mode of publishing (course or activity) | |
| **learningobjectid** | **int**| The ID of the learning object. Only required if publishmode is set to activity | [optional] |
| **maxenrolled** | **int**| The maximum enrollment. Defaults to unlimited (0). | [optional] |
| **roleinstructor** | **int**| The role of the instructor. Defaults to 3 | [optional] |
| **rolelearner** | **int**| The role of the learner. Defaults to 5 | [optional] |
| **provisioningmodeinstructor** | **int**| The provisioning mode of the instructor. Defaults to 2 | [optional] |
| **provisioningmodelearner** | **int**| The provisioning mode of the learner. Defaults to 1 | [optional] |
| **gradesync** | **int**| Whether grade sync is enabled. Grade synchronization (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **gradesynccompletion** | **int**| Require course or activity completion prior to grade synchronisation (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **membersync** | **int**| Whether member sync is enabled. User synchronisation (1&#x3D;Yes, 0&#x3D;No) | [optional] |
| **membersyncmode** | **int**| User synchronisation mode (1&#x3D;Enrol new and unenrol missing users, 2&#x3D;Enrol new users, 3&#x3D;Unenrol missing      *          users) | [optional] |
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


$apiInstance = new LtiSaasApi\Api\LTIToolsApi(
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
    echo 'Exception when calling LTIToolsApi->courseToolDelete: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new LtiSaasApi\Api\LTIToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The ID of the course
$ltitype = 'ltitype_example'; // string | The version of LTI. Either LTI Advantage or Legacy LTI

try {
    $result = $apiInstance->courseToolList($courseid, $ltitype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LTIToolsApi->courseToolList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **courseid** | **int**| The ID of the course | |
| **ltitype** | **string**| The version of LTI. Either LTI Advantage or Legacy LTI | [optional] |

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


$apiInstance = new LtiSaasApi\Api\LTIToolsApi(
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
$membersyncmode = 56; // int | User synchronisation mode (1=Enrol new and unenrol missing users, 2=Enrol new users, 3=Unenrol      *           missing users)
$enrolperiod = 56; // int | The duration of the enrolment (in seconds)
$enrolstartdate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The enrolment start date (YYYY-MM-DDTHH:mm)
$enrolenddate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The enrolment end date (YYYY-MM-DDTHH:mm)

try {
    $result = $apiInstance->courseToolUpdate($toolid, $ltiversion, $name, $publishmode, $learningobjectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LTIToolsApi->courseToolUpdate: ', $e->getMessage(), PHP_EOL;
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
| **membersyncmode** | **int**| User synchronisation mode (1&#x3D;Enrol new and unenrol missing users, 2&#x3D;Enrol new users, 3&#x3D;Unenrol      *           missing users) | [optional] |
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
