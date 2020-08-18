<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController {


    /**
     * @var PropertyRepository
     */
    private $repository;



    public function __construct(PropertyRepository $repository)
    {
        $this->repository  = $repository;
    }

    /**
     * ce path property.index on l'appelle base.html.twig sur le bouton Acheter
     * @Route("/biens", name="property.index")
     */
    public function index():Response{




        /*INTERACGIR AVEC ENTITY DE BASE DE DONNEES
         * $property = new Property();
        $property->setTitle('Le premier bien')
            ->setPrice(500000)
            ->setRooms(6)
            ->setBedrooms(4)
            ->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit.')
            ->setSurface(120)
            ->setFloor(2)
            // on a crée une constante pour gérer ces mésures
            ->setHeat(1)
            ->setCity('Grenoble')
            ->setAdress('2 boulevard Gambetta')
            ->setPostalCode(38000);

        on crée l'entity Manager, qui est une classe chargée de gérer la persistences des entités
        au sein de la base données


        $em = $this->getDoctrine()->getManager();
        $em->persist($property);//ici l'entity persiste
        $em->flush();//ici envoi dans la base de données*/


        //on initialize le repository

        /*$repository =  $this->getDoctrine()->getRepository(Property::class);
        dump($repository);*/

        //ici on cherche les biens en fonction des critères, ce findAll on l'a défini dans le repository
        $property = $this->repository->findAllVisible();
        dump($property);
        return $this->render( 'property/index.html.twig',[
            'current_menu' => 'properties'
        ]);

    }
}
