<?php

namespace FactoryMethod\Creator;
use FactoryMethod\Creator\SocialNetworkPoster;
use FactoryMethod\Product\FacebookConnector;
use FactoryMethod\Product\SocialNetworkConnector;


class FacebookPoster extends SocialNetworkPoster 
{
    private $user, $password;
    public function __construct(string $user,string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }


    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->user ,$this->password );
    }
}