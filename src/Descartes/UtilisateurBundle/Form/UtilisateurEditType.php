<?php

namespace Descartes\UtilisateurBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurEditType extends UtilisateurType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
        parent::buildForm($builder, $options);

        // On supprime le champ qu'on ne veut pas dans le formulaire de modification
        $builder->remove('username');

        // On ajoute les champs qu'on veut voir apparaitre dans le formulaire de modification
        $builder->add('numTel',   'text', array('required' => false))
                ->add('centreInteret',  'choice', array('choices' => array('Sport' => 'Sport  ', 'Musique' => 'Musique  ', 'Voiture' => 'Voiture ',
                                                                            'Voyage' => 'Voyage', 'Lecture' => 'Lecture', 'Series' => 'Séries',
                                                                            'Cinema' => 'Cinéma', 'TV' => 'TV', 'Cuisine' => 'Cuisine',
                                                                            'Art' => 'Art', 'Danse' => 'Danse', 'Jeux Video' => 'Jeux Vidéo',
                                                                            'Photographie' => 'Photographie', 'Shopping' => 'Shopping',
                                                                            'Technologie' => 'Technologie', 'Science' => 'Science',
                                                                            'Animaux' => 'Animaux', 'Art martiaux' => 'Art martiaux'),
                                                        'multiple' => true, 'required' => false));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'descartes_utilisateurbundle_utilisateuredit';
    }
}
