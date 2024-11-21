<?php
/**
 * AdditionalSellerInputs
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SellingPartnerApiV5\Model\MerchantFulfillmentV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * AdditionalSellerInputs Class Doc Comment
 *
 * @category Class
 * @description An additional set of seller inputs required to purchase shipping.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AdditionalSellerInputs extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalSellerInputs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_input_field_name' => 'string',
        'additional_seller_input' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\AdditionalSellerInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_input_field_name' => null,
        'additional_seller_input' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_input_field_name' => 'AdditionalInputFieldName',
        'additional_seller_input' => 'AdditionalSellerInput'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_input_field_name' => 'setAdditionalInputFieldName',
        'additional_seller_input' => 'setAdditionalSellerInput'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_input_field_name' => 'getAdditionalInputFieldName',
        'additional_seller_input' => 'getAdditionalSellerInput'
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
        $this->container['additional_input_field_name'] = $data['additional_input_field_name'] ?? null;
        $this->container['additional_seller_input'] = $data['additional_seller_input'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['additional_input_field_name'] === null) {
            $invalidProperties[] = "'additional_input_field_name' can't be null";
        }
        if ($this->container['additional_seller_input'] === null) {
            $invalidProperties[] = "'additional_seller_input' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets additional_input_field_name
     *
     * @return string
     */
    public function getAdditionalInputFieldName()
    {
        return $this->container['additional_input_field_name'];
    }

    /**
     * Sets additional_input_field_name
     *
     * @param string $additional_input_field_name The name of the additional input field.
     *
     * @return self
     */
    public function setAdditionalInputFieldName($additional_input_field_name)
    {
        $this->container['additional_input_field_name'] = $additional_input_field_name;

        return $this;
    }
    /**
     * Gets additional_seller_input
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\AdditionalSellerInput
     */
    public function getAdditionalSellerInput()
    {
        return $this->container['additional_seller_input'];
    }

    /**
     * Sets additional_seller_input
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\AdditionalSellerInput $additional_seller_input additional_seller_input
     *
     * @return self
     */
    public function setAdditionalSellerInput($additional_seller_input)
    {
        $this->container['additional_seller_input'] = $additional_seller_input;

        return $this;
    }
}


