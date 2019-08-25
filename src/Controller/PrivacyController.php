<?php

namespace App\Controller;

use App\Form\LoginForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrivacyController extends AbstractController
{
    /**
     * @Route("/privacy", name="privacy_index")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $loginForm = $this->createForm(LoginForm::class);

        return $this->render(
            'privacy.html.twig',
            [
                'login_form' => $loginForm->createView()
            ]
        );
    }
}
