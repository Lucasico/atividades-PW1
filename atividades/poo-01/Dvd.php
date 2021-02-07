<?php
namespace Dvd;
require './Product.php';

use ProductClass\Product as Product;
class Dvd extends Product
{
    private $title;
    private $year;
    private $validate;

    function __construct($title, $valueTitle, $year, $valueYear, $code, $valueCode, $price, $valuePrice)
    {
        $this->__set($title, $valueTitle);
        $this->__set($year, $valueYear);
        $this->__set($code, $valueCode);
        $this->__set($price, $valuePrice);
    }
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

   
}
