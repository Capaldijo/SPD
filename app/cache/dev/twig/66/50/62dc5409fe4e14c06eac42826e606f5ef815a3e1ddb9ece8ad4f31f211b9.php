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
        if (((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")) != null)) {
            // line 8
            echo "\t<div id=\"page\" class=\"single\">
\t<div id=\"post-34\" class=\"post-34 post type-post status-publish format-standard has-post-thumbnail hentry category-awesome category-news tag-qiameth tag-tupress tag-winooze g post has_thumb\">
\t\t<div class=\"single_post\">
\t\t\t<header>
\t\t\t\t<h1 class=\"title single-title\">
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
            echo "
\t\t\t\t<div id=\"settingEvent\">
\t\t\t\t\t";
            // line 15
            if (((isset($context["id_user"]) ? $context["id_user"] : $this->getContext($context, "id_user")) == $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_createur"))) {
                // line 16
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_setting", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"submit\" value=\"Modifier\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nombre_participant") != $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_participant_sortie"))) {
                // line 20
                echo "\t\t\t\t\t\t";
                if ((isset($context["isParticipant"]) ? $context["isParticipant"] : $this->getContext($context, "isParticipant"))) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_cancelPart", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
                    echo "\" method=\"post\" id=\"participe-form\" class=\"participe-form\">
\t\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Annuler\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t<form action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_participe", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "username"))), "html", null, true);
            echo "\" title=\"\" rel=\"author\">
\t\t                \t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lastname")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "firstname")), "html", null, true);
            echo "
\t\t                \t</a>
\t\t                </span>
\t\t                <span class=\"thecategory\"> Thème: 
\t\t                \t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_filtreEvent", array("filtre" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre_theme"))), "html", null, true);
            echo "\" title=\"\" rel=\"nofollow\">
\t\t                \t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre_theme"), "html", null, true);
            echo "
\t\t                \t</a>
\t\t                </span>
\t\t                <span class=\"theauthor\">Nombre participants:
\t\t                 <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_participant", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
            echo "\" title=\"\" rel=\"nofollow\">
\t\t                 \t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_participant_sortie"), "html", null, true);
            echo "
\t\t                </a>
\t\t                </span>
\t\t                <span class=\"thecategory\">Date réalisation: <b>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date_realisation"), "d/m/y"), "html", null, true);
            echo "</b></span>
\t\t                <span class=\"theauthor\">Ville:\t<b>";
            // line 51
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "ville")), "html", null, true);
            echo "</b></span>
\t\t                <span class=\"thecategory\">Adresse:\t<b>";
            // line 52
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "adresse")), "html", null, true);
            echo "</b></span>
\t\t                <span class=\"thecategory\">Note:\t<b>";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["noteEvent"]) ? $context["noteEvent"] : $this->getContext($context, "noteEvent")), "note_moy"), 1, ".", ","), "html", null, true);
            echo "/5</b></span>
\t            \t</div>
\t            </div>
\t\t\t</header><!--.headline_area-->
\t\t\t<div class=\"post-single-content box mark-links\">
\t\t\t\t";
            // line 58
            if ((!(isset($context["hasNoter"]) ? $context["hasNoter"] : $this->getContext($context, "hasNoter")))) {
                // line 59
                echo "\t\t\t\t\t<div id=\"ratingform\">
\t\t\t\t\t\t<form action=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_addNote", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
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
            if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageEvent/") . $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image")))) {
                // line 74
                echo "\t\t\t\t\t\t<img id=\"ImgEvent\" class=\"alignright size-medium wp-image-54\" alt=\"q3\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_commentaire"), "html", null, true);
            echo " Commentaires</div>
\t\t\t<ol class=\"commentlist\">
\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t<div class=\"alignleft\"></div>
\t\t\t\t\t<div class=\"alignright\"></div>
\t\t\t\t</div>
\t\t\t\t";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 93
                echo "\t\t\t\t<li class=\"comment odd alt thread-odd thread-alt depth-1\" id=\"li-comment-4\">
\t\t\t\t\t<div id=\"comment-4\" style=\"position:relative;\">
\t\t\t\t\t\t<div class=\"comment-author vcard\">
\t\t\t\t\t\t\t";
                // line 96
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id")))) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t<img alt='' src='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "firstname"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "lastname"), "html", null, true);
                echo "</span> 
\t\t\t\t\t\t\t<time>
\t\t\t\t\t\t\t\t";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date_commentaire"), "d/m"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date_commentaire"), "H"), "html", null, true);
                echo "h";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "date_commentaire"), "m"), "html", null, true);
                echo "
\t\t\t\t\t\t\t</time>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"comment-meta\"></div>
\t\t\t\t\t\t<div class=\"commentmetadata\">
\t\t\t\t\t\t\t<p>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "contenue"), "html", null, true);
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
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
                // line 119
                echo "\t\t<div id=\"commentsAdd\">
\t\t\t<div id=\"respond\" class=\"box m-t-6\">
\t\t\t\t<div id=\"respond\" class=\"comment-respond\">
\t\t\t\t\t<h3 id=\"reply-title\" class=\"comment-reply-title\">
\t\t\t\t\t\t<h4><span>Laisser un Commentaire</span></h4> 
\t\t\t\t\t</h3>
\t\t\t\t\t<form action=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_comment", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
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
        return array (  313 => 151,  300 => 140,  297 => 139,  280 => 125,  272 => 119,  270 => 118,  265 => 115,  258 => 113,  248 => 108,  236 => 103,  228 => 101,  222 => 99,  216 => 97,  214 => 96,  209 => 93,  204 => 92,  195 => 86,  183 => 78,  177 => 76,  170 => 74,  168 => 73,  165 => 72,  150 => 60,  147 => 59,  145 => 58,  137 => 53,  133 => 52,  129 => 51,  125 => 50,  119 => 47,  115 => 46,  108 => 42,  104 => 41,  95 => 37,  91 => 36,  85 => 32,  81 => 30,  78 => 29,  70 => 25,  62 => 21,  59 => 20,  51 => 16,  49 => 15,  44 => 13,  37 => 8,  35 => 7,  31 => 5,  28 => 4,);
    }
}
