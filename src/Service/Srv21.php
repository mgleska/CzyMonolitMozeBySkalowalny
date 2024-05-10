<?php

declare(strict_types=1);

namespace App\Service;

class Srv21
{
    public function __construct(
        private readonly Srv22 $srv22
    ) {
    }

    public function get(): bool
    {
        return $this->srv22->actionK();
    }
}
