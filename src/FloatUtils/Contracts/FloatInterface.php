<?php

namespace Kucil\Utilities\FloatUtils\Contracts;

use Kucil\Utilities\FloatUtils\Enums\LengthOptions;
use Kucil\Utilities\FloatUtils\Enums\RoundOptions;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
interface FloatInterface
{
    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data float atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $float Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool      Hasil pemeriksaan apakah nilai $float bertipe data float atau tidak.
     * 
     * @see    FloatUtilsTest::testIsFlt()
     * 
     * 
     * 
     */
    public static function isFlt(mixed $float): ?bool;


    
    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data float atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $float Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool      Hasil pemeriksaan apakah nilai $float bertipe data float atau tidak.
     * 
     * @see    FloatUtilsTest::testIsFloat()
     * 
     * 
     * 
     */
    public static function isFloat(mixed $float): ?bool;
    
    
    
    /**
     * Meneruskan hasil pemeriksaan apakah nilai float yang diberikan merupakan bilangan positif atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?float $float Nilai float yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool         Hasil pemeriksaan apakah nilai $float merupakan bilangan positif atau tidak.
     * 
     * @see    FloatUtilsTest::testIsPositiveNumber()
     * 
     * 
     * 
     */
    public static function isPositiveNumber(?float $float): ?bool;



    /**
     * Meneruskan bilangan positif dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float Nilai float yang akan diteruskan bentuk bilangan positifnya.
     *
     * @return ?float        Bilangan positif dari nilai $float.
     * 
     * @see    FloatUtilsTest::testPositiveNumber()
     * 
     * 
     * 
     */
    public static function positiveNumber(?float $float): ?float;

    
    
    /**
     * Meneruskan panjang digit bilangan bulat dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float Nilai float yang akan dihitung panjang digit bilangan bulat-nya.
     *
     * @return ?int          Panjang digit bilangan bulat dari nilai $float.
     * 
     * @see    FloatUtilsTest::testLengthInt()
     * 
     * 
     * 
     */
    public static function lengthInt(?float $float): ?int;

    
    
    /**
     * Meneruskan panjang digit bilangan desimal dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float Nilai float yang akan dihitung panjang digit bilangan desimal-nya.
     *
     * @return ?int          Panjang digit bilangan desimal dari nilai $float.
     * 
     * @see    FloatUtilsTest::testLengthDec()
     * 
     * 
     * 
     */
    public static function lengthDec(?float $float): ?int;


    
    /**
     * Meneruskan panjang digit bilangan dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float Nilai float yang akan dihitung panjang digit bilangan-nya.
     *
     * @return ?int          Panjang digit bilangan dari nilai $float.
     * 
     * @see    FloatUtilsTest::testLengthDec()
     * 
     * 
     * 
     */
    public static function lengthAll(?float $float): ?int;

    
    
    /**
     * Meneruskan panjang digit bilangan  dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float         $float  Nilai float yang akan dihitung panjang digit bilangan-nya.
     * @param  ?LengthOptions $option Tipe bilangan yang dihitung panjang digit-nya.
     *
     * @return ?int                   Panjang digit bilangan dari nilai $float.
     * 
     * @see    FloatUtilsTest::testLengthDec()
     * 
     * 
     * 
     */
    public static function length(?float $float, ?LengthOptions $option): ?int;



    /**
     * Meneruskan pembulatan bilangan ke terdekat dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float     Nilai float yang akan dijadikan objek pembulatan ke terdekat.      
     * @param  ?int   $precision Nilai presisi tingkat level digit pembulatan ke terdekat.
     *
     * @return ?float            Hasil pembulatan bilangan ke terdekat dari nilai $float.
     * 
     * @see    FloatUtilsTest::testRoundNearest()
     * 
     * 
     * 
     */
    public static function roundNearest(?float $float, ?int $precision): ?float;



    /**
     * Meneruskan pembulatan bilangan ke atas dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float     Nilai float yang akan dijadikan objek pembulatan ke atas.      
     * @param  ?int   $precision Nilai presisi tingkat level digit pembulatan ke atas.
     *
     * @return ?float            Hasil pembulatan bilangan ke atas dari nilai $float.
     * 
     * @see    FloatUtilsTest::testRoundUp()
     * 
     * 
     * 
     */
    public static function roundUp(?float $float, ?int $precision): ?float;



    /**
     * Meneruskan pembulatan bilangan ke bawah dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float $float     Nilai float yang akan dijadikan objek pembulatan ke bawah.      
     * @param  ?int   $precision Nilai presisi tingkat level digit pembulatan ke bawah.
     *
     * @return ?float            Hasil pembulatan bilangan ke bawah dari nilai $float.
     * 
     * @see    FloatUtilsTest::testRoundDown()
     * 
     * 
     * 
     */
    public static function roundDown(?float $float, ?int $precision): ?float;



    /**
     * Meneruskan pembulatan bilangan ke bawah dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float        $float     Nilai float yang akan dijadikan objek pembulatan ke bawah.      
     * @param  ?int          $precision Nilai presisi tingkat level digit pembulatan ke bawah.
     * @param  ?RoundOptions $option    Jenis pembulatan.
     *
     * @return ?float                   Hasil pembulatan bilangan ke bawah dari nilai $float.
     * 
     * @see    FloatUtilsTest::testRound()
     * 
     * 
     * 
     */
    public static function round(?float $float, ?int $precision, ?RoundOptions $option): ?float;
    


    /**
     * Meneruskan hasil penyederhanaan bilangan dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @param  ?float $float  Nilai float yang akan disederhanakan.
     * @param  ?int   $length Panjang digit penyederhanaan bilangan dari nilai $int. 
     *
     * @return ?float         Hasil penyederhanaan bilangan dari nilai $int.
     * 
     * @see    FloatUtilsTest::testCut()
     * 
     * 
     * 
     */
    public static function cut(?float $float, ?int $length): ?float;



    /**
     * Meneruskan hasil konversi float ke integer dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float   $float Nilai float yang akan dijadikan objek konversi float ke integer. 
     *
     * @return ?int            Hasil konversi float ke integer dari nilai $int.
     * 
     * @see FloatUtilsTest::testToInt()
     * 
     * 
     * 
     */
    public static function toInt(?float $float): ?int;



    /**
     * Meneruskan hasil konversi float ke integer dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float   $float Nilai float yang akan dijadikan objek konversi float ke integer. 
     *
     * @return ?int            Hasil konversi float ke integer dari nilai $int.
     * 
     * @see FloatUtilsTest::testToInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?float $float): ?int;



    /**
     * Meneruskan hasil konversi float ke string dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float   $float Nilai float yang akan dijadikan objek konversi float ke string. 
     *
     * @return ?string         Hasil konversi float ke string dari nilai $int.
     * 
     * @see FloatUtilsTest::testToStr()
     * 
     * 
     * 
     */
    public static function toStr(?float $float): ?string;



    /**
     * Meneruskan hasil konversi float ke string dari nilai float yang diberikan.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?float   $float Nilai float yang akan dijadikan objek konversi float ke string. 
     *
     * @return ?string         Hasil konversi float ke string dari nilai $int.
     * 
     * @see FloatUtilsTest::testToString()
     * 
     * 
     * 
     */
    public static function toString(?float $float): ?string;
}