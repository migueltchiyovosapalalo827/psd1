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

/* C:\laragon\www\psd1\resources\views/Biblioteca/Livro/pesquisar_livro.twig */
class __TwigTemplate_061c6c2d7b6068a6097aace2d343385c59e43db0f18a0951625362f6f599ea36 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/pesquisar_livro.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <form action=\"\" method=\"get\" class=\"container\">
        <div class=\" col-md-12 pt-1 pb-3\">
            <div class=\"input-group input-group--inline w-100\" >
                <div class=\"input-group-addon pb-1\">
                    <i class=\"material-icons align-middle\">search</i>
                </div>
                <input type=\"text\" class=\"form-control\" name=\"q\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
        echo "\" placeholder=\"Pesquisar por titulo, área, autor\">
                <div class=\"input-group-append\">
                    <button type=\"submit\"   class=\" input-group-text material-icons\">search</button>
                </div>
            </div>
        </div>
    </form>


    <div class=\"d-flex flex-wrap justify-content-start container\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livros"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livro"]) {
            // line 21
            echo "            <div class=\"col-md-4 \">
                <div class=\"card card-property\">
                    <a href=\"/biblioteca/ver_livro/";
            // line 23
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">

                        ";
            // line 25
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "capa", [], "any", false, false, false, 25)) {
                // line 26
                echo "                            <img style=\"height: 220px;\" src=\"/public/ficheiros/livros/capas/";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "capa", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"card-img img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "titulo", [], "any", false, false, false, 26), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 28
                echo "                            <img style=\"height: 220px;\" src=\"/public/ficheiros/livros/capas/capa_geral.png\" class=\"card-img\" alt=\"Sem capa\">
                        ";
            }
            // line 30
            echo "                    </a>
                    <div class=\"card-body\">
                        <div class=\"badge badge-primary-dark\">";
            // line 32
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "sigla", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
                        <div class=\"d-flex align-items-center justify-content-between mb-2\">
                            <a href=\"/biblioteca/ver_livro/";
            // line 34
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"h6 text-primary-dark mb-0\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "titulo", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>

                        </div>
                        <ul class=\"list-unstyled m-0\">
                            <li class=\"d-flex mb-1\">
                                <i class=\"material-icons md-18 align-middle mr-2 text-muted\">bookmark_border</i>
                                <span>";
            // line 40
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "curso", [], "any", false, false, false, 40), "nome", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                            </li>
                            <li class=\"d-flex mb-1\">
                                <i class=\"material-icons md-18 align-middle mr-2 text-muted\">person</i>
                                <span>";
            // line 44
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "autor", [], "any", false, false, false, 44), "nome", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                            </li>
                            <li class=\"d-flex mb-1\">
                                <i class=\"material-icons md-18 align-middle mr-2 text-muted\">access_time</i>
                                <span>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "created_at", [], "any", false, false, false, 48), "d/m/Y", false), "html", null, true);
            echo "</span>
                            </li>
                            ";
            // line 50
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "ficheiro", [], "any", false, false, false, 50)) {
                // line 51
                echo "                                <a type=\"button\" class=\" btn   btn-success btn-block text-white\" target=\"_blank\" href=\"/public/ficheiros/livros/ficheiros/";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["livro"], "ficheiro", [], "any", false, false, false, 51), "html", null, true);
                echo "\">  <i class=\"material-icons font-1 align-bottom\">file_download</i>Descarregar ficheiro</a>
                            ";
            }
            // line 53
            echo "                        </ul>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "            <p class=\" col-md-12 text-muted text-center\">Não foi possivel encontrar um livro ";
            echo twig_escape_filter($this->env, ($context["q"] ?? null), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/pesquisar_livro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 60,  156 => 58,  147 => 53,  141 => 51,  139 => 50,  134 => 48,  127 => 44,  120 => 40,  109 => 34,  104 => 32,  100 => 30,  96 => 28,  88 => 26,  86 => 25,  81 => 23,  77 => 21,  72 => 20,  59 => 10,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}
    <form action=\"\" method=\"get\" class=\"container\">
        <div class=\" col-md-12 pt-1 pb-3\">
            <div class=\"input-group input-group--inline w-100\" >
                <div class=\"input-group-addon pb-1\">
                    <i class=\"material-icons align-middle\">search</i>
                </div>
                <input type=\"text\" class=\"form-control\" name=\"q\" value=\"{{ q }}\" placeholder=\"Pesquisar por titulo, área, autor\">
                <div class=\"input-group-append\">
                    <button type=\"submit\"   class=\" input-group-text material-icons\">search</button>
                </div>
            </div>
        </div>
    </form>


    <div class=\"d-flex flex-wrap justify-content-start container\">
        {% for livro in livros %}
            <div class=\"col-md-4 \">
                <div class=\"card card-property\">
                    <a href=\"/biblioteca/ver_livro/{{ livro.id }}\">

                        {% if livro.capa %}
                            <img style=\"height: 220px;\" src=\"/public/ficheiros/livros/capas/{{ livro.capa }}\" class=\"card-img img-fluid\" alt=\"{{ livro.titulo }}\">
                        {% else %}
                            <img style=\"height: 220px;\" src=\"/public/ficheiros/livros/capas/capa_geral.png\" class=\"card-img\" alt=\"Sem capa\">
                        {% endif %}
                    </a>
                    <div class=\"card-body\">
                        <div class=\"badge badge-primary-dark\">{{ livro.sigla }}</div>
                        <div class=\"d-flex align-items-center justify-content-between mb-2\">
                            <a href=\"/biblioteca/ver_livro/{{ livro.id }}\" class=\"h6 text-primary-dark mb-0\">{{ livro.titulo }}</a>

                        </div>
                        <ul class=\"list-unstyled m-0\">
                            <li class=\"d-flex mb-1\">
                                <i class=\"material-icons md-18 align-middle mr-2 text-muted\">bookmark_border</i>
                                <span>{{ livro.curso.nome }}</span>
                            </li>
                            <li class=\"d-flex mb-1\">
                                <i class=\"material-icons md-18 align-middle mr-2 text-muted\">person</i>
                                <span>{{ livro.autor.nome }}</span>
                            </li>
                            <li class=\"d-flex mb-1\">
                                <i class=\"material-icons md-18 align-middle mr-2 text-muted\">access_time</i>
                                <span>{{ livro.created_at|date(\"d/m/Y\", false) }}</span>
                            </li>
                            {% if livro.ficheiro %}
                                <a type=\"button\" class=\" btn   btn-success btn-block text-white\" target=\"_blank\" href=\"/public/ficheiros/livros/ficheiros/{{ livro.ficheiro }}\">  <i class=\"material-icons font-1 align-bottom\">file_download</i>Descarregar ficheiro</a>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\" col-md-12 text-muted text-center\">Não foi possivel encontrar um livro {{ q }}</p>
        {% endfor %}
    </div>


{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/pesquisar_livro.twig", "C:\\laragon\\www\\psd1\\resources\\views/Biblioteca/Livro/pesquisar_livro.twig");
    }
}
