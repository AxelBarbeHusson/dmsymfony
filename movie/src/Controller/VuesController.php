<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Acteurs;
use App\Entity\Categorie;
use App\Entity\Movie;

class VuesController extends AbstractController
{
    /**
     * @Route("/movie/{id}", name="movie_vue")
     */
    public function show(int $id): Response
    {
        $product = $this->getDoctrine()
            ->getRepository(Movie::class)
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        return new Response('Check out this great product: ' . $product->getMovie());

    }
    public function createFiche(): Response
    {
        $idMovie = new Movie();
        $idMovie->getId();
        $actor = new Acteurs();
        $actor->getActors();
        $categorie = new Categorie();
        $categorie->getCategorie();

        return $this->render('vues/index.html.twig', [
            'controller_name' => 'VueController',
            'actor' => $actor,
            'categorie' => $categorie,
            'idMovie' => $idMovie,
        ]);
    }
}
