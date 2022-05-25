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

/* C:\laragon\www\psd1\resources\views/Usuario/meu_perfil.twig */
class __TwigTemplate_a8cba84dbc73081734ac12847d4aa01b37d36c898b1286c7223a6393b6da5f94 extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/meu_perfil.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
    <div class=\"py-4 mb-3 bg-white border-bottom\">
        <div class=\"container-fluid container-account\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"media media-user-info align-items-center\">
                        <div class=\"media-body lh-1\">
                            <p class=\"h4 m-0 text-uppercase\">";
        // line 10
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 10), "pessoa", [], "any", false, false, false, 10), "nome", [], "method", false, false, false, 10), "html", null, true);
        echo "</p>
                            <p class=\"text-muted mb-0\">Grupo de Usuários: <b>";
        // line 11
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["SESSION"] ?? null), "usuario", [], "any", false, false, false, 11), "grupo", [], "any", false, false, false, 11), "nome", [], "any", false, false, false, 11), "html", null, true);
        echo "</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"\">
        <ul class=\"nav nav-pills mb-2\" id=\"accountTabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"overview-tab\" data-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\">Informações pessoais</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"settings-tab\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\" aria-controls=\"settings\">Usuário</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"alterarSenha-tab\" data-toggle=\"tab\" href=\"#alterarSenha\" role=\"tab\" aria-controls=\"alterarSenha\">Alterar senha</a>
            </li>
        </ul>
        <div class=\"tab-content\" id=\"accountTabsContent\">
            <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <div class=\"card card-account\">
                            <div class=\"card-body\">
                                <form action=\"/usuario/atualizar_informacoes_pessoais\" method=\"post\"  enctype=\"multipart/form-data\">
                                   ";
        // line 37
        echo csrf_field();
        echo "
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-md-4 \">
                                            <label>Primeiro nome</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input type=\"text\" class=\"form-control\"  value=\"";
        // line 45
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "nome_proprio", [], "any", false, false, false, 45), "html", null, true);
        echo "\" name=\"p_nome\"  placeholder=\"Primeiro nome\">
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4 \">
                                            <label>Sobrenome</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input value=\"";
        // line 54
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "sobrenome", [], "any", false, false, false, 54), "html", null, true);
        echo "\"  type=\"text\" class=\"form-control\" name=\"p_sobrenome\" placeholder=\"Sobrenome\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Pai</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input value=\"";
        // line 63
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "pai", [], "any", false, false, false, 63), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_pai\" placeholder=\"Nome do pai\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Mãe</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input value=\"";
        // line 72
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "mae", [], "any", false, false, false, 72), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_mae\" placeholder=\"Nome da mãe\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Género</label>
                                            <select name=\"p_genero\"  class=\"form-control\">
                                                ";
        // line 78
        if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "genero", [], "any", false, false, false, 78)) {
            // line 79
            echo "                                                    <option selected value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "genero", [], "any", false, false, false, 79), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "genero", [], "method", false, false, false, 79), "html", null, true);
            echo " - Selecionado</option>
                                                ";
        }
        // line 81
        echo "                                                <option value=\"M\">Masculino</option>
                                                <option value=\"F\">Femenino</option>
                                            </select>
                                        </div>
                                         <div class=\"form-group col-md-4\">
                                            <label>Nº do documento</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">credit_card</i>
                                                </div>
                                                <input value=\"";
        // line 91
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "n_do_documento", [], "any", false, false, false, 91), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_n_documento\" placeholder=\"xxxxxxxxxxxxxxxx\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Tipo de documento</label>
                                            <select name=\"p_t_documento\" id=\"\" class=\"form-control\" >
                                                ";
        // line 97
        if (TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "tipo_de_documento", [], "any", false, false, false, 97)) {
            // line 98
            echo "                                                    <option selected value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "tipo_de_documento", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "tipo_de_documento", [], "method", false, false, false, 98), "html", null, true);
            echo " - Selecionado</option>
                                                ";
        }
        // line 100
        echo "                                                <option value=\"BI\">Bilhete de identidade</option>
                                                <option value=\"NIF\">Nº de identificação fiscal</option>
                                                <option value=\"PP\">Passaport</option>
                                                <option value=\"Outros\">Outros</option>
                                            </select>
                                        </div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
                                                <label>Documento</label>

\t\t\t\t\t\t\t\t\t\t\t  <input name=\"documento\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t        \t</div>
                                           <div class=\"form-group col-md-4\">
                                            <label>Data de emissão</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">date_range</i>
                                                </div>
                                                <input value=\"";
        // line 117
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "data_de_emissao", [], "any", false, false, false, 117), "html", null, true);
        echo "\" type=\"date\" class=\"form-control\" name=\"p_data_de_emissao\" placeholder=\"dd/mm/aaaa\" >
                                            </div>
                                        </div>

                                        <div class=\"form-group col-md-4\">
                                            <label>Data de nascimento</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">date_range</i>
                                                </div>
                                                <input value=\"";
        // line 127
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "data_de_nascimento", [], "any", false, false, false, 127), "html", null, true);
        echo "\" type=\"date\" class=\"form-control\" name=\"p_data_de_nascimento\" placeholder=\"dd/mm/aaaa\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Provincia</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">location_city</i>
                                                </div>
                                                <input value=\"";
        // line 136
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "provincia", [], "any", false, false, false, 136), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_provincia\" placeholder=\"Benguela\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Municipio</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">location_city</i>
                                                </div>
                                                <input value=\"";
        // line 145
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "municipio", [], "any", false, false, false, 145), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_municipio\" placeholder=\"Lobito\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Bairro</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">home</i>
                                                </div>
                                                <input value=\"";
        // line 154
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "bairro", [], "any", false, false, false, 154), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_bairro\" placeholder=\"Liro\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Local de nascimento</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">local_hospital</i>
                                                </div>
                                                <input value=\"";
        // line 163
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "local_de_nascimento", [], "any", false, false, false, 163), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_local_de_nascimento\" placeholder=\"Benguela\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Naturalidade</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">flag</i>
                                                </div>
                                                <input value=\"";
        // line 172
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "naturalidade", [], "any", false, false, false, 172), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" name=\"p_naturalidade\" placeholder=\"Angolana\" >
                                            </div>
                                        </div>
                                        \t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t        \t  <select name=\"p_instituicao\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>instituição de ensino..</option>
\t\t\t\t\t\t\t\t\t\t     ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["instituicoes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["instituicao"]) {
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t      <option  value=\"";
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["instituicao"], "id", [], "any", false, false, false, 179), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["pessoa"] ?? null), "estudante", [], "any", false, false, false, 179), "id_instituicao", [], "any", false, false, false, 179), TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["instituicao"], "id", [], "any", false, false, false, 179)))) {
                echo " selected  ";
            }
            echo " >
                                              ";
            // line 180
            echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, $context["instituicao"], "nome", [], "any", false, false, false, 180), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instituicao'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"settings\" role=\"tabpanel\" aria-labelledby=\"settings-tab\">
                <form action=\"/usuario/atualizar_usuario\" method=\"post\" id=\"editarUsuario\">
                   ";
        // line 196
        echo csrf_field();
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-md-6 \">
                                            <label>Usuário</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input  type=\"text\" class=\"form-control\" name=\"u_usuario\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "usuario", [], "any", false, false, false, 208), "html", null, true);
        echo "\" placeholder=\"exemplo.exemplo\">
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-6 \">
                                            <label>Email</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">email</i>
                                                </div>
                                                <input  type=\"email\" class=\"form-control\" name=\"u_email\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "email", [], "any", false, false, false, 217), "html", null, true);
        echo "\" placeholder=\"exemplo@exemplo.com\">
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-6\">
                                            <label>Telefone</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">local_phone</i>
                                                </div>
                                                <input  type=\"tel\" class=\"form-control\" name=\"u_contacto\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, TwigBridge\Node\GetAttrNode::attribute($this->env, $this->source, ($context["usuario"] ?? null), "contacto", [], "any", false, false, false, 226), "html", null, true);
        echo "\" placeholder=\"9xxxxxxxx\">
                                            </div>
                                        </div>
                                    </div>
                                    <button data-toggle=\"modal\" data-target=\"#confirmarSenha\"   type=\"button\" class=\"btn btn-success\"> Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"tab-pane fade\" id=\"alterarSenha\" role=\"tabpanel\" aria-labelledby=\"alterarSenha-tab\">
                <form action=\"/usuario/atualizar_senha\" method=\"post\">
                   ";
        // line 239
        echo csrf_field();
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"col-lg-8 ml-0 pl-0\">
                                        <div class=\"form-group \">
                                            <label>Senha atual</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">vpn_key</i>
                                                </div>
                                                <input  type=\"password\" class=\"form-control\" required name=\"s_atual\"  placeholder=\"Senha atual\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Nova senha</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">vpn_key</i>
                                                </div>
                                                <input  type=\"password\" class=\"form-control\" required name=\"s_nova_senha\" minlength=\"6\"  maxlength=\"8\" placeholder=\"6 Caracteres no minimo ou 8 no maximo\">
                                            </div>
                                        </div>
                                        <div class=\"form-group \">
                                            <label>Confirmar nova senha</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">vpn_key</i>
                                                </div>
                                                <input  type=\"password\" class=\"form-control\" required name=\"s_nova_senha_c\"  minlength=\"6\" maxlength=\"8\" placeholder=\"6 Caracteres no minimo ou 8 no maximo\">
                                            </div>
                                        </div>
                                        <button class=\"btn btn-success \" type=\"submit\">Alterar senha</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

";
    }

    // line 286
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 287
        echo "    <div class=\"modal fade \" id=\"confirmarSenha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalinscrever\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xs\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"defaultModalLabel\">Confirmar senha  </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <label for=\"senhac\">Senha</label>
                    <input id=\"senhaC\" form=\"editarUsuario\" type=\"password\" placeholder=\"senha\" name=\"senhaC\" class=\"form-control\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Fechar</button>
                    <button type=\"submit\" form=\"editarUsuario\" class=\"btn btn-primary\">Salvar</button>
                </div>
            </div>
        </div>
    </div
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Usuario/meu_perfil.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 287,  435 => 286,  384 => 239,  368 => 226,  356 => 217,  344 => 208,  329 => 196,  313 => 182,  305 => 180,  296 => 179,  292 => 178,  283 => 172,  271 => 163,  259 => 154,  247 => 145,  235 => 136,  223 => 127,  210 => 117,  191 => 100,  183 => 98,  181 => 97,  172 => 91,  160 => 81,  152 => 79,  150 => 78,  141 => 72,  129 => 63,  117 => 54,  105 => 45,  94 => 37,  65 => 11,  61 => 10,  52 => 3,  48 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}
{% block conteudo %}

    <div class=\"py-4 mb-3 bg-white border-bottom\">
        <div class=\"container-fluid container-account\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"media media-user-info align-items-center\">
                        <div class=\"media-body lh-1\">
                            <p class=\"h4 m-0 text-uppercase\">{{ SESSION.usuario.pessoa.nome() }}</p>
                            <p class=\"text-muted mb-0\">Grupo de Usuários: <b>{{ SESSION.usuario.grupo.nome }}</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"\">
        <ul class=\"nav nav-pills mb-2\" id=\"accountTabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"overview-tab\" data-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-controls=\"overview\">Informações pessoais</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"settings-tab\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\" aria-controls=\"settings\">Usuário</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"alterarSenha-tab\" data-toggle=\"tab\" href=\"#alterarSenha\" role=\"tab\" aria-controls=\"alterarSenha\">Alterar senha</a>
            </li>
        </ul>
        <div class=\"tab-content\" id=\"accountTabsContent\">
            <div class=\"tab-pane fade show active\" id=\"overview\" role=\"tabpanel\" aria-labelledby=\"overview-tab\">
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                        <div class=\"card card-account\">
                            <div class=\"card-body\">
                                <form action=\"/usuario/atualizar_informacoes_pessoais\" method=\"post\"  enctype=\"multipart/form-data\">
                                   {{ csrf_field() }}
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-md-4 \">
                                            <label>Primeiro nome</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input type=\"text\" class=\"form-control\"  value=\"{{ pessoa.nome_proprio }}\" name=\"p_nome\"  placeholder=\"Primeiro nome\">
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4 \">
                                            <label>Sobrenome</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input value=\"{{ pessoa.sobrenome }}\"  type=\"text\" class=\"form-control\" name=\"p_sobrenome\" placeholder=\"Sobrenome\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Pai</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input value=\"{{ pessoa.pai }}\" type=\"text\" class=\"form-control\" name=\"p_pai\" placeholder=\"Nome do pai\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Mãe</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input value=\"{{ pessoa.mae }}\" type=\"text\" class=\"form-control\" name=\"p_mae\" placeholder=\"Nome da mãe\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Género</label>
                                            <select name=\"p_genero\"  class=\"form-control\">
                                                {% if  pessoa.genero  %}
                                                    <option selected value=\"{{ pessoa.genero }}\">{{ pessoa.genero() }} - Selecionado</option>
                                                {% endif %}
                                                <option value=\"M\">Masculino</option>
                                                <option value=\"F\">Femenino</option>
                                            </select>
                                        </div>
                                         <div class=\"form-group col-md-4\">
                                            <label>Nº do documento</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">credit_card</i>
                                                </div>
                                                <input value=\"{{ pessoa.n_do_documento }}\" type=\"text\" class=\"form-control\" name=\"p_n_documento\" placeholder=\"xxxxxxxxxxxxxxxx\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Tipo de documento</label>
                                            <select name=\"p_t_documento\" id=\"\" class=\"form-control\" >
                                                {% if  pessoa.tipo_de_documento  %}
                                                    <option selected value=\"{{ pessoa.tipo_de_documento }}\">{{ pessoa.tipo_de_documento() }} - Selecionado</option>
                                                {% endif %}
                                                <option value=\"BI\">Bilhete de identidade</option>
                                                <option value=\"NIF\">Nº de identificação fiscal</option>
                                                <option value=\"PP\">Passaport</option>
                                                <option value=\"Outros\">Outros</option>
                                            </select>
                                        </div>
\t\t\t\t\t\t\t\t        \t<div class=\"form-group col-md-4\">
                                                <label>Documento</label>

\t\t\t\t\t\t\t\t\t\t\t  <input name=\"documento\" required=\"\" class=\"form-control\" type=\"file\" id=\"formFile\">
\t\t\t\t\t\t\t\t        \t</div>
                                           <div class=\"form-group col-md-4\">
                                            <label>Data de emissão</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">date_range</i>
                                                </div>
                                                <input value=\"{{ pessoa.data_de_emissao }}\" type=\"date\" class=\"form-control\" name=\"p_data_de_emissao\" placeholder=\"dd/mm/aaaa\" >
                                            </div>
                                        </div>

                                        <div class=\"form-group col-md-4\">
                                            <label>Data de nascimento</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">date_range</i>
                                                </div>
                                                <input value=\"{{ pessoa.data_de_nascimento }}\" type=\"date\" class=\"form-control\" name=\"p_data_de_nascimento\" placeholder=\"dd/mm/aaaa\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Provincia</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">location_city</i>
                                                </div>
                                                <input value=\"{{ pessoa.provincia }}\" type=\"text\" class=\"form-control\" name=\"p_provincia\" placeholder=\"Benguela\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Municipio</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">location_city</i>
                                                </div>
                                                <input value=\"{{ pessoa.municipio }}\" type=\"text\" class=\"form-control\" name=\"p_municipio\" placeholder=\"Lobito\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Bairro</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">home</i>
                                                </div>
                                                <input value=\"{{ pessoa.bairro }}\" type=\"text\" class=\"form-control\" name=\"p_bairro\" placeholder=\"Liro\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Local de nascimento</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">local_hospital</i>
                                                </div>
                                                <input value=\"{{ pessoa.local_de_nascimento }}\" type=\"text\" class=\"form-control\" name=\"p_local_de_nascimento\" placeholder=\"Benguela\" >
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-4\">
                                            <label>Naturalidade</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">flag</i>
                                                </div>
                                                <input value=\"{{ pessoa.naturalidade }}\" type=\"text\" class=\"form-control\" name=\"p_naturalidade\" placeholder=\"Angolana\" >
                                            </div>
                                        </div>
                                        \t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t        \t  <select name=\"p_instituicao\" class=\"form-control\" required=\"\">
\t\t\t\t\t\t\t\t\t\t      <option>instituição de ensino..</option>
\t\t\t\t\t\t\t\t\t\t     {% for instituicao in instituicoes %}
\t\t\t\t\t\t\t\t\t\t      <option  value=\"{{ instituicao.id }}\" {% if pessoa.estudante.id_instituicao == instituicao.id %} selected  {% endif %} >
                                              {{ instituicao.nome}}</option>
\t\t\t\t\t\t\t\t\t\t      {% endfor %}
\t\t\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t        \t</div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success\">Salvar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"settings\" role=\"tabpanel\" aria-labelledby=\"settings-tab\">
                <form action=\"/usuario/atualizar_usuario\" method=\"post\" id=\"editarUsuario\">
                   {{ csrf_field() }}
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-md-6 \">
                                            <label>Usuário</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">person</i>
                                                </div>
                                                <input  type=\"text\" class=\"form-control\" name=\"u_usuario\" value=\"{{ usuario.usuario }}\" placeholder=\"exemplo.exemplo\">
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-6 \">
                                            <label>Email</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">email</i>
                                                </div>
                                                <input  type=\"email\" class=\"form-control\" name=\"u_email\" value=\"{{ usuario.email }}\" placeholder=\"exemplo@exemplo.com\">
                                            </div>
                                        </div>
                                        <div class=\"form-group col-md-6\">
                                            <label>Telefone</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">local_phone</i>
                                                </div>
                                                <input  type=\"tel\" class=\"form-control\" name=\"u_contacto\" value=\"{{ usuario.contacto }}\" placeholder=\"9xxxxxxxx\">
                                            </div>
                                        </div>
                                    </div>
                                    <button data-toggle=\"modal\" data-target=\"#confirmarSenha\"   type=\"button\" class=\"btn btn-success\"> Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"tab-pane fade\" id=\"alterarSenha\" role=\"tabpanel\" aria-labelledby=\"alterarSenha-tab\">
                <form action=\"/usuario/atualizar_senha\" method=\"post\">
                   {{ csrf_field() }}
                    <div class=\"row\">
                        <div class=\"col-lg-9\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"col-lg-8 ml-0 pl-0\">
                                        <div class=\"form-group \">
                                            <label>Senha atual</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">vpn_key</i>
                                                </div>
                                                <input  type=\"password\" class=\"form-control\" required name=\"s_atual\"  placeholder=\"Senha atual\">
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Nova senha</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">vpn_key</i>
                                                </div>
                                                <input  type=\"password\" class=\"form-control\" required name=\"s_nova_senha\" minlength=\"6\"  maxlength=\"8\" placeholder=\"6 Caracteres no minimo ou 8 no maximo\">
                                            </div>
                                        </div>
                                        <div class=\"form-group \">
                                            <label>Confirmar nova senha</label>
                                            <div class=\"input-group input-group--inline\">
                                                <div class=\"input-group-addon\">
                                                    <i class=\"material-icons\">vpn_key</i>
                                                </div>
                                                <input  type=\"password\" class=\"form-control\" required name=\"s_nova_senha_c\"  minlength=\"6\" maxlength=\"8\" placeholder=\"6 Caracteres no minimo ou 8 no maximo\">
                                            </div>
                                        </div>
                                        <button class=\"btn btn-success \" type=\"submit\">Alterar senha</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

{% endblock %}
{% block modal %}
    <div class=\"modal fade \" id=\"confirmarSenha\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalinscrever\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xs\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"defaultModalLabel\">Confirmar senha  </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <label for=\"senhac\">Senha</label>
                    <input id=\"senhaC\" form=\"editarUsuario\" type=\"password\" placeholder=\"senha\" name=\"senhaC\" class=\"form-control\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-white\" data-dismiss=\"modal\">Fechar</button>
                    <button type=\"submit\" form=\"editarUsuario\" class=\"btn btn-primary\">Salvar</button>
                </div>
            </div>
        </div>
    </div
{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/meu_perfil.twig", "C:\\laragon\\www\\psd1\\resources\\views/Usuario/meu_perfil.twig");
    }
}
