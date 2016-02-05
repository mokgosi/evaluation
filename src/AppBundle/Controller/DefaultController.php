<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use ApiBundle\Services\GoogleSearch;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $defaultData = array('keyword' => 'Type your keyword here');

        $form = $this->createFormBuilder($defaultData)
            ->add('keyword', TextType::class)
            ->add('limit', TextType::class)
            ->add('search', SubmitType::class)
            ->getForm();

        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/search", name="search")
     */
    public function searchAction(Request $request)
    {
        $defaultData = array('keyword' => 'Type your keyword here');

        $form = $this->createFormBuilder($defaultData)
            ->add('keyword', TextType::class)
            ->add('limit', TextType::class)
            ->add('search', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "keyword", "limit"
            $data = $form->getData();


            echo $request->request->get('keyword');

            // $google = new GoogleSearch($data['keyword'], $data['limit']);
            dump($data);
        }
            
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'form' => $form->createView(),
        ));
    }
}
