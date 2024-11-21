<?php
/**
 * AvailableDeliveryExperienceOption
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
 * AvailableDeliveryExperienceOption Class Doc Comment
 *
 * @category Class
 * @description The available delivery confirmation options, and the fee charged, if any.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AvailableDeliveryExperienceOption extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableDeliveryExperienceOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_experience_option' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\DeliveryExperienceOption',
        'charge' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\CurrencyAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_experience_option' => null,
        'charge' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_experience_option' => 'DeliveryExperienceOption',
        'charge' => 'Charge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_experience_option' => 'setDeliveryExperienceOption',
        'charge' => 'setCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_experience_option' => 'getDeliveryExperienceOption',
        'charge' => 'getCharge'
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
        $this->container['delivery_experience_option'] = $data['delivery_experience_option'] ?? null;
        $this->container['charge'] = $data['charge'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['delivery_experience_option'] === null) {
            $invalidProperties[] = "'delivery_experience_option' can't be null";
        }
        if ($this->container['charge'] === null) {
            $invalidProperties[] = "'charge' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets delivery_experience_option
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\DeliveryExperienceOption
     */
    public function getDeliveryExperienceOption()
    {
        return $this->container['delivery_experience_option'];
    }

    /**
     * Sets delivery_experience_option
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\DeliveryExperienceOption $delivery_experience_option delivery_experience_option
     *
     * @return self
     */
    public function setDeliveryExperienceOption($delivery_experience_option)
    {
        $this->container['delivery_experience_option'] = $delivery_experience_option;

        return $this;
    }
    /**
     * Gets charge
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\CurrencyAmount
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\CurrencyAmount $charge charge
     *
     * @return self
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }
}


