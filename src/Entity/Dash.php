<?php

namespace App\Entity;

use App\Transform;

class Dash implements Transform
{

    public function transform(string $string)
    {
        $dashString = str_replace(" ", "-", $string);
    }

}
