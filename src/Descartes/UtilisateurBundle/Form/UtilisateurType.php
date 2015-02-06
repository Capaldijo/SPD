<?php

namespace Descartes\UtilisateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname',              'text', array('label' => 'Nom: '))
            ->add('firstname',           'text', array('label' => 'Prénom '))
            ->add('email',             'email', array('label' => 'Mail '))
            ->add('username',            'text', array('label' => 'Login '))
            ->add('password',              'password', array('label' => 'Mot de passe '))
            ->add('sexe',             'choice', array('label' => true, 'choices' => array('1' => 'Homme', '0' => 'Femme')))
            ->add('dateNaissance',    'birthday', array('label' => 'Date de naissance'))
            ->add('ufr',              'choice', array('label' => 'Ufr','choices' => array('UFR biommédicale' => 'UFR biommédicale', 
                                                                                        'Faculté de chirurgie dentaire' => 'Faculté de chirurgie dentaire',
                                                                                        'Faculté de droit' => 'Faculté de droit',
                                                                                        'Institut Universitaire de Technologie' => 'Institut Universitaire de Technologie',
                                                                                        'UFR de mathématiques et informatique' => 'UFR de mathématiques et informatique',
                                                                                        'Faculté de médecine' => 'Faculté de médecine',
                                                                                        'Faculté des sciences pharmaceutiques et biologiques' => 'Faculté des sciences pharmaceutiques et biologiques',
                                                                                        'Institut de psychologie' => 'Institut de psychologie',
                                                                                        'Faculté des sciences humaines et sociales' => 'Faculté des sciences humaines et sociales',
                                                                                        'UFR STAPS' => 'UFR STAPS')));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Descartes\UtilisateurBundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'descartes_utilisateurbundle_utilisateur';
    }
}
