<?php

namespace App;

//Don't forget to output string with :string
interface Transform
    {
        public function transform(string $string):string;
    }