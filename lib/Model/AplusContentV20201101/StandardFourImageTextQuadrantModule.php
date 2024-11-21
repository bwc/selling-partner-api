<?php
/**
 * StandardFourImageTextQuadrantModule
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
 * StandardFourImageTextQuadrantModule Class Doc Comment
 *
 * @category Class
 * @description Four standard images with text, presented on a grid of four quadrants.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StandardFourImageTextQuadrantModule extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardFourImageTextQuadrantModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'block1' => '\SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock',
        'block2' => '\SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock',
        'block3' => '\SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock',
        'block4' => '\SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'block1' => null,
        'block2' => null,
        'block3' => null,
        'block4' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'block1' => 'block1',
        'block2' => 'block2',
        'block3' => 'block3',
        'block4' => 'block4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block1' => 'setBlock1',
        'block2' => 'setBlock2',
        'block3' => 'setBlock3',
        'block4' => 'setBlock4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block1' => 'getBlock1',
        'block2' => 'getBlock2',
        'block3' => 'getBlock3',
        'block4' => 'getBlock4'
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
        $this->container['block1'] = $data['block1'] ?? null;
        $this->container['block2'] = $data['block2'] ?? null;
        $this->container['block3'] = $data['block3'] ?? null;
        $this->container['block4'] = $data['block4'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['block1'] === null) {
            $invalidProperties[] = "'block1' can't be null";
        }
        if ($this->container['block2'] === null) {
            $invalidProperties[] = "'block2' can't be null";
        }
        if ($this->container['block3'] === null) {
            $invalidProperties[] = "'block3' can't be null";
        }
        if ($this->container['block4'] === null) {
            $invalidProperties[] = "'block4' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets block1
     *
     * @return \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock
     */
    public function getBlock1()
    {
        return $this->container['block1'];
    }

    /**
     * Sets block1
     *
     * @param \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock $block1 block1
     *
     * @return self
     */
    public function setBlock1($block1)
    {
        $this->container['block1'] = $block1;

        return $this;
    }
    /**
     * Gets block2
     *
     * @return \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock
     */
    public function getBlock2()
    {
        return $this->container['block2'];
    }

    /**
     * Sets block2
     *
     * @param \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock $block2 block2
     *
     * @return self
     */
    public function setBlock2($block2)
    {
        $this->container['block2'] = $block2;

        return $this;
    }
    /**
     * Gets block3
     *
     * @return \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock
     */
    public function getBlock3()
    {
        return $this->container['block3'];
    }

    /**
     * Sets block3
     *
     * @param \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock $block3 block3
     *
     * @return self
     */
    public function setBlock3($block3)
    {
        $this->container['block3'] = $block3;

        return $this;
    }
    /**
     * Gets block4
     *
     * @return \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock
     */
    public function getBlock4()
    {
        return $this->container['block4'];
    }

    /**
     * Sets block4
     *
     * @param \SellingPartnerApiV5\Model\AplusContentV20201101\StandardImageTextBlock $block4 block4
     *
     * @return self
     */
    public function setBlock4($block4)
    {
        $this->container['block4'] = $block4;

        return $this;
    }
}


