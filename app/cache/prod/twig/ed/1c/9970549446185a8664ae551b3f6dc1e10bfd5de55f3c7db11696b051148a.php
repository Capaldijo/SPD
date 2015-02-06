<?php

/* DescartesUtilisateurBundle:Utilisateur:readMessage.html.twig */
class __TwigTemplate_ed1c9970549446185a8664ae551b3f6dc1e10bfd5de55f3c7db11696b051148a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DescartesUtilisateurBundle::UserLayout.html.twig");

        $this->blocks = array(
            'descartes_utilisateurblock' => array($this, 'block_descartes_utilisateurblock'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DescartesUtilisateurBundle::UserLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_descartes_utilisateurblock($context, array $blocks = array())
    {
        // line 4
        echo "
\t<h1 align=\"center\">Mes Messages</h1>

\t";
        // line 7
        if (((isset($context["messagesList"]) ? $context["messagesList"] : null) == null)) {
            // line 8
            echo "\t\tVous n'avez pour le moment aucun messages.
\t";
        } else {
            // line 10
            echo "
\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messagesList"]) ? $context["messagesList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "\t\t\t<div id=\"RdMessage\">
\t\t\t\t<div id='delMessButton' >\t
\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_delMessage", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id_message"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("CancelButton.png"), "html", null, true);
                echo "\" id=\"cancelButton\" title=\"Supprimer\" /></a>
\t\t\t\t</div>
\t\t\t\t<table id=\"RdMessagetable\" style=\"border: 0px\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 19
                if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id")))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"))), "html", null, true);
                    echo "\"  alt=\"ImageProfil\" width=\"48\" height=\"48\" id=\"thumbImgProfil\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
                    echo "\"  alt=\"ImageProfil\" width=\"48\" height=\"48\" id=\"thumbImgProfil\" />
\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"vertical-align: middle\">
\t\t\t\t\t\t\t<h5>";
                // line 26
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "lastname")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "firstname")), "html", null, true);
                echo "<h5>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>


\t\t\t\t<div id=\"ContMessage\">
\t\t\t\t\t<b>Sujet: </b>
\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "sujet_message")), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"ContMessage\">
\t\t\t\t\t";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "contenu_message"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"DateMessage\">
\t\t\t\t\técrit à ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "date"), "H"), "html", null, true);
                echo "h";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "date"), "m"), "html", null, true);
                echo " le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "date"), "d/m"), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br /><br />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t
\t\t<form action=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_readMessage");
            echo "\" method=\"post\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formShowMessage"]) ? $context["formShowMessage"] : null), 'enctype');
            echo ">

\t\t\t";
            // line 52
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formShowMessage"]) ? $context["formShowMessage"] : null), 'errors');
            echo "

\t\t\t<div id=\"buttonProfil\">
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Afficher plus de messages\"/>
\t\t\t</div>
\t\t\t";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formShowMessage"]) ? $context["formShowMessage"] : null), 'rest');
            echo "
\t\t\t
\t\t</form>
\t";
        }
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:readMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  81 => 26,  77 => 24,  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 82,  161 => 78,  148 => 73,  145 => 72,  124 => 48,  120 => 55,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  96 => 36,  76 => 28,  58 => 21,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 61,  134 => 52,  126 => 53,  65 => 20,  53 => 14,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 21,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 57,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 22,  67 => 23,  63 => 19,  59 => 20,  47 => 9,  38 => 8,  94 => 28,  89 => 37,  85 => 25,  79 => 28,  75 => 17,  68 => 14,  56 => 13,  50 => 11,  29 => 3,  87 => 36,  72 => 32,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 39,  88 => 32,  78 => 30,  46 => 13,  27 => 4,  40 => 8,  44 => 9,  35 => 12,  31 => 4,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 77,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 25,  66 => 23,  62 => 23,  49 => 12,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 79,  116 => 48,  112 => 51,  109 => 43,  106 => 43,  103 => 40,  99 => 38,  95 => 28,  92 => 46,  86 => 33,  82 => 39,  80 => 30,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 17,  51 => 15,  48 => 33,  45 => 11,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 5,);
    }
}
