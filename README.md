# OpenAPIClient-php

<p>A brief overview of the API versions:</p>
<ul>
<li><strong>v0:</strong> This version is solely for testing and does not interact with the database, nor does it involve any validation. It simply serves mock data.</li>
<li><strong>v1:</strong> This is the official version of the LtiSaas API, intended for production use.</li>
</ul>
<p>Please be informed that when testing version v0, the HTTP <code>Access-Token</code> header should be set with the value 'dummy'.</p>
<p>Also, please note that the API has a limit of 2500 results per response.</p>
<p>Additionally, all webservices support both POST and GET requests. However, the POST method is required when uploading files.</p>



## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
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
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$coursenameshort = 'coursenameshort_example'; // string | The shortname of the course to be created

try {
    $result = $apiInstance->courseAdd($coursename, $coursenameshort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->courseAdd: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://linqur45luuk.web09.webv.nl/local/ltisaas/api.php/v0*

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
*DefaultApi* | [**memberList**](docs/Api/DefaultApi.md#memberlist) | **GET** /member/list | Get a list of LTI system members that are unique on the system
*DefaultApi* | [**scormproxyAdd**](docs/Api/DefaultApi.md#scormproxyadd) | **POST** /scormproxy/add | Create a new SCORM proxy wrapper
*DefaultApi* | [**scormproxyDelete**](docs/Api/DefaultApi.md#scormproxydelete) | **POST** /scormproxy/delete | Delete a SCORM proxy wrapper
*DefaultApi* | [**scormproxyList**](docs/Api/DefaultApi.md#scormproxylist) | **GET** /scormproxy/list | List SCORM proxy wrappers
*DefaultApi* | [**scormproxyRegistrationsByDay**](docs/Api/DefaultApi.md#scormproxyregistrationsbyday) | **GET** /scormproxy/registrations_by_day | Get SCORM proxy registration statistics by day
*DefaultApi* | [**scormproxyResults**](docs/Api/DefaultApi.md#scormproxyresults) | **GET** /scormproxy/results | Get CMI results for SCORM proxy registrations
*DefaultApi* | [**scormproxyUpdate**](docs/Api/DefaultApi.md#scormproxyupdate) | **POST** /scormproxy/update | Update an existing SCORM proxy wrapper
*DefaultApi* | [**tokenAdd**](docs/Api/DefaultApi.md#tokenadd) | **GET** /token/add | Add a new API token
*DefaultApi* | [**tokenDelete**](docs/Api/DefaultApi.md#tokendelete) | **GET** /token/delete | Delete an API token
*DefaultApi* | [**tokenList**](docs/Api/DefaultApi.md#tokenlist) | **GET** /token/list | Get list of API tokens
*DefaultApi* | [**userDelete**](docs/Api/DefaultApi.md#userdelete) | **GET** /user/delete | Delete a user by ID
*DefaultApi* | [**userDeleteBulk**](docs/Api/DefaultApi.md#userdeletebulk) | **GET** /user/delete_bulk | Delete multiple users by IDs
*DefaultApi* | [**userList**](docs/Api/DefaultApi.md#userlist) | **GET** /user/list | Get list of users in a tool

## Models

- [CourseAdd200Response](docs/Model/CourseAdd200Response.md)
- [CourseDelete200Response](docs/Model/CourseDelete200Response.md)
- [CourseLearningObjectScromAdd200Response](docs/Model/CourseLearningObjectScromAdd200Response.md)
- [CourseLearningobjectList200Response](docs/Model/CourseLearningobjectList200Response.md)
- [CourseLearningobjectList200ResponseResultsInner](docs/Model/CourseLearningobjectList200ResponseResultsInner.md)
- [CourseList200Response](docs/Model/CourseList200Response.md)
- [CourseList200ResponseResultsInner](docs/Model/CourseList200ResponseResultsInner.md)
- [CourseLtiRegistrationsByDay200Response](docs/Model/CourseLtiRegistrationsByDay200Response.md)
- [CourseLtiRegistrationsByDay200ResponseResultsInner](docs/Model/CourseLtiRegistrationsByDay200ResponseResultsInner.md)
- [CourseLtiRegistrationsSumByCourse200Response](docs/Model/CourseLtiRegistrationsSumByCourse200Response.md)
- [CourseLtiRegistrationsSumByCourse200ResponseResultsInner](docs/Model/CourseLtiRegistrationsSumByCourse200ResponseResultsInner.md)
- [CourseToolAdd200Response](docs/Model/CourseToolAdd200Response.md)
- [CourseToolList200Response](docs/Model/CourseToolList200Response.md)
- [CourseToolList200ResponseResultsInner](docs/Model/CourseToolList200ResponseResultsInner.md)
- [CourseUpdate200Response](docs/Model/CourseUpdate200Response.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [MemberList200Response](docs/Model/MemberList200Response.md)
- [MemberList200ResponseResultsInner](docs/Model/MemberList200ResponseResultsInner.md)
- [ScormproxyAdd200Response](docs/Model/ScormproxyAdd200Response.md)
- [ScormproxyAdd200ResponseResults](docs/Model/ScormproxyAdd200ResponseResults.md)
- [ScormproxyList200Response](docs/Model/ScormproxyList200Response.md)
- [ScormproxyList200ResponseResultsInner](docs/Model/ScormproxyList200ResponseResultsInner.md)
- [ScormproxyList200ResponseResultsInnerDownloadlink](docs/Model/ScormproxyList200ResponseResultsInnerDownloadlink.md)
- [ScormproxyRegistrationsByDay200Response](docs/Model/ScormproxyRegistrationsByDay200Response.md)
- [ScormproxyRegistrationsByDay200ResponseResultsInner](docs/Model/ScormproxyRegistrationsByDay200ResponseResultsInner.md)
- [ScormproxyResults200Response](docs/Model/ScormproxyResults200Response.md)
- [ScormproxyResults200ResponseResultsInner](docs/Model/ScormproxyResults200ResponseResultsInner.md)
- [ScormproxyResults200ResponseResultsInnerCmiData](docs/Model/ScormproxyResults200ResponseResultsInnerCmiData.md)
- [ScormproxyResults200ResponseResultsInnerCmiDataHistoryInner](docs/Model/ScormproxyResults200ResponseResultsInnerCmiDataHistoryInner.md)
- [TokenAdd200Response](docs/Model/TokenAdd200Response.md)
- [TokenList200Response](docs/Model/TokenList200Response.md)
- [TokenList200ResponseResultsInner](docs/Model/TokenList200ResponseResultsInner.md)
- [UserList200Response](docs/Model/UserList200Response.md)
- [UserList200ResponseResultsInner](docs/Model/UserList200ResponseResultsInner.md)

## Authorization

Authentication schemes defined for the API:
### token

- **Type**: API key
- **API key parameter name**: Access-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.18.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
