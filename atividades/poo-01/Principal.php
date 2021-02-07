<?php

require './ExceptionNullValidateClass.php';
use ExceptionNullValidateClass\ExceptionNullValidateClass as validate;
//type, codigo,preco, titulo, ano, marca,volume, dataValidade
//falta implementar a logica para, diferenciar um DVD de um LEITE
//e também a parte final 
//-- Quais leites estão vencidos?
//➡️➡️ Quais os DVDs lançados em um determinado ano?
//➡️➡️ Qual o valor total dos produtos contidos no estoque?
$validate = new validate('teste','');

echo '<pre>';
print_r($validate);
echo '</pre>';

?>