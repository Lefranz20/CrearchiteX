<?php

/* layout/menu.html.twig */
class __TwigTemplate_42dfe7a6599827b5b8fbcbf623cb725a85bd134217b626d15a17d077d60e94bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"centrage pos\">
        <div class=\"logo\">
            <a href=\"./\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"  height=\"60\" alt=\"\"/></a>
        </div>
        <nav >
            <ul >
                <li><a href=\"./\">Home</a></li> <!--
                --><li><a href=\"./\">Equipe</a></li><!--
                --><li><a href=\"./\">Projets</a></li><!--
                --><li><a href=\"./\">News</a></li><!--
                --><li><a href=\"./\">Contact</a></li>
            </ul>
            <a href=\"#\" class=\"pull\">MENU</a>
        </nav>
    </div>  


";
    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <div class="centrage pos">*/
/*         <div class="logo">*/
/*             <a href="./"><img src="{{asset('images/logo.png')}}"  height="60" alt=""/></a>*/
/*         </div>*/
/*         <nav >*/
/*             <ul >*/
/*                 <li><a href="./">Home</a></li> <!--*/
/*                 --><li><a href="./">Equipe</a></li><!--*/
/*                 --><li><a href="./">Projets</a></li><!--*/
/*                 --><li><a href="./">News</a></li><!--*/
/*                 --><li><a href="./">Contact</a></li>*/
/*             </ul>*/
/*             <a href="#" class="pull">MENU</a>*/
/*         </nav>*/
/*     </div>  */
/* */
/* */
/* */
