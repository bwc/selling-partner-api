<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class CreateWarrantyRequest extends Dto
{
    protected static array $complexArrayTypes = ['attachments' => Attachment::class];

    /**
     * @param  Attachment[]|null  $attachments  Attachments to include in the message to the buyer. If any text is included in the attachment, the text must be written in the buyer's language of preference, which can be retrieved from the GetAttributes operation.
     * @param  ?\DateTimeInterface  $coverageStartDate  The start date of the warranty coverage to include in the message to the buyer.
     * @param  ?\DateTimeInterface  $coverageEndDate  The end date of the warranty coverage to include in the message to the buyer.
     */
    public function __construct(
        public ?array $attachments = null,
        public ?\DateTimeInterface $coverageStartDate = null,
        public ?\DateTimeInterface $coverageEndDate = null,
    ) {}
}
