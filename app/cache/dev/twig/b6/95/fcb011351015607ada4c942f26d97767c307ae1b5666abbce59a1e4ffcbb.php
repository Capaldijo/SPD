<?php

/* DescartesEvenementBundle::EvenementLayout.html.twig */
class __TwigTemplate_b695fcb011351015607ada4c942f26d97767c307ae1b5666abbce59a1e4ffcbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Layout.html.twig");

        $this->blocks = array(
            'mainBlock' => array($this, 'block_mainBlock'),
            'contentBlock' => array($this, 'block_contentBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mainBlock($context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('contentBlock', $context, $blocks);
        // line 6
        echo "

";
    }

    // line 4
    public function block_contentBlock($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DescartesEvenementBundle::EvenementLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  37 => 6,  35 => 4,  32 => 3,  29 => 2,  127 => 37,  120 => 35,  111 => 31,  107 => 30,  101 => 29,  93 => 28,  89 => 27,  81 => 22,  77 => 20,  71 => 18,  60 => 16,  58 => 15,  47 => 11,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
