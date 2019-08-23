<?php
/**
 * Created by PhpStorm.
 * User: mha
 * Date: 07/12/18
 * Time: 21:58
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController  extends AbstractController
{

    /**
     * @return Response
     */
    public function index($vueRouter):Response
    {
       return new Response($this->renderView("index.html.twig"));
    }

}