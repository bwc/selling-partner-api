<?php
/**
 * GetFulfillmentPreviewRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * GetFulfillmentPreviewRequest Class Doc Comment
 *
 * @category Class
 * @description The request body schema for the getFulfillmentPreview operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetFulfillmentPreviewRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFulfillmentPreviewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketplace_id' => 'string',
        'address' => '\SellingPartnerApiV5\Model\FbaOutboundV20200701\Address',
        'items' => '\SellingPartnerApiV5\Model\FbaOutboundV20200701\GetFulfillmentPreviewItem[]',
        'shipping_speed_categories' => '\SellingPartnerApiV5\Model\FbaOutboundV20200701\ShippingSpeedCategory[]',
        'include_cod_fulfillment_preview' => 'bool',
        'include_delivery_windows' => 'bool',
        'feature_constraints' => '\SellingPartnerApiV5\Model\FbaOutboundV20200701\FeatureSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_id' => null,
        'address' => null,
        'items' => null,
        'shipping_speed_categories' => null,
        'include_cod_fulfillment_preview' => null,
        'include_delivery_windows' => null,
        'feature_constraints' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'address' => 'address',
        'items' => 'items',
        'shipping_speed_categories' => 'shippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'includeCODFulfillmentPreview',
        'include_delivery_windows' => 'includeDeliveryWindows',
        'feature_constraints' => 'featureConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'address' => 'setAddress',
        'items' => 'setItems',
        'shipping_speed_categories' => 'setShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'setIncludeCodFulfillmentPreview',
        'include_delivery_windows' => 'setIncludeDeliveryWindows',
        'feature_constraints' => 'setFeatureConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'address' => 'getAddress',
        'items' => 'getItems',
        'shipping_speed_categories' => 'getShippingSpeedCategories',
        'include_cod_fulfillment_preview' => 'getIncludeCodFulfillmentPreview',
        'include_delivery_windows' => 'getIncludeDeliveryWindows',
        'feature_constraints' => 'getFeatureConstraints'
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['shipping_speed_categories'] = $data['shipping_speed_categories'] ?? null;
        $this->container['include_cod_fulfillment_preview'] = $data['include_cod_fulfillment_preview'] ?? null;
        $this->container['include_delivery_windows'] = $data['include_delivery_windows'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The marketplace the fulfillment order is placed against.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets address
     *
     * @return \SellingPartnerApiV5\Model\FbaOutboundV20200701\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \SellingPartnerApiV5\Model\FbaOutboundV20200701\Address $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }
    /**
     * Gets items
     *
     * @return \SellingPartnerApiV5\Model\FbaOutboundV20200701\GetFulfillmentPreviewItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApiV5\Model\FbaOutboundV20200701\GetFulfillmentPreviewItem[] $items An array of fulfillment preview item information.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
    /**
     * Gets shipping_speed_categories
     *
     * @return \SellingPartnerApiV5\Model\FbaOutboundV20200701\ShippingSpeedCategory[]|null
     */
    public function getShippingSpeedCategories()
    {
        return $this->container['shipping_speed_categories'];
    }

    /**
     * Sets shipping_speed_categories
     *
     * @param \SellingPartnerApiV5\Model\FbaOutboundV20200701\ShippingSpeedCategory[]|null $shipping_speed_categories shipping_speed_categories
     *
     * @return self
     */
    public function setShippingSpeedCategories($shipping_speed_categories)
    {
        $this->container['shipping_speed_categories'] = $shipping_speed_categories;

        return $this;
    }
    /**
     * Gets include_cod_fulfillment_preview
     *
     * @return bool|null
     */
    public function getIncludeCodFulfillmentPreview()
    {
        return $this->container['include_cod_fulfillment_preview'];
    }

    /**
     * Sets include_cod_fulfillment_preview
     *
     * @param bool|null $include_cod_fulfillment_preview When true, returns all fulfillment order previews both for COD and not for COD. Otherwise, returns only fulfillment order previews that are not for COD.
     *
     * @return self
     */
    public function setIncludeCodFulfillmentPreview($include_cod_fulfillment_preview)
    {
        $this->container['include_cod_fulfillment_preview'] = $include_cod_fulfillment_preview;

        return $this;
    }
    /**
     * Gets include_delivery_windows
     *
     * @return bool|null
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->container['include_delivery_windows'];
    }

    /**
     * Sets include_delivery_windows
     *
     * @param bool|null $include_delivery_windows When true, returns the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery.
     *
     * @return self
     */
    public function setIncludeDeliveryWindows($include_delivery_windows)
    {
        $this->container['include_delivery_windows'] = $include_delivery_windows;

        return $this;
    }
    /**
     * Gets feature_constraints
     *
     * @return \SellingPartnerApiV5\Model\FbaOutboundV20200701\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints
     *
     * @param \SellingPartnerApiV5\Model\FbaOutboundV20200701\FeatureSettings[]|null $feature_constraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return self
     */
    public function setFeatureConstraints($feature_constraints)
    {
        $this->container['feature_constraints'] = $feature_constraints;

        return $this;
    }
}


