# ScromUpdateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**learningobjectid** | **int** | The ID of the learning object | 
**packagefile** | [**\SplFileObject**](\SplFileObject.md) | The .zip file of the SCORM package | [optional] 
**name** | **string** | The name of the SCORM package | [optional] 
**popup** | **int** | Indicates if the SCORM package should open in a new window (1) or not (0) | [optional] 
**width** | **int** | The display width for the SCORM package | [optional] 
**height** | **int** | The display height for the SCORM package | [optional] 
**grademethod** | **int** | The grading method for the SCORM package (0: learning objects, 1: highest grade, 2: average      *                     grade, 3: sum grade) | [optional] 
**maxgrade** | **int** | The maximum grade possible for the SCORM package | [optional] 
**maxattempt** | **int** | The maximum number of attempts allowed for the SCORM package | [optional] 
**whatgrade** | **int** | The grading strategy for multiple attempts (0: highest attempt, 1: average grade, 2: first      *                     attempt) | [optional] 
**forcenewattempt** | **int** | Policy for forcing new attempts (0: no, 1: every new attempt is a new grade, 2: every new      *                     attempt resets previous grades) | [optional] 
**lastattemptlock** | **int** | Indicates if the SCORM package should be locked after the last attempt (0: no, 1: yes) | [optional] 
**autocommit** | **int** | Indicates if the SCORM package grades should auto commit (0: no, 1: yes) | [optional] 
**masteryoverride** | **int** | Indicates if the mastery grade overrides the max grade (0: no, 1: yes) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

