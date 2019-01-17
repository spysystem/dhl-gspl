<?php
/**
 * Map
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spy\Package\SpyClient
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

namespace Spy\Package\SpyClient\Model;

use \ArrayAccess;
use \Spy\Package\SpyClient\ObjectSerializer;

/**
 * Map Class Doc Comment
 *
 * @category Class
 * @package  Spy\Package\SpyClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Map implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Map';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sp_detail' => 'string',
        'aditional_info' => 'string',
        'services' => 'string',
        'opening_hours' => 'string',
        'limitation_by_shipment' => 'string',
        'holiday_hours' => 'string',
        'limitation' => 'string',
        'limitation_by_piece' => 'string',
        'print' => 'string',
        'details' => 'string',
        'route' => 'string',
        'contact_details' => 'string',
        'found' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sp_detail' => null,
        'aditional_info' => null,
        'services' => null,
        'opening_hours' => null,
        'limitation_by_shipment' => null,
        'holiday_hours' => null,
        'limitation' => null,
        'limitation_by_piece' => null,
        'print' => null,
        'details' => null,
        'route' => null,
        'contact_details' => null,
        'found' => null
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
        'sp_detail' => 'spDetail',
        'aditional_info' => 'aditionalInfo',
        'services' => 'services',
        'opening_hours' => 'openingHours',
        'limitation_by_shipment' => 'limitationByShipment',
        'holiday_hours' => 'holidayHours',
        'limitation' => 'limitation',
        'limitation_by_piece' => 'limitationByPiece',
        'print' => 'print',
        'details' => 'details',
        'route' => 'route',
        'contact_details' => 'contactDetails',
        'found' => 'found'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sp_detail' => 'setSpDetail',
        'aditional_info' => 'setAditionalInfo',
        'services' => 'setServices',
        'opening_hours' => 'setOpeningHours',
        'limitation_by_shipment' => 'setLimitationByShipment',
        'holiday_hours' => 'setHolidayHours',
        'limitation' => 'setLimitation',
        'limitation_by_piece' => 'setLimitationByPiece',
        'print' => 'setPrint',
        'details' => 'setDetails',
        'route' => 'setRoute',
        'contact_details' => 'setContactDetails',
        'found' => 'setFound'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sp_detail' => 'getSpDetail',
        'aditional_info' => 'getAditionalInfo',
        'services' => 'getServices',
        'opening_hours' => 'getOpeningHours',
        'limitation_by_shipment' => 'getLimitationByShipment',
        'holiday_hours' => 'getHolidayHours',
        'limitation' => 'getLimitation',
        'limitation_by_piece' => 'getLimitationByPiece',
        'print' => 'getPrint',
        'details' => 'getDetails',
        'route' => 'getRoute',
        'contact_details' => 'getContactDetails',
        'found' => 'getFound'
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
        $this->container['sp_detail'] = isset($data['sp_detail']) ? $data['sp_detail'] : null;
        $this->container['aditional_info'] = isset($data['aditional_info']) ? $data['aditional_info'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['opening_hours'] = isset($data['opening_hours']) ? $data['opening_hours'] : null;
        $this->container['limitation_by_shipment'] = isset($data['limitation_by_shipment']) ? $data['limitation_by_shipment'] : null;
        $this->container['holiday_hours'] = isset($data['holiday_hours']) ? $data['holiday_hours'] : null;
        $this->container['limitation'] = isset($data['limitation']) ? $data['limitation'] : null;
        $this->container['limitation_by_piece'] = isset($data['limitation_by_piece']) ? $data['limitation_by_piece'] : null;
        $this->container['print'] = isset($data['print']) ? $data['print'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['contact_details'] = isset($data['contact_details']) ? $data['contact_details'] : null;
        $this->container['found'] = isset($data['found']) ? $data['found'] : null;
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
     * Gets sp_detail
     *
     * @return string|null
     */
    public function getSpDetail()
    {
        return $this->container['sp_detail'];
    }

    /**
     * Sets sp_detail
     *
     * @param string|null $sp_detail sp_detail
     *
     * @return $this
     */
    public function setSpDetail($sp_detail)
    {
        $this->container['sp_detail'] = $sp_detail;

        return $this;
    }

    /**
     * Gets aditional_info
     *
     * @return string|null
     */
    public function getAditionalInfo()
    {
        return $this->container['aditional_info'];
    }

    /**
     * Sets aditional_info
     *
     * @param string|null $aditional_info aditional_info
     *
     * @return $this
     */
    public function setAditionalInfo($aditional_info)
    {
        $this->container['aditional_info'] = $aditional_info;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string|null $services services
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets opening_hours
     *
     * @return string|null
     */
    public function getOpeningHours()
    {
        return $this->container['opening_hours'];
    }

    /**
     * Sets opening_hours
     *
     * @param string|null $opening_hours opening_hours
     *
     * @return $this
     */
    public function setOpeningHours($opening_hours)
    {
        $this->container['opening_hours'] = $opening_hours;

        return $this;
    }

    /**
     * Gets limitation_by_shipment
     *
     * @return string|null
     */
    public function getLimitationByShipment()
    {
        return $this->container['limitation_by_shipment'];
    }

    /**
     * Sets limitation_by_shipment
     *
     * @param string|null $limitation_by_shipment limitation_by_shipment
     *
     * @return $this
     */
    public function setLimitationByShipment($limitation_by_shipment)
    {
        $this->container['limitation_by_shipment'] = $limitation_by_shipment;

        return $this;
    }

    /**
     * Gets holiday_hours
     *
     * @return string|null
     */
    public function getHolidayHours()
    {
        return $this->container['holiday_hours'];
    }

    /**
     * Sets holiday_hours
     *
     * @param string|null $holiday_hours holiday_hours
     *
     * @return $this
     */
    public function setHolidayHours($holiday_hours)
    {
        $this->container['holiday_hours'] = $holiday_hours;

        return $this;
    }

    /**
     * Gets limitation
     *
     * @return string|null
     */
    public function getLimitation()
    {
        return $this->container['limitation'];
    }

    /**
     * Sets limitation
     *
     * @param string|null $limitation limitation
     *
     * @return $this
     */
    public function setLimitation($limitation)
    {
        $this->container['limitation'] = $limitation;

        return $this;
    }

    /**
     * Gets limitation_by_piece
     *
     * @return string|null
     */
    public function getLimitationByPiece()
    {
        return $this->container['limitation_by_piece'];
    }

    /**
     * Sets limitation_by_piece
     *
     * @param string|null $limitation_by_piece limitation_by_piece
     *
     * @return $this
     */
    public function setLimitationByPiece($limitation_by_piece)
    {
        $this->container['limitation_by_piece'] = $limitation_by_piece;

        return $this;
    }

    /**
     * Gets print
     *
     * @return string|null
     */
    public function getPrint()
    {
        return $this->container['print'];
    }

    /**
     * Sets print
     *
     * @param string|null $print print
     *
     * @return $this
     */
    public function setPrint($print)
    {
        $this->container['print'] = $print;

        return $this;
    }

    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string|null $route route
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets contact_details
     *
     * @return string|null
     */
    public function getContactDetails()
    {
        return $this->container['contact_details'];
    }

    /**
     * Sets contact_details
     *
     * @param string|null $contact_details contact_details
     *
     * @return $this
     */
    public function setContactDetails($contact_details)
    {
        $this->container['contact_details'] = $contact_details;

        return $this;
    }

    /**
     * Gets found
     *
     * @return string|null
     */
    public function getFound()
    {
        return $this->container['found'];
    }

    /**
     * Sets found
     *
     * @param string|null $found found
     *
     * @return $this
     */
    public function setFound($found)
    {
        $this->container['found'] = $found;

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


