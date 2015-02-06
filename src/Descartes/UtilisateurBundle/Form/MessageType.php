<?php

namespace Descartes\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MessageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('loginDest', 'text', array('attr' => array('size' => '70')))
            ->add('sujetMessage',   'text', array('attr' => array('size' => '70')))
            ->add('contenuMessage', 'textarea', array('attr' => array('cols' => '72', 'rows' => '15'),))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Descartes\UtilisateurBundle\Entity\Message'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'descartes_utilisateurbundle_message';
    }
}
