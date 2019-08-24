<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class HomeController
{
    public function index(Request $request)
    {
        $form = $this->createForm(UserRegisterFrontendForm::class);

        return $this->render(
            'home/index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
