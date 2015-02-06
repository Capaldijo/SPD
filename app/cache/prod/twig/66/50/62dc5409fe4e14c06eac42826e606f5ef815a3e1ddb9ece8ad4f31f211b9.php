<?php

/* DescartesEvenementBundle:Evenement:voirevenement.html.twig */
class __TwigTemplate_665062dc5409fe4e14c06eac42826e606f5ef815a3e1ddb9ece8ad4f31f211b9 extends Twig_Template
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

\t";
        // line 7
        if (((isset($context["event"]) ? $context["event"] : null) != null)) {
            // line 8
            echo "\t<div id=\"page\" class=\"single\">
\t<div id=\"post-34\" class=\"post-34 post type-post status-publish format-standard has-post-thumbnail hentry category-awesome category-news tag-qiameth tag-tupress tag-winooze g post has_thumb\">
\t\t<div class=\"single_post\">
\t\t\t<header>
\t\t\t\t<h1 class=\"title single-title\">
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre"), "html", null, true);
            echo "
\t\t\t\t<div id=\"settingEvent\">
\t\t\t\t\t";
            // line 15
            if (((isset($context["id_user"]) ? $context["id_user"] : null) == $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_createur"))) {
                // line 16
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_setting", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"submit\" value=\"Modifier\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nombre_participant") != $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_participant_sortie"))) {
                // line 20
                echo "\t\t\t\t\t\t";
                if ((isset($context["isParticipant"]) ? $context["isParticipant"] : null)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_cancelPart", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                    echo "\" method=\"post\" id=\"participe-form\" class=\"participe-form\">
\t\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Annuler\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t<form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_participe", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                    echo "\" method=\"post\" id=\"participe-form\" class=\"participe-form\">
\t\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Participer\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\tNombre de participant max atteint.
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t</div></h1>
\t\t\t\t<div class=\"post-info\">
\t\t\t\t\t<div id=\"buttonProfil\">
\t\t                <span class=\"theauthor\">Auteur: 
\t\t                \t<a rel=\"nofollow\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "username"))), "html", null, true);
            echo "\" title=\"\" rel=\"author\">
\t\t                \t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "lastname")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "firstname")), "html", null, true);
            echo "
\t\t                \t</a>
\t\t                </span>
\t\t                <span class=\"thecategory\"> Thème: 
\t\t                \t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_filtreEvent", array("filtre" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre_theme"))), "html", null, true);
            echo "\" title=\"\" rel=\"nofollow\">
\t\t                \t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "titre_theme"), "html", null, true);
            echo "
\t\t                \t</a>
\t\t                </span>
\t\t                <span class=\"theauthor\">Nombre participants:
\t\t                 <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_participant", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
            echo "\" title=\"\" rel=\"nofollow\">
\t\t                 \t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_participant_sortie"), "html", null, true);
            echo "
\t\t                </a>
\t\t                </span>
\t\t                <span class=\"thecategory\">Date réalisation: <b>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "date_realisation"), "d/m/y"), "html", null, true);
            echo "</b></span>
\t\t                <span class=\"theauthor\">Ville:\t<b>";
            // line 51
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ville")), "html", null, true);
            echo "</b></span>
\t\t                <span class=\"thecategory\">Adresse:\t<b>";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "adresse")), "html", null, true);
            echo "</b></span>
\t\t                <span class=\"thecategory\">Note:\t<b>";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["noteEvent"]) ? $context["noteEvent"] : null), "note_moy"), 1, ".", ","), "html", null, true);
            echo "/5</b></span>
\t            \t</div>
\t            </div>
\t\t\t</header><!--.headline_area-->
\t\t\t<div class=\"post-single-content box mark-links\">
\t\t\t\t";
            // line 58
            if ((!(isset($context["hasNoter"]) ? $context["hasNoter"] : null))) {
                // line 59
                echo "\t\t\t\t\t<div id=\"ratingform\">
\t\t\t\t\t\t<form action=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_addNote", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\" method=\"post\" >
\t\t\t\t\t\t\t\t\t<SELECT name=\"note\">
\t\t\t\t\t\t\t\t\t\t<OPTION>1
\t\t\t\t\t\t\t\t\t\t<OPTION>2
\t\t\t\t\t\t\t\t\t\t<OPTION>3
\t\t\t\t\t\t\t\t\t\t<OPTION>4
\t\t\t\t\t\t\t\t\t\t<OPTION>5
\t\t\t\t\t\t\t\t\t</SELECT>
\t\t\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Noter\" />
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t<p><br />
\t\t\t\t\t";
            // line 73
            if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageEvent/") . $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image")))) {
                // line 74
                echo "\t\t\t\t\t\t<img id=\"ImgEvent\" class=\"alignright size-medium wp-image-54\" alt=\"q3\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "image"), "html", null, true);
                echo "\" width=\"350\" height=\"200\" />
\t\t\t\t\t";
            } else {
                // line 76
                echo "\t\t\t\t\t\t<img id=\"ImgEvent\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/defaultAvatar.jpg"), "html", null, true);
                echo "\" class=\"alignright size-medium wp-image-54\" alt=\"q3\" title=\"defaultAvatar\" width=\"350\" height=\"200\" />
\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "description"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div><!--.post-content box mark-links-->
\t\t</div>\t\t\t\t\t
\t</div>
\t\t\t\t\t\t<!-- You can start editing here. -->
\t<div id=\"comments\">
\t\t<div class=\"total-comments\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "nb_commentaire"), "html", null, true);
            echo " Commentaires</div>
\t\t\t<ol class=\"commentlist\">
\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t<div class=\"alignleft\"></div>
\t\t\t\t\t<div class=\"alignright\"></div>
\t\t\t\t</div>
\t\t\t\t";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 93
                echo "\t\t\t\t<li class=\"comment odd alt thread-odd thread-alt depth-1\" id=\"li-comment-4\">
\t\t\t\t\t<div id=\"comment-4\" style=\"position:relative;\">
\t\t\t\t\t\t<div class=\"comment-author vcard\">
\t\t\t\t\t\t\t";
                // line 96
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id")))) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t<img alt='' src='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"))), "html", null, true);
                    echo "' class='avatar avatar-80 photo' height='80' width='80' />
\t\t\t\t\t\t\t";
                } else {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  alt=\"ImageProfil\" width=\"200\" height=\"300\" id=\"imageProfil\" />
\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t<span class=\"fn\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "lastname"), "html", null, true);
                echo "</span> 
\t\t\t\t\t\t\t<time>
\t\t\t\t\t\t\t\t";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "date_commentaire"), "d/m"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "date_commentaire"), "H"), "html", null, true);
                echo "h";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "date_commentaire"), "m"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"comment-meta\"></div>
\t\t\t\t\t\t<div class=\"commentmetadata\">
\t\t\t\t\t\t\t<p>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "contenue"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 113
                echo "\t\t\t\t\tSoyez le premier à commenter la sortie !
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "\t\t\t</ol>
\t\t</div>

\t\t";
            // line 118
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") != null)) {
                // line 119
                echo "\t\t<div id=\"commentsAdd\">
\t\t\t<div id=\"respond\" class=\"box m-t-6\">
\t\t\t\t<div id=\"respond\" class=\"comment-respond\">
\t\t\t\t\t<h3 id=\"reply-title\" class=\"comment-reply-title\">
\t\t\t\t\t\t<h4><span>Laisser un Commentaire</span></h4> 
\t\t\t\t\t</h3>
\t\t\t\t\t<form action=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_comment", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id_event"))), "html", null, true);
                echo "\" method=\"post\" id=\"commentform\" class=\"comment-form\">
\t\t\t\t\t\t<p class=\"comment-form-comment\">
\t\t\t\t\t\t\t<textarea id=\"comment\" name=\"comment\" placeholder=\"Commentaire\" value=\"\" cols=\"45\" rows=\"8\" aria-required=\"true\"></textarea>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"form-submit\">
\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Poster Commentaire\" />
\t\t\t\t\t\t\t<input type='hidden' name='comment_post_ID' value='34' id='comment_post_ID' />

\t\t\t\t\t\t</p>
\t\t\t\t\t</form>
\t\t\t\t</div><!-- #respond -->
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 139
            echo "\t";
        } else {
            // line 140
            echo "\t\t<div class=\"post excerpt  lino0 removebordertop\">
\t\t\t<header>\t\t\t\t\t\t
\t\t\t\t<h2 class=\"title\">
\t\t\t\t\tL'événement n'existe pas
\t\t\t\t</h2>
\t\t\t</header><!--.header-->
\t\t\t<div class=\"post-content image-caption-format-1\">
\t\t\t\tCet événement n'existe pas.
\t\t\t</div>
\t\t</div><!--.post excerpt-->
\t";
        }
        // line 151
        echo "
";
    }

    public function getTemplateName()
    {
        return "DescartesEvenementBundle:Evenement:voirevenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 151,  300 => 140,  297 => 139,  280 => 125,  272 => 119,  265 => 115,  236 => 103,  222 => 99,  216 => 97,  165 => 72,  155 => 69,  137 => 53,  129 => 51,  90 => 38,  83 => 36,  180 => 90,  170 => 74,  127 => 56,  81 => 30,  77 => 31,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 93,  161 => 78,  148 => 73,  145 => 58,  124 => 55,  120 => 35,  118 => 54,  104 => 41,  97 => 41,  70 => 25,  34 => 5,  96 => 36,  76 => 25,  58 => 15,  52 => 19,  23 => 3,  84 => 31,  270 => 118,  260 => 37,  256 => 36,  251 => 35,  248 => 108,  242 => 101,  228 => 101,  225 => 20,  195 => 86,  172 => 115,  152 => 100,  150 => 60,  134 => 52,  126 => 56,  65 => 20,  53 => 14,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 113,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 96,  177 => 76,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 31,  107 => 46,  61 => 23,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 92,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 47,  108 => 42,  102 => 32,  71 => 18,  67 => 26,  63 => 19,  59 => 20,  47 => 15,  38 => 9,  94 => 28,  89 => 33,  85 => 32,  79 => 31,  75 => 24,  68 => 20,  56 => 21,  50 => 11,  29 => 2,  87 => 36,  72 => 25,  55 => 18,  21 => 2,  26 => 6,  98 => 44,  93 => 28,  88 => 32,  78 => 29,  46 => 13,  27 => 4,  40 => 12,  44 => 13,  35 => 7,  31 => 5,  41 => 12,  28 => 4,  201 => 92,  196 => 90,  183 => 78,  171 => 61,  166 => 71,  163 => 109,  158 => 72,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 51,  115 => 46,  105 => 71,  101 => 29,  91 => 36,  69 => 26,  66 => 23,  62 => 21,  49 => 15,  32 => 3,  25 => 3,  24 => 4,  43 => 4,  22 => 1,  19 => 1,  209 => 93,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 73,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 59,  144 => 49,  141 => 64,  133 => 52,  130 => 57,  125 => 50,  122 => 56,  116 => 52,  112 => 51,  109 => 46,  106 => 42,  103 => 45,  99 => 41,  95 => 37,  92 => 46,  86 => 33,  82 => 28,  80 => 30,  73 => 30,  64 => 22,  60 => 16,  57 => 21,  54 => 18,  51 => 16,  48 => 14,  45 => 12,  42 => 8,  39 => 7,  36 => 6,  33 => 4,  30 => 5,);
    }
}
