<?php
namespace FactoryMethod\Client;

use FactoryMethod\Creator\SocialNetworkPoster;


class Client {
    

    public static function clientCode(SocialNetworkPoster $creator)
    {
        $creator->post();
       
    }
}