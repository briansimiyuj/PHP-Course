<?php

    class User{

        public $name;
        public $email;


        public function __construct($name, $email){

            $this->name = $name;
            $this->email = $email;

        }

        public function login(){

            echo $this->name . ' logged in';
            
        }

    }


    $userOne = new User('Brian', 'brian@thenetninja.co.uk');

    echo $userOne->name .  "<br>";
    echo $userOne->email . "<br>";
    $userOne->login();
    
?>