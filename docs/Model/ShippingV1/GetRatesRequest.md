## GetRatesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_to** | [**\SellingPartnerApiV5\Model\ShippingV1\Address**](Address.md) |  |
**ship_from** | [**\SellingPartnerApiV5\Model\ShippingV1\Address**](Address.md) |  |
**service_types** | [**\SellingPartnerApiV5\Model\ShippingV1\ServiceType[]**](ServiceType.md) | A list of service types that can be used to send the shipment. |
**ship_date** | **string** | The start date and time. Must be in ISO 8601 format. This defaults to the current date and time. | [optional]
**container_specifications** | [**\SellingPartnerApiV5\Model\ShippingV1\ContainerSpecification[]**](ContainerSpecification.md) | A list of container specifications. |

[[ShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
