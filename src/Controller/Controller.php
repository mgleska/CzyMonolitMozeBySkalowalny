<?php

namespace App\Controller;

use App\Service\Srv01;
use App\Service\Srv21;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class Controller extends AbstractController
{
    #[Route('/create')]
    public function create(Srv01 $srv01): void
    {
        $srv01->create();
        print_r(get_included_files());
        exit(1);
    }

    #[Route('/get')]
    public function get(Srv21 $srv21): void
    {
        $srv21->get();
        print_r(get_included_files());
        exit(1);
    }
}
