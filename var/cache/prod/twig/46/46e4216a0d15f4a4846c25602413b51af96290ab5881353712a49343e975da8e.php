<?php

/* home/index.html.twig */
class __TwigTemplate_cd71e705a1b2bfc36f848059482a346351e3865a22c85182965cfef04d43410f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'MainContent' => array($this, 'block_MainContent'),
            'MainTitle' => array($this, 'block_MainTitle'),
            'sliders' => array($this, 'block_sliders'),
            'services' => array($this, 'block_services'),
            'TraveauxRecent' => array($this, 'block_TraveauxRecent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "Title", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_MainContent($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('MainTitle', $context, $blocks);
        // line 9
        echo "    <div class=\"sliders\"> 
        <div class=\"slider-wrapper theme-default\">
            <div id=\"slider\" class=\"nivoSlider\">
                ";
        // line 12
        $this->displayBlock('sliders', $context, $blocks);
        // line 17
        echo "            </div>
        </div>
    </div>
    <div class=\"home_bloc_3 over_flow\">
        ";
        // line 21
        $this->displayBlock('services', $context, $blocks);
        // line 41
        echo "    </div>
    <h2 class=\"ligne_apres\"><span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "TravauxRecentMainTitle", array()), "html", null, true);
        echo "</span></h2>
    <div class=\"home_bloc_4 over_flow\">
        ";
        // line 44
        $this->displayBlock('TraveauxRecent', $context, $blocks);
        // line 56
        echo "    </div>
";
    }

    // line 4
    public function block_MainTitle($context, array $blocks = array())
    {
        // line 5
        echo "        <h1 class=\"txt_align\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "MainTitle_1", array()), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "CompanyName", array()), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "MainTitle_2", array()), "html", null, true);
        echo "
        </h1> 
    ";
    }

    // line 12
    public function block_sliders($context, array $blocks = array())
    {
        // line 13
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "Sliders", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 14
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["slider"]), "html", null, true);
            echo "\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["slider"]), "html", null, true);
            echo "\" alt=\"\"/> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                ";
    }

    // line 21
    public function block_services($context, array $blocks = array())
    {
        // line 22
        echo "             <!--construction-->
            <div class=\"fl hb_3\">
                <div class=\"hb_3_rond_1\"><p>1</p></div>
                <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "Services", array()), "construction", array()), "html", null, true);
        echo "</h2>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "ServicesDescription", array()), "construction", array()), "html", null, true);
        echo "</p>
            </div>
             <!--rénovation-->
            <div class=\"fl hb_3\">
                <div class=\"hb_3_rond_2\"><p>2</p></div>
                <h2>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "Services", array()), "renovation", array()), "html", null, true);
        echo "</h2>
                <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "ServicesDescription", array()), "renovation", array()), "html", null, true);
        echo "</p>
            </div>
            <!--intérieur-->
            <div class=\"fl hb_3\">
                <div class=\"hb_3_rond_3\"><p>3</p></div>
                <h2>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "Services", array()), "interieur", array()), "html", null, true);
        echo "</h2> 
                <p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "ServicesDescription", array()), "interieur", array()), "html", null, true);
        echo "</p>
            </div>
        ";
    }

    // line 44
    public function block_TraveauxRecent($context, array $blocks = array())
    {
        // line 45
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["HomeContents"]) ? $context["HomeContents"] : null), "TravauxRecentContents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["travaux"]) {
            // line 46
            echo "                    <div class=\"fl hb_4\">
                        <div class=\"hb_4_img\">
                            <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["travaux"], "images", array())), "html", null, true);
            echo "\" width=\"300\" height=\"200\" alt=\"\"/>
                        </div>
                        <a href=\"#\"> <h3>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["travaux"], "titre", array()), "html", null, true);
            echo "</h3></a> <!--link: architecture Design-->
                        <p>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["travaux"], "DateAjout", array()), "html", null, true);
            echo "</p>
                        <p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["travaux"], "description", array()), "html", null, true);
            echo "</p>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['travaux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        ";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  185 => 52,  181 => 51,  177 => 50,  172 => 48,  168 => 46,  163 => 45,  160 => 44,  153 => 38,  149 => 37,  141 => 32,  137 => 31,  129 => 26,  125 => 25,  120 => 22,  117 => 21,  113 => 16,  102 => 14,  97 => 13,  94 => 12,  83 => 6,  80 => 5,  77 => 4,  72 => 56,  70 => 44,  65 => 42,  62 => 41,  60 => 21,  54 => 17,  52 => 12,  47 => 9,  44 => 4,  41 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends 'layout/layout.html.twig' %}*/
/* {% block title %} {{HomeContents.Title}} {% endblock %}*/
/* {% block MainContent %}*/
/*     {% block MainTitle %}*/
/*         <h1 class="txt_align">*/
/*             {{HomeContents.MainTitle_1}} <span>{{HomeContents.CompanyName}}</span>{{HomeContents.MainTitle_2}}*/
/*         </h1> */
/*     {% endblock %}*/
/*     <div class="sliders"> */
/*         <div class="slider-wrapper theme-default">*/
/*             <div id="slider" class="nivoSlider">*/
/*                 {% block sliders %}*/
/*                     {% for slider in HomeContents.Sliders %}*/
/*                         <img src="{{asset(slider)}}" data-thumb="{{asset(slider)}}" alt=""/> */
/*                     {% endfor %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="home_bloc_3 over_flow">*/
/*         {% block services %}*/
/*              <!--construction-->*/
/*             <div class="fl hb_3">*/
/*                 <div class="hb_3_rond_1"><p>1</p></div>*/
/*                 <h2>{{HomeContents.Services.construction}}</h2>*/
/*                 <p>{{HomeContents.ServicesDescription.construction}}</p>*/
/*             </div>*/
/*              <!--rénovation-->*/
/*             <div class="fl hb_3">*/
/*                 <div class="hb_3_rond_2"><p>2</p></div>*/
/*                 <h2>{{HomeContents.Services.renovation}}</h2>*/
/*                 <p>{{HomeContents.ServicesDescription.renovation}}</p>*/
/*             </div>*/
/*             <!--intérieur-->*/
/*             <div class="fl hb_3">*/
/*                 <div class="hb_3_rond_3"><p>3</p></div>*/
/*                 <h2>{{HomeContents.Services.interieur}}</h2> */
/*                 <p>{{HomeContents.ServicesDescription.interieur}}</p>*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <h2 class="ligne_apres"><span>{{HomeContents.TravauxRecentMainTitle}}</span></h2>*/
/*     <div class="home_bloc_4 over_flow">*/
/*         {% block TraveauxRecent %}*/
/*             {% for travaux in HomeContents.TravauxRecentContents %}*/
/*                     <div class="fl hb_4">*/
/*                         <div class="hb_4_img">*/
/*                             <img src="{{asset(travaux.images)}}" width="300" height="200" alt=""/>*/
/*                         </div>*/
/*                         <a href="#"> <h3>{{travaux.titre}}</h3></a> <!--link: architecture Design-->*/
/*                         <p>{{travaux.DateAjout}}</p>*/
/*                         <p>{{travaux.description}}</p>*/
/*                     </div>*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
