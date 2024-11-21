<?php
/**
 * Reservation
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
 * Reservation Class Doc Comment
 *
 * @category Class
 * @description Reservation object reduces the capacity of a resource.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Reservation extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Reservation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reservation_id' => 'string',
        'type' => 'string',
        'availability' => '\SellingPartnerApiV5\Model\ServiceV1\AvailabilityRecord'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reservation_id' => null,
        'type' => null,
        'availability' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'reservation_id' => 'reservationId',
        'type' => 'type',
        'availability' => 'availability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reservation_id' => 'setReservationId',
        'type' => 'setType',
        'availability' => 'setAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reservation_id' => 'getReservationId',
        'type' => 'getType',
        'availability' => 'getAvailability'
    ];



    const TYPE_APPOINTMENT = 'APPOINTMENT';
    const TYPE_TRAVEL = 'TRAVEL';
    const TYPE_VACATION = 'VACATION';
    const TYPE__BREAK = 'BREAK';
    const TYPE_TRAINING = 'TRAINING';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        $baseVals = [
            self::TYPE_APPOINTMENT,
            self::TYPE_TRAVEL,
            self::TYPE_VACATION,
            self::TYPE__BREAK,
            self::TYPE_TRAINING,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
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
        $this->container['reservation_id'] = $data['reservation_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['availability'] = $data['availability'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (
            !is_null($this->container['type']) &&
            !in_array(strtoupper($this->container['type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['availability'] === null) {
            $invalidProperties[] = "'availability' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets reservation_id
     *
     * @return string|null
     */
    public function getReservationId()
    {
        return $this->container['reservation_id'];
    }

    /**
     * Sets reservation_id
     *
     * @param string|null $reservation_id Unique identifier for a reservation. If present, it is treated as an update reservation request and will update the corresponding reservation. Otherwise, it is treated as a new create reservation request.
     *
     * @return self
     */
    public function setReservationId($reservation_id)
    {
        $this->container['reservation_id'] = $reservation_id;

        return $this;
    }
    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of reservation.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array(strtoupper($type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Gets availability
     *
     * @return \SellingPartnerApiV5\Model\ServiceV1\AvailabilityRecord
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \SellingPartnerApiV5\Model\ServiceV1\AvailabilityRecord $availability availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }
}


