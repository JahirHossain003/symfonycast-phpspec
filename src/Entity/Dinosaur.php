<?php

namespace App\Entity;

class Dinosaur
{
    private $length = 0;

    public function getLength() : int
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

}
