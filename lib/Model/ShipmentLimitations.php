<?php
/**
 * ShipmentLimitations
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
 * ShipmentLimitations Class Doc Comment
 *
 * @category Class
 * @package  DHL\GSPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentLimitations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentLimitations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'max_number_of_pieces' => '\DHL\GSPL\Model\MaxNumberOfPieces',
        'max_shipment_weight' => '\DHL\GSPL\Model\MaxShipmentWeight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'max_number_of_pieces' => null,
        'max_shipment_weight' => null
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
        'max_number_of_pieces' => 'maxNumberOfPieces',
        'max_shipment_weight' => 'maxShipmentWeight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_number_of_pieces' => 'setMaxNumberOfPieces',
        'max_shipment_weight' => 'setMaxShipmentWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_number_of_pieces' => 'getMaxNumberOfPieces',
        'max_shipment_weight' => 'getMaxShipmentWeight'
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
        $this->container['max_number_of_pieces'] = isset($data['max_number_of_pieces']) ? $data['max_number_of_pieces'] : null;
        $this->container['max_shipment_weight'] = isset($data['max_shipment_weight']) ? $data['max_shipment_weight'] : null;
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
     * Gets max_number_of_pieces
     *
     * @return \DHL\GSPL\Model\MaxNumberOfPieces|null
     */
    public function getMaxNumberOfPieces()
    {
        return $this->container['max_number_of_pieces'];
    }

    /**
     * Sets max_number_of_pieces
     *
     * @param \DHL\GSPL\Model\MaxNumberOfPieces|null $max_number_of_pieces max_number_of_pieces
     *
     * @return $this
     */
    public function setMaxNumberOfPieces($max_number_of_pieces)
    {
        $this->container['max_number_of_pieces'] = $max_number_of_pieces;

        return $this;
    }

    /**
     * Gets max_shipment_weight
     *
     * @return \DHL\GSPL\Model\MaxShipmentWeight|null
     */
    public function getMaxShipmentWeight()
    {
        return $this->container['max_shipment_weight'];
    }

    /**
     * Sets max_shipment_weight
     *
     * @param \DHL\GSPL\Model\MaxShipmentWeight|null $max_shipment_weight max_shipment_weight
     *
     * @return $this
     */
    public function setMaxShipmentWeight($max_shipment_weight)
    {
        $this->container['max_shipment_weight'] = $max_shipment_weight;

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


