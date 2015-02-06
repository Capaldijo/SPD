<?php

/* DescartesUtilisateurBundle:Utilisateur:profil.html.twig */
class __TwigTemplate_1e4df98c09a9579e5f759d1b8f5ebc60d0b51b4fc1a085e0c8141cf3824223cf extends Twig_Template
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
\t<h1 align=\"center\">";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname")), "html", null, true);
        echo "</h1>


\t";
        // line 8
        if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : null) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id")))) {
            // line 9
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
            echo "\"  alt=\"ImageProfil\" width=\"200\" height=\"300\" id=\"imageProfil\" />
\t";
        } else {
            // line 11
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("upload/imageProfil/defaultAvatar.png"), "html", null, true);
            echo "\"  alt=\"ImageProfil\" width=\"200\" height=\"300\" id=\"imageProfil\" />
\t";
        }
        // line 13
        echo "\t

\t<br/ >

\t<div id=\"infoProfil\">
\t\tInformations
\t</div>

\t<table id=\"profilTableMain\">

\t\t<tr>
\t\t\t<td><label><b>Mail </b></label></td>
\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td><label><b>Login </b></label></td>
\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<td><label><b>Votre sexe </b></label></td>
\t\t\t<td>
\t\t\t\t";
        // line 36
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "sexe")) {
            // line 37
            echo "\t\t\t\t\t<label>Homme</label>
\t\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t\t<label>Femme</label>
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td><label><b>Date de naissance </b></label></td>
\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "dateNaissance"), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td><label><b>Votre UFR </b></label></td>
\t\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ufr")), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t";
        // line 54
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "numTel") != null)) {
            // line 55
            echo "\t\t\t<tr>
\t\t\t\t<td><label><b>Numéro Téléphone </b></label></td>
\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "numTel"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
        }
        // line 60
        echo "
\t\t</table><br />

\t\t<div id=\"interetProfil\">
\t\t\tCentres D'intérêts
\t\t</div>

\t\t<table id=\"profilTableSecond\">

\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 71
        if (((isset($context["interestList"]) ? $context["interestList"] : null) == null)) {
            // line 72
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username") != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))) {
                // line 73
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname")), "html", null, true);
                echo " n'a aucun centre d'interêt pour le moment.
\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\tVous n'avez aucun centre d'interêt pour le moment.
\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["interestList"]) ? $context["interestList"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["interest"]) {
                // line 79
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                    // line 80
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interest"]) ? $context["interest"] : null), "titre_interet"), "html", null, true);
                    echo ".
\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 3)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interest"]) ? $context["interest"] : null), "titre_interet"), "html", null, true);
                    echo ",<br />
\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interest"]) ? $context["interest"] : null), "titre_interet"), "html", null, true);
                    echo ",
\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t";
        }
        // line 88
        echo "\t\t\t</td>
\t\t</tr>

\t\t</table> <br />

\t\t";
        // line 93
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user") != null)) {
            // line 94
            echo "
\t\t\t<div id=\"buttonProfil\">

\t\t\t\t";
            // line 97
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username") == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))) {
                // line 98
                echo "\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_setting");
                echo "\"><input type=\"button\" id=\"submit\" value=\"Modifier votre Profil\"/></a>
\t\t\t\t";
            } elseif (((isset($context["ami"]) ? $context["ami"] : null) == null)) {
                // line 100
                echo "
\t\t\t\t\t<form action=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))), "html", null, true);
                echo "\" method=\"post\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : null), 'enctype');
                echo ">

\t\t\t\t\t\t";
                // line 104
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : null), 'errors');
                echo "

\t\t\t\t\t\t";
                // line 108
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : null), 'rest');
                echo "

\t\t\t\t\t\t<a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessageTo", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"button\" id=\"submit\" class=\"btn btn-primary\" value=\"Envoyer un message\"/>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"/>

\t\t\t\t\t</form>

\t\t\t\t";
            } elseif (((isset($context["ami"]) ? $context["ami"] : null) != null)) {
                // line 119
                echo "
\t\t\t\t\t<form action=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))), "html", null, true);
                echo "\" method=\"post\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : null), 'enctype');
                echo ">

\t\t\t\t\t\t";
                // line 123
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : null), 'errors');
                echo "

\t\t\t\t\t\t";
                // line 127
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : null), 'rest');
                echo "

\t\t\t\t\t\t<a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessageTo", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"button\" id=\"submit\" class=\"btn btn-primary\" value=\"Envoyer un message\"/>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Supprimer\"/>

\t\t\t\t\t</form>

\t\t\t\t";
            }
            // line 138
            echo "\t\t\t
\t\t\t</div>
\t\t";
        }
        // line 141
        echo "
";
    }

    public function getTemplateName()
    {
        return "DescartesUtilisateurBundle:Utilisateur:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 138,  295 => 129,  289 => 127,  276 => 120,  261 => 110,  255 => 108,  249 => 104,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  200 => 86,  194 => 84,  188 => 82,  161 => 78,  148 => 73,  145 => 72,  124 => 57,  120 => 55,  118 => 54,  104 => 46,  97 => 41,  70 => 25,  34 => 5,  96 => 38,  76 => 28,  58 => 21,  52 => 19,  23 => 3,  84 => 31,  270 => 98,  260 => 37,  256 => 36,  251 => 35,  248 => 34,  242 => 101,  228 => 21,  225 => 20,  195 => 133,  172 => 115,  152 => 100,  150 => 98,  134 => 60,  126 => 53,  65 => 50,  53 => 40,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 141,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 38,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 87,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 21,  273 => 119,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 93,  221 => 77,  219 => 76,  217 => 88,  208 => 68,  204 => 72,  179 => 79,  159 => 61,  143 => 71,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 23,  63 => 24,  59 => 20,  47 => 9,  38 => 8,  94 => 28,  89 => 37,  85 => 25,  79 => 28,  75 => 17,  68 => 14,  56 => 13,  50 => 11,  29 => 3,  87 => 36,  72 => 32,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 39,  88 => 32,  78 => 30,  46 => 13,  27 => 4,  40 => 8,  44 => 9,  35 => 12,  31 => 4,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 123,  171 => 61,  166 => 71,  163 => 109,  158 => 77,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 54,  115 => 43,  105 => 71,  101 => 40,  91 => 27,  69 => 25,  66 => 23,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  43 => 8,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 80,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 75,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 60,  125 => 44,  122 => 79,  116 => 48,  112 => 51,  109 => 34,  106 => 43,  103 => 32,  99 => 38,  95 => 28,  92 => 46,  86 => 33,  82 => 39,  80 => 30,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 17,  51 => 15,  48 => 33,  45 => 6,  42 => 8,  39 => 10,  36 => 8,  33 => 4,  30 => 5,);
    }
}
