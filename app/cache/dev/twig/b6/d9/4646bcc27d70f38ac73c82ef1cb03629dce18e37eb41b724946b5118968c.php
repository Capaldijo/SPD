<?php

/* DescartesUtilisateurBundle:Utilisateur:sendMessage.html.twig */
class __TwigTemplate_b6d94646bcc27d70f38ac73c82ef1cb03629dce18e37eb41b724946b5118968c extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessage");
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
        echo "\t\t\t
\t\t\t<br />
\t\t\t<div>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "loginDest"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "loginDest"), 'widget', array("value" => "Destinataire: "));
        echo "</div><br />

\t\t\t<div>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "sujetMessage"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "sujetMessage"), 'widget', array("value" => "Sujet: "));
        echo "</div><br />

\t\t\t<div>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "contenuMessage"), 'errors');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), "contenuMessage"), 'widget', array("value" => "Message: "));
        echo "</div><br />

\t\t\t";
        // line 25
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMessage"]) ? $context["formMessage"] : $this->getContext($context, "formMessage")), 'rest');
        echo "

\t\t\t";
        // line 28
        echo "\t\t\t<div id=\"buttonSdMess\" >
\t\t\t\t<input type=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Envoyer\"/>
\t\t\t</div>
\t\t\t<br />
\t\t</form>

";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:sendMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 25,  69 => 21,  62 => 19,  55 => 17,  51 => 15,  45 => 12,  38 => 9,  31 => 4,  28 => 3,);
    }
}
