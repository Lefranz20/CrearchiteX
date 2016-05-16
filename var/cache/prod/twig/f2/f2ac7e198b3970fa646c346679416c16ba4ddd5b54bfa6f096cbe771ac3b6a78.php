<?php

/* layout/footer.html.twig */
class __TwigTemplate_769f145eb9409ea9acd0716684c13acb1b176d46cf4faad626c47234286dff7c extends Twig_Template
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
        echo "    <section class=\"centrage\">
        <div class=\"pos_flex\">
            <div class=\"foo fl\">
                <img class=\"foo_logo\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" height=\"60\" alt=\"\"/>
                <p> Rejoignez-nous ...</p>
                <div class=\"reseaux_soc\"> 
                    <a href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    <a href=\"#\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    <a href=\"#\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/vimeo.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    <a href=\"#\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/linked.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                    <a href=\"#\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/flickr.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
                </div>
            </div>
            <div class=\"foo fl\">
                <h2>Contact</h2>
                <ul class=\"foo_contact\"> 
                    <li><span>Adresse:</span> Rue haute, Herve</li>
                    <li><span>Tel: </span> 0498300599</li>
                    <li><span>Email:</span> <a href= \"mailto:francois.lewe@gmail.com\">francois.lewe@gmail.com</a></li>       
                </ul>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"foo fl foo_bloc2\">
                <h2>Derniers Tweets</h2>
                <div class=\"foo_tweets\">
                    <a class=\"twitter-timeline\" href=\"https://twitter.com/Reuters\" data-widget-id=\"604349413813788673\">Tweets de @Reuters</a> 
                </div>
            </div>
            <div class=\"foo fl foo_bloc2\">
                <h2>Dernières news</h2>
                <ul class= \"foo_news\">
                    <li><a href=\"#\">Lauréat</a></li>
                    <li><a href=\"#\">Maison passive</a></li>
                    <li><a href=\"#\">Nouveau collaborateur</a></li>
                    <li><a href=\"#\">Inauguration</a></li>
                    <li><a href=\"#\">Interview</a></li>
                    <li><a href=\"#\">Europa Nostra</a></li>
                </ul>
            </div>
        </div>
    </section>
    <div class=\"copy_r\">
        <div class=\"centrage\">
            <p> © copyright 2014 <span id=\"copy_r_crear\">Crearchitech</span>. All Rights Reserved. - plan du site</p>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/*     <section class="centrage">*/
/*         <div class="pos_flex">*/
/*             <div class="foo fl">*/
/*                 <img class="foo_logo" src="{{asset('images/logo.png')}}" height="60" alt=""/>*/
/*                 <p> Rejoignez-nous ...</p>*/
/*                 <div class="reseaux_soc"> */
/*                     <a href="#"><img src="{{asset('images/facebook.png')}}" alt=""/></a>*/
/*                     <a href="#"><img src="{{asset('images/twitter.png')}}" alt=""/></a>*/
/*                     <a href="#"><img src="{{asset('images/vimeo.png')}}" alt=""/></a>*/
/*                     <a href="#"><img src="{{asset('images/linked.png')}}" alt=""/></a>*/
/*                     <a href="#"><img src="{{asset('images/flickr.png')}}" alt=""/></a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="foo fl">*/
/*                 <h2>Contact</h2>*/
/*                 <ul class="foo_contact"> */
/*                     <li><span>Adresse:</span> Rue haute, Herve</li>*/
/*                     <li><span>Tel: </span> 0498300599</li>*/
/*                     <li><span>Email:</span> <a href= "mailto:francois.lewe@gmail.com">francois.lewe@gmail.com</a></li>       */
/*                 </ul>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <div class="foo fl foo_bloc2">*/
/*                 <h2>Derniers Tweets</h2>*/
/*                 <div class="foo_tweets">*/
/*                     <a class="twitter-timeline" href="https://twitter.com/Reuters" data-widget-id="604349413813788673">Tweets de @Reuters</a> */
/*                 </div>*/
/*             </div>*/
/*             <div class="foo fl foo_bloc2">*/
/*                 <h2>Dernières news</h2>*/
/*                 <ul class= "foo_news">*/
/*                     <li><a href="#">Lauréat</a></li>*/
/*                     <li><a href="#">Maison passive</a></li>*/
/*                     <li><a href="#">Nouveau collaborateur</a></li>*/
/*                     <li><a href="#">Inauguration</a></li>*/
/*                     <li><a href="#">Interview</a></li>*/
/*                     <li><a href="#">Europa Nostra</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <div class="copy_r">*/
/*         <div class="centrage">*/
/*             <p> © copyright 2014 <span id="copy_r_crear">Crearchitech</span>. All Rights Reserved. - plan du site</p>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
