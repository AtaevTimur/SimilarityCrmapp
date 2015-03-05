<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 05.01.2015
 * Time: 0:38
 */

namespace app\models\customer;


class Phone
{
    /** @var string */
    public $number;

    public function __construct($number)
    {
        $this->number = $number;
    }
} 