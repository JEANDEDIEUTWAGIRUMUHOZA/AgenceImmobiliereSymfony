<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController {

/**
 * le chemin(path)home on l'appele dans le fichier base avec le bouton immos
* @Route("", name="home")
*/
    public function index():Response{

            //retourne la page qui est dans template
            return $this->render('pages/home.html.twig');


}
}