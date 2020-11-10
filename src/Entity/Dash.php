<?php

namespace App\Entity;

use App\Transform;

//Output string with :string
class Dash implements Transform
{
    public function transform(string $string):string
    {
        return str_replace(" ", "-", $string);
    }
}
