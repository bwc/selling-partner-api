<?php
/**
 * Volume
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApiV5\Model\VendorShippingV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * Volume Class Doc Comment
 *
 * @category Class
 * @description The volume of the shipment.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Volume extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Volume';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unit_of_measure' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'unit_of_measure' => null,
        'value' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'unit_of_measure' => 'unitOfMeasure',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_of_measure' => 'setUnitOfMeasure',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_of_measure' => 'getUnitOfMeasure',
        'value' => 'getValue'
    ];



    const UNIT_OF_MEASURE_CU_FT = 'CuFt';
    const UNIT_OF_MEASURE_CU_IN = 'CuIn';
    const UNIT_OF_MEASURE_CU_M = 'CuM';
    const UNIT_OF_MEASURE_CU_Y = 'CuY';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitOfMeasureAllowableValues()
    {
        $baseVals = [
            self::UNIT_OF_MEASURE_CU_FT,
            self::UNIT_OF_MEASURE_CU_IN,
            self::UNIT_OF_MEASURE_CU_M,
            self::UNIT_OF_MEASURE_CU_Y,
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
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['unit_of_measure'] === null) {
            $invalidProperties[] = "'unit_of_measure' can't be null";
        }
        $allowedValues = $this->getUnitOfMeasureAllowableValues();
        if (
            !is_null($this->container['unit_of_measure']) &&
            !in_array(strtoupper($this->container['unit_of_measure']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit_of_measure', must be one of '%s'",
                $this->container['unit_of_measure'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets unit_of_measure
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string $unit_of_measure The unit of measurement.
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $allowedValues = $this->getUnitOfMeasureAllowableValues();
        if (!in_array(strtoupper($unit_of_measure), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit_of_measure', must be one of '%s'",
                    $unit_of_measure,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }
    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. 
     *   **Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
}


