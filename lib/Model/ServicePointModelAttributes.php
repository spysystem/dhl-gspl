<?php
/**
 * ServicePointModelAttributes
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@spysystem.dk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DHL\GSPL\Model;

/**
 * ServicePointModelAttributes Class Doc Comment
 *
 * @category Class
 * @package  DHL\GSPL
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ServicePointModelAttributes
{
    public string $strFacilityId = 'facility_id';
    public string $strFacilityTypeCode = 'facility_type_code';
    public string $strServiceAreaCode = 'service_area_code';
    public string $strServicePointName = 'service_point_name';
    public string $strServicePointNameFormatted = 'service_point_name_formatted';
    public string $strLocalName = 'local_name';
    public string $strServicePointType = 'service_point_type';
    public string $strAddress = 'address';
    public string $strGeoLocation = 'geo_location';
    public string $strDistance = 'distance';
    public string $strOpeningHours = 'opening_hours';
    public string $strServicePointCapabilities = 'service_point_capabilities';
    public string $strContactDetails = 'contact_details';
    public string $strShippingCutOffTimeHtml = 'shipping_cut_off_time_html';
    public string $strDistanceValue = 'distance_value';
    public string $strDistanceMetric = 'distance_metric';
    public string $strLanguage = 'language';
    public string $strShipmentLimitations = 'shipment_limitations';
    public string $strShipmentLimitationsByPiece = 'shipment_limitations_by_piece';
    public string $strChargeCode = 'charge_code';
}

