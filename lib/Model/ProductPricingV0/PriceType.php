<?php
/**
 * PriceType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApiV5\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * PriceType Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PriceType extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PriceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'landed_price' => '\SellingPartnerApiV5\Model\ProductPricingV0\MoneyType',
        'listing_price' => '\SellingPartnerApiV5\Model\ProductPricingV0\MoneyType',
        'shipping' => '\SellingPartnerApiV5\Model\ProductPricingV0\MoneyType',
        'points' => '\SellingPartnerApiV5\Model\ProductPricingV0\Points'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'landed_price' => null,
        'listing_price' => null,
        'shipping' => null,
        'points' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'landed_price' => 'LandedPrice',
        'listing_price' => 'ListingPrice',
        'shipping' => 'Shipping',
        'points' => 'Points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'landed_price' => 'setLandedPrice',
        'listing_price' => 'setListingPrice',
        'shipping' => 'setShipping',
        'points' => 'setPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'landed_price' => 'getLandedPrice',
        'listing_price' => 'getListingPrice',
        'shipping' => 'getShipping',
        'points' => 'getPoints'
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
        $this->container['landed_price'] = $data['landed_price'] ?? null;
        $this->container['listing_price'] = $data['listing_price'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['points'] = $data['points'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['listing_price'] === null) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets landed_price
     *
     * @return \SellingPartnerApiV5\Model\ProductPricingV0\MoneyType|null
     */
    public function getLandedPrice()
    {
        return $this->container['landed_price'];
    }

    /**
     * Sets landed_price
     *
     * @param \SellingPartnerApiV5\Model\ProductPricingV0\MoneyType|null $landed_price landed_price
     *
     * @return self
     */
    public function setLandedPrice($landed_price)
    {
        $this->container['landed_price'] = $landed_price;

        return $this;
    }
    /**
     * Gets listing_price
     *
     * @return \SellingPartnerApiV5\Model\ProductPricingV0\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     *
     * @param \SellingPartnerApiV5\Model\ProductPricingV0\MoneyType $listing_price listing_price
     *
     * @return self
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }
    /**
     * Gets shipping
     *
     * @return \SellingPartnerApiV5\Model\ProductPricingV0\MoneyType|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \SellingPartnerApiV5\Model\ProductPricingV0\MoneyType|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }
    /**
     * Gets points
     *
     * @return \SellingPartnerApiV5\Model\ProductPricingV0\Points|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \SellingPartnerApiV5\Model\ProductPricingV0\Points|null $points points
     *
     * @return self
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }
}


