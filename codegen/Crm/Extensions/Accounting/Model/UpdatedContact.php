<?php
/**
 * UpdatedContact
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting Extension
 *
 * These APIs allow you to interact with HubSpot's Accounting Extension. It allows you to: * Specify the URLs that HubSpot will use when making webhook requests to your external accounting system. * Respond to webhook calls made to your external accounting system by HubSpot
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Extensions\Accounting\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Accounting\ObjectSerializer;

/**
 * UpdatedContact Class Doc Comment
 *
 * @category Class
 * @description A request to import external accounting contact properties in HubSpot
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdatedContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatedContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sync_action' => 'string',
        'updated_at' => '\DateTime',
        'email_address' => 'string',
        'id' => 'string',
        'customer_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sync_action' => null,
        'updated_at' => 'date-time',
        'email_address' => null,
        'id' => null,
        'customer_type' => null
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
        'sync_action' => 'syncAction',
        'updated_at' => 'updatedAt',
        'email_address' => 'emailAddress',
        'id' => 'id',
        'customer_type' => 'customerType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sync_action' => 'setSyncAction',
        'updated_at' => 'setUpdatedAt',
        'email_address' => 'setEmailAddress',
        'id' => 'setId',
        'customer_type' => 'setCustomerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sync_action' => 'getSyncAction',
        'updated_at' => 'getUpdatedAt',
        'email_address' => 'getEmailAddress',
        'id' => 'getId',
        'customer_type' => 'getCustomerType'
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

    public const SYNC_ACTION_CREATE = 'CREATE';
    public const SYNC_ACTION_UPDATE = 'UPDATE';
    public const SYNC_ACTION_DELETE = 'DELETE';
    public const CUSTOMER_TYPE_CONTACT = 'CONTACT';
    public const CUSTOMER_TYPE_COMPANY = 'COMPANY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSyncActionAllowableValues()
    {
        return [
            self::SYNC_ACTION_CREATE,
            self::SYNC_ACTION_UPDATE,
            self::SYNC_ACTION_DELETE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerTypeAllowableValues()
    {
        return [
            self::CUSTOMER_TYPE_CONTACT,
            self::CUSTOMER_TYPE_COMPANY,
        ];
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
        $this->container['sync_action'] = $data['sync_action'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['customer_type'] = $data['customer_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sync_action'] === null) {
            $invalidProperties[] = "'sync_action' can't be null";
        }
        $allowedValues = $this->getSyncActionAllowableValues();
        if (!is_null($this->container['sync_action']) && !in_array($this->container['sync_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sync_action', must be one of '%s'",
                $this->container['sync_action'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['email_address'] === null) {
            $invalidProperties[] = "'email_address' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!is_null($this->container['customer_type']) && !in_array($this->container['customer_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'customer_type', must be one of '%s'",
                $this->container['customer_type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets sync_action
     *
     * @return string
     */
    public function getSyncAction()
    {
        return $this->container['sync_action'];
    }

    /**
     * Sets sync_action
     *
     * @param string $sync_action The operation to be performed.
     *
     * @return self
     */
    public function setSyncAction($sync_action)
    {
        $allowedValues = $this->getSyncActionAllowableValues();
        if (!in_array($sync_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sync_action', must be one of '%s'",
                    $sync_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sync_action'] = $sync_action;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The timestamp (ISO8601 format) when the customer was updated in the external accounting system.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address The customer's email address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
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
     * @param string $id The ID of the customer in the external accounting system.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param string|null $customer_type Designates the type of the customer object.
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!is_null($customer_type) && !in_array($customer_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'customer_type', must be one of '%s'",
                    $customer_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customer_type'] = $customer_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


