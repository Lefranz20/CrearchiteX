<?php

/* base.html.twig */
class __TwigTemplate_bd31c1d4a52d9ccf7dafa98d9981d4efb33c7cf6e1c148d23092881aebe35eb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'MainContent' => array($this, 'block_MainContent'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            ";
        // line 18
        $this->loadTemplate("layout/menu.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "        </header>
        <section class=\"contenu_page\">
            <div class=\"centrage\">
                ";
        // line 22
        $this->displayBlock('MainContent', $context, $blocks);
        // line 23
        echo "            </div>
        </section>
        <footer class=\"pied_page\">
            ";
        // line 26
        $this->loadTemplate("layout/footer.html.twig", "base.html.twig", 26)->display($context);
        // line 27
        echo "        </footer>
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/nivo-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/structure.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            
        ";
    }

    // line 22
    public function block_MainContent($context, array $blocks = array())
    {
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nivo.slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/lightbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scr_principal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tweeter.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  119 => 32,  115 => 31,  111 => 30,  108 => 29,  105 => 28,  100 => 22,  93 => 11,  89 => 10,  85 => 9,  81 => 8,  78 => 7,  75 => 6,  70 => 5,  64 => 35,  62 => 28,  59 => 27,  57 => 26,  52 => 23,  50 => 22,  45 => 19,  43 => 18,  35 => 14,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>*/
/*             <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{asset('css/nivo-slider.css')}}" rel="stylesheet" type="text/css"/>*/
/*             <link href="{{asset('css/structure.css')}}" rel="stylesheet" type="text/css"/>*/
/*             */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             {% include 'layout/menu.html.twig'%}*/
/*         </header>*/
/*         <section class="contenu_page">*/
/*             <div class="centrage">*/
/*                 {% block MainContent %}{% endblock %}*/
/*             </div>*/
/*         </section>*/
/*         <footer class="pied_page">*/
/*             {% include 'layout/footer.html.twig'%}*/
/*         </footer>*/
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/*             <script src="{{asset('js/jquery.nivo.slider.js')}}" type="text/javascript"></script>*/
/*             <script src="{{asset('js/lightbox.min.js')}}" type="text/javascript"></script>*/
/*             <script src="{{asset('js/scr_principal.js')}}" type="text/javascript"></script>*/
/*             <script src="{{asset('js/tweeter.js')}}" type="text/javascript"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
