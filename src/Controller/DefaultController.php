<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function default()
    {
        return $this->redirectToRoute("index");
    }

    /**
     * @Route("/{_locale}/", name="index")
     */
    public function index(Request $request)
    {
        return $this->render("base.html.twig", [
            "locale" => $request->getLocale(),
            "trans_file" => @file_get_contents(__DIR__."/../../translations/messages.".$request->getLocale().".yaml"),
        ]);
    }

}
