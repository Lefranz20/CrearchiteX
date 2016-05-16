<?php

/* layout/layout.html.twig */
class __TwigTemplate_731366578bf7cf6b759e7f8a0f439020682a640d2a5b48e7edc76c203af627db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout/layout.html.twig", 1);
        $this->blocks = array(
            'MainContent' => array($this, 'block_MainContent'),
            'MainTitle' => array($this, 'block_MainTitle'),
            'sliders' => array($this, 'block_sliders'),
            'services' => array($this, 'block_services'),
            'TraveauxRecent' => array($this, 'block_TraveauxRecent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_MainContent($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $this->displayBlock('MainTitle', $context, $blocks);
        echo " ";
        // line 4
        echo "        ";
        $this->displayBlock('sliders', $context, $blocks);
        echo " ";
        // line 5
        echo "        ";
        $this->displayBlock('services', $context, $blocks);
        echo " ";
        // line 6
        echo "        ";
        $this->displayBlock('TraveauxRecent', $context, $blocks);
        echo " ";
        echo "</div>
";
    }

    // line 3
    public function block_MainTitle($context, array $blocks = array())
    {
        echo " ";
    }

    // line 4
    public function block_sliders($context, array $blocks = array())
    {
    }

    // line 5
    public function block_services($context, array $blocks = array())
    {
    }

    // line 6
    public function block_TraveauxRecent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 6,  66 => 5,  61 => 4,  55 => 3,  47 => 6,  43 => 5,  39 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* {% block MainContent %}*/
/*         {% block MainTitle %} {% endblock %} {#le titre descriptif de chaque page#}*/
/*         {% block sliders %}{% endblock %} {#présentation des chantiers réalisés#}*/
/*         {% block services %}{% endblock %} {# construction, intérieur, rénovation#}*/
/*         {% block TraveauxRecent %}{% endblock %} {# 3 derniers Traveaux effectués #}</div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
