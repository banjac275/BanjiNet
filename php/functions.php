<?php
if (!isset($_SESSION)) {session_start();}

function sanitize($data)//proverava i sredjuje string
{
    $data = trim($data);
    return filter_var($data, FILTER_SANITIZE_STRING);
}