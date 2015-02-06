<?php

/* DescartesEvenementBundle:Apercu:apercu.html.twig */
class __TwigTemplate_ed40cebd3be783a47a48728d5982356c8c1c2f685a1e8f3231d00b966d207bb5 extends Twig_Template
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
        echo "<ul class=\"tabs\">
\t<li><a class=\"selected\" href=\"#popular-posts\">Sorties Populaires</a></li>
\t<li class=\"tab-recent-posts\"><a href=\"#recent-posts\">Sorties Récentes</a></li>
</ul> <!--end .tabs-->
\t
<div class=\"clear\"></div>
<div class=\"inside\">

\t<div style=\"display: block;\" id=\"popular-posts\">
\t\t<ul>
\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventsPop"]) ? $context["eventsPop"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 12
            echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
            echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"105\">
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<p class=\"entry-title\">
\t\t\t\t\t\t<a title=\"Awesome Post With Everything With It\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t";
            // line 21
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire") != 0)) {
                // line 22
                echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"comm\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire"), "html", null, true);
                echo "</span> Commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\tPas de commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t
\t\t\t\t</div> <!--end .info-->

\t\t\t\t<div class=\"clear\"></div>
\t\t\t</li>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "\t\t\t\tAucun évènement n'a encore été créé pour le moment.
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
\t\t</ul>\t\t\t
\t</div> <!--end #popular-posts-->
\t   
\t<div style=\"display: none;\" id=\"recent-posts\"> 
\t\t<ul>
\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventsRec"]) ? $context["eventsRec"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 45
            echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
            echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"105\">
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<p class=\"entry-title\">
\t\t\t\t\t\t<a title=\"Awesome Post With Everything With It\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
            echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t";
            // line 55
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire") != 0)) {
                // line 56
                echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"comm\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire"), "html", null, true);
                echo "</span> Commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\tPas de commentaires
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t
\t\t\t\t</div> <!--end .info-->

\t\t\t\t<div class=\"clear\"></div>
\t\t\t</li>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "\t\t\t\tAucun évènement n'a encore été créé pour le moment.
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t</ul>\t
\t</div> <!--end #recent-posts-->
\t
\t<div style=\"display: none;\" class=\"clear\"></div>
\t
</div> <!--end .inside -->

<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "DescartesEvenementBundle:Apercu:apercu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  90 => 38,  83 => 36,  180 => 90,  170 => 85,  127 => 49,  81 => 26,  77 => 24,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  145 => 72,  124 => 55,  120 => 55,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  96 => 36,  76 => 25,  58 => 22,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 69,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 47,  61 => 23,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 51,  108 => 36,  102 => 32,  71 => 22,  67 => 26,  63 => 19,  59 => 21,  47 => 9,  38 => 9,  94 => 28,  89 => 36,  85 => 25,  79 => 31,  75 => 24,  68 => 20,  56 => 21,  50 => 11,  29 => 3,  87 => 36,  72 => 32,  55 => 17,  21 => 2,  26 => 6,  98 => 44,  93 => 39,  88 => 32,  78 => 30,  46 => 13,  27 => 4,  40 => 14,  44 => 9,  35 => 12,  31 => 11,  41 => 12,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 72,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 26,  66 => 23,  62 => 19,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 58,  144 => 49,  141 => 64,  133 => 55,  130 => 57,  125 => 44,  122 => 79,  116 => 52,  112 => 51,  109 => 46,  106 => 43,  103 => 45,  99 => 41,  95 => 28,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 30,  64 => 17,  60 => 13,  57 => 11,  54 => 18,  51 => 15,  48 => 15,  45 => 12,  42 => 10,  39 => 10,  36 => 12,  33 => 4,  30 => 5,);
    }
}
