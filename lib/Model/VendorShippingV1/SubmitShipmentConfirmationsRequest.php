<?php
/**
 * SubmitShipmentConfirmationsRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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

namespace SellingPartnerApiV5\Model\VendorShippingV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * SubmitShipmentConfirmationsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the SubmitShipmentConfirmations operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SubmitShipmentConfirmationsRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubmitShipmentConfirmationsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_confirmations' => '\SellingPartnerApiV5\Model\VendorShippingV1\ShipmentConfirmation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_confirmations' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_confirmations' => 'shipmentConfirmations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_confirmations' => 'setShipmentConfirmations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_confirmations' => 'getShipmentConfirmations'
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
        $this->container['shipment_confirmations'] = $data['shipment_confirmations'] ?? null;
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
     * Gets shipment_confirmations
     *
     * @return \SellingPartnerApiV5\Model\VendorShippingV1\ShipmentConfirmation[]|null
     */
    public function getShipmentConfirmations()
    {
        return $this->container['shipment_confirmations'];
    }

    /**
     * Sets shipment_confirmations
     *
     * @param \SellingPartnerApiV5\Model\VendorShippingV1\ShipmentConfirmation[]|null $shipment_confirmations shipment_confirmations
     *
     * @return self
     */
    public function setShipmentConfirmations($shipment_confirmations)
    {
        $this->container['shipment_confirmations'] = $shipment_confirmations;

        return $this;
    }
}


