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

/* C:\laragon\www\psd1\resources\views/Pesquisador/meus_inqueritos.twig */
class __TwigTemplate_fe4cc6947ce2e81565e59cb81094412538740b1fcfdaa2800cc188d0a6eb38b4 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/meus_inqueritos.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (($context["erro"] ?? null)) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["erro"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        <style>
            .table td{
                border-left: 0px !important;
                border-right: 1px solid #e2e8ee !important;
            }
        </style>
        <div class=\"w-100\">
            <div class=\"\">
                <h3>Meus inquéritos</h3>
                <hr>
                <div class=\"row align-items-center mb-2\">
                    <div class=\"col-md-12\">
                        <div class=\"input-group input-group--inline \">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons align-items-center  \">search</i>
                            </div>
                            <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por Titulo\">
                        </div>
                    </div>

                </div>
                <div class=\"card\">
                    <div class=\"\">
                        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                            <thead class=\"bg-primary text-white\">
                            <tr>
                                <th class=\"text-white\">#</th>
                                <th class=\"text-white\">Titulo</th>
                                <th class=\"text-white\">Inqueridos</th>
                                <th class=\"text-white\">Perguntas</th>
                                <th class=\"text-white\">Respostas</th>
                                <th class=\"text-white\">Opções</th>
                            </tr>
                            </thead>
                            <tbody class=\"  border-left-0\">
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inqueritos"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["inquerito"]) {
                // line 43
                echo "                                <tr>
                                    <td >
                                        ";
                // line 45
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45), "html", null, true);
                echo "
                                    </td>
                                    <td >
                                        ";
                // line 48
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "titulo", [], "any", false, false, false, 48), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 51
                echo twig_escape_filter($this->env, twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "inscricoes", [], "any", false, false, false, 51)), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 54
                echo twig_escape_filter($this->env, twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "perguntas", [], "any", false, false, false, 54)), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "perguntas", [], "any", false, false, false, 57), "respostas", [], "any", false, false, false, 57)), "html", null, true);
                echo "
                                    </td>
                                    <td class=\"p-2\">
                                        <div class=\"dropdown show \">
                                            <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                            </a>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"/inquerito/ver_inquerito/";
                // line 65
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\">
                                                    <i class=\"material-icons md-14 align-middle\">edit</i>
                                                    <span class=\"align-middle\">Ver</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inquerito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 81
        echo "

";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/meus_inqueritos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 81,  176 => 74,  153 => 65,  142 => 57,  136 => 54,  130 => 51,  124 => 48,  118 => 45,  114 => 43,  97 => 42,  60 => 7,  54 => 5,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}
    {% if erro %}
        {{ erro }}
    {% else %}
        <style>
            .table td{
                border-left: 0px !important;
                border-right: 1px solid #e2e8ee !important;
            }
        </style>
        <div class=\"w-100\">
            <div class=\"\">
                <h3>Meus inquéritos</h3>
                <hr>
                <div class=\"row align-items-center mb-2\">
                    <div class=\"col-md-12\">
                        <div class=\"input-group input-group--inline \">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons align-items-center  \">search</i>
                            </div>
                            <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por Titulo\">
                        </div>
                    </div>

                </div>
                <div class=\"card\">
                    <div class=\"\">
                        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                            <thead class=\"bg-primary text-white\">
                            <tr>
                                <th class=\"text-white\">#</th>
                                <th class=\"text-white\">Titulo</th>
                                <th class=\"text-white\">Inqueridos</th>
                                <th class=\"text-white\">Perguntas</th>
                                <th class=\"text-white\">Respostas</th>
                                <th class=\"text-white\">Opções</th>
                            </tr>
                            </thead>
                            <tbody class=\"  border-left-0\">
                            {% for inquerito in inqueritos  %}
                                <tr>
                                    <td >
                                        {{ loop.index }}
                                    </td>
                                    <td >
                                        {{ inquerito.titulo }}
                                    </td>
                                    <td>
                                        {{ inquerito.inscricoes|length }}
                                    </td>
                                    <td>
                                        {{ inquerito.perguntas|length }}
                                    </td>
                                    <td>
                                        {{ inquerito.perguntas.respostas|length }}
                                    </td>
                                    <td class=\"p-2\">
                                        <div class=\"dropdown show \">
                                            <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                            </a>
                                            <div class=\"dropdown-menu\">
                                                <a class=\"dropdown-item\" href=\"/inquerito/ver_inquerito/{{ inquerito.id }}\">
                                                    <i class=\"material-icons md-14 align-middle\">edit</i>
                                                    <span class=\"align-middle\">Ver</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}


{% endblock %}", "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/meus_inqueritos.twig", "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/meus_inqueritos.twig");
    }
}
