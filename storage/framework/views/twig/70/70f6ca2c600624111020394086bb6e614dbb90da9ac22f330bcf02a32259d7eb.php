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

/* @include/menu_simples.twig */
class __TwigTemplate_95126dbf3d8da093823d08323e6cee9d75b6f1348fe42a683b26f8ed300fe72b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'conteudo' => [$this, 'block_conteudo'],
            'js' => [$this, 'block_js'],
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


    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"";
        // line 15
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app.css"]);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 16
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app.rtl.css"]);
        echo "\" rel=\"stylesheet\">

    <!-- Simplebar -->
    <link type=\"text/css\" href=\"";
        // line 19
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/simplebar.css"]);
        echo "\" rel=\"stylesheet\">

        ";
        // line 21
        $this->displayBlock('css', $context, $blocks);
        // line 24
        echo "</head>

<body>
<div class=\"fixed-top\">
    <nav class=\"navbar navbar-dark bg-primary d-flex align-items-center  flex-nowrap justify-content-between\">
        <div class=\"d-flex align-items-center\">
            <button class=\"btn btn-link text-white pl-0\" type=\"button\" data-toggle=\"sidebar\">
                <i class=\"material-icons align-middle md-36\">short_text</i>
            </button>
            <div class=\"page-title m-0\">";
        // line 33
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["sistema"] ?? null), "nome", [], "any", false, false, false, 33), "html", null, true);
        echo "</div>
        </div>
        <div class=\"\" id=\"mainNavbar\">
            <ul class=\"navbar-nav ml-auto align-items-center\">
                <li class=\"nav-item btn d-flex align-items-center  dropdown-toggle dropdown-clear-caret\"  data-toggle=\"sidebar\" data-target=\"#user-drawer\" >
                    <i class=\"material-icons text-white\">person</i>
                    <a href=\"#\" class=\"nav-link\" >
                        ";
        // line 40
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 40), "pessoa", [], "any", false, false, false, 40), "nomeComSobrenome", [], "method", false, false, false, 40), "html", null, true);
        echo "
                    </a>
                </li>
            </ul>
        </div>
    </nav>



</div>
<!-- main content -->
<div class=\"top-navbar mt-2\">
    <div class=\"container container--wide mt-3 \">

        ";
        // line 54
        $this->displayBlock('conteudo', $context, $blocks);
        // line 57
        echo "
    </div>
</div>
";
        // line 60
        $this->loadTemplate("@include/menu_lateral.twig", "@include/menu_simples.twig", 60)->display($context);
        // line 61
        $this->loadTemplate("@include/menu_superior_lateral_direito.twig", "@include/menu_simples.twig", 61)->display($context);
        // line 62
        echo "<!-- jQuery -->
<script src=\"";
        // line 63
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/jquery.min.js"]);
        echo "\"></script>

<!-- Bootstrap -->
<script src=\"";
        // line 66
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/popper.js"]);
        echo "\"></script>
<script src=\"";
        // line 67
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/bootstrap.min.js"]);
        echo "\"></script>

<!-- APP -->
<script src=\"";
        // line 70
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/color_variables.js"]);
        echo "\"></script>
<script src=\"";
        // line 71
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/app.js"]);
        echo "\"></script>


<script src=\"";
        // line 74
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/dom-factory.js"]);
        echo "\"></script>
<!-- DOM Factory -->
<script src=\"";
        // line 76
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/material-design-kit.js"]);
        echo "\"></script>
<!-- MDK -->

<script>
    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit();
        // Connect button(s) to drawer(s)
        var sidebarToggle = document.querySelectorAll('[data-toggle=\"sidebar\"]');
        sidebarToggle.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer';
                var drawer = document.querySelector(selector);
                if (drawer) {
                    if (selector == '#default-drawer') {
                        \$('.container-fluid').toggleClass('container--max');
                    }
                    drawer.mdkDrawer.toggle();
                }
            })
        })
    })();
</script>

    ";
        // line 101
        $this->displayBlock('js', $context, $blocks);
        // line 104
        echo "</body>

</html>
";
    }

    // line 21
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
        ";
    }

    // line 54
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "
        ";
    }

    // line 101
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@include/menu_simples.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 102,  215 => 101,  210 => 55,  206 => 54,  201 => 22,  197 => 21,  190 => 104,  188 => 101,  160 => 76,  155 => 74,  149 => 71,  145 => 70,  139 => 67,  135 => 66,  129 => 63,  126 => 62,  124 => 61,  122 => 60,  117 => 57,  115 => 54,  98 => 40,  88 => 33,  77 => 24,  75 => 21,  70 => 19,  64 => 16,  60 => 15,  50 => 8,  41 => 1,);
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


    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{asset('css/app.css')}}\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"{{asset('css/app.rtl.css')}}\" rel=\"stylesheet\">

    <!-- Simplebar -->
    <link type=\"text/css\" href=\"{{asset('vendor/simplebar.css')}}\" rel=\"stylesheet\">

        {% block css %}

        {% endblock %}
</head>

<body>
<div class=\"fixed-top\">
    <nav class=\"navbar navbar-dark bg-primary d-flex align-items-center  flex-nowrap justify-content-between\">
        <div class=\"d-flex align-items-center\">
            <button class=\"btn btn-link text-white pl-0\" type=\"button\" data-toggle=\"sidebar\">
                <i class=\"material-icons align-middle md-36\">short_text</i>
            </button>
            <div class=\"page-title m-0\">{{ sistema.nome }}</div>
        </div>
        <div class=\"\" id=\"mainNavbar\">
            <ul class=\"navbar-nav ml-auto align-items-center\">
                <li class=\"nav-item btn d-flex align-items-center  dropdown-toggle dropdown-clear-caret\"  data-toggle=\"sidebar\" data-target=\"#user-drawer\" >
                    <i class=\"material-icons text-white\">person</i>
                    <a href=\"#\" class=\"nav-link\" >
                        {{ SESSION.usuario.pessoa.nomeComSobrenome()}}
                    </a>
                </li>
            </ul>
        </div>
    </nav>



</div>
<!-- main content -->
<div class=\"top-navbar mt-2\">
    <div class=\"container container--wide mt-3 \">

        {% block conteudo %}

        {% endblock %}

    </div>
</div>
{% include \"@include/menu_lateral.twig\" %}
{% include \"@include/menu_superior_lateral_direito.twig\" %}
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

<script>
    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit();
        // Connect button(s) to drawer(s)
        var sidebarToggle = document.querySelectorAll('[data-toggle=\"sidebar\"]');
        sidebarToggle.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer';
                var drawer = document.querySelector(selector);
                if (drawer) {
                    if (selector == '#default-drawer') {
                        \$('.container-fluid').toggleClass('container--max');
                    }
                    drawer.mdkDrawer.toggle();
                }
            })
        })
    })();
</script>

    {% block js %}

        {% endblock %}
</body>

</html>
", "@include/menu_simples.twig", "C:\\laragon\\www\\psd1\\resources\\views\\_include\\menu_simples.twig");
    }
}
