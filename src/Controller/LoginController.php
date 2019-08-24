<?php

namespace App\Controller;

use App\Form\LoginForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login_index")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $form = $this->createForm(LoginForm::class);

        return $this->render(
            'login.html.twig',
            [
                'login_form' => $form->createView(),
            ]
        );
    }
}
