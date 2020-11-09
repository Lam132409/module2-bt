<?php

function checkEmail($email)
{
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($pattern, $email)) {
        return ("Email hop le");
    } else {
        return ("Email khong hop le");
    }
}
$email = 'abc@hotmail.com';
var_dump(checkEmail($email));