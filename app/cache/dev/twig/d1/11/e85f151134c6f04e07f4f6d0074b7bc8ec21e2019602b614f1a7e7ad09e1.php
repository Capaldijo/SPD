<?php

/* ::Layout.html.twig */
class __TwigTemplate_d111e85f151134c6f04e07f4f6d0074b7bc8ec21e2019602b614f1a7e7ad09e1 extends Twig_Template
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
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("descartes_evenement_homepage");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("accueil.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Accueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("descartes_evenement_creerevenement");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("evenement.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Créer événement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("descartes_evenement_myEvents");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("evenement.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Mes évènements
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"http://localhost/Sortiesadescartes/web/phpBB3/index.php\" target=\"_blank\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("forum.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\" style=\"vertical-align:middle;\">&nbsp;&nbsp;Forum
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"main-container\">
\t\t\t\t<div id=\"page\">
\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t<article class=\"article\">
\t\t\t\t\t\t\t<div id=\"content_box\">

\t\t\t\t\t\t\t\t";
        // line 98
        $this->displayBlock('mainBlock', $context, $blocks);
        // line 100
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<aside class=\"sidebar c-4-12\">
\t\t\t\t\t\t\t<div id=\"sidebars\" class=\"g\">
\t\t\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t\t\t<ul class=\"sidebar_list\">
\t\t\t\t\t\t\t\t\t\t<div id=\"search-2\" class=\"widget widget-sidebar widget_search\">

\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DescartesRechercheBundle:Recherche:index"));
        echo "
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"tag_cloud-2\" class=\"widget widget-sidebar widget_tag_cloud\">

\t\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DescartesEvenementBundle:Evenement:filtre"));
        echo "

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"tab-2\" class=\"widget widget-sidebar widget_tab\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"tabber\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 123
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DescartesEvenementBundle:Evenement:apercu"));
        echo "
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!--end #tabber -->

\t\t\t\t\t\t\t\t\t\t</div><!-- ens #tab-2 -->
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div id=\"calendar-2\" class=\"widget widget-sidebar widget_calendar\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"calendar_wrap\">

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t
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

    // line 98
    public function block_mainBlock($context, array $blocks = array())
    {
        // line 99
        echo "\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 99,  270 => 98,  264 => 38,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  183 => 123,  172 => 115,  163 => 109,  152 => 100,  150 => 98,  134 => 85,  126 => 80,  122 => 79,  116 => 76,  112 => 75,  105 => 71,  87 => 61,  79 => 55,  73 => 53,  67 => 51,  65 => 50,  53 => 40,  51 => 34,  48 => 33,  46 => 20,  22 => 1,  43 => 4,  37 => 6,  35 => 12,  32 => 3,  29 => 2,  127 => 37,  120 => 35,  111 => 31,  107 => 30,  101 => 70,  93 => 28,  89 => 27,  81 => 22,  77 => 20,  71 => 18,  60 => 16,  58 => 15,  47 => 11,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
