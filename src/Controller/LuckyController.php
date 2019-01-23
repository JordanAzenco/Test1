<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
      * @Route("/lucky/number")
    */

    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }


    /**
     * Matches /{slug} exactly
     * @Route("/{slug}", name="show_pages")
     */
    public function show($slug){
        $number = random_int(0, 100);
        return $this->render('pages/'. $slug . '.html.twig', [
            'number' => $number,
        ]);
    }
}