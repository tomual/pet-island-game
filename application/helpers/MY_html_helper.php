<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function console_log( $data ){
    if(gettype($data) == 'object') {
        $data = print_r($data, true);
    }
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

function plsdie( $data ){
    echo '<pre>';
    print_r($data);
    die();
}