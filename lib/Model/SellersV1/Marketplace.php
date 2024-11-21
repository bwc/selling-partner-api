<?php
/**
 * Marketplace
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Sellers
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
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

namespace SellingPartnerApiV5\Model\SellersV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * Marketplace Class Doc Comment
 *
 * @category Class
 * @description Detailed information about an Amazon market where a seller can list items for sale and customers can view and purchase items.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Marketplace extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Marketplace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'country_code' => 'string',
        'default_currency_code' => 'string',
        'default_language_code' => 'string',
        'domain_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'country_code' => null,
        'default_currency_code' => null,
        'default_language_code' => null,
        'domain_name' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'country_code' => 'countryCode',
        'default_currency_code' => 'defaultCurrencyCode',
        'default_language_code' => 'defaultLanguageCode',
        'domain_name' => 'domainName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'country_code' => 'setCountryCode',
        'default_currency_code' => 'setDefaultCurrencyCode',
        'default_language_code' => 'setDefaultLanguageCode',
        'domain_name' => 'setDomainName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'country_code' => 'getCountryCode',
        'default_currency_code' => 'getDefaultCurrencyCode',
        'default_language_code' => 'getDefaultLanguageCode',
        'domain_name' => 'getDomainName'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['default_currency_code'] = $data['default_currency_code'] ?? null;
        $this->container['default_language_code'] = $data['default_language_code'] ?? null;
        $this->container['domain_name'] = $data['domain_name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if (!preg_match("/^([A-Z]{2})$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^([A-Z]{2})$/.";
        }

        if ($this->container['default_currency_code'] === null) {
            $invalidProperties[] = "'default_currency_code' can't be null";
        }
        if ($this->container['default_language_code'] === null) {
            $invalidProperties[] = "'default_language_code' can't be null";
        }
        if ($this->container['domain_name'] === null) {
            $invalidProperties[] = "'domain_name' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The encrypted marketplace value.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name Marketplace name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $country_code The ISO 3166-1 alpha-2 format country code of the marketplace.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {

        if ((!preg_match("/^([A-Z]{2})$/", $country_code))) {
            throw new \InvalidArgumentException("invalid value for $country_code when calling Marketplace., must conform to the pattern /^([A-Z]{2})$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }
    /**
     * Gets default_currency_code
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['default_currency_code'];
    }

    /**
     * Sets default_currency_code
     *
     * @param string $default_currency_code The ISO 4217 format currency code of the marketplace.
     *
     * @return self
     */
    public function setDefaultCurrencyCode($default_currency_code)
    {
        $this->container['default_currency_code'] = $default_currency_code;

        return $this;
    }
    /**
     * Gets default_language_code
     *
     * @return string
     */
    public function getDefaultLanguageCode()
    {
        return $this->container['default_language_code'];
    }

    /**
     * Sets default_language_code
     *
     * @param string $default_language_code The ISO 639-1 format language code of the marketplace.
     *
     * @return self
     */
    public function setDefaultLanguageCode($default_language_code)
    {
        $this->container['default_language_code'] = $default_language_code;

        return $this;
    }
    /**
     * Gets domain_name
     *
     * @return string
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string $domain_name The domain name of the marketplace.
     *
     * @return self
     */
    public function setDomainName($domain_name)
    {
        $this->container['domain_name'] = $domain_name;

        return $this;
    }
}


