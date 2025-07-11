<?php
/**
 * CourseList200ResponseResultsInner
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  LtiSaasApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * LtiSaas API
 *
 * <p>A brief overview of the API versions:</p> <ul> <li><strong>v0:</strong> This version is solely for testing and does not interact with the database, nor does it involve any validation. It simply serves mock data.</li> <li><strong>v1:</strong> This is the official version of the LtiSaas API, intended for production use.</li> </ul> <p>Please be informed that when testing version v0, the HTTP <code>Access-Token</code> header should be set with the value 'dummy'.</p> <p>Also, please note that the API has a limit of 2500 results per response.</p> <p>Additionally, all webservices support both POST and GET requests. However, the POST method is required when uploading files.</p>
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LtiSaasApi\Model;

use \ArrayAccess;
use \LtiSaasApi\ObjectSerializer;

/**
 * CourseList200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  LtiSaasApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CourseList200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'courseList_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'coursename' => 'string',
        'coursenameshort' => 'string',
        'totalregistrations' => 'int',
        'totalltitools' => 'int',
        'courseid' => 'int',
        'toolids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'coursename' => null,
        'coursenameshort' => null,
        'totalregistrations' => null,
        'totalltitools' => null,
        'courseid' => null,
        'toolids' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'coursename' => false,
        'coursenameshort' => false,
        'totalregistrations' => false,
        'totalltitools' => false,
        'courseid' => false,
        'toolids' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'coursename' => 'coursename',
        'coursenameshort' => 'coursenameshort',
        'totalregistrations' => 'totalregistrations',
        'totalltitools' => 'totalltitools',
        'courseid' => 'courseid',
        'toolids' => 'toolids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coursename' => 'setCoursename',
        'coursenameshort' => 'setCoursenameshort',
        'totalregistrations' => 'setTotalregistrations',
        'totalltitools' => 'setTotalltitools',
        'courseid' => 'setCourseid',
        'toolids' => 'setToolids'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coursename' => 'getCoursename',
        'coursenameshort' => 'getCoursenameshort',
        'totalregistrations' => 'getTotalregistrations',
        'totalltitools' => 'getTotalltitools',
        'courseid' => 'getCourseid',
        'toolids' => 'getToolids'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('coursename', $data ?? [], null);
        $this->setIfExists('coursenameshort', $data ?? [], null);
        $this->setIfExists('totalregistrations', $data ?? [], null);
        $this->setIfExists('totalltitools', $data ?? [], null);
        $this->setIfExists('courseid', $data ?? [], null);
        $this->setIfExists('toolids', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets coursename
     *
     * @return string|null
     */
    public function getCoursename()
    {
        return $this->container['coursename'];
    }

    /**
     * Sets coursename
     *
     * @param string|null $coursename Course name
     *
     * @return self
     */
    public function setCoursename($coursename)
    {
        if (is_null($coursename)) {
            throw new \InvalidArgumentException('non-nullable coursename cannot be null');
        }
        $this->container['coursename'] = $coursename;

        return $this;
    }

    /**
     * Gets coursenameshort
     *
     * @return string|null
     */
    public function getCoursenameshort()
    {
        return $this->container['coursenameshort'];
    }

    /**
     * Sets coursenameshort
     *
     * @param string|null $coursenameshort Course name short
     *
     * @return self
     */
    public function setCoursenameshort($coursenameshort)
    {
        if (is_null($coursenameshort)) {
            throw new \InvalidArgumentException('non-nullable coursenameshort cannot be null');
        }
        $this->container['coursenameshort'] = $coursenameshort;

        return $this;
    }

    /**
     * Gets totalregistrations
     *
     * @return int|null
     */
    public function getTotalregistrations()
    {
        return $this->container['totalregistrations'];
    }

    /**
     * Sets totalregistrations
     *
     * @param int|null $totalregistrations Total number of course registrations
     *
     * @return self
     */
    public function setTotalregistrations($totalregistrations)
    {
        if (is_null($totalregistrations)) {
            throw new \InvalidArgumentException('non-nullable totalregistrations cannot be null');
        }
        $this->container['totalregistrations'] = $totalregistrations;

        return $this;
    }

    /**
     * Gets totalltitools
     *
     * @return int|null
     */
    public function getTotalltitools()
    {
        return $this->container['totalltitools'];
    }

    /**
     * Sets totalltitools
     *
     * @param int|null $totalltitools Total number of LTI tools in the course
     *
     * @return self
     */
    public function setTotalltitools($totalltitools)
    {
        if (is_null($totalltitools)) {
            throw new \InvalidArgumentException('non-nullable totalltitools cannot be null');
        }
        $this->container['totalltitools'] = $totalltitools;

        return $this;
    }

    /**
     * Gets courseid
     *
     * @return int|null
     */
    public function getCourseid()
    {
        return $this->container['courseid'];
    }

    /**
     * Sets courseid
     *
     * @param int|null $courseid Course identifier
     *
     * @return self
     */
    public function setCourseid($courseid)
    {
        if (is_null($courseid)) {
            throw new \InvalidArgumentException('non-nullable courseid cannot be null');
        }
        $this->container['courseid'] = $courseid;

        return $this;
    }

    /**
     * Gets toolids
     *
     * @return int[]|null
     */
    public function getToolids()
    {
        return $this->container['toolids'];
    }

    /**
     * Sets toolids
     *
     * @param int[]|null $toolids Array of LTI tool identifiers in the course
     *
     * @return self
     */
    public function setToolids($toolids)
    {
        if (is_null($toolids)) {
            throw new \InvalidArgumentException('non-nullable toolids cannot be null');
        }
        $this->container['toolids'] = $toolids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


