<?php
namespace AppBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;

class ConcertController extends FOSRestController
{
    public function getConcertsAction()
    {
        $em = $this->get('doctrine')->getManager();
        $repository = $em->getRepository('AppBundle:Concert');
        $concertList = $repository->findAll();

        return $concertList;
    }
}
