<?php
/**
 * CapacityType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace SellingPartnerApi\Model\ServiceV1;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * CapacityType Class Doc Comment
 *
 * @category Class
 * @description Type of capacity
 * @package  SellingPartnerApi
 * @group 
 */
class CapacityType
{
    public $value;

    /**
     * Possible values of this enum
     */
    const SCHEDULED_CAPACITY = 'SCHEDULED_CAPACITY';
    const AVAILABLE_CAPACITY = 'AVAILABLE_CAPACITY';
    const ENCUMBERED_CAPACITY = 'ENCUMBERED_CAPACITY';
    const RESERVED_CAPACITY = 'RESERVED_CAPACITY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::SCHEDULED_CAPACITY,
            self::AVAILABLE_CAPACITY,
            self::ENCUMBERED_CAPACITY,
            self::RESERVED_CAPACITY,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'CapacityType', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


