<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class FrontonesController extends Controller
{

    const ELEMENTS_BY_PAGE = 15;
    /**
     * @Route("/lista-frontones/{page}", defaults={"page" = "1"})
     * @Route("/lista-frontones/", defaults={"page" = "1"})
     * @Route("/", defaults={"page" = "1"})
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listarAction($page)
    {
        if (!$this->isPosiblePage($page)) {
            throw new NotFoundHttpException('Número de página imposible de resolver');
        }

        return $this->render('', array('page' => $page));
    }

    public function listarFavoritosAction()
    {

    }

    public function destalleAction($id)
    {

    }

    public function buscarAction()
    {

    }

    private function isPosiblePage($page)
    {
        return true;
    }
}
