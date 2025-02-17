<?php
/**
 * ShipmentEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentEvent Class Doc Comment
 *
 * @category Class
 * @description A shipment, refund, guarantee claim, or chargeback.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ShipmentEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipmentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'seller_order_id' => 'string',
        'marketplace_name' => 'string',
        'order_charge_list' => '\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]',
        'order_charge_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]',
        'shipment_fee_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'shipment_fee_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'order_fee_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'order_fee_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\FeeComponent[]',
        'direct_payment_list' => '\SellingPartnerApi\Model\FinancesV0\DirectPayment[]',
        'posted_date' => 'string',
        'shipment_item_list' => '\SellingPartnerApi\Model\FinancesV0\ShipmentItem[]',
        'shipment_item_adjustment_list' => '\SellingPartnerApi\Model\FinancesV0\ShipmentItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'seller_order_id' => null,
        'marketplace_name' => null,
        'order_charge_list' => null,
        'order_charge_adjustment_list' => null,
        'shipment_fee_list' => null,
        'shipment_fee_adjustment_list' => null,
        'order_fee_list' => null,
        'order_fee_adjustment_list' => null,
        'direct_payment_list' => null,
        'posted_date' => null,
        'shipment_item_list' => null,
        'shipment_item_adjustment_list' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'seller_order_id' => 'SellerOrderId',
        'marketplace_name' => 'MarketplaceName',
        'order_charge_list' => 'OrderChargeList',
        'order_charge_adjustment_list' => 'OrderChargeAdjustmentList',
        'shipment_fee_list' => 'ShipmentFeeList',
        'shipment_fee_adjustment_list' => 'ShipmentFeeAdjustmentList',
        'order_fee_list' => 'OrderFeeList',
        'order_fee_adjustment_list' => 'OrderFeeAdjustmentList',
        'direct_payment_list' => 'DirectPaymentList',
        'posted_date' => 'PostedDate',
        'shipment_item_list' => 'ShipmentItemList',
        'shipment_item_adjustment_list' => 'ShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'amazon_order_id' => 'setAmazonOrderId',
        'seller_order_id' => 'setSellerOrderId',
        'marketplace_name' => 'setMarketplaceName',
        'order_charge_list' => 'setOrderChargeList',
        'order_charge_adjustment_list' => 'setOrderChargeAdjustmentList',
        'shipment_fee_list' => 'setShipmentFeeList',
        'shipment_fee_adjustment_list' => 'setShipmentFeeAdjustmentList',
        'order_fee_list' => 'setOrderFeeList',
        'order_fee_adjustment_list' => 'setOrderFeeAdjustmentList',
        'direct_payment_list' => 'setDirectPaymentList',
        'posted_date' => 'setPostedDate',
        'shipment_item_list' => 'setShipmentItemList',
        'shipment_item_adjustment_list' => 'setShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'seller_order_id' => 'getSellerOrderId',
        'marketplace_name' => 'getMarketplaceName',
        'order_charge_list' => 'getOrderChargeList',
        'order_charge_adjustment_list' => 'getOrderChargeAdjustmentList',
        'shipment_fee_list' => 'getShipmentFeeList',
        'shipment_fee_adjustment_list' => 'getShipmentFeeAdjustmentList',
        'order_fee_list' => 'getOrderFeeList',
        'order_fee_adjustment_list' => 'getOrderFeeAdjustmentList',
        'direct_payment_list' => 'getDirectPaymentList',
        'posted_date' => 'getPostedDate',
        'shipment_item_list' => 'getShipmentItemList',
        'shipment_item_adjustment_list' => 'getShipmentItemAdjustmentList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['seller_order_id'] = $data['seller_order_id'] ?? null;
        $this->container['marketplace_name'] = $data['marketplace_name'] ?? null;
        $this->container['order_charge_list'] = $data['order_charge_list'] ?? null;
        $this->container['order_charge_adjustment_list'] = $data['order_charge_adjustment_list'] ?? null;
        $this->container['shipment_fee_list'] = $data['shipment_fee_list'] ?? null;
        $this->container['shipment_fee_adjustment_list'] = $data['shipment_fee_adjustment_list'] ?? null;
        $this->container['order_fee_list'] = $data['order_fee_list'] ?? null;
        $this->container['order_fee_adjustment_list'] = $data['order_fee_adjustment_list'] ?? null;
        $this->container['direct_payment_list'] = $data['direct_payment_list'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['shipment_item_list'] = $data['shipment_item_list'] ?? null;
        $this->container['shipment_item_adjustment_list'] = $data['shipment_item_adjustment_list'] ?? null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets seller_order_id
     *
     * @return string|null
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id
     *
     * @param string|null $seller_order_id A seller-defined identifier for an order.
     *
     * @return self
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }
    /**
     * Gets marketplace_name
     *
     * @return string|null
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name
     *
     * @param string|null $marketplace_name The name of the marketplace where the event occurred.
     *
     * @return self
     */
    public function setMarketplaceName($marketplace_name)
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }
    /**
     * Gets order_charge_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null
     */
    public function getOrderChargeList()
    {
        return $this->container['order_charge_list'];
    }

    /**
     * Sets order_charge_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null $order_charge_list A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setOrderChargeList($order_charge_list)
    {
        $this->container['order_charge_list'] = $order_charge_list;

        return $this;
    }
    /**
     * Gets order_charge_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null
     */
    public function getOrderChargeAdjustmentList()
    {
        return $this->container['order_charge_adjustment_list'];
    }

    /**
     * Sets order_charge_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ChargeComponent[]|null $order_charge_adjustment_list A list of charge information on the seller's account.
     *
     * @return self
     */
    public function setOrderChargeAdjustmentList($order_charge_adjustment_list)
    {
        $this->container['order_charge_adjustment_list'] = $order_charge_adjustment_list;

        return $this;
    }
    /**
     * Gets shipment_fee_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getShipmentFeeList()
    {
        return $this->container['shipment_fee_list'];
    }

    /**
     * Sets shipment_fee_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $shipment_fee_list A list of fee component information.
     *
     * @return self
     */
    public function setShipmentFeeList($shipment_fee_list)
    {
        $this->container['shipment_fee_list'] = $shipment_fee_list;

        return $this;
    }
    /**
     * Gets shipment_fee_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getShipmentFeeAdjustmentList()
    {
        return $this->container['shipment_fee_adjustment_list'];
    }

    /**
     * Sets shipment_fee_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $shipment_fee_adjustment_list A list of fee component information.
     *
     * @return self
     */
    public function setShipmentFeeAdjustmentList($shipment_fee_adjustment_list)
    {
        $this->container['shipment_fee_adjustment_list'] = $shipment_fee_adjustment_list;

        return $this;
    }
    /**
     * Gets order_fee_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getOrderFeeList()
    {
        return $this->container['order_fee_list'];
    }

    /**
     * Sets order_fee_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $order_fee_list A list of fee component information.
     *
     * @return self
     */
    public function setOrderFeeList($order_fee_list)
    {
        $this->container['order_fee_list'] = $order_fee_list;

        return $this;
    }
    /**
     * Gets order_fee_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null
     */
    public function getOrderFeeAdjustmentList()
    {
        return $this->container['order_fee_adjustment_list'];
    }

    /**
     * Sets order_fee_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\FeeComponent[]|null $order_fee_adjustment_list A list of fee component information.
     *
     * @return self
     */
    public function setOrderFeeAdjustmentList($order_fee_adjustment_list)
    {
        $this->container['order_fee_adjustment_list'] = $order_fee_adjustment_list;

        return $this;
    }
    /**
     * Gets direct_payment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\DirectPayment[]|null
     */
    public function getDirectPaymentList()
    {
        return $this->container['direct_payment_list'];
    }

    /**
     * Sets direct_payment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\DirectPayment[]|null $direct_payment_list A list of direct payment information.
     *
     * @return self
     */
    public function setDirectPaymentList($direct_payment_list)
    {
        $this->container['direct_payment_list'] = $direct_payment_list;

        return $this;
    }
    /**
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets shipment_item_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ShipmentItem[]|null
     */
    public function getShipmentItemList()
    {
        return $this->container['shipment_item_list'];
    }

    /**
     * Sets shipment_item_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ShipmentItem[]|null $shipment_item_list A list of shipment items.
     *
     * @return self
     */
    public function setShipmentItemList($shipment_item_list)
    {
        $this->container['shipment_item_list'] = $shipment_item_list;

        return $this;
    }
    /**
     * Gets shipment_item_adjustment_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\ShipmentItem[]|null
     */
    public function getShipmentItemAdjustmentList()
    {
        return $this->container['shipment_item_adjustment_list'];
    }

    /**
     * Sets shipment_item_adjustment_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\ShipmentItem[]|null $shipment_item_adjustment_list A list of shipment items.
     *
     * @return self
     */
    public function setShipmentItemAdjustmentList($shipment_item_adjustment_list)
    {
        $this->container['shipment_item_adjustment_list'] = $shipment_item_adjustment_list;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


