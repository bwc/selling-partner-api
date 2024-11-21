## AffordabilityExpenseEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**marketplace_id** | **string** | An encrypted, Amazon-defined marketplace identifier. | [optional]
**transaction_type** | **string** | Indicates the type of transaction. <br><br>Possible values:<br><br>* Charge - For an affordability promotion expense.<br><br>* Refund - For an affordability promotion expense reversal. | [optional]
**base_expense** | [**\SellingPartnerApiV5\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**tax_type_cgst** | [**\SellingPartnerApiV5\Model\FinancesV0\Currency**](Currency.md) |  |
**tax_type_sgst** | [**\SellingPartnerApiV5\Model\FinancesV0\Currency**](Currency.md) |  |
**tax_type_igst** | [**\SellingPartnerApiV5\Model\FinancesV0\Currency**](Currency.md) |  |
**total_expense** | [**\SellingPartnerApiV5\Model\FinancesV0\Currency**](Currency.md) |  | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
