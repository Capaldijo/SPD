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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname")), "html", null, true);
        echo "</h1>


\t";
        // line 8
        if (file_exists((((isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")) . "upload/imageProfil/image_android") . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))) {
            // line 9
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("upload/imageProfil/image_android" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td><label><b>Login </b></label></td>
\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t
\t\t<tr>
\t\t\t<td><label><b>Votre sexe </b></label></td>
\t\t\t<td>
\t\t\t\t";
        // line 36
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe")) {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateNaissance"), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td><label><b>Votre UFR </b></label></td>
\t\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ufr")), "html", null, true);
        echo "</td>
\t\t</tr>

\t\t";
        // line 54
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "numTel") != null)) {
            // line 55
            echo "\t\t\t<tr>
\t\t\t\t<td><label><b>Numéro Téléphone </b></label></td>
\t\t\t\t<td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "numTel"), "html", null, true);
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
        if (((isset($context["interestList"]) ? $context["interestList"] : $this->getContext($context, "interestList")) == null)) {
            // line 72
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))) {
                // line 73
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname")), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["interestList"]) ? $context["interestList"] : $this->getContext($context, "interestList")));
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
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) {
                    // line 80
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interest"]) ? $context["interest"] : $this->getContext($context, "interest")), "titre_interet"), "html", null, true);
                    echo ".
\t\t\t\t\t\t";
                } elseif (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 3)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interest"]) ? $context["interest"] : $this->getContext($context, "interest")), "titre_interet"), "html", null, true);
                    echo ",<br />
\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["interest"]) ? $context["interest"] : $this->getContext($context, "interest")), "titre_interet"), "html", null, true);
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
            // line 94
            echo "
\t\t\t<div id=\"buttonProfil\">

\t\t\t\t";
            // line 97
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username") == $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))) {
                // line 98
                echo "\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('routing')->getPath("descartes_utilisateur_setting");
                echo "\"><input type=\"button\" id=\"submit\" value=\"Modifier votre Profil\"/></a>
\t\t\t\t";
            } elseif (((isset($context["ami"]) ? $context["ami"] : $this->getContext($context, "ami")) == null)) {
                // line 100
                echo "
\t\t\t\t\t<form action=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
                echo "\" method=\"post\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : $this->getContext($context, "formAdd")), 'enctype');
                echo ">

\t\t\t\t\t\t";
                // line 104
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : $this->getContext($context, "formAdd")), 'errors');
                echo "

\t\t\t\t\t\t";
                // line 108
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : $this->getContext($context, "formAdd")), 'rest');
                echo "

\t\t\t\t\t\t<a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessageTo", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"button\" id=\"submit\" class=\"btn btn-primary\" value=\"Envoyer un message\"/>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<input type=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"/>

\t\t\t\t\t</form>

\t\t\t\t";
            } elseif (((isset($context["ami"]) ? $context["ami"] : $this->getContext($context, "ami")) != null)) {
                // line 119
                echo "
\t\t\t\t\t<form action=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_profil", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
                echo "\" method=\"post\" ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : $this->getContext($context, "formAdd")), 'enctype');
                echo ">

\t\t\t\t\t\t";
                // line 123
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : $this->getContext($context, "formAdd")), 'errors');
                echo "

\t\t\t\t\t\t";
                // line 127
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAdd"]) ? $context["formAdd"] : $this->getContext($context, "formAdd")), 'rest');
                echo "

\t\t\t\t\t\t<a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("descartes_utilisateur_sendMessageTo", array("login" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"))), "html", null, true);
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
        return array (  312 => 141,  307 => 138,  295 => 129,  289 => 127,  283 => 123,  276 => 120,  273 => 119,  261 => 110,  255 => 108,  249 => 104,  242 => 101,  239 => 100,  233 => 98,  231 => 97,  226 => 94,  224 => 93,  217 => 88,  214 => 87,  200 => 86,  194 => 84,  188 => 82,  182 => 80,  179 => 79,  161 => 78,  158 => 77,  154 => 75,  148 => 73,  145 => 72,  143 => 71,  130 => 60,  124 => 57,  120 => 55,  118 => 54,  112 => 51,  104 => 46,  97 => 41,  93 => 39,  89 => 37,  87 => 36,  78 => 30,  70 => 25,  56 => 13,  50 => 11,  44 => 9,  42 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
