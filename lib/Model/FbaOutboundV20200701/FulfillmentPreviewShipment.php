<?php
/**
 * FulfillmentPreviewShipment
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
 * FulfillmentPreviewShipment Class Doc Comment
 *
 * @category Class
 * @description Delivery and item information for a shipment in a fulfillment order preview.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FulfillmentPreviewShipment extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentPreviewShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earliest_ship_date' => 'string',
        'latest_ship_date' => 'string',
        'earliest_arrival_date' => 'string',
        'latest_arrival_date' => 'string',
        'shipping_notes' => 'string[]',
        'fulfillment_preview_items' => '\SellingPartnerApiV5\Model\FbaOutboundV20200701\FulfillmentPreviewItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'earliest_ship_date' => null,
        'latest_ship_date' => null,
        'earliest_arrival_date' => null,
        'latest_arrival_date' => null,
        'shipping_notes' => null,
        'fulfillment_preview_items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'earliest_ship_date' => 'earliestShipDate',
        'latest_ship_date' => 'latestShipDate',
        'earliest_arrival_date' => 'earliestArrivalDate',
        'latest_arrival_date' => 'latestArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_preview_items' => 'fulfillmentPreviewItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earliest_ship_date' => 'setEarliestShipDate',
        'latest_ship_date' => 'setLatestShipDate',
        'earliest_arrival_date' => 'setEarliestArrivalDate',
        'latest_arrival_date' => 'setLatestArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_preview_items' => 'setFulfillmentPreviewItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earliest_ship_date' => 'getEarliestShipDate',
        'latest_ship_date' => 'getLatestShipDate',
        'earliest_arrival_date' => 'getEarliestArrivalDate',
        'latest_arrival_date' => 'getLatestArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_preview_items' => 'getFulfillmentPreviewItems'
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
        $this->container['earliest_ship_date'] = $data['earliest_ship_date'] ?? null;
        $this->container['latest_ship_date'] = $data['latest_ship_date'] ?? null;
        $this->container['earliest_arrival_date'] = $data['earliest_arrival_date'] ?? null;
        $this->container['latest_arrival_date'] = $data['latest_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_preview_items'] = $data['fulfillment_preview_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fulfillment_preview_items'] === null) {
            $invalidProperties[] = "'fulfillment_preview_items' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets earliest_ship_date
     *
     * @return string|null
     */
    public function getEarliestShipDate()
    {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date
     *
     * @param string|null $earliest_ship_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setEarliestShipDate($earliest_ship_date)
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }
    /**
     * Gets latest_ship_date
     *
     * @return string|null
     */
    public function getLatestShipDate()
    {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date
     *
     * @param string|null $latest_ship_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setLatestShipDate($latest_ship_date)
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }
    /**
     * Gets earliest_arrival_date
     *
     * @return string|null
     */
    public function getEarliestArrivalDate()
    {
        return $this->container['earliest_arrival_date'];
    }

    /**
     * Sets earliest_arrival_date
     *
     * @param string|null $earliest_arrival_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setEarliestArrivalDate($earliest_arrival_date)
    {
        $this->container['earliest_arrival_date'] = $earliest_arrival_date;

        return $this;
    }
    /**
     * Gets latest_arrival_date
     *
     * @return string|null
     */
    public function getLatestArrivalDate()
    {
        return $this->container['latest_arrival_date'];
    }

    /**
     * Sets latest_arrival_date
     *
     * @param string|null $latest_arrival_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setLatestArrivalDate($latest_arrival_date)
    {
        $this->container['latest_arrival_date'] = $latest_arrival_date;

        return $this;
    }
    /**
     * Gets shipping_notes
     *
     * @return string[]|null
     */
    public function getShippingNotes()
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes
     *
     * @param string[]|null $shipping_notes Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     *
     * @return self
     */
    public function setShippingNotes($shipping_notes)
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }
    /**
     * Gets fulfillment_preview_items
     *
     * @return \SellingPartnerApiV5\Model\FbaOutboundV20200701\FulfillmentPreviewItem[]
     */
    public function getFulfillmentPreviewItems()
    {
        return $this->container['fulfillment_preview_items'];
    }

    /**
     * Sets fulfillment_preview_items
     *
     * @param \SellingPartnerApiV5\Model\FbaOutboundV20200701\FulfillmentPreviewItem[] $fulfillment_preview_items An array of fulfillment preview item information.
     *
     * @return self
     */
    public function setFulfillmentPreviewItems($fulfillment_preview_items)
    {
        $this->container['fulfillment_preview_items'] = $fulfillment_preview_items;

        return $this;
    }
}


