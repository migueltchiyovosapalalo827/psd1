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

/* C:\laragon\www\psd1\resources\views/Inquerito/inquerito_por_pesquisador.twig */
class __TwigTemplate_1de53ed993b4c5d1ccb7b241c8c2e8809194a730d79d24ff18a01bf7dd2287a4 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/inquerito_por_pesquisador.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"w-100\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 7
        if (($context["pesquisador"] ?? null)) {
            // line 8
            echo "                    <h4>
                        ";
            // line 9
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pesquisador"] ?? null), "pessoa", [], "any", false, false, false, 9), "nomeComSobrenome", [], "method", false, false, false, 9), "html", null, true);
            echo "
                    </h4>
                ";
        }
        // line 12
        echo "                <hr>
            </div>
            <div class=\"col-md-9\">
                ";
        // line 15
        if (($context["pesquisador"] ?? null)) {
            // line 16
            echo "                    <div class=\"row align-items-center mb-2\">
                        <div class=\"col-md-12\">
                            <div class=\"input-group input-group--inline \">
                                <div class=\"input-group-addon\">
                                    <i class=\"material-icons align-items-center  \">search</i>
                                </div>
                                <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por  tema\">
                            </div>
                        </div>

                    </div>
                    <div class=\"\">
                        <div class=\"car\">
                            <table class=\"table tabela table-bordered table-responsive-xl bg-white\">
                                <thead>
                                <tr class=\"text-white bg-primary\">
                                    <th  class=\"text-center\">#</th>
                                    <th  class=\"text-center\">TEMA</th>
                                    <th  class=\"text-center\">Inqueridos</th>
                                    <th  class=\"text-center\">Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["inqueritos"] ?? null));
            $context['_iterated'] = false;
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
                // line 40
                echo "                                    <tr>
                                        <td> ";
                // line 41
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 42
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "titulo", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 43
                echo twig_escape_filter($this->env, twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "inscricoes", [], "any", false, false, false, 43)), "html", null, true);
                echo "</td>
                                        <td>
                                            <div class=\"dropdown show \">
                                                <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                                </a>

                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"/inquerito/ver_inquerito/";
                // line 51
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
                                                        <i class=\"material-icons md-14 align-middle\">edit</i>
                                                        <span class=\"align-middle\">Ver</span>
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"/inquerito/eliminar_inquerito/";
                // line 55
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["livro"] ?? null), "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\">
                                                        <i class=\"material-icons md-14 align-middle\">remove_circle</i>
                                                        <span class=\"align-middle\">Eliminar</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 64
                echo "                                    <tr>
                                        <td colspan=\"10\" class=\"text-center\"> Este pesquisador não tem nenhum inquérito associado.</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inquerito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                </tbody>
                            </table>
                        </div>

                    </div>

                ";
        } else {
            // line 75
            echo "                    <p class=\"h2 text-muted\">Selecione um pesquisador</p>
                ";
        }
        // line 77
        echo "
            </div>
            <div class=\"col-md-3\">
                <ul class=\"list-group \">
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pesquisadores"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pesquisador"]) {
            // line 82
            echo "                        <a href=\"/inquerito/inquerito_por_pesquisador/";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["pesquisador"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\" class=\"btn btn-primary mt-1\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["pesquisador"], "pessoa", [], "any", false, false, false, 82), "nomeComSobrenome", [], "method", false, false, false, 82), "html", null, true);
            echo "</a>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                        <p class=\"text-muted\">Não tem pesquisadores cadastrados.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pesquisador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                </ul>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/inquerito_por_pesquisador.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  211 => 84,  201 => 82,  196 => 81,  190 => 77,  186 => 75,  177 => 68,  168 => 64,  146 => 55,  139 => 51,  128 => 43,  124 => 42,  120 => 41,  117 => 40,  99 => 39,  74 => 16,  72 => 15,  67 => 12,  61 => 9,  58 => 8,  56 => 7,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}
    <div class=\"w-100\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% if pesquisador %}
                    <h4>
                        {{ pesquisador.pessoa.nomeComSobrenome() }}
                    </h4>
                {% endif %}
                <hr>
            </div>
            <div class=\"col-md-9\">
                {% if pesquisador  %}
                    <div class=\"row align-items-center mb-2\">
                        <div class=\"col-md-12\">
                            <div class=\"input-group input-group--inline \">
                                <div class=\"input-group-addon\">
                                    <i class=\"material-icons align-items-center  \">search</i>
                                </div>
                                <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por  tema\">
                            </div>
                        </div>

                    </div>
                    <div class=\"\">
                        <div class=\"car\">
                            <table class=\"table tabela table-bordered table-responsive-xl bg-white\">
                                <thead>
                                <tr class=\"text-white bg-primary\">
                                    <th  class=\"text-center\">#</th>
                                    <th  class=\"text-center\">TEMA</th>
                                    <th  class=\"text-center\">Inqueridos</th>
                                    <th  class=\"text-center\">Opções</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for inquerito in inqueritos %}
                                    <tr>
                                        <td> {{ loop.index }}</td>
                                        <td> {{ inquerito.titulo }}</td>
                                        <td> {{ inquerito.inscricoes|length }}</td>
                                        <td>
                                            <div class=\"dropdown show \">
                                                <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                                </a>

                                                <div class=\"dropdown-menu\">
                                                    <a class=\"dropdown-item\" href=\"/inquerito/ver_inquerito/{{ inquerito.id }}\">
                                                        <i class=\"material-icons md-14 align-middle\">edit</i>
                                                        <span class=\"align-middle\">Ver</span>
                                                    </a>
                                                    <a class=\"dropdown-item\" href=\"/inquerito/eliminar_inquerito/{{ livro.id }}\">
                                                        <i class=\"material-icons md-14 align-middle\">remove_circle</i>
                                                        <span class=\"align-middle\">Eliminar</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"10\" class=\"text-center\"> Este pesquisador não tem nenhum inquérito associado.</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>

                    </div>

                {% else %}
                    <p class=\"h2 text-muted\">Selecione um pesquisador</p>
                {% endif %}

            </div>
            <div class=\"col-md-3\">
                <ul class=\"list-group \">
                    {% for pesquisador in pesquisadores %}
                        <a href=\"/inquerito/inquerito_por_pesquisador/{{ pesquisador.id }}\" class=\"btn btn-primary mt-1\">{{ pesquisador.pessoa.nomeComSobrenome() }}</a>
                    {% else %}
                        <p class=\"text-muted\">Não tem pesquisadores cadastrados.</p>
                    {% endfor %}
                </ul>
            </div>
        </div>

    </div>
{% endblock %}", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/inquerito_por_pesquisador.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/inquerito_por_pesquisador.twig");
    }
}
