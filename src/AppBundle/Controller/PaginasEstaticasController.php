<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PaginasEstaticasController extends Controller
{
    /**
     * @Route("/sitio/{pagina}/", name = "pagina-estatica")
     */
    public function estaticaAction($pagina)
    {
        return $this->render('AppBundle:PaginasEstaticas:'.$pagina.'.html.twig');
    }
}
