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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), 'enctype');
        echo ">

\t\t\t";
        // line 15
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), 'errors');
        echo "

\t\t\t";
        // line 18
        echo "\t\t\t<table style=\"border: 0px\"> <br />
\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Nom </b></label></td>
\t\t\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "lastname"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "lastname"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Prénom </b></label></td>
\t\t\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "firstname"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "firstname"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Mail </b></label></td>
\t\t\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "email"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "email"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Mot de passe </b></label></td>
\t\t\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "password"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "password"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Numéro de téléphone </b></label></td>
\t\t\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "numTel"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "numTel"), 'widget');
        echo "</td>
\t\t\t\t</tr
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Votre sexe </b></label></td>
\t\t\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "sexe"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "sexe"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Date de naissance </b></label></td>
\t\t\t\t\t<td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "dateNaissance"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "dateNaissance"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td id=\"labelCentre\"><label><b>Centres d'interêts </b></label></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "centreInteret"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "centreInteret"), 'widget');
        echo " 
\t\t\t\t\t\t<br />Veuillez en choisir <u>obligatoirement</u> 6.
\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>UFR </b></label></td>
\t\t\t\t\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "ufr"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), "ufr"), 'widget');
        echo "</td>
\t\t\t\t</tr>

\t\t\t\t";
        // line 69
        echo "\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formProfil"]) ? $context["formProfil"] : $this->getContext($context, "formProfil")), 'rest');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), 'enctype');
        echo ">

\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><label><b>Image </b></label></td>
\t\t\t\t\t<td>";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), "file"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), "file"), 'widget');
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formImage"]) ? $context["formImage"] : $this->getContext($context, "formImage")), 'rest');
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
        return array (  188 => 93,  180 => 90,  170 => 85,  150 => 69,  142 => 64,  130 => 57,  119 => 51,  109 => 46,  99 => 41,  89 => 36,  79 => 31,  69 => 26,  59 => 21,  54 => 18,  48 => 15,  41 => 12,  31 => 4,  28 => 3,);
    }
}
