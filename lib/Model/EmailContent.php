<?php
/**
 * EmailContent
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
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
 * EmailContent Class Doc Comment
 *
 * @category Class
 * @description Proper e-mail content
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmailContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'body' => '\ElasticEmail\Model\BodyPart[]',
        'merge' => 'array<string,string>',
        'attachments' => '\ElasticEmail\Model\MessageAttachment[]',
        'headers' => 'array<string,string>',
        'postback' => 'string',
        'envelope_from' => 'string',
        'from' => 'string',
        'reply_to' => 'string',
        'subject' => 'string',
        'template_name' => 'string',
        'attach_files' => 'string[]',
        'utm' => '\ElasticEmail\Model\Utm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'body' => null,
        'merge' => null,
        'attachments' => null,
        'headers' => null,
        'postback' => 'string',
        'envelope_from' => 'string',
        'from' => 'string',
        'reply_to' => 'string',
        'subject' => 'string',
        'template_name' => 'string',
        'attach_files' => 'string',
        'utm' => null
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
        'body' => 'Body',
        'merge' => 'Merge',
        'attachments' => 'Attachments',
        'headers' => 'Headers',
        'postback' => 'Postback',
        'envelope_from' => 'EnvelopeFrom',
        'from' => 'From',
        'reply_to' => 'ReplyTo',
        'subject' => 'Subject',
        'template_name' => 'TemplateName',
        'attach_files' => 'AttachFiles',
        'utm' => 'Utm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body' => 'setBody',
        'merge' => 'setMerge',
        'attachments' => 'setAttachments',
        'headers' => 'setHeaders',
        'postback' => 'setPostback',
        'envelope_from' => 'setEnvelopeFrom',
        'from' => 'setFrom',
        'reply_to' => 'setReplyTo',
        'subject' => 'setSubject',
        'template_name' => 'setTemplateName',
        'attach_files' => 'setAttachFiles',
        'utm' => 'setUtm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body' => 'getBody',
        'merge' => 'getMerge',
        'attachments' => 'getAttachments',
        'headers' => 'getHeaders',
        'postback' => 'getPostback',
        'envelope_from' => 'getEnvelopeFrom',
        'from' => 'getFrom',
        'reply_to' => 'getReplyTo',
        'subject' => 'getSubject',
        'template_name' => 'getTemplateName',
        'attach_files' => 'getAttachFiles',
        'utm' => 'getUtm'
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
        $this->container['body'] = $data['body'] ?? null;
        $this->container['merge'] = $data['merge'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['postback'] = $data['postback'] ?? null;
        $this->container['envelope_from'] = $data['envelope_from'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['reply_to'] = $data['reply_to'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['template_name'] = $data['template_name'] ?? null;
        $this->container['attach_files'] = $data['attach_files'] ?? null;
        $this->container['utm'] = $data['utm'] ?? null;
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
     * Gets body
     *
     * @return \ElasticEmail\Model\BodyPart[]|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param \ElasticEmail\Model\BodyPart[]|null $body List of e-mail body parts, with user-provided MIME types (text/html, text/plain etc)
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets merge
     *
     * @return array<string,string>|null
     */
    public function getMerge()
    {
        return $this->container['merge'];
    }

    /**
     * Sets merge
     *
     * @param array<string,string>|null $merge A key-value collection of custom merge fields, shared between recipients. Should be used in e-mail body like so: {firstname}, {lastname} etc.
     *
     * @return self
     */
    public function setMerge($merge)
    {
        $this->container['merge'] = $merge;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \ElasticEmail\Model\MessageAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \ElasticEmail\Model\MessageAttachment[]|null $attachments Attachments provided by sending binary data
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return array<string,string>|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param array<string,string>|null $headers A key-value collection of custom e-mail headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets postback
     *
     * @return string|null
     */
    public function getPostback()
    {
        return $this->container['postback'];
    }

    /**
     * Sets postback
     *
     * @param string|null $postback Postback header.
     *
     * @return self
     */
    public function setPostback($postback)
    {
        $this->container['postback'] = $postback;

        return $this;
    }

    /**
     * Gets envelope_from
     *
     * @return string|null
     */
    public function getEnvelopeFrom()
    {
        return $this->container['envelope_from'];
    }

    /**
     * Sets envelope_from
     *
     * @param string|null $envelope_from E-mail with an optional name to be used as the envelope from address (e.g.: John Doe <email@domain.com>)
     *
     * @return self
     */
    public function setEnvelopeFrom($envelope_from)
    {
        $this->container['envelope_from'] = $envelope_from;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Your e-mail with an optional name (e.g.: John Doe <email@domain.com>)
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets reply_to
     *
     * @return string|null
     */
    public function getReplyTo()
    {
        return $this->container['reply_to'];
    }

    /**
     * Sets reply_to
     *
     * @param string|null $reply_to To what address should the recipients reply to (e.g. John Doe <email@domain.com>)
     *
     * @return self
     */
    public function setReplyTo($reply_to)
    {
        $this->container['reply_to'] = $reply_to;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject Default subject of email.
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets template_name
     *
     * @return string|null
     */
    public function getTemplateName()
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name
     *
     * @param string|null $template_name Name of template.
     *
     * @return self
     */
    public function setTemplateName($template_name)
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets attach_files
     *
     * @return string[]|null
     */
    public function getAttachFiles()
    {
        return $this->container['attach_files'];
    }

    /**
     * Sets attach_files
     *
     * @param string[]|null $attach_files Names of previously uploaded files that should be sent as downloadable attachments
     *
     * @return self
     */
    public function setAttachFiles($attach_files)
    {
        $this->container['attach_files'] = $attach_files;

        return $this;
    }

    /**
     * Gets utm
     *
     * @return \ElasticEmail\Model\Utm|null
     */
    public function getUtm()
    {
        return $this->container['utm'];
    }

    /**
     * Sets utm
     *
     * @param \ElasticEmail\Model\Utm|null $utm utm
     *
     * @return self
     */
    public function setUtm($utm)
    {
        $this->container['utm'] = $utm;

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


