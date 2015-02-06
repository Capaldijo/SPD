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
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 7
            echo "\t";
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "visibilite") == true)) {
                // line 8
                echo "\t\t<div class=\"post excerpt  lino0 removebordertop\">
\t\t\t<header>\t\t\t\t\t\t
\t\t\t\t<h2 class=\"title\">
\t\t\t\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
                echo "\" rel=\"bookmark\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre"), "html", null, true);
                echo "</a>
\t\t\t\t</h2>
\t\t\t</header><!--.header-->
\t\t\t<div class=\"featured-thumbnail\">
\t\t\t\t";
                // line 15
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageEvent/") . $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image")))) {
                    // line 16
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageEvent/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image"), "html", null, true);
                    echo "\" class=\"attachment-featured wp-post-image\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "image"), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), 0, 400), "html", null, true);
                echo " [...]
\t\t\t</div>
\t\t</div><!--.post excerpt-->

\t\t<div class=\"post-info\">
\t\t\t<span class=\"thetime\">";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date_realisation"), "d/m/y"), "html", null, true);
                echo "</span>
\t\t\t<span class=\"theauthor\">Auteur <a rel=\"nofollow\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "username"))), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "firstname")), "html", null, true);
                echo "</a></span>
\t\t\t<span class=\"thecategory\">Thème<a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_filtreEvent", array("filtre" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre_theme"))), "html", null, true);
                echo "\" title=\"\" rel=\"nofollow\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "titre_theme"), "html", null, true);
                echo "</a></span>
\t\t\t<span class=\"thecomment\"><span class=\"comments\">Commentaires</span> <span class=\"comm\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nb_commentaire"), "html", null, true);
                echo "</span></span>
\t\t\t<span class=\"readMore\"><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_evenement_voir", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id_event"))), "html", null, true);
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
        return array (  127 => 37,  120 => 35,  111 => 31,  107 => 30,  101 => 29,  93 => 28,  89 => 27,  81 => 22,  77 => 20,  71 => 18,  60 => 16,  58 => 15,  47 => 11,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
