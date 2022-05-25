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

/* C:\laragon\www\psd1\resources\views/Biblioteca/Curso/listar_cursos.twig */
class __TwigTemplate_4e6028d2aa6da1a485556d5d982e093af1c0c1629f35714db1424c00682b01be extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Curso/listar_cursos.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"\">
        <div class=\"row align-items-center mb-2\">
            <div class=\"col-md-12\">
                <h4>
                    Todas áreas 
                </h4>
            </div>
            <div class=\"col-md-6\">
                <div class=\"input-group input-group--inline \">
                    <div class=\"input-group-addon\">
                        <i class=\"material-icons align-items-center  \">search</i>
                    </div>
                    <input type=\"text\" class=\"form-control input_procurar form-control-md\" name=\"search\" placeholder=\"Pesquisar por Área\">
                </div>
            </div>

        </div>
        <div class=\"card\">
            <div class=\"\">

                <table class=\"table tabela table-projects mb-0\">
                    <thead class=\"bg-primary text-white\">
                    <tr>

                        <th class=\"text-white\">Áreas</th>
                        <th class=\"text-white\">Total de livros</th>
                        <th class=\"text-white\">Data de criação</th>

                        <th class=\"text-white\">Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cursos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 37
            echo "                        <tr>

                            <td>
                                ";
            // line 40
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "nome", [], "any", false, false, false, 40), "html", null, true);
            echo "
                            </td>
                            <td>
                                <a href=\"/biblioteca/livros_por_curso/";
            // line 43
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "livros", [], "any", false, false, false, 43)), "html", null, true);
            echo "</a>
                            </td>
                            <td>
                                ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "created_at", [], "any", false, false, false, 46), "d/m/y", false), "html", null, true);
            echo "
                            </td>


                            <td>
                                <div class=\"dropdown show\">
                                    <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"material-icons md-18 align-middle\">more_horiz</i>

                                    </a>

                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"/biblioteca/adicionar_curso/";
            // line 58
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
                                            <i class=\"material-icons md-14 align-middle\">edit</i>
                                            <span class=\"align-middle\">Editar</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"/biblioteca/eliminar_curso/";
            // line 62
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["curso"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
                                            <i class=\"material-icons md-14 align-middle\">remove_circle</i>
                                            <span class=\"align-middle\">Eliminar</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "

                    </tbody>
                </table>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Curso/listar_cursos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 71,  130 => 62,  123 => 58,  108 => 46,  100 => 43,  94 => 40,  89 => 37,  85 => 36,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}
    <div class=\"\">
        <div class=\"row align-items-center mb-2\">
            <div class=\"col-md-12\">
                <h4>
                    Todas áreas 
                </h4>
            </div>
            <div class=\"col-md-6\">
                <div class=\"input-group input-group--inline \">
                    <div class=\"input-group-addon\">
                        <i class=\"material-icons align-items-center  \">search</i>
                    </div>
                    <input type=\"text\" class=\"form-control input_procurar form-control-md\" name=\"search\" placeholder=\"Pesquisar por Área\">
                </div>
            </div>

        </div>
        <div class=\"card\">
            <div class=\"\">

                <table class=\"table tabela table-projects mb-0\">
                    <thead class=\"bg-primary text-white\">
                    <tr>

                        <th class=\"text-white\">Áreas</th>
                        <th class=\"text-white\">Total de livros</th>
                        <th class=\"text-white\">Data de criação</th>

                        <th class=\"text-white\">Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for curso in cursos %}
                        <tr>

                            <td>
                                {{ curso.nome }}
                            </td>
                            <td>
                                <a href=\"/biblioteca/livros_por_curso/{{ curso.id }}\">{{ curso.livros|length }}</a>
                            </td>
                            <td>
                                {{ curso.created_at|date(\"d/m/y\",false) }}
                            </td>


                            <td>
                                <div class=\"dropdown show\">
                                    <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"material-icons md-18 align-middle\">more_horiz</i>

                                    </a>

                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"/biblioteca/adicionar_curso/{{ curso.id }}\">
                                            <i class=\"material-icons md-14 align-middle\">edit</i>
                                            <span class=\"align-middle\">Editar</span>
                                        </a>
                                        <a class=\"dropdown-item\" href=\"/biblioteca/eliminar_curso/{{ curso.id }}\">
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
{% endblock %}", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Curso/listar_cursos.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Curso/listar_cursos.twig");
    }
}
