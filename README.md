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

## API Endpoints

All URIs are relative to *https://linqur45.web09.webv.nl/local/ltisaas/api.php/v0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CoursesApi* | [**courseAdd**](docs/Api/CoursesApi.md#courseadd) | **GET** /course/add | Create a new course
*CoursesApi* | [**courseDelete**](docs/Api/CoursesApi.md#coursedelete) | **GET** /course/delete | Delete an existing course by its ID
*CoursesApi* | [**courseGradeSet**](docs/Api/CoursesApi.md#coursegradeset) | **POST** /course/grade | Set or reset a user&#39;s course grade
*CoursesApi* | [**courseList**](docs/Api/CoursesApi.md#courselist) | **GET** /course/list | Retrieve all courses
*CoursesApi* | [**courseUpdate**](docs/Api/CoursesApi.md#courseupdate) | **GET** /course/update | Update an existing course
*LTIAnalyticsApi* | [**courseLtiRegistrationsByDay**](docs/Api/LTIAnalyticsApi.md#courseltiregistrationsbyday) | **GET** /course/lti/registrations_by_day | Get LTI registrations by day
*LTIAnalyticsApi* | [**courseLtiRegistrationsSumByCourse**](docs/Api/LTIAnalyticsApi.md#courseltiregistrationssumbycourse) | **GET** /course/lti/registrations_sum_by_course | Get total LTI registrations per course
*LTIToolsApi* | [**courseToolAdd**](docs/Api/LTIToolsApi.md#coursetooladd) | **GET** /course/tool/add | Add new tool to a course
*LTIToolsApi* | [**courseToolDelete**](docs/Api/LTIToolsApi.md#coursetooldelete) | **GET** /course/tool/delete | Delete a specific course tool
*LTIToolsApi* | [**courseToolList**](docs/Api/LTIToolsApi.md#coursetoollist) | **GET** /course/tool/list | List all LTI tools within a course
*LTIToolsApi* | [**courseToolUpdate**](docs/Api/LTIToolsApi.md#coursetoolupdate) | **GET** /course/tool/update | Update a specific course tool
*LearningObjectsApi* | [**courseLearningObjectDelete**](docs/Api/LearningObjectsApi.md#courselearningobjectdelete) | **GET** /course/learningobject/delete | Delete a specific learning object
*LearningObjectsApi* | [**courseLearningObjectScromAdd**](docs/Api/LearningObjectsApi.md#courselearningobjectscromadd) | **POST** /course/learningobject/scrom/add | Add an SCORM package to a course
*LearningObjectsApi* | [**courseLearningobjectList**](docs/Api/LearningObjectsApi.md#courselearningobjectlist) | **GET** /course/learningobject/list | Get learning objects for a course
*LearningObjectsApi* | [**courseLearningobjectScormUpdate**](docs/Api/LearningObjectsApi.md#courselearningobjectscormupdate) | **POST** /course/learningobject/scrom/update | Update SCORM Learning Object
*MembersApi* | [**memberList**](docs/Api/MembersApi.md#memberlist) | **GET** /member/list | Get a list of LTI system members that are unique on the system
*TokensApi* | [**tokenAdd**](docs/Api/TokensApi.md#tokenadd) | **GET** /token/add | Add a new API token
*TokensApi* | [**tokenDelete**](docs/Api/TokensApi.md#tokendelete) | **GET** /token/delete | Delete an API token
*TokensApi* | [**tokenList**](docs/Api/TokensApi.md#tokenlist) | **GET** /token/list | Get list of API tokens
*UsersApi* | [**userDelete**](docs/Api/UsersApi.md#userdelete) | **GET** /user/delete | Delete a user by ID
*UsersApi* | [**userDeleteBulk**](docs/Api/UsersApi.md#userdeletebulk) | **GET** /user/delete_bulk | Delete multiple users by IDs
*UsersApi* | [**userList**](docs/Api/UsersApi.md#userlist) | **GET** /user/list | Get list of users in a tool

## Models

- [CourseAdd200Response](docs/Model/CourseAdd200Response.md)
- [CourseDelete200Response](docs/Model/CourseDelete200Response.md)
- [CourseGradeSet200Response](docs/Model/CourseGradeSet200Response.md)
- [CourseGradeSet400Response](docs/Model/CourseGradeSet400Response.md)
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
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
