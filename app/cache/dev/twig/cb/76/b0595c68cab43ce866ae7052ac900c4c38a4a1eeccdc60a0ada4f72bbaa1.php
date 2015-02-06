<?php

/* DescartesUtilisateurBundle:Utilisateur:sendMessageTo.html.twig */
class __TwigTemplate_cb76b0595c68cab43ce866ae7052ac900c4c38a4a1eeccdc60a0ada4f72bbaa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DescartesUtilisateurBundle::UserLayout.html.twig");

        $this->blocks = array(
            'descartes_utilisateurblock' => array($this, 'block_descartes_utilisateurblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DescartesUtilisateurBundle::UserLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_descartes_utilisateurblock($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t\t<div id=\"infoProfil\">
\t\t\tEnvoyer un message
\t\t</div>

\t\t<form id=\"formSdMessage\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessageTo", array("login" => (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), 'enctype');
        echo ">

\t\t\t";
        // line 12
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), 'errors');
        echo "

\t\t\t";
        // line 15
        echo "\t\t\t<br />
\t\t\t<div = \"SdMessage\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "loginDest"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "loginDest"), 'widget');
        echo "</div><br />

\t\t\t<div = \"SdMessage\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "sujetMessage"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "sujetMessage"), 'widget', array("value" => "Sujet: "));
        echo "</div><br />

\t\t\t<div = \"SdMessage\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "contenuMessage"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "contenuMessage"), 'widget', array("value" => "Message: "));
        echo "</div><br />

\t\t\t";
        // line 24
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), 'rest');
        echo "

\t\t\t<div id=\"buttonSdMess\" >
\t\t\t\t<input type=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\"/>
\t\t\t</div>
\t\t\t<br />
\t\t</form>

";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:sendMessageTo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  81 => 26,  77 => 24,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 82,  161 => 78,  148 => 73,  124 => 48,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  76 => 25,  58 => 21,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 61,  134 => 52,  126 => 53,  65 => 20,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 119,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 53,  119 => 42,  102 => 32,  71 => 22,  67 => 23,  63 => 19,  59 => 20,  38 => 9,  94 => 28,  89 => 37,  85 => 25,  75 => 24,  68 => 20,  56 => 13,  87 => 36,  21 => 2,  26 => 6,  93 => 39,  88 => 32,  78 => 30,  46 => 13,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 77,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 54,  105 => 71,  91 => 27,  62 => 19,  49 => 12,  25 => 3,  24 => 4,  19 => 1,  79 => 28,  72 => 32,  69 => 21,  47 => 9,  40 => 8,  37 => 8,  22 => 1,  246 => 90,  157 => 56,  145 => 72,  139 => 45,  131 => 52,  123 => 47,  120 => 55,  115 => 43,  111 => 37,  108 => 36,  101 => 40,  98 => 31,  96 => 36,  83 => 25,  74 => 14,  66 => 23,  55 => 17,  52 => 19,  50 => 11,  43 => 8,  41 => 7,  35 => 12,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 75,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 79,  116 => 48,  112 => 51,  109 => 43,  106 => 43,  103 => 40,  99 => 38,  95 => 28,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 25,  64 => 17,  60 => 6,  57 => 11,  54 => 16,  51 => 15,  48 => 33,  45 => 12,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
