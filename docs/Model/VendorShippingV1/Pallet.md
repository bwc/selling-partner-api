## Pallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pallet_identifiers** | [**\SellingPartnerApiV5\Model\VendorShippingV1\ContainerIdentification[]**](ContainerIdentification.md) | A list of pallet identifiers. |
**tier** | **int** | Number of layers per pallet. Only applicable to container type Pallet. | [optional]
**block** | **int** | Number of cartons per layer on the pallet. Only applicable to container type Pallet. | [optional]
**dimensions** | [**\SellingPartnerApiV5\Model\VendorShippingV1\Dimensions**](Dimensions.md) |  | [optional]
**weight** | [**\SellingPartnerApiV5\Model\VendorShippingV1\Weight**](Weight.md) |  | [optional]
**carton_reference_details** | [**\SellingPartnerApiV5\Model\VendorShippingV1\CartonReferenceDetails**](CartonReferenceDetails.md) |  | [optional]
**items** | [**\SellingPartnerApiV5\Model\VendorShippingV1\ContainerItem[]**](ContainerItem.md) | A list of container item details. | [optional]

[[VendorShippingV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
