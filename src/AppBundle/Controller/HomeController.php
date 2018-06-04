<?php

namespace AppBundle\Controller;

use Appbundle\Entity\Admission;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Appbundle\Form\AdmissionType;


class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $admission = new Admission();
         $form = $this->createFormBuilder($admission)
            ->add('enter details', AdmissionType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render('home/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
