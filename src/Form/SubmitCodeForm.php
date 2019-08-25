<?php

namespace App\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SubmitCodeForm extends AbstractForm
{
    const ENTER_SIX_DIGIT_NUMBER = 'enter_six_digit_number';
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(self::CODE, TextType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::ENTER_SIX_DIGIT_NUMBER,],
            ])
            ->add(self::SUBMIT, SubmitType::class);
    }
}
