<?php

namespace App\Entity;

use App\Transform;

class Master
{
    private string $message;

    //Construct requires message & transform option to transform
    public function __construct(string $message, Transform $transform)
    {
        $this->message = $transform->transform($message);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}