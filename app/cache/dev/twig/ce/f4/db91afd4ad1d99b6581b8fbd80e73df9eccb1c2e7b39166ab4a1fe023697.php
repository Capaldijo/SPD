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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        return array (  92 => 46,  82 => 39,  72 => 32,  50 => 16,  44 => 13,  36 => 8,  30 => 5,  27 => 4,  21 => 2,  19 => 1,  273 => 99,  270 => 98,  264 => 38,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  183 => 123,  172 => 115,  163 => 109,  152 => 100,  150 => 98,  134 => 85,  126 => 80,  122 => 79,  116 => 76,  112 => 75,  105 => 71,  87 => 61,  79 => 55,  73 => 53,  67 => 51,  65 => 50,  53 => 40,  51 => 34,  48 => 33,  46 => 20,  22 => 1,  43 => 4,  37 => 6,  35 => 12,  32 => 3,  29 => 2,  127 => 37,  120 => 35,  111 => 31,  107 => 30,  101 => 70,  93 => 28,  89 => 27,  81 => 22,  77 => 20,  71 => 18,  60 => 16,  58 => 21,  47 => 11,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  28 => 4,);
    }
}
