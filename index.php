<?php

    class User{

        public $name;
        public $email;

        public function login(){

            echo "User logged in";
            
        }

    }


    $userOne = new User();

    $userOne->login();
    
?>