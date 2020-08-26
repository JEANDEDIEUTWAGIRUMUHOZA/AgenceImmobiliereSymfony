<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController {


    /**
     * @var PropertyRepository
     */
    private $repository;



    private $em;


    /**
     * PropertyController constructor.
     * @param PropertyRepository $repository
     * @param EntityManagerInterface $em
     */
    public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
    {
        $this->repository  = $repository;
        $this->em = $em;
    }

    /**
     * ce path property.index on l'appelle base.html.twig sur le bouton Acheter
     * @Route("/biens", name="property.index")
     */
    public function index():Response{




        /*INTERAGIR AVEC ENTITY DE BASE DE DONNEES
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
        /*$property = $this->repository->findAllVisible();
        $this->em->flush();
        dump($property);*/

        return $this->render( 'property/index.html.twig',[
            'current_menu' => 'properties'
        ]);

    }

    //Méthode pour faire fonction le lien qui affiche les détails d'un bien qui est dans dans home.html.twig

    /**
     * @Route("/biens/{slug}-{id}", name="property.show", requirements={"slug": "[a-z0-9\-]*"})
     * @param Property $property
     * @param $slug
     * @return Response
     */
    /*public function show($slug,$id):Response
    {
        $property = $this->repository->find($id);
      return $this->render('property/show.html.twig',[
          'property'=>$property,
          'current_menu' => 'properties'
      ]);
    }*/

    public function show(Property $property, $slug):Response
  {
      if($property->getSlug() !== $slug){
          return $this->redirectToRoute('property.show',[
              'id' => $property->getId(),
              'title' => $property->getTitle(),
              'slug' => $property->getSlug()
          ], 301);
      }

    return $this->render('property/show.html.twig',[
        'property'=>$property,
        'current_menu' => 'properties'
    ]);
  }

}
