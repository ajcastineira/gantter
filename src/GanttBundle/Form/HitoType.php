<?php

namespace GanttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HitoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('texto', null,array('label' => 'Texto', 'required' => true,'attr' => array('class'=>'form-control')))
            ->add('fecha', 'date', array('widget' => 'choice', 'attr' => array('readonly' => true,'class'=>'form-control'), 'label' => 'Fecha'))
            ;
            //->add('concurso');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GanttBundle\Entity\Hito'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ganttbundle_hito';
    }


}
