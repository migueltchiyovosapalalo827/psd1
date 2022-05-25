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

/* C:\laragon\www\psd1\resources\views/Usuario/grupo.twig */
class __TwigTemplate_28b69d7cfc7fc506f04dc4e37ec92dd318004deffc4baa6d0711960e27918766 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'conteudo' => [$this, 'block_conteudo'],
            'modal' => [$this, 'block_modal'],
            'js' => [$this, 'block_js'],
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/grupo.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"w-100\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\" w-100 d-flex justify-content-between align-items-center\">
                    ";
        // line 9
        if (($context["grupo"] ?? null)) {
            // line 10
            echo "                        <h4>
                            ";
            // line 11
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["grupo"] ?? null), "nome", [], "any", false, false, false, 11), "html", null, true);
            echo "
                        </h4>
                    ";
        }
        // line 14
        echo "                    <div class=\" d-flex justify-content-end\">
                        ";
        // line 15
        if (($context["grupo"] ?? null)) {
            // line 16
            echo "                            <button type=\"reset\" data-toggle=\"modal\" data-target=\"#defaultModal\" class=\"btn-warning btn-sm  d-flex align-items-center  btn \">
                                <i class=\"material-icons\">add</i>Editar permições do grupo
                            </button>
                        ";
        }
        // line 20
        echo "                        <button type=\"reset\" data-toggle=\"modal\" data-target=\"#defaultModalNovoGrupo\"  class=\"btn-outline-primary ml-1 btn-sm  d-flex align-items-center  btn \">
                            <i class=\"material-icons\">add</i>Novo grupo
                        </button>
                    </div>

                </div>
                <hr>
            </div>

            <div class=\"col-md-9\">
                ";
        // line 30
        if (($context["grupo"] ?? null)) {
            // line 31
            echo "
                    <div class=\"\">
                        <div class=\"car\">
                            <input type=\"text\" class=\"input_procurar form-control\" placeholder=\"Filtrar por tarefa, menu\" list=\"\"><br>
                            <table class=\"table tabela table-bordered table-responsive-xl bg-white\">
                                <thead>
                                <tr class=\"text-white bg-primary\">
                                    <th  class=\"text-center\">#</th>
                                    <th  class=\"text-center\">Nome</th>
                                    <th  class=\"text-center\">Caminho</th>
                                    <th  class=\"text-center\">Menu</th>

                                </tr>
                                </thead>
                                <tbody tb_perm_grupo>
                                ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tarefasDoGrupo"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tarefa"]) {
                // line 47
                echo "                                    <tr>
                                        <input type=\"hidden\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefa"], "tarefas", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\">
                                        <td> ";
                // line 49
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 50
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefa"], "tarefas", [], "any", false, false, false, 50), "nome", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 51
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefa"], "tarefas", [], "any", false, false, false, 51), "caminho", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                                        <td> ";
                // line 52
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefa"], "tarefas", [], "any", false, false, false, 52), "menus", [], "any", false, false, false, 52), "nome", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
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
                // line 55
                echo "                                    <tr>
                                        <td colspan=\"10\" class=\"text-center\">Este grupo não tem  nenhum permissão.</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarefa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                </tbody>
                            </table>
                        </div>

                    </div>

                ";
        } else {
            // line 66
            echo "                    <p class=\"h2 text-muted\">Selecione um grupo</p>
                ";
        }
        // line 68
        echo "            </div>
            <div class=\"col-md-3\">
                <ul class=\"list-group \">
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grupos"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
            // line 72
            echo "                        <a href=\"/usuario/grupo/";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["grupo"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" class=\"btn btn-primary mt-1\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["grupo"], "nome", [], "any", false, false, false, 72), "html", null, true);
            echo "</a>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                        <p class=\"text-muted\">Não tem grupos cadastrados.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </ul>
            </div>
        </div>

    </div>
";
    }

    // line 83
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "    <div class=\"modal fade \" id=\"defaultModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"defaultModalLabel\">Permições do grupo ";
        // line 88
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["grupo"] ?? null), "nome", [], "any", false, false, false, 88), "html", null, true);
        echo "</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"/usuario/salvar_permicoes\" id=\"salvar_permicoes\" method=\"post\">
                        ";
        // line 95
        echo csrf_field();
        echo "
                        <input type=\"text\" class=\"input_procurar form-control\" placeholder=\"Filtrar por tarefa, menu\" list=\"\"><br>
                        <div class=\"table-responsive\" style=\"height: 400px;\">
                            <table class=\"table tabela table-bordered  bg-white bg-primary\" >
                                <thead class=\"bg-primary text-white\">
                                <tr>
                                    <th>#</th>
                                    <th>Tarefa</th>
                                    <th>Menu</th>
                                </tr>
                                </thead>
                                <tbody >
                                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarefas"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tarefaAdd"]) {
            // line 108
            echo "                                    <tr role=\"button\" tr-selecionada2 style=\"cursor: pointer\" class=\"perm_";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefaAdd"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\">
                                        <td>";
            // line 109
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109), "html", null, true);
            echo "<input  type=\"checkbox\" name=\"tarefas[]\"  class=\"invisible\"  multiple=\"\" value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefaAdd"], "id", [], "any", false, false, false, 109), "html", null, true);
            echo "\"></td>
                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefaAdd"], "nome", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                                        <td> ";
            // line 111
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["tarefaAdd"], "menus", [], "any", false, false, false, 111), "nome", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarefaAdd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                                </tbody>
                            </table>
                        </div>
                        <input type=\"hidden\" name=\"grupo_id\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["grupo"] ?? null), "id", [], "any", false, false, false, 117), "html", null, true);
        echo "\">
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Fechar</button>
                    <button type=\"submit\" form=\"salvar_permicoes\" class=\"btn btn-primary\">Save alterações</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"defaultModalNovoGrupo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popoverModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"popoverModalLabel\">Novo grupo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"/usuario/salvar_grupo\" id=\"form_grupo\" method=\"post\">
                     ";
        // line 138
        echo csrf_field();
        echo "

                        <div class=\"form-group\">
                            <label for=\"\">Nome</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Nome do grupo\" name=\"g_nome\">
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Fechar</button>
                    <button type=\"submit\" form=\"form_grupo\" class=\"btn btn-primary\">Salvar</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 154
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "    <script>
        let permicoes = new permicoesModulo();
        permicoes.init();
    </script>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Usuario/grupo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 155,  357 => 154,  337 => 138,  313 => 117,  308 => 114,  291 => 111,  287 => 110,  281 => 109,  276 => 108,  259 => 107,  244 => 95,  234 => 88,  228 => 84,  224 => 83,  215 => 76,  208 => 74,  198 => 72,  193 => 71,  188 => 68,  184 => 66,  175 => 59,  166 => 55,  150 => 52,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  131 => 47,  113 => 46,  96 => 31,  94 => 30,  82 => 20,  76 => 16,  74 => 15,  71 => 14,  65 => 11,  62 => 10,  60 => 9,  53 => 4,  49 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}

    <div class=\"w-100\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\" w-100 d-flex justify-content-between align-items-center\">
                    {% if grupo %}
                        <h4>
                            {{ grupo.nome }}
                        </h4>
                    {% endif %}
                    <div class=\" d-flex justify-content-end\">
                        {% if grupo %}
                            <button type=\"reset\" data-toggle=\"modal\" data-target=\"#defaultModal\" class=\"btn-warning btn-sm  d-flex align-items-center  btn \">
                                <i class=\"material-icons\">add</i>Editar permições do grupo
                            </button>
                        {% endif %}
                        <button type=\"reset\" data-toggle=\"modal\" data-target=\"#defaultModalNovoGrupo\"  class=\"btn-outline-primary ml-1 btn-sm  d-flex align-items-center  btn \">
                            <i class=\"material-icons\">add</i>Novo grupo
                        </button>
                    </div>

                </div>
                <hr>
            </div>

            <div class=\"col-md-9\">
                {% if grupo  %}

                    <div class=\"\">
                        <div class=\"car\">
                            <input type=\"text\" class=\"input_procurar form-control\" placeholder=\"Filtrar por tarefa, menu\" list=\"\"><br>
                            <table class=\"table tabela table-bordered table-responsive-xl bg-white\">
                                <thead>
                                <tr class=\"text-white bg-primary\">
                                    <th  class=\"text-center\">#</th>
                                    <th  class=\"text-center\">Nome</th>
                                    <th  class=\"text-center\">Caminho</th>
                                    <th  class=\"text-center\">Menu</th>

                                </tr>
                                </thead>
                                <tbody tb_perm_grupo>
                                {% for tarefa in tarefasDoGrupo %}
                                    <tr>
                                        <input type=\"hidden\" value=\"{{ tarefa.tarefas.id }}\">
                                        <td> {{ loop.index }}</td>
                                        <td> {{ tarefa.tarefas.nome }}</td>
                                        <td> {{ tarefa.tarefas.caminho }}</td>
                                        <td> {{ tarefa.tarefas.menus.nome }}</td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"10\" class=\"text-center\">Este grupo não tem  nenhum permissão.</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>

                    </div>

                {% else %}
                    <p class=\"h2 text-muted\">Selecione um grupo</p>
                {% endif %}
            </div>
            <div class=\"col-md-3\">
                <ul class=\"list-group \">
                    {% for grupo in grupos %}
                        <a href=\"/usuario/grupo/{{ grupo.id }}\" class=\"btn btn-primary mt-1\">{{ grupo.nome }}</a>
                    {% else %}
                        <p class=\"text-muted\">Não tem grupos cadastrados.</p>
                    {% endfor %}
                </ul>
            </div>
        </div>

    </div>
{% endblock %}

{% block modal %}
    <div class=\"modal fade \" id=\"defaultModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"defaultModalLabel\">Permições do grupo {{ grupo.nome }}</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"/usuario/salvar_permicoes\" id=\"salvar_permicoes\" method=\"post\">
                        {{ csrf_field() }}
                        <input type=\"text\" class=\"input_procurar form-control\" placeholder=\"Filtrar por tarefa, menu\" list=\"\"><br>
                        <div class=\"table-responsive\" style=\"height: 400px;\">
                            <table class=\"table tabela table-bordered  bg-white bg-primary\" >
                                <thead class=\"bg-primary text-white\">
                                <tr>
                                    <th>#</th>
                                    <th>Tarefa</th>
                                    <th>Menu</th>
                                </tr>
                                </thead>
                                <tbody >
                                {% for tarefaAdd in  tarefas %}
                                    <tr role=\"button\" tr-selecionada2 style=\"cursor: pointer\" class=\"perm_{{ tarefaAdd.id }}\">
                                        <td>{{ loop.index }}<input  type=\"checkbox\" name=\"tarefas[]\"  class=\"invisible\"  multiple=\"\" value=\"{{ tarefaAdd.id }}\"></td>
                                        <td>{{ tarefaAdd.nome }}</td>
                                        <td> {{ tarefaAdd.menus.nome }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <input type=\"hidden\" name=\"grupo_id\" value=\"{{ grupo.id }}\">
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Fechar</button>
                    <button type=\"submit\" form=\"salvar_permicoes\" class=\"btn btn-primary\">Save alterações</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"defaultModalNovoGrupo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"popoverModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"popoverModalLabel\">Novo grupo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"/usuario/salvar_grupo\" id=\"form_grupo\" method=\"post\">
                     {{ csrf_field() }}

                        <div class=\"form-group\">
                            <label for=\"\">Nome</label>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Nome do grupo\" name=\"g_nome\">
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Fechar</button>
                    <button type=\"submit\" form=\"form_grupo\" class=\"btn btn-primary\">Salvar</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block js %}
    <script>
        let permicoes = new permicoesModulo();
        permicoes.init();
    </script>
{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/grupo.twig", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/grupo.twig");
    }
}
