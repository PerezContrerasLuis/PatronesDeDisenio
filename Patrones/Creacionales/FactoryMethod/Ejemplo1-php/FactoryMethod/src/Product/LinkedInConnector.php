<?php

namespace FactoryMethod\Product;

use FactoryMethod\Product\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
     private $login , $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function logIn(): void
    {
        echo "Solicitud LinkedI de logiIn con usuario: {$this->login} y password: {$this->password} \n";
    }

    public function logOut(): void
    {
        echo "Solicitud LinkedI de logOut con usuario: {$this->login} y password: {$this->password} \n";
    }

    
    public function createPost(): void
    {
        echo "Crear LinkedIn post  \n";
    }
}