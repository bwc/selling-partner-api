## Summary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_offer_count** | **int** | The number of unique offers contained in NumberOfOffers. |
**number_of_offers** | [**\SellingPartnerApiV5\Model\ProductPricingV0\OfferCountType[]**](OfferCountType.md) |  | [optional]
**lowest_prices** | [**\SellingPartnerApiV5\Model\ProductPricingV0\LowestPriceType[]**](LowestPriceType.md) |  | [optional]
**buy_box_prices** | [**\SellingPartnerApiV5\Model\ProductPricingV0\BuyBoxPriceType[]**](BuyBoxPriceType.md) |  | [optional]
**list_price** | [**\SellingPartnerApiV5\Model\ProductPricingV0\MoneyType**](MoneyType.md) |  | [optional]
**competitive_price_threshold** | [**\SellingPartnerApiV5\Model\ProductPricingV0\MoneyType**](MoneyType.md) |  | [optional]
**suggested_lower_price_plus_shipping** | [**\SellingPartnerApiV5\Model\ProductPricingV0\MoneyType**](MoneyType.md) |  | [optional]
**sales_rankings** | [**\SellingPartnerApiV5\Model\ProductPricingV0\SalesRankType[]**](SalesRankType.md) | A list of sales rank information for the item, by category. | [optional]
**buy_box_eligible_offers** | [**\SellingPartnerApiV5\Model\ProductPricingV0\OfferCountType[]**](OfferCountType.md) |  | [optional]
**offers_available_time** | **string** | When the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing. Must be in ISO 8601 format. | [optional]

[[ProductPricingV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
