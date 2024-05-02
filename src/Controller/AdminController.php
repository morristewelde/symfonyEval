<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Commentaire;
use App\Form\ProduitFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/admin/produits', name: 'admin_produits')]
    public function adminProduits(EntityManagerInterface $manager): Response
    {
        $produitsRepo = $manager->getRepository(Produit::class);
        $produits = $produitsRepo->findAll();    

        return $this->render('admin/produits.html.twig', [
            'produits' => $produits
        ]);
    }
    
    #[Route('/admin/commentaire', name: 'adminCommentaire')]
    public function adminCommentaires(EntityManagerInterface $manager): Response
    {
        $commentaireRepository = $manager->getRepository(Commentaire::class);
        $commentaires = $commentaireRepository->findAll();    

        return $this->render('admin/Commentaire.html.twig', [
            'commentaires' => $commentaires
        ]);
    }

    #[Route('/admin/commentairesdelete', name: 'commentaireDelete')]
    public function CommentaireDelete(EntityManagerInterface $manager): Response
    {
        $commentaireId = $_POST['commentaireId'];
        $commentaireRepo = $manager->getRepository(Commentaire::class);
        $commentaire = $commentaireRepo->find($commentaireId);
        $manager->remove($commentaire);
        $manager->flush();
        return $this->redirectToRoute('adminCommentaire');

    }

    
    #[Route('/admin/addproduit', name: 'produitAdd')]
    public function ProduitAdd(EntityManagerInterface $manager, Request $request, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        $produit = new Produit();
        $produitForm = $this->createForm(ProduitFormType::class, $produit);
        $produitForm->handleRequest($request);

        if ($produitForm->isSubmitted() && $produitForm->isValid()) {
            // Validate CSRF token
            $submittedToken = $request->request->get('_token');
            if (!$csrfTokenManager->isTokenValid(new CsrfToken('produit_form', $submittedToken))) {
                throw new InvalidCsrfTokenException('Invalid CSRF token.');
            }

            // Persist the product entity
            $manager->persist($produit);
            $manager->flush();

            return $this->redirectToRoute('admin_produits');
        }

        return $this->render('admin/add.html.twig', [
            'produitForm' => $produitForm->createView(),
        ]);
    }

    #[Route('/admin/editproduit/{id}', name: 'produitEdit')]
    public function produitEdit(Produit $produit, EntityManagerInterface $manager, Request $request, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
        $produitForm = $this->createForm(ProduitFormType::class, $produit);
        $produitForm->handleRequest($request);

        if ($produitForm->isSubmitted() && $produitForm->isValid()) {
            // Validate CSRF token
            $submittedToken = $request->request->get('_token');
            if (!$csrfTokenManager->isTokenValid(new CsrfToken('produit_form', $submittedToken))) {
                throw new InvalidCsrfTokenException('Invalid CSRF token.');
            }

            // Persist the product entity
            $manager->flush();

            // Redirect to the admin page after successful modification
            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/edit.html.twig', [
            'produit' => $produit,
            'produitForm' => $produitForm->createView(),
        ]);
    }

    

    #[Route('/admin/deleteproduit/{id}', name: 'produitDelete')]
    public function ProduitDelete(EntityManagerInterface $manager, Request $request, CsrfTokenManagerInterface $csrfTokenManager, $id): Response
    {
        // Find the product entity to delete
        $produit = $manager->getRepository(Produit::class)->find($id);
    
        // Check if the product exists
        if (!$produit) {
            throw $this->createNotFoundException('Product not found');
        }
    
        // Delete associated commentaires
        $commentaireRepository = $manager->getRepository(Commentaire::class);
        $associatedCommentaires = $commentaireRepository->findBy(['produit' => $produit]);
        foreach ($associatedCommentaires as $commentaire) {
            $manager->remove($commentaire);
        }
    
        // Remove the product entity
        $manager->remove($produit);
        $manager->flush();
    
        // Redirect to the admin page after deletion
        return $this->redirectToRoute('admin_produits');
    }

}
