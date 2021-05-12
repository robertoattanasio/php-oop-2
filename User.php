<?php 
require_once('Privilegies.php');

class User {
        public $nickname;
        private $name;
        private $surname;
        private $age;
        public $avatar_link;
        public $posts_number;


        // INIT CON STRINGA NICKNAME
        function __construct($_nickname)
        {
            $this->nickname =  $_nickname;
            $this->posts_number = rand(0, 1000000);
            $this->avatar_link = 'https://mywebsite.'. uniqid().'.jpeg';
        }

        // METODO PER L'INSERIMENTO DI DATI PRIVATI SENSIBILI
        function setUser($_name, $_surname, $_age){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->age = $_age;
        }
    }