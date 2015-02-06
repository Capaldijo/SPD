<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1d6ca48616a678b60beb76acb391f42e3015a9dde8f9529f862dd2bd6a6a64e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  266 => 116,  250 => 108,  211 => 92,  185 => 78,  175 => 74,  113 => 46,  20 => 1,  313 => 151,  300 => 140,  297 => 139,  280 => 125,  272 => 119,  265 => 115,  236 => 103,  222 => 99,  216 => 97,  165 => 72,  155 => 65,  137 => 53,  129 => 51,  90 => 38,  180 => 90,  170 => 74,  127 => 56,  81 => 24,  77 => 31,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 102,  233 => 100,  231 => 97,  226 => 94,  200 => 86,  194 => 82,  188 => 79,  161 => 78,  148 => 73,  124 => 55,  118 => 54,  104 => 41,  97 => 38,  70 => 25,  34 => 8,  76 => 25,  58 => 18,  23 => 4,  84 => 31,  270 => 118,  260 => 37,  256 => 36,  251 => 35,  248 => 108,  242 => 101,  228 => 101,  225 => 97,  195 => 86,  172 => 115,  152 => 64,  150 => 60,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 113,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 76,  169 => 60,  140 => 55,  132 => 55,  128 => 49,  107 => 43,  61 => 20,  273 => 119,  269 => 117,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 98,  224 => 93,  221 => 95,  219 => 76,  217 => 94,  208 => 68,  204 => 92,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  119 => 48,  102 => 32,  71 => 24,  67 => 20,  63 => 23,  59 => 18,  38 => 8,  94 => 28,  89 => 33,  85 => 32,  75 => 24,  68 => 20,  56 => 21,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 32,  78 => 29,  46 => 14,  27 => 4,  44 => 11,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 77,  171 => 61,  166 => 69,  163 => 109,  158 => 66,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  121 => 46,  117 => 51,  105 => 71,  91 => 27,  62 => 19,  49 => 14,  25 => 3,  24 => 7,  19 => 2,  79 => 31,  72 => 21,  69 => 23,  47 => 9,  40 => 11,  37 => 8,  22 => 2,  246 => 107,  157 => 56,  145 => 58,  139 => 45,  131 => 52,  123 => 47,  120 => 35,  115 => 46,  111 => 45,  108 => 42,  101 => 29,  98 => 44,  96 => 36,  83 => 36,  74 => 25,  66 => 23,  55 => 17,  52 => 15,  50 => 10,  43 => 4,  41 => 9,  35 => 8,  32 => 4,  29 => 5,  209 => 93,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 73,  164 => 59,  162 => 67,  154 => 75,  149 => 51,  147 => 59,  144 => 49,  141 => 64,  133 => 52,  130 => 57,  125 => 50,  122 => 56,  116 => 52,  112 => 51,  109 => 46,  106 => 42,  103 => 28,  99 => 41,  95 => 37,  92 => 46,  86 => 32,  82 => 28,  80 => 28,  73 => 30,  64 => 20,  60 => 16,  57 => 21,  54 => 16,  51 => 16,  48 => 12,  45 => 6,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
