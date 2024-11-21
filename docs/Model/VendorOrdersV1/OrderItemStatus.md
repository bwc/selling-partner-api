## OrderItemStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer's Standard Identification Number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**net_cost** | [**\SellingPartnerApiV5\Model\VendorOrdersV1\Money**](Money.md) |  | [optional]
**list_price** | [**\SellingPartnerApiV5\Model\VendorOrdersV1\Money**](Money.md) |  | [optional]
**ordered_quantity** | [**\SellingPartnerApiV5\Model\VendorOrdersV1\OrderItemStatusOrderedQuantity**](OrderItemStatusOrderedQuantity.md) |  | [optional]
**acknowledgement_status** | [**\SellingPartnerApiV5\Model\VendorOrdersV1\OrderItemStatusAcknowledgementStatus**](OrderItemStatusAcknowledgementStatus.md) |  | [optional]
**receiving_status** | [**\SellingPartnerApiV5\Model\VendorOrdersV1\OrderItemStatusReceivingStatus**](OrderItemStatusReceivingStatus.md) |  | [optional]

[[VendorOrdersV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
