<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class SubmitInvoiceRequest extends Dto
{
    protected static array $attributeMap = [
        'invoiceContent' => 'InvoiceContent',
        'contentMd5value' => 'ContentMD5Value',
        'marketplaceId' => 'MarketplaceId',
    ];

    /**
     * @param  string  $invoiceContent  Shipment invoice document content.
     * @param  string  $contentMd5value  MD5 sum for validating the invoice data. For more information about calculating this value, see [Working with Content-MD5 Checksums](https://docs.developer.amazonservices.com/en_US/dev_guide/DG_MD5.html).
     * @param  ?string  $marketplaceId  An Amazon marketplace identifier.
     */
    public function __construct(
        public string $invoiceContent,
        public string $contentMd5value,
        public ?string $marketplaceId = null,
    ) {}
}
