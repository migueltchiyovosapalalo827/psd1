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

/* C:\laragon\www\psd1\resources\views/Instituicao/documentos/emitir_declaracao.twig */
class __TwigTemplate_085c782f2482a456f07d1896ee2d7f7d50adab82add0ad47da9cd9f99d5cfe39 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_declaracao.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                   Emitir Declaração
                </h2>
                <hr>
    \t\t\t<form  action=\"salvar_declaracao\" enctype=\"multipart/form-data\"  method=\"POST\">
                ";
        // line 12
        echo csrf_field();
        echo "
\t\t\t\t\t<h5 class=\"mt-4\">Dados</h5>
\t\t\t\t\t\t\t\t        \t<div class=\"row\">
                                              <input type=\"hidden\" name=\"id_estudante\" class=\"form-control\"  value=\"";
        // line 15
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
                                            <div class=\"form-group col-md-6\">
                                            <input type=\"text\" name=\"instituicao\" class=\"form-control\" disabled=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "instituicao", [], "any", false, false, false, 17), "nome", [], "any", false, false, false, 17), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t  <select name=\"curso\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>cursos..</option>
\t\t\t\t\t\t\t\t\t\t     ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "instituicao", [], "any", false, false, false, 22), "cursos_escola", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 23
            echo "\t\t\t\t\t\t\t\t\t\t      <option  value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t<input type=\"text\"  required=\"\" name=\"turma\" class=\"form-control\"  placeholder=\"Informe a sua turma\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
                                            <input type=\"text\"  required=\"\" class=\"form-control\" name=\"classe\" class=\"form-control\"  placeholder=\"Informe a classe\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t  <select class=\"form-control\" name=\"tipo_declaracao\"  required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>Tipo..</option>
\t\t\t\t\t\t\t\t\t\t      <option value=\"Com notas\">Com notas</option>
\t\t\t\t\t\t\t\t\t\t      <option value=\"Sem notas\">Sem notas</option>

\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t<input type=\"text\"  required=\"\" name=\"efeito\" class=\"form-control\"  placeholder=\"Para qual efeito?\">

\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"col-md-12\"></div>
\t\t\t\t\t\t\t\t            <div class=\"form-group col-md-12\">
                                                <label> comprovativo de pagamento </labrl>
\t\t\t\t\t\t\t\t\t\t\t  <input name=\"comprovativo\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"row col-md-12\"></div>


\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        <button type=\"submit\" class=\"btn btn-success\">Enviar</button>
\t\t\t\t</form>
        </div>
    </div>


    ";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_declaracao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  84 => 23,  80 => 22,  72 => 17,  67 => 15,  61 => 12,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

    {% block conteudo %}

        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                   Emitir Declaração
                </h2>
                <hr>
    \t\t\t<form  action=\"salvar_declaracao\" enctype=\"multipart/form-data\"  method=\"POST\">
                {{ csrf_field() }}
\t\t\t\t\t<h5 class=\"mt-4\">Dados</h5>
\t\t\t\t\t\t\t\t        \t<div class=\"row\">
                                              <input type=\"hidden\" name=\"id_estudante\" class=\"form-control\"  value=\"{{ usuario.id }}\">
                                            <div class=\"form-group col-md-6\">
                                            <input type=\"text\" name=\"instituicao\" class=\"form-control\" disabled=\"\" value=\"{{ usuario.instituicao.nome}}\" >
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t  <select name=\"curso\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>cursos..</option>
\t\t\t\t\t\t\t\t\t\t     {% for curso in  usuario.instituicao.cursos_escola %}
\t\t\t\t\t\t\t\t\t\t      <option  value=\"{{ curso.nome }}\">{{ curso.nome}}</option>
\t\t\t\t\t\t\t\t\t\t      {% endfor %}
\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t<input type=\"text\"  required=\"\" name=\"turma\" class=\"form-control\"  placeholder=\"Informe a sua turma\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
                                            <input type=\"text\"  required=\"\" class=\"form-control\" name=\"classe\" class=\"form-control\"  placeholder=\"Informe a classe\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t  <select class=\"form-control\" name=\"tipo_declaracao\"  required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>Tipo..</option>
\t\t\t\t\t\t\t\t\t\t      <option value=\"Com notas\">Com notas</option>
\t\t\t\t\t\t\t\t\t\t      <option value=\"Sem notas\">Sem notas</option>

\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t<input type=\"text\"  required=\"\" name=\"efeito\" class=\"form-control\"  placeholder=\"Para qual efeito?\">

\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"col-md-12\"></div>
\t\t\t\t\t\t\t\t            <div class=\"form-group col-md-12\">
                                                <label> comprovativo de pagamento </labrl>
\t\t\t\t\t\t\t\t\t\t\t  <input name=\"comprovativo\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"row col-md-12\"></div>


\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        <button type=\"submit\" class=\"btn btn-success\">Enviar</button>
\t\t\t\t</form>
        </div>
    </div>


    {% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_declaracao.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_declaracao.twig");
    }
}
