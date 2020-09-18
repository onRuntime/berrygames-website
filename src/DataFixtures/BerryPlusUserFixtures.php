<?php

namespace App\DataFixtures;

use App\Entity\Website\BerryPlusUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class BerryPlusUserFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {

        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new BerryPlusUser();
        $user->setUsername('ChocolateIG');
        $user->setPassword($this->encoder->encodePassword($user, '****'));
        $manager->persist($user);
        $manager->flush();
    }
}
