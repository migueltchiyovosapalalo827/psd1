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

/* _include/menu_superitor.twig */
class __TwigTemplate_95b11e2f862397426fe728628ce3cfe91eedff3ab3779063360003d5bd554f6f extends Template
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
        echo "<nav class=\"navbar navbar-dark bg-primary d-flex align-items-center  flex-nowrap justify-content-between\">
    <div class=\"d-flex align-items-center\">
        <button class=\"btn btn-link text-white pl-0\" type=\"button\" data-toggle=\"sidebar\">
            <i class=\"material-icons align-middle md-36\">short_text</i>
        </button>
        <div class=\"page-title m-0\">";
        // line 6
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["sistema"] ?? null), "nome", [], "any", false, false, false, 6), "html", null, true);
        echo "</div>
    </div>
    <div class=\"\" id=\"mainNavbar\">
        <ul class=\"navbar-nav ml-auto align-items-center\">
            <li class=\"nav-item btn d-flex align-items-center  dropdown-toggle dropdown-clear-caret\"  data-toggle=\"sidebar\" data-target=\"#user-drawer\" >
                <i class=\"material-icons text-white\">person</i>
                <a href=\"#\" class=\"nav-link\" >
                    ";
        // line 13
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 13), "pessoa", [], "any", false, false, false, 13), "nomeComSobrenome", [], "method", false, false, false, 13), "html", null, true);
        echo "
                </a>
            </li>
        </ul>
    </div>
</nav>


";
    }

    public function getTemplateName()
    {
        return "_include/menu_superitor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-dark bg-primary d-flex align-items-center  flex-nowrap justify-content-between\">
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


", "_include/menu_superitor.twig", "C:\\laragon\\www\\psd1\\resources\\views/_include/menu_superitor.twig");
    }
}
