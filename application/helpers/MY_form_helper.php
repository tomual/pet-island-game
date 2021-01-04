<?php
defined('BASEPATH') or exit('No direct script access allowed');

function is_valid($name)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (form_error($name)) {
            return "is-invalid";
        } else {
            return null;
        }
    }
    return null;
}
