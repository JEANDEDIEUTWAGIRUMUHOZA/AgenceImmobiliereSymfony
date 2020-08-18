<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController {

    /**
     * le chemin(path)home on l'appele dans le fichier base avec le bouton immos
     * @Route("", name="home")
     * @param PropertyRepository $repository
     * @return Response
     */
    public function index(PropertyRepository $repository):Response{
             $properties= $repository->findLatest();
            //retourne la page qui est dans template
            return $this->render('pages/home.html.twig',[
                'properties' => $properties
        ]);


}
}