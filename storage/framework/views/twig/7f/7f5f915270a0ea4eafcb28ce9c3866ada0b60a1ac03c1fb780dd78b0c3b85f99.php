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

/* C:\laragon\www\psd1\resources\views/Cartao/cartoes_emtidos.twig */
class __TwigTemplate_53efe9954a40be6daa85d73b3a2e667697342e6daee99a23936c9f0b5d437ce3 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Cartao/cartoes_emtidos.twig", 1);
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
                   Cartões solicitados
                </h2>
                <hr>
 <nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
    <a class=\"nav-item nav-link active\" id=\"nav-docespera-tab\" data-toggle=\"tab\" href=\"#nav-docespera\" role=\"tab\" aria-controls=\"nav-docespera\" aria-selected=\"true\">Cartões de estudante</a>
  </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  <div class=\"tab-pane fade show active\" id=\"nav-docespera\" role=\"tabpanel\" aria-labelledby=\"nav-docespera-tab\">
        <div class=\"col-md-12 mt-4 mb-4\">

        ";
        // line 20
        if (($context["cartoes"] ?? null)) {
            // line 21
            echo "        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Instituição</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Classe</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Fotografia</th>
                            <th class=\"text-white\">Acção</th>
                           </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cartoes"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["cartao"]) {
                // line 37
                echo "                            <tr class=\"text-center\">
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "pessoa", [], "any", false, false, false, 39), "nome_proprio", [], "any", false, false, false, 39), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "pessoa", [], "any", false, false, false, 39), "sobrenome", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "instituicao", [], "any", false, false, false, 40), "nome", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "curso", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "classe", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "turma", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "numero_estudantil", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                <td> <a target=\"_blank\" href=\"/cartao/cartao_foto/";
                // line 45
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\">Fotografia</a> </td>
                                      <td class=\"p-2\">
                                    <div class=\"dropdown show \">
                                        <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                        </a>

                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/cartao/ver_cartao/";
                // line 53
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Ver</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/cartao/editar_cartao/";
                // line 57
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Editar</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/cartao/eliminar_cartao/";
                // line 61
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["cartao"], "id", [], "any", false, false, false, 61), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            </tbody>

        </table>
        ";
        } else {
            // line 74
            echo "        <p class=\"ml-2\">Não há solicitação de Cartões.</p>
        ";
        }
        // line 76
        echo "    </div>
  </div>
</div>
  </div>
</div>


    ";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Cartao/cartoes_emtidos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 76,  192 => 74,  186 => 70,  163 => 61,  156 => 57,  149 => 53,  138 => 45,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  118 => 40,  112 => 39,  108 => 38,  105 => 37,  88 => 36,  71 => 21,  69 => 20,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

    {% block conteudo %}

        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                   Cartões solicitados
                </h2>
                <hr>
 <nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
    <a class=\"nav-item nav-link active\" id=\"nav-docespera-tab\" data-toggle=\"tab\" href=\"#nav-docespera\" role=\"tab\" aria-controls=\"nav-docespera\" aria-selected=\"true\">Cartões de estudante</a>
  </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  <div class=\"tab-pane fade show active\" id=\"nav-docespera\" role=\"tabpanel\" aria-labelledby=\"nav-docespera-tab\">
        <div class=\"col-md-12 mt-4 mb-4\">

        {% if cartoes %}
        <table class=\"table tabela table-no-border table-responsive-xl table-hover   mb-0\">
                        <thead class=\"bg-primary text-white\">
                        <tr>
                            <th class=\"text-white\">#</th>
                            <th class=\"text-white\">Nome</th>
                            <th class=\"text-white\">Instituição</th>
                            <th class=\"text-white\">Curso</th>
                            <th class=\"text-white\">Classe</th>
                            <th class=\"text-white\">Turma</th>
                            <th class=\"text-white\">Número estudantil</th>
                            <th class=\"text-white\">Fotografia</th>
                            <th class=\"text-white\">Acção</th>
                           </tr>
                        </thead>
                        <tbody class=\"border-left-0\">
                        {% for cartao in cartoes %}
                            <tr class=\"text-center\">
                                <td>{{ loop.index }}</td>
                                <td>{{cartao.pessoa.nome_proprio}} {{cartao.pessoa.sobrenome}}</td>
                                <td>{{cartao.instituicao.nome}}</td>
                                <td>{{ cartao.curso}}</td>
                                <td>{{ cartao.classe}}</td>
                                <td>{{ cartao.turma}}</td>
                                <td>{{ cartao.numero_estudantil}}</td>
                                <td> <a target=\"_blank\" href=\"/cartao/cartao_foto/{{cartao.id}}\">Fotografia</a> </td>
                                      <td class=\"p-2\">
                                    <div class=\"dropdown show \">
                                        <a class=\"btn btn-white btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"material-icons md-18 align-middle\">more_horiz</i>
                                        </a>

                                        <div class=\"dropdown-menu\">
                                            <a class=\"dropdown-item\" href=\"/cartao/ver_cartao/{{cartao.id }}\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Ver</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/cartao/editar_cartao/{{cartao.id }}\">
                                                <i class=\"material-icons md-14 align-middle\">edit</i>
                                                <span class=\"align-middle\">Editar</span>
                                            </a>
                                            <a class=\"dropdown-item\" href=\"/cartao/eliminar_cartao/{{cartao.id }}\">
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
        {% else %}
        <p class=\"ml-2\">Não há solicitação de Cartões.</p>
        {% endif %}
    </div>
  </div>
</div>
  </div>
</div>


    {% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Cartao/cartoes_emtidos.twig", "C:\\laragon\\www\\psd1\\resources\\views/Cartao/cartoes_emtidos.twig");
    }
}
