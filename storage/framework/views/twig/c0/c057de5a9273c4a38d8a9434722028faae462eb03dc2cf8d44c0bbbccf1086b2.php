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

/* C:\laragon\www\psd1\resources\views/Instituicao/documentos/emitir_certificado.twig */
class __TwigTemplate_51df910fd49e535efb71619d82acbe0f2d82eddcfb3032120d6031eb43c514db extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_certificado.twig", 1);
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
                   Emitir Certificado
                </h2>
                <hr>
    \t\t\t\t\t\t<form  action=\"salvar_certificado\" enctype=\"multipart/form-data\"  method=\"POST\">
\t\t\t\t\t\t\t\t        ";
        // line 12
        echo csrf_field();
        echo "
                                           ";
        // line 13
        if (($context["alert"] ?? null)) {
            // line 14
            echo "                     <div class=\"alert alert-";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getTipo", [], "method", false, false, false, 14), "html", null, true);
            echo " alert-dismissable fade show\" role=\"alert\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getMensagem", [], "method", false, false, false, 15), "html", null, true);
            echo "
                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    </div>
                   ";
            // line 20
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "destruir", [], "method", false, false, false, 20), "html", null, true);
            echo "
                          ";
        }
        // line 22
        echo "                                        \t<h5 class=\"mt-4\">Dados</h6>
\t\t\t\t\t\t\t\t        \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_estudante\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "\" >
                                            <div class=\"form-group col-md-6\">
                                            <input type=\"text\" name=\"instituicao\" class=\"form-control\" disabled=\"\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "instituicao", [], "any", false, false, false, 26), "nome", [], "any", false, false, false, 26), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t  <select name=\"curso\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>cursos..</option>
\t\t\t\t\t\t\t\t\t\t     ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "instituicao", [], "any", false, false, false, 31), "cursos_escola", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t      <option  value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 32), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 32), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t\t\t        \t<input type=\"text\" name=\"turma\" required=\"\" class=\"form-control\"  placeholder=\"Informe a turma\">

\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t\t\t        \t  <input type=\"text\" name=\"numero_estudantil\" required=\"\" class=\"form-control\"  placeholder=\"Número Estudantil\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t\t\t        \t  <input type=\"text\" name=\"ano_termino\"  class=\"form-control\" required=\"\"  placeholder=\"Ano do término\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t            <div class=\"col-md-12\"></div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
                                                <label> comprovativo de pagamento </labrl>
\t\t\t\t\t\t\t\t\t\t\t  <input name=\"comprovativo\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"row col-md-12 mb-4\"></div>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        <button type=\"submit\" class=\"btn btn-success\">Enviar</button>
\t\t\t\t\t\t\t\t        </form>
        </div>
    </div>


    ";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_certificado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  106 => 32,  102 => 31,  94 => 26,  89 => 24,  85 => 22,  80 => 20,  72 => 15,  67 => 14,  65 => 13,  61 => 12,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

    {% block conteudo %}

        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                   Emitir Certificado
                </h2>
                <hr>
    \t\t\t\t\t\t<form  action=\"salvar_certificado\" enctype=\"multipart/form-data\"  method=\"POST\">
\t\t\t\t\t\t\t\t        {{ csrf_field() }}
                                           {% if alert  %}
                     <div class=\"alert alert-{{alert.getTipo()}} alert-dismissable fade show\" role=\"alert\">
                        {{ alert.getMensagem() }}
                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    </div>
                   {{  alert.destruir() }}
                          {% endif %}
                                        \t<h5 class=\"mt-4\">Dados</h6>
\t\t\t\t\t\t\t\t        \t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"id_estudante\" value=\"{{ usuario.id }}\" >
                                            <div class=\"form-group col-md-6\">
                                            <input type=\"text\" name=\"instituicao\" class=\"form-control\" disabled=\"\" value=\"{{ usuario.instituicao.nome}}\" >
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t        \t  <select name=\"curso\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>cursos..</option>
\t\t\t\t\t\t\t\t\t\t     {% for curso in usuario.instituicao.cursos_escola %}
\t\t\t\t\t\t\t\t\t\t      <option  value=\"{{ curso.nome }}\">  {{curso.nome}}</option>
\t\t\t\t\t\t\t\t\t\t      {% endfor %}
\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t\t\t        \t<input type=\"text\" name=\"turma\" required=\"\" class=\"form-control\"  placeholder=\"Informe a turma\">

\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t\t\t        \t  <input type=\"text\" name=\"numero_estudantil\" required=\"\" class=\"form-control\"  placeholder=\"Número Estudantil\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t\t\t        \t  <input type=\"text\" name=\"ano_termino\"  class=\"form-control\" required=\"\"  placeholder=\"Ano do término\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t            <div class=\"col-md-12\"></div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-6\">
                                                <label> comprovativo de pagamento </labrl>
\t\t\t\t\t\t\t\t\t\t\t  <input name=\"comprovativo\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        \t<div class=\"row col-md-12 mb-4\"></div>
\t\t\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t\t\t        <button type=\"submit\" class=\"btn btn-success\">Enviar</button>
\t\t\t\t\t\t\t\t        </form>
        </div>
    </div>


    {% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_certificado.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/emitir_certificado.twig");
    }
}
