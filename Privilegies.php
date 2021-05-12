<?php 

    class Privilegies extends User {
        public $user_privilegies;

        // INIT CON STRINGA NICKNAME
        function __construct($_nickname)
        {
            $this->nickname =  $_nickname;
            $this->posts_number = rand(0, 1000);
            $this->avatar_link = 'https://mywebsite.'. uniqid().'.jpeg';

            // CREAZIONE RANDOM DI UNA TIPOLOGIA UTENTE
            $i = rand(1, 3);
            switch($i) {
                case 1: 
                    $this->user_privilegies = 'Admin';
                    break;
                case 2: 
                    $this->user_privilegies = 'Editor';
                    break;
                case 3;
                    $this->user_privilegies = 'User';
                    break;
            }
        }
    }