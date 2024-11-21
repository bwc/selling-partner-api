<?php
/**
 * AutomatedShippingSettings
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
 * AutomatedShippingSettings Class Doc Comment
 *
 * @category Class
 * @description Contains information regarding the Shipping Settings Automation program, such as whether the order's shipping settings were generated automatically, and what those settings are.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AutomatedShippingSettings extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AutomatedShippingSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'has_automated_shipping_settings' => 'bool',
        'automated_carrier' => 'string',
        'automated_ship_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'has_automated_shipping_settings' => null,
        'automated_carrier' => null,
        'automated_ship_method' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'has_automated_shipping_settings' => 'HasAutomatedShippingSettings',
        'automated_carrier' => 'AutomatedCarrier',
        'automated_ship_method' => 'AutomatedShipMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_automated_shipping_settings' => 'setHasAutomatedShippingSettings',
        'automated_carrier' => 'setAutomatedCarrier',
        'automated_ship_method' => 'setAutomatedShipMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_automated_shipping_settings' => 'getHasAutomatedShippingSettings',
        'automated_carrier' => 'getAutomatedCarrier',
        'automated_ship_method' => 'getAutomatedShipMethod'
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
        $this->container['has_automated_shipping_settings'] = $data['has_automated_shipping_settings'] ?? null;
        $this->container['automated_carrier'] = $data['automated_carrier'] ?? null;
        $this->container['automated_ship_method'] = $data['automated_ship_method'] ?? null;
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
     * Gets has_automated_shipping_settings
     *
     * @return bool|null
     */
    public function getHasAutomatedShippingSettings()
    {
        return $this->container['has_automated_shipping_settings'];
    }

    /**
     * Sets has_automated_shipping_settings
     *
     * @param bool|null $has_automated_shipping_settings When true, this order has automated shipping settings generated by Amazon. This order could be identified as an SSA order.
     *
     * @return self
     */
    public function setHasAutomatedShippingSettings($has_automated_shipping_settings)
    {
        $this->container['has_automated_shipping_settings'] = $has_automated_shipping_settings;

        return $this;
    }
    /**
     * Gets automated_carrier
     *
     * @return string|null
     */
    public function getAutomatedCarrier()
    {
        return $this->container['automated_carrier'];
    }

    /**
     * Sets automated_carrier
     *
     * @param string|null $automated_carrier Auto-generated carrier for SSA orders.
     *
     * @return self
     */
    public function setAutomatedCarrier($automated_carrier)
    {
        $this->container['automated_carrier'] = $automated_carrier;

        return $this;
    }
    /**
     * Gets automated_ship_method
     *
     * @return string|null
     */
    public function getAutomatedShipMethod()
    {
        return $this->container['automated_ship_method'];
    }

    /**
     * Sets automated_ship_method
     *
     * @param string|null $automated_ship_method Auto-generated ship method for SSA orders.
     *
     * @return self
     */
    public function setAutomatedShipMethod($automated_ship_method)
    {
        $this->container['automated_ship_method'] = $automated_ship_method;

        return $this;
    }
}


