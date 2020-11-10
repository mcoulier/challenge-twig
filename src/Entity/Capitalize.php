<?php

namespace App\Entity;

use App\Transform;

//Output string with :string
class Capitalize implements Transform
{
    public function transform(string $string):string{
        $capString = '';
        foreach(str_split($string) as $index => $char) {
            $capString .= ($index % 2) ? strtolower($char) : strtoupper($char);
        }
        return $capString;
    }
}