<?php
require_once 'P.php';

$str = "I am { name } and user_id = {user_id} with alias {name}.";
$g = P::from($str)->put("name", "Jayin")
    ->put("user_id", "3112002722")
    ->format();

print_r($g);

