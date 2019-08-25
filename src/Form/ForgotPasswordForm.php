<?php

namespace App\Form;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ForgotPasswordForm extends AbstractForm
{
    const NEXT = 'next';

    protected $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(self::MOBILE_OR_EMAIL, TextType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::MOBILE_OR_EMAIL_SHORT,],
            ])
            ->add(self::NEXT, SubmitType::class)
            ->setMethod('post')
            ->setAction($this->router->generate('submit_code_index'));
    }
}
