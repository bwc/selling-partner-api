<?php
/**
 * GetAdditionalSellerInputsResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SellingPartnerApiV5\Model\MerchantFulfillmentV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * GetAdditionalSellerInputsResult Class Doc Comment
 *
 * @category Class
 * @description The payload for the getAdditionalSellerInputs operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetAdditionalSellerInputsResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAdditionalSellerInputsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipment_level_fields' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\AdditionalInputs[]',
        'item_level_fields_list' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\ItemLevelFields[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipment_level_fields' => null,
        'item_level_fields_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipment_level_fields' => 'ShipmentLevelFields',
        'item_level_fields_list' => 'ItemLevelFieldsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_level_fields' => 'setShipmentLevelFields',
        'item_level_fields_list' => 'setItemLevelFieldsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_level_fields' => 'getShipmentLevelFields',
        'item_level_fields_list' => 'getItemLevelFieldsList'
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
        $this->container['shipment_level_fields'] = $data['shipment_level_fields'] ?? null;
        $this->container['item_level_fields_list'] = $data['item_level_fields_list'] ?? null;
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
     * Gets shipment_level_fields
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\AdditionalInputs[]|null
     */
    public function getShipmentLevelFields()
    {
        return $this->container['shipment_level_fields'];
    }

    /**
     * Sets shipment_level_fields
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\AdditionalInputs[]|null $shipment_level_fields A list of additional inputs.
     *
     * @return self
     */
    public function setShipmentLevelFields($shipment_level_fields)
    {
        $this->container['shipment_level_fields'] = $shipment_level_fields;

        return $this;
    }
    /**
     * Gets item_level_fields_list
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\ItemLevelFields[]|null
     */
    public function getItemLevelFieldsList()
    {
        return $this->container['item_level_fields_list'];
    }

    /**
     * Sets item_level_fields_list
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\ItemLevelFields[]|null $item_level_fields_list A list of item level fields.
     *
     * @return self
     */
    public function setItemLevelFieldsList($item_level_fields_list)
    {
        $this->container['item_level_fields_list'] = $item_level_fields_list;

        return $this;
    }
}


