<?php
/**
 * OfferProgramConfigurationPromotionsDiscountFunding
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * The version of the OpenAPI document: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\ReplenishmentV20221107;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * OfferProgramConfigurationPromotionsDiscountFunding Class Doc Comment
 *
 * @category Class
 * @description A promotional percentage discount applied to the offer.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OfferProgramConfigurationPromotionsDiscountFunding extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferProgramConfigurationPromotionsDiscountFunding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'percentage' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'percentage' => 'int64'
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'percentage' => 'percentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'percentage' => 'setPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'percentage' => 'getPercentage'
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
        $this->container['percentage'] = $data['percentage'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['percentage']) && ($this->container['percentage'] > 1E+2)) {
            $invalidProperties[] = "invalid value for 'percentage', must be smaller than or equal to 1E+2.";
        }

        if (!is_null($this->container['percentage']) && ($this->container['percentage'] < 0)) {
            $invalidProperties[] = "invalid value for 'percentage', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }


    /**
     * Gets percentage
     *
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float|null $percentage The percentage discount on the offer.
     *
     * @return self
     */
    public function setPercentage($percentage)
    {

        if (!is_null($percentage) && ($percentage > 1E+2)) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling OfferProgramConfigurationPromotionsDiscountFunding., must be smaller than or equal to 1E+2.');
        }
        if (!is_null($percentage) && ($percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $percentage when calling OfferProgramConfigurationPromotionsDiscountFunding., must be bigger than or equal to 0.');
        }

        $this->container['percentage'] = $percentage;

        return $this;
    }
}


