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

/* C:\laragon\www\psd1\resources\views/Instituicao/documentos/certificados_solicitados.twig */
class __TwigTemplate_c78da9b14d181c7b61d6919b3ba04c55db79a118be3e78de3fce795d66ed46bd extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/certificados_solicitados.twig", 1);
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
                   Certificados solicitados
                </h2>
                <hr>
 <nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
    <a class=\"nav-item nav-link active\" id=\"nav-docespera-tab\" data-toggle=\"tab\" href=\"#nav-docespera\" role=\"tab\" aria-controls=\"nav-docespera\" aria-selected=\"true\">Documentos em espera</a>
    <a class=\"nav-item nav-link\" id=\"nav-docpronto-tab\" data-toggle=\"tab\" href=\"#nav-docpronto\" role=\"tab\" aria-controls=\"nav-docpronto\" aria-selected=\"false\">Documentos prontos</a>
    <a class=\"nav-item nav-link\" id=\"nav-docentregue-tab\" data-toggle=\"tab\" href=\"#nav-docentregue\" role=\"tab\" aria-controls=\"nav-docentregue\" aria-selected=\"false\">Documentos entregues</a>
  </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  <div class=\"tab-pane fade show active\" id=\"nav-docespera\" role=\"tabpanel\" aria-labelledby=\"nav-docespera-tab\">
        <div class=\"col-md-12 mt-4 mb-4\">


        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Ano do término</th>
                            <th class=\"text-white\">Documento</th>
                            <th class=\"text-white\">Requerimento</th>
                            <th class=\"text-white\">comprovativo</th>
                            <th class=\"text-white\">Validação</th>
                        </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certificados"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["certificado"]) {
            // line 40
            echo "                        ";
            if (($context["certificado"] && (0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estado", [], "any", false, false, false, 40), 0)))) {
                // line 41
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 43), "pessoa", [], "any", false, false, false, 43), "nome_proprio", [], "any", false, false, false, 43), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 43), "pessoa", [], "any", false, false, false, 43), "sobrenome", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "curso", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                <td>";
                // line 45
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "turma", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                                <td>";
                // line 46
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "numero_estudantil", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                                <td>";
                // line 47
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "ano_termino", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                                <td> <a target=\"_blank\" href=\"";
                // line 48
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/documento";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 48), "pessoa", [], "any", false, false, false, 48), "n_do_documento", [], "any", false, false, false, 48), "html", null, true);
                echo ".pdf\">Documento</a> </td>
                                <td><a target=\"_blank\" href=\"";
                // line 49
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/requerimento";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo ".pdf\">requerimento</a></td>
                                <td><a target=\"_blank\" href=\"";
                // line 50
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "comprovativo", [], "any", false, false, false, 50), "html", null, true);
                echo "\">Comprovativo</a></td>
                                <td><form action=\"validacao_pronto_cert\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\"><input class=\"btn btn-primary\" type=\"submit\" value=\"pronto\"></td>
                            </tr>
                         ";
            }
            // line 54
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            </tbody>

        </table>

    </div>
  </div>
  <div class=\"tab-pane fade\" id=\"nav-docpronto\" role=\"tabpanel\" aria-labelledby=\"nav-docpronto-tab\">
 <div class=\"col-md-12 mt-4 mb-4\">

        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Ano do término</th>
                            <th class=\"text-white\">Documento</th>
                            <th class=\"text-white\">Requerimento</th>
                            <th class=\"text-white\">comprovativo</th>
                            <th class=\"text-white\">Validação</th>
                        </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certificados"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["certificado"]) {
            // line 81
            echo "                         ";
            if (($context["certificado"] && (0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estado", [], "any", false, false, false, 81), 1)))) {
                // line 82
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 83
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                                <td>";
                // line 84
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 84), "pessoa", [], "any", false, false, false, 84), "nome_proprio", [], "any", false, false, false, 84), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 84), "pessoa", [], "any", false, false, false, 84), "sobrenome", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                                <td>";
                // line 85
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "curso", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                                <td>";
                // line 86
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "turma", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                                <td>";
                // line 87
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "numero_estudantil", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                                <td>";
                // line 88
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "ano_termino", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
                                <td> <a target=\"_blank\" href=\"";
                // line 89
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/documento";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 89), "pessoa", [], "any", false, false, false, 89), "n_do_documento", [], "any", false, false, false, 89), "html", null, true);
                echo ".pdf\">Documento</a> </td>
                                <td><a target=\"_blank\" href=\"";
                // line 90
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/requerimento";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "id", [], "any", false, false, false, 90), "html", null, true);
                echo ".pdf\">requerimento</a></td>
                                <td><a target=\"_blank\" href=\"";
                // line 91
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "comprovativo", [], "any", false, false, false, 91), "html", null, true);
                echo "\">Comprovativo</a></td>
                                <td><form action=\"validacao_entregue_cert\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"";
                // line 92
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "id", [], "any", false, false, false, 92), "html", null, true);
                echo "\"><input class=\"btn btn-primary\" type=\"submit\" value=\"entregue\"></td>
                            </tr>
                      ";
            }
            // line 95
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                            </tbody>

        </table>

    </div>
  </div>
   <div class=\"tab-pane fade\" id=\"nav-docentregue\" role=\"tabpanel\" aria-labelledby=\"nav-docentregue-tab\">
 <div class=\"col-md-12 mt-4 mb-4\">


        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Ano do término</th>
                            <th class=\"text-white\">Documento</th>
                            <th class=\"text-white\">Requerimento</th>
                            <th class=\"text-white\">comprovativo</th>
                            <th class=\"text-white\">Validação</th>
                        </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["certificados"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["certificado"]) {
            // line 123
            echo "                            ";
            if (($context["certificado"] && (0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estado", [], "any", false, false, false, 123), 2)))) {
                // line 124
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 125
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 125), "html", null, true);
                echo "</td>
                                <td>";
                // line 126
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 126), "pessoa", [], "any", false, false, false, 126), "nome_proprio", [], "any", false, false, false, 126), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 126), "pessoa", [], "any", false, false, false, 126), "sobrenome", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
                                <td>";
                // line 127
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "curso", [], "any", false, false, false, 127), "html", null, true);
                echo "</td>
                                <td>";
                // line 128
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "turma", [], "any", false, false, false, 128), "html", null, true);
                echo "</td>
                                <td>";
                // line 129
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "numero_estudantil", [], "any", false, false, false, 129), "html", null, true);
                echo "</td>
                                <td>";
                // line 130
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "ano_termino", [], "any", false, false, false, 130), "html", null, true);
                echo "</td>
                                <td> <a target=\"_blank\" href=\"";
                // line 131
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/documento";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "estudante", [], "any", false, false, false, 131), "pessoa", [], "any", false, false, false, 131), "n_do_documento", [], "any", false, false, false, 131), "html", null, true);
                echo ".pdf\">Documento</a> </td>
                                <td><a target=\"_blank\" href=\"";
                // line 132
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/requerimento";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "id", [], "any", false, false, false, 132), "html", null, true);
                echo ".pdf\">requerimento</a></td>
                               <td><a target=\"_blank\" href=\"";
                // line 133
                echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/doc_emiss_certificado"]);
                echo "/";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["certificado"], "comprovativo", [], "any", false, false, false, 133), "html", null, true);
                echo "\">Comprovativo</a></td>
                                <td>documento entregue</td>
                            </tr>
                            ";
            }
            // line 137
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                            </tbody>

        </table>

    </div>
  </div>

</div>
            </div>
        </div>


    ";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/certificados_solicitados.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 138,  387 => 137,  378 => 133,  372 => 132,  366 => 131,  362 => 130,  358 => 129,  354 => 128,  350 => 127,  344 => 126,  340 => 125,  337 => 124,  334 => 123,  317 => 122,  289 => 96,  275 => 95,  269 => 92,  263 => 91,  257 => 90,  251 => 89,  247 => 88,  243 => 87,  239 => 86,  235 => 85,  229 => 84,  225 => 83,  222 => 82,  219 => 81,  202 => 80,  175 => 55,  161 => 54,  155 => 51,  149 => 50,  143 => 49,  137 => 48,  133 => 47,  129 => 46,  125 => 45,  121 => 44,  115 => 43,  111 => 42,  108 => 41,  105 => 40,  88 => 39,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

    {% block conteudo %}

        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                   Certificados solicitados
                </h2>
                <hr>
 <nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
    <a class=\"nav-item nav-link active\" id=\"nav-docespera-tab\" data-toggle=\"tab\" href=\"#nav-docespera\" role=\"tab\" aria-controls=\"nav-docespera\" aria-selected=\"true\">Documentos em espera</a>
    <a class=\"nav-item nav-link\" id=\"nav-docpronto-tab\" data-toggle=\"tab\" href=\"#nav-docpronto\" role=\"tab\" aria-controls=\"nav-docpronto\" aria-selected=\"false\">Documentos prontos</a>
    <a class=\"nav-item nav-link\" id=\"nav-docentregue-tab\" data-toggle=\"tab\" href=\"#nav-docentregue\" role=\"tab\" aria-controls=\"nav-docentregue\" aria-selected=\"false\">Documentos entregues</a>
  </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  <div class=\"tab-pane fade show active\" id=\"nav-docespera\" role=\"tabpanel\" aria-labelledby=\"nav-docespera-tab\">
        <div class=\"col-md-12 mt-4 mb-4\">


        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Ano do término</th>
                            <th class=\"text-white\">Documento</th>
                            <th class=\"text-white\">Requerimento</th>
                            <th class=\"text-white\">comprovativo</th>
                            <th class=\"text-white\">Validação</th>
                        </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        {% for certificado in certificados %}
                        {% if certificado and certificado.estado == 0 %}
                            <tr class=\"text-center\">
                                <td>{{ loop.index }}</td>
                                <td>{{ certificado.estudante.pessoa.nome_proprio}} {{ certificado.estudante.pessoa.sobrenome}}</td>
                                <td>{{ certificado.curso}}</td>
                                <td>{{ certificado.turma}}</td>
                                <td>{{ certificado.numero_estudantil}}</td>
                                <td>{{ certificado.ano_termino}}</td>
                                <td> <a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/documento{{certificado.estudante.pessoa.n_do_documento}}.pdf\">Documento</a> </td>
                                <td><a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/requerimento{{certificado.id }}.pdf\">requerimento</a></td>
                                <td><a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/{{ certificado.comprovativo }}\">Comprovativo</a></td>
                                <td><form action=\"validacao_pronto_cert\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"{{certificado.id}}\"><input class=\"btn btn-primary\" type=\"submit\" value=\"pronto\"></td>
                            </tr>
                         {% endif %}
                        {% endfor %}
                            </tbody>

        </table>

    </div>
  </div>
  <div class=\"tab-pane fade\" id=\"nav-docpronto\" role=\"tabpanel\" aria-labelledby=\"nav-docpronto-tab\">
 <div class=\"col-md-12 mt-4 mb-4\">

        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Ano do término</th>
                            <th class=\"text-white\">Documento</th>
                            <th class=\"text-white\">Requerimento</th>
                            <th class=\"text-white\">comprovativo</th>
                            <th class=\"text-white\">Validação</th>
                        </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        {% for certificado in certificados %}
                         {% if certificado and certificado.estado == 1 %}
                            <tr class=\"text-center\">
                                <td>{{ loop.index }}</td>
                                <td>{{ certificado.estudante.pessoa.nome_proprio}} {{ certificado.estudante.pessoa.sobrenome}}</td>
                                <td>{{ certificado.curso}}</td>
                                <td>{{ certificado.turma}}</td>
                                <td>{{ certificado.numero_estudantil}}</td>
                                <td>{{ certificado.ano_termino}}</td>
                                <td> <a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/documento{{certificado.estudante.pessoa.n_do_documento}}.pdf\">Documento</a> </td>
                                <td><a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/requerimento{{certificado.id }}.pdf\">requerimento</a></td>
                                <td><a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/{{ certificado.comprovativo }}\">Comprovativo</a></td>
                                <td><form action=\"validacao_entregue_cert\" method=\"post\"><input type=\"hidden\" name=\"id\" value=\"{{ certificado.id}}\"><input class=\"btn btn-primary\" type=\"submit\" value=\"entregue\"></td>
                            </tr>
                      {% endif %}
                        {% endfor %}
                            </tbody>

        </table>

    </div>
  </div>
   <div class=\"tab-pane fade\" id=\"nav-docentregue\" role=\"tabpanel\" aria-labelledby=\"nav-docentregue-tab\">
 <div class=\"col-md-12 mt-4 mb-4\">


        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Ano do término</th>
                            <th class=\"text-white\">Documento</th>
                            <th class=\"text-white\">Requerimento</th>
                            <th class=\"text-white\">comprovativo</th>
                            <th class=\"text-white\">Validação</th>
                        </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        {% for certificado in certificados %}
                            {% if certificado and certificado.estado == 2 %}
                            <tr class=\"text-center\">
                                <td>{{ loop.index }}</td>
                                <td>{{ certificado.estudante.pessoa.nome_proprio}} {{ certificado.estudante.pessoa.sobrenome}}</td>
                                <td>{{ certificado.curso}}</td>
                                <td>{{ certificado.turma}}</td>
                                <td>{{ certificado.numero_estudantil}}</td>
                                <td>{{ certificado.ano_termino}}</td>
                                <td> <a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/documento{{certificado.estudante.pessoa.n_do_documento}}.pdf\">Documento</a> </td>
                                <td><a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/requerimento{{certificado.id }}.pdf\">requerimento</a></td>
                               <td><a target=\"_blank\" href=\"{{asset('ficheiros/escolas/doc_emiss_certificado')}}/{{ certificado.comprovativo }}\">Comprovativo</a></td>
                                <td>documento entregue</td>
                            </tr>
                            {% endif %}
                        {% endfor %}
                            </tbody>

        </table>

    </div>
  </div>

</div>
            </div>
        </div>


    {% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/certificados_solicitados.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/certificados_solicitados.twig");
    }
}
