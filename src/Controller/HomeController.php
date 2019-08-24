<?php

namespace App\Controller;

use App\Form\UserRegisterForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $form = $this->createForm(UserRegisterForm::class);

        return $this->render(
            'index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
