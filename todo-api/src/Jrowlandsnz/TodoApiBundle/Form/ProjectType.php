<?php

namespace Jrowlandsnz\TodoApiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

//use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ProjectType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        $builder
            ->add('name')
            ->add('description')
            ->add('dateDue') 
        ;

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jrowlandsnz\TodoApiBundle\Entity\Project'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        //return 'jrowlandsnz_todoapibundle_project';
                // this is important in order to be able
        // to provide the entity directly in the json
        //https://github.com/allan-simon/symfony2-rest-api-example/commit/61c0ca878d82151915705808a5dd20295c8c3b2c
        return '';
    }
}
