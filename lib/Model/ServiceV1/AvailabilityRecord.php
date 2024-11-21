<?php
/**
 * AvailabilityRecord
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace SellingPartnerApiV5\Model\ServiceV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * AvailabilityRecord Class Doc Comment
 *
 * @category Class
 * @description `AvailabilityRecord` to represent the capacity of a resource over a time range.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AvailabilityRecord extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailabilityRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_time' => 'string',
        'end_time' => 'string',
        'recurrence' => '\SellingPartnerApiV5\Model\ServiceV1\Recurrence',
        'capacity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_time' => null,
        'end_time' => null,
        'recurrence' => null,
        'capacity' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'recurrence' => 'recurrence',
        'capacity' => 'capacity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'recurrence' => 'setRecurrence',
        'capacity' => 'setCapacity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'recurrence' => 'getRecurrence',
        'capacity' => 'getCapacity'
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
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['recurrence'] = $data['recurrence'] ?? null;
        $this->container['capacity'] = $data['capacity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['start_time'] === null) {
            $invalidProperties[] = "'start_time' can't be null";
        }
        if ($this->container['end_time'] === null) {
            $invalidProperties[] = "'end_time' can't be null";
        }
        if (!is_null($this->container['capacity']) && ($this->container['capacity'] < 1)) {
            $invalidProperties[] = "invalid value for 'capacity', must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time Denotes the time from when the resource is available in a day in ISO-8601 format.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }
    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time Denotes the time till when the resource is available in a day in ISO-8601 format.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }
    /**
     * Gets recurrence
     *
     * @return \SellingPartnerApiV5\Model\ServiceV1\Recurrence|null
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \SellingPartnerApiV5\Model\ServiceV1\Recurrence|null $recurrence recurrence
     *
     * @return self
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }
    /**
     * Gets capacity
     *
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int|null $capacity Signifies the capacity of a resource which is available.
     *
     * @return self
     */
    public function setCapacity($capacity)
    {

        if (!is_null($capacity) && ($capacity < 1)) {
            throw new \InvalidArgumentException('invalid value for $capacity when calling AvailabilityRecord., must be bigger than or equal to 1.');
        }

        $this->container['capacity'] = $capacity;

        return $this;
    }
}


