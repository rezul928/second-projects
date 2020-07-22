<?php
require_once "db.php";
define("AAA" , 5);

class Users extends Db{
    public function __construct()
    {
        $this->table = "users";
    }
}

$user = new Users();
$user->find(24);