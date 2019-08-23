<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ImportController extends AbstractController
{

    public function newImport(): Response
    {
        return new Response($this->renderView('import/new.html.twig', [
            'controller_name' => 'ImportController',
        ]));
    }
}
