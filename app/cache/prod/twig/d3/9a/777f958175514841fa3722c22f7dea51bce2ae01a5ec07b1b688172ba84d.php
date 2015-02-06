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
        if (((isset($context["friends"]) ? $context["friends"] : null) == null)) {
            // line 19
            echo "\t\t\t\t<li id=\"menu-item-106\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t\t&nbsp;&nbsp;Aucun amis disponible&nbsp;&nbsp;
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 24
                echo "\t\t\t\t<li id=\"menu-item-107\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "username"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "firstname")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"))), "html", null, true);
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
        return array (  58 => 23,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 98,  134 => 85,  126 => 80,  65 => 50,  53 => 40,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 21,  273 => 99,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 23,  63 => 24,  59 => 20,  47 => 9,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  79 => 28,  75 => 17,  68 => 14,  56 => 9,  50 => 18,  29 => 3,  87 => 61,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 32,  78 => 21,  46 => 20,  27 => 4,  40 => 8,  44 => 15,  35 => 12,  31 => 4,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 25,  66 => 25,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 79,  116 => 76,  112 => 75,  109 => 34,  106 => 33,  103 => 32,  99 => 38,  95 => 28,  92 => 21,  86 => 28,  82 => 29,  80 => 30,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 17,  51 => 34,  48 => 33,  45 => 6,  42 => 10,  39 => 9,  36 => 10,  33 => 4,  30 => 7,);
    }
}
