<?php

namespace App\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LoginHeaderForm extends AbstractForm
{
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
            ->add(self::PASS, TextType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::PASS,],
            ])
            ->add(self::LOGIN, SubmitType::class);
    }
}
