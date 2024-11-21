<?php
/**
 * FeesEstimateByIdRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\FeesV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * FeesEstimateByIdRequest Class Doc Comment
 *
 * @category Class
 * @description A product, marketplace, and proposed price used to request estimated fees.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeesEstimateByIdRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeesEstimateByIdRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fees_estimate_request' => '\SellingPartnerApiV5\Model\FeesV0\FeesEstimateRequest',
        'id_type' => '\SellingPartnerApiV5\Model\FeesV0\IdType',
        'id_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fees_estimate_request' => null,
        'id_type' => null,
        'id_value' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fees_estimate_request' => 'FeesEstimateRequest',
        'id_type' => 'IdType',
        'id_value' => 'IdValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fees_estimate_request' => 'setFeesEstimateRequest',
        'id_type' => 'setIdType',
        'id_value' => 'setIdValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fees_estimate_request' => 'getFeesEstimateRequest',
        'id_type' => 'getIdType',
        'id_value' => 'getIdValue'
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
        $this->container['fees_estimate_request'] = $data['fees_estimate_request'] ?? null;
        $this->container['id_type'] = $data['id_type'] ?? null;
        $this->container['id_value'] = $data['id_value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id_type'] === null) {
            $invalidProperties[] = "'id_type' can't be null";
        }
        if ($this->container['id_value'] === null) {
            $invalidProperties[] = "'id_value' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets fees_estimate_request
     *
     * @return \SellingPartnerApiV5\Model\FeesV0\FeesEstimateRequest|null
     */
    public function getFeesEstimateRequest()
    {
        return $this->container['fees_estimate_request'];
    }

    /**
     * Sets fees_estimate_request
     *
     * @param \SellingPartnerApiV5\Model\FeesV0\FeesEstimateRequest|null $fees_estimate_request fees_estimate_request
     *
     * @return self
     */
    public function setFeesEstimateRequest($fees_estimate_request)
    {
        $this->container['fees_estimate_request'] = $fees_estimate_request;

        return $this;
    }
    /**
     * Gets id_type
     *
     * @return \SellingPartnerApiV5\Model\FeesV0\IdType
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type
     *
     * @param \SellingPartnerApiV5\Model\FeesV0\IdType $id_type id_type
     *
     * @return self
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }
    /**
     * Gets id_value
     *
     * @return string
     */
    public function getIdValue()
    {
        return $this->container['id_value'];
    }

    /**
     * Sets id_value
     *
     * @param string $id_value The item identifier.
     *
     * @return self
     */
    public function setIdValue($id_value)
    {
        $this->container['id_value'] = $id_value;

        return $this;
    }
}


