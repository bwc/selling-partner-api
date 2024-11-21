<?php
/**
 * UpdateVerificationStatusRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API only supports orders that are less than two years old. Orders more than two years old will not show in the API response.
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

namespace SellingPartnerApiV5\Model\OrdersV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * UpdateVerificationStatusRequest Class Doc Comment
 *
 * @category Class
 * @description The request body for the updateVerificationStatus operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class UpdateVerificationStatusRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateVerificationStatusRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'regulated_order_verification_status' => '\SellingPartnerApiV5\Model\OrdersV0\UpdateVerificationStatusRequestBody'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'regulated_order_verification_status' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'regulated_order_verification_status' => 'regulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'regulated_order_verification_status' => 'setRegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'regulated_order_verification_status' => 'getRegulatedOrderVerificationStatus'
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
        $this->container['regulated_order_verification_status'] = $data['regulated_order_verification_status'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regulated_order_verification_status'] === null) {
            $invalidProperties[] = "'regulated_order_verification_status' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets regulated_order_verification_status
     *
     * @return \SellingPartnerApiV5\Model\OrdersV0\UpdateVerificationStatusRequestBody
     */
    public function getRegulatedOrderVerificationStatus()
    {
        return $this->container['regulated_order_verification_status'];
    }

    /**
     * Sets regulated_order_verification_status
     *
     * @param \SellingPartnerApiV5\Model\OrdersV0\UpdateVerificationStatusRequestBody $regulated_order_verification_status regulated_order_verification_status
     *
     * @return self
     */
    public function setRegulatedOrderVerificationStatus($regulated_order_verification_status)
    {
        $this->container['regulated_order_verification_status'] = $regulated_order_verification_status;

        return $this;
    }
}


