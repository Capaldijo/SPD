<?php

/* ::Layout.OLD.html.twig */
class __TwigTemplate_5a693f484b3db91315ca44c94b9684eb5f14ad83fed14cd5ab15820a6034a964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'mainBlock' => array($this, 'block_mainBlock'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\" js flexbox no-touch rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio js flexbox no-touch rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions\tfontface generatedcontent video audio\" lang=\"en-US\">
\t<head>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
\t\t<meta charset=\"UTF-8\">
\t\t<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
\t\t<!--[if IE ]>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<![endif]-->
\t\t<link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
\t\t<title>Mes sorties à Descartes</title>
\t\t<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
\t\t<!--iOS/android/handheld specific -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
\t\t<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
\t\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"DualShock » Feed\" href=\"\">
\t\t<link rel=\"alternate\" type=\"application/rss+xml\" title=\"DualShock » Comments Feed\" href=\"\">

\t\t";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
\t\t";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "\t\t<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"\">
\t\t<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"\"> 

\t\t<style type=\"text/css\">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
\t</head>
\t\t<body id=\"blog\" class=\"home blog main\">
\t\t\t<header class=\"main-header\">
\t\t\t\t<div class=\"secondary-navigation\">
\t\t\t\t\t<nav id=\"navigation\">

\t\t\t\t\t\t";
        // line 50
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
            // line 51
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DescartesUtilisateurBundle:Utilisateur:index"));
            echo "
\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DescartesUtilisateurBundle:Utilisateur:login"));
            echo "
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div id=\"header\">
\t\t\t\t\t\t<h1 id=\"logo\" class=\"image-logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("descartes_evenement_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"DualShock\"></a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>   
\t\t\t</header>

\t\t\t<div id=\"ActionMenu\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("descartes_evenement_homepage");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("accueil.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("evenement.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Créer événement</a></li>
\t\t\t\t\t\t<li><a href=\"\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("forum.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Forum</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"main-container\">
\t\t\t\t<div id=\"page\">
\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t<article class=\"article\">
\t\t\t\t\t\t\t<div id=\"content_box\">

\t\t\t\t\t\t\t\t";
        // line 84
        $this->displayBlock('mainBlock', $context, $blocks);
        // line 86
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<aside class=\"sidebar c-4-12\">
\t\t\t\t\t\t\t<div id=\"sidebars\" class=\"g\">
\t\t\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t\t\t<ul class=\"sidebar_list\">
\t\t\t\t\t\t\t\t\t\t<div id=\"search-2\" class=\"widget widget-sidebar widget_search\">
\t\t\t\t\t\t\t\t\t\t\t<form method=\"get\" id=\"searchform\" class=\"search-form\" action=\"#\" _lpchecked=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"s\" id=\"s\" value=\"Rechercher sur le site\" onblur=\"if (this.value == '') {this.value = 'Rechercher sur le site';}\" onfocus=\"if (this.value == 'Rechercher sur le site') {this.value = '';}\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"search-image\" class=\"sbutton\" value=\"\" type=\"submit\">
\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"tag_cloud-2\" class=\"widget widget-sidebar widget_tag_cloud\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget-title\">Filtrer par</h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tagcloud\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-7\" title=\"6 topics\" style=\"font-size: 8pt;\">Amitié</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-8\" title=\"7 topics\" style=\"font-size: 22pt;\">Popularité</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-9\" title=\"7 topics\" style=\"font-size: 22pt;\">Suivis</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-10\" title=\"6 topics\" style=\"font-size: 8pt;\">Commenté</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-11\" title=\"6 topics\" style=\"font-size: 8pt;\">Nouveauté</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-11\" title=\"6 topics\" style=\"font-size: 8pt;\">Achevé</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-11\" title=\"6 topics\" style=\"font-size: 8pt;\">Thème apéritif</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-11\" title=\"6 topics\" style=\"font-size: 8pt;\">Thème dance</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-11\" title=\"6 topics\" style=\"font-size: 8pt;\">Thème zen</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"tag-link-11\" title=\"6 topics\" style=\"font-size: 8pt;\">Thème culturel</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"tab-2\" class=\"widget widget-sidebar widget_tab\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabber\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"selected\" href=\"#popular-posts\">Sorties Populaires</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"tab-recent-posts\"><a href=\"#recent-posts\">Sorties Récentes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul> <!--end .tabs-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inside\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: block;\" id=\"popular-posts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wallpaper-2839632-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"85\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t<a title=\"Awesome Post With Everything With It\" href=\"\">La premiere sortie à Descartes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t<span class=\"comm\">5</span> Commentaires
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end .info-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("q3-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"q3\" title=\"\" height=\"65\" width=\"85\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t<p class=\"entry-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t\t<a title=\"Fatebuntur Stoici haec omnia praeclare\" href=\"\">Fatebuntur Stoici haec omnia praeclare</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t<div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wallpaper-1812167-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-1812167\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Modo etiam paulum ad dexteram de\" href=\"\">Modo etiam paulum ad dexteram de</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wallpaper-2386176-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2386176\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Sed nonne merninisti licere mihi ista probare\" href=\"\">Sed nonne merninisti licere mihi ista probare</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"border-bottom: 0px none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wallpaper-2415699-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2415699\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Tecum optime, deinde etiam cum amico\" href=\"\">Tecum optime, deinde etiam cum amico</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end #popular-posts-->
\t\t\t\t\t\t\t\t\t\t\t\t       
\t\t\t\t\t\t\t\t\t\t\t\t    <div style=\"display: none;\" id=\"recent-posts\"> 
\t\t\t\t\t\t\t\t\t\t\t\t        <ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../web/q3-85x65.jpg\" class=\"attachment-widgetthumb wp-post-image\" alt=\"q3\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Fatebuntur Stoici haec omnia praeclare\" href=\"\">Fatebuntur Stoici haec omnia praeclare</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wallpaper-2839632-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2839632\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Awesome Post With Everything With It\" href=\"\">La premiere sortie à Descartes</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\"><span class=\"comm\">5</span> Commentaires</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../web/wallpaper-1812167-85x65.jpg\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-1812167\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Modo etiam paulum ad dexteram de\" href=\"\">Modo etiam paulum ad dexteram de</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../web/wallpaper-2386176-85x65.jpg\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2386176\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Sed nonne merninisti licere mihi ista probare\" href=\"\">Sed nonne merninisti licere mihi ista probare</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li style=\"border-bottom: 0px none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("wallpaper-2415699-85x65.jpg"), "html", null, true);
        echo "\" class=\"attachment-widgetthumb wp-post-image\" alt=\"wallpaper-2415699\" title=\"\" height=\"65\" width=\"85\"><div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t \t<p class=\"entry-title\"><a title=\"Tecum optime, deinde etiam cum amico\" href=\"\">Tecum optime, deinde etiam cum amico</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"meta\">Pas de commentaire</div> <!--end .entry-meta--> \t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--end .info-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t\t\t    </div> <!--end #recent-posts-->
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"display: none;\" class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--end .inside -->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!--end #tabber -->

\t\t\t\t\t\t\t\t\t\t</div><!-- ens #tab-2 -->
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div id=\"calendar-2\" class=\"widget widget-sidebar widget_calendar\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"calendar_wrap\"><table id=\"wp-calendar\">
\t\t\t\t\t\t\t\t\t\t\t\t<caption>Février 2014</caption>
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Monday\">L</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Tuesday\">M</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Wednesday\">M</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Thursday\">J</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Friday\">V</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Saturday\">S</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" title=\"Sunday\">D</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\" id=\"prev\"><a href=\"\" title=\"View posts for July 2013\">« Jan</a></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\" id=\"next\" class=\"pad\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tfoot>

\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\" class=\"pad\">&nbsp;</td><td>1</td><td>2</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td id=\"today\">3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>24</td><td>25</td><td>26</td><td>27</td><td>28</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" colspan=\"2\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div><!--sidebars-->
\t\t\t\t\t\t</aside>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!--.main-container-->
\t\t\t<footer>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer-widgets\">

\t\t\t\t\t</div><!--.footer-widgets-->
\t\t\t\t</div><!--.container-->
\t\t\t</footer><!--footer-->
\t\t\t<div class=\"copyrights\">
\t\t\t\t<!--start copyrights-->
\t\t\t\t<div class=\"row\" id=\"copyright-note\">
\t\t\t\t\t<span><a href=\"\" title=\"Just another MyThemeShop Playground site\">Mes sorties à Descartes</a> Copyright © 2014.</span>
\t\t\t\t\t<div class=\"top\">Développé par <a href=\"\">L3A1</a>&nbsp;<a href=\"#top\" class=\"toplink\"> </a></div>
\t\t\t\t</div>
\t\t\t\t<!--end copyrights-->
\t\t\t</div> 
\t\t</body>
</html>";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "\t\t\t<link rel=\"stylesheet\" id=\"stylesheet-css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t\t\t<style type=\"text/css\">
\t\t\t\tbody {background-color:#dcdcdc; }
\t\t\t\tbody {background-image: url();}
\t\t\t\t.sbutton { border-color:#1c8b78;}
\t\t\t\tfooter .widget li a:hover, .sidebar.c-4-12 a:hover, .copyrights a, .title a:hover, .pagination a, .pagination2, .post-info a, .readMore a:hover, .secondary-navigation a:hover, .sidebar .textwidget a, footer .textwidget a, .single_post .tags a { color:#1c8b78; }\t
\t\t\t\t.sbutton, .top .toplink, .mts-subscribe input[type='submit'], .related-posts li, .flex-control-paging li a.flex-active, #commentform input#submit, .reply a, #wp-calendar thead th, #wp-calendar td:hover, #wp-calendar td a:hover, #wp-calendar td:hover a, #tabber .inside li, .pagination a, .pagination2, .tagcloud a { background-color:#1c8b78; color: #fff!important; }
\t\t\t\t.article { float: right;}
\t\t\t\t.sidebar.c-4-12 { float: left; padding-right: 0; }\t\t\t
\t\t\t</style>
\t\t\t<link rel=\"stylesheet\" id=\"GoogleFonts-css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
\t\t";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "\t\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/customscript.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    // line 84
    public function block_mainBlock($context, array $blocks = array())
    {
        // line 85
        echo "\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::Layout.OLD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 34,  411 => 20,  282 => 222,  198 => 150,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  456 => 84,  450 => 38,  442 => 36,  433 => 60,  426 => 58,  414 => 21,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  316 => 16,  311 => 14,  299 => 8,  271 => 374,  245 => 335,  215 => 280,  186 => 239,  146 => 181,  114 => 111,  110 => 38,  350 => 26,  308 => 13,  810 => 492,  807 => 491,  796 => 183,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  702 => 472,  698 => 471,  694 => 138,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  649 => 122,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 92,  517 => 404,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  281 => 411,  259 => 103,  253 => 342,  232 => 88,  210 => 270,  363 => 32,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  321 => 135,  318 => 255,  306 => 286,  291 => 102,  274 => 110,  263 => 365,  212 => 279,  202 => 266,  190 => 76,  174 => 217,  672 => 345,  668 => 344,  664 => 342,  660 => 464,  651 => 337,  647 => 336,  644 => 335,  640 => 119,  631 => 327,  629 => 454,  626 => 325,  622 => 452,  613 => 320,  609 => 319,  606 => 449,  602 => 317,  593 => 105,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 96,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 91,  525 => 280,  522 => 406,  519 => 278,  515 => 85,  509 => 83,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 85,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 31,  418 => 224,  412 => 222,  410 => 221,  400 => 47,  397 => 213,  383 => 207,  376 => 205,  367 => 339,  353 => 328,  347 => 191,  317 => 185,  304 => 181,  288 => 4,  205 => 108,  184 => 233,  462 => 202,  449 => 198,  446 => 37,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  286 => 112,  275 => 105,  267 => 101,  262 => 98,  213 => 78,  207 => 269,  197 => 249,  191 => 246,  181 => 232,  178 => 59,  153 => 77,  100 => 69,  266 => 366,  250 => 341,  211 => 92,  185 => 74,  175 => 58,  113 => 73,  20 => 1,  313 => 15,  300 => 105,  297 => 104,  280 => 125,  272 => 119,  265 => 105,  236 => 103,  222 => 297,  216 => 79,  165 => 83,  155 => 47,  137 => 53,  129 => 86,  90 => 27,  180 => 90,  170 => 84,  127 => 84,  81 => 30,  77 => 25,  307 => 128,  295 => 178,  289 => 113,  276 => 395,  261 => 110,  255 => 353,  249 => 192,  239 => 102,  233 => 179,  231 => 83,  226 => 84,  200 => 72,  194 => 248,  188 => 90,  161 => 202,  148 => 73,  124 => 132,  118 => 49,  104 => 70,  97 => 38,  70 => 19,  34 => 4,  76 => 31,  58 => 14,  23 => 4,  84 => 41,  270 => 102,  260 => 363,  256 => 96,  251 => 35,  248 => 336,  242 => 101,  228 => 101,  225 => 298,  195 => 86,  172 => 57,  152 => 46,  150 => 55,  134 => 161,  126 => 147,  65 => 50,  53 => 40,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 35,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 197,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 38,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 93,  177 => 132,  169 => 210,  140 => 58,  132 => 55,  128 => 49,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 95,  219 => 76,  217 => 166,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 60,  119 => 117,  102 => 30,  71 => 19,  67 => 51,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 61,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 20,  27 => 7,  44 => 8,  31 => 5,  28 => 3,  201 => 106,  196 => 92,  183 => 77,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 64,  138 => 54,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  25 => 3,  24 => 2,  19 => 1,  79 => 55,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 1,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 12,  32 => 6,  29 => 4,  209 => 93,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 52,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 72,  106 => 104,  103 => 28,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 53,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 34,  48 => 33,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
