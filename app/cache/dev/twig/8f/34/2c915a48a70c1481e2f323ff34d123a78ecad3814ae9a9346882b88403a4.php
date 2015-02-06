<?php

/* DescartesRechercheBundle:Recherche:index.html.twig */
class __TwigTemplate_8f342c915a48a70c1481e2f323ff34d123a78ecad3814ae9a9346882b88403a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'text_widget' => array($this, 'block_text_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 2
        echo "



<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("descartes_recherche_homepage");
        echo "\" method=\"POST\" id=\"searchform\" class=\"search-form\" _lpchecked=\"1\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t<fieldset>
\t\t";
        // line 8
        $this->displayBlock('text_widget', $context, $blocks);
        // line 13
        echo "\t\t<input id=\"search-image\" class=\"sbutton\" value=\"\" type=\"submit\">
\t</fieldset>
\t
</form>";
    }

    // line 8
    public function block_text_widget($context, array $blocks = array())
    {
        // line 9
        echo "\t\t    <div class=\"text_widget\">
\t\t        <input type=\"text\" class=\"s\" value=\"Rechercher sur le site\" onblur=\"if (this.value == '') {this.value = 'Rechercher sur le site';}\" onfocus=\"if (this.value == 'Rechercher sur le site') {this.value = '';}\" name=\"form[search]\" id=\"form.search\"/>
\t\t    </div>
\t\t";
    }

    public function getTemplateName()
    {
        return "DescartesRechercheBundle:Recherche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  63 => 23,  55 => 17,  33 => 7,  24 => 3,  92 => 46,  82 => 39,  72 => 32,  50 => 16,  44 => 8,  36 => 2,  30 => 5,  27 => 4,  21 => 2,  19 => 1,  273 => 99,  270 => 98,  264 => 38,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  183 => 123,  172 => 115,  163 => 109,  152 => 100,  150 => 98,  134 => 85,  126 => 80,  122 => 79,  116 => 76,  112 => 75,  105 => 71,  87 => 61,  79 => 55,  73 => 53,  67 => 51,  65 => 50,  53 => 40,  51 => 34,  48 => 33,  46 => 12,  22 => 2,  43 => 4,  37 => 13,  35 => 8,  32 => 3,  29 => 2,  127 => 37,  120 => 35,  111 => 31,  107 => 30,  101 => 70,  93 => 28,  89 => 27,  81 => 22,  77 => 20,  71 => 18,  60 => 16,  58 => 21,  47 => 9,  42 => 8,  39 => 10,  34 => 6,  31 => 5,  28 => 6,);
    }
}
