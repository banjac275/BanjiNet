<?php
//workaround za _POST metodu jer php storm zeza i nece da je napuni
$raw_str = file_get_contents('php://input');
if($raw_str) {
    foreach (explode('&', $raw_str) as $pair) {
        $keyvalue = explode("=", $pair);
        $key = urldecode($keyvalue[0]);
        $value = urldecode($keyvalue[1]);
        $_POST[$key] = $value;
    }
}

if (isset($_POST['email'])) {
    $mail2 = $_POST['email'];
    echo $mail2;
    echo "nasao ga je konacno";
}
print_r($_POST);