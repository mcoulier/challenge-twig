<?php

namespace App\Entity;

//Require components
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


class InfoLogger
{
    public function __construct(string $string)
    {
        $logger = new Logger('logs');
        $logger->pushHandler(new StreamHandler(__DIR__ . '/log.info', Logger::INFO));
        //Don't forget to actually log the string
        $logger->info($string);
    }
}
