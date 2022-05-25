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

/* C:\laragon\www\psd1\resources\views/Site/home.twig */
class __TwigTemplate_d0570c33f3d0862359aaae42dc3a126598bdd4f429fa29d1d63ce5272190ae46 extends Template
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
        $this->loadTemplate("./Site/includes/menu.twig", "C:\\laragon\\www\\psd1\\resources\\views/Site/home.twig", 1)->display($context);
        // line 2
        echo "\t\t\t<section id=\"home\" class=\"hero-section dtr-py-8 hero-default-bg bg-blue\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6 dtr-sm-mb-30px color-white\">
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h1 class=\"dtr-mb-4 wow fadeInUp\" data-wow-delay=\"0.4s\">O que é o PSD? </h1>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p class=\"dtr-mb-4 text-size-md color-white-muted\">
\t\t\t\t\t\t\tPsd é uma plataforma de pesquisa dirigida exclusivamente para os estudantes, visando facilitar a vida académica em Angola em todos o moldes desde as aulas até às pesquisas de fim de curso.
\t\t\t\t\t\t\t\tBuscando soluções eficientes para os problemas mais prementes da comunidade académica nacional.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- list starts -->
\t\t\t\t\t\t\t<ul class=\"dtr-list-checkmark dtr-mb-5 text-size-md color-white-muted\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h6> Biblioteca virtual</h6>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h6>Gestão de inquéritos</h6>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h6>TPC - Intercâmbio Escolar </h6>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- list ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<div class=\"dtr-hero-form\">
\t\t\t\t\t\t\t\t<!-- form header starts -->
\t\t\t\t\t\t\t\t<div class=\"dtr-form-head\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-center\">Emissão de Documentos</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- form body starts -->
\t\t\t\t\t\t\t\t<div class=\"dtr-form-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-center dtr-mb-2 text-size-sm\">Faça a emissão de documentos aqui. Mas para o seu devido processo deverá ter os seguintes requesitos:</p>

\t\t\t\t\t\t\t\t\t<p><i class=\"fa icon-circle\" style=\"font-size: 10px;\"></i> Ter as propinas/comparticipações todas elas regularizadas.</p>
\t\t\t\t\t\t\t\t\t<p><i class=\"fa icon-circle\" style=\"font-size: 10px;\"></i> Poderá fazer a emissão de Certificado, em escolas que temos convénio.</p>

\t\t\t\t\t\t\t\t\t<p><i class=\"fa icon-circle\" style=\"font-size: 10px;\"></i> Cadastrar-se e iniciar seccão.</p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" ><a href=\"/painel\" style=\"color:white\">emitir certificado</a></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" ><a href=\"/painel\" style=\"color:white\">emitir declaração</a></button>


\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- hero section starts
\t\t\t================================================== -->

\t\t\t<!-- quickfeature section starts
\t\t\t================================================== -->
\t\t\t<section id=\"quickfeatures\" class=\"dtr-py-6\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-4 dtr-sm-mb-30px wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t<i class=\"fa icon-crosshairs\" style=\"font-size: 4rem\"></i>
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h5 class=\"mb-3\"> Inovação </h5>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p>Conteúdos inovadores, e credíveis para manter os estudantes mais proximo com a instituição</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-4 dtr-sm-mb-30px wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t<i class=\"fa icon-hashtag\" style=\"font-size:4rem;\"></i>
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h5 class=\"mb-3\"> Futuro</h5>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p>Garantimos transparencia das informações para que não haja problemas futuros.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t<!-- column 3 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t<i class=\"fa icon-check-circle\" style=\"font-size:4rem;color: #d6e216;\"></i>
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Seguro</h5>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p>O sistema foi feito com todas as seguranças possíveis garantir a sua segurança virtual</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 3 ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- quickfeature section ends
\t\t\t================================================== -->

\t\t\t<!-- sticky tabs starts
\t\t\t================================================== -->
\t\t\t<section id=\"products\" class=\"dtr-sticky-tabs-wrapper dtr-border-top\">
\t\t\t\t<!-- tabs nav start -->
\t\t\t\t<div class=\"dtr-sticky-tabs-nav\">
\t\t\t\t\t<nav class=\"dtr-scrollspy-tabs\">
\t\t\t\t\t\t<ul class=\"dtr-scrollspy nav justify-content-center dtr-sticky-tabs\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#tab1\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 107
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/icon-heart-tab.png"]);
        echo "\" alt=\"tab1\">Biblioteca virtual</a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#tab2\"><img src=\"";
        // line 108
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/icon-plane-tab.png"]);
        echo "\" alt=\"tab2\">Gestão de inquéritos</a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#tab3\"><i class=\"fa icon-person-booth\"></i> TPC - Intercâmbio Escolar</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<!-- tabs nav ends -->
\t\t\t\t<div data-target=\".dtr-scrollspy-tabs\">
\t\t\t\t\t<!-- tab 1 starts -->
\t\t\t\t\t<section id=\"tab1\" class=\"dtr-sticky-tabs-section\">
\t\t\t\t\t\t<div class=\"dtr-sticky-tabs-content\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-7 dtr-sm-mb-30px wow fadeInLeft\" data-wow-delay=\"0.4s\"> <img src=\"";
        // line 121
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/img-healthins.png"]);
        echo "\" alt=\"logo\"> </div>
\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-5 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t<!-- Icon Image -->
\t\t\t\t\t\t\t\t\t\t<i class=\"fa icon-book-reader\" style=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-4\">Biblioteca virtual</h2>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">Para criar um espaço comum de aprendizagem vibrante e dinâmico, onde os alunos podem inquirir, descobrir, ler, ver, ouvir, colaborar, criar e apresentar em um ambiente de aprendizagem focado no futuro.</p>
\t\t\t\t\t\t\t\t\t\t<!-- button here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"#\">Experimentar<span><i class=\"icon-arrow-right\" aria-hidden=\"true\"></i></span> </a> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- tab 1 ends -->
\t\t\t\t\t<!-- tab 2 starts -->
\t\t\t\t\t<section id=\"tab2\" class=\"dtr-sticky-tabs-section\">
\t\t\t\t\t\t<div class=\"dtr-sticky-tabs-content\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-5 dtr-sm-mb-30px wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t<!-- Icon Image -->
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 148
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/icon-plane.png"]);
        echo "\" alt=\"logo\" class=\"dtr-mb-4\">
\t\t\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-4\">Gestão de inquéritos</h2>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">A solução de Criação e Gestão de Inquéritos da PSD permite construir, distribuir e analisar inquéritos online, apostando numa forte componente de usabilidade, facilidade de utilização, de tratamento de dados e emissão de relatórios. </p>
\t\t\t\t\t\t\t\t\t\t<!-- button here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"#\">Experimentar<span><i class=\"icon-arrow-right\" aria-hidden=\"true\"></i></span> </a> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-7 text-right wow fadeInLeft\" data-wow-delay=\"0.4s\"> <img src=\"";
        // line 158
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/img-travelins.png"]);
        echo "\" alt=\"logo\"> </div>
\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- tab 2 ends -->
\t\t\t\t\t<!-- tab 3 starts -->
\t\t\t\t\t<section id=\"tab3\" class=\"dtr-sticky-tabs-section\">
\t\t\t\t\t\t<div class=\"dtr-sticky-tabs-content\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-7 dtr-sm-mb-30px wow fadeInLeft\" data-wow-delay=\"0.4s\"> <img src=\"";
        // line 171
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/img-petins.png"]);
        echo "\" alt=\"logo\"> </div>
\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-5 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t<!-- Icon Image -->
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 176
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/icon-pet.png"]);
        echo "\" alt=\"logo\" class=\"dtr-mb-4\">
\t\t\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-4\">TPC - Intercâmbio Escolar</h2>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">
\t\t\t\t\t\t\t\t\t\t\tFerramenta  de  intercâmbio  dos  vários  estudantes  de    várias universidades  nacional  e  internacional,  construído  no  formato  e-lerning,  esta  permite que  o  estudante partilhe  a  sua  experiência,  dúvidas  sugestões,  cultura,etc.  com  a comunidade  académica  nacional  e  internacional.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<!-- button here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"#\">Experimentar<span><i class=\"icon-arrow-right\" aria-hidden=\"true\"></i></span> </a> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- tab 3 ends -->
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- sticky tabs starts
\t\t\t================================================== -->

\t\t\t<!-- about starts
\t\t\t================================================== -->
\t\t\t<section id=\"about\" class=\"bg-light-blue dtr-py-7\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<!-- text here -->
\t\t\t\t\t\t\t<p class=\"text-size-xl dtr-mb-4\">Vamos ajudar sua instituição a melhorar a qualidade de ensino</p>
\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">
\t\t\t\t\t\t\tO PSD facilitará os trabalhos de fim de curso, possibilitando a frequência dos mesmos; <br>
\t\t\t\t\t\t\tIncentivar a leitura; <br>
\t\t\t\t\t\t\tAproximar os estudantes de outras realidades académicas;<br>
\t\t\t\t\t\t\tBuscar a excelência nos trabalhos científicos</p>

\t\t\t\t\t\t </div>
\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<p class=\"text-size-xl dtr-mb-4\">Perguntas frequentes</p>
\t\t\t\t\t\t\t<!-- accordion starts -->
\t\t\t\t\t\t\t<div class=\"dtr-accordion accordion\" id=\"home-accordion\">
\t\t\t\t\t\t\t\t<!-- accordion tab 1 starts -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-0\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\"> Quem somos? </button>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#home-accordion\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">Somos uma plataforma de pesquisa dirigida exclusivamente para os estudantes, visando facilitar a vida académica em Angola em todos o moldes desde as aulas às pesquisas de fim de curso. </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- accordion tab 1 ends -->
\t\t\t\t\t\t\t\t<!-- accordion tab 2 starts -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-0\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\"> Objetivo da plataforma ?</button>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#home-accordion\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\tAjudar a reduzir custos com trabalhos científicos, monografias e outros<br>
\t\t\t\t\t\t\t\t\t\t\tEconomizar tempo no tratamento de dados;<br>
\t\t\t\t\t\t\t\t\t\t\tIncentivar a investigação científica, para dar resposta aos problemas da comunidade;<br>
\t\t\t\t\t\t\t\t\t\t\tAumentar o nível de qualidade dos trabalhos científicos realizados nas universidades, evitando viés ou mentiras nos dados fornecidos pelos estudantes meramente para se livrar dos trabalhos.<br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- accordion tab 2 ends -->
\t\t\t\t\t\t\t\t<!-- accordion tab 3 starts -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingThree\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-0\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\"> No que acreditamos?</button>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#home-accordion\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\tReduzir  risco ambiental usando menos papel, preservando o meio ambiente; <br>
\t\t\t\t\t\t\t\t\t\t\tCom o uso da pesquisa psd consequentemente usar-se-á menos papel, menos papel significa menos abate de árvores; <br>
\t\t\t\t\t\t\t\t\t\t\tMelhorar a qualidade de vida das comunidades onde os estudantes estão inseridos; <br>
\t\t\t\t\t\t\t\t\t\t\tBuscar maior afirmação dos trabalhos académicos angolano na Internet. <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- accordion tab 3 ends -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- accordion ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- about ends
\t\t\t================================================== -->

\t\t\t<section id=\"reviews\" class=\"dtr-py-7 bg-grey\">


\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<!-- cta section starts
\t\t\t\t\t\t\t================================================== -->
\t\t\t\t\t\t\t<section id=\"cta\" class=\"dtr-pt-7 dtr-pb-5 dtr-sm-mb-30px bg-dark-blue color-white\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Em caso de <span class=\"color-blue\">dúvidas</span></h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-5  wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t\t<p>Não hesite em nos contactar estamos sempre abertos ao diálogo e opiniões.</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-size-xl dtr-mb-4\">Juntos podemos mais.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t\t\t<!-- column 3 starts -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4  wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"mailto:pesquisapsd2020@gmail.com\">Contacte-nos<span><i class=\"icon-envelope\" aria-hidden=\"true\"></i></span> </a> </div><br>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tel:+244 927 208 899\"><i class=\"icon-phone\"></i> +244 927 208 899</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"mailto:pesquisapsd2020@gmail.com\"><i class=\"icon-envelope\"></i> pesquisapsd2020@gmail.com</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- column 3 ends -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section id=\"reviews\" class=\"dtr-py-7 bg-grey\">


\t\t\t\t\t\t\t</section>
";
        // line 314
        $this->loadTemplate("./Site/includes/rodape.twig", "C:\\laragon\\www\\psd1\\resources\\views/Site/home.twig", 314)->display($context);
        // line 315
        echo "

";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\psd1\\resources\\views/Site/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 315,  375 => 314,  234 => 176,  226 => 171,  210 => 158,  197 => 148,  167 => 121,  151 => 108,  147 => 107,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include './Site/includes/menu.twig' %}
\t\t\t<section id=\"home\" class=\"hero-section dtr-py-8 hero-default-bg bg-blue\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6 dtr-sm-mb-30px color-white\">
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h1 class=\"dtr-mb-4 wow fadeInUp\" data-wow-delay=\"0.4s\">O que é o PSD? </h1>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p class=\"dtr-mb-4 text-size-md color-white-muted\">
\t\t\t\t\t\t\tPsd é uma plataforma de pesquisa dirigida exclusivamente para os estudantes, visando facilitar a vida académica em Angola em todos o moldes desde as aulas até às pesquisas de fim de curso.
\t\t\t\t\t\t\t\tBuscando soluções eficientes para os problemas mais prementes da comunidade académica nacional.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<!-- list starts -->
\t\t\t\t\t\t\t<ul class=\"dtr-list-checkmark dtr-mb-5 text-size-md color-white-muted\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h6> Biblioteca virtual</h6>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h6>Gestão de inquéritos</h6>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h6>TPC - Intercâmbio Escolar </h6>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<!-- list ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<div class=\"dtr-hero-form\">
\t\t\t\t\t\t\t\t<!-- form header starts -->
\t\t\t\t\t\t\t\t<div class=\"dtr-form-head\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-center\">Emissão de Documentos</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- form body starts -->
\t\t\t\t\t\t\t\t<div class=\"dtr-form-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-center dtr-mb-2 text-size-sm\">Faça a emissão de documentos aqui. Mas para o seu devido processo deverá ter os seguintes requesitos:</p>

\t\t\t\t\t\t\t\t\t<p><i class=\"fa icon-circle\" style=\"font-size: 10px;\"></i> Ter as propinas/comparticipações todas elas regularizadas.</p>
\t\t\t\t\t\t\t\t\t<p><i class=\"fa icon-circle\" style=\"font-size: 10px;\"></i> Poderá fazer a emissão de Certificado, em escolas que temos convénio.</p>

\t\t\t\t\t\t\t\t\t<p><i class=\"fa icon-circle\" style=\"font-size: 10px;\"></i> Cadastrar-se e iniciar seccão.</p>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" ><a href=\"/painel\" style=\"color:white\">emitir certificado</a></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" ><a href=\"/painel\" style=\"color:white\">emitir declaração</a></button>


\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- hero section starts
\t\t\t================================================== -->

\t\t\t<!-- quickfeature section starts
\t\t\t================================================== -->
\t\t\t<section id=\"quickfeatures\" class=\"dtr-py-6\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-4 dtr-sm-mb-30px wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t<i class=\"fa icon-crosshairs\" style=\"font-size: 4rem\"></i>
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h5 class=\"mb-3\"> Inovação </h5>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p>Conteúdos inovadores, e credíveis para manter os estudantes mais proximo com a instituição</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-4 dtr-sm-mb-30px wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t<i class=\"fa icon-hashtag\" style=\"font-size:4rem;\"></i>
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h5 class=\"mb-3\"> Futuro</h5>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p>Garantimos transparencia das informações para que não haja problemas futuros.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t<!-- column 3 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-4 wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<!-- Icon -->
\t\t\t\t\t\t\t<i class=\"fa icon-check-circle\" style=\"font-size:4rem;color: #d6e216;\"></i>
\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t<h5 class=\"mb-3\">Seguro</h5>
\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t<p>O sistema foi feito com todas as seguranças possíveis garantir a sua segurança virtual</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 3 ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- quickfeature section ends
\t\t\t================================================== -->

\t\t\t<!-- sticky tabs starts
\t\t\t================================================== -->
\t\t\t<section id=\"products\" class=\"dtr-sticky-tabs-wrapper dtr-border-top\">
\t\t\t\t<!-- tabs nav start -->
\t\t\t\t<div class=\"dtr-sticky-tabs-nav\">
\t\t\t\t\t<nav class=\"dtr-scrollspy-tabs\">
\t\t\t\t\t\t<ul class=\"dtr-scrollspy nav justify-content-center dtr-sticky-tabs\">
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#tab1\">
\t\t\t\t\t\t\t\t<img src=\"{{asset('site/images/icon-heart-tab.png')}}\" alt=\"tab1\">Biblioteca virtual</a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#tab2\"><img src=\"{{asset('site/images/icon-plane-tab.png')}}\" alt=\"tab2\">Gestão de inquéritos</a> </li>
\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" href=\"#tab3\"><i class=\"fa icon-person-booth\"></i> TPC - Intercâmbio Escolar</a> </li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<!-- tabs nav ends -->
\t\t\t\t<div data-target=\".dtr-scrollspy-tabs\">
\t\t\t\t\t<!-- tab 1 starts -->
\t\t\t\t\t<section id=\"tab1\" class=\"dtr-sticky-tabs-section\">
\t\t\t\t\t\t<div class=\"dtr-sticky-tabs-content\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-7 dtr-sm-mb-30px wow fadeInLeft\" data-wow-delay=\"0.4s\"> <img src=\"{{asset('site/images/img-healthins.png')}}\" alt=\"logo\"> </div>
\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-5 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t<!-- Icon Image -->
\t\t\t\t\t\t\t\t\t\t<i class=\"fa icon-book-reader\" style=\"\"></i>
\t\t\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-4\">Biblioteca virtual</h2>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">Para criar um espaço comum de aprendizagem vibrante e dinâmico, onde os alunos podem inquirir, descobrir, ler, ver, ouvir, colaborar, criar e apresentar em um ambiente de aprendizagem focado no futuro.</p>
\t\t\t\t\t\t\t\t\t\t<!-- button here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"#\">Experimentar<span><i class=\"icon-arrow-right\" aria-hidden=\"true\"></i></span> </a> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- tab 1 ends -->
\t\t\t\t\t<!-- tab 2 starts -->
\t\t\t\t\t<section id=\"tab2\" class=\"dtr-sticky-tabs-section\">
\t\t\t\t\t\t<div class=\"dtr-sticky-tabs-content\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-5 dtr-sm-mb-30px wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t<!-- Icon Image -->
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('site/images/icon-plane.png')}}\" alt=\"logo\" class=\"dtr-mb-4\">
\t\t\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-4\">Gestão de inquéritos</h2>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">A solução de Criação e Gestão de Inquéritos da PSD permite construir, distribuir e analisar inquéritos online, apostando numa forte componente de usabilidade, facilidade de utilização, de tratamento de dados e emissão de relatórios. </p>
\t\t\t\t\t\t\t\t\t\t<!-- button here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"#\">Experimentar<span><i class=\"icon-arrow-right\" aria-hidden=\"true\"></i></span> </a> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-7 text-right wow fadeInLeft\" data-wow-delay=\"0.4s\"> <img src=\"{{asset('site/images/img-travelins.png')}}\" alt=\"logo\"> </div>
\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- tab 2 ends -->
\t\t\t\t\t<!-- tab 3 starts -->
\t\t\t\t\t<section id=\"tab3\" class=\"dtr-sticky-tabs-section\">
\t\t\t\t\t\t<div class=\"dtr-sticky-tabs-content\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-7 dtr-sm-mb-30px wow fadeInLeft\" data-wow-delay=\"0.4s\"> <img src=\"{{asset('site/images/img-petins.png')}}\" alt=\"logo\"> </div>
\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-md-5 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t<!-- Icon Image -->
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('site/images/icon-pet.png')}}\" alt=\"logo\" class=\"dtr-mb-4\">
\t\t\t\t\t\t\t\t\t\t<!-- Heading -->
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-4\">TPC - Intercâmbio Escolar</h2>
\t\t\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">
\t\t\t\t\t\t\t\t\t\t\tFerramenta  de  intercâmbio  dos  vários  estudantes  de    várias universidades  nacional  e  internacional,  construído  no  formato  e-lerning,  esta  permite que  o  estudante partilhe  a  sua  experiência,  dúvidas  sugestões,  cultura,etc.  com  a comunidade  académica  nacional  e  internacional.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<!-- button here -->
\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"#\">Experimentar<span><i class=\"icon-arrow-right\" aria-hidden=\"true\"></i></span> </a> </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<!-- tab 3 ends -->
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- sticky tabs starts
\t\t\t================================================== -->

\t\t\t<!-- about starts
\t\t\t================================================== -->
\t\t\t<section id=\"about\" class=\"bg-light-blue dtr-py-7\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<!-- text here -->
\t\t\t\t\t\t\t<p class=\"text-size-xl dtr-mb-4\">Vamos ajudar sua instituição a melhorar a qualidade de ensino</p>
\t\t\t\t\t\t\t<p class=\"dtr-mb-5\">
\t\t\t\t\t\t\tO PSD facilitará os trabalhos de fim de curso, possibilitando a frequência dos mesmos; <br>
\t\t\t\t\t\t\tIncentivar a leitura; <br>
\t\t\t\t\t\t\tAproximar os estudantes de outras realidades académicas;<br>
\t\t\t\t\t\t\tBuscar a excelência nos trabalhos científicos</p>

\t\t\t\t\t\t </div>
\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t<div class=\"col-12 col-md-6 wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t<p class=\"text-size-xl dtr-mb-4\">Perguntas frequentes</p>
\t\t\t\t\t\t\t<!-- accordion starts -->
\t\t\t\t\t\t\t<div class=\"dtr-accordion accordion\" id=\"home-accordion\">
\t\t\t\t\t\t\t\t<!-- accordion tab 1 starts -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingOne\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-0\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\"> Quem somos? </button>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#home-accordion\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">Somos uma plataforma de pesquisa dirigida exclusivamente para os estudantes, visando facilitar a vida académica em Angola em todos o moldes desde as aulas às pesquisas de fim de curso. </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- accordion tab 1 ends -->
\t\t\t\t\t\t\t\t<!-- accordion tab 2 starts -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-0\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\"> Objetivo da plataforma ?</button>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#home-accordion\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\tAjudar a reduzir custos com trabalhos científicos, monografias e outros<br>
\t\t\t\t\t\t\t\t\t\t\tEconomizar tempo no tratamento de dados;<br>
\t\t\t\t\t\t\t\t\t\t\tIncentivar a investigação científica, para dar resposta aos problemas da comunidade;<br>
\t\t\t\t\t\t\t\t\t\t\tAumentar o nível de qualidade dos trabalhos científicos realizados nas universidades, evitando viés ou mentiras nos dados fornecidos pelos estudantes meramente para se livrar dos trabalhos.<br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- accordion tab 2 ends -->
\t\t\t\t\t\t\t\t<!-- accordion tab 3 starts -->
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"headingThree\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"dtr-mb-0\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\"> No que acreditamos?</button>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\" data-parent=\"#home-accordion\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\tReduzir  risco ambiental usando menos papel, preservando o meio ambiente; <br>
\t\t\t\t\t\t\t\t\t\t\tCom o uso da pesquisa psd consequentemente usar-se-á menos papel, menos papel significa menos abate de árvores; <br>
\t\t\t\t\t\t\t\t\t\t\tMelhorar a qualidade de vida das comunidades onde os estudantes estão inseridos; <br>
\t\t\t\t\t\t\t\t\t\t\tBuscar maior afirmação dos trabalhos académicos angolano na Internet. <br>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- accordion tab 3 ends -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- accordion ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- about ends
\t\t\t================================================== -->

\t\t\t<section id=\"reviews\" class=\"dtr-py-7 bg-grey\">


\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<!-- cta section starts
\t\t\t\t\t\t\t================================================== -->
\t\t\t\t\t\t\t<section id=\"cta\" class=\"dtr-pt-7 dtr-pb-5 dtr-sm-mb-30px bg-dark-blue color-white\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Em caso de <span class=\"color-blue\">dúvidas</span></h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- column 1 ends -->
\t\t\t\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-5  wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t\t<p>Não hesite em nos contactar estamos sempre abertos ao diálogo e opiniões.</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-size-xl dtr-mb-4\">Juntos podemos mais.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t\t\t\t<!-- column 3 starts -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-4  wow fadeInUp\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dtr-btn\"> <a href=\"mailto:pesquisapsd2020@gmail.com\">Contacte-nos<span><i class=\"icon-envelope\" aria-hidden=\"true\"></i></span> </a> </div><br>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"tel:+244 927 208 899\"><i class=\"icon-phone\"></i> +244 927 208 899</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"mailto:pesquisapsd2020@gmail.com\"><i class=\"icon-envelope\"></i> pesquisapsd2020@gmail.com</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- column 3 ends -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section id=\"reviews\" class=\"dtr-py-7 bg-grey\">


\t\t\t\t\t\t\t</section>
{% include './Site/includes/rodape.twig' %}


", "C:\\laragon\\www\\psd1\\resources\\views/Site/home.twig", "C:\\laragon\\www\\psd1\\resources\\views/Site/home.twig");
    }
}
