<?php

namespace Salarmehr\Ecma;

use ArrayAccess;

class Str implements ArrayAccess
{
    private $value;

    /* magic methods */
    public function __construct(string $string)
    {
        $this->value = (string)$string;
    }

    public function __toString()
    {
        return $this->value;
    }

    /* end magic methods */

    /* ArrayAccess Methods */

    /** offsetExists ( mixed $index )
     *
     * Similar to array_key_exists
     */
    public function offsetExists($index)
    {
        return !empty($this->value[$index]);
    }

    /* offsetGet ( mixed $index )
     *
     * Retrieves an array value
     */
    public function offsetGet($index)
    {
        return (string)$this->substr($index, 1);
    }

    /* offsetSet ( mixed $index, mixed $val )
     *
     * Sets an array value
     */
    public function offsetSet($index, $val)
    {
        $this->value = $this->substring(0, $index) . $val . $this->substring($index + 1, $this->strlen());
    }

    /* offsetUnset ( mixed $index )
     *
     * Removes an array value
     */
    public function offsetUnset($index)
    {
        $this->value = $this->substr(0, $index) . $this->substr($index + 1);
    }

    public static function create(string $string)
    {
        return new self($string);
    }

    /* public methods */
    public function substr(int $start, int $length = null)
    {
        new self(mb_substr($start, $length));
    }

    public function substring($start, $end)
    {
        return $this->substring($start, $end);
    }

    public function charAt($point)
    {
        return $this->substr($point, 1);
    }

    public function charCodeAt($point)
    {
        return ord($this->substr($point, 1));
    }

    public function indexOf($needle, $offset)
    {
        return $this->indexOf($needle, $offset);
    }

    public function lastIndexOf($needle)
    {
        return $this->lastIndexOf($needle);
    }

    public function match(string $regex)
    {
        preg_match_all($regex, $this->value, $matches, PREG_PATTERN_ORDER);
        return new Arr($matches[0]);    }

    /**
     * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/replace
     * @param $search
     * @param $replace
     * @return Str
     */
    public function replace($search, $replace)
    {
        return new self(str_replace($search, $replace, $this->value));
    }

    public function replaceRegexp($searchRegexp, $replace)
    {
        return new self(preg_replace($searchRegexp, $replace, $this->value));
    }

    public function first()
    {
        return $this->substr(0, 1);
    }

    public function last()
    {
        return $this->substr(-1, 1);
    }

    public function search($search, $offset = null)
    {
        return $this->indexOf($search, $offset);
    }

    public function slice($start, $end = null)
    {
        return $this->slice($start, $end);
    }

    public function toLowerCase()
    {
        return new self(mb_strtolower($this->value));
    }

    public function toUpperCase()
    {
        return new self(mb_strtoupper($this->value));
    }

    public function toUpper()
    {
        return $this->toUpperCase();
    }

    public function toLower()
    {
        return $this->toLowerCase();
    }

    /**
     * @see https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/split
     * @param string $separatorRegExp
     * @param null   $limit
     * @return Arr
     */
    public function split(string $separatorRegExp = '', $limit = null)
    {
        return new Arr(mb_split($this->value, $separatorRegExp, $limit));
    }

    public function trim($charlist = null)
    {
        return new Str(trim($charlist));
    }

    public function ltrim($charlist = null)
    {
        return new Str(ltrim($charlist));
    }

    public function rtrim($charlist = null)
    {
        return new Str(rtrim($charlist));
    }

    public function toString()
    {
        return $this->__toString();
    }

    public function strlen()
    {
        return mb_strlen($this->value);
    }
}
