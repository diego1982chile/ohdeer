<?php

namespace OhDeer\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('descripcion')            
            ->add('cantidad')
            ->add('fecha')
            ->add('costo_pesos')
            ->add('categoria')
            ->add('imagen') 
            ->add('attachment', 'file');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OhDeer\AppBundle\Entity\Producto'
        ));
    }

    public function getName()
    {
        return 'ohdeer_appbundle_productotype';
    }
}
