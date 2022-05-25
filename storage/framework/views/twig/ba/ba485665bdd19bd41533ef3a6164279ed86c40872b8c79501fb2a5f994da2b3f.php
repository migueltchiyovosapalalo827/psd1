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

/* C:\laragon\www\psd1\resources\views/Erros/404.twig */
class __TwigTemplate_f763896db5599e9fb0e82377ca7e419a8fa2efca9a39fe519fe879e37d81e804 extends Template
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
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Pagina desconhecida</title>


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
     <!-- For old IEs -->
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\" />

    <!-- For new browsers multisize ico  -->
    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32\" href=\"";
        // line 24
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\">

    <!-- Chrome for Android -->
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 27
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-192.png"]);
        echo "\">

    <!-- For iPhone 6+ downscaled for other devices -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 30
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-180-precomposed.png"]);
        echo "\">

    <!-- For IE10 Metro -->
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
    <meta name=\"msapplication-TileImage\" content=\"favicon-114-precomposed.png\">
</head>

<body>
<div class=\"mdk-drawer-layout js-mdk-drawer-layout\" data-fullbleed data-push data-has-scrolling-region>
    <div class=\"mdk-drawer-layout__content mdk-header-layout__content--scrollable\" style=\"overflow-y: auto;\" data-simplebar data-simplebar-force-enabled=\"true\">


        <div class=\"container h-vh d-flex justify-content-center align-items-center flex-column\">

            <div class=\"row w-100 justify-content-center mb-3\">
                <h1 class=\"display-1 mb-0\">404</h1>
            </div>

            <div class=\"row w-100 justify-content-center mb-3\">
                <h1 class=\"text-uppercase mb-0\">Pagina não encontrada!</h1>
            </div>

            <div class=\"row w-100 justify-content-center mb-5\">
                <a href=\"/\" class=\"btn btn-primary text-uppercase\">
                    <i class=\"material-icons md-18 align-middle\">home</i>
                    <span class=\"align-middle\">Voltar ao inicio</span>
                </a>
            </div>

            <div class=\"d-flex justify-content-center align-items-center mb-1\">
                <h2 class=\"ml-2 text-bg mb-0\"><strong>";
        // line 60
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["sistema"] ?? null), "nome", [], "any", false, false, false, 60), "html", null, true);
        echo "</strong></h2>
            </div>

            <div class=\"d-flex justify-content-center align-items-center\">
                &copy; ";
        // line 64
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["sistema"] ?? null), "desenvolvedor", [], "any", false, false, false, 64), "html", null, true);
        echo " 2020 - Todos direitos reservados.
            </div>

        </div>


    </div>
</div>

<script>
    (function() {
        'use strict';

        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit();
    });
</script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Erros/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 64,  120 => 60,  87 => 30,  81 => 27,  75 => 24,  69 => 21,  64 => 19,  58 => 16,  54 => 15,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Pagina desconhecida</title>


    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{asset('css/app.css')}}\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"{{asset('css/app.rtl.css')}}\" rel=\"stylesheet\">

    <!-- Simplebar -->
    <link type=\"text/css\" href=\"{{asset('vendor/simplebar.css')}}\" rel=\"stylesheet\">
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
</head>

<body>
<div class=\"mdk-drawer-layout js-mdk-drawer-layout\" data-fullbleed data-push data-has-scrolling-region>
    <div class=\"mdk-drawer-layout__content mdk-header-layout__content--scrollable\" style=\"overflow-y: auto;\" data-simplebar data-simplebar-force-enabled=\"true\">


        <div class=\"container h-vh d-flex justify-content-center align-items-center flex-column\">

            <div class=\"row w-100 justify-content-center mb-3\">
                <h1 class=\"display-1 mb-0\">404</h1>
            </div>

            <div class=\"row w-100 justify-content-center mb-3\">
                <h1 class=\"text-uppercase mb-0\">Pagina não encontrada!</h1>
            </div>

            <div class=\"row w-100 justify-content-center mb-5\">
                <a href=\"/\" class=\"btn btn-primary text-uppercase\">
                    <i class=\"material-icons md-18 align-middle\">home</i>
                    <span class=\"align-middle\">Voltar ao inicio</span>
                </a>
            </div>

            <div class=\"d-flex justify-content-center align-items-center mb-1\">
                <h2 class=\"ml-2 text-bg mb-0\"><strong>{{ sistema.nome }}</strong></h2>
            </div>

            <div class=\"d-flex justify-content-center align-items-center\">
                &copy; {{ sistema.desenvolvedor }} 2020 - Todos direitos reservados.
            </div>

        </div>


    </div>
</div>

<script>
    (function() {
        'use strict';

        // Self Initialize DOM Factory Components
        domFactory.handler.autoInit();
    });
</script>
</body>

</html>
", "C:\\laragon\\www\\psd1\\resources\\views/Erros/404.twig", "C:\\laragon\\www\\psd1\\resources\\views/Erros/404.twig");
    }
}
