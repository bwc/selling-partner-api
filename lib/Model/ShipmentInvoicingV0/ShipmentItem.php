<?php
/**
 * ShipmentItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Shipment Invoicing
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner's Fulfillment by Amazon (FBA) orders.
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

namespace SellingPartnerApiV5\Model\ShipmentInvoicingV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * ShipmentItem Class Doc Comment
 *
 * @category Class
 * @description The shipment item information required by a seller to issue a shipment invoice.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asin' => 'string',
        'seller_sku' => 'string',
        'order_item_id' => 'string',
        'title' => 'string',
        'quantity_ordered' => 'float',
        'item_price' => '\SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money',
        'shipping_price' => '\SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money',
        'gift_wrap_price' => '\SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money',
        'shipping_discount' => '\SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money',
        'promotion_discount' => '\SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money',
        'serial_numbers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asin' => null,
        'seller_sku' => null,
        'order_item_id' => null,
        'title' => null,
        'quantity_ordered' => null,
        'item_price' => null,
        'shipping_price' => null,
        'gift_wrap_price' => null,
        'shipping_discount' => null,
        'promotion_discount' => null,
        'serial_numbers' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'asin' => 'ASIN',
        'seller_sku' => 'SellerSKU',
        'order_item_id' => 'OrderItemId',
        'title' => 'Title',
        'quantity_ordered' => 'QuantityOrdered',
        'item_price' => 'ItemPrice',
        'shipping_price' => 'ShippingPrice',
        'gift_wrap_price' => 'GiftWrapPrice',
        'shipping_discount' => 'ShippingDiscount',
        'promotion_discount' => 'PromotionDiscount',
        'serial_numbers' => 'SerialNumbers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
        'seller_sku' => 'setSellerSku',
        'order_item_id' => 'setOrderItemId',
        'title' => 'setTitle',
        'quantity_ordered' => 'setQuantityOrdered',
        'item_price' => 'setItemPrice',
        'shipping_price' => 'setShippingPrice',
        'gift_wrap_price' => 'setGiftWrapPrice',
        'shipping_discount' => 'setShippingDiscount',
        'promotion_discount' => 'setPromotionDiscount',
        'serial_numbers' => 'setSerialNumbers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
        'seller_sku' => 'getSellerSku',
        'order_item_id' => 'getOrderItemId',
        'title' => 'getTitle',
        'quantity_ordered' => 'getQuantityOrdered',
        'item_price' => 'getItemPrice',
        'shipping_price' => 'getShippingPrice',
        'gift_wrap_price' => 'getGiftWrapPrice',
        'shipping_discount' => 'getShippingDiscount',
        'promotion_discount' => 'getPromotionDiscount',
        'serial_numbers' => 'getSerialNumbers'
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity_ordered'] = $data['quantity_ordered'] ?? null;
        $this->container['item_price'] = $data['item_price'] ?? null;
        $this->container['shipping_price'] = $data['shipping_price'] ?? null;
        $this->container['gift_wrap_price'] = $data['gift_wrap_price'] ?? null;
        $this->container['shipping_discount'] = $data['shipping_discount'] ?? null;
        $this->container['promotion_discount'] = $data['promotion_discount'] ?? null;
        $this->container['serial_numbers'] = $data['serial_numbers'] ?? null;
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
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets seller_sku
     *
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string|null $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets order_item_id
     *
     * @return string|null
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string|null $order_item_id The Amazon-defined identifier for the order item.
     *
     * @return self
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }
    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The name of the item.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Gets quantity_ordered
     *
     * @return float|null
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param float|null $quantity_ordered The number of items ordered.
     *
     * @return self
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }
    /**
     * Gets item_price
     *
     * @return \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     *
     * @param \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null $item_price item_price
     *
     * @return self
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }
    /**
     * Gets shipping_price
     *
     * @return \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null
     */
    public function getShippingPrice()
    {
        return $this->container['shipping_price'];
    }

    /**
     * Sets shipping_price
     *
     * @param \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null $shipping_price shipping_price
     *
     * @return self
     */
    public function setShippingPrice($shipping_price)
    {
        $this->container['shipping_price'] = $shipping_price;

        return $this;
    }
    /**
     * Gets gift_wrap_price
     *
     * @return \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null
     */
    public function getGiftWrapPrice()
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price
     *
     * @param \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null $gift_wrap_price gift_wrap_price
     *
     * @return self
     */
    public function setGiftWrapPrice($gift_wrap_price)
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }
    /**
     * Gets shipping_discount
     *
     * @return \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null
     */
    public function getShippingDiscount()
    {
        return $this->container['shipping_discount'];
    }

    /**
     * Sets shipping_discount
     *
     * @param \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null $shipping_discount shipping_discount
     *
     * @return self
     */
    public function setShippingDiscount($shipping_discount)
    {
        $this->container['shipping_discount'] = $shipping_discount;

        return $this;
    }
    /**
     * Gets promotion_discount
     *
     * @return \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null
     */
    public function getPromotionDiscount()
    {
        return $this->container['promotion_discount'];
    }

    /**
     * Sets promotion_discount
     *
     * @param \SellingPartnerApiV5\Model\ShipmentInvoicingV0\Money|null $promotion_discount promotion_discount
     *
     * @return self
     */
    public function setPromotionDiscount($promotion_discount)
    {
        $this->container['promotion_discount'] = $promotion_discount;

        return $this;
    }
    /**
     * Gets serial_numbers
     *
     * @return string[]|null
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     *
     * @param string[]|null $serial_numbers The list of serial numbers.
     *
     * @return self
     */
    public function setSerialNumbers($serial_numbers)
    {
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }
}


