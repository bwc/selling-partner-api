<?php
/**
 * DayOfWeek
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

use SellingPartnerApiV5\Model\ModelInterface;

/**
 * DayOfWeek Class Doc Comment
 *
 * @category Class
 * @description The day of the week.
 * @package  SellingPartnerApiV5
 * @group 
 */
class DayOfWeek
{
    public $value;

    /**
     * Possible values of this enum
     */
    const MONDAY = 'MONDAY';
    const TUESDAY = 'TUESDAY';
    const WEDNESDAY = 'WEDNESDAY';
    const THURSDAY = 'THURSDAY';
    const FRIDAY = 'FRIDAY';
    const SATURDAY = 'SATURDAY';
    const SUNDAY = 'SUNDAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::MONDAY,
            self::TUESDAY,
            self::WEDNESDAY,
            self::THURSDAY,
            self::FRIDAY,
            self::SATURDAY,
            self::SUNDAY,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'DayOfWeek', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


