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

/* @include/main_painel.twig */
class __TwigTemplate_39dc6224ea88a6d99b1f31a9d1b1bcc24d4c4be986110a6496ff7f1b3b9fe423 extends Template
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
            'modal' => [$this, 'block_modal'],
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
        // line 14
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app.css"]);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 15
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app.rtl.css"]);
        echo "\" rel=\"stylesheet\">


    <!-- Simplebar -->
    <link type=\"text/css\" href=\"";
        // line 19
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/simplebar.css"]);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 20
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/PNotifyBrightTheme.css"]);
        echo "\" rel=\"stylesheet\">
    <!-- For old IEs -->
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\" />

    <!-- For new browsers multisize ico  -->
    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32\" href=\"";
        // line 25
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\">

    <!-- Chrome for Android -->
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 28
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-192.png"]);
        echo "\">

    <!-- For iPhone 6+ downscaled for other devices -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 31
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-180-precomposed.png"]);
        echo "\">

    <!-- For IE10 Metro -->
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
    <meta name=\"msapplication-TileImage\" content=\"favicon-114-precomposed.png\">
    ";
        // line 36
        $this->displayBlock('css', $context, $blocks);
        // line 38
        echo "</head>

<body>

<div class=\"mdk-drawer-layout js-mdk-drawer-layout\" data-fullbleed data-push data-responsive-width=\"992px\" data-has-scrolling-region>

    <div class=\"mdk-drawer-layout__content\">
        <!-- header-layout -->
        <div class=\"mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable\">
            <!-- header -->
            <div class=\"mdk-header js-mdk-header bg-primary\" data-fixed>
                <div class=\"mdk-header__content\">
                    ";
        // line 50
        $this->loadTemplate("_include/menu_superitor.twig", "@include/main_painel.twig", 50)->display($context);
        // line 51
        echo "                </div>
            </div>

            <!-- content -->
            <div class=\"mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable \" style=\"min-height: 100vh;\">
                <!-- main content -->
                <div class=\"container-fluid\">
                    ";
        // line 58
        $this->displayBlock('conteudo', $context, $blocks);
        // line 61
        echo "                </div>
            </div>
        </div>
    </div>


    ";
        // line 67
        $this->loadTemplate("_include/menu_lateral.twig", "@include/main_painel.twig", 67)->display($context);
        // line 68
        echo "    ";
        $this->loadTemplate("_include/menu_superior_lateral_direito.twig", "@include/main_painel.twig", 68)->display($context);
        // line 69
        echo "    ";
        $this->displayBlock('modal', $context, $blocks);
        // line 72
        echo "
</div>


<!-- jQuery -->
<script src=\"";
        // line 77
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/jquery.min.js"]);
        echo "\"></script>
<script src=\"";
        // line 78
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/popper.js"]);
        echo "\"></script>
<script src=\"";
        // line 79
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/bootstrap.min.js"]);
        echo "\"></script>
<!-- Bootstrap -->



<!-- Simplebar -->
<!-- Used for adding a custom scrollbar to the drawer -->
<script src=\"";
        // line 86
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/simplebar.js"]);
        echo "\"></script>


<!-- Vendor -->
<!-- <script src=\"";
        // line 90
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/Chart.min.js"]);
        echo "\"></script>-->
<!-- <script src=\"";
        // line 91
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/moment.min.js"]);
        echo "\"></script>-->


<!-- APP -->
<script src=\"";
        // line 95
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/color_variables.js"]);
        echo "\"></script>
<script src=\"";
        // line 96
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/app.js"]);
        echo "\"></script>

<script src=\"";
        // line 98
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/dom-factory.js"]);
        echo "\"></script>
<!-- DOM Factory -->
<script src=\"";
        // line 100
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/material-design-kit.js"]);
        echo "\"></script>
<!-- MDK -->
";
        // line 102
        $this->loadTemplate("_include/alert.twig", "@include/main_painel.twig", 102)->display($context);
        // line 103
        echo "<script type=\"text/javascript\" src=\"";
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["js/devgonga.js"]);
        echo "\"></script>

<script>
    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit();

        // Connect button(s) to drawer(s)
        var sidebarToggle = document.querySelectorAll('[data-toggle=\"sidebar\"]');

        sidebarToggle.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                var drawer = document.querySelector(selector);
                if (drawer) {
                    if (selector == '#default-drawer') {
                        \$('.container-fluid').toggleClass('container--max');
                    }
                    drawer.mdkDrawer.toggle();
                }
            })
        })
    })()
</script>
";
        // line 128
        $this->displayBlock('js', $context, $blocks);
        // line 130
        echo "

</body>

</html>
";
    }

    // line 36
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
    }

    // line 58
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "
                    ";
    }

    // line 69
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "
    ";
    }

    // line 128
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@include/main_painel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 128,  276 => 70,  272 => 69,  267 => 59,  263 => 58,  259 => 37,  255 => 36,  246 => 130,  244 => 128,  215 => 103,  213 => 102,  208 => 100,  203 => 98,  198 => 96,  194 => 95,  187 => 91,  183 => 90,  176 => 86,  166 => 79,  162 => 78,  158 => 77,  151 => 72,  148 => 69,  145 => 68,  143 => 67,  135 => 61,  133 => 58,  124 => 51,  122 => 50,  108 => 38,  106 => 36,  98 => 31,  92 => 28,  86 => 25,  80 => 22,  75 => 20,  71 => 19,  64 => 15,  60 => 14,  51 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{titulo}}</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{asset('css/app.css')}}\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"{{asset('css/app.rtl.css')}}\" rel=\"stylesheet\">


    <!-- Simplebar -->
    <link type=\"text/css\" href=\"{{asset('vendor/simplebar.css')}}\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"{{asset('css/PNotifyBrightTheme.css')}}\" rel=\"stylesheet\">
    <!-- For old IEs -->
    <link rel=\"shortcut icon\" href=\"{{asset('images/favicon/favicon.ico')}}\" />

    <!-- For new browsers multisize ico  -->
    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32\" href=\"{{asset('images/favicon/favicon.ico')}}\">

    <!-- Chrome for Android -->
    <link rel=\"icon\" sizes=\"192x192\" href=\"{{asset('images/favicon/favicon-192.png')}}\">

    <!-- For iPhone 6+ downscaled for other devices -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{asset('images/favicon/favicon-180-precomposed.png')}}\">

    <!-- For IE10 Metro -->
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
    <meta name=\"msapplication-TileImage\" content=\"favicon-114-precomposed.png\">
    {% block css %}
    {% endblock %}
</head>

<body>

<div class=\"mdk-drawer-layout js-mdk-drawer-layout\" data-fullbleed data-push data-responsive-width=\"992px\" data-has-scrolling-region>

    <div class=\"mdk-drawer-layout__content\">
        <!-- header-layout -->
        <div class=\"mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable\">
            <!-- header -->
            <div class=\"mdk-header js-mdk-header bg-primary\" data-fixed>
                <div class=\"mdk-header__content\">
                    {% include \"_include/menu_superitor.twig\" %}
                </div>
            </div>

            <!-- content -->
            <div class=\"mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable \" style=\"min-height: 100vh;\">
                <!-- main content -->
                <div class=\"container-fluid\">
                    {% block conteudo %}

                    {% endblock %}
                </div>
            </div>
        </div>
    </div>


    {% include \"_include/menu_lateral.twig\" %}
    {% include \"_include/menu_superior_lateral_direito.twig\" %}
    {% block modal %}

    {% endblock %}

</div>


<!-- jQuery -->
<script src=\"{{asset('vendor/jquery.min.js')}}\"></script>
<script src=\"{{asset('vendor/popper.js')}}\"></script>
<script src=\"{{asset('vendor/bootstrap.min.js')}}\"></script>
<!-- Bootstrap -->



<!-- Simplebar -->
<!-- Used for adding a custom scrollbar to the drawer -->
<script src=\"{{asset('vendor/simplebar.js')}}\"></script>


<!-- Vendor -->
<!-- <script src=\"{{asset('vendor/Chart.min.js')}}\"></script>-->
<!-- <script src=\"{{asset('vendor/moment.min.js')}}\"></script>-->


<!-- APP -->
<script src=\"{{asset('js/color_variables.js')}}\"></script>
<script src=\"{{asset('js/app.js')}}\"></script>

<script src=\"{{asset('vendor/dom-factory.js')}}\"></script>
<!-- DOM Factory -->
<script src=\"{{asset('vendor/material-design-kit.js')}}\"></script>
<!-- MDK -->
{% include \"_include/alert.twig\" %}
<script type=\"text/javascript\" src=\"{{asset('js/devgonga.js')}}\"></script>

<script>
    (function() {
        'use strict';
        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit();

        // Connect button(s) to drawer(s)
        var sidebarToggle = document.querySelectorAll('[data-toggle=\"sidebar\"]');

        sidebarToggle.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                var drawer = document.querySelector(selector);
                if (drawer) {
                    if (selector == '#default-drawer') {
                        \$('.container-fluid').toggleClass('container--max');
                    }
                    drawer.mdkDrawer.toggle();
                }
            })
        })
    })()
</script>
{% block js %}
{% endblock %}


</body>

</html>
", "@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views\\_include\\main_painel.twig");
    }
}
