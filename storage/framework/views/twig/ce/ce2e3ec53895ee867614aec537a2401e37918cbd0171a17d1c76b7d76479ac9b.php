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

/* C:\laragon\www\psd1\resources\views/Pesquisador/criar_pesquisador.twig */
class __TwigTemplate_815f966cbb30c1f57ac3b3084df86d0f70981a8a58b32331d1ee8c45513f8aca extends Template
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
        $this->parent = $this->loadTemplate("@include/main_painel.twig", "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/criar_pesquisador.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_conteudo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"text-center\">Criar Pesquisador</h3>
        </div>
        <div class=\"card-body\">
            <form action=\"/pesquisador/salvar_pesquisador\" method=\"POST\" enctype=\"multipart/form-data\">
             ";
        // line 10
        echo csrf_field();
        echo "
                <h3>Usuário</h3>
                <hr>
                <div class=\"form-row\">
                    <div class=\"form-group col-md-4 \">
                        <label>Email</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"email\" class=\"form-control\" name=\"u_email\" placeholder=\"exemplo@exemplo.com\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Telefone</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">local_phone</i>
                            </div>
                            <input type=\"tel\" class=\"form-control\" name=\"u_contacto\" placeholder=\"9xxxxxxxx\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Senha</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">vpn_key</i>
                            </div>
                            <input type=\"password\" class=\"form-control\" name=\"u_senha\" placeholder=\"Minimo 6 caracteres\" required>
                        </div>
                    </div>

                </div>
                <h3>Informações pessoais</h3>
                <hr>
                <div class=\"form-row\">
                    <div class=\"form-group col-md-4 \">
                        <label>Imagem</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">image</i>
                            </div>
                            <input type=\"file\"  class=\"form-control form-control-file\" name=\"p_logo\" placeholder=\"Primeiro nome\" >
                        </div>
                    </div>
                    <div class=\"form-group col-md-4 \">
                        <label>Primeiro nome</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_nome\" placeholder=\"Primeiro nome\" required>
                        </div>
                    </div>
                    <div class=\"form-group col-md-4 \">
                        <label>Sobrenome</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_sobrenome\" placeholder=\"Sobrenome\" required>
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Pai</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_pai\" placeholder=\"Nome do pai\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Mãe</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_mae\" placeholder=\"Nome da mãe\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Nº do documento</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">credit_card</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_n_documento\" placeholder=\"xxxxxxxxxxxxxxxx\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Tipo de documento</label>
                        <select name=\"p_t_documento\" id=\"\" class=\"form-control\">
                            <option value=\"bi\">Bilhete de identidade</option>
                            <option value=\"pt\">Passaporte</option>
                            <option value=\"outros\">Outros</option>
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Género</label>
                        <select name=\"p_genero\" class=\"form-control\">
                            <option value=\"M\">Masculino</option>
                            <option value=\"F\">Feminino</option>
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Data de nascimento</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">date_range</i>
                            </div>
                            <input type=\"date\" class=\"form-control\" name=\"p_data_de_nascimento\" placeholder=\"dd/mm/aaaa\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Provincia</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">location_city</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_provincia\" placeholder=\"Benguela\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Municipio</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">location_city</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_municipio\" placeholder=\"Lobito\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Bairro</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">home</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_bairro\" placeholder=\"Liro\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Local de nascimento</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">local_hospital</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_local_de_nascimento\" placeholder=\"Benguela\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Naturalidade</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">flag</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_naturalidade\" placeholder=\"Angolana\">
                        </div>
                    </div>
                </div>
                <button class=\"btn btn-success\">Salvar </button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/criar_pesquisador.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  51 => 4,  47 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@include/main_painel.twig\" %}

{% block conteudo %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"text-center\">Criar Pesquisador</h3>
        </div>
        <div class=\"card-body\">
            <form action=\"/pesquisador/salvar_pesquisador\" method=\"POST\" enctype=\"multipart/form-data\">
             {{ csrf_field() }}
                <h3>Usuário</h3>
                <hr>
                <div class=\"form-row\">
                    <div class=\"form-group col-md-4 \">
                        <label>Email</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"email\" class=\"form-control\" name=\"u_email\" placeholder=\"exemplo@exemplo.com\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Telefone</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">local_phone</i>
                            </div>
                            <input type=\"tel\" class=\"form-control\" name=\"u_contacto\" placeholder=\"9xxxxxxxx\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Senha</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">vpn_key</i>
                            </div>
                            <input type=\"password\" class=\"form-control\" name=\"u_senha\" placeholder=\"Minimo 6 caracteres\" required>
                        </div>
                    </div>

                </div>
                <h3>Informações pessoais</h3>
                <hr>
                <div class=\"form-row\">
                    <div class=\"form-group col-md-4 \">
                        <label>Imagem</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">image</i>
                            </div>
                            <input type=\"file\"  class=\"form-control form-control-file\" name=\"p_logo\" placeholder=\"Primeiro nome\" >
                        </div>
                    </div>
                    <div class=\"form-group col-md-4 \">
                        <label>Primeiro nome</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_nome\" placeholder=\"Primeiro nome\" required>
                        </div>
                    </div>
                    <div class=\"form-group col-md-4 \">
                        <label>Sobrenome</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_sobrenome\" placeholder=\"Sobrenome\" required>
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Pai</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_pai\" placeholder=\"Nome do pai\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Mãe</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">person</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_mae\" placeholder=\"Nome da mãe\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Nº do documento</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">credit_card</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_n_documento\" placeholder=\"xxxxxxxxxxxxxxxx\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Tipo de documento</label>
                        <select name=\"p_t_documento\" id=\"\" class=\"form-control\">
                            <option value=\"bi\">Bilhete de identidade</option>
                            <option value=\"pt\">Passaporte</option>
                            <option value=\"outros\">Outros</option>
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Género</label>
                        <select name=\"p_genero\" class=\"form-control\">
                            <option value=\"M\">Masculino</option>
                            <option value=\"F\">Feminino</option>
                        </select>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Data de nascimento</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">date_range</i>
                            </div>
                            <input type=\"date\" class=\"form-control\" name=\"p_data_de_nascimento\" placeholder=\"dd/mm/aaaa\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Provincia</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">location_city</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_provincia\" placeholder=\"Benguela\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Municipio</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">location_city</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_municipio\" placeholder=\"Lobito\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Bairro</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">home</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_bairro\" placeholder=\"Liro\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Local de nascimento</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">local_hospital</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_local_de_nascimento\" placeholder=\"Benguela\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-4\">
                        <label>Naturalidade</label>
                        <div class=\"input-group input-group--inline\">
                            <div class=\"input-group-addon\">
                                <i class=\"material-icons\">flag</i>
                            </div>
                            <input type=\"text\" class=\"form-control\" name=\"p_naturalidade\" placeholder=\"Angolana\">
                        </div>
                    </div>
                </div>
                <button class=\"btn btn-success\">Salvar </button>
            </form>
        </div>
    </div>
{% endblock %}
", "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/criar_pesquisador.twig", "C:\\laragon\\www\\psd1\\resources\\views/Pesquisador/criar_pesquisador.twig");
    }
}
