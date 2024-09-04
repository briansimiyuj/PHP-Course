<?php

    class User{

        private $name;
        private $email;


        public function __construct($name, $email){

            $this->name = $name;
            $this->email = $email;

        }

        public function login(){

            echo $this->name . ' logged in';
            
        }


        public function getName(){

            return $this->name;

        }

    }


    $userOne = new User('Brian', 'brian@thenetninja.co.uk');

    echo $userOne->getName();
    
?>