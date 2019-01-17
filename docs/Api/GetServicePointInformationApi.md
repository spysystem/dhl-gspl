# DHL\GSPL\GetServicePointInformationApi

All URIs are relative to *https://locator.dhl.com/ServicePointLocator/restV2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getServicePointInfo**](GetServicePointInformationApi.md#getServicePointInfo) | **GET** /servicepoints | 


# **getServicePointInfo**
> \DHL\GSPL\Model\Response getServicePointInfo($country_code, $language_code, $id, $address)



Get Service Point Information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DHL\GSPL\Api\GetServicePointInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = 'country_code_example'; // string | 
$language_code = 'eng'; // string | 
$id = 'id_example'; // string | required if address not present
$address = 'address_example'; // string | required if id not present

try {
    $result = $apiInstance->getServicePointInfo($country_code, $language_code, $id, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GetServicePointInformationApi->getServicePointInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**|  |
 **language_code** | **string**|  | [default to &#39;eng&#39;]
 **id** | **string**| required if address not present | [optional]
 **address** | **string**| required if id not present | [optional]

### Return type

[**\DHL\GSPL\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

