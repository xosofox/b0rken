<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HugeController extends AbstractController
{
    /**
     * @Route("/")
     * @return JsonResponse
     */
    public function index(): Response
    {
        return $this->render('huge.html.twig',[ ]);
    }

    /**
     * @Route("/greet/{name}")
     * @return JsonResponse
     */
    public function huge($name='Arno Nühm') : Response
    {
         return $this->render ('greet.html.twig',['name'=>$name]);
    }
}

?>
