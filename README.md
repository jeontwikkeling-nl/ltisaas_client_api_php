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

PHP 7.4 and later.
Should also work with PHP 8.0.

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

All URIs are relative to *https://test.example.nl/local/ltisaas/api.php/v0*

| Method                                                                                              | HTTP request | Description |
|-----------------------------------------------------------------------------------------------------| ------------- | ------------- |
| [**courseAdd()**](docs/Api/DefaultApi.md#courseAdd)                                                 | **GET** /course/add | Create a new course |
| [**courseDelete()**](docs/Api/DefaultApi.md#courseDelete)                                           | **GET** /course/delete | Delete an existing course by its ID |
| [**courseLearningObjectDelete()**](docs/Api/DefaultApi.md#courseLearningObjectDelete)               | **GET** /course/learningobject/delete | Delete a specific learning object |
| [**courseLearningObjectScromAdd()**](docs/Api/DefaultApi.md#courseLearningObjectScromAdd)           | **POST** /course/learningobject/scrom/add | Add an SCORM package to a course |
| [**courseLearningobjectList()**](docs/Api/DefaultApi.md#courseLearningobjectList)                   | **GET** /course/learningobject/list | Get learning objects for a course |
| [**courseLearningobjectScormUpdate()**](docs/Api/DefaultApi.md#courseLearningobjectScormUpdate)     | **POST** /course/learningobject/scrom/update | Update SCORM Learning Object |
| [**courseList()**](docs/Api/DefaultApi.md#courseList)                                               | **GET** /course/list | Retrieve all courses |
| [**courseLtiRegistrationsByDay()**](docs/Api/DefaultApi.md#courseLtiRegistrationsByDay)             | **GET** /course/lti/registrations_by_day | Get LTI registrations by day |
| [**courseLtiRegistrationsSumByCourse()**](docs/Api/DefaultApi.md#courseLtiRegistrationsSumByCourse) | **GET** /course/lti/registrations_sum_by_course | Get total LTI registrations per course |
| [**courseToolAdd()**](docs/Api/DefaultApi.md#courseToolAdd)                                         | **GET** /course/tool/add | Add new tool to a course |
| [**courseToolDelete()**](docs/Api/DefaultApi.md#courseToolDelete)                                   | **GET** /course/tool/delete | Delete a specific course tool |
| [**courseToolList()**](docs/Api/DefaultApi.md#courseToolList)                                       | **GET** /course/tool/list | List all LTI tools within a course |
| [**courseToolUpdate()**](docs/Api/DefaultApi.md#courseToolUpdate)                                   | **GET** /course/tool/update | Update a specific course tool |
| [**courseUpdate()**](docs/Api/DefaultApi.md#courseUpdate)                                           | **GET** /course/update | Update an existing course |
| [**tokenAdd()**](docs/Api/DefaultApi.md#tokenAdd)                                                   | **GET** /token/add | Add a new API token |
| [**tokenDelete()**](docs/Api/DefaultApi.md#tokenDelete)                                             | **GET** /token/delete | Delete an API token |
| [**tokenList()**](docs/Api/DefaultApi.md#tokenList)                                                 | **GET** /token/list | Get list of API tokens |
| [**userDelete()**](docs/Api/DefaultApi.md#userDelete)                                               | **GET** /user/delete | Delete a user by ID |
| [**userDeleteBulk()**](docs/Api/DefaultApi.md#userDeleteBulk)                                       | **GET** /user/delete_bulk | Delete multiple users by IDs |
| [**userList()**](docs/Api/DefaultApi.md#userList)                                                   | **GET** /user/list | Get list of users in a tool |

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
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
