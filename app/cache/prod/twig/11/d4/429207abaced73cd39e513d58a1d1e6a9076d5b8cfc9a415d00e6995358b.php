<?php

/* DescartesUtilisateurBundle:Utilisateur:setting.html.twig */
class __TwigTemplate_11d4429207abaced73cd39e513d58a1d1e6a9076d5b8cfc9a415d00e6995358b extends Twig_Template
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
\t\t<h1 align=\"center\">Configuration</h1>


\t\t<div id=\"infoProfil\">
\t\t\tMes Informations Personnelles
\t\t</div>

\t\t<form id=\"profilTableMain\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_setting");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfil"]) ? $context["formProfil"] : null), 'enctype');
        echo ">

\t\t\t";
        // line 15
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfil"]) ? $context["formProfil"] : null), 'errors');
        echo "

\t\t\t";
        // line 18
        echo "\t\t\t<table style=\"border: 0px\"> <br />
\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Nom </b></label></td>
\t\t\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "lastname"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "lastname"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Prénom </b></label></td>
\t\t\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "firstname"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "firstname"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Mail </b></label></td>
\t\t\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "email"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "email"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Mot de passe </b></label></td>
\t\t\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "password"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "password"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Numéro de téléphone </b></label></td>
\t\t\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "numTel"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "numTel"), 'widget');
        echo "</td>
\t\t\t\t</tr
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Votre sexe </b></label></td>
\t\t\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "sexe"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "sexe"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Date de naissance </b></label></td>
\t\t\t\t\t<td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "dateNaissance"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "dateNaissance"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td id=\"labelCentre\"><label><b>Centres d'interêts </b></label></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "centreInteret"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "centreInteret"), 'widget');
        echo " 
\t\t\t\t\t\t<br />Veuillez en choisir <u>obligatoirement</u> 6.
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>UFR </b></label></td>
\t\t\t\t\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "ufr"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : null), "ufr"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 69
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfil"]) ? $context["formProfil"] : null), 'rest');
        echo "

\t\t\t</table>
\t\t\t<br />
\t\t\t<div id=\"buttonProfil\">
\t\t\t\t<input type=\"submit\" id=\"submit\" class=\"btn btn-primary\" />
\t\t\t</div>
\t\t\t<br />
\t\t</form>

\t\t<br /> <br />

\t\t<div id=\"infoProfil\">
\t\t\tMon avatar
\t\t</div>
\t\t
\t\t<form id=\"profilTableMain\" action=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_setting");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formImage"]) ? $context["formImage"] : null), 'enctype');
        echo ">

\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Image </b></label></td>
\t\t\t\t\t<td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formImage"]) ? $context["formImage"] : null), "file"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formImage"]) ? $context["formImage"] : null), "file"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formImage"]) ? $context["formImage"] : null), 'rest');
        echo "
\t\t\t
\t\t\t<br />
\t\t\t<div id=\"buttonProfil\">
\t\t\t\t<input type=\"submit\" id=\"submit\" value=\"Modifier\" class=\"btn btn-primary\" />
\t\t\t</div>
\t\t\t<br />\t
\t\t</form>

";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 90,  170 => 85,  127 => 49,  81 => 26,  77 => 24,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  145 => 72,  124 => 48,  120 => 55,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  96 => 36,  76 => 25,  58 => 21,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 69,  134 => 52,  126 => 53,  65 => 20,  53 => 14,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 18,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 53,  131 => 52,  119 => 51,  108 => 36,  102 => 32,  71 => 22,  67 => 23,  63 => 19,  59 => 21,  47 => 9,  38 => 9,  94 => 28,  89 => 36,  85 => 25,  79 => 31,  75 => 24,  68 => 20,  56 => 13,  50 => 11,  29 => 3,  87 => 36,  72 => 32,  55 => 17,  21 => 2,  26 => 6,  98 => 31,  93 => 39,  88 => 32,  78 => 30,  46 => 13,  27 => 4,  40 => 8,  44 => 9,  35 => 12,  31 => 4,  41 => 12,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 77,  156 => 66,  151 => 63,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 26,  66 => 23,  62 => 19,  49 => 12,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 57,  125 => 44,  122 => 79,  116 => 48,  112 => 51,  109 => 46,  106 => 43,  103 => 40,  99 => 41,  95 => 28,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 18,  51 => 15,  48 => 15,  45 => 12,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
