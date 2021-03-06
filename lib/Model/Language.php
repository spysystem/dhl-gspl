<?php
/**
 * Language
 *
 * PHP version 5
 *
 * @category Class
 * @package  DHL\GSPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DHL Global Service Point Locator API
 *
 * Web service for getting DHL Service Points
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DHL\GSPL\Model;

use \ArrayAccess;
use \DHL\GSPL\ObjectSerializer;

/**
 * Language Class Doc Comment
 *
 * @category Class
 * @package  DHL\GSPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Language implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Language';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language_code' => 'string',
        'language_script_code' => 'string',
        'language_country_code' => 'string',
        'language_ok' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'language_code' => null,
        'language_script_code' => null,
        'language_country_code' => null,
        'language_ok' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'language_code' => 'languageCode',
        'language_script_code' => 'languageScriptCode',
        'language_country_code' => 'languageCountryCode',
        'language_ok' => 'languageOk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language_code' => 'setLanguageCode',
        'language_script_code' => 'setLanguageScriptCode',
        'language_country_code' => 'setLanguageCountryCode',
        'language_ok' => 'setLanguageOk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language_code' => 'getLanguageCode',
        'language_script_code' => 'getLanguageScriptCode',
        'language_country_code' => 'getLanguageCountryCode',
        'language_ok' => 'getLanguageOk'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['language_script_code'] = isset($data['language_script_code']) ? $data['language_script_code'] : null;
        $this->container['language_country_code'] = isset($data['language_country_code']) ? $data['language_country_code'] : null;
        $this->container['language_ok'] = isset($data['language_ok']) ? $data['language_ok'] : null;
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
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code language_code
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets language_script_code
     *
     * @return string|null
     */
    public function getLanguageScriptCode()
    {
        return $this->container['language_script_code'];
    }

    /**
     * Sets language_script_code
     *
     * @param string|null $language_script_code language_script_code
     *
     * @return $this
     */
    public function setLanguageScriptCode($language_script_code)
    {
        $this->container['language_script_code'] = $language_script_code;

        return $this;
    }

    /**
     * Gets language_country_code
     *
     * @return string|null
     */
    public function getLanguageCountryCode()
    {
        return $this->container['language_country_code'];
    }

    /**
     * Sets language_country_code
     *
     * @param string|null $language_country_code language_country_code
     *
     * @return $this
     */
    public function setLanguageCountryCode($language_country_code)
    {
        $this->container['language_country_code'] = $language_country_code;

        return $this;
    }

    /**
     * Gets language_ok
     *
     * @return bool|null
     */
    public function getLanguageOk()
    {
        return $this->container['language_ok'];
    }

    /**
     * Sets language_ok
     *
     * @param bool|null $language_ok language_ok
     *
     * @return $this
     */
    public function setLanguageOk($language_ok)
    {
        $this->container['language_ok'] = $language_ok;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


