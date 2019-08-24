<?php

namespace App\Controller;

use App\Form\RegisterForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register_index")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $form = $this->createForm(RegisterForm::class);

        return $this->render(
            'register.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
