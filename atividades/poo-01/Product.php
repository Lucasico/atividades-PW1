<?php

namespace ProductClass;

class Product { 
    private $code;
    private $price;
    
    function __construct( $attribute, $value ){
        $this->__set($attribute, $value);
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
