<?php

/* DescartesUtilisateurBundle:Utilisateur:friends.html.twig */
class __TwigTemplate_dd31e7547dd49a0c004cc8d3c1ee6fab79392ae37c947b7592c8d23a002dbf09 extends Twig_Template
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
\t<h1>Mes Amis</h1>

\t";
        // line 7
        if (((isset($context["friendsList"]) ? $context["friendsList"] : $this->getContext($context, "friendsList")) == null)) {
            // line 8
            echo "\t\tVous n'avez pour le moment aucun ami(e)s.
\t";
        } else {
            // line 10
            echo "
\t\t<div id=\"tab-2\" class=\"widget widget-sidebar widget_tab\">
\t\t\t\t<div id=\"tabber\">
\t\t\t\t\t<div class=\"inside\">
\t\t\t\t\t\t<div style=\"display: block;\" id=\"popular-posts\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friendsList"]) ? $context["friendsList"] : $this->getContext($context, "friendsList")));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 20
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "id")))) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "id"))), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\" />
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t \t\t<p class=\"entry-title\"><br />
\t\t\t\t\t\t\t\t\t \t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "firstname")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t \t\t</p>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    \t</div> <!--end .info-->

\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>\t\t\t\t    
\t\t\t\t\t
\t\t\t\t\t\t<div style=\"display: none;\" class=\"clear\"></div>
\t\t\t\t\t
\t\t\t\t\t</div> <!--end .inside -->
\t\t\t\t
\t\t\t\t<div class=\"clear\"></div>
\t\t\t
\t\t\t</div><!--end #tabber -->

\t\t</div>

\t";
        }
        // line 54
        echo "
";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 54,  101 => 40,  84 => 31,  80 => 30,  73 => 25,  67 => 23,  61 => 21,  59 => 20,  54 => 17,  50 => 16,  42 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
