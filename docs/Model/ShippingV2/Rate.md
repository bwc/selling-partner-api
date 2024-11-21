## Rate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rate_id** | **string** | An identifier for the rate (shipment offering) provided by a shipping service provider. |
**carrier_id** | **string** | The carrier identifier for the offering, provided by the carrier. |
**carrier_name** | **string** | The carrier name for the offering. |
**service_id** | **string** | An identifier for the shipping service. |
**service_name** | **string** | The name of the shipping service. |
**billed_weight** | [**\SellingPartnerApiV5\Model\ShippingV2\Weight**](Weight.md) |  | [optional]
**total_charge** | [**\SellingPartnerApiV5\Model\ShippingV2\Currency**](Currency.md) |  |
**promise** | [**\SellingPartnerApiV5\Model\ShippingV2\Promise**](Promise.md) |  |
**supported_document_specifications** | [**\SellingPartnerApiV5\Model\ShippingV2\SupportedDocumentSpecification[]**](SupportedDocumentSpecification.md) | A list of the document specifications supported for a shipment service offering. |
**available_value_added_service_groups** | [**\SellingPartnerApiV5\Model\ShippingV2\AvailableValueAddedServiceGroup[]**](AvailableValueAddedServiceGroup.md) | A list of value-added services available for a shipping service offering. | [optional]
**requires_additional_inputs** | **bool** | When true, indicates that additional inputs are required to purchase this shipment service. You must then call the getAdditionalInputs operation to return the JSON schema to use when providing the additional inputs to the purchaseShipment operation. |

[[ShippingV2 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
