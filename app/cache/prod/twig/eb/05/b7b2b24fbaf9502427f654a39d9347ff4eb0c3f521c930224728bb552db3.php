<?php

/* DescartesEvenementBundle:Evenement:index.html.twig */
class __TwigTemplate_eb05b7b2b24fbaf9502427f654a39d9347ff4eb0c3f521c930224728bb552db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DescartesEvenementBundle::EvenementLayout.html.twig");

        $this->blocks = array(
            'contentBlock' => array($this, 'block_contentBlock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DescartesEvenementBundle::EvenementLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_contentBlock($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "\t";
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "visibilite") == true)) {
                // line 8
                echo "\t\t<div class=\"post excerpt  lino0 removebordertop\">
\t\t\t<header>\t\t\t\t\t\t
\t\t\t\t<h2 class=\"title\">
\t\t\t\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
                echo "</a>
\t\t\t\t</h2>
\t\t\t</header><!--.header-->
\t\t\t<div class=\"featured-thumbnail\">
\t\t\t\t";
                // line 15
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageEvent/") . $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image")))) {
                    // line 16
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                    echo "\" class=\"attachment-featured wp-post-image\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                    echo "\" height=\"200\" width=\"450\">
\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/defaultAvatar.jpg"), "html", null, true);
                    echo "\" class=\"attachment-featured wp-post-image\" alt=\"defaultAvatar\" title=\"defaultAvatar\" width=\"200\" height=\"200\" />
\t\t\t\t";
                }
                // line 20
                echo "\t\t\t</div>\t
\t\t\t<div class=\"post-content image-caption-format-1\">
\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "description"), 0, 400), "html", null, true);
                echo " [...]
\t\t\t</div>
\t\t</div><!--.post excerpt-->

\t\t<div class=\"post-info\">
\t\t\t<span class=\"thetime\">";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "date_realisation"), "d/m/y"), "html", null, true);
                echo "</span>
\t\t\t<span class=\"theauthor\">Auteur <a rel=\"nofollow\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "username"))), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "firstname")), "html", null, true);
                echo "</a></span>
\t\t\t<span class=\"thecategory\">Thème<a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_filtreEvent", array("filtre" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre_theme"))), "html", null, true);
                echo "\" title=\"\" rel=\"nofollow\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre_theme"), "html", null, true);
                echo "</a></span>
\t\t\t<span class=\"thecomment\"><span class=\"comments\">Commentaires</span> <span class=\"comm\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire"), "html", null, true);
                echo "</span></span>
\t\t\t<span class=\"readMore\"><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\" title=\"\" rel=\"bookmark\">lire plus</a></span>
\t\t</div>
\t";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t<p>Pas d'évènements trouvés.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

<!-- Start Pagination
<div class=\"pagination\">
\t<ul>
\t\t<li class=\"current\">
\t\t\t<span class=\"currenttext\">1</span>
\t\t</li>
\t\t<li>
\t\t\t<a rel=\"nofollow\" href=\"\" class=\"inactive\">2</a>
\t\t</li>
\t\t<li>
\t\t\t<a rel=\"nofollow\" href=\"\" class=\"inactive\">3</a>
\t\t</li>
\t</ul>
</div>           
End Pagination -->



";
    }

    public function getTemplateName()
    {
        return "DescartesEvenementBundle:Evenement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 69,  137 => 61,  129 => 57,  90 => 38,  83 => 36,  180 => 90,  170 => 85,  127 => 37,  81 => 22,  77 => 20,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  145 => 72,  124 => 55,  120 => 35,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 6,  96 => 36,  76 => 25,  58 => 15,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 69,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  37 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 31,  107 => 30,  61 => 23,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 51,  108 => 36,  102 => 32,  71 => 18,  67 => 26,  63 => 19,  59 => 21,  47 => 11,  38 => 9,  94 => 28,  89 => 27,  85 => 25,  79 => 31,  75 => 24,  68 => 20,  56 => 21,  50 => 11,  29 => 2,  87 => 36,  72 => 32,  55 => 17,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 32,  78 => 30,  46 => 13,  27 => 4,  40 => 12,  44 => 9,  35 => 4,  31 => 5,  41 => 12,  28 => 4,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 72,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 51,  115 => 43,  105 => 71,  101 => 29,  91 => 27,  69 => 26,  66 => 23,  62 => 19,  49 => 19,  32 => 3,  25 => 3,  24 => 4,  43 => 4,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 66,  144 => 49,  141 => 64,  133 => 55,  130 => 57,  125 => 44,  122 => 79,  116 => 52,  112 => 51,  109 => 46,  106 => 43,  103 => 45,  99 => 41,  95 => 28,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 30,  64 => 17,  60 => 16,  57 => 21,  54 => 18,  51 => 15,  48 => 15,  45 => 12,  42 => 8,  39 => 7,  36 => 12,  33 => 4,  30 => 5,);
    }
}
