<?php

/* DescartesRechercheBundle:Recherche:search.html.twig */
class __TwigTemplate_30b220853a16cb5bba0d4db0a7cd9d3d2f160c07110679348d8951acf866318b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DescartesRechercheBundle::RechercheLayout.html.twig");

        $this->blocks = array(
            'descartes_rechercheBlock' => array($this, 'block_descartes_rechercheBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DescartesRechercheBundle::RechercheLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_descartes_rechercheBlock($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div id=\"tab-2\" class=\"widget widget-sidebar widget_tab\">
\t\t<div id=\"tabber\">
\t\t\t<div class=\"inside\">
\t\t\t\t<div style=\"display: block;\" id=\"popular-posts\">
\t\t\t\t\t<ul>
\t";
        // line 10
        if ((((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null) != null) && ((isset($context["events"]) ? $context["events"] : null) != null))) {
            // line 11
            echo "\t\t<h4>Sorties</h4>
\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 13
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"105\">
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<p class=\"entry-title\">
\t\t\t\t\t\t<a title=\"\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t";
                // line 23
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire") != 0)) {
                    // line 24
                    echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"comm\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire"), "html", null, true);
                    echo "</span> Commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                } else {
                    // line 28
                    echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\tPas de commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t
\t\t\t\t</div> <!--end .info-->

\t\t\t\t<div class=\"clear\"></div>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t<br />
\t\t<hr style=\"text-align:center; margin: 0 auto; height:1px; border:none; color:#1C8B78; background-color:#1C8B78;\">
\t\t<br />
\t\t<h4>Utilisateurs</h4>
\t\t";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 43
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t";
                // line 45
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id")))) {
                    // line 46
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\" />
\t\t\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\"/>
\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t \t\t<p class=\"entry-title\"><br />
\t\t\t \t\t\t<a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname")), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t \t\t</p>\t\t\t\t\t\t\t
\t\t    \t</div> <!--end .info-->

\t\t\t\t<div class=\"clear\"></div>\t\t\t\t\t
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t";
        } elseif (((isset($context["events"]) ? $context["events"] : null) != null)) {
            // line 65
            echo "\t\t<h4>Sorties</h4>
\t\t";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 67
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<img src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"105\">
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<p class=\"entry-title\">
\t\t\t\t\t\t<a title=\"\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t";
                // line 77
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire") != 0)) {
                    // line 78
                    echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"comm\">";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire"), "html", null, true);
                    echo "</span> Commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\tPas de commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t
\t\t\t\t</div> <!--end .info-->

\t\t\t\t<div class=\"clear\"></div>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t";
        } elseif (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null) != null)) {
            // line 93
            echo "\t\t<h4>Utilisateurs</h4>
\t\t";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 95
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t";
                // line 97
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id")))) {
                    // line 98
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\" />
\t\t\t\t\t";
                } else {
                    // line 100
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\"/>
\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t \t\t<p class=\"entry-title\"><br />
\t\t\t \t\t\t<a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 108
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname")), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t \t\t</p>\t\t\t\t\t\t\t
\t\t    \t</div> <!--end .info-->

\t\t\t\t<div class=\"clear\"></div>\t\t\t\t\t
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t";
        } else {
            // line 117
            echo "\t\tAucun résultat ne correspond à votre recherche.
\t";
        }
        // line 119
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div> <!--end #popular-posts-->
\t\t\t\t<div style=\"display: none;\" class=\"clear\"></div>\t\t
\t\t\t\t</div> <!--end .inside -->\t\t\t
\t\t\t<div class=\"clear\"></div>\t\t
\t\t</div><!--end #tabber -->
\t</div>

";
    }

    public function getTemplateName()
    {
        return "DescartesRechercheBundle:Recherche:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 116,  250 => 108,  211 => 92,  185 => 78,  175 => 74,  113 => 46,  74 => 25,  20 => 1,  313 => 151,  300 => 140,  297 => 139,  280 => 125,  272 => 119,  265 => 115,  236 => 103,  222 => 99,  216 => 97,  165 => 72,  155 => 65,  137 => 53,  129 => 51,  90 => 38,  83 => 36,  180 => 90,  170 => 74,  127 => 56,  81 => 30,  77 => 31,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 102,  233 => 100,  231 => 97,  226 => 94,  200 => 86,  194 => 82,  188 => 79,  161 => 78,  148 => 73,  145 => 58,  124 => 55,  120 => 35,  118 => 54,  104 => 41,  97 => 38,  70 => 25,  34 => 8,  96 => 36,  76 => 25,  58 => 15,  52 => 15,  23 => 3,  84 => 31,  270 => 118,  260 => 37,  256 => 36,  251 => 35,  248 => 108,  242 => 101,  228 => 101,  225 => 97,  195 => 86,  172 => 115,  152 => 64,  150 => 60,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  37 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 113,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 76,  169 => 60,  140 => 55,  132 => 55,  128 => 49,  111 => 45,  107 => 43,  61 => 20,  273 => 119,  269 => 117,  254 => 92,  246 => 107,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 98,  224 => 93,  221 => 95,  219 => 76,  217 => 94,  208 => 68,  204 => 92,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 48,  108 => 42,  102 => 32,  71 => 24,  67 => 26,  63 => 19,  59 => 18,  47 => 9,  38 => 9,  94 => 28,  89 => 33,  85 => 32,  79 => 31,  75 => 24,  68 => 20,  56 => 21,  50 => 11,  29 => 6,  87 => 36,  72 => 25,  55 => 18,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 32,  78 => 29,  46 => 13,  27 => 4,  40 => 12,  44 => 12,  35 => 8,  31 => 4,  41 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 77,  171 => 61,  166 => 69,  163 => 109,  158 => 66,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 51,  115 => 46,  105 => 71,  101 => 29,  91 => 36,  69 => 23,  66 => 23,  62 => 21,  49 => 14,  32 => 3,  25 => 3,  24 => 4,  43 => 4,  22 => 2,  19 => 1,  209 => 93,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 73,  164 => 59,  162 => 67,  154 => 75,  149 => 51,  147 => 59,  144 => 49,  141 => 64,  133 => 52,  130 => 57,  125 => 50,  122 => 56,  116 => 52,  112 => 51,  109 => 46,  106 => 42,  103 => 42,  99 => 41,  95 => 37,  92 => 46,  86 => 32,  82 => 28,  80 => 28,  73 => 30,  64 => 20,  60 => 16,  57 => 21,  54 => 16,  51 => 16,  48 => 13,  45 => 12,  42 => 8,  39 => 10,  36 => 6,  33 => 4,  30 => 5,);
    }
}
