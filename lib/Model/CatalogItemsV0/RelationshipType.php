<?php
/**
 * RelationshipType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApiV5
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
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

namespace SellingPartnerApiV5\Model\CatalogItemsV0;
use ArrayAccess;
use SellingPartnerApiV5\Model\BaseModel;
use SellingPartnerApiV5\Model\ModelInterface;

/**
 * RelationshipType Class Doc Comment
 *
 * @category Class
 * @description Specific variations of the item.
 * @package  SellingPartnerApiV5
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RelationshipType extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RelationshipType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifiers' => '\SellingPartnerApiV5\Model\CatalogItemsV0\IdentifierType',
        'color' => 'string',
        'edition' => 'string',
        'flavor' => 'string',
        'gem_type' => 'string[]',
        'golf_club_flex' => 'string',
        'hand_orientation' => 'string',
        'hardware_platform' => 'string',
        'material_type' => 'string[]',
        'metal_type' => 'string',
        'model' => 'string',
        'operating_system' => 'string[]',
        'product_type_subcategory' => 'string',
        'ring_size' => 'string',
        'shaft_material' => 'string',
        'scent' => 'string',
        'size' => 'string',
        'size_per_pearl' => 'string',
        'golf_club_loft' => '\SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits',
        'total_diamond_weight' => '\SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits',
        'total_gem_weight' => '\SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits',
        'package_quantity' => 'int',
        'item_dimensions' => '\SellingPartnerApiV5\Model\CatalogItemsV0\DimensionType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifiers' => null,
        'color' => null,
        'edition' => null,
        'flavor' => null,
        'gem_type' => null,
        'golf_club_flex' => null,
        'hand_orientation' => null,
        'hardware_platform' => null,
        'material_type' => null,
        'metal_type' => null,
        'model' => null,
        'operating_system' => null,
        'product_type_subcategory' => null,
        'ring_size' => null,
        'shaft_material' => null,
        'scent' => null,
        'size' => null,
        'size_per_pearl' => null,
        'golf_club_loft' => null,
        'total_diamond_weight' => null,
        'total_gem_weight' => null,
        'package_quantity' => null,
        'item_dimensions' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifiers' => 'Identifiers',
        'color' => 'Color',
        'edition' => 'Edition',
        'flavor' => 'Flavor',
        'gem_type' => 'GemType',
        'golf_club_flex' => 'GolfClubFlex',
        'hand_orientation' => 'HandOrientation',
        'hardware_platform' => 'HardwarePlatform',
        'material_type' => 'MaterialType',
        'metal_type' => 'MetalType',
        'model' => 'Model',
        'operating_system' => 'OperatingSystem',
        'product_type_subcategory' => 'ProductTypeSubcategory',
        'ring_size' => 'RingSize',
        'shaft_material' => 'ShaftMaterial',
        'scent' => 'Scent',
        'size' => 'Size',
        'size_per_pearl' => 'SizePerPearl',
        'golf_club_loft' => 'GolfClubLoft',
        'total_diamond_weight' => 'TotalDiamondWeight',
        'total_gem_weight' => 'TotalGemWeight',
        'package_quantity' => 'PackageQuantity',
        'item_dimensions' => 'ItemDimensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifiers' => 'setIdentifiers',
        'color' => 'setColor',
        'edition' => 'setEdition',
        'flavor' => 'setFlavor',
        'gem_type' => 'setGemType',
        'golf_club_flex' => 'setGolfClubFlex',
        'hand_orientation' => 'setHandOrientation',
        'hardware_platform' => 'setHardwarePlatform',
        'material_type' => 'setMaterialType',
        'metal_type' => 'setMetalType',
        'model' => 'setModel',
        'operating_system' => 'setOperatingSystem',
        'product_type_subcategory' => 'setProductTypeSubcategory',
        'ring_size' => 'setRingSize',
        'shaft_material' => 'setShaftMaterial',
        'scent' => 'setScent',
        'size' => 'setSize',
        'size_per_pearl' => 'setSizePerPearl',
        'golf_club_loft' => 'setGolfClubLoft',
        'total_diamond_weight' => 'setTotalDiamondWeight',
        'total_gem_weight' => 'setTotalGemWeight',
        'package_quantity' => 'setPackageQuantity',
        'item_dimensions' => 'setItemDimensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifiers' => 'getIdentifiers',
        'color' => 'getColor',
        'edition' => 'getEdition',
        'flavor' => 'getFlavor',
        'gem_type' => 'getGemType',
        'golf_club_flex' => 'getGolfClubFlex',
        'hand_orientation' => 'getHandOrientation',
        'hardware_platform' => 'getHardwarePlatform',
        'material_type' => 'getMaterialType',
        'metal_type' => 'getMetalType',
        'model' => 'getModel',
        'operating_system' => 'getOperatingSystem',
        'product_type_subcategory' => 'getProductTypeSubcategory',
        'ring_size' => 'getRingSize',
        'shaft_material' => 'getShaftMaterial',
        'scent' => 'getScent',
        'size' => 'getSize',
        'size_per_pearl' => 'getSizePerPearl',
        'golf_club_loft' => 'getGolfClubLoft',
        'total_diamond_weight' => 'getTotalDiamondWeight',
        'total_gem_weight' => 'getTotalGemWeight',
        'package_quantity' => 'getPackageQuantity',
        'item_dimensions' => 'getItemDimensions'
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
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
        $this->container['edition'] = $data['edition'] ?? null;
        $this->container['flavor'] = $data['flavor'] ?? null;
        $this->container['gem_type'] = $data['gem_type'] ?? null;
        $this->container['golf_club_flex'] = $data['golf_club_flex'] ?? null;
        $this->container['hand_orientation'] = $data['hand_orientation'] ?? null;
        $this->container['hardware_platform'] = $data['hardware_platform'] ?? null;
        $this->container['material_type'] = $data['material_type'] ?? null;
        $this->container['metal_type'] = $data['metal_type'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['operating_system'] = $data['operating_system'] ?? null;
        $this->container['product_type_subcategory'] = $data['product_type_subcategory'] ?? null;
        $this->container['ring_size'] = $data['ring_size'] ?? null;
        $this->container['shaft_material'] = $data['shaft_material'] ?? null;
        $this->container['scent'] = $data['scent'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['size_per_pearl'] = $data['size_per_pearl'] ?? null;
        $this->container['golf_club_loft'] = $data['golf_club_loft'] ?? null;
        $this->container['total_diamond_weight'] = $data['total_diamond_weight'] ?? null;
        $this->container['total_gem_weight'] = $data['total_gem_weight'] ?? null;
        $this->container['package_quantity'] = $data['package_quantity'] ?? null;
        $this->container['item_dimensions'] = $data['item_dimensions'] ?? null;
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
     * Gets identifiers
     *
     * @return \SellingPartnerApiV5\Model\CatalogItemsV0\IdentifierType|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \SellingPartnerApiV5\Model\CatalogItemsV0\IdentifierType|null $identifiers identifiers
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }
    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color The color variation of the item.
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
    /**
     * Gets edition
     *
     * @return string|null
     */
    public function getEdition()
    {
        return $this->container['edition'];
    }

    /**
     * Sets edition
     *
     * @param string|null $edition The edition variation of the item.
     *
     * @return self
     */
    public function setEdition($edition)
    {
        $this->container['edition'] = $edition;

        return $this;
    }
    /**
     * Gets flavor
     *
     * @return string|null
     */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
     * Sets flavor
     *
     * @param string|null $flavor The flavor variation of the item.
     *
     * @return self
     */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;

        return $this;
    }
    /**
     * Gets gem_type
     *
     * @return string[]|null
     */
    public function getGemType()
    {
        return $this->container['gem_type'];
    }

    /**
     * Sets gem_type
     *
     * @param string[]|null $gem_type The gem type variations of the item.
     *
     * @return self
     */
    public function setGemType($gem_type)
    {
        $this->container['gem_type'] = $gem_type;

        return $this;
    }
    /**
     * Gets golf_club_flex
     *
     * @return string|null
     */
    public function getGolfClubFlex()
    {
        return $this->container['golf_club_flex'];
    }

    /**
     * Sets golf_club_flex
     *
     * @param string|null $golf_club_flex The golf club flex variation of an item.
     *
     * @return self
     */
    public function setGolfClubFlex($golf_club_flex)
    {
        $this->container['golf_club_flex'] = $golf_club_flex;

        return $this;
    }
    /**
     * Gets hand_orientation
     *
     * @return string|null
     */
    public function getHandOrientation()
    {
        return $this->container['hand_orientation'];
    }

    /**
     * Sets hand_orientation
     *
     * @param string|null $hand_orientation The hand orientation variation of an item.
     *
     * @return self
     */
    public function setHandOrientation($hand_orientation)
    {
        $this->container['hand_orientation'] = $hand_orientation;

        return $this;
    }
    /**
     * Gets hardware_platform
     *
     * @return string|null
     */
    public function getHardwarePlatform()
    {
        return $this->container['hardware_platform'];
    }

    /**
     * Sets hardware_platform
     *
     * @param string|null $hardware_platform The hardware platform variation of an item.
     *
     * @return self
     */
    public function setHardwarePlatform($hardware_platform)
    {
        $this->container['hardware_platform'] = $hardware_platform;

        return $this;
    }
    /**
     * Gets material_type
     *
     * @return string[]|null
     */
    public function getMaterialType()
    {
        return $this->container['material_type'];
    }

    /**
     * Sets material_type
     *
     * @param string[]|null $material_type The material type variations of an item.
     *
     * @return self
     */
    public function setMaterialType($material_type)
    {
        $this->container['material_type'] = $material_type;

        return $this;
    }
    /**
     * Gets metal_type
     *
     * @return string|null
     */
    public function getMetalType()
    {
        return $this->container['metal_type'];
    }

    /**
     * Sets metal_type
     *
     * @param string|null $metal_type The metal type variation of an item.
     *
     * @return self
     */
    public function setMetalType($metal_type)
    {
        $this->container['metal_type'] = $metal_type;

        return $this;
    }
    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The model variation of an item.
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }
    /**
     * Gets operating_system
     *
     * @return string[]|null
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system
     *
     * @param string[]|null $operating_system The operating system variations of an item.
     *
     * @return self
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

        return $this;
    }
    /**
     * Gets product_type_subcategory
     *
     * @return string|null
     */
    public function getProductTypeSubcategory()
    {
        return $this->container['product_type_subcategory'];
    }

    /**
     * Sets product_type_subcategory
     *
     * @param string|null $product_type_subcategory The product type subcategory variation of an item.
     *
     * @return self
     */
    public function setProductTypeSubcategory($product_type_subcategory)
    {
        $this->container['product_type_subcategory'] = $product_type_subcategory;

        return $this;
    }
    /**
     * Gets ring_size
     *
     * @return string|null
     */
    public function getRingSize()
    {
        return $this->container['ring_size'];
    }

    /**
     * Sets ring_size
     *
     * @param string|null $ring_size The ring size variation of an item.
     *
     * @return self
     */
    public function setRingSize($ring_size)
    {
        $this->container['ring_size'] = $ring_size;

        return $this;
    }
    /**
     * Gets shaft_material
     *
     * @return string|null
     */
    public function getShaftMaterial()
    {
        return $this->container['shaft_material'];
    }

    /**
     * Sets shaft_material
     *
     * @param string|null $shaft_material The shaft material variation of an item.
     *
     * @return self
     */
    public function setShaftMaterial($shaft_material)
    {
        $this->container['shaft_material'] = $shaft_material;

        return $this;
    }
    /**
     * Gets scent
     *
     * @return string|null
     */
    public function getScent()
    {
        return $this->container['scent'];
    }

    /**
     * Sets scent
     *
     * @param string|null $scent The scent variation of an item.
     *
     * @return self
     */
    public function setScent($scent)
    {
        $this->container['scent'] = $scent;

        return $this;
    }
    /**
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size The size variation of an item.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }
    /**
     * Gets size_per_pearl
     *
     * @return string|null
     */
    public function getSizePerPearl()
    {
        return $this->container['size_per_pearl'];
    }

    /**
     * Sets size_per_pearl
     *
     * @param string|null $size_per_pearl The size per pearl variation of an item.
     *
     * @return self
     */
    public function setSizePerPearl($size_per_pearl)
    {
        $this->container['size_per_pearl'] = $size_per_pearl;

        return $this;
    }
    /**
     * Gets golf_club_loft
     *
     * @return \SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits|null
     */
    public function getGolfClubLoft()
    {
        return $this->container['golf_club_loft'];
    }

    /**
     * Sets golf_club_loft
     *
     * @param \SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits|null $golf_club_loft golf_club_loft
     *
     * @return self
     */
    public function setGolfClubLoft($golf_club_loft)
    {
        $this->container['golf_club_loft'] = $golf_club_loft;

        return $this;
    }
    /**
     * Gets total_diamond_weight
     *
     * @return \SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits|null
     */
    public function getTotalDiamondWeight()
    {
        return $this->container['total_diamond_weight'];
    }

    /**
     * Sets total_diamond_weight
     *
     * @param \SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits|null $total_diamond_weight total_diamond_weight
     *
     * @return self
     */
    public function setTotalDiamondWeight($total_diamond_weight)
    {
        $this->container['total_diamond_weight'] = $total_diamond_weight;

        return $this;
    }
    /**
     * Gets total_gem_weight
     *
     * @return \SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits|null
     */
    public function getTotalGemWeight()
    {
        return $this->container['total_gem_weight'];
    }

    /**
     * Sets total_gem_weight
     *
     * @param \SellingPartnerApiV5\Model\CatalogItemsV0\DecimalWithUnits|null $total_gem_weight total_gem_weight
     *
     * @return self
     */
    public function setTotalGemWeight($total_gem_weight)
    {
        $this->container['total_gem_weight'] = $total_gem_weight;

        return $this;
    }
    /**
     * Gets package_quantity
     *
     * @return int|null
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity
     *
     * @param int|null $package_quantity The package quantity variation of an item.
     *
     * @return self
     */
    public function setPackageQuantity($package_quantity)
    {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }
    /**
     * Gets item_dimensions
     *
     * @return \SellingPartnerApiV5\Model\CatalogItemsV0\DimensionType|null
     */
    public function getItemDimensions()
    {
        return $this->container['item_dimensions'];
    }

    /**
     * Sets item_dimensions
     *
     * @param \SellingPartnerApiV5\Model\CatalogItemsV0\DimensionType|null $item_dimensions item_dimensions
     *
     * @return self
     */
    public function setItemDimensions($item_dimensions)
    {
        $this->container['item_dimensions'] = $item_dimensions;

        return $this;
    }
}


