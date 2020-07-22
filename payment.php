<?php
require_once "db.php";

class Payment extends Db{

    public function __construct()
    {
        $this->table = "payment";
    }

    public function get_all_payment_by_user_id($user_id){
        return "SELECT * FROM {$this->table} WHERE paymnet_user_id={$user_id}";
    }

}