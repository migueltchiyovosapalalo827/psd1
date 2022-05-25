<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\laragon\www\psd1\resources\views/Biblioteca/Livro/ver_livro.twig */
class __TwigTemplate_2d064c89d590c90ebded6c7b519116ad15842c8a4e6dc080dfac9e4d07f4ad71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
        echo "</title>


    <link type=\"text/css\" href=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/vendor-bootstrap-datepicker.css"]);
        echo "\" rel=\"stylesheet\">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"";
        // line 17
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app.css"]);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app.rtl.css"]);
        echo "\" rel=\"stylesheet\">

    <!-- Simplebar -->
    <link type=\"text/css\" href=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/simplebar.css"]);
        echo "\" rel=\"stylesheet\">
</head>

<body>
<div class=\"fixed-top\">

    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary justify-content-start d-flex\">

        <a  class=\"btn btn-white\" href=\"/biblioteca/pesquisar_livro\">
            <i class=\"material-icons align-middle md-18\">chevron_left</i>
            Voltar
        </a>

    </nav>
</div>

<!-- main content -->
<div class=\"top-navbar\">

    <div class=\"container container--wide pt-3 justify-content-end\">

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card \">
                    <div class=\"\">
                        <div class=\"w-100 h-25 justify-content-center d-flex\">
                            ";
        // line 47
        if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "capa", [], "any", false, false, false, 47)) {
            // line 48
            echo "                                <img style=\"width: 100%;height: 250px;\" src=\"";
            echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/livros/capas"]);
            echo "/";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "capa", [], "any", false, false, false, 48), "html", null, true);
            echo "\" alt=\"\">
                            ";
        } else {
            // line 50
            echo "                                <img style=\"width: 100%;height: 250px;\" src=\"";
            echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/livros/capas/capa_geral.png"]);
            echo "\" alt=\"Capa geral\">
                            ";
        }
        // line 52
        echo "
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <form >
                            <div class=\"mb-3\">
                                <div class=\"d-flex align-items-baseline justify-content-start mb-3\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">home</i>
                                        <b class=\"align-middle\">Área: </b>";
        // line 61
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "curso", [], "any", false, false, false, 61), "nome", [], "any", false, false, false, 61), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">people</i>
                                        <b class=\"align-middle\">Autor: </b>";
        // line 67
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "autor", [], "any", false, false, false, 67), "nome", [], "any", false, false, false, 67), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">access_time</i>
                                        <b class=\"align-middle\">Data de criação: </b>";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "created_at", [], "any", false, false, false, 73), "d/m/y", false), "html", null, true);
        echo "
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">access_time</i>
                                        <b class=\"align-middle\">Data de atualização: </b> ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "updated_at", [], "any", false, false, false, 79), "d/m/y", false), "html", null, true);
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 83
        if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "ficheiro", [], "any", false, false, false, 83)) {
            // line 84
            echo "                                <a class=\" btn btn-link bg-primary btn-primary btn-block text-white\" target=\"_blank\" href=\"";
            echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/livros/ficheiros/"]);
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "ficheiro", [], "any", false, false, false, 84), "html", null, true);
            echo "\">  <i class=\"material-icons font-1 align-bottom\">file_download</i>Descarregar ficheiro</a>
                            ";
        }
        // line 86
        echo "
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"mb-3\">
                    <h1 class=\" mb-0\"> ";
        // line 93
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "titulo", [], "any", false, false, false, 93), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Descrição</h4>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">
                            ";
        // line 101
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "descricao", [], "any", false, false, false, 101), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- jQuery -->
<script src=\"";
        // line 114
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/jquery.min.js"]);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 117
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/popper.js"]);
        echo "\"></script>
<script src=\"";
        // line 118
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/bootstrap.min.js"]);
        echo "\"></script>

<!-- APP -->
<script src=\"";
        // line 121
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/color_variables.js"]);
        echo "\"></script>
<script src=\"";
        // line 122
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/app.js"]);
        echo "\"></script>


<script src=\"";
        // line 125
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/dom-factory.js"]);
        echo "\"></script>
<!-- DOM Factory -->
<script src=\"";
        // line 127
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/material-design-kit.js"]);
        echo "\"></script>
<!-- MDK -->
";
        // line 129
        $this->loadTemplate("@include/alert.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/ver_livro.twig", 129)->display($context);
        // line 130
        echo "</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/ver_livro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 130,  243 => 129,  238 => 127,  233 => 125,  227 => 122,  223 => 121,  217 => 118,  213 => 117,  207 => 114,  191 => 101,  180 => 93,  171 => 86,  164 => 84,  162 => 83,  155 => 79,  146 => 73,  137 => 67,  128 => 61,  117 => 52,  111 => 50,  103 => 48,  101 => 47,  72 => 21,  66 => 18,  62 => 17,  53 => 11,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ titulo }}</title>


    <link type=\"text/css\" href=\"{{asset('css/vendor-bootstrap-datepicker.css')}}\" rel=\"stylesheet\">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{asset('css/app.css')}}\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"{{asset('css/app.rtl.css')}}\" rel=\"stylesheet\">

    <!-- Simplebar -->
    <link type=\"text/css\" href=\"{{asset('vendor/simplebar.css')}}\" rel=\"stylesheet\">
</head>

<body>
<div class=\"fixed-top\">

    <nav class=\"navbar navbar-expand-md navbar-dark bg-primary justify-content-start d-flex\">

        <a  class=\"btn btn-white\" href=\"/biblioteca/pesquisar_livro\">
            <i class=\"material-icons align-middle md-18\">chevron_left</i>
            Voltar
        </a>

    </nav>
</div>

<!-- main content -->
<div class=\"top-navbar\">

    <div class=\"container container--wide pt-3 justify-content-end\">

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card \">
                    <div class=\"\">
                        <div class=\"w-100 h-25 justify-content-center d-flex\">
                            {% if livro.capa %}
                                <img style=\"width: 100%;height: 250px;\" src=\"{{asset('ficheiros/livros/capas')}}/{{ livro.capa }}\" alt=\"\">
                            {% else %}
                                <img style=\"width: 100%;height: 250px;\" src=\"{{asset('ficheiros/livros/capas/capa_geral.png')}}\" alt=\"Capa geral\">
                            {% endif %}

                        </div>
                    </div>
                    <div class=\"card-body\">
                        <form >
                            <div class=\"mb-3\">
                                <div class=\"d-flex align-items-baseline justify-content-start mb-3\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">home</i>
                                        <b class=\"align-middle\">Área: </b>{{ livro.curso.nome }}
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">people</i>
                                        <b class=\"align-middle\">Autor: </b>{{ livro.autor.nome }}
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">access_time</i>
                                        <b class=\"align-middle\">Data de criação: </b>{{ livro.created_at|date(\"d/m/y\",false) }}
                                    </div>
                                </div>
                                <div class=\"d-flex align-items-center justify-content-between\">
                                    <div>
                                        <i class=\"material-icons md-18 align-middle mr-1 text-muted\">access_time</i>
                                        <b class=\"align-middle\">Data de atualização: </b> {{ livro.updated_at|date(\"d/m/y\",false) }}
                                    </div>
                                </div>
                            </div>
                            {% if livro.ficheiro %}
                                <a class=\" btn btn-link bg-primary btn-primary btn-block text-white\" target=\"_blank\" href=\"{{asset('ficheiros/livros/ficheiros/')}}{{ livro.ficheiro }}\">  <i class=\"material-icons font-1 align-bottom\">file_download</i>Descarregar ficheiro</a>
                            {% endif %}

                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"mb-3\">
                    <h1 class=\" mb-0\"> {{ livro.titulo }}</h1>
                </div>
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Descrição</h4>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">
                            {{ livro.descricao }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- jQuery -->
<script src=\"{{asset('vendor/jquery.min.js')}}\"></script>

<!-- Bootstrap -->
<script src=\"{{asset('vendor/popper.js')}}\"></script>
<script src=\"{{asset('vendor/bootstrap.min.js')}}\"></script>

<!-- APP -->
<script src=\"{{asset('js/color_variables.js')}}\"></script>
<script src=\"{{asset('js/app.js')}}\"></script>


<script src=\"{{asset('vendor/dom-factory.js')}}\"></script>
<!-- DOM Factory -->
<script src=\"{{asset('vendor/material-design-kit.js')}}\"></script>
<!-- MDK -->
{% include \"@include/alert.twig\" %}
</body>

</html>
", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/ver_livro.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/ver_livro.twig");
    }
}
