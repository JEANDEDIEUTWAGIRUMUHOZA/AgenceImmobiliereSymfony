<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
          {

              $user = new User();
              $user->setUsername('demoadmin');
              $user->setPassword($this->encoder->encodePassword($user,'admindemo@!&123'));
              $manager->persist($user);
              // $product = new Product();
              // $manager->persist($product);

              $manager->flush();
    }
}
