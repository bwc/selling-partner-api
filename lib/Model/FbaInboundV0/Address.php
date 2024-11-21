<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Address extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'district_or_county' => 'string',
        'city' => 'string',
        'state_or_province_code' => 'string',
        'country_code' => 'string',
        'postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'district_or_county' => null,
        'city' => null,
        'state_or_province_code' => null,
        'country_code' => null,
        'postal_code' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'district_or_county' => 'DistrictOrCounty',
        'city' => 'City',
        'state_or_province_code' => 'StateOrProvinceCode',
        'country_code' => 'CountryCode',
        'postal_code' => 'PostalCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'district_or_county' => 'setDistrictOrCounty',
        'city' => 'setCity',
        'state_or_province_code' => 'setStateOrProvinceCode',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'district_or_county' => 'getDistrictOrCounty',
        'city' => 'getCity',
        'state_or_province_code' => 'getStateOrProvinceCode',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['district_or_county'] = $data['district_or_county'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ((mb_strlen($this->container['address_line1']) > 180)) {
            $invalidProperties[] = "invalid value for 'address_line1', the character length must be smaller than or equal to 180.";
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 60)) {
            $invalidProperties[] = "invalid value for 'address_line2', the character length must be smaller than or equal to 60.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 30)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 30.";
        }

        if ($this->container['state_or_province_code'] === null) {
            $invalidProperties[] = "'state_or_province_code' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 30)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 30.";
        }

        return $invalidProperties;
    }


    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the individual or business.
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Address., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }
    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 The street address information.
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if ((mb_strlen($address_line1) > 180)) {
            throw new \InvalidArgumentException('invalid length for $address_line1 when calling Address., must be smaller than or equal to 180.');
        }

        $this->container['address_line1'] = $address_line1;

        return $this;
    }
    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional street address information, if required.
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (!is_null($address_line2) && (mb_strlen($address_line2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address_line2 when calling Address., must be smaller than or equal to 60.');
        }

        $this->container['address_line2'] = $address_line2;

        return $this;
    }
    /**
     * Gets district_or_county
     *
     * @return string|null
     */
    public function getDistrictOrCounty()
    {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county
     *
     * @param string|null $district_or_county The district or county.
     *
     * @return self
     */
    public function setDistrictOrCounty($district_or_county)
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }
    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city.
     *
     * @return self
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 30)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 30.');
        }

        $this->container['city'] = $city;

        return $this;
    }
    /**
     * Gets state_or_province_code
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code
     *
     * @param string $state_or_province_code The state or province code. If state or province codes are used in your marketplace, it is recommended that you include one with your request. This helps Amazon to select the most appropriate Amazon fulfillment center for your inbound shipment plan.
     *
     * @return self
     */
    public function setStateOrProvinceCode($state_or_province_code)
    {
        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }
    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code in two-character ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }
    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The postal code. If postal codes are used in your marketplace, we recommended that you include one with your request. This helps Amazon select the most appropriate Amazon fulfillment center for the inbound shipment plan.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if ((mb_strlen($postal_code) > 30)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling Address., must be smaller than or equal to 30.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }
}


