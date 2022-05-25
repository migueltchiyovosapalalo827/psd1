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

/* C:\laragon\www\psd1\resources\views/Painel/painel.twig */
class __TwigTemplate_e2db3b704400ec4e5140d6f91d486dde49c8d3e8ea74ac6e27fd4ed7b076884f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'conteudo' => [$this, 'block_conteudo'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "_include/main_painel.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        $this->parent = $this->loadTemplate("_include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Painel/painel.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"card card-body p-2\">
            <div class=\"row row-projects\">
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-link-color md-36\">bookmark_border</i>
                    <div class=\"mb-1\">Total de áreas</div>
                    <h4 class=\"mb-0 \">";
        // line 12
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["total"] ?? null), "cursos", [], "any", false, false, false, 12), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-success md-36\">book</i>
                    <div class=\"mb-1\">Total de livros</div>
                    <h4 class=\"mb-0\">";
        // line 17
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["total"] ?? null), "livros", [], "any", false, false, false, 17), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-warning md-36\">content_paste</i>
                    <div class=\"mb-1\">Total de inquéritos</div>
                    <h4 class=\"mb-0\">";
        // line 22
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["total"] ?? null), "inqueritos", [], "any", false, false, false, 22), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-primary md-36\">person</i>
                    <div class=\"mb-1\">Total de inqueridos</div>
                    <h4 class=\"mb-0\">";
        // line 27
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["total"] ?? null), "inqueridos", [], "any", false, false, false, 27), "html", null, true);
        echo "</h4>
                </div>
            </div>
        </div>


    ";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Painel/painel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  74 => 22,  66 => 17,  58 => 12,  51 => 7,  47 => 6,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends \"_include/main_painel.twig\" %}

    {% block conteudo %}
        <div class=\"card card-body p-2\">
            <div class=\"row row-projects\">
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-link-color md-36\">bookmark_border</i>
                    <div class=\"mb-1\">Total de áreas</div>
                    <h4 class=\"mb-0 \">{{ total.cursos }}</h4>
                </div>
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-success md-36\">book</i>
                    <div class=\"mb-1\">Total de livros</div>
                    <h4 class=\"mb-0\">{{ total.livros }}</h4>
                </div>
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-warning md-36\">content_paste</i>
                    <div class=\"mb-1\">Total de inquéritos</div>
                    <h4 class=\"mb-0\">{{ total.inqueritos }}</h4>
                </div>
                <div class=\"col-lg-3 col-md-4 col-6\">
                    <i class=\"material-icons text-primary md-36\">person</i>
                    <div class=\"mb-1\">Total de inqueridos</div>
                    <h4 class=\"mb-0\">{{ total.inqueridos }}</h4>
                </div>
            </div>
        </div>


    {% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Painel/painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Painel/painel.twig");
    }
}
