<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Commentaire;
use App\Form\CommentaireFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $manager): Response
    {
        $produitRepository = $manager->getRepository(Produit::class);
        $produits = $produitRepository->findBy([], ['id' => 'DESC'], 5);

        return $this->render('home/index.html.twig', [
            'produits' => $produits
        ]);
    } 

    #[Route('/produits', name: 'produits')]
    public function produits(EntityManagerInterface $manager): Response
    {
        $produitRepo = $manager->getRepository(Produit::class);
        $Produits = $produitRepo->findAll();

        return $this->render('home/produits.html.twig',[
            "produits" => $Produits
        ]);
    }

    #[Route('/produits/{produitId}', name: 'produitsdetails')]
    public function produitDetails(EntityManagerInterface $manager, $produitId, Request $request): Response
    {
        $produitRepo = $manager->getRepository(Produit::class);
        $produit = $produitRepo->find($produitId);

        $commentaireRepo = $manager->getRepository(Commentaire::class);

        // Create a query builder
        $qb = $commentaireRepo->createQueryBuilder('c');

        // Add criteria to filter comments for the specified product
        $qb->where('c.produit = :produitId')
        ->setParameter('produitId', $produitId);

        // Add ordering to order comments by their IDs in descending order
        $qb->orderBy('c.id', 'DESC');

        // Execute the query and get the result
        $commentaires = $qb->getQuery()->getResult();

        $commentaireForm = $this->createForm(CommentaireFormType::class);
        $commentaireForm->handleRequest($request);
        if ($commentaireForm->isSubmitted() && $commentaireForm->isValid()) {
            $commentaire = $commentaireForm->getData();
            $commentaire->setProduit($produit);
            $manager->persist($commentaire);
            $manager->flush();
            $this->addFlash('success', 'commentaire a ajouté');
            return $this->redirectToRoute('produitsdetails', ['produitId' => $produitId]);
        }

        return $this->render('home/produitsdetails.html.twig', [
            'produit' => $produit,
            'commentaires' => $commentaires,
            'commentaireForm' => $commentaireForm->createView()
            
        ]);
    }

}
