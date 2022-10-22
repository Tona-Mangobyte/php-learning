<?php
// stdClass is PHP's generic empty class
/*
 * @see https://stackoverflow.com/questions/931407/what-is-stdclass-in-php
 * */
$array_user = array();
$array_user["name"] = "smith john";
$array_user["username"] = "smith";
$array_user["id"] = "1002";
$array_user["email"] = "smith@nomail.com";

print_r($array_user);

$obj_user = new stdClass;
$obj_user->name = "smith john";
$obj_user->username = "smith";
$obj_user->id = "1002";
$obj_user->email = "smith@nomail.com";

print_r($obj_user);