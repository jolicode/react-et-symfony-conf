<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/react-with-limenius", name="reactWithLimenius")
     */
    public function reactWithLimeniusAction(Request $request)
    {
        $items = $request->get('items', ['Sortir le chien', 'Acheter du lait']);

        $props = $this->get('serializer')->serialize([
            'items' => $items,
        ], 'json');

        return $this->render('default/react-with-limenius.html.twig', [
            'props' => $props,
        ]);
    }

    /**
     * @Route("/react-in-twig", name="reactInTwig")
     */
    public function reactInTwigAction(Request $request)
    {
        $items = $request->get('items', ['Sortir le chien', 'Acheter du lait']);

        $items = $this->get('serializer')->serialize($items, 'json');

        return $this->render('default/react-in-twig.html.twig', [
            'items' => $items,
        ]);
    }
}
