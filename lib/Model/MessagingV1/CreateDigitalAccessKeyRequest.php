<?php
/**
 * CreateDigitalAccessKeyRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Messaging
 *
 * With the Messaging API you can build applications that send messages to buyers. You can get a list of message types that are available for an order that you specify, then call an operation that sends a message to the buyer for that order. The Messaging API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
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

namespace SellingPartnerApiV5\Model\MessagingV1;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * CreateDigitalAccessKeyRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the createDigitalAccessKey operation.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateDigitalAccessKeyRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateDigitalAccessKeyRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text' => 'string',
        'attachments' => '\SellingPartnerApiV5\Model\MessagingV1\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'text' => null,
        'attachments' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text' => 'text',
        'attachments' => 'attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'attachments' => 'getAttachments'
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
        $this->container['text'] = $data['text'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) > 400)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be smaller than or equal to 400.";
        }

        if (!is_null($this->container['text']) && (mb_strlen($this->container['text']) < 1)) {
            $invalidProperties[] = "invalid value for 'text', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }


    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The text to be sent to the buyer. Only links related to the digital access key are allowed. Do not include HTML or email addresses. The text must be written in the buyer's language of preference, which can be retrieved from the GetAttributes operation.
     *
     * @return self
     */
    public function setText($text)
    {
        if (!is_null($text) && (mb_strlen($text) > 400)) {
            throw new \InvalidArgumentException('invalid length for $text when calling CreateDigitalAccessKeyRequest., must be smaller than or equal to 400.');
        }
        if (!is_null($text) && (mb_strlen($text) < 1)) {
            throw new \InvalidArgumentException('invalid length for $text when calling CreateDigitalAccessKeyRequest., must be bigger than or equal to 1.');
        }

        $this->container['text'] = $text;

        return $this;
    }
    /**
     * Gets attachments
     *
     * @return \SellingPartnerApiV5\Model\MessagingV1\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \SellingPartnerApiV5\Model\MessagingV1\Attachment[]|null $attachments Attachments to include in the message to the buyer.
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }
}


