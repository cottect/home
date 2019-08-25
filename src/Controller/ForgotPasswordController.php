<?php

namespace App\Controller;

use App\Form\LoginForm;
use App\Form\SubmitCodeForm;
use App\Form\ForgotPasswordForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ForgotPasswordController extends AbstractController
{
    /**
     * @Route("/forgot-password", name="forgot_password_index")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $forgotPassword = $this->createForm(ForgotPasswordForm::class);
        $loginForm = $this->createForm(LoginForm::class);
        $forgotPassword->handleRequest($request);
        $viewData = [
            'form_path' => '_form/_forgot_password.html.twig',
            'form' => $forgotPassword->createView(),
            'login_form' => $loginForm->createView()
        ];

        return $this->render('forgot_password.html.twig', $viewData);
    }

    /**
     * @Route("/forgot-password/submit-code", name="submit_code_index")
     *
     * @param Request $request
     * @return Response
     */
    public function submitCode(Request $request)
    {
        if($request->isMethod(Request::METHOD_GET)){
            return $this->redirectToRoute('forgot_password_index');
        }
        $loginForm = $this->createForm(LoginForm::class);
        $submitCodeForm = $this->createForm(SubmitCodeForm::class);
        $viewData = [
            'form' => $submitCodeForm->createView(),
            'form_path' => '_form/_submit_code_form.html.twig',
            'login_form' => $loginForm->createView()
        ];

        return $this->render('forgot_password.html.twig', $viewData);
    }
}
