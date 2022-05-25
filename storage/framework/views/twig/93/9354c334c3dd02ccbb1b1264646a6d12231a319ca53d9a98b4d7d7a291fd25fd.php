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

/* ./Site/includes/rodape.twig */
class __TwigTemplate_203210d777939b2a954010531279a5be81157ea1fbb1240298b81bf975c6637b extends Template
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
        echo "
<footer id=\"dtr-footer-global\" class=\"bg-blue color-white\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<!-- footer columns row starts -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-6 dtr-sm-mb-30px\">
\t\t\t\t\t\t\t\t<p><img src=\"";
        // line 8
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/images/trustpilot-logo.png"]);
        echo "\" alt=\"image\" class=\"wow pulse\" data-wow-delay=\"0.4s\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3 dtr-sm-mb-30px wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t<h6>Diretrizes</h6>
\t\t\t\t\t\t\t\t<ul class=\"dtr-list\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Política de Privacidade</a></li>
\t\t\t\t\t\t\t\t\t<li>Recursos</li>
\t\t\t\t\t\t\t\t\t<li>Termos de uso</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t<!-- column 3 starts -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3 dtr-sm-mb-30px wow fadeInRight\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t<h6>PSD</h6>
\t\t\t\t\t\t\t\t<ul class=\"dtr-list\">
\t\t\t\t\t\t\t\t\t<li>Serviços</li>
\t\t\t\t\t\t\t\t\t<li>Blog</li>
\t\t\t\t\t\t\t\t\t<li>Contactos</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- column 3 ends -->
\t\t\t\t\t\t\t<!-- column 4 ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- footer columns row ends -->
\t\t\t\t\t\t<!-- copyright row starts -->
\t\t\t\t\t\t<div class=\"row dtr-mt-7\">
\t\t\t\t\t\t\t<div class=\"col-12 col-md-6\"> &copy; copyright 2021.  </div>
\t\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"dtr-social-list text-right color-muted-white\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dtr-facebook\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dtr-twitter\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dtr-linkedin\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- copyright row ends -->
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- footer ends
\t\t\t\t================================================== -->

\t\t\t</div>
\t\t\t<!-- #dtr-wrapper ends -->
\t\t\t<!-- JS FILES -->
\t\t\t<script src=\"";
        // line 53
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/jquery.min.js"]);
        echo "\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"";
        // line 54
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/bootstrap.min.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 55
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/jquery.easing.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 56
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/swiper.min.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 57
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/venobox.min.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 58
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/select2.min.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 59
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/jquery.validate.min.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 60
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/jquery.form.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 61
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/wow.min.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 62
        echo call_user_func_array($this->env->getFunction('asset')->getCallable(), ["site/js/custom.js"]);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script>
\t\t\tnew WOW().init();
\t\t\t</script>
            </body>
            </html>
";
    }

    public function getTemplateName()
    {
        return "./Site/includes/rodape.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  127 => 61,  123 => 60,  119 => 59,  115 => 58,  111 => 57,  107 => 56,  103 => 55,  99 => 54,  95 => 53,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<footer id=\"dtr-footer-global\" class=\"bg-blue color-white\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<!-- footer columns row starts -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<!-- column 1 starts -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-6 dtr-sm-mb-30px\">
\t\t\t\t\t\t\t\t<p><img src=\"{{asset('site/images/trustpilot-logo.png')}}\" alt=\"image\" class=\"wow pulse\" data-wow-delay=\"0.4s\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- column 2 starts -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3 dtr-sm-mb-30px wow fadeInRight\" data-wow-delay=\"0.4s\">
\t\t\t\t\t\t\t\t<h6>Diretrizes</h6>
\t\t\t\t\t\t\t\t<ul class=\"dtr-list\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Política de Privacidade</a></li>
\t\t\t\t\t\t\t\t\t<li>Recursos</li>
\t\t\t\t\t\t\t\t\t<li>Termos de uso</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- column 2 ends -->
\t\t\t\t\t\t\t<!-- column 3 starts -->
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 col-lg-3 dtr-sm-mb-30px wow fadeInRight\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t<h6>PSD</h6>
\t\t\t\t\t\t\t\t<ul class=\"dtr-list\">
\t\t\t\t\t\t\t\t\t<li>Serviços</li>
\t\t\t\t\t\t\t\t\t<li>Blog</li>
\t\t\t\t\t\t\t\t\t<li>Contactos</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- column 3 ends -->
\t\t\t\t\t\t\t<!-- column 4 ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- footer columns row ends -->
\t\t\t\t\t\t<!-- copyright row starts -->
\t\t\t\t\t\t<div class=\"row dtr-mt-7\">
\t\t\t\t\t\t\t<div class=\"col-12 col-md-6\"> &copy; copyright 2021.  </div>
\t\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"dtr-social-list text-right color-muted-white\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dtr-facebook\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dtr-twitter\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"dtr-linkedin\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- copyright row ends -->
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- footer ends
\t\t\t\t================================================== -->

\t\t\t</div>
\t\t\t<!-- #dtr-wrapper ends -->
\t\t\t<!-- JS FILES -->
\t\t\t<script src=\"{{asset('site/js/jquery.min.js')}}\" type=\"text/javascript\" ></script>
\t\t\t<script src=\"{{asset('site/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/jquery.easing.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/swiper.min.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/venobox.min.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/select2.min.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/jquery.validate.min.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/jquery.form.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/wow.min.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script src=\"{{asset('site/js/custom.js')}}\" type=\"text/javascript\"></script>
\t\t\t<script>
\t\t\tnew WOW().init();
\t\t\t</script>
            </body>
            </html>
", "./Site/includes/rodape.twig", "C:\\laragon\\www\\psd1\\resources\\views///Site/includes/rodape.twig");
    }
}
