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

/* _include/menu_superior_lateral_direito.twig */
class __TwigTemplate_6d6b6ee954d8de4545cfb068574ae302435fe70911435ac22fee8b298d9b129e extends Template
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
        echo "<!-- drawer -->

<div class=\"mdk-drawer js-mdk-drawer\" id=\"user-drawer\" data-position=\"right\" data-align=\"end\">
    <div class=\"mdk-drawer__content\">
        <div class=\"mdk-drawer__inner\" data-simplebar data-simplebar-force-enabled=\"true\">
            <nav class=\"drawer drawer--light\">
                <div class=\"drawer-spacer drawer-spacer-border\">
                    <div class=\"media align-items-center\">

                        <div class=\"media-body\">
                            <a href=\"#\" class=\"h5 m-0\">";
        // line 11
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 11), "nome", [], "any", false, false, false, 11));
        echo "</a>
                            <div>";
        // line 12
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 12), "grupo", [], "any", false, false, false, 12), "nome", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>
                <!-- MENU -->
                <ul class=\"drawer-menu\" id=\"userMenu\" data-children=\".drawer-submenu\">
                    ";
        // line 24
        echo "                    <li class=\"drawer-menu-item\">
                        <a href=\"";
        // line 25
        echo call_user_func_array($this->env->getFunction('route')->getCallable(), ["usuario.meu_perfil"]);
        echo "\">
                            <i class=\"material-icons\">account_circle</i>
                            <span class=\"drawer-menu-text\"> Meu perfil</span>
                        </a>
                    </li>
                    <li class=\"drawer-menu-item\">
                        <a href=\"";
        // line 31
        echo call_user_func_array($this->env->getFunction('route')->getCallable(), ["usuario.sair"]);
        echo "\">
                            <i class=\"material-icons\">exit_to_app</i>
                            <span class=\"drawer-menu-text\">Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_include/menu_superior_lateral_direito.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  66 => 25,  63 => 24,  54 => 12,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- drawer -->

<div class=\"mdk-drawer js-mdk-drawer\" id=\"user-drawer\" data-position=\"right\" data-align=\"end\">
    <div class=\"mdk-drawer__content\">
        <div class=\"mdk-drawer__inner\" data-simplebar data-simplebar-force-enabled=\"true\">
            <nav class=\"drawer drawer--light\">
                <div class=\"drawer-spacer drawer-spacer-border\">
                    <div class=\"media align-items-center\">

                        <div class=\"media-body\">
                            <a href=\"#\" class=\"h5 m-0\">{{ SESSION.usuario.nome|e}}</a>
                            <div>{{ SESSION.usuario.grupo.nome}}</div>
                        </div>
                    </div>
                </div>
                <!-- MENU -->
                <ul class=\"drawer-menu\" id=\"userMenu\" data-children=\".drawer-submenu\">
                    {#  <li class=\"drawer-menu-item\">
                          <a href=\"account.html\">
                              <i class=\"material-icons\">lock</i>
                              <span class=\"drawer-menu-text\"> Minha conta</span>
                          </a>
                      </li>#}
                    <li class=\"drawer-menu-item\">
                        <a href=\"{{route('usuario.meu_perfil')}}\">
                            <i class=\"material-icons\">account_circle</i>
                            <span class=\"drawer-menu-text\"> Meu perfil</span>
                        </a>
                    </li>
                    <li class=\"drawer-menu-item\">
                        <a href=\"{{route('usuario.sair')}}\">
                            <i class=\"material-icons\">exit_to_app</i>
                            <span class=\"drawer-menu-text\">Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
", "_include/menu_superior_lateral_direito.twig", "C:\\laragon\\www\\psd1\\resources\\views/_include/menu_superior_lateral_direito.twig");
    }
}
