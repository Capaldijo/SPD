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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        // line 2
        echo "



<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("descartes_recherche_homepage");
        echo "\" method=\"POST\" id=\"searchform\" class=\"search-form\" _lpchecked=\"1\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
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
        return array (  20 => 1,  313 => 151,  300 => 140,  297 => 139,  280 => 125,  272 => 119,  265 => 115,  236 => 103,  222 => 99,  216 => 97,  165 => 72,  155 => 69,  137 => 53,  129 => 51,  90 => 38,  83 => 36,  180 => 90,  170 => 74,  127 => 56,  81 => 30,  77 => 31,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  145 => 58,  124 => 55,  120 => 35,  118 => 54,  104 => 41,  97 => 41,  70 => 25,  34 => 8,  96 => 36,  76 => 25,  58 => 15,  52 => 19,  23 => 3,  84 => 31,  270 => 118,  260 => 37,  256 => 36,  251 => 35,  248 => 108,  242 => 101,  228 => 101,  225 => 20,  195 => 86,  172 => 115,  152 => 100,  150 => 60,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  37 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 113,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 96,  177 => 76,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 31,  107 => 46,  61 => 23,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 92,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 47,  108 => 42,  102 => 32,  71 => 18,  67 => 26,  63 => 19,  59 => 18,  47 => 9,  38 => 9,  94 => 28,  89 => 33,  85 => 32,  79 => 31,  75 => 24,  68 => 20,  56 => 21,  50 => 11,  29 => 6,  87 => 36,  72 => 25,  55 => 18,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 32,  78 => 29,  46 => 13,  27 => 4,  40 => 12,  44 => 8,  35 => 8,  31 => 5,  41 => 12,  28 => 6,  201 => 92,  196 => 90,  183 => 78,  171 => 61,  166 => 71,  163 => 109,  158 => 72,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 51,  115 => 46,  105 => 71,  101 => 29,  91 => 36,  69 => 22,  66 => 23,  62 => 21,  49 => 14,  32 => 3,  25 => 3,  24 => 4,  43 => 4,  22 => 2,  19 => 1,  209 => 93,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 73,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 59,  144 => 49,  141 => 64,  133 => 52,  130 => 57,  125 => 50,  122 => 56,  116 => 52,  112 => 51,  109 => 46,  106 => 42,  103 => 45,  99 => 41,  95 => 37,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 30,  64 => 20,  60 => 16,  57 => 21,  54 => 16,  51 => 16,  48 => 14,  45 => 12,  42 => 8,  39 => 10,  36 => 6,  33 => 4,  30 => 5,);
    }
}
