<?php
// src/Testing/MongoBundle/Form/Runner.php

namespace Application\Jobeet2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }


    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Application\Jobeet2Bundle\Entity\Category',
        );
    }

    public function getName()
    {
        return 'category';
    }
}