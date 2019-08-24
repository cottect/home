<?php

namespace App\Controller;

use App\Form\RegisterForm;
use App\Form\LoginHeaderForm;
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
        $registerForm = $this->createForm(RegisterForm::class);
        $loginHeaderForm = $this->createForm(LoginHeaderForm::class);

        return $this->render(
            'index.html.twig',
            [
                'register' => $registerForm->createView(),
                'login' => $loginHeaderForm->createView()
            ]
        );
    }
}
