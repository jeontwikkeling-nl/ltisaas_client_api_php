<?php
/**
 * InlineResponse2009Results
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LtiSaas API
 *
 * <p>A brief overview of the API versions:</p> <ul> <li><strong>v0:</strong> This version is solely for testing and does not interact with the database, nor does it involve any validation. It simply serves mock data.</li> <li><strong>v1:</strong> This is the official version of the LtiSaas API, intended for production use.</li> </ul> <p>Please be informed that when testing version v0, the HTTP <code>Access-Token</code> header should be set with the value 'dummy'.</p> <p>Also, please note that the API has a limit of 2500 results per response.</p> <p>Additionally, all webservices support both POST and GET requests. However, the POST method is required when uploading files.</p>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse2009Results Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2009Results implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_9_results';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'toolid' => 'int',
        'name' => 'string',
        'secret' => 'string',
        'timecreated' => 'string',
        'ltitype' => 'string',
        'cartridgeurl' => 'string',
        'launchurl' => 'string',
        'registrationurl' => 'string',
        'customproperties' => 'string',
        'resourcetype' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'toolid' => null,
        'name' => null,
        'secret' => null,
        'timecreated' => null,
        'ltitype' => null,
        'cartridgeurl' => null,
        'launchurl' => null,
        'registrationurl' => null,
        'customproperties' => null,
        'resourcetype' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'toolid' => 'toolid',
        'name' => 'name',
        'secret' => 'secret',
        'timecreated' => 'timecreated',
        'ltitype' => 'ltitype',
        'cartridgeurl' => 'cartridgeurl',
        'launchurl' => 'launchurl',
        'registrationurl' => 'registrationurl',
        'customproperties' => 'customproperties',
        'resourcetype' => 'resourcetype'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'toolid' => 'setToolid',
        'name' => 'setName',
        'secret' => 'setSecret',
        'timecreated' => 'setTimecreated',
        'ltitype' => 'setLtitype',
        'cartridgeurl' => 'setCartridgeurl',
        'launchurl' => 'setLaunchurl',
        'registrationurl' => 'setRegistrationurl',
        'customproperties' => 'setCustomproperties',
        'resourcetype' => 'setResourcetype'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'toolid' => 'getToolid',
        'name' => 'getName',
        'secret' => 'getSecret',
        'timecreated' => 'getTimecreated',
        'ltitype' => 'getLtitype',
        'cartridgeurl' => 'getCartridgeurl',
        'launchurl' => 'getLaunchurl',
        'registrationurl' => 'getRegistrationurl',
        'customproperties' => 'getCustomproperties',
        'resourcetype' => 'getResourcetype'
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
        return self::$swaggerModelName;
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['toolid'] = isset($data['toolid']) ? $data['toolid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['secret'] = isset($data['secret']) ? $data['secret'] : null;
        $this->container['timecreated'] = isset($data['timecreated']) ? $data['timecreated'] : null;
        $this->container['ltitype'] = isset($data['ltitype']) ? $data['ltitype'] : null;
        $this->container['cartridgeurl'] = isset($data['cartridgeurl']) ? $data['cartridgeurl'] : null;
        $this->container['launchurl'] = isset($data['launchurl']) ? $data['launchurl'] : null;
        $this->container['registrationurl'] = isset($data['registrationurl']) ? $data['registrationurl'] : null;
        $this->container['customproperties'] = isset($data['customproperties']) ? $data['customproperties'] : null;
        $this->container['resourcetype'] = isset($data['resourcetype']) ? $data['resourcetype'] : null;
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
     * Gets toolid
     *
     * @return int
     */
    public function getToolid()
    {
        return $this->container['toolid'];
    }

    /**
     * Sets toolid
     *
     * @param int $toolid Unique ID of the tool.
     *
     * @return $this
     */
    public function setToolid($toolid)
    {
        $this->container['toolid'] = $toolid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the tool.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret Secret key for the tool.
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets timecreated
     *
     * @return string
     */
    public function getTimecreated()
    {
        return $this->container['timecreated'];
    }

    /**
     * Sets timecreated
     *
     * @param string $timecreated Timestamp of when the tool was      *                                                             created.
     *
     * @return $this
     */
    public function setTimecreated($timecreated)
    {
        $this->container['timecreated'] = $timecreated;

        return $this;
    }

    /**
     * Gets ltitype
     *
     * @return string
     */
    public function getLtitype()
    {
        return $this->container['ltitype'];
    }

    /**
     * Sets ltitype
     *
     * @param string $ltitype Type of LTI.
     *
     * @return $this
     */
    public function setLtitype($ltitype)
    {
        $this->container['ltitype'] = $ltitype;

        return $this;
    }

    /**
     * Gets cartridgeurl
     *
     * @return string
     */
    public function getCartridgeurl()
    {
        return $this->container['cartridgeurl'];
    }

    /**
     * Sets cartridgeurl
     *
     * @param string $cartridgeurl URL for cartridge.
     *
     * @return $this
     */
    public function setCartridgeurl($cartridgeurl)
    {
        $this->container['cartridgeurl'] = $cartridgeurl;

        return $this;
    }

    /**
     * Gets launchurl
     *
     * @return string
     */
    public function getLaunchurl()
    {
        return $this->container['launchurl'];
    }

    /**
     * Sets launchurl
     *
     * @param string $launchurl URL to launch the tool.
     *
     * @return $this
     */
    public function setLaunchurl($launchurl)
    {
        $this->container['launchurl'] = $launchurl;

        return $this;
    }

    /**
     * Gets registrationurl
     *
     * @return string
     */
    public function getRegistrationurl()
    {
        return $this->container['registrationurl'];
    }

    /**
     * Sets registrationurl
     *
     * @param string $registrationurl URL for registration.
     *
     * @return $this
     */
    public function setRegistrationurl($registrationurl)
    {
        $this->container['registrationurl'] = $registrationurl;

        return $this;
    }

    /**
     * Gets customproperties
     *
     * @return string
     */
    public function getCustomproperties()
    {
        return $this->container['customproperties'];
    }

    /**
     * Sets customproperties
     *
     * @param string $customproperties Custom properties for the      *                                                                  tool.
     *
     * @return $this
     */
    public function setCustomproperties($customproperties)
    {
        $this->container['customproperties'] = $customproperties;

        return $this;
    }

    /**
     * Gets resourcetype
     *
     * @return string
     */
    public function getResourcetype()
    {
        return $this->container['resourcetype'];
    }

    /**
     * Sets resourcetype
     *
     * @param string $resourcetype Type of the resource.
     *
     * @return $this
     */
    public function setResourcetype($resourcetype)
    {
        $this->container['resourcetype'] = $resourcetype;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}