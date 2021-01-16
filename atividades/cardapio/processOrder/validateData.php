<?php

function validateData($data)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $data['item']) {

        return true;
    } else {
        header('Location: ../index.php');
        die();
    }
}
