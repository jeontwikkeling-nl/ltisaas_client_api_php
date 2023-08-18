# Jeontwikkeling LTI client API
<p>A brief overview of the API versions:</p> <ul> <li><strong>v0:</strong> This version is solely for testing and does not interact with the database, nor does it involve any validation. It simply serves mock data.</li> <li><strong>v1:</strong> This is the official version of the LtiSaas API, intended for production use.</li> </ul> <p>Please be informed that when testing version v0, the HTTP <code>Access-Token</code> header should be set with the value 'dummy'.</p> <p>Also, please note that the API has a limit of 2500 results per response.</p> <p>Additionally, all webservices support both POST and GET requests. However, the POST method is required when uploading files.</p>

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/jeontwikkeling-nl/ltisaas_client_api_php.git"
    }
  ],
  "require": {
    "jeontwikkeling-nl/ltisaas_client_api_php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursename = "coursename_example"; // string | The name of the course to be created

try {
    $result = $apiInstance->courseAdd($coursename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseAdd: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | 
$packagefile = "packagefile_example"; // string | 
$name = "name_example"; // string | 
$popup = 56; // int | 
$width = 56; // int | 
$height = 56; // int | 
$grademethod = 56; // int | 
$maxgrade = 56; // int | 
$maxattempt = 56; // int | 
$whatgrade = 56; // int | 
$forcenewattempt = 56; // int | 
$lastattemptlock = 56; // int | 
$autocommit = 56; // int | 
$masteryoverride = 56; // int | 

try {
    $result = $apiInstance->courseLearningObjectScromAdd($courseid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLearningObjectScromAdd: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learningobjectid = 56; // int | 
$packagefile = "packagefile_example"; // string | 
$name = "name_example"; // string | 
$popup = 56; // int | 
$width = 56; // int | 
$height = 56; // int | 
$grademethod = 56; // int | 
$maxgrade = 56; // int | 
$maxattempt = 56; // int | 
$whatgrade = 56; // int | 
$forcenewattempt = 56; // int | 
$lastattemptlock = 56; // int | 
$autocommit = 56; // int | 
$masteryoverride = 56; // int | 

try {
    $result = $apiInstance->courseLearningobjectScormUpdate($learningobjectid, $packagefile, $name, $popup, $width, $height, $grademethod, $maxgrade, $maxattempt, $whatgrade, $forcenewattempt, $lastattemptlock, $autocommit, $masteryoverride);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLearningobjectScormUpdate: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime("2013-10-20"); // \DateTime | The end date (format: DD-MM-YYYY)
$toolid = 56; // int | The identifier of the LTI tool (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsByDay($from, $till, $toolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLtiRegistrationsByDay: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20"); // \DateTime | The start date (format: DD-MM-YYYY)
$till = new \DateTime("2013-10-20"); // \DateTime | The end date (format: DD-MM-YYYY)
$courseid = 56; // int | The identifier of the course (optional)

try {
    $result = $apiInstance->courseLtiRegistrationsSumByCourse($from, $till, $courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseLtiRegistrationsSumByCourse: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The ID of the course
$ltiversion = "ltiversion_example"; // string | The version of LTI
$name = "name_example"; // string | The name
$publishmode = "publishmode_example"; // string | The mode of publishing (course or activity)
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseid = 56; // int | The ID of the course
$ltitype = "ltitype_example"; // string | The version of LTI

try {
    $result = $apiInstance->courseToolList($courseid, $ltitype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseToolList: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$toolid = 56; // int | The ID of the lti tool
$ltiversion = "ltiversion_example"; // string | The version of LTI
$name = "name_example"; // string | The name
$publishmode = "publishmode_example"; // string | The mode of publishing (course or activity)
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coursename = "coursename_example"; // string | The name of the course to be created
$courseid = 56; // int | The unique identifier of the course to be deleted

try {
    $result = $apiInstance->courseUpdate($coursename, $courseid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseUpdate: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name of the token for your own administration purposes

try {
    $result = $apiInstance->tokenAdd($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tokenAdd: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | The tokenkey you want to delete

try {
    $result = $apiInstance->tokenDelete($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->tokenDelete: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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

// Configure API key authorization: token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Access-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Access-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
?>
```

## Documentation for API Endpoints

All URIs are relative to *{domain}/local/ltisaas/api.php/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**courseAdd**](docs/Api/DefaultApi.md#courseadd) | **GET** /course/add | Create a new course
*DefaultApi* | [**courseDelete**](docs/Api/DefaultApi.md#coursedelete) | **GET** /course/delete | Delete an existing course by its ID
*DefaultApi* | [**courseLearningObjectDelete**](docs/Api/DefaultApi.md#courselearningobjectdelete) | **GET** /course/learningobject/delete | Delete a specific learning object
*DefaultApi* | [**courseLearningObjectScromAdd**](docs/Api/DefaultApi.md#courselearningobjectscromadd) | **POST** /course/learningobject/scrom/add | Add an SCORM package to a course
*DefaultApi* | [**courseLearningobjectList**](docs/Api/DefaultApi.md#courselearningobjectlist) | **GET** /course/learningobject/list | Get learning objects for a course
*DefaultApi* | [**courseLearningobjectScormUpdate**](docs/Api/DefaultApi.md#courselearningobjectscormupdate) | **POST** /course/learningobject/scrom/update | Update SCORM Learning Object
*DefaultApi* | [**courseList**](docs/Api/DefaultApi.md#courselist) | **GET** /course/list | Retrieve all courses
*DefaultApi* | [**courseLtiRegistrationsByDay**](docs/Api/DefaultApi.md#courseltiregistrationsbyday) | **GET** /course/lti/registrations_by_day | Get LTI registrations by day
*DefaultApi* | [**courseLtiRegistrationsSumByCourse**](docs/Api/DefaultApi.md#courseltiregistrationssumbycourse) | **GET** /course/lti/registrations_sum_by_course | Get total LTI registrations per course
*DefaultApi* | [**courseToolAdd**](docs/Api/DefaultApi.md#coursetooladd) | **GET** /course/tool/add | Add new tool to a course
*DefaultApi* | [**courseToolDelete**](docs/Api/DefaultApi.md#coursetooldelete) | **GET** /course/tool/delete | Delete a specific course tool
*DefaultApi* | [**courseToolList**](docs/Api/DefaultApi.md#coursetoollist) | **GET** /course/tool/list | List all LTI tools within a course
*DefaultApi* | [**courseToolUpdate**](docs/Api/DefaultApi.md#coursetoolupdate) | **GET** /course/tool/update | Update a specific course tool
*DefaultApi* | [**courseUpdate**](docs/Api/DefaultApi.md#courseupdate) | **GET** /course/update | Update an existing course
*DefaultApi* | [**tokenAdd**](docs/Api/DefaultApi.md#tokenadd) | **GET** /token/add | Add a new API token
*DefaultApi* | [**tokenDelete**](docs/Api/DefaultApi.md#tokendelete) | **GET** /token/delete | Delete an API token
*DefaultApi* | [**tokenList**](docs/Api/DefaultApi.md#tokenlist) | **GET** /token/list | Get list of API tokens
*DefaultApi* | [**userDelete**](docs/Api/DefaultApi.md#userdelete) | **GET** /user/delete | Delete a user by ID
*DefaultApi* | [**userDeleteBulk**](docs/Api/DefaultApi.md#userdeletebulk) | **GET** /user/delete_bulk | Delete multiple users by IDs
*DefaultApi* | [**userList**](docs/Api/DefaultApi.md#userlist) | **GET** /user/list | Get list of users in a tool

## Documentation For Models

 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Results](docs/Model/InlineResponse20011Results.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20012Results](docs/Model/InlineResponse20012Results.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Results](docs/Model/InlineResponse2004Results.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Results](docs/Model/InlineResponse2007Results.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Results](docs/Model/InlineResponse2008Results.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Results](docs/Model/InlineResponse2009Results.md)
 - [InlineResponse200Results](docs/Model/InlineResponse200Results.md)
 - [ScromAddBody](docs/Model/ScromAddBody.md)
 - [ScromUpdateBody](docs/Model/ScromUpdateBody.md)

## Documentation For Authorization


## token

- **Type**: API key
- **API key parameter name**: Access-Token
- **Location**: HTTP header


## Author



