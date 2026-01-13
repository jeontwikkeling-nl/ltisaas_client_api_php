# # ScormproxyResults200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userid** | **int** | Moodle user ID |
**wrapperid** | **string** | Public wrapper identifier |
**registrationid** | **string** | Unique registration identifier |
**is_scorm** | **bool** | Whether this is a SCORM wrapper (true) or xAPI/non-SCORM (false) |
**attempts** | [**\LtiSaasApi\Model\ScormproxyResults200ResponseResultsInnerAttemptsInner[]**](ScormproxyResults200ResponseResultsInnerAttemptsInner.md) | Array of user attempts with CMI data. SCORM wrappers may have multiple attempts, non-SCORM typically have one. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
