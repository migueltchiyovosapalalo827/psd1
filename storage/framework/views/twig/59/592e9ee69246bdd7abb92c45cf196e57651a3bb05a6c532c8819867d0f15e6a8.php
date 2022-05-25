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

/* C:\laragon\www\psd1\resources\views/cartao/ver_cartao.twig */
class __TwigTemplate_3d6e27427dc5aee0bcb1baca3321b192eb0f0bc1b61ec5c67baaed64511f4e0a extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/cartao/ver_cartao.twig", 1);
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
                    Cartão de Estudante
                </h2>
                <hr>
                \t<div class=\"container\">
    <div class=\"main-body\">
          <div class=\"row gutters-sm\">
            <div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    <img src=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["ficheiros/escolas/foto"]);
        echo "/";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "foto", [], "any", false, false, false, 18), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded\" width=\"150\">
                    <div class=\"mt-3\">
                      <h3> <a target=\"_blank\" href=\"/cartao/cartao_foto/";
        // line 20
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "pessoa", [], "any", false, false, false, 20), "nome_proprio", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "pessoa", [], "any", false, false, false, 20), "sobrenome", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></h3>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class=\"col-md-8\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">

                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Escola</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                     ";
        // line 37
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "instituicao", [], "any", false, false, false, 37), "nome", [], "any", false, false, false, 37), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Curso</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                   ";
        // line 46
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "curso", [], "any", false, false, false, 46), "html", null, true);
        echo "
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Classe</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      <p>";
        // line 55
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "classe", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
                    </div>
                  </div>
                     <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Turma</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      <p>";
        // line 64
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "turma", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
                    </div>
                  </div>
                     <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Número de Estudante</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      <p> ";
        // line 73
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "numero_estudantil", [], "any", false, false, false, 73), "html", null, true);
        echo "</p>
                    </div>
                  </div>
                  <hr>
            </div>
          </div>

        </div>
    </div>
\t</div>
</div>
<div class=\"d-flex align-items-left justify-content-end\">
                        <a href=\"/cartao/editar_cartao/";
        // line 85
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["cartao"] ?? null), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "\"><button type=\"submit\" class=\"btn btn-success\" value=\"Salvar\">Editar</button></a>
                    </div>


        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/cartao/ver_cartao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 85,  146 => 73,  134 => 64,  122 => 55,  110 => 46,  98 => 37,  74 => 20,  67 => 18,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

    {% block conteudo %}

        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                    Cartão de Estudante
                </h2>
                <hr>
                \t<div class=\"container\">
    <div class=\"main-body\">
          <div class=\"row gutters-sm\">
            <div class=\"col-md-4 mb-3\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <div class=\"d-flex flex-column align-items-center text-center\">
                    <img src=\"{{asset('ficheiros/escolas/foto')}}/{{cartao.foto}}\" alt=\"Admin\" class=\"rounded\" width=\"150\">
                    <div class=\"mt-3\">
                      <h3> <a target=\"_blank\" href=\"/cartao/cartao_foto/{{cartao.id}}\">{{ cartao.pessoa.nome_proprio }} {{ cartao.pessoa.sobrenome}}</a></h3>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class=\"col-md-8\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">

                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Escola</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                     {{cartao.instituicao.nome}}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Curso</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                   {{ cartao.curso}}
                    </div>
                  </div>
                  <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Classe</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      <p>{{ cartao.classe}}</p>
                    </div>
                  </div>
                     <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Turma</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      <p>{{ cartao.turma}}</p>
                    </div>
                  </div>
                     <hr>
                  <div class=\"row\">
                    <div class=\"col-sm-3\">
                      <h6 class=\"mb-0\">Número de Estudante</h6>
                    </div>
                    <div class=\"col-sm-9 text-secondary\">
                      <p> {{ cartao.numero_estudantil}}</p>
                    </div>
                  </div>
                  <hr>
            </div>
          </div>

        </div>
    </div>
\t</div>
</div>
<div class=\"d-flex align-items-left justify-content-end\">
                        <a href=\"/cartao/editar_cartao/{{cartao.id }}\"><button type=\"submit\" class=\"btn btn-success\" value=\"Salvar\">Editar</button></a>
                    </div>


        </div>
    </div>

{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/cartao/ver_cartao.twig", "C:\\laragon\\www\\psd1\\resources\\views/cartao/ver_cartao.twig");
    }
}
