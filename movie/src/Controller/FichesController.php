<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Acteurs;
use App\Entity\Categorie;
use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;

class FichesController extends AbstractController
{

    /**
     * @Route("/fiches", name="fiches")
     */
    public function createFiche(): Response
    {

        $test = new Acteurs();
        $test->getActors();
        return $this->render('fiches/index.html.twig', [
            'controller_name' => 'FichesController',
            'test' => $test,
        ]);
    }
}
