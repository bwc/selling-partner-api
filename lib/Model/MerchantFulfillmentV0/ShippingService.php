<?php
/**
 * ShippingService
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
 * ShippingService Class Doc Comment
 *
 * @category Class
 * @description A shipping service offer made by a carrier.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShippingService extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'shipping_service_name' => 'string',
        'carrier_name' => 'string',
        'shipping_service_id' => 'string',
        'shipping_service_offer_id' => 'string',
        'ship_date' => 'string',
        'earliest_estimated_delivery_date' => 'string',
        'latest_estimated_delivery_date' => 'string',
        'rate' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\CurrencyAmount',
        'shipping_service_options' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\ShippingServiceOptions',
        'available_shipping_service_options' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\AvailableShippingServiceOptions',
        'available_label_formats' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\LabelFormat[]',
        'available_format_options_for_label' => '\SellingPartnerApiV5\Model\MerchantFulfillmentV0\LabelFormatOption[]',
        'requires_additional_seller_inputs' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'shipping_service_name' => null,
        'carrier_name' => null,
        'shipping_service_id' => null,
        'shipping_service_offer_id' => null,
        'ship_date' => null,
        'earliest_estimated_delivery_date' => null,
        'latest_estimated_delivery_date' => null,
        'rate' => null,
        'shipping_service_options' => null,
        'available_shipping_service_options' => null,
        'available_label_formats' => null,
        'available_format_options_for_label' => null,
        'requires_additional_seller_inputs' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipping_service_name' => 'ShippingServiceName',
        'carrier_name' => 'CarrierName',
        'shipping_service_id' => 'ShippingServiceId',
        'shipping_service_offer_id' => 'ShippingServiceOfferId',
        'ship_date' => 'ShipDate',
        'earliest_estimated_delivery_date' => 'EarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'LatestEstimatedDeliveryDate',
        'rate' => 'Rate',
        'shipping_service_options' => 'ShippingServiceOptions',
        'available_shipping_service_options' => 'AvailableShippingServiceOptions',
        'available_label_formats' => 'AvailableLabelFormats',
        'available_format_options_for_label' => 'AvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'RequiresAdditionalSellerInputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_service_name' => 'setShippingServiceName',
        'carrier_name' => 'setCarrierName',
        'shipping_service_id' => 'setShippingServiceId',
        'shipping_service_offer_id' => 'setShippingServiceOfferId',
        'ship_date' => 'setShipDate',
        'earliest_estimated_delivery_date' => 'setEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'setLatestEstimatedDeliveryDate',
        'rate' => 'setRate',
        'shipping_service_options' => 'setShippingServiceOptions',
        'available_shipping_service_options' => 'setAvailableShippingServiceOptions',
        'available_label_formats' => 'setAvailableLabelFormats',
        'available_format_options_for_label' => 'setAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'setRequiresAdditionalSellerInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_service_name' => 'getShippingServiceName',
        'carrier_name' => 'getCarrierName',
        'shipping_service_id' => 'getShippingServiceId',
        'shipping_service_offer_id' => 'getShippingServiceOfferId',
        'ship_date' => 'getShipDate',
        'earliest_estimated_delivery_date' => 'getEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'getLatestEstimatedDeliveryDate',
        'rate' => 'getRate',
        'shipping_service_options' => 'getShippingServiceOptions',
        'available_shipping_service_options' => 'getAvailableShippingServiceOptions',
        'available_label_formats' => 'getAvailableLabelFormats',
        'available_format_options_for_label' => 'getAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'getRequiresAdditionalSellerInputs'
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
        $this->container['shipping_service_name'] = $data['shipping_service_name'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['shipping_service_id'] = $data['shipping_service_id'] ?? null;
        $this->container['shipping_service_offer_id'] = $data['shipping_service_offer_id'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['earliest_estimated_delivery_date'] = $data['earliest_estimated_delivery_date'] ?? null;
        $this->container['latest_estimated_delivery_date'] = $data['latest_estimated_delivery_date'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['shipping_service_options'] = $data['shipping_service_options'] ?? null;
        $this->container['available_shipping_service_options'] = $data['available_shipping_service_options'] ?? null;
        $this->container['available_label_formats'] = $data['available_label_formats'] ?? null;
        $this->container['available_format_options_for_label'] = $data['available_format_options_for_label'] ?? null;
        $this->container['requires_additional_seller_inputs'] = $data['requires_additional_seller_inputs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shipping_service_name'] === null) {
            $invalidProperties[] = "'shipping_service_name' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['shipping_service_id'] === null) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
        }
        if ($this->container['shipping_service_offer_id'] === null) {
            $invalidProperties[] = "'shipping_service_offer_id' can't be null";
        }
        if ($this->container['ship_date'] === null) {
            $invalidProperties[] = "'ship_date' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['shipping_service_options'] === null) {
            $invalidProperties[] = "'shipping_service_options' can't be null";
        }
        if ($this->container['requires_additional_seller_inputs'] === null) {
            $invalidProperties[] = "'requires_additional_seller_inputs' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets shipping_service_name
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name
     *
     * @param string $shipping_service_name A plain text representation of a carrier's shipping service. For example, \"UPS Ground\" or \"FedEx Standard Overnight\".
     *
     * @return self
     */
    public function setShippingServiceName($shipping_service_name)
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
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
     * @param string $carrier_name The name of the carrier.
     *
     * @return self
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }
    /**
     * Gets shipping_service_id
     *
     * @return string
     */
    public function getShippingServiceId()
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id
     *
     * @param string $shipping_service_id An Amazon-defined shipping service identifier.
     *
     * @return self
     */
    public function setShippingServiceId($shipping_service_id)
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }
    /**
     * Gets shipping_service_offer_id
     *
     * @return string
     */
    public function getShippingServiceOfferId()
    {
        return $this->container['shipping_service_offer_id'];
    }

    /**
     * Sets shipping_service_offer_id
     *
     * @param string $shipping_service_offer_id An Amazon-defined shipping service offer identifier.
     *
     * @return self
     */
    public function setShippingServiceOfferId($shipping_service_offer_id)
    {
        $this->container['shipping_service_offer_id'] = $shipping_service_offer_id;

        return $this;
    }
    /**
     * Gets ship_date
     *
     * @return string
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param string $ship_date A timestamp in ISO 8601 format.
     *
     * @return self
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }
    /**
     * Gets earliest_estimated_delivery_date
     *
     * @return string|null
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->container['earliest_estimated_delivery_date'];
    }

    /**
     * Sets earliest_estimated_delivery_date
     *
     * @param string|null $earliest_estimated_delivery_date A timestamp in ISO 8601 format.
     *
     * @return self
     */
    public function setEarliestEstimatedDeliveryDate($earliest_estimated_delivery_date)
    {
        $this->container['earliest_estimated_delivery_date'] = $earliest_estimated_delivery_date;

        return $this;
    }
    /**
     * Gets latest_estimated_delivery_date
     *
     * @return string|null
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->container['latest_estimated_delivery_date'];
    }

    /**
     * Sets latest_estimated_delivery_date
     *
     * @param string|null $latest_estimated_delivery_date A timestamp in ISO 8601 format.
     *
     * @return self
     */
    public function setLatestEstimatedDeliveryDate($latest_estimated_delivery_date)
    {
        $this->container['latest_estimated_delivery_date'] = $latest_estimated_delivery_date;

        return $this;
    }
    /**
     * Gets rate
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\CurrencyAmount
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\CurrencyAmount $rate rate
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }
    /**
     * Gets shipping_service_options
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\ShippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\ShippingServiceOptions $shipping_service_options shipping_service_options
     *
     * @return self
     */
    public function setShippingServiceOptions($shipping_service_options)
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }
    /**
     * Gets available_shipping_service_options
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\AvailableShippingServiceOptions|null
     */
    public function getAvailableShippingServiceOptions()
    {
        return $this->container['available_shipping_service_options'];
    }

    /**
     * Sets available_shipping_service_options
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\AvailableShippingServiceOptions|null $available_shipping_service_options available_shipping_service_options
     *
     * @return self
     */
    public function setAvailableShippingServiceOptions($available_shipping_service_options)
    {
        $this->container['available_shipping_service_options'] = $available_shipping_service_options;

        return $this;
    }
    /**
     * Gets available_label_formats
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\LabelFormat[]|null
     */
    public function getAvailableLabelFormats()
    {
        return $this->container['available_label_formats'];
    }

    /**
     * Sets available_label_formats
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\LabelFormat[]|null $available_label_formats List of label formats.
     *
     * @return self
     */
    public function setAvailableLabelFormats($available_label_formats)
    {
        $this->container['available_label_formats'] = $available_label_formats;

        return $this;
    }
    /**
     * Gets available_format_options_for_label
     *
     * @return \SellingPartnerApiV5\Model\MerchantFulfillmentV0\LabelFormatOption[]|null
     */
    public function getAvailableFormatOptionsForLabel()
    {
        return $this->container['available_format_options_for_label'];
    }

    /**
     * Sets available_format_options_for_label
     *
     * @param \SellingPartnerApiV5\Model\MerchantFulfillmentV0\LabelFormatOption[]|null $available_format_options_for_label The available label formats.
     *
     * @return self
     */
    public function setAvailableFormatOptionsForLabel($available_format_options_for_label)
    {
        $this->container['available_format_options_for_label'] = $available_format_options_for_label;

        return $this;
    }
    /**
     * Gets requires_additional_seller_inputs
     *
     * @return bool
     */
    public function getRequiresAdditionalSellerInputs()
    {
        return $this->container['requires_additional_seller_inputs'];
    }

    /**
     * Sets requires_additional_seller_inputs
     *
     * @param bool $requires_additional_seller_inputs When true, additional seller inputs are required.
     *
     * @return self
     */
    public function setRequiresAdditionalSellerInputs($requires_additional_seller_inputs)
    {
        $this->container['requires_additional_seller_inputs'] = $requires_additional_seller_inputs;

        return $this;
    }
}


