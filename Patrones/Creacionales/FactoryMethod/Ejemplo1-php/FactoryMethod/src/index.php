<?php

require_once __DIR__ . '/../vendor/autoload.php';

use  FactoryMethod\Client\Client;
use  FactoryMethod\Creator\FacebookPoster;
use  FactoryMethod\Creator\LinkedInPoster;

echo "Testing ConcreteCreator FacebookPoster:\n";
Client::clientCode(new FacebookPoster("Dennis_Ritchie@gmail.com", "PDP11"));
echo "\n\n";

echo "Testing ConcreteCreator LinkedInPoster:\n";
Client::clientCode(new LinkedInPoster("Grace_Hopper@gmail.com, ", "COBOL59"));