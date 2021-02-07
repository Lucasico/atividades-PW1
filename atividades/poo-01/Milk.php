<?php
require './Product.php';
require './Perishable.php';

use ProductClass\Product as Product;

class Milk extends Product implements Perishable
{
    private $brand;
    private $volume;
    private $expirationDate;

    function __construct($brand, $valueBrand, $volume, $valueVolume, $expirationDate, $valueExpirationDate, $price, $valuePrice, $code, $valueCode)
    {
        $this->__set($brand, $valueBrand);
        $this->__set($volume, $valueVolume);
        $this->__set($expirationDate, $valueExpirationDate);
        $this->__set($code, $valueCode);
        $this->__set($price, $valuePrice);
        $this->isBeaten($this->expirationDate);
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

    //20/06/2015
    public function isBeaten($expirationDate){
        if($expirationDate >= date("d/m/Y")){
            return true;
        }else{
            return false;
        }
    }
}
