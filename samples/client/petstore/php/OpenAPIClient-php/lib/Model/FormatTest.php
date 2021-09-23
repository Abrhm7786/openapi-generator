<?php
/**
 * FormatTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * FormatTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FormatTest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'format_test';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integer' => 'int',
        'int32' => 'int',
        'int64' => 'int',
        'number' => 'float',
        'float' => 'float',
        'double' => 'double',
        'decimal' => 'Decimal',
        'string' => 'string',
        'byte' => 'string',
        'binary' => '\SplFileObject',
        'date' => '\DateTime',
        'date_time' => '\DateTime',
        'uuid' => 'string',
        'password' => 'string',
        'pattern_with_digits' => 'string',
        'pattern_with_digits_and_delimiter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'integer' => null,
        'int32' => 'int32',
        'int64' => 'int64',
        'number' => null,
        'float' => 'float',
        'double' => 'double',
        'decimal' => 'number',
        'string' => null,
        'byte' => 'byte',
        'binary' => 'binary',
        'date' => 'date',
        'date_time' => 'date-time',
        'uuid' => 'uuid',
        'password' => 'password',
        'pattern_with_digits' => null,
        'pattern_with_digits_and_delimiter' => null
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
        'integer' => 'integer',
        'int32' => 'int32',
        'int64' => 'int64',
        'number' => 'number',
        'float' => 'float',
        'double' => 'double',
        'decimal' => 'decimal',
        'string' => 'string',
        'byte' => 'byte',
        'binary' => 'binary',
        'date' => 'date',
        'date_time' => 'dateTime',
        'uuid' => 'uuid',
        'password' => 'password',
        'pattern_with_digits' => 'pattern_with_digits',
        'pattern_with_digits_and_delimiter' => 'pattern_with_digits_and_delimiter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integer' => 'setInteger',
        'int32' => 'setInt32',
        'int64' => 'setInt64',
        'number' => 'setNumber',
        'float' => 'setFloat',
        'double' => 'setDouble',
        'decimal' => 'setDecimal',
        'string' => 'setString',
        'byte' => 'setByte',
        'binary' => 'setBinary',
        'date' => 'setDate',
        'date_time' => 'setDateTime',
        'uuid' => 'setUuid',
        'password' => 'setPassword',
        'pattern_with_digits' => 'setPatternWithDigits',
        'pattern_with_digits_and_delimiter' => 'setPatternWithDigitsAndDelimiter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integer' => 'getInteger',
        'int32' => 'getInt32',
        'int64' => 'getInt64',
        'number' => 'getNumber',
        'float' => 'getFloat',
        'double' => 'getDouble',
        'decimal' => 'getDecimal',
        'string' => 'getString',
        'byte' => 'getByte',
        'binary' => 'getBinary',
        'date' => 'getDate',
        'date_time' => 'getDateTime',
        'uuid' => 'getUuid',
        'password' => 'getPassword',
        'pattern_with_digits' => 'getPatternWithDigits',
        'pattern_with_digits_and_delimiter' => 'getPatternWithDigitsAndDelimiter'
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
        $this->container['integer'] = $data['integer'] ?? null;
        $this->container['int32'] = $data['int32'] ?? null;
        $this->container['int64'] = $data['int64'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['float'] = $data['float'] ?? null;
        $this->container['double'] = $data['double'] ?? null;
        $this->container['decimal'] = $data['decimal'] ?? null;
        $this->container['string'] = $data['string'] ?? null;
        $this->container['byte'] = $data['byte'] ?? null;
        $this->container['binary'] = $data['binary'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['date_time'] = $data['date_time'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['pattern_with_digits'] = $data['pattern_with_digits'] ?? null;
        $this->container['pattern_with_digits_and_delimiter'] = $data['pattern_with_digits_and_delimiter'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['integer']) && ($this->container['integer'] > 100)) {
            $invalidProperties[] = "invalid value for 'integer', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['integer']) && ($this->container['integer'] < 10)) {
            $invalidProperties[] = "invalid value for 'integer', must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['int32']) && ($this->container['int32'] > 200)) {
            $invalidProperties[] = "invalid value for 'int32', must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['int32']) && ($this->container['int32'] < 20)) {
            $invalidProperties[] = "invalid value for 'int32', must be bigger than or equal to 20.";
        }

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if (($this->container['number'] > 543.2)) {
            $invalidProperties[] = "invalid value for 'number', must be smaller than or equal to 543.2.";
        }

        if (($this->container['number'] < 32.1)) {
            $invalidProperties[] = "invalid value for 'number', must be bigger than or equal to 32.1.";
        }

        if (!is_null($this->container['float']) && ($this->container['float'] > 987.6)) {
            $invalidProperties[] = "invalid value for 'float', must be smaller than or equal to 987.6.";
        }

        if (!is_null($this->container['float']) && ($this->container['float'] < 54.3)) {
            $invalidProperties[] = "invalid value for 'float', must be bigger than or equal to 54.3.";
        }

        if (!is_null($this->container['double']) && ($this->container['double'] > 123.4)) {
            $invalidProperties[] = "invalid value for 'double', must be smaller than or equal to 123.4.";
        }

        if (!is_null($this->container['double']) && ($this->container['double'] < 67.8)) {
            $invalidProperties[] = "invalid value for 'double', must be bigger than or equal to 67.8.";
        }

        if (!is_null($this->container['string']) && !preg_match("/[a-z]/i", $this->container['string'])) {
            $invalidProperties[] = "invalid value for 'string', must be conform to the pattern /[a-z]/i.";
        }

        if ($this->container['byte'] === null) {
            $invalidProperties[] = "'byte' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) > 64)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['password']) < 10)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['pattern_with_digits']) && !preg_match("/^\\d{10}$/", $this->container['pattern_with_digits'])) {
            $invalidProperties[] = "invalid value for 'pattern_with_digits', must be conform to the pattern /^\\d{10}$/.";
        }

        if (!is_null($this->container['pattern_with_digits_and_delimiter']) && !preg_match("/^image_\\d{1,3}$/i", $this->container['pattern_with_digits_and_delimiter'])) {
            $invalidProperties[] = "invalid value for 'pattern_with_digits_and_delimiter', must be conform to the pattern /^image_\\d{1,3}$/i.";
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
     * Gets integer
     *
     * @return int|null
     */
    public function getInteger()
    {
        return $this->container['integer'];
    }

    /**
     * Sets integer
     *
     * @param int|null $integer integer
     *
     * @return self
     */
    public function setInteger($integer)
    {

        if (!is_null($integer) && ($integer > 100)) {
            throw new \InvalidArgumentException('invalid value for $integer when calling FormatTest., must be smaller than or equal to 100.');
        }
        if (!is_null($integer) && ($integer < 10)) {
            throw new \InvalidArgumentException('invalid value for $integer when calling FormatTest., must be bigger than or equal to 10.');
        }

        $this->container['integer'] = $integer;

        return $this;
    }

    /**
     * Gets int32
     *
     * @return int|null
     */
    public function getInt32()
    {
        return $this->container['int32'];
    }

    /**
     * Sets int32
     *
     * @param int|null $int32 int32
     *
     * @return self
     */
    public function setInt32($int32)
    {

        if (!is_null($int32) && ($int32 > 200)) {
            throw new \InvalidArgumentException('invalid value for $int32 when calling FormatTest., must be smaller than or equal to 200.');
        }
        if (!is_null($int32) && ($int32 < 20)) {
            throw new \InvalidArgumentException('invalid value for $int32 when calling FormatTest., must be bigger than or equal to 20.');
        }

        $this->container['int32'] = $int32;

        return $this;
    }

    /**
     * Gets int64
     *
     * @return int|null
     */
    public function getInt64()
    {
        return $this->container['int64'];
    }

    /**
     * Sets int64
     *
     * @param int|null $int64 int64
     *
     * @return self
     */
    public function setInt64($int64)
    {
        $this->container['int64'] = $int64;

        return $this;
    }

    /**
     * Gets number
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param float $number number
     *
     * @return self
     */
    public function setNumber($number)
    {

        if (($number > 543.2)) {
            throw new \InvalidArgumentException('invalid value for $number when calling FormatTest., must be smaller than or equal to 543.2.');
        }
        if (($number < 32.1)) {
            throw new \InvalidArgumentException('invalid value for $number when calling FormatTest., must be bigger than or equal to 32.1.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets float
     *
     * @return float|null
     */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
     * Sets float
     *
     * @param float|null $float float
     *
     * @return self
     */
    public function setFloat($float)
    {

        if (!is_null($float) && ($float > 987.6)) {
            throw new \InvalidArgumentException('invalid value for $float when calling FormatTest., must be smaller than or equal to 987.6.');
        }
        if (!is_null($float) && ($float < 54.3)) {
            throw new \InvalidArgumentException('invalid value for $float when calling FormatTest., must be bigger than or equal to 54.3.');
        }

        $this->container['float'] = $float;

        return $this;
    }

    /**
     * Gets double
     *
     * @return double|null
     */
    public function getDouble()
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param double|null $double double
     *
     * @return self
     */
    public function setDouble($double)
    {

        if (!is_null($double) && ($double > 123.4)) {
            throw new \InvalidArgumentException('invalid value for $double when calling FormatTest., must be smaller than or equal to 123.4.');
        }
        if (!is_null($double) && ($double < 67.8)) {
            throw new \InvalidArgumentException('invalid value for $double when calling FormatTest., must be bigger than or equal to 67.8.');
        }

        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets decimal
     *
     * @return Decimal|null
     */
    public function getDecimal()
    {
        return $this->container['decimal'];
    }

    /**
     * Sets decimal
     *
     * @param Decimal|null $decimal decimal
     *
     * @return self
     */
    public function setDecimal($decimal)
    {
        $this->container['decimal'] = $decimal;

        return $this;
    }

    /**
     * Gets string
     *
     * @return string|null
     */
    public function getString()
    {
        return $this->container['string'];
    }

    /**
     * Sets string
     *
     * @param string|null $string string
     *
     * @return self
     */
    public function setString($string)
    {

        if (!is_null($string) && (!preg_match("/[a-z]/i", $string))) {
            throw new \InvalidArgumentException("invalid value for $string when calling FormatTest., must conform to the pattern /[a-z]/i.");
        }

        $this->container['string'] = $string;

        return $this;
    }

    /**
     * Gets byte
     *
     * @return string
     */
    public function getByte()
    {
        return $this->container['byte'];
    }

    /**
     * Sets byte
     *
     * @param string $byte byte
     *
     * @return self
     */
    public function setByte($byte)
    {
        $this->container['byte'] = $byte;

        return $this;
    }

    /**
     * Gets binary
     *
     * @return \SplFileObject|null
     */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
     * Sets binary
     *
     * @param \SplFileObject|null $binary binary
     *
     * @return self
     */
    public function setBinary($binary)
    {
        $this->container['binary'] = $binary;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets date_time
     *
     * @return \DateTime|null
     */
    public function getDateTime()
    {
        return $this->container['date_time'];
    }

    /**
     * Sets date_time
     *
     * @param \DateTime|null $date_time date_time
     *
     * @return self
     */
    public function setDateTime($date_time)
    {
        $this->container['date_time'] = $date_time;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {
        if ((mb_strlen($password) > 64)) {
            throw new \InvalidArgumentException('invalid length for $password when calling FormatTest., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($password) < 10)) {
            throw new \InvalidArgumentException('invalid length for $password when calling FormatTest., must be bigger than or equal to 10.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets pattern_with_digits
     *
     * @return string|null
     */
    public function getPatternWithDigits()
    {
        return $this->container['pattern_with_digits'];
    }

    /**
     * Sets pattern_with_digits
     *
     * @param string|null $pattern_with_digits A string that is a 10 digit number. Can have leading zeros.
     *
     * @return self
     */
    public function setPatternWithDigits($pattern_with_digits)
    {

        if (!is_null($pattern_with_digits) && (!preg_match("/^\\d{10}$/", $pattern_with_digits))) {
            throw new \InvalidArgumentException("invalid value for $pattern_with_digits when calling FormatTest., must conform to the pattern /^\\d{10}$/.");
        }

        $this->container['pattern_with_digits'] = $pattern_with_digits;

        return $this;
    }

    /**
     * Gets pattern_with_digits_and_delimiter
     *
     * @return string|null
     */
    public function getPatternWithDigitsAndDelimiter()
    {
        return $this->container['pattern_with_digits_and_delimiter'];
    }

    /**
     * Sets pattern_with_digits_and_delimiter
     *
     * @param string|null $pattern_with_digits_and_delimiter A string starting with 'image_' (case insensitive) and one to three digits following i.e. Image_01.
     *
     * @return self
     */
    public function setPatternWithDigitsAndDelimiter($pattern_with_digits_and_delimiter)
    {

        if (!is_null($pattern_with_digits_and_delimiter) && (!preg_match("/^image_\\d{1,3}$/i", $pattern_with_digits_and_delimiter))) {
            throw new \InvalidArgumentException("invalid value for $pattern_with_digits_and_delimiter when calling FormatTest., must conform to the pattern /^image_\\d{1,3}$/i.");
        }

        $this->container['pattern_with_digits_and_delimiter'] = $pattern_with_digits_and_delimiter;

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


