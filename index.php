<?php

const HTTP_OK = 200;
const HTTP_BAD_REQUEST = 400;
const HTTP_NOT_ALLOWED = 405;

if(isset($_SERVER['HTTP_X-REQUESTED-WITH']) && strtoupper($_SERVER['HTTP_X-REQUESTED-WITH']) == 'XMLHTTPREQUEST')
{

    $response = [
        "response_code" => HTTP_OK,
        "message" => "La requette a bien été envoyé"
    ];
}else
{
    $response = [
        "response_code" => HTTP_BAD_REQUEST,
        "message" => "La requette n'a pas été envoyé"
    ];
}

?>