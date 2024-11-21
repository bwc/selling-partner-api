<?php
/**
 * DirectFulfillmentItemIdentifiers
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\ShippingV2;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * DirectFulfillmentItemIdentifiers Class Doc Comment
 *
 * @category Class
 * @description Item identifiers for an item in a direct fulfillment shipment.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DirectFulfillmentItemIdentifiers extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DirectFulfillmentItemIdentifiers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_item_id' => 'string',
        'piece_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'line_item_id' => null,
        'piece_number' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'line_item_id' => 'lineItemID',
        'piece_number' => 'pieceNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_item_id' => 'setLineItemId',
        'piece_number' => 'setPieceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_item_id' => 'getLineItemId',
        'piece_number' => 'getPieceNumber'
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
        $this->container['line_item_id'] = $data['line_item_id'] ?? null;
        $this->container['piece_number'] = $data['piece_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['line_item_id'] === null) {
            $invalidProperties[] = "'line_item_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets line_item_id
     *
     * @return string
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param string $line_item_id A unique identifier for an item provided by the client for a direct fulfillment shipment. This is only populated for direct fulfillment multi-piece shipments. It is required if a vendor wants to change the configuration of the packages in which the purchase order is shipped.
     *
     * @return self
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }
    /**
     * Gets piece_number
     *
     * @return string|null
     */
    public function getPieceNumber()
    {
        return $this->container['piece_number'];
    }

    /**
     * Sets piece_number
     *
     * @param string|null $piece_number A unique identifier for an item provided by the client for a direct fulfillment shipment. This is only populated if a single line item has multiple pieces. Defaults to 1.
     *
     * @return self
     */
    public function setPieceNumber($piece_number)
    {
        $this->container['piece_number'] = $piece_number;

        return $this;
    }
}


