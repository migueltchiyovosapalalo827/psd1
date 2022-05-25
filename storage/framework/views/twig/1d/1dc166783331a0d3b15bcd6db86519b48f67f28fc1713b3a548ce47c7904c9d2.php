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

/* C:\laragon\www\psd1\resources\views/Usuario/criar_conta.twig */
class __TwigTemplate_a109ff1a44b5f069a2f9718f441ada353327d15cf989457e0dc7f86532da71ad extends Template
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
    <title>Entrar</title>
    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">
    <!-- App CSS -->
    <link type=\"text/css\" href=\"";
        // line 11
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/app2.css"]);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome FREE Icons -->
    <link type=\"text/css\" href=\"";
        // line 13
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/fontawesome-free.css"]);
        echo "\" rel=\"stylesheet\">

    <!-- For old IEs -->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\" />
    <!-- For new browsers multisize ico  -->
    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32\" href=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon.ico"]);
        echo "\">
    <!-- Chrome for Android -->
    <link rel=\"icon\" sizes=\"192x192\" href=\"";
        // line 20
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-192.png"]);
        echo "\">
    <!-- For iPhone 6+ downscaled for other devices -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 22
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/favicon/favicon-180-precomposed.png"]);
        echo "\">
    <!-- For IE10 Metro -->
    <meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">
    <meta name=\"msapplication-TileImage\" content=\"favicon-114-precomposed.png\">
</head>
<body class=\"layout-login-centered-boxed\" background=\"";
        // line 27
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/fundo.png"]);
        echo "\">
<div class=\" d-flex flex-column col-lg-4 col-md-5 mt-5 pt-5\">
    <div class=\"d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light\">
        <a href=\"index.html\" class=\"navbar-brand text-center mb-2 mr-0\" style=\"min-width: 0\">
            <!-- LOGO -->
            <img width=\"100px;\" src=\"";
        // line 32
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/logo_psd_azul.png"]);
        echo "\" alt=\"\" class=\"\">
        </a>
    </div>

    <div class=\"card card-body\">
        <form action=\"/salvar_nova_conta\"  method=\"POST\">
        ";
        // line 38
        echo csrf_field();
        echo "
            ";
        // line 39
        if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["erros"] ?? null), "mensagem", [], "any", false, false, false, 39)) {
            // line 40
            echo "                <div class=\"alert alert-";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["erros"] ?? null), "tipo", [], "any", false, false, false, 40), "html", null, true);
            echo " alert-dismissable fade show\" role=\"alert\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["erros"] ?? null), "mensagem", [], "any", false, false, false, 41), "html", null, true);
            echo "
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
        }
        // line 47
        echo "
            <div class=\"row\">
                <div class=\"form-group mb-2 col-md-6\">
                    <label class=\"text-label\" for=\"email_2\">Primeiro nome:</label>
                    <div class=\"input-group input-group-merge\">
                        <input id=\"p.nome\" type=\"text\" required=\"\" name=\"p_nome\" class=\"form-control form-control-prepended\" placeholder=\"Primeiro nome\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\">
                                <span class=\"fa fa-user\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group mb-2 col-md-6\">
                    <label class=\"text-label\" for=\"email_2\">Sobrenome</label>
                    <div class=\"input-group input-group-merge\">
                        <input id=\"p_sobrenome\" type=\"text\" required=\"\" name=\"p_sobrenome\" class=\"form-control form-control-prepended\" placeholder=\"Sobrenome\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\">
                                <span class=\"fa fa-user\"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Email:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"u_email\" type=\"email\" required=\"\" name=\"u_email\" class=\"form-control form-control-prepended\" placeholder=\"Entre com sua senha!\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-envelope\"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Género:</label>
                <div class=\"row   col-md-12\">
                    <div class=\"custom-control custom-radio mr-1\">
                        <input type=\"radio\" id=\"p_generoF\" name=\"p_genero\" value=\"F\" class=\"custom-control-input\">
                        <label class=\"custom-control-label align-middle \"   for=\"p_generoF\">Femenino</label>
                    </div>
                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"p_generoM\" name=\"p_genero\" value=\"M\" class=\"custom-control-input\">
                        <label class=\"custom-control-label align-middle\"   for=\"p_generoM\">Masculino</label>
                    </div>

                </div>

            </div>


            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Senha:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"u_senha\" type=\"password\" required=\"\" name=\"u_senha\" class=\"form-control form-control-prepended\" placeholder=\"Entre com sua senha!\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-key\"></span>
                        </div>
                    </div>
                </div>
            </div>

            <input type=\"hidden\" name=\"tipo\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["tipo"] ?? null), "html", null, true);
        echo "\">
            <div class=\"form-group mb-2\">
                <button class=\"btn btn-block btn-primary\" type=\"submit\">Criar conta</button>
            </div>


            <div class=\"page-separator\">
                <div class=\"page-separator__text\">Ou</div>
            </div>
            <a href=\"/entrar\" class=\"btn btn-light btn-block\">
                Entrar
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
        return "C:\\laragon\\www\\psd1\\resources\\views/Usuario/criar_conta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 112,  121 => 47,  112 => 41,  107 => 40,  105 => 39,  101 => 38,  92 => 32,  84 => 27,  76 => 22,  71 => 20,  66 => 18,  61 => 16,  55 => 13,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Entrar</title>
    <!-- Prevent the demo from appearing in search engines -->
    <meta name=\"robots\" content=\"noindex\">
    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{asset('css/app2.css')}}\" rel=\"stylesheet\">
    <!-- Font Awesome FREE Icons -->
    <link type=\"text/css\" href=\"{{asset('css/fontawesome-free.css')}}\" rel=\"stylesheet\">

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
        <form action=\"/salvar_nova_conta\"  method=\"POST\">
        {{ csrf_field() }}
            {% if erros.mensagem  %}
                <div class=\"alert alert-{{erros.tipo}} alert-dismissable fade show\" role=\"alert\">
                    {{ erros.mensagem }}
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            {% endif %}

            <div class=\"row\">
                <div class=\"form-group mb-2 col-md-6\">
                    <label class=\"text-label\" for=\"email_2\">Primeiro nome:</label>
                    <div class=\"input-group input-group-merge\">
                        <input id=\"p.nome\" type=\"text\" required=\"\" name=\"p_nome\" class=\"form-control form-control-prepended\" placeholder=\"Primeiro nome\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\">
                                <span class=\"fa fa-user\"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"form-group mb-2 col-md-6\">
                    <label class=\"text-label\" for=\"email_2\">Sobrenome</label>
                    <div class=\"input-group input-group-merge\">
                        <input id=\"p_sobrenome\" type=\"text\" required=\"\" name=\"p_sobrenome\" class=\"form-control form-control-prepended\" placeholder=\"Sobrenome\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\">
                                <span class=\"fa fa-user\"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Email:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"u_email\" type=\"email\" required=\"\" name=\"u_email\" class=\"form-control form-control-prepended\" placeholder=\"Entre com sua senha!\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-envelope\"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Género:</label>
                <div class=\"row   col-md-12\">
                    <div class=\"custom-control custom-radio mr-1\">
                        <input type=\"radio\" id=\"p_generoF\" name=\"p_genero\" value=\"F\" class=\"custom-control-input\">
                        <label class=\"custom-control-label align-middle \"   for=\"p_generoF\">Femenino</label>
                    </div>
                    <div class=\"custom-control custom-radio\">
                        <input type=\"radio\" id=\"p_generoM\" name=\"p_genero\" value=\"M\" class=\"custom-control-input\">
                        <label class=\"custom-control-label align-middle\"   for=\"p_generoM\">Masculino</label>
                    </div>

                </div>

            </div>


            <div class=\"form-group mb-2\">
                <label class=\"text-label\" for=\"password_2\">Senha:</label>
                <div class=\"input-group input-group-merge\">
                    <input id=\"u_senha\" type=\"password\" required=\"\" name=\"u_senha\" class=\"form-control form-control-prepended\" placeholder=\"Entre com sua senha!\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-key\"></span>
                        </div>
                    </div>
                </div>
            </div>

            <input type=\"hidden\" name=\"tipo\" value=\"{{ tipo }}\">
            <div class=\"form-group mb-2\">
                <button class=\"btn btn-block btn-primary\" type=\"submit\">Criar conta</button>
            </div>


            <div class=\"page-separator\">
                <div class=\"page-separator__text\">Ou</div>
            </div>
            <a href=\"/entrar\" class=\"btn btn-light btn-block\">
                Entrar
            </a>
        </form>
    </div>
</div>

</body>

</html>
", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/criar_conta.twig", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/criar_conta.twig");
    }
}
