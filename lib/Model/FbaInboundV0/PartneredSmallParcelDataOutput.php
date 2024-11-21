<?php
/**
 * PartneredSmallParcelDataOutput
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
 * PartneredSmallParcelDataOutput Class Doc Comment
 *
 * @category Class
 * @description Information returned by Amazon about a Small Parcel shipment by an Amazon-partnered carrier.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PartneredSmallParcelDataOutput extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartneredSmallParcelDataOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_list' => '\SellingPartnerApiV5\Model\FbaInboundV0\PartneredSmallParcelPackageOutput[]',
        'partnered_estimate' => '\SellingPartnerApiV5\Model\FbaInboundV0\PartneredEstimate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_list' => null,
        'partnered_estimate' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_list' => 'PackageList',
        'partnered_estimate' => 'PartneredEstimate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_list' => 'setPackageList',
        'partnered_estimate' => 'setPartneredEstimate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_list' => 'getPackageList',
        'partnered_estimate' => 'getPartneredEstimate'
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
        $this->container['package_list'] = $data['package_list'] ?? null;
        $this->container['partnered_estimate'] = $data['partnered_estimate'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['package_list'] === null) {
            $invalidProperties[] = "'package_list' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_list
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\PartneredSmallParcelPackageOutput[]
     */
    public function getPackageList()
    {
        return $this->container['package_list'];
    }

    /**
     * Sets package_list
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\PartneredSmallParcelPackageOutput[] $package_list A list of packages, including shipping information from the Amazon-partnered carrier.
     *
     * @return self
     */
    public function setPackageList($package_list)
    {
        $this->container['package_list'] = $package_list;

        return $this;
    }
    /**
     * Gets partnered_estimate
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\PartneredEstimate|null
     */
    public function getPartneredEstimate()
    {
        return $this->container['partnered_estimate'];
    }

    /**
     * Sets partnered_estimate
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\PartneredEstimate|null $partnered_estimate partnered_estimate
     *
     * @return self
     */
    public function setPartneredEstimate($partnered_estimate)
    {
        $this->container['partnered_estimate'] = $partnered_estimate;

        return $this;
    }
}


