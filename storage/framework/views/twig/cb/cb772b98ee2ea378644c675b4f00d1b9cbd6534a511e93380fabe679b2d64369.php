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

/* C:\laragon\www\psd1\resources\views/Instituicao/documentos/meus_pedidos.twig */
class __TwigTemplate_266438d135853799ef07f1177f35aeebf074ae114c293a97d2d8eab6932f1d9a extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/meus_pedidos.twig", 1);
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
                   Meus Pedidos
                </h2> 
                <hr>
 <nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
    <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Certificado emitido</a>
    <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Declaração emitida</a>
  </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
        <div class=\"col-md-9 mt-4 mb-4\">
        
       
        ";
        // line 22
        if (($context["certificado"] ?? null)) {
            // line 23
            echo "        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\"><h5><span style=\"color:#3783b5;\">Destinatário:</span> ";
            // line 24
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["escolacert"] ?? null), "nome", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Data de emissão:</span> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_converter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["certificado"] ?? null), "created_at", [], "any", false, false, false, 25)), "html", null, true);
            echo "</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Estado:</span>
          ";
            // line 27
            if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["certificado"] ?? null), "estado", [], "any", false, false, false, 27), 2))) {
                echo "documento entregue";
            } elseif ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["certificado"] ?? null), "estado", [], "any", false, false, false, 27), 1))) {
                echo "documento pronto ";
            } else {
                echo "documento em espera</h5>";
            }
            echo "</li>
        
        </ul>
        ";
        } else {
            // line 31
            echo "        <p class=\"ml-2\">Ainda não fez solicitação de Certificado à nenhuma instituição.</p>
        ";
        }
        // line 33
        echo "    </div>
  </div>
  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
  <div class=\"col-md-9 mt-4 mb-4\">
        ";
        // line 37
        if (($context["declaracao"] ?? null)) {
            // line 38
            echo "        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\"><h5><span style=\"color:#3783b5;\">Destinatário:</span> ";
            // line 39
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["escoladecl"] ?? null), "nome", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Data de emissão:</span> ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_converter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["declaracao"] ?? null), "created_at", [], "any", false, false, false, 40)), "html", null, true);
            echo "</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Estado:</span>
          ";
            // line 42
            if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["declaracao"] ?? null), "estado", [], "any", false, false, false, 42), 2))) {
                echo "documento entregue";
            } elseif ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["declaracao"] ?? null), "estado", [], "any", false, false, false, 42), 1))) {
                echo "documento pronto ";
            } else {
                echo "documento em espera</h5>";
            }
            echo "</li>
        
        </ul>
        ";
        } else {
            // line 46
            echo "        <p class=\"ml-2\">Ainda não fez solicitação de Declaração à nenhuma instituição.</p>
        ";
        }
        // line 48
        echo "    </div>
  </div>
</div>
            </div>
        </div>
   

    ";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/meus_pedidos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  135 => 46,  122 => 42,  117 => 40,  113 => 39,  110 => 38,  108 => 37,  102 => 33,  98 => 31,  85 => 27,  80 => 25,  76 => 24,  73 => 23,  71 => 22,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

    {% block conteudo %}
        
        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"mt-2\">
                   Meus Pedidos
                </h2> 
                <hr>
 <nav>
  <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
    <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Certificado emitido</a>
    <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Declaração emitida</a>
  </div>
</nav>
<div class=\"tab-content\" id=\"nav-tabContent\">
  <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
        <div class=\"col-md-9 mt-4 mb-4\">
        
       
        {% if certificado  %}
        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\"><h5><span style=\"color:#3783b5;\">Destinatário:</span> {{ escolacert.nome}}</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Data de emissão:</span> {{ date(certificado.created_at) }}</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Estado:</span>
          {% if certificado.estado == 2 %}documento entregue{% elseif certificado.estado == 1 %}documento pronto {% else %}documento em espera</h5>{% endif %}</li>
        
        </ul>
        {% else %}
        <p class=\"ml-2\">Ainda não fez solicitação de Certificado à nenhuma instituição.</p>
        {% endif %}
    </div>
  </div>
  <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
  <div class=\"col-md-9 mt-4 mb-4\">
        {% if declaracao  %}
        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\"><h5><span style=\"color:#3783b5;\">Destinatário:</span> {{ escoladecl.nome}}</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Data de emissão:</span> {{ date(declaracao.created_at) }}</h5></li>
        <li class=\"list-group-item\"><h5><span  style=\"color:#3783b5;\">Estado:</span>
          {% if declaracao.estado == 2 %}documento entregue{% elseif declaracao.estado == 1 %}documento pronto {% else %}documento em espera</h5>{% endif %}</li>
        
        </ul>
        {% else %}
        <p class=\"ml-2\">Ainda não fez solicitação de Declaração à nenhuma instituição.</p>
        {% endif %}
    </div>
  </div>
</div>
            </div>
        </div>
   

    {% endblock %}", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/meus_pedidos.twig", "C:\\laragon\\www\\psd1\\resources\\views/Instituicao/documentos/meus_pedidos.twig");
    }
}
