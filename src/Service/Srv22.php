<?php

declare(strict_types=1);

namespace App\Service;

use App\Service\Validator\V2;

class Srv22
{
    public function __construct(
        private readonly Srv23 $srv23,
        private readonly V2 $v2
    ) {
    }

    public function actionK(): bool
    {
        $this->v2->validate();
        return $this->srv23->actionJ();
    }
}
