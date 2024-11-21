<?php
/**
 * ExceptionDates
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
 * ExceptionDates Class Doc Comment
 *
 * @category Class
 * @description Dates when the business is closed or open with a different time window.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ExceptionDates extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExceptionDates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exception_date' => 'string',
        'is_open' => 'bool',
        'open_intervals' => '\SellingPartnerApiV5\Model\OrdersV0\OpenInterval[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exception_date' => null,
        'is_open' => null,
        'open_intervals' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'exception_date' => 'ExceptionDate',
        'is_open' => 'IsOpen',
        'open_intervals' => 'OpenIntervals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exception_date' => 'setExceptionDate',
        'is_open' => 'setIsOpen',
        'open_intervals' => 'setOpenIntervals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exception_date' => 'getExceptionDate',
        'is_open' => 'getIsOpen',
        'open_intervals' => 'getOpenIntervals'
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
        $this->container['exception_date'] = $data['exception_date'] ?? null;
        $this->container['is_open'] = $data['is_open'] ?? null;
        $this->container['open_intervals'] = $data['open_intervals'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets exception_date
     *
     * @return string|null
     */
    public function getExceptionDate()
    {
        return $this->container['exception_date'];
    }

    /**
     * Sets exception_date
     *
     * @param string|null $exception_date Date when the business is closed, in ISO-8601 date format.
     *
     * @return self
     */
    public function setExceptionDate($exception_date)
    {
        $this->container['exception_date'] = $exception_date;

        return $this;
    }
    /**
     * Gets is_open
     *
     * @return bool|null
     */
    public function getIsOpen()
    {
        return $this->container['is_open'];
    }

    /**
     * Sets is_open
     *
     * @param bool|null $is_open Boolean indicating if the business is closed or open on that date.
     *
     * @return self
     */
    public function setIsOpen($is_open)
    {
        $this->container['is_open'] = $is_open;

        return $this;
    }
    /**
     * Gets open_intervals
     *
     * @return \SellingPartnerApiV5\Model\OrdersV0\OpenInterval[]|null
     */
    public function getOpenIntervals()
    {
        return $this->container['open_intervals'];
    }

    /**
     * Sets open_intervals
     *
     * @param \SellingPartnerApiV5\Model\OrdersV0\OpenInterval[]|null $open_intervals Time window during the day when the business is open.
     *
     * @return self
     */
    public function setOpenIntervals($open_intervals)
    {
        $this->container['open_intervals'] = $open_intervals;

        return $this;
    }
}


