<?php
/**
 * UserList200ResponseResultsInner
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
 * UserList200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  LtiSaasApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserList200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'userList_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userid' => 'int',
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'lastip' => 'string',
        'lti_lastgrade' => 'float',
        'lti_lastaccess' => 'int',
        'lti_timecreated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'userid' => null,
        'firstname' => null,
        'lastname' => null,
        'email' => 'email',
        'lastip' => null,
        'lti_lastgrade' => 'float',
        'lti_lastaccess' => null,
        'lti_timecreated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'userid' => false,
        'firstname' => false,
        'lastname' => false,
        'email' => false,
        'lastip' => false,
        'lti_lastgrade' => false,
        'lti_lastaccess' => false,
        'lti_timecreated' => false
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
        'userid' => 'userid',
        'firstname' => 'firstname',
        'lastname' => 'lastname',
        'email' => 'email',
        'lastip' => 'lastip',
        'lti_lastgrade' => 'lti_lastgrade',
        'lti_lastaccess' => 'lti_lastaccess',
        'lti_timecreated' => 'lti_timecreated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userid' => 'setUserid',
        'firstname' => 'setFirstname',
        'lastname' => 'setLastname',
        'email' => 'setEmail',
        'lastip' => 'setLastip',
        'lti_lastgrade' => 'setLtiLastgrade',
        'lti_lastaccess' => 'setLtiLastaccess',
        'lti_timecreated' => 'setLtiTimecreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userid' => 'getUserid',
        'firstname' => 'getFirstname',
        'lastname' => 'getLastname',
        'email' => 'getEmail',
        'lastip' => 'getLastip',
        'lti_lastgrade' => 'getLtiLastgrade',
        'lti_lastaccess' => 'getLtiLastaccess',
        'lti_timecreated' => 'getLtiTimecreated'
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
        $this->setIfExists('userid', $data ?? [], null);
        $this->setIfExists('firstname', $data ?? [], null);
        $this->setIfExists('lastname', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('lastip', $data ?? [], null);
        $this->setIfExists('lti_lastgrade', $data ?? [], null);
        $this->setIfExists('lti_lastaccess', $data ?? [], null);
        $this->setIfExists('lti_timecreated', $data ?? [], null);
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
     * Gets userid
     *
     * @return int|null
     */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
     * Sets userid
     *
     * @param int|null $userid userid
     *
     * @return self
     */
    public function setUserid($userid)
    {
        if (is_null($userid)) {
            throw new \InvalidArgumentException('non-nullable userid cannot be null');
        }
        $this->container['userid'] = $userid;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string|null $firstname firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        if (is_null($firstname)) {
            throw new \InvalidArgumentException('non-nullable firstname cannot be null');
        }
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string|null
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string|null $lastname lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        if (is_null($lastname)) {
            throw new \InvalidArgumentException('non-nullable lastname cannot be null');
        }
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets lastip
     *
     * @return string|null
     */
    public function getLastip()
    {
        return $this->container['lastip'];
    }

    /**
     * Sets lastip
     *
     * @param string|null $lastip lastip
     *
     * @return self
     */
    public function setLastip($lastip)
    {
        if (is_null($lastip)) {
            throw new \InvalidArgumentException('non-nullable lastip cannot be null');
        }
        $this->container['lastip'] = $lastip;

        return $this;
    }

    /**
     * Gets lti_lastgrade
     *
     * @return float|null
     */
    public function getLtiLastgrade()
    {
        return $this->container['lti_lastgrade'];
    }

    /**
     * Sets lti_lastgrade
     *
     * @param float|null $lti_lastgrade lti_lastgrade
     *
     * @return self
     */
    public function setLtiLastgrade($lti_lastgrade)
    {
        if (is_null($lti_lastgrade)) {
            throw new \InvalidArgumentException('non-nullable lti_lastgrade cannot be null');
        }
        $this->container['lti_lastgrade'] = $lti_lastgrade;

        return $this;
    }

    /**
     * Gets lti_lastaccess
     *
     * @return int|null
     */
    public function getLtiLastaccess()
    {
        return $this->container['lti_lastaccess'];
    }

    /**
     * Sets lti_lastaccess
     *
     * @param int|null $lti_lastaccess lti_lastaccess
     *
     * @return self
     */
    public function setLtiLastaccess($lti_lastaccess)
    {
        if (is_null($lti_lastaccess)) {
            throw new \InvalidArgumentException('non-nullable lti_lastaccess cannot be null');
        }
        $this->container['lti_lastaccess'] = $lti_lastaccess;

        return $this;
    }

    /**
     * Gets lti_timecreated
     *
     * @return int|null
     */
    public function getLtiTimecreated()
    {
        return $this->container['lti_timecreated'];
    }

    /**
     * Sets lti_timecreated
     *
     * @param int|null $lti_timecreated lti_timecreated
     *
     * @return self
     */
    public function setLtiTimecreated($lti_timecreated)
    {
        if (is_null($lti_timecreated)) {
            throw new \InvalidArgumentException('non-nullable lti_timecreated cannot be null');
        }
        $this->container['lti_timecreated'] = $lti_timecreated;

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


