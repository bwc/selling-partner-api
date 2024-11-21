<?php
/**
 * TaxRegistrationDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * TaxRegistrationDetails Class Doc Comment
 *
 * @category Class
 * @description Tax registration details of the entity.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxRegistrationDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxRegistrationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_registration_type' => 'string',
        'tax_registration_number' => 'string',
        'tax_registration_address' => '\SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\Address',
        'tax_registration_messages' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tax_registration_type' => null,
        'tax_registration_number' => null,
        'tax_registration_address' => null,
        'tax_registration_messages' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tax_registration_type' => 'taxRegistrationType',
        'tax_registration_number' => 'taxRegistrationNumber',
        'tax_registration_address' => 'taxRegistrationAddress',
        'tax_registration_messages' => 'taxRegistrationMessages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_registration_type' => 'setTaxRegistrationType',
        'tax_registration_number' => 'setTaxRegistrationNumber',
        'tax_registration_address' => 'setTaxRegistrationAddress',
        'tax_registration_messages' => 'setTaxRegistrationMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_registration_type' => 'getTaxRegistrationType',
        'tax_registration_number' => 'getTaxRegistrationNumber',
        'tax_registration_address' => 'getTaxRegistrationAddress',
        'tax_registration_messages' => 'getTaxRegistrationMessages'
    ];



    const TAX_REGISTRATION_TYPE_VAT = 'VAT';
    const TAX_REGISTRATION_TYPE_GST = 'GST';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxRegistrationTypeAllowableValues()
    {
        $baseVals = [
            self::TAX_REGISTRATION_TYPE_VAT,
            self::TAX_REGISTRATION_TYPE_GST,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tax_registration_type'] = $data['tax_registration_type'] ?? null;
        $this->container['tax_registration_number'] = $data['tax_registration_number'] ?? null;
        $this->container['tax_registration_address'] = $data['tax_registration_address'] ?? null;
        $this->container['tax_registration_messages'] = $data['tax_registration_messages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (
            !is_null($this->container['tax_registration_type']) &&
            !in_array(strtoupper($this->container['tax_registration_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                $this->container['tax_registration_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_registration_number'] === null) {
            $invalidProperties[] = "'tax_registration_number' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets tax_registration_type
     *
     * @return string|null
     */
    public function getTaxRegistrationType()
    {
        return $this->container['tax_registration_type'];
    }

    /**
     * Sets tax_registration_type
     *
     * @param string|null $tax_registration_type Tax registration type for the entity.
     *
     * @return self
     */
    public function setTaxRegistrationType($tax_registration_type)
    {
        $allowedValues = $this->getTaxRegistrationTypeAllowableValues();
        if (!is_null($tax_registration_type) &&!in_array(strtoupper($tax_registration_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax_registration_type', must be one of '%s'",
                    $tax_registration_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_registration_type'] = $tax_registration_type;

        return $this;
    }
    /**
     * Gets tax_registration_number
     *
     * @return string
     */
    public function getTaxRegistrationNumber()
    {
        return $this->container['tax_registration_number'];
    }

    /**
     * Sets tax_registration_number
     *
     * @param string $tax_registration_number Tax registration number for the party. For example, VAT ID.
     *
     * @return self
     */
    public function setTaxRegistrationNumber($tax_registration_number)
    {
        $this->container['tax_registration_number'] = $tax_registration_number;

        return $this;
    }
    /**
     * Gets tax_registration_address
     *
     * @return \SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\Address|null
     */
    public function getTaxRegistrationAddress()
    {
        return $this->container['tax_registration_address'];
    }

    /**
     * Sets tax_registration_address
     *
     * @param \SellingPartnerApiV5\Model\VendorDirectFulfillmentOrdersV20211228\Address|null $tax_registration_address tax_registration_address
     *
     * @return self
     */
    public function setTaxRegistrationAddress($tax_registration_address)
    {
        $this->container['tax_registration_address'] = $tax_registration_address;

        return $this;
    }
    /**
     * Gets tax_registration_messages
     *
     * @return string|null
     */
    public function getTaxRegistrationMessages()
    {
        return $this->container['tax_registration_messages'];
    }

    /**
     * Sets tax_registration_messages
     *
     * @param string|null $tax_registration_messages Tax registration message that can be used for additional tax related details.
     *
     * @return self
     */
    public function setTaxRegistrationMessages($tax_registration_messages)
    {
        $this->container['tax_registration_messages'] = $tax_registration_messages;

        return $this;
    }
}


