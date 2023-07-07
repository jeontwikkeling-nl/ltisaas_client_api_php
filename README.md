# SwaggerClient-php
The LtiSaas API version 0 serves mock data for testing purposes. It requires no authorization, making it ideal for development and testing.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0
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
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
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

## Documentation for API Endpoints

All URIs are relative to *https://provider42luuk.web11.webv.nl/local/ltisaas/api.php/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*V0Api* | [**courseAdd**](docs/Api/V0Api.md#courseadd) | **GET** /course/add | Add a new course
*V0Api* | [**courseDelete**](docs/Api/V0Api.md#coursedelete) | **GET** /course/delete | Delete an existing course by id
*V0Api* | [**courseLearningObjectDelete**](docs/Api/V0Api.md#courselearningobjectdelete) | **GET** /course/learningobject/delete | 
*V0Api* | [**courseLearningObjectScromAdd**](docs/Api/V0Api.md#courselearningobjectscromadd) | **GET** /course/learningobject/scrom/add | 
*V0Api* | [**courseLearningobjectList**](docs/Api/V0Api.md#courselearningobjectlist) | **GET** /course/learningobject/list | 
*V0Api* | [**courseLearningobjectScormUpdate**](docs/Api/V0Api.md#courselearningobjectscormupdate) | **GET** /course/learningobject/scrom/update | 
*V0Api* | [**courseList**](docs/Api/V0Api.md#courselist) | **GET** /course/list | Get all courses
*V0Api* | [**courseLtiRegistrationsByDay**](docs/Api/V0Api.md#courseltiregistrationsbyday) | **GET** /course/lti/registrations_by_day | 
*V0Api* | [**courseLtiRegistrationsSumByCourse**](docs/Api/V0Api.md#courseltiregistrationssumbycourse) | **GET** /course/lti/registrations_sum_by_course | 
*V0Api* | [**courseToolAdd**](docs/Api/V0Api.md#coursetooladd) | **GET** /course/tool/add | 
*V0Api* | [**courseToolDelete**](docs/Api/V0Api.md#coursetooldelete) | **GET** /course/tool/delete | 
*V0Api* | [**courseToolUpdate**](docs/Api/V0Api.md#coursetoolupdate) | **GET** /course/tool/update | 
*V0Api* | [**tokenAdd**](docs/Api/V0Api.md#tokenadd) | **GET** /token/add | 
*V0Api* | [**tokenDelete**](docs/Api/V0Api.md#tokendelete) | **GET** /token/delete | 
*V0Api* | [**tokenList**](docs/Api/V0Api.md#tokenlist) | **GET** /token/list | 
*V0Api* | [**userDelete**](docs/Api/V0Api.md#userdelete) | **GET** /user/delete | 
*V0Api* | [**userDeleteBulk**](docs/Api/V0Api.md#userdeletebulk) | **GET** /user/delete_bulk | 
*V0Api* | [**userList**](docs/Api/V0Api.md#userlist) | **GET** /user/list | 

## Documentation For Models

 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2003Results](docs/Model/InlineResponse2003Results.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Results](docs/Model/InlineResponse2005Results.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Results](docs/Model/InlineResponse2007Results.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Results](docs/Model/InlineResponse2008Results.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse200Results](docs/Model/InlineResponse200Results.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



