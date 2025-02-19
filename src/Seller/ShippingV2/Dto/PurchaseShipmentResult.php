<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class PurchaseShipmentResult extends Dto
{
    protected static array $complexArrayTypes = ['packageDocumentDetails' => PackageDocumentDetail::class];

    /**
     * @param  string  $shipmentId  The unique shipment identifier provided by a shipping service.
     * @param  PackageDocumentDetail[]  $packageDocumentDetails  A list of post-purchase details about a package that will be shipped using a shipping service.
     * @param  Promise  $promise  The time windows promised for pickup and delivery events.
     * @param  ?Benefits  $benefits  Benefits that are included and excluded for each shipping offer. Benefits represents services provided by Amazon (eg. CLAIMS_PROTECTED, etc.) when sellers purchase shipping through Amazon. Benefit details will be made available for any shipment placed on or after January 1st 2024 00:00 UTC.
     */
    public function __construct(
        public string $shipmentId,
        public array $packageDocumentDetails,
        public Promise $promise,
        public ?Benefits $benefits = null,
    ) {}
}
