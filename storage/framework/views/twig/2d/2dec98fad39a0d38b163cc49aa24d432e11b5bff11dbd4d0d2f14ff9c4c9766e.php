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

/* @include/alert.twig */
class __TwigTemplate_60d9087cb9d5700988182917f1b6cbc02d83b5599aebfa7c8ec4562fd5404db0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $context = TwigBridge\Node\EventNode::triggerLaravelEvents($this->getTemplateName(), $context);
        // line 1
        echo "<script type=\"text/javascript\" src=\"/public/js/pnotify/PNotify.js\"></script>
";
        // line 2
        if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "tipo", [], "any", false, false, false, 2), "sucesso"))) {
            // line 3
            echo "    <script charset=\"\${_response_encoding}\">
        PNotify.success({
            title: \"";
            // line 5
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getTitulo", [], "method", false, false, false, 5), "html", null, true);
            echo "\",
            text: \"";
            // line 6
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getMensagem", [], "method", false, false, false, 6), "html", null, true);
            echo "\",
            type: \"success\",
            styling: 'bootstrap3',
            icons: 'fontawesome4',
            delay: 2000,
            destroy: true,
            remove: true,
            textTrusted: true,
        });
        ";
            // line 15
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "destruir", [], "method", false, false, false, 15), "html", null, true);
            echo "
    </script>
";
        }
        // line 18
        if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "tipo", [], "any", false, false, false, 18), "erro"))) {
            // line 19
            echo "    <script charset=\"\${_response_encoding}\">
        PNotify.error({
            title: \"";
            // line 21
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getTitulo", [], "method", false, false, false, 21), "html", null, true);
            echo "\",
            text: \"";
            // line 22
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getMensagem", [], "method", false, false, false, 22), "html", null, true);
            echo "\",
            type: \"error\",
            styling: 'bootstrap3',
            icons: 'fontawesome4',
            delay: 2000,
            destroy: true,
            remove: true,
            textTrusted: true,

        });
    </script>
    ";
            // line 33
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "destruir", [], "method", false, false, false, 33), "html", null, true);
            echo "
";
        }
        // line 35
        echo "
";
        // line 36
        if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "tipo", [], "any", false, false, false, 36), "aviso"))) {
            // line 37
            echo "    <script charset=\"\${_response_encoding}\">
        PNotify.info({
            title: \"";
            // line 39
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getTitulo", [], "method", false, false, false, 39), "html", null, true);
            echo "\",
            text: \"";
            // line 40
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "getMensagem", [], "method", false, false, false, 40), "html", null, true);
            echo "\",
            styling: 'bootstrap3',
            icons: 'fontawesome4',
            delay: 2000,
            destroy: true,
            remove: true,
            textTrusted: true,
        });
    </script>
    ";
            // line 49
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["alert"] ?? null), "destruir", [], "method", false, false, false, 49), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@include/alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  111 => 40,  107 => 39,  103 => 37,  101 => 36,  98 => 35,  93 => 33,  79 => 22,  75 => 21,  71 => 19,  69 => 18,  63 => 15,  51 => 6,  47 => 5,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\" src=\"/public/js/pnotify/PNotify.js\"></script>
{% if alert.tipo == 'sucesso' %}
    <script charset=\"\${_response_encoding}\">
        PNotify.success({
            title: \"{{ alert.getTitulo() }}\",
            text: \"{{ alert.getMensagem() }}\",
            type: \"success\",
            styling: 'bootstrap3',
            icons: 'fontawesome4',
            delay: 2000,
            destroy: true,
            remove: true,
            textTrusted: true,
        });
        {{ alert.destruir() }}
    </script>
{% endif %}
{%  if alert.tipo == 'erro' %}
    <script charset=\"\${_response_encoding}\">
        PNotify.error({
            title: \"{{ alert.getTitulo() }}\",
            text: \"{{ alert.getMensagem() }}\",
            type: \"error\",
            styling: 'bootstrap3',
            icons: 'fontawesome4',
            delay: 2000,
            destroy: true,
            remove: true,
            textTrusted: true,

        });
    </script>
    {{ alert.destruir() }}
{% endif %}

{%  if alert.tipo  == 'aviso' %}
    <script charset=\"\${_response_encoding}\">
        PNotify.info({
            title: \"{{ alert.getTitulo() }}\",
            text: \"{{ alert.getMensagem() }}\",
            styling: 'bootstrap3',
            icons: 'fontawesome4',
            delay: 2000,
            destroy: true,
            remove: true,
            textTrusted: true,
        });
    </script>
    {{ alert.destruir() }}
{% endif %}", "@include/alert.twig", "C:\\laragon\\www\\psd1\\resources\\views\\_include\\alert.twig");
    }
}
