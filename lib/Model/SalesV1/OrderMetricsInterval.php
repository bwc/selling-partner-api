<?php
/**
 * OrderMetricsInterval
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Sales
 *
 * The Selling Partner API for Sales provides APIs related to sales performance.
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

namespace SellingPartnerApiV5\Model\SalesV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * OrderMetricsInterval Class Doc Comment
 *
 * @category Class
 * @description Contains order metrics.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderMetricsInterval extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderMetricsInterval';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'interval' => 'string',
        'unit_count' => 'int',
        'order_item_count' => 'int',
        'order_count' => 'int',
        'average_unit_price' => '\SellingPartnerApiV5\Model\SalesV1\Money',
        'total_sales' => '\SellingPartnerApiV5\Model\SalesV1\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'interval' => null,
        'unit_count' => null,
        'order_item_count' => null,
        'order_count' => null,
        'average_unit_price' => null,
        'total_sales' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'interval' => 'interval',
        'unit_count' => 'unitCount',
        'order_item_count' => 'orderItemCount',
        'order_count' => 'orderCount',
        'average_unit_price' => 'averageUnitPrice',
        'total_sales' => 'totalSales'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interval' => 'setInterval',
        'unit_count' => 'setUnitCount',
        'order_item_count' => 'setOrderItemCount',
        'order_count' => 'setOrderCount',
        'average_unit_price' => 'setAverageUnitPrice',
        'total_sales' => 'setTotalSales'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interval' => 'getInterval',
        'unit_count' => 'getUnitCount',
        'order_item_count' => 'getOrderItemCount',
        'order_count' => 'getOrderCount',
        'average_unit_price' => 'getAverageUnitPrice',
        'total_sales' => 'getTotalSales'
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
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['unit_count'] = $data['unit_count'] ?? null;
        $this->container['order_item_count'] = $data['order_item_count'] ?? null;
        $this->container['order_count'] = $data['order_count'] ?? null;
        $this->container['average_unit_price'] = $data['average_unit_price'] ?? null;
        $this->container['total_sales'] = $data['total_sales'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['unit_count'] === null) {
            $invalidProperties[] = "'unit_count' can't be null";
        }
        if ($this->container['order_item_count'] === null) {
            $invalidProperties[] = "'order_item_count' can't be null";
        }
        if ($this->container['order_count'] === null) {
            $invalidProperties[] = "'order_count' can't be null";
        }
        if ($this->container['average_unit_price'] === null) {
            $invalidProperties[] = "'average_unit_price' can't be null";
        }
        if ($this->container['total_sales'] === null) {
            $invalidProperties[] = "'total_sales' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn't align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data).
     *
     * @return self
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }
    /**
     * Gets unit_count
     *
     * @return int
     */
    public function getUnitCount()
    {
        return $this->container['unit_count'];
    }

    /**
     * Sets unit_count
     *
     * @param int $unit_count The number of units in orders based on the specified filters.
     *
     * @return self
     */
    public function setUnitCount($unit_count)
    {
        $this->container['unit_count'] = $unit_count;

        return $this;
    }
    /**
     * Gets order_item_count
     *
     * @return int
     */
    public function getOrderItemCount()
    {
        return $this->container['order_item_count'];
    }

    /**
     * Sets order_item_count
     *
     * @param int $order_item_count The number of order items based on the specified filters.
     *
     * @return self
     */
    public function setOrderItemCount($order_item_count)
    {
        $this->container['order_item_count'] = $order_item_count;

        return $this;
    }
    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count The number of orders based on the specified filters.
     *
     * @return self
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }
    /**
     * Gets average_unit_price
     *
     * @return \SellingPartnerApiV5\Model\SalesV1\Money
     */
    public function getAverageUnitPrice()
    {
        return $this->container['average_unit_price'];
    }

    /**
     * Sets average_unit_price
     *
     * @param \SellingPartnerApiV5\Model\SalesV1\Money $average_unit_price average_unit_price
     *
     * @return self
     */
    public function setAverageUnitPrice($average_unit_price)
    {
        $this->container['average_unit_price'] = $average_unit_price;

        return $this;
    }
    /**
     * Gets total_sales
     *
     * @return \SellingPartnerApiV5\Model\SalesV1\Money
     */
    public function getTotalSales()
    {
        return $this->container['total_sales'];
    }

    /**
     * Sets total_sales
     *
     * @param \SellingPartnerApiV5\Model\SalesV1\Money $total_sales total_sales
     *
     * @return self
     */
    public function setTotalSales($total_sales)
    {
        $this->container['total_sales'] = $total_sales;

        return $this;
    }
}


