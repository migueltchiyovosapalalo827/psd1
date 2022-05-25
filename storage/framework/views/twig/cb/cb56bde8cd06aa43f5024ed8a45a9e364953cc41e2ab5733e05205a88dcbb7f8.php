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

/* C:\laragon\www\psd1\resources\views/Inquerito/todos_inqueritos.twig */
class __TwigTemplate_d6633dcf524c945ce865b902eb1e4dee88274afdf0ed3d239ce8e3905a083305 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/todos_inqueritos.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <style>
        .table td{
            border-left: 0px !important;
            border-right: 1px solid #e2e8ee !important;
        }
    </style>
    <div class=\"w-100\">
        <div class=\"\">
            <div class=\"d-flex flex-wrap justify-content-between align-items-center\">
                <h3 class=\"col-md-3\">
                    ";
        // line 14
        if ((0 === twig_compare(($context["ano"] ?? null), 1))) {
            // line 15
            echo "                        Todos inquéritos
                    ";
        } else {
            // line 17
            echo "                        Inquéritos de ";
            echo twig_escape_filter($this->env, ($context["ano"] ?? null), "html", null, true);
            echo "
                    ";
        }
        // line 19
        echo "                </h3>
                <div class=\"col-auto  \">
                    <form action=\"\" method=\"get\" class=\"d-flex\">
                    
                        <input type=\"number\" list=\"inq\" name=\"ano\" class=\"form-control \" min=\"0\" placeholder=\"Ano\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["ano"] ?? null), "html", null, true);
        echo "\">
                        <button type=\"submit\" class=\"btn  ml-1 py-0 pr-1 pl-1 d-flex align-items-center btn-sm btn-primary-dark\"><i class=\"material-icons\">search</i></button>
                    </form>
                    <datalist id=\"inq\">
                        <option value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</option>
                        <option value=\"1\">Todos inquéritos</option>
                    </datalist>
                </div>
                <hr class=\"col-md-12\">
            </div>

            <div class=\"row align-items-center mb-2\">
                <div class=\"col-md-12\">
                    <div class=\"input-group input-group--inline \">
                        <div class=\"input-group-addon\">
                            <i class=\"material-icons align-items-center  \">search</i>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por tema, administrador, pesquisador\">
                    </div>
                </div>
            </div>
            <div class=\"card\">
                <div class=\"\">
                    <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">TEMA</th>
                            <th class=\"text-white\">Pesquisador</th>
                            <th class=\"text-white\">Inqueridos</th>
                            <th class=\"text-white\">Privacidade</th>
                            <th class=\"text-white\">Opções</th>
                        </tr>
                        </thead>
                        <tbody class=\"  border-left-0\">
                        ";
        // line 58
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
            // line 59
            echo "                            <tr>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "titulo", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                <td>";
            // line 62
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "pesquisador", [], "any", false, false, false, 62), "pessoa", [], "any", false, false, false, 62), "nome_proprio", [], "any", false, false, false, 62), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "pesquisador", [], "any", false, false, false, 62), "pessoa", [], "any", false, false, false, 62), "sobrenome", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "inscricoes", [], "any", false, false, false, 63)), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 65
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "privacidade", [], "any", false, false, false, 65)) {
                // line 66
                echo "                                        Público
                                    ";
            } else {
                // line 68
                echo "                                        Privado
                                    ";
            }
            // line 70
            echo "                                </td>
                                <td>
                                    <div class=\"dropdown show \">
                                        <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                        </a>

                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/inquerito/ver_inquerito/";
            // line 78
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Ver</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/inquerito/eliminar_inquerito/";
            // line 82
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["inquerito"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">
                                                <i class=\"material-icons md-14 align-middle\">remove_circle</i>
                                                <span class=\"align-middle\">Eliminar</span>
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
        // line 91
        echo "                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/todos_inqueritos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 91,  190 => 82,  183 => 78,  173 => 70,  169 => 68,  165 => 66,  163 => 65,  158 => 63,  152 => 62,  148 => 61,  144 => 60,  141 => 59,  124 => 58,  88 => 27,  81 => 23,  75 => 19,  69 => 17,  65 => 15,  63 => 14,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}
    <style>
        .table td{
            border-left: 0px !important;
            border-right: 1px solid #e2e8ee !important;
        }
    </style>
    <div class=\"w-100\">
        <div class=\"\">
            <div class=\"d-flex flex-wrap justify-content-between align-items-center\">
                <h3 class=\"col-md-3\">
                    {% if ano == 1 %}
                        Todos inquéritos
                    {% else %}
                        Inquéritos de {{ ano }}
                    {% endif %}
                </h3>
                <div class=\"col-auto  \">
                    <form action=\"\" method=\"get\" class=\"d-flex\">
                    
                        <input type=\"number\" list=\"inq\" name=\"ano\" class=\"form-control \" min=\"0\" placeholder=\"Ano\" value=\"{{ ano }}\">
                        <button type=\"submit\" class=\"btn  ml-1 py-0 pr-1 pl-1 d-flex align-items-center btn-sm btn-primary-dark\"><i class=\"material-icons\">search</i></button>
                    </form>
                    <datalist id=\"inq\">
                        <option value=\"{{ \"now\"|date(\"Y\") }}\">{{ \"now\"|date(\"Y\") }}</option>
                        <option value=\"1\">Todos inquéritos</option>
                    </datalist>
                </div>
                <hr class=\"col-md-12\">
            </div>

            <div class=\"row align-items-center mb-2\">
                <div class=\"col-md-12\">
                    <div class=\"input-group input-group--inline \">
                        <div class=\"input-group-addon\">
                            <i class=\"material-icons align-items-center  \">search</i>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por tema, administrador, pesquisador\">
                    </div>
                </div>
            </div>
            <div class=\"card\">
                <div class=\"\">
                    <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">TEMA</th>
                            <th class=\"text-white\">Pesquisador</th>
                            <th class=\"text-white\">Inqueridos</th>
                            <th class=\"text-white\">Privacidade</th>
                            <th class=\"text-white\">Opções</th>
                        </tr>
                        </thead>
                        <tbody class=\"  border-left-0\">
                        {% for inquerito in inqueritos  %}
                            <tr>
                                <td>{{ loop.index }}</td>
                                <td>{{ inquerito.titulo }}</td>
                                <td>{{ inquerito.pesquisador.pessoa.nome_proprio}} {{ inquerito.pesquisador.pessoa.sobrenome}}</td>
                                <td>{{ inquerito.inscricoes|length }}</td>
                                <td>
                                    {% if inquerito.privacidade %}
                                        Público
                                    {% else %}
                                        Privado
                                    {% endif %}
                                </td>
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
                                            <a class=\"dropdown-item\" href=\"/inquerito/eliminar_inquerito/{{ inquerito.id }}\">
                                                <i class=\"material-icons md-14 align-middle\">remove_circle</i>
                                                <span class=\"align-middle\">Eliminar</span>
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
{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/todos_inqueritos.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/todos_inqueritos.twig");
    }
}
