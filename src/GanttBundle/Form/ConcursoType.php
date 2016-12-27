<?php

namespace GanttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ConcursoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaInicio', 'date', array('widget' => 'choice', 'attr' => array('readonly' => true,'class'=>'form-control'), 'label' => 'Fecha de inicio'))
            ->add('fechaFinal', 'date', array('widget' => 'choice', 'attr' => array('readonly' => true,'class'=>'form-control'), 'label' => 'Fecha Final'))
            ->add('nombre', null,array('label' => 'Nombre', 'required' => true,'attr' => array('class'=>'form-control')))
            ->add('link', null,array('label' => 'Link', 'required' => true,'attr' => array('class'=>'form-control')))
            ->add('descripcion', null,array('label' => 'Descripción', 'required' => true,'attr' => array('class'=>'form-control')))
            ->add('color', null,array('label' => 'Color', 'required' => true,'attr' => array('class'=>'form-control jscolor')))
            ->add('fondolinea', EntityType::class, array(
                'label' => 'Fondo o Linea',
                'group_by' => 'programa.getGroupName',
                'attr' => array('class'=>'form-control'),
                'class' => 'GanttBundle:FondoLinea',
                'choice_label' => 'nombre',
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GanttBundle\Entity\Concurso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ganttbundle_concurso';
    }


}
