## OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. |
**buyer_product_identifier** | **string** | Buyer's standard identification number (ASIN) of an item. | [optional]
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional]
**title** | **string** | Title for the item. | [optional]
**ordered_quantity** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\ItemQuantity**](ItemQuantity.md) |  |
**scheduled_delivery_shipment** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\ScheduledDeliveryShipment**](ScheduledDeliveryShipment.md) |  | [optional]
**gift_details** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\GiftDetails**](GiftDetails.md) |  | [optional]
**net_price** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\Money**](Money.md) |  |
**tax_details** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\TaxItemDetails**](TaxItemDetails.md) |  | [optional]
**total_price** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\Money**](Money.md) |  | [optional]
**buyer_customized_info** | [**\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\BuyerCustomizedInfoDetail**](BuyerCustomizedInfoDetail.md) |  | [optional]

[[VendorDirectFulfillmentOrdersV20211228 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
