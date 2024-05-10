<?php

declare(strict_types=1);

namespace App\Service;

class Srv01
{
    public function __construct(
        private readonly Srv02 $srv002
    ) {
    }

    public function create(): bool
    {
        return $this->srv002->actionB();
    }
}
