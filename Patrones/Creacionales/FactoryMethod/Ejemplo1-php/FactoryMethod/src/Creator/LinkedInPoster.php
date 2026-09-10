<?php

namespace FactoryMethod\Creator;
use FactoryMethod\Creator\SocialNetworkPoster;
use FactoryMethod\Product\LinkedInConnector;
use FactoryMethod\Product\SocialNetworkConnector;


class LinkedInPoster extends SocialNetworkPoster 
{
    private $user, $password;
    public function __construct(string $user,string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }


    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->user ,$this->password );
    }
}