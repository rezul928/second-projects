<?php
    function is_user_logged_in(){
        return true;
    }

    function select_bg($color_name){
        $result = "";

        switch ($color_name){
            case blue:
                $result = "#00c";
                break;

            case green:
                $result = "#0c0";
                break;

            case red:
                $result = "#c00";
                break;
        }
        return $result;
    }

    function get_users_info(){
        return array(
            array('id' => '0' , 'name' => 'Reza' , 'email' => 'reza@email.com'),
            array('id' => '1' , 'name' => 'Helena' , 'email' => 'helena@email.com'),
            array('id' => '2' , 'name' => 'Erfan' , 'email' => 'erfan@email.com'),
            array('id' => '3' , 'name' => 'Sima' , 'email' => 'sima@email.com'),
            array('id' => '4' , 'name' => 'Saba' , 'email' => 'saba@email.com'),
            array('id' => '5' , 'name' => 'Mehran' , 'email' => 'mehran@email.com'),

        );
    }