<?php

declare(strict_types=1);

namespace Pierrooooo\CourslibTd;

class Api
{
    public function getRandomNumber(): int
    {
        return rand(0,100);
    }
}