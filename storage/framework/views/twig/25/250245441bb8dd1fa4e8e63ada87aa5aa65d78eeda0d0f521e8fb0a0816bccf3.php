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

/* ./Site/includes/menu.twig */
class __TwigTemplate_b91c5e99223b462ca53febdd22ac3782edb032d46380922f9729466901333f33 extends Template
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
        echo "<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\">
\t\t<title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
        echo "</title>
\t\t<meta name=\"author\" content=\"\">
\t\t<meta name=\"description\" content=\"Portal do Estudante\">
\t\t<meta name=\"keywords\" content=\"Escolas Lobito, Escolas públicas, Escolas Privadas, Escolas do Lobito, Gestão de inquerito, Biblioteca Virtual\">
\t\t<!-- CSS FILES -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/bootstrap.min.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/fonts/iconfont.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/swiper.min.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/venobox.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/animate.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/select2.min.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/style.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/responsive.css"]);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/css/color-1.css"]);
        echo "\">
\t\t<style type=\"text/css\">
\t\t@media (min-width: 992px){
\t\t\t.container {
\t\t\t\tmax-width: 1000px !important;
\t\t\t}
\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div id=\"dtr-wrapper\" class=\"clearfix\">
\t\t\t<!-- Header
\t\t\t============================================= -->
\t\t\t<header id=\"dtr-header-global\" class=\"fixed-top\" >
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark dtr-menu\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<!-- light logo -->
\t\t\t\t\t\t<a class=\"navbar-brand logo-light\" href=\"#home\"><img src=\"";
        // line 37
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/logo.png"]);
        echo "\" alt=\"logo\"></a>
\t\t\t\t\t\t<!-- dark logo -->
\t\t\t\t\t\t<a class=\"navbar-brand logo-dark\" href=\"#home\"><img src=\"";
        // line 39
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/logo-sticky.png"]);
        echo "\" alt=\"logo\"></a>
\t\t\t\t\t\t<!-- button ends -->
\t\t\t\t\t\t<!-- nav menu toggler-->
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<!-- menu starts-->
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t<ul class=\"dtr-scrollspy navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\" > <a class=\"nav-link\" href=\"/home\" style=\"color:#142752\" >Início</a> </li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\"  href=\"#about\" style=\"color:#142752\" >Sobre</a> </li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#cta\" style=\"color:#142752\" >Contactos</a> </li>

\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" style=\"color:#142752\" >ESCOLAS</a>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a href=\"escolas_publicas\" class=\"dropdown-item\">Públicas</a>
                        <a href=\"escolas_privadas\" class=\"dropdown-item\">Privadas</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"dtr-btn\" >
\t\t\t\t\t\t";
        // line 62
        if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 62), "pessoa", [], "any", false, false, false, 62), "nomeComSobrenome", [], "method", false, false, false, 62)) {
            // line 63
            echo "\t\t\t\t\t\t<a href=\"entrar\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 63), "pessoa", [], "any", false, false, false, 63), "nomeComSobrenome", [], "method", false, false, false, 63), "html", null, true);
            echo "
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t\t\t<a href=\"entrar\">Login
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 75
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<!-- menu ends-->
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
";
    }

    public function getTemplateName()
    {
        return "./Site/includes/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 75,  149 => 69,  139 => 63,  137 => 62,  111 => 39,  106 => 37,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  54 => 12,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"format-detection\" content=\"telephone=no\">
\t\t<title>{{ titulo }}</title>
\t\t<meta name=\"author\" content=\"\">
\t\t<meta name=\"description\" content=\"Portal do Estudante\">
\t\t<meta name=\"keywords\" content=\"Escolas Lobito, Escolas públicas, Escolas Privadas, Escolas do Lobito, Gestão de inquerito, Biblioteca Virtual\">
\t\t<!-- CSS FILES -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/bootstrap.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/fonts/iconfont.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/swiper.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/venobox.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/animate.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/select2.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/style.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/responsive.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('site/css/color-1.css')}}\">
\t\t<style type=\"text/css\">
\t\t@media (min-width: 992px){
\t\t\t.container {
\t\t\t\tmax-width: 1000px !important;
\t\t\t}
\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t<div id=\"dtr-wrapper\" class=\"clearfix\">
\t\t\t<!-- Header
\t\t\t============================================= -->
\t\t\t<header id=\"dtr-header-global\" class=\"fixed-top\" >
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark dtr-menu\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<!-- light logo -->
\t\t\t\t\t\t<a class=\"navbar-brand logo-light\" href=\"#home\"><img src=\"{{asset('site/images/logo.png')}}\" alt=\"logo\"></a>
\t\t\t\t\t\t<!-- dark logo -->
\t\t\t\t\t\t<a class=\"navbar-brand logo-dark\" href=\"#home\"><img src=\"{{asset('site/images/logo-sticky.png')}}\" alt=\"logo\"></a>
\t\t\t\t\t\t<!-- button ends -->
\t\t\t\t\t\t<!-- nav menu toggler-->
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<!-- menu starts-->
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t<ul class=\"dtr-scrollspy navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\" > <a class=\"nav-link\" href=\"/home\" style=\"color:#142752\" >Início</a> </li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\"  href=\"#about\" style=\"color:#142752\" >Sobre</a> </li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#cta\" style=\"color:#142752\" >Contactos</a> </li>

\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" style=\"color:#142752\" >ESCOLAS</a>
                    <div class=\"dropdown-menu dropdown-menu-end\">
                        <a href=\"escolas_publicas\" class=\"dropdown-item\">Públicas</a>
                        <a href=\"escolas_privadas\" class=\"dropdown-item\">Privadas</a>

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"dtr-btn\" >
\t\t\t\t\t\t{% if  SESSION.usuario.pessoa.nomeComSobrenome() %}
\t\t\t\t\t\t<a href=\"entrar\">{{SESSION.usuario.pessoa.nomeComSobrenome()}}
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"entrar\">Login
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</button>
\t\t\t\t\t\t<!-- menu ends-->
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</header>
", "./Site/includes/menu.twig", "C:\\laragon\\www\\psd1\\resources\\views///Site/includes/menu.twig");
    }
}
