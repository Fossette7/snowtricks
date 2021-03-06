<?php

/**
 * Date: 21/09/2020
 * Time: 16:16
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $number = random_int(0, 100);

        return $this->render('home/home.html.twig', [
            'number' => $number,
        ]);

    }
}