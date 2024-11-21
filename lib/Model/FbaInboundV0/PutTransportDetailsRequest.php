<?php
/**
 * PutTransportDetailsRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApiV5\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * PutTransportDetailsRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for a putTransportDetails operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PutTransportDetailsRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PutTransportDetailsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_partnered' => 'bool',
        'shipment_type' => '\SellingPartnerApiV5\Model\FbaInboundV0\ShipmentType',
        'transport_details' => '\SellingPartnerApiV5\Model\FbaInboundV0\TransportDetailInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_partnered' => null,
        'shipment_type' => null,
        'transport_details' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_partnered' => 'IsPartnered',
        'shipment_type' => 'ShipmentType',
        'transport_details' => 'TransportDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_partnered' => 'setIsPartnered',
        'shipment_type' => 'setShipmentType',
        'transport_details' => 'setTransportDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_partnered' => 'getIsPartnered',
        'shipment_type' => 'getShipmentType',
        'transport_details' => 'getTransportDetails'
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
        $this->container['is_partnered'] = $data['is_partnered'] ?? null;
        $this->container['shipment_type'] = $data['shipment_type'] ?? null;
        $this->container['transport_details'] = $data['transport_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['is_partnered'] === null) {
            $invalidProperties[] = "'is_partnered' can't be null";
        }
        if ($this->container['shipment_type'] === null) {
            $invalidProperties[] = "'shipment_type' can't be null";
        }
        if ($this->container['transport_details'] === null) {
            $invalidProperties[] = "'transport_details' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets is_partnered
     *
     * @return bool
     */
    public function getIsPartnered()
    {
        return $this->container['is_partnered'];
    }

    /**
     * Sets is_partnered
     *
     * @param bool $is_partnered Indicates whether a putTransportDetails request is for an Amazon-partnered carrier.
     *
     * @return self
     */
    public function setIsPartnered($is_partnered)
    {
        $this->container['is_partnered'] = $is_partnered;

        return $this;
    }
    /**
     * Gets shipment_type
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\ShipmentType
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\ShipmentType $shipment_type shipment_type
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }
    /**
     * Gets transport_details
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\TransportDetailInput
     */
    public function getTransportDetails()
    {
        return $this->container['transport_details'];
    }

    /**
     * Sets transport_details
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\TransportDetailInput $transport_details transport_details
     *
     * @return self
     */
    public function setTransportDetails($transport_details)
    {
        $this->container['transport_details'] = $transport_details;

        return $this;
    }
}


