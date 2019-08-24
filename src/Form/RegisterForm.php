<?php

namespace App\Form;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterForm extends AbstractForm
{
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
            ->add(self::FIRST_NAME, TextType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::FIRST_NAME,],
            ])
            ->add(self::LAST_NAME, TextType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::LAST_NAME,],
            ])
            ->add(self::MOBILE_OR_EMAIL, TextType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::MOBILE_OR_EMAIL,],
            ])
            ->add(self::BIRTHDAY, BirthdayType::class, [
                self::PLACEHOLDER => [
                    self::YEAR => self::YEAR,
                    self::MONTH => self::MONTH,
                    self::DAY => self::DAY,
                ],
                'format' => self::BIRTHDAY_FORMAT,
            ])
            ->add(self::PASS, PasswordType::class, [
                self::LABEL => false,
                self::ATTR => [self::PLACEHOLDER => self::PASS,],
            ])
            ->add(self::GENDER, ChoiceType::class, [
                'choices' => $this->getGenderChoices(),
                'expanded' => true,
                'multiple' => false,
                self::LABEL => false,
                self::ATTR => ['class' => 'form-check-inline',],
            ])
            ->setMethod('post')
            ->setAction($this->router->generate('register_index'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => self::class,
        ]);
    }

    protected function getGenderChoices()
    {
        return [
            'male' => 'male',
            'female' => 'female',
        ];
    }
}
