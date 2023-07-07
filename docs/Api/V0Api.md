# Swagger\Client\V0Api

All URIs are relative to *https://provider42luuk.web11.webv.nl/local/ltisaas/api.php/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courseAdd**](V0Api.md#courseadd) | **GET** /course/add | Add a new course
[**courseDelete**](V0Api.md#coursedelete) | **GET** /course/delete | Delete an existing course by id
[**courseLearningObjectDelete**](V0Api.md#courselearningobjectdelete) | **GET** /course/learningobject/delete | 
[**courseLearningObjectScromAdd**](V0Api.md#courselearningobjectscromadd) | **GET** /course/learningobject/scrom/add | 
[**courseLearningobjectList**](V0Api.md#courselearningobjectlist) | **GET** /course/learningobject/list | 
[**courseLearningobjectScormUpdate**](V0Api.md#courselearningobjectscormupdate) | **GET** /course/learningobject/scrom/update | 
[**courseList**](V0Api.md#courselist) | **GET** /course/list | Get all courses
[**courseLtiRegistrationsByDay**](V0Api.md#courseltiregistrationsbyday) | **GET** /course/lti/registrations_by_day | 
[**courseLtiRegistrationsSumByCourse**](V0Api.md#courseltiregistrationssumbycourse) | **GET** /course/lti/registrations_sum_by_course | 
[**courseToolAdd**](V0Api.md#coursetooladd) | **GET** /course/tool/add | 
[**courseToolDelete**](V0Api.md#coursetooldelete) | **GET** /course/tool/delete | 
[**courseToolUpdate**](V0Api.md#coursetoolupdate) | **GET** /course/tool/update | 
[**tokenAdd**](V0Api.md#tokenadd) | **GET** /token/add | 
[**tokenDelete**](V0Api.md#tokendelete) | **GET** /token/delete | 
[**tokenList**](V0Api.md#tokenlist) | **GET** /token/list | 
[**userDelete**](V0Api.md#userdelete) | **GET** /user/delete | 
[**userDeleteBulk**](V0Api.md#userdeletebulk) | **GET** /user/delete_bulk | 
[**userList**](V0Api.md#userlist) | **GET** /user/list | 

# **courseAdd**
> \Swagger\Client\Model\InlineResponse2001 courseAdd($coursename)

Add a new course

With this call you can add a new course.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coursename = "coursename_example"; // string | The name of the course

try {
    $result = $apiInstance->courseAdd($coursename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coursename** | **string**| The name of the course |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseDelete**
> \Swagger\Client\Model\InlineResponse2002 courseDelete($courseid)

Delete an existing course by id

With this call you can delete an existing course by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$courseid = 56; // int | The identifier of the course

try {
    $result = $apiInstance->courseDelete($courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **courseid** | **int**| The identifier of the course |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearningObjectDelete**
> \Swagger\Client\Model\InlineResponse2002 courseLearningObjectDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The identifier of the learning object

try {
    $result = $apiInstance->courseLearningObjectDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseLearningObjectDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the learning object |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearningObjectScromAdd**
> \Swagger\Client\Model\InlineResponse2004 courseLearningObjectScromAdd($courseid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$courseid = 56; // int | The ID of the course
$packagefile = "packagefile_example"; // string | The .zip package file
$name = "name_example"; // string | The name
$popup = 56; // int | Popup mode
$width = 56; // int | The width
$height = 56; // int | The height
$grademethod = 56; // int | The grade method
$maxgrade = 56; // int | The maximum grade
$maxattempt = 56; // int | The maximum attempt
$whatgrade = 56; // int | The grading strategy
$forcenewattempt = 56; // int | Force new attempt policy
$lastattemptlock = 56; // int | Whether to lock after the last attempt
$autocommit = 56; // int | Whether auto commit is enabled
$masteryoverride = 56; // int | Whether mastery override is enabled

try {
    $result = $apiInstance->courseLearningObjectScromAdd($courseid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseLearningObjectScromAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **courseid** | **int**| The ID of the course |
 **packagefile** | **string****string**| The .zip package file |
 **name** | **string**| The name |
 **popup** | **int**| Popup mode | [optional]
 **width** | **int**| The width | [optional]
 **height** | **int**| The height | [optional]
 **grademethod** | **int**| The grade method | [optional]
 **maxgrade** | **int**| The maximum grade | [optional]
 **maxattempt** | **int**| The maximum attempt | [optional]
 **whatgrade** | **int**| The grading strategy | [optional]
 **forcenewattempt** | **int**| Force new attempt policy | [optional]
 **lastattemptlock** | **int**| Whether to lock after the last attempt | [optional]
 **autocommit** | **int**| Whether auto commit is enabled | [optional]
 **masteryoverride** | **int**| Whether mastery override is enabled | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearningobjectList**
> \Swagger\Client\Model\InlineResponse2003 courseLearningobjectList($courseid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$courseid = 56; // int | The identifier of the course

try {
    $result = $apiInstance->courseLearningobjectList($courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseLearningobjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **courseid** | **int**| The identifier of the course |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLearningobjectScormUpdate**
> \Swagger\Client\Model\InlineResponse2002 courseLearningobjectScormUpdate($loid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loid = 56; // int | The ID of the learning object
$packagefile = "packagefile_example"; // string | The .zip package file
$name = "name_example"; // string | The name
$popup = 56; // int | Popup mode
$width = 56; // int | The width
$height = 56; // int | The height
$grademethod = 56; // int | The grade method
$maxgrade = 56; // int | The maximum grade
$maxattempt = 56; // int | The maximum attempt
$whatgrade = 56; // int | The grading strategy
$forcenewattempt = 56; // int | Force new attempt policy
$lastattemptlock = 56; // int | Whether to lock after the last attempt
$autocommit = 56; // int | Whether auto commit is enabled
$masteryoverride = 56; // int | Whether mastery override is enabled

try {
    $result = $apiInstance->courseLearningobjectScormUpdate($loid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseLearningobjectScormUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loid** | **int**| The ID of the learning object |
 **packagefile** | **string****string**| The .zip package file |
 **name** | **string**| The name |
 **popup** | **int**| Popup mode | [optional]
 **width** | **int**| The width | [optional]
 **height** | **int**| The height | [optional]
 **grademethod** | **int**| The grade method | [optional]
 **maxgrade** | **int**| The maximum grade | [optional]
 **maxattempt** | **int**| The maximum attempt | [optional]
 **whatgrade** | **int**| The grading strategy | [optional]
 **forcenewattempt** | **int**| Force new attempt policy | [optional]
 **lastattemptlock** | **int**| Whether to lock after the last attempt | [optional]
 **autocommit** | **int**| Whether auto commit is enabled | [optional]
 **masteryoverride** | **int**| Whether mastery override is enabled | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseList**
> \Swagger\Client\Model\InlineResponse200 courseList()

Get all courses

This call collects courses with additional LTI information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->courseList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLtiRegistrationsByDay**
> \Swagger\Client\Model\InlineResponse2005 courseLtiRegistrationsByDay($from, $till, $toolid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20"); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime("2013-10-20"); // \DateTime | The end date (format: DD-MM-YYYY)
$toolid = 56; // int | The identifier of the LTI tool (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsByDay($from, $till, $toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseLtiRegistrationsByDay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| The start date (format: DD-MM-YYYY) |
 **till** | **\DateTime**| The end date (format: DD-MM-YYYY) |
 **toolid** | **int**| The identifier of the LTI tool (optional) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseLtiRegistrationsSumByCourse**
> \Swagger\Client\Model\InlineResponse2003 courseLtiRegistrationsSumByCourse($from, $till, $courseid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20"); // \DateTime | The start date (format: YYYY-MM-DD)
$till = new \DateTime("2013-10-20"); // \DateTime | The end date (format: YYYY-MM-DD)
$courseid = 56; // int | The identifier of the course (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsSumByCourse($from, $till, $courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseLtiRegistrationsSumByCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| The start date (format: YYYY-MM-DD) |
 **till** | **\DateTime**| The end date (format: YYYY-MM-DD) |
 **courseid** | **int**| The identifier of the course (optional) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseToolAdd**
> \Swagger\Client\Model\InlineResponse2006 courseToolAdd($courseid, $ltiversion, $name, $publishmode, $objectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$courseid = 56; // int | The ID of the course
$ltiversion = "ltiversion_example"; // string | The version of LTI
$name = "name_example"; // string | The name
$publishmode = "publishmode_example"; // string | The mode of publishing
$objectid = 56; // int | The ID of the object
$maxenrolled = 56; // int | The maximum enrollment
$roleinstructor = 56; // int | The role of the instructor
$rolelearner = 56; // int | The role of the learner
$provisioningmodeinstructor = 56; // int | The provisioning mode of the instructor
$provisioningmodelearner = 56; // int | The provisioning mode of the learner
$gradesync = 56; // int | Whether grade sync is enabled
$gradesynccompletion = 56; // int | Whether grade sync completion is enabled
$membersync = 56; // int | Whether member sync is enabled
$membersyncmode = 56; // int | The mode of member sync
$enrolperiod = 56; // int | The enrollment period in seconds
$enrolstartdate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the enrollment
$enrolenddate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the enrollment

try {
    $result = $apiInstance->courseToolAdd($courseid, $ltiversion, $name, $publishmode, $objectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseToolAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **courseid** | **int**| The ID of the course |
 **ltiversion** | **string**| The version of LTI |
 **name** | **string**| The name |
 **publishmode** | **string**| The mode of publishing |
 **objectid** | **int**| The ID of the object | [optional]
 **maxenrolled** | **int**| The maximum enrollment | [optional]
 **roleinstructor** | **int**| The role of the instructor | [optional]
 **rolelearner** | **int**| The role of the learner | [optional]
 **provisioningmodeinstructor** | **int**| The provisioning mode of the instructor | [optional]
 **provisioningmodelearner** | **int**| The provisioning mode of the learner | [optional]
 **gradesync** | **int**| Whether grade sync is enabled | [optional]
 **gradesynccompletion** | **int**| Whether grade sync completion is enabled | [optional]
 **membersync** | **int**| Whether member sync is enabled | [optional]
 **membersyncmode** | **int**| The mode of member sync | [optional]
 **enrolperiod** | **int**| The enrollment period in seconds | [optional]
 **enrolstartdate** | **\DateTime**| The start date of the enrollment | [optional]
 **enrolenddate** | **\DateTime**| The end date of the enrollment | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseToolDelete**
> \Swagger\Client\Model\InlineResponse2002 courseToolDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The identifier of the lti tool

try {
    $result = $apiInstance->courseToolDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseToolDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the lti tool |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseToolUpdate**
> \Swagger\Client\Model\InlineResponse2006 courseToolUpdate($toolid, $ltiversion, $name, $publishmode, $objectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolid = 56; // int | The ID of the lti tool
$ltiversion = "ltiversion_example"; // string | The version of LTI
$name = "name_example"; // string | The name
$publishmode = "publishmode_example"; // string | The mode of publishing
$objectid = 56; // int | The ID of the object
$maxenrolled = 56; // int | The maximum enrollment
$roleinstructor = 56; // int | The role of the instructor
$rolelearner = 56; // int | The role of the learner
$provisioningmodeinstructor = 56; // int | The provisioning mode of the instructor
$provisioningmodelearner = 56; // int | The provisioning mode of the learner
$gradesync = 56; // int | Whether grade sync is enabled
$gradesynccompletion = 56; // int | Whether grade sync completion is enabled
$membersync = 56; // int | Whether member sync is enabled
$membersyncmode = 56; // int | The mode of member sync
$enrolperiod = 56; // int | The enrollment period in seconds
$enrolstartdate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of the enrollment
$enrolenddate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date of the enrollment

try {
    $result = $apiInstance->courseToolUpdate($toolid, $ltiversion, $name, $publishmode, $objectid, $maxenrolled, $roleinstructor, $rolelearner, $provisioningmodeinstructor, $provisioningmodelearner, $gradesync, $gradesynccompletion, $membersync, $membersyncmode, $enrolperiod, $enrolstartdate, $enrolenddate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->courseToolUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **toolid** | **int**| The ID of the lti tool |
 **ltiversion** | **string**| The version of LTI |
 **name** | **string**| The name |
 **publishmode** | **string**| The mode of publishing |
 **objectid** | **int**| The ID of the object | [optional]
 **maxenrolled** | **int**| The maximum enrollment | [optional]
 **roleinstructor** | **int**| The role of the instructor | [optional]
 **rolelearner** | **int**| The role of the learner | [optional]
 **provisioningmodeinstructor** | **int**| The provisioning mode of the instructor | [optional]
 **provisioningmodelearner** | **int**| The provisioning mode of the learner | [optional]
 **gradesync** | **int**| Whether grade sync is enabled | [optional]
 **gradesynccompletion** | **int**| Whether grade sync completion is enabled | [optional]
 **membersync** | **int**| Whether member sync is enabled | [optional]
 **membersyncmode** | **int**| The mode of member sync | [optional]
 **enrolperiod** | **int**| The enrollment period in seconds | [optional]
 **enrolstartdate** | **\DateTime**| The start date of the enrollment | [optional]
 **enrolenddate** | **\DateTime**| The end date of the enrollment | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokenAdd**
> \Swagger\Client\Model\InlineResponse2009 tokenAdd($name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the token for your own administration purposes

try {
    $result = $apiInstance->tokenAdd($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->tokenAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the token for your own administration purposes |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokenDelete**
> \Swagger\Client\Model\InlineResponse2002 tokenDelete($token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | The tokenkey you want to delete

try {
    $result = $apiInstance->tokenDelete($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->tokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The tokenkey you want to delete |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tokenList**
> \Swagger\Client\Model\InlineResponse2008 tokenList()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tokenList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->tokenList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDelete**
> \Swagger\Client\Model\InlineResponse2002 userDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The identifier of the user

try {
    $result = $apiInstance->userDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->userDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the user |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDeleteBulk**
> \Swagger\Client\Model\InlineResponse2002 userDeleteBulk($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The identifier of the learning object

try {
    $result = $apiInstance->userDeleteBulk($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->userDeleteBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the learning object |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userList**
> \Swagger\Client\Model\InlineResponse2007 userList($toolid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\V0Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toolid = 56; // int | The identifier of the tool (optional)

try {
    $result = $apiInstance->userList($toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling V0Api->userList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **toolid** | **int**| The identifier of the tool (optional) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

