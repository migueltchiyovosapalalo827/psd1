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

/* C:\laragon\www\psd1\resources\views/Instituicao/documentos/declaracao.twig */
class __TwigTemplate_a9207538ff0420da3b8eefcfb5671030dc050b8f1c8fa5b1496193680e17e2cc extends Template
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
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"csrf-token\" content=\"";
        // line 7
        echo call_user_func_array($this->env->getFunction('csrf_token')->getCallable(), []);
        echo "\">
    <title>Solicitação de certificado ou Declaração</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
   <!---<link  type=\"text/css\" href=\"";
        // line 10
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["css/bootstrap.min.css"]);
        echo "\" rel=\"stylesheet\">-->
  <style>
  .cabecalho{
    font-size: 20px;
    font-weight: bold;
    padding: 10px;
    text-align: center;
  }
    .cabecalho2principal{
        width: 100%;
    }
 .cabecalho2{
        font-size: 14px;
        font-weight: bold;
        margin-left: 50%;
        /*text-align: right;*/

           }

  .corpo{
    font-size: 15px;
    padding: 10px;
    text-align: justify;
    line-height:normal;
  }
    .rodape{
        font-size: 15px;
        padding: 10px;
        text-align: center;

    }
  </style>
</head>
<body >
<div class=\"container\">
<div class=\"cabecalho\">
<h4>Solicitação de ";
        // line 46
        echo twig_escape_filter($this->env, ($context["tipo_documento"] ?? null), "html", null, true);
        echo " </h4>
</div>
<div class=\"cabecalho2\">
 <p>A <br> Sua Excelência, Senhor(a) Director (a) <br>do (a) ";
        // line 49
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "instituicao", [], "any", false, false, false, 49), "nome", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
</div>

<div class=\"corpo\">
<p>
";
        // line 54
        if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "instituicao", [], "any", false, false, false, 54), "nivel", [], "any", false, false, false, 54), "basico"))) {
            // line 55
            echo "Eu <strong> ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 55), "pessoa", [], "any", false, false, false, 55), "pai", [], "any", false, false, false, 55), "html", null, true);
            echo "</strong>, Encarregado (a)
do (a) aluno (a) <strong> ";
            // line 56
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 56), "pessoa", [], "any", false, false, false, 56), "nome_proprio", [], "any", false, false, false, 56), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 56), "pessoa", [], "any", false, false, false, 56), "sobrenome", [], "any", false, false, false, 56), "html", null, true);
            echo "  </strong>,
";
        }
        // line 57
        echo " ";
        if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "instituicao", [], "any", false, false, false, 57), "nivel", [], "any", false, false, false, 57), "medio"))) {
            // line 58
            echo "Eu  <strong> ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 58), "pessoa", [], "any", false, false, false, 58), "nome_proprio", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 58), "pessoa", [], "any", false, false, false, 58), "sobrenome", [], "any", false, false, false, 58), "html", null, true);
            echo "  </strong>,
";
        }
        // line 59
        echo " Filho (a) de <strong>";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 59), "pessoa", [], "any", false, false, false, 59), "pai", [], "any", false, false, false, 59), "html", null, true);
        echo "</strong>,
e de <strong>";
        // line 60
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 60), "pessoa", [], "any", false, false, false, 60), "mae", [], "any", false, false, false, 60), "html", null, true);
        echo "</strong>, Nascido (a) aos <strong>";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 60), "pessoa", [], "any", false, false, false, 60), "data_nascimento", [], "any", false, false, false, 60), "html", null, true);
        echo "</strong>,
natural de <strong>";
        // line 61
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 61), "pessoa", [], "any", false, false, false, 61), "local_de_nascimento", [], "any", false, false, false, 61), "html", null, true);
        echo "</strong>, Municipio de <strong>";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 61), "pessoa", [], "any", false, false, false, 61), "municipio", [], "any", false, false, false, 61), "html", null, true);
        echo "</strong>,
Provincia de <strong>";
        // line 62
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 62), "pessoa", [], "any", false, false, false, 62), "provincia", [], "any", false, false, false, 62), "html", null, true);
        echo "</strong>, Portador do ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 62), "pessoa", [], "any", false, false, false, 62), "tipo_documento", [], "any", false, false, false, 62), "html", null, true);
        echo " nº <strong>";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 62), "pessoa", [], "any", false, false, false, 62), "n_do_documento", [], "any", false, false, false, 62), "html", null, true);
        echo "</strong>,
Passado  pelo Arquivo de Identificação de ";
        // line 63
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 63), "pessoa", [], "any", false, false, false, 63), "provincia", [], "any", false, false, false, 63), "html", null, true);
        echo ", aos ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "estudante", [], "any", false, false, false, 63), "pessoa", [], "any", false, false, false, 63), "data_de_emissao", [], "any", false, false, false, 63), "html", null, true);
        echo ", que Frequentou e  concluiu  a ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "classe", [], "any", false, false, false, 63), "html", null, true);
        echo " Classe, Turma ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "turma", [], "any", false, false, false, 63), "html", null, true);
        echo ", curso
";
        // line 64
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "curso", [], "any", false, false, false, 64), "html", null, true);
        echo ", no ano lectivo de ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "ano_termino", [], "any", false, false, false, 64), "html", null, true);
        echo " sob o processo nº ___, no (a) ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "instituicao", [], "any", false, false, false, 64), "nome", [], "any", false, false, false, 64), "html", null, true);
        echo ".

</p>

<p>
 Necessitando de um  ";
        // line 69
        echo twig_escape_filter($this->env, ($context["tipo_documento"] ?? null), "html", null, true);
        echo ", de Habilitações literárias para efeitos, ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "efeito", [], "any", false, false, false, 69), "html", null, true);
        echo ". <br>
Vem mui respeitosamente, solicitar a sua Excelência Senhor (a) Director (a) do (a) ";
        // line 70
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["emitir_certificado"] ?? null), "instituicao", [], "any", false, false, false, 70), "nome", [], "any", false, false, false, 70), "html", null, true);
        echo "
se digne autorizar a emissão do documento.
</p
</div>
<div class=\"rodape\">
<p>
Pelo que
</p>
<p>
Espera deferimento
</p>

</div>
</div>
</body>

</html>


";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/declaracao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 70,  177 => 69,  165 => 64,  155 => 63,  147 => 62,  141 => 61,  135 => 60,  130 => 59,  122 => 58,  119 => 57,  112 => 56,  107 => 55,  105 => 54,  97 => 49,  91 => 46,  52 => 10,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt\" dir=\"ltr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">
    <title>Solicitação de certificado ou Declaração</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
   <!---<link  type=\"text/css\" href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">-->
  <style>
  .cabecalho{
    font-size: 20px;
    font-weight: bold;
    padding: 10px;
    text-align: center;
  }
    .cabecalho2principal{
        width: 100%;
    }
 .cabecalho2{
        font-size: 14px;
        font-weight: bold;
        margin-left: 50%;
        /*text-align: right;*/

           }

  .corpo{
    font-size: 15px;
    padding: 10px;
    text-align: justify;
    line-height:normal;
  }
    .rodape{
        font-size: 15px;
        padding: 10px;
        text-align: center;

    }
  </style>
</head>
<body >
<div class=\"container\">
<div class=\"cabecalho\">
<h4>Solicitação de {{tipo_documento}} </h4>
</div>
<div class=\"cabecalho2\">
 <p>A <br> Sua Excelência, Senhor(a) Director (a) <br>do (a) {{emitir_certificado.instituicao.nome}}</p>
</div>

<div class=\"corpo\">
<p>
{% if emitir_certificado.instituicao.nivel == \"basico\" %}
Eu <strong> {{emitir_certificado.estudante.pessoa.pai}}</strong>, Encarregado (a)
do (a) aluno (a) <strong> {{emitir_certificado.estudante.pessoa.nome_proprio}} {{emitir_certificado.estudante.pessoa.sobrenome}}  </strong>,
{% endif %} {% if emitir_certificado.instituicao.nivel == \"medio\"  %}
Eu  <strong> {{emitir_certificado.estudante.pessoa.nome_proprio}} {{emitir_certificado.estudante.pessoa.sobrenome}}  </strong>,
{% endif %} Filho (a) de <strong>{{emitir_certificado.estudante.pessoa.pai}}</strong>,
e de <strong>{{emitir_certificado.estudante.pessoa.mae}}</strong>, Nascido (a) aos <strong>{{emitir_certificado.estudante.pessoa.data_nascimento}}</strong>,
natural de <strong>{{emitir_certificado.estudante.pessoa.local_de_nascimento}}</strong>, Municipio de <strong>{{emitir_certificado.estudante.pessoa.municipio}}</strong>,
Provincia de <strong>{{emitir_certificado.estudante.pessoa.provincia}}</strong>, Portador do {{emitir_certificado.estudante.pessoa.tipo_documento}} nº <strong>{{emitir_certificado.estudante.pessoa.n_do_documento}}</strong>,
Passado  pelo Arquivo de Identificação de {{emitir_certificado.estudante.pessoa.provincia}}, aos {{ emitir_certificado.estudante.pessoa.data_de_emissao}}, que Frequentou e  concluiu  a {{emitir_certificado.classe}} Classe, Turma {{emitir_certificado.turma}}, curso
{{emitir_certificado.curso}}, no ano lectivo de {{emitir_certificado.ano_termino}} sob o processo nº ___, no (a) {{emitir_certificado.instituicao.nome}}.

</p>

<p>
 Necessitando de um  {{tipo_documento}}, de Habilitações literárias para efeitos, {{emitir_certificado.efeito}}. <br>
Vem mui respeitosamente, solicitar a sua Excelência Senhor (a) Director (a) do (a) {{emitir_certificado.instituicao.nome}}
se digne autorizar a emissão do documento.
</p
</div>
<div class=\"rodape\">
<p>
Pelo que
</p>
<p>
Espera deferimento
</p>

</div>
</div>
</body>

</html>


", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/declaracao.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/declaracao.twig");
    }
}
