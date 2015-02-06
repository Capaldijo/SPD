<?php

/* DescartesUtilisateurBundle:Utilisateur:index.html.twig */
class __TwigTemplate_d39a777f958175514841fa3722c22f7dea51bce2ae01a5ec07b1b688172ba84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul id=\"menu-menu\" class=\"menu sf-js-enabled\">
\t<li id=\"menu-item-113\" class=\"icon-wrench menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-113\">
\t\t<a class=\"sf-with-ul\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_readMessage");
        echo "\">Mes Message<span class=\"sf-sub-indicator\"> »</span>
\t\t\t<span class=\"sf-sub-indicator\"> »</span></a>
\t\t<ul style=\"display: none; visibility: hidden;\" class=\"sub-menu sf-js-enabled\">
\t\t\t<li id=\"menu-item-107\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessage");
        echo "\"> Envoyer un message</a>
\t\t\t</li>
\t\t\t<li id=\"menu-item-107\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_readMessage");
        echo "\"> Lire mes messages </a>
\t\t\t</li>
\t\t</ul>
\t</li>
\t<li id=\"menu-item-110\" class=\"icon-wrench menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-110\">
\t\t<a class=\"sf-with-ul\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_friends");
        echo "\">Mes contacts<span class=\"sf-sub-indicator\"> »</span>
\t\t\t<span class=\"sf-sub-indicator\"> »</span></a>
\t\t<ul style=\"display: none; visibility: hidden;\" class=\"sub-menu sf-js-enabled\">
\t\t\t";
        // line 18
        if (((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")) == null)) {
            // line 19
            echo "\t\t\t\t<li id=\"menu-item-106\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t\t&nbsp;&nbsp;Aucun amis disponible&nbsp;&nbsp;
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 24
                echo "\t\t\t\t<li id=\"menu-item-107\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "firstname")), "html", null, true);
                echo "</a>
\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t<li id=\"menu-item-106\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t\t<a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_friends");
            echo "\" >Voir mes contacts</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 32
        echo "\t\t</ul>
\t</li>
\t<li id=\"menu-item-114\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-114\">
\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
        echo "\">Profil</a>
\t</li>
\t<li id=\"menu-item-115\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115\">
\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
\t</li>
</ul>\t\t\t\t\t\t\t\t<a href=\"#\" id=\"pull\">Menu</a>
";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  93 => 35,  88 => 32,  82 => 29,  79 => 28,  66 => 25,  63 => 24,  58 => 23,  52 => 19,  50 => 18,  44 => 15,  36 => 10,  30 => 7,  23 => 3,  19 => 1,);
    }
}
