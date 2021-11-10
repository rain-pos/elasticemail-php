<?php
/**
 * SubaccountEmailSettingsPayload
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;

use \ArrayAccess;
use \ElasticEmail\ObjectSerializer;

/**
 * SubaccountEmailSettingsPayload Class Doc Comment
 *
 * @category Class
 * @description Settings related to sending emails
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubaccountEmailSettingsPayload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubaccountEmailSettingsPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requires_email_credits' => 'bool',
        'email_size_limit' => 'int',
        'daily_send_limit' => 'int',
        'max_contacts' => 'int',
        'enable_private_ip_purchase' => 'bool',
        'pool_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'requires_email_credits' => 'boolean',
        'email_size_limit' => 'int32',
        'daily_send_limit' => 'int32',
        'max_contacts' => 'int32',
        'enable_private_ip_purchase' => 'boolean',
        'pool_name' => 'string'
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
        'requires_email_credits' => 'RequiresEmailCredits',
        'email_size_limit' => 'EmailSizeLimit',
        'daily_send_limit' => 'DailySendLimit',
        'max_contacts' => 'MaxContacts',
        'enable_private_ip_purchase' => 'EnablePrivateIPPurchase',
        'pool_name' => 'PoolName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requires_email_credits' => 'setRequiresEmailCredits',
        'email_size_limit' => 'setEmailSizeLimit',
        'daily_send_limit' => 'setDailySendLimit',
        'max_contacts' => 'setMaxContacts',
        'enable_private_ip_purchase' => 'setEnablePrivateIpPurchase',
        'pool_name' => 'setPoolName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requires_email_credits' => 'getRequiresEmailCredits',
        'email_size_limit' => 'getEmailSizeLimit',
        'daily_send_limit' => 'getDailySendLimit',
        'max_contacts' => 'getMaxContacts',
        'enable_private_ip_purchase' => 'getEnablePrivateIpPurchase',
        'pool_name' => 'getPoolName'
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
        $this->container['requires_email_credits'] = $data['requires_email_credits'] ?? null;
        $this->container['email_size_limit'] = $data['email_size_limit'] ?? null;
        $this->container['daily_send_limit'] = $data['daily_send_limit'] ?? null;
        $this->container['max_contacts'] = $data['max_contacts'] ?? null;
        $this->container['enable_private_ip_purchase'] = $data['enable_private_ip_purchase'] ?? null;
        $this->container['pool_name'] = $data['pool_name'] ?? null;
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
     * Gets requires_email_credits
     *
     * @return bool|null
     */
    public function getRequiresEmailCredits()
    {
        return $this->container['requires_email_credits'];
    }

    /**
     * Sets requires_email_credits
     *
     * @param bool|null $requires_email_credits True, if Account needs credits to send emails. Otherwise, false
     *
     * @return self
     */
    public function setRequiresEmailCredits($requires_email_credits)
    {
        $this->container['requires_email_credits'] = $requires_email_credits;

        return $this;
    }

    /**
     * Gets email_size_limit
     *
     * @return int|null
     */
    public function getEmailSizeLimit()
    {
        return $this->container['email_size_limit'];
    }

    /**
     * Sets email_size_limit
     *
     * @param int|null $email_size_limit Maximum size of email including attachments in MB's
     *
     * @return self
     */
    public function setEmailSizeLimit($email_size_limit)
    {
        $this->container['email_size_limit'] = $email_size_limit;

        return $this;
    }

    /**
     * Gets daily_send_limit
     *
     * @return int|null
     */
    public function getDailySendLimit()
    {
        return $this->container['daily_send_limit'];
    }

    /**
     * Sets daily_send_limit
     *
     * @param int|null $daily_send_limit Amount of emails Account can send daily
     *
     * @return self
     */
    public function setDailySendLimit($daily_send_limit)
    {
        $this->container['daily_send_limit'] = $daily_send_limit;

        return $this;
    }

    /**
     * Gets max_contacts
     *
     * @return int|null
     */
    public function getMaxContacts()
    {
        return $this->container['max_contacts'];
    }

    /**
     * Sets max_contacts
     *
     * @param int|null $max_contacts Maximum number of contacts the Account can have. 0 means that parent account's limit is used.
     *
     * @return self
     */
    public function setMaxContacts($max_contacts)
    {
        $this->container['max_contacts'] = $max_contacts;

        return $this;
    }

    /**
     * Gets enable_private_ip_purchase
     *
     * @return bool|null
     */
    public function getEnablePrivateIpPurchase()
    {
        return $this->container['enable_private_ip_purchase'];
    }

    /**
     * Sets enable_private_ip_purchase
     *
     * @param bool|null $enable_private_ip_purchase Can the SubAccount purchase Private IP for themselves
     *
     * @return self
     */
    public function setEnablePrivateIpPurchase($enable_private_ip_purchase)
    {
        $this->container['enable_private_ip_purchase'] = $enable_private_ip_purchase;

        return $this;
    }

    /**
     * Gets pool_name
     *
     * @return string|null
     */
    public function getPoolName()
    {
        return $this->container['pool_name'];
    }

    /**
     * Sets pool_name
     *
     * @param string|null $pool_name Name of your custom IP Pool to be used in the sending process
     *
     * @return self
     */
    public function setPoolName($pool_name)
    {
        $this->container['pool_name'] = $pool_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


