<?php

/* DescartesEvenementBundle:Evenement:permissionrefuse.html.twig */
class __TwigTemplate_9a971cfa9da4d56965036ab0a0bedfd56b8a4dbfe9eb439fa64ebae1d2c4d767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DescartesEvenementBundle::EvenementLayout.html.twig");

        $this->blocks = array(
            'contentBlock' => array($this, 'block_contentBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DescartesEvenementBundle::EvenementLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contentBlock($context, array $blocks = array())
    {
        // line 5
        echo "

\t<div class=\"post excerpt  lino0 removebordertop\">
\t\t<header>\t\t\t\t\t\t
\t\t\t<h2 class=\"title\">
\t\t\t\tPermission refusé
\t\t\t</h2>
\t\t</header><!--.header-->

\t\t<div class=\"post-content image-caption-format-1\">
\t\t\t<p>Vous devez être connecté pour acceder à cette page.</p>
\t\t</div>
\t</div><!--.post excerpt-->


";
    }

    public function getTemplateName()
    {
        return "DescartesEvenementBundle:Evenement:permissionrefuse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 69,  137 => 61,  129 => 57,  90 => 38,  180 => 90,  170 => 85,  127 => 37,  81 => 22,  77 => 20,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  124 => 55,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  76 => 25,  58 => 15,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 69,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 30,  61 => 23,  273 => 119,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  119 => 51,  102 => 32,  71 => 18,  67 => 26,  63 => 19,  59 => 19,  38 => 9,  94 => 28,  89 => 33,  85 => 32,  75 => 24,  68 => 20,  56 => 21,  87 => 36,  21 => 2,  26 => 6,  93 => 28,  88 => 32,  78 => 27,  46 => 13,  27 => 4,  44 => 9,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 72,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 71,  91 => 27,  62 => 19,  49 => 19,  25 => 3,  24 => 4,  19 => 1,  79 => 31,  72 => 25,  69 => 26,  47 => 11,  40 => 8,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 72,  139 => 45,  131 => 52,  123 => 47,  120 => 35,  115 => 43,  111 => 31,  108 => 36,  101 => 29,  98 => 44,  96 => 36,  83 => 36,  74 => 14,  66 => 23,  55 => 18,  52 => 19,  50 => 11,  43 => 4,  41 => 12,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 75,  149 => 51,  147 => 66,  144 => 49,  141 => 64,  133 => 55,  130 => 57,  125 => 44,  122 => 56,  116 => 52,  112 => 51,  109 => 46,  106 => 42,  103 => 45,  99 => 41,  95 => 28,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 30,  64 => 22,  60 => 16,  57 => 21,  54 => 18,  51 => 15,  48 => 14,  45 => 12,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 5,);
    }
}
