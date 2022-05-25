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

/* C:\laragon\www\psd1\resources\views/Inquerido/responder_inqueritos.twig */
class __TwigTemplate_8ac06e275f4760b32b9f819b95b74eb68f463661d2b1ee92c934e3483b6cbc4e extends Template
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
        // line 1
        return "@include/menu_simples.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        $this->parent = $this->loadTemplate("@include/menu_simples.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerido/responder_inqueritos.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["inscricoes"] ?? null)), 0))) {
            // line 4
            echo "        <h1 class=\"text-center mb-3\">Escolha um inquérito para responder</h1>
    ";
        }
        // line 6
        echo "
    <div class=\"d-flex justify-content-center flex-wrap  \">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["inscricoes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscricao"]) {
            // line 9
            echo "            <div class=\"card card-link col-md-4 media d-flex   flex-column justify-content-center\">
                <div class=\"media-body justify-content-center w-100 pt-2\">
                    <h4 class=\"w-100 text-center mb-1\">
                        <a href=\"/inquerido/inquerito/";
            // line 12
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inscricao"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\" text-primary-dark\">
                            ";
            // line 13
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inscricao"], "inquerito", [], "any", false, false, false, 13), "titulo", [], "any", false, false, false, 13), "html", null, true);
            echo "
                        </a>
                    </h4>
                    <div class=\"text-muted text-center mb-1\">Por<i class=\"material-icons align-middle md-18 \">business</i><span class=\"align-middle\"> ";
            // line 16
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inscricao"], "inquerito", [], "any", false, false, false, 16), "pesquisador", [], "any", false, false, false, 16), "pessoa", [], "any", false, false, false, 16), "nomeComSobrenome", [], "method", false, false, false, 16), "html", null, true);
            echo "</span></div>
                </div>
                <div class=\"d-flex flex-column align-self-center w-75 mb-2 mt-2\">
                    <a href=\"/inquerido/inquerito/";
            // line 19
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inscricao"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"btn btn-primary\">Responder</a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <h1 class=\"text-center mb-3\">Todos inquéritos já foram respondidos. Obrigado </h1>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscricao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Inquerido/responder_inqueritos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  97 => 23,  88 => 19,  82 => 16,  76 => 13,  72 => 12,  67 => 9,  62 => 8,  58 => 6,  54 => 4,  51 => 3,  47 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/menu_simples.twig\" %}
{% block conteudo %}
    {% if inscricoes|length > 0 %}
        <h1 class=\"text-center mb-3\">Escolha um inquérito para responder</h1>
    {% endif %}

    <div class=\"d-flex justify-content-center flex-wrap  \">
        {% for inscricao in inscricoes %}
            <div class=\"card card-link col-md-4 media d-flex   flex-column justify-content-center\">
                <div class=\"media-body justify-content-center w-100 pt-2\">
                    <h4 class=\"w-100 text-center mb-1\">
                        <a href=\"/inquerido/inquerito/{{ inscricao.id }}\" class=\" text-primary-dark\">
                            {{ inscricao.inquerito.titulo }}
                        </a>
                    </h4>
                    <div class=\"text-muted text-center mb-1\">Por<i class=\"material-icons align-middle md-18 \">business</i><span class=\"align-middle\"> {{ inscricao.inquerito.pesquisador.pessoa.nomeComSobrenome() }}</span></div>
                </div>
                <div class=\"d-flex flex-column align-self-center w-75 mb-2 mt-2\">
                    <a href=\"/inquerido/inquerito/{{ inscricao.id }}\" class=\"btn btn-primary\">Responder</a>
                </div>
            </div>
        {% else %}
            <h1 class=\"text-center mb-3\">Todos inquéritos já foram respondidos. Obrigado </h1>
        {% endfor %}

    </div>
{% endblock %}", "C:\\laragon\\www\\psd1\\resources\\views/Inquerido/responder_inqueritos.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerido/responder_inqueritos.twig");
    }
}
