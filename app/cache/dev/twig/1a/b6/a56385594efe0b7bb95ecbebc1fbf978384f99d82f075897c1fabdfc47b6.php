<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_1ab6a56385594efe0b7bb95ecbebc1fbf978384f99d82f075897c1fabdfc47b6 extends Twig_Template
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
        echo "<div class=\"fb-login-button\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : $this->getContext($context, "showFaces")), "html", null, true);
        echo "\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")), "html", null, true);
        echo "\" data-scope=\"";
        echo twig_escape_filter($this->env, (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")), "html", null, true);
        echo "\" data-autologoutlink=\"";
        echo twig_escape_filter($this->env, (isset($context["autologoutlink"]) ? $context["autologoutlink"] : $this->getContext($context, "autologoutlink")), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" data-max-rows=\"";
        echo twig_escape_filter($this->env, (isset($context["maxRows"]) ? $context["maxRows"] : $this->getContext($context, "maxRows")), "html", null, true);
        echo "\"  data-onlogin=\"";
        echo twig_escape_filter($this->env, (isset($context["onlogin"]) ? $context["onlogin"] : $this->getContext($context, "onlogin")), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  33 => 7,  24 => 3,  92 => 46,  82 => 39,  72 => 32,  50 => 16,  44 => 11,  36 => 2,  30 => 5,  27 => 4,  21 => 2,  19 => 1,  273 => 99,  270 => 98,  264 => 38,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 31,  228 => 21,  225 => 20,  195 => 133,  183 => 123,  172 => 115,  163 => 109,  152 => 100,  150 => 98,  134 => 85,  126 => 80,  122 => 79,  116 => 76,  112 => 75,  105 => 71,  87 => 61,  79 => 55,  73 => 53,  67 => 51,  65 => 50,  53 => 40,  51 => 34,  48 => 33,  46 => 12,  22 => 2,  43 => 4,  37 => 6,  35 => 8,  32 => 3,  29 => 2,  127 => 37,  120 => 35,  111 => 31,  107 => 30,  101 => 70,  93 => 28,  89 => 27,  81 => 22,  77 => 20,  71 => 18,  60 => 16,  58 => 21,  47 => 11,  42 => 8,  39 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
