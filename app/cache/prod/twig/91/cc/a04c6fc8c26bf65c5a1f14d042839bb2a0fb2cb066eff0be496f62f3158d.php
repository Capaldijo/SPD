<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_91cca04c6fc8c26bf65c5a1f14d042839bb2a0fb2cb066eff0be496f62f3158d extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">

<head>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
  <title>ParisDescartes | The page you were looking for doesn't exist (404)</title>
  <style type=\"text/css\">
    body { background-color: #efefef; color: #333; font-family: Georgia,Palatino,'Book Antiqua',serif;padding:0;margin:0;text-align:center; }
    p {font-style:italic;}
    div.dialog {
      width: 490px;
      margin: 4em auto 0 auto;
    }
    img { border:none; }
  </style>
</head>

<body>
  <!-- This file lives in public/404.html -->
  <div class=\"dialog\">
    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/404.png"), "html", null, true);
        echo "\" />
    <p>It looks like that page you were looking has been mislaid, sorry.</p>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("descartes_evenement_homepage");
        echo "\"><p>Go to homepage</p></a>
  </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 23,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 25,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
