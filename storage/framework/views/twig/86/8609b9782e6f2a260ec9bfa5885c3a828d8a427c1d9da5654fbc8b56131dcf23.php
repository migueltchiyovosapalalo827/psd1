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

/* C:\laragon\www\psd1\resources\views/Biblioteca/Livro/todos_livros.twig */
class __TwigTemplate_b2f276cbe9fbbdf399942c11b92a1a37541fa54126ac5b781a450563e6c7acf7 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/todos_livros.twig", 1);
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
            <h3>Todos livros</h3>
            <hr>
            <div class=\"row align-items-center mb-2\">
                <div class=\"col-md-12\">
                    <div class=\"input-group input-group--inline \">
                        <div class=\"input-group-addon\">
                            <i class=\"material-icons align-items-center  \">search</i>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por Sigla, titulo, área, autor\">
                    </div>
                </div>
            </div>
            <div class=\"card\">
                <div class=\"\">
                    <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Sigla</th>
                            <th class=\"text-white\">Título</th>
                            <th class=\"text-white\">Área</th>
                            <th class=\"text-white\">Autor</th>
                            <th class=\"text-white\">ver / baixar</th>
                            <th class=\"text-white\">Opções</th>
                        </tr>
                        </thead>
                        <tbody class=\"  border-left-0\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livros"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["livro"]) {
            // line 40
            echo "                            <tr >
                                <td >
                                    ";
            // line 42
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                </td>
                                <td >
                                    ";
            // line 45
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "sigla", [], "any", false, false, false, 45), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 48
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "titulo", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                </td>

                                <td>
                                    <a href=\"/biblioteca/livros_por_areas/";
            // line 52
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "curso", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"text-primary-dark\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "curso", [], "any", false, false, false, 52), "nome", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    <a href=\"/biblioteca/ver_autor/";
            // line 55
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "autor", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\" class=\"text-primary-dark\"> ";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "autor", [], "any", false, false, false, 55), "nome", [], "any", false, false, false, 55), "html", null, true);
            echo "</a>
                                </td>
                                <td>
                                    <a target=\"_blank\" href=\"";
            // line 58
            echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/livros/ficheiros/"]);
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "ficheiro", [], "any", false, false, false, 58), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "ficheiro", [], "any", false, false, false, 58), "html", null, true);
            echo "</a>
                                </td>
                                <td class=\"p-2\">
                                    <div class=\"dropdown show \">
                                        <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                        </a>

                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/biblioteca/ver_livro/";
            // line 67
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Ver</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/biblioteca/adicionar_livro/";
            // line 71
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Editar</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/biblioteca/eliminar_livro/";
            // line 75
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "id", [], "any", false, false, false, 75), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
        return "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/todos_livros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 84,  173 => 75,  166 => 71,  159 => 67,  144 => 58,  136 => 55,  128 => 52,  121 => 48,  115 => 45,  109 => 42,  105 => 40,  88 => 39,  51 => 4,  47 => 3,  35 => 1,);
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
            <h3>Todos livros</h3>
            <hr>
            <div class=\"row align-items-center mb-2\">
                <div class=\"col-md-12\">
                    <div class=\"input-group input-group--inline \">
                        <div class=\"input-group-addon\">
                            <i class=\"material-icons align-items-center  \">search</i>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-md input_procurar\" name=\"search\" placeholder=\"Pesquisar por Sigla, titulo, área, autor\">
                    </div>
                </div>
            </div>
            <div class=\"card\">
                <div class=\"\">
                    <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Sigla</th>
                            <th class=\"text-white\">Título</th>
                            <th class=\"text-white\">Área</th>
                            <th class=\"text-white\">Autor</th>
                            <th class=\"text-white\">ver / baixar</th>
                            <th class=\"text-white\">Opções</th>
                        </tr>
                        </thead>
                        <tbody class=\"  border-left-0\">
                        {% for livro in livros  %}
                            <tr >
                                <td >
                                    {{ loop.index }}
                                </td>
                                <td >
                                    {{ livro.sigla }}
                                </td>
                                <td>
                                    {{ livro.titulo }}
                                </td>

                                <td>
                                    <a href=\"/biblioteca/livros_por_areas/{{ livro.curso.id }}\" class=\"text-primary-dark\">{{ livro.curso.nome }}</a>
                                </td>
                                <td>
                                    <a href=\"/biblioteca/ver_autor/{{ livro.autor.id }}\" class=\"text-primary-dark\"> {{ livro.autor.nome }}</a>
                                </td>
                                <td>
                                    <a target=\"_blank\" href=\"{{asset('ficheiros/livros/ficheiros/')}}{{ livro.ficheiro }}\">{{ livro.ficheiro }}</a>
                                </td>
                                <td class=\"p-2\">
                                    <div class=\"dropdown show \">
                                        <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                        </a>

                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/biblioteca/ver_livro/{{ livro.id }}\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Ver</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/biblioteca/adicionar_livro/{{ livro.id }}\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Editar</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/biblioteca/eliminar_livro/{{ livro.id }}\">
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
", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/todos_livros.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/todos_livros.twig");
    }
}
