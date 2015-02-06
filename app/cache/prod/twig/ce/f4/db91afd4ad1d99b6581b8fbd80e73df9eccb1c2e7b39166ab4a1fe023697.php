<?php

/* DescartesUtilisateurBundle:Utilisateur:login.html.twig */
class __TwigTemplate_cef4db91afd4ad1d99b6581b8fbd80e73df9eccb1c2e7b39166ab4a1fe023697 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
  ";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t<ul id=\"menu-menu\" class=\"menu sf-js-enabled\">
\t\t<li id=\"menu-item-110\" class=\"icon-wrench menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-110\">
\t\t\t<a class=\"sf-with-ul\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_inscription");
        echo "\">
\t\t\t\tS'inscrire<span class=\"sf-sub-indicator\"> »</span><span class=\"sf-sub-indicator\"> »</span>
\t\t\t</a>
\t\t\t<ul style=\"display: none; visibility: hidden;\" class=\"sub-menu sf-js-enabled\">
\t\t\t\t<li id=\"menu-item-107\" class=\"icon-move menu-item menu-item-type-post_type menu-item-object-page menu-item-107\">
\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_inscription");
        echo "\">Via le site</a>
\t\t\t\t</li>
\t\t\t\t<li id=\"menu-item-106\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-106\">
\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

\t\t\t\t\t<script>
\t\t\t\t\t    function goLogIn()
\t\t\t\t\t    {
\t\t\t\t\t        window.location.href = \"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\";
\t\t\t\t\t    }
\t\t\t\t\t    function onFbInit() 
\t\t\t\t\t    {
\t\t\t\t\t        if (typeof(FB) != 'undefined' && FB != null ) 
\t\t\t\t\t        {              
\t\t\t\t\t            FB.Event.subscribe('auth.statusChange', function(response) 
\t\t\t\t\t            {
\t\t\t\t\t                if (response.session || response.authResponse) 
\t\t\t\t\t                    setTimeout(goLogIn, 500);
\t\t\t\t\t                else 
\t\t\t\t\t                    window.location.href = \"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\";
\t\t\t\t\t            });
\t\t\t\t\t        }
\t\t\t\t\t    }
\t\t\t\t\t</script>

\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t";
        // line 39
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true, "label" => "Facebook", "size" => "large"));
        echo "
\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t</li>
\t\t\t</ul>
\t\t</li>
\t\t<li id=\"menu-item-113\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113\">
\t\t\t<label id=\"labelLog\" for=\"username\">&nbsp;&nbsp;Login:</label>
    \t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
\t\t</li>
\t\t<li id=\"menu-item-114\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-114\">
\t\t\t<label id=\"labelLog\" for=\"password\">&nbsp;&nbsp;Mot de passe:</label>
    \t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t</li>
\t\t<li id=\"menu-item-115\" class=\"menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115\">
\t\t\t<input type=\"submit\" value=\"Connexion\" />
\t\t</li>
\t</ul>\t\t\t\t\t\t\t\t<a href=\"#\" id=\"pull\">Menu</a>
</form>";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  76 => 28,  58 => 21,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 98,  134 => 60,  126 => 53,  65 => 50,  53 => 40,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 21,  273 => 99,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 23,  63 => 24,  59 => 20,  47 => 9,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  79 => 28,  75 => 17,  68 => 14,  56 => 18,  50 => 16,  29 => 3,  87 => 61,  72 => 32,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 35,  88 => 32,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 13,  35 => 12,  31 => 4,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 25,  66 => 23,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 79,  116 => 48,  112 => 75,  109 => 34,  106 => 43,  103 => 32,  99 => 38,  95 => 28,  92 => 46,  86 => 33,  82 => 39,  80 => 30,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 17,  51 => 15,  48 => 33,  45 => 6,  42 => 10,  39 => 10,  36 => 8,  33 => 4,  30 => 5,);
    }
}
