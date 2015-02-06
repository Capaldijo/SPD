<?php

/* DescartesUtilisateurBundle::UserLayout.html.twig */
class __TwigTemplate_722035876f0b63a8f85aa08efa723b843c13130cb67efbcfd5aa894e12b53076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Layout.html.twig");

        $this->blocks = array(
            'mainBlock' => array($this, 'block_mainBlock'),
            'descartes_utilisateurblock' => array($this, 'block_descartes_utilisateurblock'),
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

    // line 3
    public function block_mainBlock($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        $this->displayBlock('descartes_utilisateurblock', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 5
    public function block_descartes_utilisateurblock($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle::UserLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  37 => 8,  35 => 5,  32 => 4,  29 => 3,  312 => 141,  307 => 138,  295 => 129,  289 => 127,  283 => 123,  276 => 120,  273 => 119,  261 => 110,  255 => 108,  249 => 104,  242 => 101,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  224 => 93,  217 => 88,  214 => 87,  200 => 86,  194 => 84,  188 => 82,  182 => 80,  179 => 79,  161 => 78,  158 => 77,  154 => 75,  148 => 73,  145 => 72,  143 => 71,  130 => 60,  124 => 57,  120 => 55,  118 => 54,  112 => 51,  104 => 46,  97 => 41,  93 => 39,  89 => 37,  87 => 36,  78 => 30,  70 => 25,  56 => 13,  50 => 11,  44 => 9,  42 => 5,  34 => 5,  31 => 4,  28 => 3,);
    }
}
