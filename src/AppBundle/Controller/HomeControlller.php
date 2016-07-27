<?php
/**
 * Created by PhpStorm.
 * User: mik
 * Date: 26/07/2016
 * Time: 21:54
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HomeControlller extends Controller
{
    /**
     * @Route("/home/", name="home_page")
     */
    public function HomeAction(Request $request)
    {
        $test = 'coucou';
        // replace this example code with whatever you need
        return $this->render('home/home.html.twig', array('test'=>$test));

    }
}