<?php

    class User{

        public $name;
        public $email;


        public function __construct(){

            $this->name = 'Mario';
            $this->email = 'mario@thenetninja.co.uk';

        }

        public function login(){

            echo "User logged in";
            
        }

    }


    $userOne = new User();

    $userOne->login();
    
?>