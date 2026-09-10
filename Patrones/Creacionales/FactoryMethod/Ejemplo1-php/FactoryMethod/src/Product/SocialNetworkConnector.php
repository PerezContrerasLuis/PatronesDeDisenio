<?php

namespace FactoryMethod\Product;


interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost(): void;
}

