<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first', 'text')->add('last', 'text')->add('submit', 'submit');
    }

    public function getName()
    {
        return 'user';
    }
}
