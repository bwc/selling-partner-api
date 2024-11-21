<?php
/**
 * CreateInboundShipmentPlanRequest
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
 * CreateInboundShipmentPlanRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the createInboundShipmentPlan operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateInboundShipmentPlanRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInboundShipmentPlanRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ship_from_address' => '\SellingPartnerApiV5\Model\FbaInboundV0\Address',
        'label_prep_preference' => '\SellingPartnerApiV5\Model\FbaInboundV0\LabelPrepPreference',
        'ship_to_country_code' => 'string',
        'ship_to_country_subdivision_code' => 'string',
        'inbound_shipment_plan_request_items' => '\SellingPartnerApiV5\Model\FbaInboundV0\InboundShipmentPlanRequestItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ship_from_address' => null,
        'label_prep_preference' => null,
        'ship_to_country_code' => null,
        'ship_to_country_subdivision_code' => null,
        'inbound_shipment_plan_request_items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ship_from_address' => 'ShipFromAddress',
        'label_prep_preference' => 'LabelPrepPreference',
        'ship_to_country_code' => 'ShipToCountryCode',
        'ship_to_country_subdivision_code' => 'ShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'InboundShipmentPlanRequestItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_from_address' => 'setShipFromAddress',
        'label_prep_preference' => 'setLabelPrepPreference',
        'ship_to_country_code' => 'setShipToCountryCode',
        'ship_to_country_subdivision_code' => 'setShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'setInboundShipmentPlanRequestItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_from_address' => 'getShipFromAddress',
        'label_prep_preference' => 'getLabelPrepPreference',
        'ship_to_country_code' => 'getShipToCountryCode',
        'ship_to_country_subdivision_code' => 'getShipToCountrySubdivisionCode',
        'inbound_shipment_plan_request_items' => 'getInboundShipmentPlanRequestItems'
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
        $this->container['ship_from_address'] = $data['ship_from_address'] ?? null;
        $this->container['label_prep_preference'] = $data['label_prep_preference'] ?? null;
        $this->container['ship_to_country_code'] = $data['ship_to_country_code'] ?? null;
        $this->container['ship_to_country_subdivision_code'] = $data['ship_to_country_subdivision_code'] ?? null;
        $this->container['inbound_shipment_plan_request_items'] = $data['inbound_shipment_plan_request_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ship_from_address'] === null) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if ($this->container['label_prep_preference'] === null) {
            $invalidProperties[] = "'label_prep_preference' can't be null";
        }
        if ($this->container['inbound_shipment_plan_request_items'] === null) {
            $invalidProperties[] = "'inbound_shipment_plan_request_items' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets ship_from_address
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\Address $ship_from_address ship_from_address
     *
     * @return self
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }
    /**
     * Gets label_prep_preference
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\LabelPrepPreference
     */
    public function getLabelPrepPreference()
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\LabelPrepPreference $label_prep_preference label_prep_preference
     *
     * @return self
     */
    public function setLabelPrepPreference($label_prep_preference)
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }
    /**
     * Gets ship_to_country_code
     *
     * @return string|null
     */
    public function getShipToCountryCode()
    {
        return $this->container['ship_to_country_code'];
    }

    /**
     * Sets ship_to_country_code
     *
     * @param string|null $ship_to_country_code The two-character country code for the country where the inbound shipment is to be sent. Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.  Values:  ShipToCountryCode values for North America:  * CA - Canada  * MX - Mexico  * US - United States ShipToCountryCode values for MCI sellers in Europe:  * DE - Germany  * ES - Spain  * FR - France  * GB - United Kingdom  * IT - Italy Default: The country code for the seller's home marketplace.
     *
     * @return self
     */
    public function setShipToCountryCode($ship_to_country_code)
    {
        $this->container['ship_to_country_code'] = $ship_to_country_code;

        return $this;
    }
    /**
     * Gets ship_to_country_subdivision_code
     *
     * @return string|null
     */
    public function getShipToCountrySubdivisionCode()
    {
        return $this->container['ship_to_country_subdivision_code'];
    }

    /**
     * Sets ship_to_country_subdivision_code
     *
     * @param string|null $ship_to_country_subdivision_code The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, \"IN-MH\". In full ISO 3166-2 format. Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     *
     * @return self
     */
    public function setShipToCountrySubdivisionCode($ship_to_country_subdivision_code)
    {
        $this->container['ship_to_country_subdivision_code'] = $ship_to_country_subdivision_code;

        return $this;
    }
    /**
     * Gets inbound_shipment_plan_request_items
     *
     * @return \SellingPartnerApiV5\Model\FbaInboundV0\InboundShipmentPlanRequestItem[]
     */
    public function getInboundShipmentPlanRequestItems()
    {
        return $this->container['inbound_shipment_plan_request_items'];
    }

    /**
     * Sets inbound_shipment_plan_request_items
     *
     * @param \SellingPartnerApiV5\Model\FbaInboundV0\InboundShipmentPlanRequestItem[] $inbound_shipment_plan_request_items inbound_shipment_plan_request_items
     *
     * @return self
     */
    public function setInboundShipmentPlanRequestItems($inbound_shipment_plan_request_items)
    {
        $this->container['inbound_shipment_plan_request_items'] = $inbound_shipment_plan_request_items;

        return $this;
    }
}


