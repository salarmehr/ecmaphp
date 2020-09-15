<?php

namespace Salarmehr\Ecma;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{

    public function testLtrim()
    {

    }

    public function testCreate()
    {

    }

    public function testSlice()
    {

    }

    public function testIndexOf()
    {

    }

    public function testCharCodeAt()
    {

    }

    public function test__construct()
    {

    }

    public function testSearch()
    {

    }

    public function testRtrim()
    {

    }

    public function testCharAt()
    {

    }

    public function testToLower()
    {

    }

    public function testSplit()
    {

    }

    public function testReplaceRegexp()
    {

    }

    public function testTrim()
    {

    }

    public function testLastIndexOf()
    {

    }

    public function testMatch()
    {
        $string = new Str('reza@example.com');
        $matches = $string->match('#(.+)@(.+)#');
        $this->assertEquals(['reza@example.com', 'reza', 'example.com'], $matches);
    }

    public function testOffsetUnset()
    {

    }

    public function testToLowerCase()
    {

    }

    public function testSubstr()
    {

    }

    public function testToString()
    {

    }

    public function testOffsetSet()
    {

    }

    public function testStrlen()
    {

    }

    public function testReplace()
    {

    }

    public function testLast()
    {

    }

    public function testSubstring()
    {

    }

    public function testToUpperCase()
    {

    }

    public function testOffsetGet()
    {

    }

    public function testToUpper()
    {

    }

    public function test__toString()
    {

    }

    public function testFirst()
    {

    }

    public function testOffsetExists()
    {

    }
}
