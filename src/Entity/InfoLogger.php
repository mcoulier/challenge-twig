<?php

namespace App\Entity;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class InfoLogger
{
    public function logger()
    {
        $logger = new Logger('logs');
        $logger->pushHandler(new StreamHandler(__DIR__ . '/log.info', Logger::INFO));

    }



}
