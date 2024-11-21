<?php
/**
 * ReportDocument
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2021-06-30
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApiV5\Model\ReportsV20210630;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * ReportDocument Class Doc Comment
 *
 * @category Class
 * @description Information required for the report document.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ReportDocument extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_document_id' => 'string',
        'url' => 'string',
        'compression_algorithm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_document_id' => null,
        'url' => null,
        'compression_algorithm' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'report_document_id' => 'reportDocumentId',
        'url' => 'url',
        'compression_algorithm' => 'compressionAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'report_document_id' => 'setReportDocumentId',
        'url' => 'setUrl',
        'compression_algorithm' => 'setCompressionAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'report_document_id' => 'getReportDocumentId',
        'url' => 'getUrl',
        'compression_algorithm' => 'getCompressionAlgorithm'
    ];



    const COMPRESSION_ALGORITHM_GZIP = 'GZIP';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompressionAlgorithmAllowableValues()
    {
        $baseVals = [
            self::COMPRESSION_ALGORITHM_GZIP,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
    }
    
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
        $this->container['report_document_id'] = $data['report_document_id'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['compression_algorithm'] = $data['compression_algorithm'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['report_document_id'] === null) {
            $invalidProperties[] = "'report_document_id' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (
            !is_null($this->container['compression_algorithm']) &&
            !in_array(strtoupper($this->container['compression_algorithm']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'compression_algorithm', must be one of '%s'",
                $this->container['compression_algorithm'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets report_document_id
     *
     * @return string
     */
    public function getReportDocumentId()
    {
        return $this->container['report_document_id'];
    }

    /**
     * Sets report_document_id
     *
     * @param string $report_document_id The identifier for the report document. This identifier is unique only in combination with a seller ID.
     *
     * @return self
     */
    public function setReportDocumentId($report_document_id)
    {
        $this->container['report_document_id'] = $report_document_id;

        return $this;
    }
    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A presigned URL for the report document. If `compressionAlgorithm` is not returned, you can download the report directly from this URL. This URL expires after 5 minutes.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Gets compression_algorithm
     *
     * @return string|null
     */
    public function getCompressionAlgorithm()
    {
        return $this->container['compression_algorithm'];
    }

    /**
     * Sets compression_algorithm
     *
     * @param string|null $compression_algorithm If the report document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the report when you download. Otherwise, you can download the report directly. Refer to [Step 2. Download the report](https://developer-docs.amazon.com/sp-api/docs/reports-api-v2021-06-30-retrieve-a-report#step-2-download-the-report) in the use case guide, where sample code is provided.
     *
     * @return self
     */
    public function setCompressionAlgorithm($compression_algorithm)
    {
        $allowedValues = $this->getCompressionAlgorithmAllowableValues();
        if (!is_null($compression_algorithm) &&!in_array(strtoupper($compression_algorithm), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'compression_algorithm', must be one of '%s'",
                    $compression_algorithm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['compression_algorithm'] = $compression_algorithm;

        return $this;
    }
}


