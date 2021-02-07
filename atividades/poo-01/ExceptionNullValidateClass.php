<?php

namespace ExceptionNullValidateClass;
use Exception;

//type, codigo,preco, titulo, ano, marca,volume, dataValidade
//falta implementar a logica para, diferenciar um DVD de um LEITE
//e também a parte final 
//-- Quais leites estão vencidos?
//➡️➡️ Quais os DVDs lançados em um determinado ano?
//➡️➡️ Qual o valor total dos produtos contidos no estoque?
class ExceptionNullValidateClass extends Exception{
    private $item;
    private $valueItem;
    public function __construct($item, $valueItem)
    {
      $this->item = $item;
      $this->$valueItem = $valueItem;
       $this->validateItem($this->$valueItem);
    }

    public function validateItem($valueItem){
       try{
        if(is_null($valueItem) || $valueItem === ''){
         throw new Exception('O item: ' . $this->item . ' é Nulo');
        }else{
            return true;
        }
       }catch(Exception $error) {
          echo ($error);
          return false;
       }
    }
  }