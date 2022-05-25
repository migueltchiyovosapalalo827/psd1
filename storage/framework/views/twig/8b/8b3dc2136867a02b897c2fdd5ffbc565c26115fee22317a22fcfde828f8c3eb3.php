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

/* C:\laragon\www\psd1\resources\views/Usuario/entrar.twig */
class __TwigTemplate_163b3898f62c02b70a315c62dbce3cc96178b6efae2a79824fb3d34b3b300883 extends Template
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
    <meta name=\"csrf-token\" content=\"";
        // line 7
        echo call_user_func_array($this->env->getFunction('csrf_token')->getCallable(), []);
        echo "\">
    <title>Entrar</title>
    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">
    <!-- App CSS -->
    <link type=\"text/css\" href=\"";
        // line 12
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app2.css"]);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome FREE Icons -->
    <link type=\"text/css\" href=\"";
        // line 14
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/fontawesome-free.css"]);
        echo "\" rel=\"stylesheet\">
    <link type=\"text/css\" href=\"";
        // line 15
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["vendor/simplebar.css"]);
        echo "\" rel=\"stylesheet\">
    <!-- For old IEs -->
    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\" />
    <!-- For new browsers multisize ico  -->
    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32\" href=\"";
        // line 19
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\">
    <!-- Chrome for Android -->
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-192.png"]);
        echo "\">
    <!-- For iPhone 6+ downscaled for other devices -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 23
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-180-precomposed.png"]);
        echo "\">
    <!-- For IE10 Metro -->
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
    <meta name=\"msapplication-TileImage\" content=\"favicon-114-precomposed.png\">
</head>
<body class=\"layout-login-centered-boxed\" background=\"";
        // line 28
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/fundo.png"]);
        echo "\">
<div class=\" d-flex flex-column col-lg-4 col-md-5 mt-5 pt-5\">
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light\">
        <a href=\"index.html\" class=\"navbar-brand text-center mb-2 mr-0\" style=\"min-width: 0\">
            <!-- LOGO -->
            <img width=\"100px;\" src=\"";
        // line 33
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/logo_psd_azul.png"]);
        echo "\" alt=\"\" class=\"\">
        </a>
    </div>

    <div class=\"card card-body\">
        <form action=\"entrar\"  method=\"post\">
            ";
        // line 39
        echo csrf_field();
        echo "
            ";
        // line 40
        if (($context["alert"] ?? null)) {
            // line 41
            echo "                <div class=\"alert alert-";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getTipo", [], "method", false, false, false, 41), "html", null, true);
            echo " alert-dismissable fade show\" role=\"alert\">
                    ";
            // line 42
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getMensagem", [], "method", false, false, false, 42), "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
            // line 47
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "destruir", [], "method", false, false, false, 47), "html", null, true);
            echo "
            ";
        }
        // line 49
        echo "            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"email_2\">Email ou Usuário:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"email_2\" type=\"text\" required=\"\"  name=\"usuario\" class=\"form-control form-control-prepended\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["usuario"] ?? null), "html", null, true);
        echo "\" placeholder=\"usuario@gmail.com ou usuario\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-envelope\"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Senha:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"password_2\" type=\"password\" required=\"\"  name=\"senha\" class=\"form-control form-control-prepended\" placeholder=\"Entre com sua senha!\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-key\"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <button href=\"\" class=\"btn btn-block btn-primary\" type=\"submit\">Entrar</button>
            </div>

            <!--<a href=\"/recuperar_senha\">Esqueceu a senha?</a>-->
            <div class=\"page-separator\">
                <div class=\"page-separator__text\">Ou</div>
            </div>

           <a href=\"criar_conta/inquirido\" class=\"btn btn-light btn-block\">
                Nova conta como inquerido
            </a>
            <a href=\"criar_conta/estudante\" class=\"btn btn-light btn-block\">
                Nova conta como estudante
            </a>
        </form>
    </div>
</div>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Usuario/entrar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  132 => 49,  127 => 47,  119 => 42,  114 => 41,  112 => 40,  108 => 39,  99 => 33,  91 => 28,  83 => 23,  78 => 21,  73 => 19,  68 => 17,  63 => 15,  59 => 14,  54 => 12,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">
    <title>Entrar</title>
    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">
    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{asset('css/app2.css')}}\" rel=\"stylesheet\">
    <!-- Font Awesome FREE Icons -->
    <link type=\"text/css\" href=\"{{asset('css/fontawesome-free.css')}}\" rel=\"stylesheet\">
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
<body class=\"layout-login-centered-boxed\" background=\"{{asset('images/fundo.png')}}\">
<div class=\" d-flex flex-column col-lg-4 col-md-5 mt-5 pt-5\">
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light\">
        <a href=\"index.html\" class=\"navbar-brand text-center mb-2 mr-0\" style=\"min-width: 0\">
            <!-- LOGO -->
            <img width=\"100px;\" src=\"{{asset('images/logo_psd_azul.png')}}\" alt=\"\" class=\"\">
        </a>
    </div>

    <div class=\"card card-body\">
        <form action=\"entrar\"  method=\"post\">
            {{ csrf_field() }}
            {% if alert  %}
                <div class=\"alert alert-{{alert.getTipo()}} alert-dismissable fade show\" role=\"alert\">
                    {{ alert.getMensagem() }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {{  alert.destruir() }}
            {% endif %}
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"email_2\">Email ou Usuário:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"email_2\" type=\"text\" required=\"\"  name=\"usuario\" class=\"form-control form-control-prepended\" value=\"{{ usuario }}\" placeholder=\"usuario@gmail.com ou usuario\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-envelope\"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Senha:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"password_2\" type=\"password\" required=\"\"  name=\"senha\" class=\"form-control form-control-prepended\" placeholder=\"Entre com sua senha!\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-key\"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <button href=\"\" class=\"btn btn-block btn-primary\" type=\"submit\">Entrar</button>
            </div>

            <!--<a href=\"/recuperar_senha\">Esqueceu a senha?</a>-->
            <div class=\"page-separator\">
                <div class=\"page-separator__text\">Ou</div>
            </div>

           <a href=\"criar_conta/inquirido\" class=\"btn btn-light btn-block\">
                Nova conta como inquerido
            </a>
            <a href=\"criar_conta/estudante\" class=\"btn btn-light btn-block\">
                Nova conta como estudante
            </a>
        </form>
    </div>
</div>

</body>

</html>
", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/entrar.twig", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/entrar.twig");
    }
}
