<?php
/**
 * SearchContentPublishRecordsResponseAllOf
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\AplusContentV20201101;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * SearchContentPublishRecordsResponseAllOf Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SearchContentPublishRecordsResponseAllOf extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchContentPublishRecordsResponse_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'publish_record_list' => '\SellingPartnerApiV5\Model\AplusContentV20201101\PublishRecord[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'publish_record_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'publish_record_list' => 'publishRecordList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'publish_record_list' => 'setPublishRecordList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'publish_record_list' => 'getPublishRecordList'
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
        $this->container['publish_record_list'] = $data['publish_record_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publish_record_list'] === null) {
            $invalidProperties[] = "'publish_record_list' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets publish_record_list
     *
     * @return \SellingPartnerApiV5\Model\AplusContentV20201101\PublishRecord[]
     */
    public function getPublishRecordList()
    {
        return $this->container['publish_record_list'];
    }

    /**
     * Sets publish_record_list
     *
     * @param \SellingPartnerApiV5\Model\AplusContentV20201101\PublishRecord[] $publish_record_list A list of A+ Content publishing records.
     *
     * @return self
     */
    public function setPublishRecordList($publish_record_list)
    {


        $this->container['publish_record_list'] = $publish_record_list;

        return $this;
    }
}


