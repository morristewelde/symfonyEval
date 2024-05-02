<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $produit1 = new Produit;
            $produit1->setNom("car1");
            $produit1->setDescription("this is car1, this is car1, this is car1, this is car1");
            $produit1->setImage('https://cdn.pixabay.com/photo/2016/02/07/13/14/toyota-1184618_1280.jpg');
            $produit1->setStock(10);
            $manager->persist($produit1);

        $produit2 = new Produit;
            $produit2->setNom("car2");
            $produit2->setDescription("this is car2, this is car2, this is car2, this is car2");
            $produit2->setImage('https://cdn.pixabay.com/photo/2023/10/26/04/53/car-8341712_1280.jpg');
            $produit2->setStock(20);
            $manager->persist($produit2);
        
        $produit3 = new Produit;
            $produit3->setNom("car3");
            $produit3->setDescription("this is car3, this is car3, this is car3, this is car3");
            $produit3->setImage('https://cdn.pixabay.com/photo/2018/05/02/09/29/auto-3368094_1280.jpg');
            $produit3->setStock(30);
            $manager->persist($produit3);
        
        $produit4 = new Produit;
            $produit4->setNom("car4");
            $produit4->setDescription("this is car4, this is car4, this is car4, this is car4");
            $produit4->setImage('https://cdn.pixabay.com/photo/2015/05/28/23/12/auto-788747_1280.jpg');
            $produit4->setStock(40);
            $manager->persist($produit4);

        $produit5 = new Produit;
            $produit5->setNom("car5");
            $produit5->setDescription("this is car2, this is car2, this is car2, this is car2");
            $produit5->setImage('https://cdn.pixabay.com/photo/2017/03/27/14/56/auto-2179220_1280.jpg');
            $produit5->setStock(20);
            $manager->persist($produit5);
        
        $produit6 = new Produit;
            $produit6->setNom("car6");
            $produit6->setDescription("this is car6, this is car6, this is car6, this is car6");
            $produit6->setImage('https://cdn.pixabay.com/photo/2016/02/07/13/14/toyota-1184618_1280.jpg');
            $produit6->setStock(10);
            $manager->persist($produit6);
            
        $produit7 = new Produit;
            $produit7->setNom("car7");
            $produit7->setDescription("this is car7, this is car7, this is car7, this is car7");
            $produit7->setImage('https://cdn.pixabay.com/photo/2016/02/07/13/14/toyota-1184618_1280.jpg');
            $produit7->setStock(10);
            $manager->persist($produit7);
        
        $produit8 = new Produit;
            $produit8->setNom("car8");
            $produit8->setDescription("this is car8, this is car8, this is car8, this is car8");
            $produit8->setImage('https://cdn.pixabay.com/photo/2016/02/07/13/14/toyota-1184618_1280.jpg');
            $produit8->setStock(0);
            $manager->persist($produit8);
        
        $manager->flush();
    }
}
