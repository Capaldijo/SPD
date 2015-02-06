<?php

/* DescartesUtilisateurBundle:Utilisateur:readMessage.html.twig */
class __TwigTemplate_ed1c9970549446185a8664ae551b3f6dc1e10bfd5de55f3c7db11696b051148a extends Twig_Template
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
        echo "
\t<h1 align=\"center\">Mes Messages</h1>

\t";
        // line 7
        if (((isset($context["messagesList"]) ? $context["messagesList"] : $this->getContext($context, "messagesList")) == null)) {
            // line 8
            echo "\t\tVous n'avez pour le moment aucun messages.
\t";
        } else {
            // line 10
            echo "
\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesList"]) ? $context["messagesList"] : $this->getContext($context, "messagesList")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "\t\t\t<div id=\"RdMessage\">
\t\t\t\t<div id='delMessButton' >\t
\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_delMessage", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id_message"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CancelButton.png"), "html", null, true);
                echo "\" id=\"cancelButton\" title=\"Supprimer\" /></a>
\t\t\t\t</div>
\t\t\t\t<table id=\"RdMessagetable\" style=\"border: 0px\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 19
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id")))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id"))), "html", null, true);
                    echo "\"  alt=\"ImageProfil\" width=\"48\" height=\"48\" id=\"thumbImgProfil\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  alt=\"ImageProfil\" width=\"48\" height=\"48\" id=\"thumbImgProfil\" />
\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"vertical-align: middle\">
\t\t\t\t\t\t\t<h5>";
                // line 26
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "firstname")), "html", null, true);
                echo "<h5>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>


\t\t\t\t<div id=\"ContMessage\">
\t\t\t\t\t<b>Sujet: </b>
\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "sujet_message")), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"ContMessage\">
\t\t\t\t\t";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "contenu_message"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"DateMessage\">
\t\t\t\t\técrit à ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "date"), "H"), "html", null, true);
                echo "h";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "date"), "m"), "html", null, true);
                echo " le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "date"), "d/m"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br /><br />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t
\t\t<form action=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_readMessage");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formShowMessage"]) ? $context["formShowMessage"] : $this->getContext($context, "formShowMessage")), 'enctype');
            echo ">

\t\t\t";
            // line 52
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formShowMessage"]) ? $context["formShowMessage"] : $this->getContext($context, "formShowMessage")), 'errors');
            echo "

\t\t\t<div id=\"buttonProfil\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Afficher plus de messages\"/>
\t\t\t</div>
\t\t\t";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formShowMessage"]) ? $context["formShowMessage"] : $this->getContext($context, "formShowMessage")), 'rest');
            echo "
\t\t\t
\t\t</form>
\t";
        }
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:readMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  143 => 57,  134 => 52,  127 => 49,  124 => 48,  109 => 43,  103 => 40,  96 => 36,  81 => 26,  77 => 24,  71 => 22,  65 => 20,  63 => 19,  53 => 14,  49 => 12,  45 => 11,  42 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
