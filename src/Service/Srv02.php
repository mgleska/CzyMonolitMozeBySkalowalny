<?php

declare(strict_types=1);

namespace App\Service;

use App\Service\Validator\V1;

class Srv02
{
    public function __construct(
        private readonly Srv03 $srv03,
        private readonly V1 $v1
    ) {
    }

    public function actionB(): bool
    {
        $this->v1->validate();
        return $this->srv03->actionA();
    }
}
