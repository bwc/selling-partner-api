<?php
/**
 * TaxDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\VendorInvoicesV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * TaxDetails Class Doc Comment
 *
 * @category Class
 * @description Details of tax amount applied.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tax_type' => 'string',
        'tax_rate' => 'string',
        'tax_amount' => '\SellingPartnerApiV5\Model\VendorInvoicesV1\Money',
        'taxable_amount' => '\SellingPartnerApiV5\Model\VendorInvoicesV1\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tax_type' => null,
        'tax_rate' => null,
        'tax_amount' => null,
        'taxable_amount' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tax_type' => 'taxType',
        'tax_rate' => 'taxRate',
        'tax_amount' => 'taxAmount',
        'taxable_amount' => 'taxableAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_type' => 'setTaxType',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'taxable_amount' => 'setTaxableAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_type' => 'getTaxType',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'taxable_amount' => 'getTaxableAmount'
    ];



    const TAX_TYPE_CGST = 'CGST';
    const TAX_TYPE_SGST = 'SGST';
    const TAX_TYPE_CESS = 'CESS';
    const TAX_TYPE_UTGST = 'UTGST';
    const TAX_TYPE_IGST = 'IGST';
    const TAX_TYPE_MW_ST = 'MwSt.';
    const TAX_TYPE_PST = 'PST';
    const TAX_TYPE_TVA = 'TVA';
    const TAX_TYPE_VAT = 'VAT';
    const TAX_TYPE_GST = 'GST';
    const TAX_TYPE_ST = 'ST';
    const TAX_TYPE_CONSUMPTION = 'Consumption';
    const TAX_TYPE_MUTUALLY_DEFINED = 'MutuallyDefined';
    const TAX_TYPE_DOMESTIC_VAT = 'DomesticVAT';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxTypeAllowableValues()
    {
        $baseVals = [
            self::TAX_TYPE_CGST,
            self::TAX_TYPE_SGST,
            self::TAX_TYPE_CESS,
            self::TAX_TYPE_UTGST,
            self::TAX_TYPE_IGST,
            self::TAX_TYPE_MW_ST,
            self::TAX_TYPE_PST,
            self::TAX_TYPE_TVA,
            self::TAX_TYPE_VAT,
            self::TAX_TYPE_GST,
            self::TAX_TYPE_ST,
            self::TAX_TYPE_CONSUMPTION,
            self::TAX_TYPE_MUTUALLY_DEFINED,
            self::TAX_TYPE_DOMESTIC_VAT,
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
        $this->container['tax_type'] = $data['tax_type'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['taxable_amount'] = $data['taxable_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tax_type'] === null) {
            $invalidProperties[] = "'tax_type' can't be null";
        }
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (
            !is_null($this->container['tax_type']) &&
            !in_array(strtoupper($this->container['tax_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'tax_type', must be one of '%s'",
                $this->container['tax_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets tax_type
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string $tax_type Type of the tax applied.
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        $allowedValues = $this->getTaxTypeAllowableValues();
        if (!in_array(strtoupper($tax_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'tax_type', must be one of '%s'",
                    $tax_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }
    /**
     * Gets tax_rate
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param string|null $tax_rate A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. 
     *   **Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }
    /**
     * Gets tax_amount
     *
     * @return \SellingPartnerApiV5\Model\VendorInvoicesV1\Money
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \SellingPartnerApiV5\Model\VendorInvoicesV1\Money $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }
    /**
     * Gets taxable_amount
     *
     * @return \SellingPartnerApiV5\Model\VendorInvoicesV1\Money|null
     */
    public function getTaxableAmount()
    {
        return $this->container['taxable_amount'];
    }

    /**
     * Sets taxable_amount
     *
     * @param \SellingPartnerApiV5\Model\VendorInvoicesV1\Money|null $taxable_amount taxable_amount
     *
     * @return self
     */
    public function setTaxableAmount($taxable_amount)
    {
        $this->container['taxable_amount'] = $taxable_amount;

        return $this;
    }
}


