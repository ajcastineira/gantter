<?php

namespace GanttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ProgramaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', null,array('label' => 'Nombre', 'required' => true,'attr' => array('class'=>'form-control')))
        ->add('agencia', EntityType::class, array(
                'label' => 'Agencia',
                'attr' => array('class'=>'form-control'),
                'class' => 'GanttBundle:Agencia',
                'choice_label' => 'nombre',
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GanttBundle\Entity\Programa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ganttbundle_programa';
    }


}
