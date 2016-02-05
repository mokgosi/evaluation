<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('keyword','text',array('error_bubbling'=>true))
                ->add('nmber', 'text', array('error_bubbling'=>true))
                ->add('submit', 'submit', array('label'=>'Submit'))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => ''
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'search';
    }

}
