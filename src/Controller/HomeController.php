<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HomeController{

    /**
     * @var Environment
     */
    private $twig;

   public function __construct(Environment $twig){ //ici Environment permet de charger les classes dont on a besoin
        $this->twig = $twig;
    }
    public function index():Response{
        //return new Response('Salut les gens');// il faut absolument renvoyer le response, différent en Laravel
        try {
            return new Response($this->twig->render('pages/home.html.twig'));
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }//retourne la page qui est dans template
}
}