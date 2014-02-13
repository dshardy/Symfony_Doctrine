<!--
/*
<?php>

// src/Dsh/NewBundle/DataFixtures/ORM/LoadPhotosData.php

namespace Dsh\NewBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dsh\NewBundle\Entity\Filmstrip;

class LoadPhotosData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Photos();
        $userAdmin->setphotoName('firstphoto');
        $userAdmin->setprice('19.99');
        $userAdmin->setlocationName('Manchester');
        $userAdmin->seteventName('Monday Night Disco');
        $userAdmin->setphotographerName('BoganHardy');
        $userAdmin->setdatetimetakenName('12/12/12');
        

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
*/
-->