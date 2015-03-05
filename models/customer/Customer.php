<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 05.01.2015
 * Time: 0:36
 */

namespace app\models\customer;


class Customer
{
    /** @var string */
    public $name;

    /** @var \DateTime */
    public $birth_date;

    /** @var string */
    public $notes = '';

    /** @var Phone[] */
    public $phones = [];

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
} 