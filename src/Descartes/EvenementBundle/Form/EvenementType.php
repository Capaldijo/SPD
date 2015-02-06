<?php

namespace Descartes\EvenementBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{

    private $themes;

    public function __construct($themes)
    {
        $this->themes = $themes;
    }
	
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('titre','text', array('attr' => array('size' => '35')))
			->add('image', 'file')
			->add('description','textarea', array('attr' => array('cols' => '37', 'rows' => '5'),))
			->add('adresse','text', array('attr' => array('size' => '35')))
			->add('ville','text', array('attr' => array('size' => '35')))
			->add('tarif','text', array('attr' => array('size' => '35')))
			->add('idThemeev','choice',array('choices' => $this->themes,))
			->add('dateRealisation','datetime')
			->add('nombreParticipant','number',array('required' => false, 'attr' => array('size' => '35')))
			->add('visibilite','checkbox')
		;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Descartes\EvenementBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'descartes_evenementbundle_evenement';
    }
}
