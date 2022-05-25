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

/* C:\laragon\www\psd1\resources\views/Inquerito/criar_inquerito.twig */
class __TwigTemplate_99d22db77c01f195c38054907df9880074c3dc9472cb081f82d125c29d373b28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'conteudo' => [$this, 'block_conteudo'],
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/criar_inquerito.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"/public/css/vendor-bootstrap-switch.css\">
";
    }

    // line 5
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <style>
    .w-96{
        width: 96%;
    }
    </style>
    <form action=\"/inquerito/salvar_inquerito\" method=\"post\" id=\"form_s\" enctype=\"multipart/form-data\">
    ";
        // line 12
        echo csrf_field();
        echo "
    <div class=\"container\">
    <div class=\"card border-bottom-0\">
    <div class=\"card-header p-1 d-flex\">
    <button type=\"reset\" btn_limpar_form class=\"bg-white btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">add</i>Novo
    </button>
    <button   type=\"submit\" class=\"bg-white btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">save</i>Salvar
    </button>
    <a href=\"/inquerito/todos_inqueritos\"  class=\"btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">content_paste</i>Todos inqueritos
    </a>
    <a href=\"/pesquisador/criar_pesquisador\"  class=\"btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">search</i>Novo Pesquisador
    </a>
    </div>
    </div>
    <div class=\"card\">

    <div class=\"card-header p-1 \">
    <h5 class=\"p-0 m-0 text-center pt-2 pb-2\">Criar inquérito</h5>
    </div>

    <div class=\"card-body\">
    <h5>Informações básicas</h5>
    <hr>
    <div class=\"row pl-0\">
    <div class=\"form-group col-md-6\">
    <label for=\"titulo\">Titulo</label>
    <input type=\"text\" name=\"titulo\" autocomplete=\"off\" autofocus maxlength=\"255\" id=\"titulo\" class=\"form-control\" required placeholder=\"Título do inquérito\">
    <input type=\"hidden\" name=\"administrador\" value=\"1\">
    </div>
    <div class=\"form-group col-md-6\">
    <label for=\"pesquisador\">Pesquisador</label>
    <select class=\"form-control\" id=\"pesquisador\" required name=\"pesquisador\">
    <option disabled=\"\" >Selecione um pesquisador</option>
    ";
        // line 49
        if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 49), "pessoa", [], "any", false, false, false, 49), "tipo_de_entidade", [], "method", false, false, false, 49), "pesquisador"))) {
            // line 50
            echo "        ";
            $context["x"] = TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 50), "pessoa", [], "any", false, false, false, 50), "meu_pesquisador", [], "method", false, false, false, 50);
            // line 51
            echo "        <option selected=\"\" value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["x"] ?? null), "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["x"] ?? null), "nome", [], "any", false, false, false, 51), "html", null, true);
            echo "</option>
        ";
        } else {
            // line 53
            echo "           ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pesquisadores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pesquisador"]) {
                // line 54
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["pesquisador"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["pesquisador"], "pessoa", [], "any", false, false, false, 54), "nome_completo", [], "method", false, false, false, 54), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pesquisador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
        }
        // line 57
        echo "
    </select>
    </div>
    <div class=\"form-group col-md-6\">
    <label for=\"inquerito_logotipo\">Logotipo</label>
    <input type=\"file\" name=\"logotipo\" autocomplete=\"off\"  id=\"inquerito_logotipo\" class=\"form-control\"  >
    </div>
    <div class=\"form-group col-md-3\">
    <label for=\"privacidade\">Privacidade</label>
    <br>
    <input id=\"privacidade\" type=\"checkbox\" bootstrap-switch1 name=\"privacidade\" checked data-on-text=\"Privado\" data-off-text=\"Público\">
    </div>
    <div class=\"form-group col-md-3\">
    <label for=\"modo_de_exibicao\">Apresentar  por passos?</label><br>
    <input id=\"modo_de_exibicao\" type=\"checkbox\" bootstrap-switch2 name=\"modo_de_exibicao\" checked data-on-text=\"Não\" data-off-text=\"Sim\">
    </div>

    <div class=\"form-group col-md-12\">
    <label for=\"descricao\">Descrição</label>
    <textarea name=\"descricao\" id=\"descricao\" cols=\"30\"  rows=\"5\" class=\"form-control\" placeholder=\"Descrição\"></textarea>
    </div>
    </div>
    <hr class=\"m-0 mt-2\">
    <div class=\"d-flex justify-content-between py-2 align-items-center\">
    <h5 class=\"p-0 m-0\">Perguntas</h5>
    </div>
    <hr class=\"m-0 mb-3\">
    <div id=\"perguntas\">
    </div>
    <div class=\"\">
    <button type=\"button\"  class=\"btn btn-primary-dark btn-sm d-flex justify-content-center align-items-center\" btnAddP><i class=\"material-icons \">add</i> Nova pergunta</button>
    </div>
    </div>
    </div>
    </div>
    </form>


";
    }

    // line 97
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "
    <script src=\"/public/js/bootstrap-switch.min.js\"></script>

    <script>
    \$(\"[bootstrap-switch1]\").bootstrapSwitch();
    \$(\"[bootstrap-switch2]\").bootstrapSwitch();
    </script>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/criar_inquerito.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 98,  184 => 97,  142 => 57,  139 => 56,  128 => 54,  123 => 53,  115 => 51,  112 => 50,  110 => 49,  70 => 12,  62 => 6,  58 => 5,  53 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}
{% block css %}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/public/css/vendor-bootstrap-switch.css\">
{% endblock %}
{% block conteudo %}
    <style>
    .w-96{
        width: 96%;
    }
    </style>
    <form action=\"/inquerito/salvar_inquerito\" method=\"post\" id=\"form_s\" enctype=\"multipart/form-data\">
    {{ csrf_field() }}
    <div class=\"container\">
    <div class=\"card border-bottom-0\">
    <div class=\"card-header p-1 d-flex\">
    <button type=\"reset\" btn_limpar_form class=\"bg-white btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">add</i>Novo
    </button>
    <button   type=\"submit\" class=\"bg-white btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">save</i>Salvar
    </button>
    <a href=\"/inquerito/todos_inqueritos\"  class=\"btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">content_paste</i>Todos inqueritos
    </a>
    <a href=\"/pesquisador/criar_pesquisador\"  class=\"btn-sm nounderline d-flex align-items-center  btn  \" style=\"color: #5999c3;\" onMouseOver=\"this.style.color='#25364a'\" onMouseOut=\"this.style.color='#5999c3'\">
    <i class=\"material-icons\">search</i>Novo Pesquisador
    </a>
    </div>
    </div>
    <div class=\"card\">

    <div class=\"card-header p-1 \">
    <h5 class=\"p-0 m-0 text-center pt-2 pb-2\">Criar inquérito</h5>
    </div>

    <div class=\"card-body\">
    <h5>Informações básicas</h5>
    <hr>
    <div class=\"row pl-0\">
    <div class=\"form-group col-md-6\">
    <label for=\"titulo\">Titulo</label>
    <input type=\"text\" name=\"titulo\" autocomplete=\"off\" autofocus maxlength=\"255\" id=\"titulo\" class=\"form-control\" required placeholder=\"Título do inquérito\">
    <input type=\"hidden\" name=\"administrador\" value=\"1\">
    </div>
    <div class=\"form-group col-md-6\">
    <label for=\"pesquisador\">Pesquisador</label>
    <select class=\"form-control\" id=\"pesquisador\" required name=\"pesquisador\">
    <option disabled=\"\" >Selecione um pesquisador</option>
    {% if  SESSION.usuario.pessoa.tipo_de_entidade() == 'pesquisador' %}
        {%   set x = SESSION.usuario.pessoa.meu_pesquisador() %}
        <option selected=\"\" value=\"{{x.id}}\">{{x.nome}}</option>
        {% else %}
           {% for pesquisador in pesquisadores %}
            <option value=\"{{ pesquisador.id }}\">{{ pesquisador.pessoa.nome_completo() }}</option>
        {% endfor %}
    {% endif %}

    </select>
    </div>
    <div class=\"form-group col-md-6\">
    <label for=\"inquerito_logotipo\">Logotipo</label>
    <input type=\"file\" name=\"logotipo\" autocomplete=\"off\"  id=\"inquerito_logotipo\" class=\"form-control\"  >
    </div>
    <div class=\"form-group col-md-3\">
    <label for=\"privacidade\">Privacidade</label>
    <br>
    <input id=\"privacidade\" type=\"checkbox\" bootstrap-switch1 name=\"privacidade\" checked data-on-text=\"Privado\" data-off-text=\"Público\">
    </div>
    <div class=\"form-group col-md-3\">
    <label for=\"modo_de_exibicao\">Apresentar  por passos?</label><br>
    <input id=\"modo_de_exibicao\" type=\"checkbox\" bootstrap-switch2 name=\"modo_de_exibicao\" checked data-on-text=\"Não\" data-off-text=\"Sim\">
    </div>

    <div class=\"form-group col-md-12\">
    <label for=\"descricao\">Descrição</label>
    <textarea name=\"descricao\" id=\"descricao\" cols=\"30\"  rows=\"5\" class=\"form-control\" placeholder=\"Descrição\"></textarea>
    </div>
    </div>
    <hr class=\"m-0 mt-2\">
    <div class=\"d-flex justify-content-between py-2 align-items-center\">
    <h5 class=\"p-0 m-0\">Perguntas</h5>
    </div>
    <hr class=\"m-0 mb-3\">
    <div id=\"perguntas\">
    </div>
    <div class=\"\">
    <button type=\"button\"  class=\"btn btn-primary-dark btn-sm d-flex justify-content-center align-items-center\" btnAddP><i class=\"material-icons \">add</i> Nova pergunta</button>
    </div>
    </div>
    </div>
    </div>
    </form>


{% endblock %}

{% block js %}

    <script src=\"/public/js/bootstrap-switch.min.js\"></script>

    <script>
    \$(\"[bootstrap-switch1]\").bootstrapSwitch();
    \$(\"[bootstrap-switch2]\").bootstrapSwitch();
    </script>
{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/criar_inquerito.twig", "C:\\laragon\\www\\psd1\\resources\\views/Inquerito/criar_inquerito.twig");
    }
}
