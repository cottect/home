<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

abstract class AbstractForm extends AbstractType
{
    const MOBILE_OR_EMAIL = 'mobile_or_email';
    const MOBILE_OR_EMAIL_SHORT = 'mobile_or_email_short';
    const PASS = 'password';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const BIRTHDAY = 'birthday';
    const GENDER = 'gender';
    const YEAR = 'year';
    const MONTH = 'month';
    const DAY = 'day';

    const LABEL = 'label';
    const PLACEHOLDER = 'placeholder';
    const ATTR = 'attr';
    const BIRTHDAY_FORMAT = 'yyyyMMdd';
    const LOGIN = 'login';
    const SUBMIT = 'submit';
    const CODE = 'code';
}
