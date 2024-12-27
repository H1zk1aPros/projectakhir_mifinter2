<?php

$db['db_host'] = "mif.myhost.id";
$db['db_user'] = "mifmyho2_jcc";
$db['db_pass'] = "@Mif2024";
$db['db_name'] = "mifmyho2_jcc";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect("mif.myhost.id","mifmyho2_jcc",password: "@Mif2024","mifmyho2_jcc");

?>