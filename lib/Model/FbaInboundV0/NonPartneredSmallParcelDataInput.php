<?php
/**
 * NonPartneredSmallParcelDataInput
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
 * NonPartneredSmallParcelDataInput Class Doc Comment
 *
 * @category Class
 * @description Information that you provide to Amazon about a Small Parcel shipment shipped by a carrier that has not partnered with Amazon.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NonPartneredSmallParcelDataInput extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NonPartneredSmallParcelDataInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_name' => 'string',
        'package_list' => '\SellingPartnerApiV5\Model\FbaInboundV0\NonPartneredSmallParcelPackageInput[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_name' => null,
        'package_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier_name' => 'CarrierName',
        'package_list' => 'PackageList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
        'package_list' => 'setPackageList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
        'package_list' => 'getPackageList'
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
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['package_list'] = $data['package_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['package_list'] === null) {
            $invalidProperties[] = "'package_list' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The carrier that you are using for the inbound shipment.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }
    /**
     * Gets package_list
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\NonPartneredSmallParcelPackageInput[]
     */
    public function getPackageList()
    {
        return $this->container['package_list'];
    }

    /**
     * Sets package_list
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\NonPartneredSmallParcelPackageInput[] $package_list A list of package tracking information.
     *
     * @return self
     */
    public function setPackageList($package_list)
    {
        $this->container['package_list'] = $package_list;

        return $this;
    }
}


