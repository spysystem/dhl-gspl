<?php
/**
 * ShipmentLimitationsByPiece
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
 * ShipmentLimitationsByPiece Class Doc Comment
 *
 * @category Class
 * @package  DHL\GSPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentLimitationsByPiece implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentLimitationsByPiece';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'piece_size_limit1' => '\DHL\GSPL\Model\MaxShipmentWeight',
        'piece_size_limit2' => '\DHL\GSPL\Model\MaxShipmentWeight',
        'piece_size_limit3' => '\DHL\GSPL\Model\MaxShipmentWeight',
        'max_piece_weight' => '\DHL\GSPL\Model\MaxShipmentWeight',
        'html' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'piece_size_limit1' => null,
        'piece_size_limit2' => null,
        'piece_size_limit3' => null,
        'max_piece_weight' => null,
        'html' => null
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
        'piece_size_limit1' => 'pieceSizeLimit1',
        'piece_size_limit2' => 'pieceSizeLimit2',
        'piece_size_limit3' => 'pieceSizeLimit3',
        'max_piece_weight' => 'maxPieceWeight',
        'html' => 'html'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'piece_size_limit1' => 'setPieceSizeLimit1',
        'piece_size_limit2' => 'setPieceSizeLimit2',
        'piece_size_limit3' => 'setPieceSizeLimit3',
        'max_piece_weight' => 'setMaxPieceWeight',
        'html' => 'setHtml'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'piece_size_limit1' => 'getPieceSizeLimit1',
        'piece_size_limit2' => 'getPieceSizeLimit2',
        'piece_size_limit3' => 'getPieceSizeLimit3',
        'max_piece_weight' => 'getMaxPieceWeight',
        'html' => 'getHtml'
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
        $this->container['piece_size_limit1'] = isset($data['piece_size_limit1']) ? $data['piece_size_limit1'] : null;
        $this->container['piece_size_limit2'] = isset($data['piece_size_limit2']) ? $data['piece_size_limit2'] : null;
        $this->container['piece_size_limit3'] = isset($data['piece_size_limit3']) ? $data['piece_size_limit3'] : null;
        $this->container['max_piece_weight'] = isset($data['max_piece_weight']) ? $data['max_piece_weight'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
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
     * Gets piece_size_limit1
     *
     * @return \DHL\GSPL\Model\MaxShipmentWeight|null
     */
    public function getPieceSizeLimit1()
    {
        return $this->container['piece_size_limit1'];
    }

    /**
     * Sets piece_size_limit1
     *
     * @param \DHL\GSPL\Model\MaxShipmentWeight|null $piece_size_limit1 piece_size_limit1
     *
     * @return $this
     */
    public function setPieceSizeLimit1($piece_size_limit1)
    {
        $this->container['piece_size_limit1'] = $piece_size_limit1;

        return $this;
    }

    /**
     * Gets piece_size_limit2
     *
     * @return \DHL\GSPL\Model\MaxShipmentWeight|null
     */
    public function getPieceSizeLimit2()
    {
        return $this->container['piece_size_limit2'];
    }

    /**
     * Sets piece_size_limit2
     *
     * @param \DHL\GSPL\Model\MaxShipmentWeight|null $piece_size_limit2 piece_size_limit2
     *
     * @return $this
     */
    public function setPieceSizeLimit2($piece_size_limit2)
    {
        $this->container['piece_size_limit2'] = $piece_size_limit2;

        return $this;
    }

    /**
     * Gets piece_size_limit3
     *
     * @return \DHL\GSPL\Model\MaxShipmentWeight|null
     */
    public function getPieceSizeLimit3()
    {
        return $this->container['piece_size_limit3'];
    }

    /**
     * Sets piece_size_limit3
     *
     * @param \DHL\GSPL\Model\MaxShipmentWeight|null $piece_size_limit3 piece_size_limit3
     *
     * @return $this
     */
    public function setPieceSizeLimit3($piece_size_limit3)
    {
        $this->container['piece_size_limit3'] = $piece_size_limit3;

        return $this;
    }

    /**
     * Gets max_piece_weight
     *
     * @return \DHL\GSPL\Model\MaxShipmentWeight|null
     */
    public function getMaxPieceWeight()
    {
        return $this->container['max_piece_weight'];
    }

    /**
     * Sets max_piece_weight
     *
     * @param \DHL\GSPL\Model\MaxShipmentWeight|null $max_piece_weight max_piece_weight
     *
     * @return $this
     */
    public function setMaxPieceWeight($max_piece_weight)
    {
        $this->container['max_piece_weight'] = $max_piece_weight;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string|null $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

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


