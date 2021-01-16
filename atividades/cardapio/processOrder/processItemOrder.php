<?php

/**
 * como nesta atividade não era preciso utilizar PDO e BD, fiz esse esquema
 * simulando uma especie de query no BD, valido o produto e retornando um array
 * com suas respectivas propriedades.
 */
const LAS01 = ['Lasanha-1', 5];
const LAS02 = ['Lasanha-2', 6];
const LAS03 = ['Lasanha-3', 7];
const LAS04 = ['Lasanha-4', 8];

function processItem($item)
{
    $itemData = array();

    if ($item == LAS01[0]) {
        $itemData = LAS01;
    }

    if ($item == LAS02[0]) {
        $itemData = LAS02;
    }

    if ($item == LAS03[0]) {
        $itemData = LAS03;
    }

    if ($item == LAS04[0]) {
        $itemData = LAS04;
    }

    return $itemData;
}
