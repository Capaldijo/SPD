<?php

/* DescartesEvenementBundle:Evenement:participants.html.twig */
class __TwigTemplate_7305e4f180c49e1d65c50a6d1a12d611792db34e82fef2888ee272cb1ccb23a4 extends Twig_Template
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
\t";
        // line 5
        if (((isset($context["participants"]) ? $context["participants"] : null) == null)) {
            // line 6
            echo "\t\tVous n'avez pour le moment aucun participant.
\t";
        } else {
            // line 8
            echo "\t\t<h4>Liste des participants</h4>
\t\t<div id=\"tab-2\" class=\"widget widget-sidebar widget_tab\">
\t\t\t\t<div id=\"tabber\">
\t\t\t\t\t<div class=\"inside\">
\t\t\t\t\t\t<div style=\"display: block;\" id=\"popular-posts\">
\t\t\t\t\t\t\t<br \\>&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => (isset($context["id_event"]) ? $context["id_event"] : null))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"button\" value=\"Retour à la sortie\" >
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) ? $context["participants"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["particip"]) {
                // line 19
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 22
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["particip"]) ? $context["particip"] : null), "id")))) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["particip"]) ? $context["particip"] : null), "id"))), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\" />
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"auto\" width=\"65\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t \t\t<p class=\"entry-title\"><br />
\t\t\t\t\t\t\t\t\t \t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["particip"]) ? $context["particip"] : null), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["particip"]) ? $context["particip"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["particip"]) ? $context["particip"] : null), "firstname")), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['particip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
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
        // line 56
        echo "
";
    }

    public function getTemplateName()
    {
        return "DescartesEvenementBundle:Evenement:participants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 69,  137 => 61,  129 => 57,  90 => 38,  83 => 36,  180 => 90,  170 => 85,  127 => 37,  81 => 22,  77 => 20,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  145 => 72,  124 => 55,  120 => 35,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  96 => 36,  76 => 25,  58 => 15,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 69,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  37 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 31,  107 => 30,  61 => 23,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 51,  108 => 36,  102 => 32,  71 => 18,  67 => 26,  63 => 19,  59 => 19,  47 => 11,  38 => 9,  94 => 28,  89 => 33,  85 => 32,  79 => 31,  75 => 24,  68 => 20,  56 => 21,  50 => 11,  29 => 2,  87 => 36,  72 => 25,  55 => 18,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 32,  78 => 27,  46 => 13,  27 => 4,  40 => 8,  44 => 9,  35 => 4,  31 => 4,  41 => 12,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 72,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 51,  115 => 43,  105 => 71,  101 => 29,  91 => 27,  69 => 26,  66 => 23,  62 => 19,  49 => 19,  32 => 3,  25 => 3,  24 => 4,  43 => 4,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 66,  144 => 49,  141 => 64,  133 => 55,  130 => 57,  125 => 44,  122 => 56,  116 => 52,  112 => 51,  109 => 46,  106 => 42,  103 => 45,  99 => 41,  95 => 28,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 30,  64 => 22,  60 => 16,  57 => 21,  54 => 18,  51 => 15,  48 => 14,  45 => 12,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 5,);
    }
}
