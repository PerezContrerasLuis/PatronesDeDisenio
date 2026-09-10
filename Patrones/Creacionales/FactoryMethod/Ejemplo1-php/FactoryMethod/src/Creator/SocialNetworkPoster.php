<?php

namespace FactoryMethod\Creator;

use FactoryMethod\Product\SocialNetworkConnector;

abstract class SocialNetworkPoster 
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;
     
    public function post(): void
    {
        
        $network = $this->getSocialNetwork();
    
        $network->logIn();
        $network->createPost();
        $network->logout();
    }
}