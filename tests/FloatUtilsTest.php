<?php

use Kucil\Utilities\FloatUtils;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class FloatUtilsTest extends TestCase
{
    #[Test]
    public function testIsFlt(): void
    {
        $this->assertFalse(FloatUtils::isFlt(), 'test-1');
        $this->assertFalse(FloatUtils::isFlt(null), 'test-2');
        $this->assertFalse(FloatUtils::isFlt(true), 'test-3');
        $this->assertTrue(FloatUtils::isFlt(99.0), 'test-4');
        $this->assertFalse(FloatUtils::isFlt(1), 'test-5');
        $this->assertFalse(FloatUtils::isFlt('hello world'), 'test-6');
        $this->assertFalse(FloatUtils::isFlt([]), 'test-7');
        $this->assertFalse(FloatUtils::isFlt(new stdClass), 'test-8');

        return;
    }



    #[Test]
    public function testIsFloat(): void
    {
        $this->assertFalse(FloatUtils::isFloat(), 'test-1');
        $this->assertFalse(FloatUtils::isFloat(null), 'test-2');
        $this->assertFalse(FloatUtils::isFloat(true), 'test-3');
        $this->assertTrue(FloatUtils::isFloat(99.0), 'test-4');
        $this->assertFalse(FloatUtils::isFloat(1), 'test-5');
        $this->assertFalse(FloatUtils::isFloat('hello world'), 'test-6');
        $this->assertFalse(FloatUtils::isFloat([]), 'test-7');
        $this->assertFalse(FloatUtils::isFloat(new stdClass), 'test-8');

        return;
    }



    #[Test]
    public function testIsPositiveNumber(): void
    {
        $this->assertNull(FloatUtils::isPositiveNumber(), 'test-1');
        $this->assertNull(FloatUtils::isPositiveNumber(null), 'test-2');
        $this->assertTrue(FloatUtils::isPositiveNumber(100), 'test-3');
        $this->assertFalse(FloatUtils::isPositiveNumber(0), 'test-4');
        $this->assertFalse(FloatUtils::isPositiveNumber(-100), 'test-5');

        return;
    }



    #[Test]
    public function testPositiveNumber(): void
    {
        $this->assertNull(FloatUtils::positiveNumber(), 'test-1');
        $this->assertNull(FloatUtils::positiveNumber(null), 'test-2');
        $this->assertSame(100.0, FloatUtils::positiveNumber(100.0), 'test-3');
        $this->assertSame(150.0, FloatUtils::positiveNumber(-150.0), 'test-4');

        return;
    }



    #[Test]
    public function testLengthInt(): void
    {
        $this->assertNull(FloatUtils::lengthInt(), 'test-1');
        $this->assertNull(FloatUtils::lengthInt(null), 'test-2');
        $this->assertSame(1, FloatUtils::lengthInt(0.0), 'test-3');
        $this->assertSame(3, FloatUtils::lengthInt(100), 'test-4');
        $this->assertSame(2, FloatUtils::lengthInt(99), 'test-5');
        $this->assertSame(2, FloatUtils::lengthInt(-99), 'test-6');
        $this->assertSame(2, FloatUtils::lengthInt(-99.99), 'test-7');

        return;
    }



    #[Test]
    public function testLengthDec(): void
    {
        $this->assertNull(FloatUtils::lengthDec(), 'test-1');
        $this->assertNull(FloatUtils::lengthDec(null), 'test-2');
        $this->assertSame(0, FloatUtils::lengthDec(0.0), 'test-3');
        $this->assertSame(0, FloatUtils::lengthDec(100), 'test-4');
        $this->assertSame(3, FloatUtils::lengthDec(99.545), 'test-5');
        $this->assertSame(0, FloatUtils::lengthDec(-99), 'test-6');
        $this->assertSame(2, FloatUtils::lengthDec(-99.99), 'test-7');

        return;
    }



    #[Test]
    public function testLengthAll(): void
    {
        $this->assertNull(FloatUtils::lengthAll(), 'test-1');
        $this->assertNull(FloatUtils::lengthAll(null), 'test-2');
        $this->assertSame(1, FloatUtils::lengthAll(0.0), 'test-3');
        $this->assertSame(3, FloatUtils::lengthAll(100), 'test-4');
        $this->assertSame(5, FloatUtils::lengthAll(99.545), 'test-5');
        $this->assertSame(2, FloatUtils::lengthAll(-99), 'test-6');
        $this->assertSame(4, FloatUtils::lengthAll(-99.99), 'test-7');

        return;
    }



    #[Test]
    public function testRoundNearest(): void
    {
        $this->assertNull(FloatUtils::roundNearest(), 'test-1');
        $this->assertNull(FloatUtils::roundNearest(null, null), 'test-2');
        $this->assertNull(FloatUtils::roundNearest(100, null), 'test-3');
        $this->assertNull(FloatUtils::roundNearest(null, 100), 'test-4');
        $this->assertSame(round(99, 0), FloatUtils::roundNearest(99, 0), 'test-5');
        $this->assertSame(round(0, 1), FloatUtils::roundNearest(0, 1), 'test-6');
        $this->assertSame(round(99, 1), FloatUtils::roundNearest(99, 1), 'test-7');
        $this->assertSame(round(91.25, 1), FloatUtils::roundNearest(91.25, 1), 'test-8');
        $this->assertSame(round(91.75, -1), FloatUtils::roundNearest(91.75, -1), 'test-9');
        $this->assertSame(round(97.24, -2), FloatUtils::roundNearest(97.24, -2), 'test-10');

        return;
    }



    #[Test]
    public function testRoundUp(): void
    {
        $this->assertNull(FloatUtils::roundUp(), 'test-1');
        $this->assertNull(FloatUtils::roundUp(null, null), 'test-2');
        $this->assertNull(FloatUtils::roundUp(100, null), 'test-3');
        $this->assertNull(FloatUtils::roundUp(null, 100), 'test-4');
        $this->assertSame((float) 0, FloatUtils::roundUp(0, 0), 'test-5');
        $this->assertSame((float) 0, FloatUtils::roundUp(0, 1), 'test-6');
        $this->assertSame((float) 99, FloatUtils::roundUp(99, 1), 'test-7');
        $this->assertSame((float) 91.3, FloatUtils::roundUp(91.25, 1), 'test-8');
        $this->assertSame((float) 100, FloatUtils::roundUp(91.75, -1), 'test-9');
        $this->assertSame((float) 100, FloatUtils::roundUp(97.24, -2), 'test-10');

        return;
    }



    #[Test]
    public function testRoundDown(): void
    {
        $this->assertNull(FloatUtils::roundDown(), 'test-1');
        $this->assertNull(FloatUtils::roundDown(null, null), 'test-2');
        $this->assertNull(FloatUtils::roundDown(100, null), 'test-3');
        $this->assertNull(FloatUtils::roundDown(null, 100), 'test-4');
        $this->assertSame((float) 99, FloatUtils::roundDown(99, 0), 'test-5');
        $this->assertSame((float) 0, FloatUtils::roundDown(0, 1), 'test-6');
        $this->assertSame((float) 99, FloatUtils::roundDown(99, 1), 'test-7');
        $this->assertSame((float) 91.2, FloatUtils::roundDown(91.25, 1), 'test-8');
        $this->assertSame((float) 90, FloatUtils::roundDown(91.75, -1), 'test-9');
        $this->assertSame((float) 0, FloatUtils::roundDown(97.24, -2), 'test-10');

        return;
    }



    #[Test]
    public function testCut(): void
    {
        $this->assertNull(FloatUtils::cut(), 'test-1');
        $this->assertNull(FloatUtils::cut(null, null), 'test-2');
        $this->assertSame((float) 1, FloatUtils::cut(123, 1), 'test-3');
        $this->assertSame((float) 12, FloatUtils::cut(123, 2), 'test-4');
        $this->assertSame((float) 12.3, FloatUtils::cut(12.345, 3), 'test-5');

        return;
    }


    
    #[Test]
    public function testToInt(): void
    {
        $this->assertNull(FloatUtils::toInt(), 'test-1');
        $this->assertNull(FloatUtils::toInt(null), 'test-2');
        $this->assertSame(99, FloatUtils::toInt(99.0), 'test-3');
        $this->assertSame(99, FloatUtils::toInt(99.5), 'test-4');
        $this->assertSame(-99, FloatUtils::toInt(-99.5), 'test-5');

        return;
    }


    
    #[Test]
    public function testToInteger(): void
    {
        $this->assertNull(FloatUtils::toInteger(), 'test-1');
        $this->assertNull(FloatUtils::toInteger(null), 'test-2');
        $this->assertSame(99, FloatUtils::toInteger(99.0), 'test-3');
        $this->assertSame(99, FloatUtils::toInteger(99.5), 'test-4');
        $this->assertSame(-99, FloatUtils::toInteger(-99.5), 'test-5');

        return;
    }




    #[Test]
    public function testToStr(): void
    {
        $this->assertNull(FloatUtils::toStr(), 'test-1');
        $this->assertNull(FloatUtils::toStr(null), 'test-2');
        $this->assertSame('99.0',FloatUtils::toStr(99.0), 'test-3');
        $this->assertSame('99.5',FloatUtils::toStr(99.5), 'test-4');
        $this->assertSame('-99.5',FloatUtils::toStr(-99.5), 'test-5');

        return;
    }




    #[Test]
    public function testToString(): void
    {
        $this->assertNull(FloatUtils::toString(), 'test-1');
        $this->assertNull(FloatUtils::toString(null), 'test-2');
        $this->assertSame('99.0',FloatUtils::toString(99.0), 'test-3');
        $this->assertSame('99.5',FloatUtils::toString(99.5), 'test-4');
        $this->assertSame('-99.5',FloatUtils::toString(-99.5), 'test-5');

        return;
    }
}