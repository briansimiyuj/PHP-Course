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
        


        public function setName($name){

            if(is_string($name) && strlen($name) > 1){

                $this->name = $name;

                return "The name has been updated to $name";

            }else{

                return 'Not a valid name';

            }

        }

    }


    $userOne = new User('Brian', 'brian@thenetninja.co.uk');

    // echo $userOne->setName(50);

    echo $userOne->setName('Justin');
    
?>