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
        if (((isset($context["friendsList"]) ? $context["friendsList"] : null) == null)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["friendsList"]) ? $context["friendsList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 20
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "id")))) {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "id"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : null), "firstname")), "html", null, true);
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
        return array (  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 98,  134 => 85,  126 => 80,  65 => 50,  53 => 40,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 21,  273 => 99,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 23,  63 => 15,  59 => 20,  47 => 9,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  79 => 55,  75 => 17,  68 => 14,  56 => 9,  50 => 16,  29 => 3,  87 => 61,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 20,  27 => 4,  40 => 8,  44 => 12,  35 => 12,  31 => 4,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 79,  116 => 76,  112 => 75,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 30,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 17,  51 => 34,  48 => 33,  45 => 6,  42 => 10,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
