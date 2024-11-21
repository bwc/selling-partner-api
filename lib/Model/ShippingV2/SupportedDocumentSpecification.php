<?php
/**
 * SupportedDocumentSpecification
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\ShippingV2;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * SupportedDocumentSpecification Class Doc Comment
 *
 * @category Class
 * @description Document specification that is supported for a service offering.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SupportedDocumentSpecification extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SupportedDocumentSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'format' => '\SellingPartnerApiV5\Model\ShippingV2\DocumentFormat',
        'size' => '\SellingPartnerApiV5\Model\ShippingV2\DocumentSize',
        'print_options' => '\SellingPartnerApiV5\Model\ShippingV2\PrintOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'format' => null,
        'size' => null,
        'print_options' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'format' => 'format',
        'size' => 'size',
        'print_options' => 'printOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'format' => 'setFormat',
        'size' => 'setSize',
        'print_options' => 'setPrintOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'format' => 'getFormat',
        'size' => 'getSize',
        'print_options' => 'getPrintOptions'
    ];


    
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
        $this->container['format'] = $data['format'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['print_options'] = $data['print_options'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['print_options'] === null) {
            $invalidProperties[] = "'print_options' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets format
     *
     * @return \SellingPartnerApiV5\Model\ShippingV2\DocumentFormat
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param \SellingPartnerApiV5\Model\ShippingV2\DocumentFormat $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }
    /**
     * Gets size
     *
     * @return \SellingPartnerApiV5\Model\ShippingV2\DocumentSize
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \SellingPartnerApiV5\Model\ShippingV2\DocumentSize $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }
    /**
     * Gets print_options
     *
     * @return \SellingPartnerApiV5\Model\ShippingV2\PrintOption[]
     */
    public function getPrintOptions()
    {
        return $this->container['print_options'];
    }

    /**
     * Sets print_options
     *
     * @param \SellingPartnerApiV5\Model\ShippingV2\PrintOption[] $print_options A list of the format options for a label.
     *
     * @return self
     */
    public function setPrintOptions($print_options)
    {
        $this->container['print_options'] = $print_options;

        return $this;
    }
}


