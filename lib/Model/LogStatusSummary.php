<?php
/**
 * LogStatusSummary
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
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
 * LogStatusSummary Class Doc Comment
 *
 * @category Class
 * @description Summary of log status
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LogStatusSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LogStatusSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipients' => 'int',
        'email_total' => 'int',
        'sms_total' => 'int',
        'delivered' => 'int',
        'bounced' => 'int',
        'in_progress' => 'int',
        'opened' => 'int',
        'clicked' => 'int',
        'unsubscribed' => 'int',
        'complaints' => 'int',
        'inbound' => 'int',
        'manual_cancel' => 'int',
        'not_delivered' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipients' => 'int64',
        'email_total' => 'int64',
        'sms_total' => 'int64',
        'delivered' => 'int64',
        'bounced' => 'int64',
        'in_progress' => 'int64',
        'opened' => 'int64',
        'clicked' => 'int64',
        'unsubscribed' => 'int64',
        'complaints' => 'int64',
        'inbound' => 'int64',
        'manual_cancel' => 'int64',
        'not_delivered' => 'int64'
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
        'recipients' => 'Recipients',
        'email_total' => 'EmailTotal',
        'sms_total' => 'SmsTotal',
        'delivered' => 'Delivered',
        'bounced' => 'Bounced',
        'in_progress' => 'InProgress',
        'opened' => 'Opened',
        'clicked' => 'Clicked',
        'unsubscribed' => 'Unsubscribed',
        'complaints' => 'Complaints',
        'inbound' => 'Inbound',
        'manual_cancel' => 'ManualCancel',
        'not_delivered' => 'NotDelivered'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipients' => 'setRecipients',
        'email_total' => 'setEmailTotal',
        'sms_total' => 'setSmsTotal',
        'delivered' => 'setDelivered',
        'bounced' => 'setBounced',
        'in_progress' => 'setInProgress',
        'opened' => 'setOpened',
        'clicked' => 'setClicked',
        'unsubscribed' => 'setUnsubscribed',
        'complaints' => 'setComplaints',
        'inbound' => 'setInbound',
        'manual_cancel' => 'setManualCancel',
        'not_delivered' => 'setNotDelivered'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipients' => 'getRecipients',
        'email_total' => 'getEmailTotal',
        'sms_total' => 'getSmsTotal',
        'delivered' => 'getDelivered',
        'bounced' => 'getBounced',
        'in_progress' => 'getInProgress',
        'opened' => 'getOpened',
        'clicked' => 'getClicked',
        'unsubscribed' => 'getUnsubscribed',
        'complaints' => 'getComplaints',
        'inbound' => 'getInbound',
        'manual_cancel' => 'getManualCancel',
        'not_delivered' => 'getNotDelivered'
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
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['email_total'] = $data['email_total'] ?? null;
        $this->container['sms_total'] = $data['sms_total'] ?? null;
        $this->container['delivered'] = $data['delivered'] ?? null;
        $this->container['bounced'] = $data['bounced'] ?? null;
        $this->container['in_progress'] = $data['in_progress'] ?? null;
        $this->container['opened'] = $data['opened'] ?? null;
        $this->container['clicked'] = $data['clicked'] ?? null;
        $this->container['unsubscribed'] = $data['unsubscribed'] ?? null;
        $this->container['complaints'] = $data['complaints'] ?? null;
        $this->container['inbound'] = $data['inbound'] ?? null;
        $this->container['manual_cancel'] = $data['manual_cancel'] ?? null;
        $this->container['not_delivered'] = $data['not_delivered'] ?? null;
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
     * Gets recipients
     *
     * @return int|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param int|null $recipients Number of recipients
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets email_total
     *
     * @return int|null
     */
    public function getEmailTotal()
    {
        return $this->container['email_total'];
    }

    /**
     * Sets email_total
     *
     * @param int|null $email_total Number of emails
     *
     * @return self
     */
    public function setEmailTotal($email_total)
    {
        $this->container['email_total'] = $email_total;

        return $this;
    }

    /**
     * Gets sms_total
     *
     * @return int|null
     */
    public function getSmsTotal()
    {
        return $this->container['sms_total'];
    }

    /**
     * Sets sms_total
     *
     * @param int|null $sms_total Number of SMS
     *
     * @return self
     */
    public function setSmsTotal($sms_total)
    {
        $this->container['sms_total'] = $sms_total;

        return $this;
    }

    /**
     * Gets delivered
     *
     * @return int|null
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     *
     * @param int|null $delivered Number of delivered messages
     *
     * @return self
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets bounced
     *
     * @return int|null
     */
    public function getBounced()
    {
        return $this->container['bounced'];
    }

    /**
     * Sets bounced
     *
     * @param int|null $bounced Number of bounced messages
     *
     * @return self
     */
    public function setBounced($bounced)
    {
        $this->container['bounced'] = $bounced;

        return $this;
    }

    /**
     * Gets in_progress
     *
     * @return int|null
     */
    public function getInProgress()
    {
        return $this->container['in_progress'];
    }

    /**
     * Sets in_progress
     *
     * @param int|null $in_progress Number of messages in progress
     *
     * @return self
     */
    public function setInProgress($in_progress)
    {
        $this->container['in_progress'] = $in_progress;

        return $this;
    }

    /**
     * Gets opened
     *
     * @return int|null
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
     * Sets opened
     *
     * @param int|null $opened Number of opened messages
     *
     * @return self
     */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;

        return $this;
    }

    /**
     * Gets clicked
     *
     * @return int|null
     */
    public function getClicked()
    {
        return $this->container['clicked'];
    }

    /**
     * Sets clicked
     *
     * @param int|null $clicked Number of clicked messages
     *
     * @return self
     */
    public function setClicked($clicked)
    {
        $this->container['clicked'] = $clicked;

        return $this;
    }

    /**
     * Gets unsubscribed
     *
     * @return int|null
     */
    public function getUnsubscribed()
    {
        return $this->container['unsubscribed'];
    }

    /**
     * Sets unsubscribed
     *
     * @param int|null $unsubscribed Number of unsubscribed messages
     *
     * @return self
     */
    public function setUnsubscribed($unsubscribed)
    {
        $this->container['unsubscribed'] = $unsubscribed;

        return $this;
    }

    /**
     * Gets complaints
     *
     * @return int|null
     */
    public function getComplaints()
    {
        return $this->container['complaints'];
    }

    /**
     * Sets complaints
     *
     * @param int|null $complaints Number of complaint messages
     *
     * @return self
     */
    public function setComplaints($complaints)
    {
        $this->container['complaints'] = $complaints;

        return $this;
    }

    /**
     * Gets inbound
     *
     * @return int|null
     */
    public function getInbound()
    {
        return $this->container['inbound'];
    }

    /**
     * Sets inbound
     *
     * @param int|null $inbound Number of inbound messages
     *
     * @return self
     */
    public function setInbound($inbound)
    {
        $this->container['inbound'] = $inbound;

        return $this;
    }

    /**
     * Gets manual_cancel
     *
     * @return int|null
     */
    public function getManualCancel()
    {
        return $this->container['manual_cancel'];
    }

    /**
     * Sets manual_cancel
     *
     * @param int|null $manual_cancel Number of manually cancelled messages
     *
     * @return self
     */
    public function setManualCancel($manual_cancel)
    {
        $this->container['manual_cancel'] = $manual_cancel;

        return $this;
    }

    /**
     * Gets not_delivered
     *
     * @return int|null
     */
    public function getNotDelivered()
    {
        return $this->container['not_delivered'];
    }

    /**
     * Sets not_delivered
     *
     * @param int|null $not_delivered Number of messages flagged with 'Not Delivered'
     *
     * @return self
     */
    public function setNotDelivered($not_delivered)
    {
        $this->container['not_delivered'] = $not_delivered;

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


