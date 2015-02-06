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
        if ((((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")) != null) && ((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")) != null))) {
            // line 11
            echo "\t\t<h4>Sorties</h4>
\t\t";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 13
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image"), "html", null, true);
                echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"105\">
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<p class=\"entry-title\">
\t\t\t\t\t\t<a title=\"\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t";
                // line 23
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_commentaire") != 0)) {
                    // line 24
                    echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"comm\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_commentaire"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 43
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t";
                // line 45
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))) {
                    // line 46
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname")), "html", null, true);
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
        } elseif (((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")) != null)) {
            // line 65
            echo "\t\t<h4>Sorties</h4>
\t\t";
            // line 66
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 67
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<img src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image"), "html", null, true);
                echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"105\">
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<p class=\"entry-title\">
\t\t\t\t\t\t<a title=\"\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t\t";
                // line 77
                if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_commentaire") != 0)) {
                    // line 78
                    echo "\t\t\t\t\t\t<div class=\"meta\">
\t\t\t\t\t\t\t<span class=\"comm\">";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_commentaire"), "html", null, true);
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
        } elseif (((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")) != null)) {
            // line 93
            echo "\t\t<h4>Utilisateurs</h4>
\t\t";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 95
                echo "\t\t\t<li>
\t\t\t\t<div class=\"left\">
\t\t\t\t\t";
                // line 97
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))) {
                    // line 98
                    echo "\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 108
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname")), "html", null, true);
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
        return array (  273 => 119,  269 => 117,  266 => 116,  250 => 108,  246 => 107,  239 => 102,  233 => 100,  227 => 98,  225 => 97,  221 => 95,  217 => 94,  214 => 93,  211 => 92,  200 => 86,  194 => 82,  188 => 79,  185 => 78,  183 => 77,  175 => 74,  166 => 69,  162 => 67,  158 => 66,  155 => 65,  152 => 64,  136 => 56,  132 => 55,  125 => 50,  119 => 48,  113 => 46,  111 => 45,  107 => 43,  103 => 42,  97 => 38,  86 => 32,  80 => 28,  74 => 25,  71 => 24,  69 => 23,  61 => 20,  52 => 15,  48 => 13,  44 => 12,  41 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
