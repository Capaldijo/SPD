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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") != null)) {
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
        return array (  459 => 85,  456 => 84,  450 => 38,  446 => 37,  442 => 36,  434 => 34,  428 => 31,  414 => 21,  411 => 20,  318 => 255,  282 => 222,  198 => 150,  100 => 69,  266 => 116,  250 => 108,  211 => 92,  185 => 78,  175 => 74,  113 => 73,  74 => 25,  20 => 1,  313 => 151,  300 => 140,  297 => 139,  280 => 125,  272 => 119,  265 => 115,  236 => 103,  222 => 99,  216 => 97,  165 => 72,  155 => 65,  137 => 53,  129 => 86,  90 => 38,  83 => 36,  180 => 90,  170 => 74,  127 => 84,  81 => 24,  77 => 31,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 192,  239 => 102,  233 => 179,  231 => 97,  226 => 94,  200 => 86,  194 => 82,  188 => 79,  161 => 78,  148 => 73,  145 => 58,  124 => 55,  120 => 35,  118 => 54,  104 => 70,  97 => 38,  70 => 25,  34 => 7,  96 => 36,  76 => 25,  58 => 18,  52 => 15,  23 => 4,  84 => 31,  270 => 118,  260 => 37,  256 => 36,  251 => 35,  248 => 108,  242 => 101,  228 => 101,  225 => 97,  195 => 86,  172 => 115,  152 => 64,  150 => 60,  134 => 52,  126 => 56,  65 => 50,  53 => 40,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 35,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 113,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 132,  169 => 60,  140 => 55,  132 => 55,  128 => 49,  111 => 45,  107 => 43,  61 => 20,  273 => 119,  269 => 117,  254 => 92,  246 => 107,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 98,  224 => 93,  221 => 95,  219 => 76,  217 => 166,  208 => 68,  204 => 92,  179 => 79,  159 => 61,  143 => 57,  135 => 60,  131 => 52,  119 => 48,  108 => 42,  102 => 32,  71 => 24,  67 => 51,  63 => 23,  59 => 18,  47 => 9,  38 => 8,  94 => 28,  89 => 33,  85 => 32,  79 => 55,  75 => 24,  68 => 20,  56 => 21,  50 => 10,  29 => 6,  87 => 61,  72 => 22,  55 => 14,  21 => 2,  26 => 12,  98 => 44,  93 => 29,  88 => 32,  78 => 29,  46 => 20,  27 => 5,  40 => 11,  44 => 11,  35 => 12,  31 => 6,  41 => 9,  28 => 5,  201 => 92,  196 => 90,  183 => 77,  171 => 61,  166 => 69,  163 => 109,  158 => 66,  156 => 66,  151 => 70,  142 => 64,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 51,  115 => 46,  105 => 71,  101 => 29,  91 => 27,  69 => 23,  66 => 23,  62 => 19,  49 => 14,  32 => 4,  25 => 3,  24 => 7,  43 => 12,  22 => 1,  19 => 2,  209 => 93,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 73,  164 => 59,  162 => 67,  154 => 75,  149 => 51,  147 => 59,  144 => 49,  141 => 64,  133 => 52,  130 => 57,  125 => 50,  122 => 56,  116 => 52,  112 => 51,  109 => 72,  106 => 42,  103 => 28,  99 => 41,  95 => 37,  92 => 46,  86 => 32,  82 => 28,  80 => 28,  73 => 53,  64 => 20,  60 => 16,  57 => 21,  54 => 16,  51 => 34,  48 => 33,  45 => 6,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 2,);
    }
}
