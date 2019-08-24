<?php

namespace App\Controller;

use App\Form\LoginForm;
use App\Form\RegisterForm;
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
        $loginForm = $this->createForm(LoginForm::class);

        return $this->render(
            'index.html.twig',
            [
                'register_form' => $registerForm->createView(),
                'login_form' => $loginForm->createView()
            ]
        );
    }
}
