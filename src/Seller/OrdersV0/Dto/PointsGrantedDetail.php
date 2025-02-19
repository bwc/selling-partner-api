<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class PointsGrantedDetail extends Dto
{
    protected static array $attributeMap = [
        'pointsNumber' => 'PointsNumber',
        'pointsMonetaryValue' => 'PointsMonetaryValue',
    ];

    /**
     * @param  ?int  $pointsNumber  The number of Amazon Points granted with the purchase of an item.
     * @param  ?Money  $pointsMonetaryValue  The monetary value of the order.
     */
    public function __construct(
        public ?int $pointsNumber = null,
        public ?Money $pointsMonetaryValue = null,
    ) {}
}
