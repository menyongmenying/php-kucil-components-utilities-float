<?php

namespace Kucil\Utilities\FloatUtils\Core;

use Kucil\Utilities\FloatUtils\Contracts\FloatInterface;
use Kucil\Utilities\FloatUtils\Enums\LengthOptions;
use Kucil\Utilities\FloatUtils\Enums\RoundOptions;

use function is_float;
use function in_array;
use function explode;
use function strlen;
use function sprintf;
use function str_contains;
use function ceil;
use function floor;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
abstract class FloatCore implements FloatInterface
{
    /**
     * @see FloatUtilsTest::testIsFlt()
     * 
     * 
     * 
     */
    public static function isFlt(mixed $float = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        $result = is_float($float);

        return $result;
    }



    /**
     * @see FloatUtilsTest::testIsFloat()
     * 
     * 
     * 
     */
    public static function isFloat(mixed $float = null): ?bool
    {
        # DATA
        $result = null;

        
        # CODE
        $result = self::isFlt($float);

        return $result;
    }



    /**
     * @see FloatUtilsTest::testIsPositiveNumber()
     * 
     * 
     * 
     */
    public static function isPositiveNumber(?float $float = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        if ($float === null) {
            return $result;
        }
        
        $result = 0 < $float;

        return $result;
    }



    /**
     * @see FloatUtilsTest::testPositiveNumber()
     * 
     * 
     * 
     */
    public static function positiveNumber(?float $float = null): ?float
    {
        # DATA
        $result = null;


        # CODE
        if ($float === null) {
            return $result;
        }

        $result = abs($float);

        return $result;
    }

    

    /**
     * @see FloatUtilsTest::testLengthInt()
     * 
     * 
     * 
     */
    public static function lengthInt(?float $float = null): ?int
    {
        # DATA
        $result = null;
        $stringFloat = (string) self::positiveNumber($float);


        # CODE
        if ($float === null) {
            return $result;
        }

        if (str_contains($stringFloat, '.')) {
            $stringFloat = explode('.', $stringFloat)[0];
        }

        $result = strlen($stringFloat);

        return $result;
    }

    

    /**
     * @see FloatUtilsTest::testLengthDec()
     * 
     * 
     * 
     */
    public static function lengthDec(?float $float = null): ?int
    {
        # DATA
        $result = null;
        $stringFloat = (string) self::positiveNumber($float);


        # CODE
        if ($float === null) {
            return $result;
        }

        $result = 0;
        
        if (str_contains($stringFloat, '.')) {
            $result = explode('.', $stringFloat)[1];
            $result = strlen($result);
            
            return $result;
        }

        return $result;
    }



    /**
     * @see FloatUtilsTest::testLengthAll()
     * 
     * 
     * 
     */
    public static function lengthAll(?float $float = null): ?int
    {
        # Insiasi
        $result = null;
        
        
        # Logika
        if ($float !== null) {
            $float = self::positiveNumber($float);
            $float = (string) $float;

            $result = strlen($float);
            if (str_contains($float, '.')) {
                $result--;
            }
        }


        # Penerusan Hasil
        return $result;
    }



    /**
     * @see FloatUtilsTest::testLength()
     * 
     * 
     * 
     */
    public static function length(?float $float = null, ?LengthOptions $option = LengthOptions::ALL): ?int
    {
        # DATA
        $result = null;


        # CODE
        if ($float === null || $option === null) {
            return $result;
        }

        $result = match ($option) {
            LengthOptions::ALL => self::lengthAll($float),
            LengthOptions::INT => self::lengthInt($float),
            LengthOptions::DEC => self::lengthDec($float)
        };

        return $result;
    }

    

    /**
     * @see FloatUtilsTest::testRoundNearest()
     * 
     * 
     * 
     */
    public static function roundNearest(?float $float = null, ?int $precision = 0): ?float
    {
        # DATA
        $result = null;

        if ($float === null || $precision === null) {
            return $result;
        }

        $result = round($float, $precision);
        
        return $result;
    }

    

    /**
     * @see FloatUtilsTest::testRoundUp()
     * 
     * 
     * 
     */
    public static function roundUp(?float $float = null, ?int $precision = 0): ?float
    {
        # DATA
        $result = null;
        $factor = 10 ** $precision;


        if ($float === null || $precision === null) {
            return $result;
        }

        $result = ceil($float * $factor) / $factor;

        return $result;
    }

    

    /**
     * @see FloatUtilsTest::testRoundDown()
     * 
     * 
     * 
     */
    public static function roundDown(?float $float = null, ?int $precision = 0): ?float
    {
        # DATA
        $result = null;
        $factor = 10 ** $precision;


        if ($float === null || $precision === null) {
            return $result;
        }

        $result = floor($float * $factor) / $factor;

        return $result;
    }

    

    /**
     * @see FloatUtilsTest::testRoundNearest()
     * @see FloatUtilsTest::testRoundUp()
     * @see FloatUtilsTest::testRoundDown()
     * 
     * 
     * 
     */
    public static function round(?float $float = null, ?int $precision = 0, ?RoundOptions $option = RoundOptions::NEAREST): ?float
    {
        # DATA
        $result = null;


        # CODE
        if ($float === null || $precision === null) {
            return $result;
        }
        
        $result = match ($float) {
            RoundOptions::NEAREST => self::roundNearest($float, $precision),
            RoundOptions::UP => self::roundUp($float, $precision),
            RoundOptions::DOWN => self::roundDown($float, $precision)
        };
        
        return $result;
    }



    public static function cut(?float $float = null, ?int $length = 1): ?float
    {
        # DATA
        $result = null;
        $stringFloat = (string) $float;
        $lengthFloat = self::length($float);


        # CODE
        if ($float === null || $length === null || $length <= 0) {
            return $result;
        }

        $result = $float;

        if ($length < $lengthFloat) {
            $result = '';

            $stringFloat = str_split($stringFloat);

            if ($stringFloat[0] === '-') {
                $length++;
            }

            if (in_array('.', $stringFloat)) {
                $length++;
            }

            for ($i = 0; $i < $length; $i++) {
                $result .= (string) $stringFloat[$i];
            }

            $result = (float) $result;
        }

        return $result;
    }


    
    /**
     * @see FloatUtilsTest::testToInt()
     * 
     * 
     * 
     */
    public static function toInt(?float $float = null): ?int
    {
        # DATA
        $result = null;

        
        # CODE
        if ($float === null) {
            return $result;
        }

        $result = (int) $float;

        return $result;
    }



    /**
     * @see FloatUtilsTest::testToInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?float $float = null): ?int
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toInt($float);

        return $result;
    }



    /**
     * @see FloatUtilsTest::testToStr()
     * 
     * 
     * 
     */
    public static function toStr(?float $float = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($float === null) {
            return $result;
        }
        
        $float = sprintf('%.1f', $float);
        $result = (string) $float;

        return $result;
    }



    /**
     * @see FloatUtilsTest::testToString()
     * 
     * 
     * 
     */
    public static function toString(?float $float = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toStr($float);

        return $result;
    }
}
