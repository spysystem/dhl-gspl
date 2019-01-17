<?php
/**
 * ServicePoint
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
 * ServicePoint Class Doc Comment
 *
 * @category Class
 * @package  Spy\Package\SpyClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServicePoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServicePoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'facility_id' => 'string',
        'facility_type_code' => 'string',
        'service_area_code' => 'string',
        'service_point_name' => 'string',
        'service_point_name_formatted' => 'string',
        'local_name' => 'string',
        'service_point_type' => 'string',
        'address' => '\Spy\Package\SpyClient\Model\Address',
        'geo_location' => '\Spy\Package\SpyClient\Model\GeoLocation',
        'distance' => 'string',
        'opening_hours' => '\Spy\Package\SpyClient\Model\OpeningHours',
        'service_point_capabilities' => '\Spy\Package\SpyClient\Model\ServicePointCapabilities',
        'contact_details' => '\Spy\Package\SpyClient\Model\ContactDetails',
        'shipping_cut_off_time_html' => 'string',
        'distance_value' => 'string',
        'distance_metric' => 'float',
        'language' => '\Spy\Package\SpyClient\Model\Language',
        'shipment_limitations' => '\Spy\Package\SpyClient\Model\ShipmentLimitations',
        'shipment_limitations_by_piece' => '\Spy\Package\SpyClient\Model\ShipmentLimitationsByPiece',
        'charge_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'facility_id' => null,
        'facility_type_code' => null,
        'service_area_code' => null,
        'service_point_name' => null,
        'service_point_name_formatted' => null,
        'local_name' => null,
        'service_point_type' => null,
        'address' => null,
        'geo_location' => null,
        'distance' => null,
        'opening_hours' => null,
        'service_point_capabilities' => null,
        'contact_details' => null,
        'shipping_cut_off_time_html' => null,
        'distance_value' => null,
        'distance_metric' => null,
        'language' => null,
        'shipment_limitations' => null,
        'shipment_limitations_by_piece' => null,
        'charge_code' => null
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
        'facility_id' => 'facilityId',
        'facility_type_code' => 'facilityTypeCode',
        'service_area_code' => 'serviceAreaCode',
        'service_point_name' => 'servicePointName',
        'service_point_name_formatted' => 'servicePointNameFormatted',
        'local_name' => 'localName',
        'service_point_type' => 'servicePointType',
        'address' => 'address',
        'geo_location' => 'geoLocation',
        'distance' => 'distance',
        'opening_hours' => 'openingHours',
        'service_point_capabilities' => 'servicePointCapabilities',
        'contact_details' => 'contactDetails',
        'shipping_cut_off_time_html' => 'shippingCutOffTimeHtml',
        'distance_value' => 'distanceValue',
        'distance_metric' => 'distanceMetric',
        'language' => 'language',
        'shipment_limitations' => 'shipmentLimitations',
        'shipment_limitations_by_piece' => 'shipmentLimitationsByPiece',
        'charge_code' => 'chargeCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'facility_id' => 'setFacilityId',
        'facility_type_code' => 'setFacilityTypeCode',
        'service_area_code' => 'setServiceAreaCode',
        'service_point_name' => 'setServicePointName',
        'service_point_name_formatted' => 'setServicePointNameFormatted',
        'local_name' => 'setLocalName',
        'service_point_type' => 'setServicePointType',
        'address' => 'setAddress',
        'geo_location' => 'setGeoLocation',
        'distance' => 'setDistance',
        'opening_hours' => 'setOpeningHours',
        'service_point_capabilities' => 'setServicePointCapabilities',
        'contact_details' => 'setContactDetails',
        'shipping_cut_off_time_html' => 'setShippingCutOffTimeHtml',
        'distance_value' => 'setDistanceValue',
        'distance_metric' => 'setDistanceMetric',
        'language' => 'setLanguage',
        'shipment_limitations' => 'setShipmentLimitations',
        'shipment_limitations_by_piece' => 'setShipmentLimitationsByPiece',
        'charge_code' => 'setChargeCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'facility_id' => 'getFacilityId',
        'facility_type_code' => 'getFacilityTypeCode',
        'service_area_code' => 'getServiceAreaCode',
        'service_point_name' => 'getServicePointName',
        'service_point_name_formatted' => 'getServicePointNameFormatted',
        'local_name' => 'getLocalName',
        'service_point_type' => 'getServicePointType',
        'address' => 'getAddress',
        'geo_location' => 'getGeoLocation',
        'distance' => 'getDistance',
        'opening_hours' => 'getOpeningHours',
        'service_point_capabilities' => 'getServicePointCapabilities',
        'contact_details' => 'getContactDetails',
        'shipping_cut_off_time_html' => 'getShippingCutOffTimeHtml',
        'distance_value' => 'getDistanceValue',
        'distance_metric' => 'getDistanceMetric',
        'language' => 'getLanguage',
        'shipment_limitations' => 'getShipmentLimitations',
        'shipment_limitations_by_piece' => 'getShipmentLimitationsByPiece',
        'charge_code' => 'getChargeCode'
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
        $this->container['facility_id'] = isset($data['facility_id']) ? $data['facility_id'] : null;
        $this->container['facility_type_code'] = isset($data['facility_type_code']) ? $data['facility_type_code'] : null;
        $this->container['service_area_code'] = isset($data['service_area_code']) ? $data['service_area_code'] : null;
        $this->container['service_point_name'] = isset($data['service_point_name']) ? $data['service_point_name'] : null;
        $this->container['service_point_name_formatted'] = isset($data['service_point_name_formatted']) ? $data['service_point_name_formatted'] : null;
        $this->container['local_name'] = isset($data['local_name']) ? $data['local_name'] : null;
        $this->container['service_point_type'] = isset($data['service_point_type']) ? $data['service_point_type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['geo_location'] = isset($data['geo_location']) ? $data['geo_location'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
        $this->container['opening_hours'] = isset($data['opening_hours']) ? $data['opening_hours'] : null;
        $this->container['service_point_capabilities'] = isset($data['service_point_capabilities']) ? $data['service_point_capabilities'] : null;
        $this->container['contact_details'] = isset($data['contact_details']) ? $data['contact_details'] : null;
        $this->container['shipping_cut_off_time_html'] = isset($data['shipping_cut_off_time_html']) ? $data['shipping_cut_off_time_html'] : null;
        $this->container['distance_value'] = isset($data['distance_value']) ? $data['distance_value'] : null;
        $this->container['distance_metric'] = isset($data['distance_metric']) ? $data['distance_metric'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['shipment_limitations'] = isset($data['shipment_limitations']) ? $data['shipment_limitations'] : null;
        $this->container['shipment_limitations_by_piece'] = isset($data['shipment_limitations_by_piece']) ? $data['shipment_limitations_by_piece'] : null;
        $this->container['charge_code'] = isset($data['charge_code']) ? $data['charge_code'] : null;
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
     * Gets facility_id
     *
     * @return string|null
     */
    public function getFacilityId()
    {
        return $this->container['facility_id'];
    }

    /**
     * Sets facility_id
     *
     * @param string|null $facility_id facility_id
     *
     * @return $this
     */
    public function setFacilityId($facility_id)
    {
        $this->container['facility_id'] = $facility_id;

        return $this;
    }

    /**
     * Gets facility_type_code
     *
     * @return string|null
     */
    public function getFacilityTypeCode()
    {
        return $this->container['facility_type_code'];
    }

    /**
     * Sets facility_type_code
     *
     * @param string|null $facility_type_code facility_type_code
     *
     * @return $this
     */
    public function setFacilityTypeCode($facility_type_code)
    {
        $this->container['facility_type_code'] = $facility_type_code;

        return $this;
    }

    /**
     * Gets service_area_code
     *
     * @return string|null
     */
    public function getServiceAreaCode()
    {
        return $this->container['service_area_code'];
    }

    /**
     * Sets service_area_code
     *
     * @param string|null $service_area_code service_area_code
     *
     * @return $this
     */
    public function setServiceAreaCode($service_area_code)
    {
        $this->container['service_area_code'] = $service_area_code;

        return $this;
    }

    /**
     * Gets service_point_name
     *
     * @return string|null
     */
    public function getServicePointName()
    {
        return $this->container['service_point_name'];
    }

    /**
     * Sets service_point_name
     *
     * @param string|null $service_point_name service_point_name
     *
     * @return $this
     */
    public function setServicePointName($service_point_name)
    {
        $this->container['service_point_name'] = $service_point_name;

        return $this;
    }

    /**
     * Gets service_point_name_formatted
     *
     * @return string|null
     */
    public function getServicePointNameFormatted()
    {
        return $this->container['service_point_name_formatted'];
    }

    /**
     * Sets service_point_name_formatted
     *
     * @param string|null $service_point_name_formatted service_point_name_formatted
     *
     * @return $this
     */
    public function setServicePointNameFormatted($service_point_name_formatted)
    {
        $this->container['service_point_name_formatted'] = $service_point_name_formatted;

        return $this;
    }

    /**
     * Gets local_name
     *
     * @return string|null
     */
    public function getLocalName()
    {
        return $this->container['local_name'];
    }

    /**
     * Sets local_name
     *
     * @param string|null $local_name local_name
     *
     * @return $this
     */
    public function setLocalName($local_name)
    {
        $this->container['local_name'] = $local_name;

        return $this;
    }

    /**
     * Gets service_point_type
     *
     * @return string|null
     */
    public function getServicePointType()
    {
        return $this->container['service_point_type'];
    }

    /**
     * Sets service_point_type
     *
     * @param string|null $service_point_type service_point_type
     *
     * @return $this
     */
    public function setServicePointType($service_point_type)
    {
        $this->container['service_point_type'] = $service_point_type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Spy\Package\SpyClient\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Spy\Package\SpyClient\Model\Address|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets geo_location
     *
     * @return \Spy\Package\SpyClient\Model\GeoLocation|null
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param \Spy\Package\SpyClient\Model\GeoLocation|null $geo_location geo_location
     *
     * @return $this
     */
    public function setGeoLocation($geo_location)
    {
        $this->container['geo_location'] = $geo_location;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return string|null
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param string|null $distance distance
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

        return $this;
    }

    /**
     * Gets opening_hours
     *
     * @return \Spy\Package\SpyClient\Model\OpeningHours|null
     */
    public function getOpeningHours()
    {
        return $this->container['opening_hours'];
    }

    /**
     * Sets opening_hours
     *
     * @param \Spy\Package\SpyClient\Model\OpeningHours|null $opening_hours opening_hours
     *
     * @return $this
     */
    public function setOpeningHours($opening_hours)
    {
        $this->container['opening_hours'] = $opening_hours;

        return $this;
    }

    /**
     * Gets service_point_capabilities
     *
     * @return \Spy\Package\SpyClient\Model\ServicePointCapabilities|null
     */
    public function getServicePointCapabilities()
    {
        return $this->container['service_point_capabilities'];
    }

    /**
     * Sets service_point_capabilities
     *
     * @param \Spy\Package\SpyClient\Model\ServicePointCapabilities|null $service_point_capabilities service_point_capabilities
     *
     * @return $this
     */
    public function setServicePointCapabilities($service_point_capabilities)
    {
        $this->container['service_point_capabilities'] = $service_point_capabilities;

        return $this;
    }

    /**
     * Gets contact_details
     *
     * @return \Spy\Package\SpyClient\Model\ContactDetails|null
     */
    public function getContactDetails()
    {
        return $this->container['contact_details'];
    }

    /**
     * Sets contact_details
     *
     * @param \Spy\Package\SpyClient\Model\ContactDetails|null $contact_details contact_details
     *
     * @return $this
     */
    public function setContactDetails($contact_details)
    {
        $this->container['contact_details'] = $contact_details;

        return $this;
    }

    /**
     * Gets shipping_cut_off_time_html
     *
     * @return string|null
     */
    public function getShippingCutOffTimeHtml()
    {
        return $this->container['shipping_cut_off_time_html'];
    }

    /**
     * Sets shipping_cut_off_time_html
     *
     * @param string|null $shipping_cut_off_time_html shipping_cut_off_time_html
     *
     * @return $this
     */
    public function setShippingCutOffTimeHtml($shipping_cut_off_time_html)
    {
        $this->container['shipping_cut_off_time_html'] = $shipping_cut_off_time_html;

        return $this;
    }

    /**
     * Gets distance_value
     *
     * @return string|null
     */
    public function getDistanceValue()
    {
        return $this->container['distance_value'];
    }

    /**
     * Sets distance_value
     *
     * @param string|null $distance_value distance_value
     *
     * @return $this
     */
    public function setDistanceValue($distance_value)
    {
        $this->container['distance_value'] = $distance_value;

        return $this;
    }

    /**
     * Gets distance_metric
     *
     * @return float|null
     */
    public function getDistanceMetric()
    {
        return $this->container['distance_metric'];
    }

    /**
     * Sets distance_metric
     *
     * @param float|null $distance_metric distance_metric
     *
     * @return $this
     */
    public function setDistanceMetric($distance_metric)
    {
        $this->container['distance_metric'] = $distance_metric;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \Spy\Package\SpyClient\Model\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \Spy\Package\SpyClient\Model\Language|null $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets shipment_limitations
     *
     * @return \Spy\Package\SpyClient\Model\ShipmentLimitations|null
     */
    public function getShipmentLimitations()
    {
        return $this->container['shipment_limitations'];
    }

    /**
     * Sets shipment_limitations
     *
     * @param \Spy\Package\SpyClient\Model\ShipmentLimitations|null $shipment_limitations shipment_limitations
     *
     * @return $this
     */
    public function setShipmentLimitations($shipment_limitations)
    {
        $this->container['shipment_limitations'] = $shipment_limitations;

        return $this;
    }

    /**
     * Gets shipment_limitations_by_piece
     *
     * @return \Spy\Package\SpyClient\Model\ShipmentLimitationsByPiece|null
     */
    public function getShipmentLimitationsByPiece()
    {
        return $this->container['shipment_limitations_by_piece'];
    }

    /**
     * Sets shipment_limitations_by_piece
     *
     * @param \Spy\Package\SpyClient\Model\ShipmentLimitationsByPiece|null $shipment_limitations_by_piece shipment_limitations_by_piece
     *
     * @return $this
     */
    public function setShipmentLimitationsByPiece($shipment_limitations_by_piece)
    {
        $this->container['shipment_limitations_by_piece'] = $shipment_limitations_by_piece;

        return $this;
    }

    /**
     * Gets charge_code
     *
     * @return string|null
     */
    public function getChargeCode()
    {
        return $this->container['charge_code'];
    }

    /**
     * Sets charge_code
     *
     * @param string|null $charge_code charge_code
     *
     * @return $this
     */
    public function setChargeCode($charge_code)
    {
        $this->container['charge_code'] = $charge_code;

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


