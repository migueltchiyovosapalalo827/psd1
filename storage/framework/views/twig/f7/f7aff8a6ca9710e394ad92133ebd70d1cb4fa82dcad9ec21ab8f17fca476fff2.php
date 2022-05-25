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

/* _include/menu_lateral.twig */
class __TwigTemplate_0d14f05856eeffa2d0b2b406f8c2e5f43120950a8f388c5abd500f7bd6b62261 extends Template
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
        echo "<div class=\"mdk-drawer js-mdk-drawer\" id=\"default-drawer\">
    <div class=\"mdk-drawer__content\">
        <div class=\"mdk-drawer__inner\" data-simplebar data-simplebar-force-enabled=\"true\">
            <nav class=\"drawer  drawer--dark\">
                <!-- HEADING-->
                <div class=\"py-2 drawer-heading\">
                    Painel principal
                </div>
                <!-- DASHBOARDS MENU-->
                <ul class=\"drawer-menu\" id=\"dasboardMenu\" data-children=\".drawer-submenu\">
                    <li class=\"drawer-menu-item \">
                        <a href=\"/painel\">
                            <i class=\"material-icons\">dashboard</i>
                            <span class=\"drawer-menu-text\"> Meu painel</span>
                        </a>
                    </li>
                </ul>
                <!-- Biblioteca -->
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "MenuDoUsuario", [], "any", false, false, false, 19), function ($__me__) use ($context, $macros) { $context["me"] = $__me__; return ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "menu", [], "any", false, false, false, 19), "Biblioteca")) && (0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 19)), 1))); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 20
            if ((0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 20)), 1))) {
                // line 21
                echo "
                        ";
                // line 22
                if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                            <div class=\"py-2 drawer-heading\" id=\"Bio\">
                                Biblioteca
                            </div>
                        ";
                }
                // line 27
                echo "                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para";
                // line 28
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para";
                // line 30
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" href=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" data-target=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">";
                // line 31
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "icon", [], "any", false, false, false, 31), "html", null, true);
                echo "</i>
                                    <span class=\"drawer-menu-text\">";
                // line 32
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "nome", [], "any", false, false, false, 32), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id";
                // line 34
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
                                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["mtarefa"]) {
                    // line 36
                    echo "                                        <li class=\"drawer-menu- \"><a href=\"";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "caminho", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "nome", [], "any", false, false, false, 36), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mtarefa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                                </ul>
                            </li>
                        </ul>
                    ";
            }
            // line 42
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "MenuDoUsuario", [], "any", false, false, false, 43), function ($__me__) use ($context, $macros) { $context["me"] = $__me__; return ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "menu", [], "any", false, false, false, 43), "Instituicao")) && (0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 43)), 1))); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 44
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                // line 45
                echo "                            <div class=\"py-2 drawer-heading\" id=\"Ist\">
                                Instituição
                            </div>
                        ";
            }
            // line 49
            echo "                        ";
            if ((0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 49)), 1))) {
                // line 50
                echo "                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para";
                // line 51
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
            <a data-toggle=\"collapse\" data-parent=\"#para";
                // line 53
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" href=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" data-target=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 53), "html", null, true);
                echo "\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">";
                // line 54
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "icon", [], "any", false, false, false, 54), "html", null, true);
                echo "</i>
                                    <span class=\"drawer-menu-text\">";
                // line 55
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "nome", [], "any", false, false, false, 55), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id";
                // line 57
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">
                                    ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["mtarefa"]) {
                    // line 59
                    echo "                                    <li class=\"drawer-menu- \"><a href=\"";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "caminho", [], "any", false, false, false, 59), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "nome", [], "any", false, false, false, 59), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mtarefa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                                </ul>
                            </li>
                        </ul>
                    ";
            }
            // line 65
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "MenuDoUsuario", [], "any", false, false, false, 67), function ($__me__) use ($context, $macros) { $context["me"] = $__me__; return ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "menu", [], "any", false, false, false, 67), "Documentos")) && (0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 67)), 1))); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 68
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 68)) {
                // line 69
                echo "                            <div class=\"py-2 drawer-heading\" id=\"Ist\">
                                Documentos
                            </div>
                        ";
            }
            // line 73
            echo "                        ";
            if ((0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 73)), 1))) {
                // line 74
                echo "                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para";
                // line 75
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 75), "html", null, true);
                echo "\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
            <a data-toggle=\"collapse\" data-parent=\"#para";
                // line 77
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\" href=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\" data-target=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">";
                // line 78
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "icon", [], "any", false, false, false, 78), "html", null, true);
                echo "</i>
                                    <span class=\"drawer-menu-text\">";
                // line 79
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "nome", [], "any", false, false, false, 79), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id";
                // line 81
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\">
                                    ";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 82));
                foreach ($context['_seq'] as $context["_key"] => $context["mtarefa"]) {
                    // line 83
                    echo "                                    <li class=\"drawer-menu- \"><a href=\"";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "caminho", [], "any", false, false, false, 83), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "nome", [], "any", false, false, false, 83), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mtarefa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                                </ul>
                            </li>
                        </ul>
                    ";
            }
            // line 89
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "
                <!-- COMPONENTS MENU -->
                <!-- Inquerito -->
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "MenuDoUsuario", [], "any", false, false, false, 93), function ($__me__) use ($context, $macros) { $context["me"] = $__me__; return ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "menu", [], "any", false, false, false, 93), "Inquerito")) && (0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 93)), 1))); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 94
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 94)) {
                // line 95
                echo "                        <div class=\"py-2 drawer-heading\" id=\"Inq\">
                            Inquérito
                        </div>
                    ";
            }
            // line 99
            echo "                    ";
            if ((0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 99)), 1))) {
                // line 100
                echo "                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para";
                // line 101
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para";
                // line 103
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\" href=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\" data-target=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">";
                // line 104
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "icon", [], "any", false, false, false, 104), "html", null, true);
                echo "</i>
                                    <span class=\"drawer-menu-text\">";
                // line 105
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "nome", [], "any", false, false, false, 105), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id";
                // line 107
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 107), "html", null, true);
                echo "\">
                                    ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["mtarefa"]) {
                    // line 109
                    echo "                                        <li class=\"drawer-menu- \"><a href=\"";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "caminho", [], "any", false, false, false, 109), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "nome", [], "any", false, false, false, 109), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mtarefa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                                </ul>
                            </li>
                        </ul>

                    ";
            }
            // line 116
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                 <!-- Cartoes -->
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "MenuDoUsuario", [], "any", false, false, false, 118), function ($__me__) use ($context, $macros) { $context["me"] = $__me__; return ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "menu", [], "any", false, false, false, 118), "Cartoes")) && (0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 118)), 1))); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 119
            if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 119)) {
                // line 120
                echo "                        <div class=\"py-2 drawer-heading\" id=\"Inq\">
                            Cartões de Estudante
                        </div>
                    ";
            }
            // line 124
            echo "                    ";
            if ((0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 124)), 1))) {
                // line 125
                echo "                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para";
                // line 126
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para";
                // line 128
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 128), "html", null, true);
                echo "\" href=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 128), "html", null, true);
                echo "\" data-target=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 128), "html", null, true);
                echo "\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">";
                // line 129
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "icon", [], "any", false, false, false, 129), "html", null, true);
                echo "</i>
                                    <span class=\"drawer-menu-text\">";
                // line 130
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "nome", [], "any", false, false, false, 130), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id";
                // line 132
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 132), "html", null, true);
                echo "\">
                                    ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 133));
                foreach ($context['_seq'] as $context["_key"] => $context["mtarefa"]) {
                    // line 134
                    echo "                                        <li class=\"drawer-menu- \"><a href=\"";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "caminho", [], "any", false, false, false, 134), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "nome", [], "any", false, false, false, 134), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mtarefa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                                </ul>
                            </li>
                        </ul>

                    ";
            }
            // line 141
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                <!-- PAGES MENU -->

                ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "MenuDoUsuario", [], "any", false, false, false, 144), function ($__me__) use ($context, $macros) { $context["me"] = $__me__; return ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "menu", [], "any", false, false, false, 144), "Sistema")) && (0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 144)), 1))); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["me"]) {
            // line 145
            if ((0 <= twig_compare(twig_length_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 145)), 1))) {
                // line 146
                echo "
                        ";
                // line 147
                if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 147)) {
                    // line 148
                    echo "                            <div class=\"py-2 drawer-heading\" id=\"Inq\">
                                Sistema
                            </div>
                        ";
                }
                // line 152
                echo "                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para";
                // line 153
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 153), "html", null, true);
                echo "\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para";
                // line 155
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 155), "html", null, true);
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 155), "html", null, true);
                echo "\" data-target=\"#id";
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 155), "html", null, true);
                echo "\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">";
                // line 156
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "icon", [], "any", false, false, false, 156), "html", null, true);
                echo "</i>
                                    <span class=\"drawer-menu-text\">";
                // line 157
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "nome", [], "any", false, false, false, 157), "html", null, true);
                echo "</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id";
                // line 159
                echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "id", [], "any", false, false, false, 159), "html", null, true);
                echo "\">
                                    ";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["me"], "tarefas", [], "any", false, false, false, 160));
                foreach ($context['_seq'] as $context["_key"] => $context["mtarefa"]) {
                    // line 161
                    echo "                                        <li class=\"drawer-menu- \"><a href=\"";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "caminho", [], "any", false, false, false, 161), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["mtarefa"], "nome", [], "any", false, false, false, 161), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mtarefa'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                                </ul>
                            </li>
                        </ul>
                    ";
            }
            // line 167
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['me'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                <!-- PAGES MENU -->
            </nav>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_include/menu_lateral.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  632 => 168,  618 => 167,  612 => 163,  601 => 161,  597 => 160,  593 => 159,  588 => 157,  584 => 156,  576 => 155,  571 => 153,  568 => 152,  562 => 148,  560 => 147,  557 => 146,  555 => 145,  538 => 144,  534 => 142,  520 => 141,  513 => 136,  502 => 134,  498 => 133,  494 => 132,  489 => 130,  485 => 129,  477 => 128,  472 => 126,  469 => 125,  466 => 124,  460 => 120,  458 => 119,  441 => 118,  438 => 117,  424 => 116,  417 => 111,  406 => 109,  402 => 108,  398 => 107,  393 => 105,  389 => 104,  381 => 103,  376 => 101,  373 => 100,  370 => 99,  364 => 95,  362 => 94,  345 => 93,  340 => 90,  326 => 89,  320 => 85,  309 => 83,  305 => 82,  301 => 81,  296 => 79,  292 => 78,  284 => 77,  279 => 75,  276 => 74,  273 => 73,  267 => 69,  265 => 68,  248 => 67,  245 => 66,  231 => 65,  225 => 61,  214 => 59,  210 => 58,  206 => 57,  201 => 55,  197 => 54,  189 => 53,  184 => 51,  181 => 50,  178 => 49,  172 => 45,  170 => 44,  152 => 43,  138 => 42,  132 => 38,  121 => 36,  117 => 35,  113 => 34,  108 => 32,  104 => 31,  96 => 30,  91 => 28,  88 => 27,  82 => 23,  80 => 22,  77 => 21,  75 => 20,  58 => 19,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mdk-drawer js-mdk-drawer\" id=\"default-drawer\">
    <div class=\"mdk-drawer__content\">
        <div class=\"mdk-drawer__inner\" data-simplebar data-simplebar-force-enabled=\"true\">
            <nav class=\"drawer  drawer--dark\">
                <!-- HEADING-->
                <div class=\"py-2 drawer-heading\">
                    Painel principal
                </div>
                <!-- DASHBOARDS MENU-->
                <ul class=\"drawer-menu\" id=\"dasboardMenu\" data-children=\".drawer-submenu\">
                    <li class=\"drawer-menu-item \">
                        <a href=\"/painel\">
                            <i class=\"material-icons\">dashboard</i>
                            <span class=\"drawer-menu-text\"> Meu painel</span>
                        </a>
                    </li>
                </ul>
                <!-- Biblioteca -->
                {% for me in SESSION.MenuDoUsuario|filter(me => (me.menu == \"Biblioteca\") and (me.tarefas|length >= 1)  ) -%}
                    {% if me.tarefas|length >= 1 %}

                        {% if loop.first %}
                            <div class=\"py-2 drawer-heading\" id=\"Bio\">
                                Biblioteca
                            </div>
                        {% endif %}
                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para{{ me.id }}\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para{{ me.id }}\" href=\"#id{{ me.id }}\" data-target=\"#id{{ me.id }}\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">{{ me.icon }}</i>
                                    <span class=\"drawer-menu-text\">{{ me.nome }}</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id{{ me.id }}\">
                                    {% for mtarefa in me.tarefas %}
                                        <li class=\"drawer-menu- \"><a href=\"{{ mtarefa.caminho }}\">{{ mtarefa.nome }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>
                    {% endif %}
                {% endfor %}
                  {% for me in SESSION.MenuDoUsuario|filter(me => (me.menu == \"Instituicao\") and (me.tarefas|length >= 1)  ) -%}
                        {% if loop.first %}
                            <div class=\"py-2 drawer-heading\" id=\"Ist\">
                                Instituição
                            </div>
                        {% endif %}
                        {% if me.tarefas|length >= 1 %}
                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para{{ me.id }}\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
            <a data-toggle=\"collapse\" data-parent=\"#para{{ me.id }}\" href=\"#id{{ me.id }}\" data-target=\"#id{{ me.id }}\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">{{ me.icon }}</i>
                                    <span class=\"drawer-menu-text\">{{ me.nome }}</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id{{ me.id }}\">
                                    {% for mtarefa in me.tarefas %}
                                    <li class=\"drawer-menu- \"><a href=\"{{ mtarefa.caminho }}\">{{ mtarefa.nome }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>
                    {% endif %}
                {% endfor %}

                  {% for me in SESSION.MenuDoUsuario|filter(me => (me.menu == \"Documentos\") and (me.tarefas|length >= 1)  ) -%}
                        {% if loop.first %}
                            <div class=\"py-2 drawer-heading\" id=\"Ist\">
                                Documentos
                            </div>
                        {% endif %}
                        {% if me.tarefas|length >= 1 %}
                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para{{ me.id }}\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
            <a data-toggle=\"collapse\" data-parent=\"#para{{ me.id }}\" href=\"#id{{ me.id }}\" data-target=\"#id{{ me.id }}\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">{{ me.icon }}</i>
                                    <span class=\"drawer-menu-text\">{{ me.nome }}</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id{{ me.id }}\">
                                    {% for mtarefa in me.tarefas %}
                                    <li class=\"drawer-menu- \"><a href=\"{{ mtarefa.caminho }}\">{{ mtarefa.nome }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>
                    {% endif %}
                {% endfor %}

                <!-- COMPONENTS MENU -->
                <!-- Inquerito -->
                {% for me in SESSION.MenuDoUsuario|filter(me => (me.menu == \"Inquerito\") and (me.tarefas|length >= 1)) -%}
                    {% if loop.first %}
                        <div class=\"py-2 drawer-heading\" id=\"Inq\">
                            Inquérito
                        </div>
                    {% endif %}
                    {% if me.tarefas|length >= 1 %}
                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para{{ me.id }}\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para{{ me.id }}\" href=\"#id{{ me.id }}\" data-target=\"#id{{ me.id }}\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">{{ me.icon }}</i>
                                    <span class=\"drawer-menu-text\">{{ me.nome }}</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id{{ me.id }}\">
                                    {% for mtarefa in me.tarefas %}
                                        <li class=\"drawer-menu- \"><a href=\"{{ mtarefa.caminho }}\">{{ mtarefa.nome }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>

                    {% endif %}
                {% endfor %}
                 <!-- Cartoes -->
                {% for me in SESSION.MenuDoUsuario|filter(me => (me.menu == \"Cartoes\") and (me.tarefas|length >= 1)) -%}
                    {% if loop.first %}
                        <div class=\"py-2 drawer-heading\" id=\"Inq\">
                            Cartões de Estudante
                        </div>
                    {% endif %}
                    {% if me.tarefas|length >= 1 %}
                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para{{ me.id }}\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para{{ me.id }}\" href=\"#id{{ me.id }}\" data-target=\"#id{{ me.id }}\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">{{ me.icon }}</i>
                                    <span class=\"drawer-menu-text\">{{ me.nome }}</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id{{ me.id }}\">
                                    {% for mtarefa in me.tarefas %}
                                        <li class=\"drawer-menu- \"><a href=\"{{ mtarefa.caminho }}\">{{ mtarefa.nome }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>

                    {% endif %}
                {% endfor %}
                <!-- PAGES MENU -->

                {% for me in SESSION.MenuDoUsuario|filter(me => (me.menu == \"Sistema\") and (me.tarefas|length >= 1)) -%}
                    {% if me.tarefas|length >= 1 %}

                        {% if loop.first %}
                            <div class=\"py-2 drawer-heading\" id=\"Inq\">
                                Sistema
                            </div>
                        {% endif %}
                        <!-- PAGES MENU -->
                        <ul class=\"drawer-menu \" id=\"para{{ me.id }}\" data-children=\".drawer-submenu\" >
                            <li class=\"drawer-menu-item drawer-submenu\">
                                <a data-toggle=\"collapse\" data-parent=\"#para{{ me.id }}\" href=\"#{{ me.id }}\" data-target=\"#id{{ me.id }}\" aria-controls=\"errorsMenu\" aria-expanded=\"false\" class=\"collapsed px-2\">
                                    <i class=\"material-icons\">{{ me.icon }}</i>
                                    <span class=\"drawer-menu-text\">{{ me.nome }}</span>
                                </a>
                                <ul class=\"collapse px-2\" id=\"id{{ me.id }}\">
                                    {% for mtarefa in me.tarefas %}
                                        <li class=\"drawer-menu- \"><a href=\"{{ mtarefa.caminho }}\">{{ mtarefa.nome }}</a></li>
                                    {% endfor %}
                                </ul>
                            </li>
                        </ul>
                    {% endif %}
                {% endfor %}
                <!-- PAGES MENU -->
            </nav>
        </div>
    </div>
</div>
", "_include/menu_lateral.twig", "C:\\laragon\\www\\psd1\\resources\\views/_include/menu_lateral.twig");
    }
}
