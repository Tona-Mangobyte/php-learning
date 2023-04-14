<?php

class User {
    public function __construct(private string $name, private string $address){}
}

$user = new User("Simple name", "PP");
print_r($user);