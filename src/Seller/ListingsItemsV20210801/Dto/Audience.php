<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use SellingPartnerApi\Dto;

final class Audience extends Dto
{
    /**
     * @param  ?string  $value  Name of the audience an offer is applicable to.
     *
     * Common values:
     *
     * * 'ALL' - Standard offer audience for buyers on Amazon retail websites.
     *
     * * 'B2B' - Offer audience for Amazon Business website buyers.
     * @param  ?string  $displayName  Localized display name for the audience.
     */
    public function __construct(
        public ?string $value = null,
        public ?string $displayName = null,
    ) {}
}
