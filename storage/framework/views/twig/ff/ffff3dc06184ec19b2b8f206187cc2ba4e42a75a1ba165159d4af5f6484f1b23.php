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

/* C:\laragon\www\psd1\resources\views/Cartao/emitir_cartao.twig */
class __TwigTemplate_d1213312d112dfba4233f4dae2c24192efcb1b2f7c9bfe38f1db56011114f262 extends Template
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
        return "@include/main_painel.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Cartao/emitir_cartao.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h2 class=\"mt-2\">
\t\t\t\tEmitir Cartão de estudante
\t\t\t</h2>
\t\t\t<hr>
\t\t\t<form action=\"salvar_cartao\" enctype=\"multipart/form-data\" method=\"POST\"> ";
        // line 11
        echo csrf_field();
        echo "
\t\t\t\t";
        // line 12
        if (($context["alert"] ?? null)) {
            // line 13
            echo "\t\t\t\t\t<div class=\"alert alert-";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getTipo", [], "method", false, false, false, 13), "html", null, true);
            echo " alert-dismissable fade show\" role=\"alert\"> ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getMensagem", [], "method", false, false, false, 13), "html", null, true);
            echo "
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div> ";
            // line 17
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "destruir", [], "method", false, false, false, 17), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 19
        echo "                 <div class=\"form-row\">
\t\t\t\t<h5 class=\"mt-4\">Dados</h6>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<input type=\"hidden\" name=\"id_estudante\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"instituicao\" class=\"form-control\" disabled=\"\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "instituicao", [], "any", false, false, false, 24), "nome", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t<select name=\"curso\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t<option>cursos..</option>
\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "instituicao", [], "any", false, false, false, 29), "cursos_escola", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 30
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 30), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 30), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"classe\" required=\"\" class=\"form-control\" placeholder=\"Informe a Classe\">
\t\t\t\t\t</div>
                   <div class=\"form-group col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"turma\" required=\"\" class=\"form-control\" placeholder=\"Informe a turma\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<input type=\"text\" name=\"numero_estudantil\" required=\"\" class=\"form-control\" placeholder=\"Número Estudantil\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-8\">
                     <input name=\"foto\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\" >
\t\t\t\t\t<label>
\t\t\t\t\t\t\tfotografia
\t\t\t\t\t\t</label>
                    </div>
\t\t\t\t\t<div class=\"row col-md-12 mb-4\"></div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enviar</button>
\t\t\t</form>

\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Cartao/emitir_cartao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  103 => 30,  99 => 29,  91 => 24,  86 => 22,  81 => 19,  76 => 17,  66 => 13,  64 => 12,  60 => 11,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}

\t<div class=\"card\">
\t\t<div class=\"card-body\">
\t\t\t<h2 class=\"mt-2\">
\t\t\t\tEmitir Cartão de estudante
\t\t\t</h2>
\t\t\t<hr>
\t\t\t<form action=\"salvar_cartao\" enctype=\"multipart/form-data\" method=\"POST\"> {{ csrf_field() }}
\t\t\t\t{% if alert  %}
\t\t\t\t\t<div class=\"alert alert-{{alert.getTipo()}} alert-dismissable fade show\" role=\"alert\"> {{ alert.getMensagem() }}
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div> {{  alert.destruir() }}
\t\t\t\t{% endif %}
                 <div class=\"form-row\">
\t\t\t\t<h5 class=\"mt-4\">Dados</h6>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<input type=\"hidden\" name=\"id_estudante\" value=\"{{ usuario.id }}\">
\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"instituicao\" class=\"form-control\" disabled=\"\" value=\"{{ usuario.instituicao.nome}}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t<select name=\"curso\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t<option>cursos..</option>
\t\t\t\t\t\t\t{% for curso in usuario.instituicao.cursos_escola %}
\t\t\t\t\t\t\t\t<option value=\"{{ curso.nome }}\"> {{curso.nome}}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"classe\" required=\"\" class=\"form-control\" placeholder=\"Informe a Classe\">
\t\t\t\t\t</div>
                   <div class=\"form-group col-md-6\">
\t\t\t\t\t\t<input type=\"text\" name=\"turma\" required=\"\" class=\"form-control\" placeholder=\"Informe a turma\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<input type=\"text\" name=\"numero_estudantil\" required=\"\" class=\"form-control\" placeholder=\"Número Estudantil\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-8\">
                     <input name=\"foto\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\" >
\t\t\t\t\t<label>
\t\t\t\t\t\t\tfotografia
\t\t\t\t\t\t</label>
                    </div>
\t\t\t\t\t<div class=\"row col-md-12 mb-4\"></div>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Enviar</button>
\t\t\t</form>

\t\t</div>
\t</div>
</div>

{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Cartao/emitir_cartao.twig", "C:\\laragon\\www\\psd1\\resources\\views/Cartao/emitir_cartao.twig");
    }
}
