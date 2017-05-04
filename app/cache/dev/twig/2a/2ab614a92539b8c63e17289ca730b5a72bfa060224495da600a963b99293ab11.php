<?php

/* ::base2.html.twig */
class __TwigTemplate_7c9af99d651082ad02b580927970b3177404e44e63302066db920435673714a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b047c38f3604ea4c97bd51dbb0ad54b1a7744901ea3598408c1ca1a5ac04304c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b047c38f3604ea4c97bd51dbb0ad54b1a7744901ea3598408c1ca1a5ac04304c->enter($__internal_b047c38f3604ea4c97bd51dbb0ad54b1a7744901ea3598408c1ca1a5ac04304c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

        // line 1
        echo "\t <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t";
        // line 2
        echo twig_include($this->env, $context, "header.html.twig");
        echo "
\t
        ";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 6
        echo "\t
\t<!-- </body> -->
\t
\t";
        // line 9
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "\t\t  
    \t
\t";
        // line 64
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
 
";
        
        $__internal_b047c38f3604ea4c97bd51dbb0ad54b1a7744901ea3598408c1ca1a5ac04304c->leave($__internal_b047c38f3604ea4c97bd51dbb0ad54b1a7744901ea3598408c1ca1a5ac04304c_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7aac1db34938c92177a192ea71b399d924d0af8ca95e8fd3d36eac73454345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aac1db34938c92177a192ea71b399d924d0af8ca95e8fd3d36eac73454345f->enter($__internal_f7aac1db34938c92177a192ea71b399d924d0af8ca95e8fd3d36eac73454345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio";
        
        $__internal_f7aac1db34938c92177a192ea71b399d924d0af8ca95e8fd3d36eac73454345f->leave($__internal_f7aac1db34938c92177a192ea71b399d924d0af8ca95e8fd3d36eac73454345f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce84c3d8d4d4d4ad321183e1427590d4cadcb0502f7f47e80c91fe458924ce3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce84c3d8d4d4d4ad321183e1427590d4cadcb0502f7f47e80c91fe458924ce3b->enter($__internal_ce84c3d8d4d4d4ad321183e1427590d4cadcb0502f7f47e80c91fe458924ce3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t\t\t
\t\t";
        
        $__internal_ce84c3d8d4d4d4ad321183e1427590d4cadcb0502f7f47e80c91fe458924ce3b->leave($__internal_ce84c3d8d4d4d4ad321183e1427590d4cadcb0502f7f47e80c91fe458924ce3b_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d333b75201c4b98c04a231f21bd6f8392153cd0c5b883215a6d91a730f5913f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d333b75201c4b98c04a231f21bd6f8392153cd0c5b883215a6d91a730f5913f->enter($__internal_2d333b75201c4b98c04a231f21bd6f8392153cd0c5b883215a6d91a730f5913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f31abf5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f31abf5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/f31abf5_part_1_bootstrap_1.js");
            // line 11
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "f31abf5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f31abf5_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/f31abf5_part_1_bootstrap.min_2.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "f31abf5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f31abf5_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/f31abf5_part_1_contact_me_3.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "f31abf5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f31abf5_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/f31abf5_part_1_jqBootstrapValidation_4.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
        } else {
            // asset "f31abf5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f31abf5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/f31abf5.js");
            echo "\t\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "\t\t\t  <script src=\"https://use.fontawesome.com/d22caca8be.js\"></script>
\t\t\t   <script>
\t\t\t\t\t\$('.carousel').carousel({
\t\t\t\t\t\tinterval: 2000 //changes the speed
\t\t\t\t\t})
\t\t\t\t\t</script>
\t\t\t\t\t<script>
\t\t\t\t        \t\$(window).scroll(function() {
\t\t\t\t\t\tif (\$(document).scrollTop() > 150) {
\t\t\t\t\t\t\$('.navbar').addClass('shrink');
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\$('.navbar').removeClass('shrink'); }
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$('ul.nav li.dropdown').hover(function() {
\t\t\t\t\t\t\t\t  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
\t\t\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t\t  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\tvar boxheight = \$('.carousel-inner').height();
\tvar itemlength = \$('.item').length;
\tvar triggerheight = Math.round(boxheight/itemlength+1);
\t\$('.list-group-item').height(triggerheight);
\t
\tvar clickEvent = false;
\t\$('#myCarousel').carousel({
\t\tinterval:   4000\t
\t}).on('click', '.list-group li', function() {
\t\t\tclickEvent = true;
\t\t\t\$('.list-group li').removeClass('active');
\t\t\t\$(this).addClass('active');\t\t
\t}).on('slid.bs.carousel', function(e) {
\t\tif(!clickEvent) {
\t\t\tvar count = \$('.list-group').children().length -1;
\t\t\tvar current = \$('.list-group li.active');
\t\t\tcurrent.removeClass('active').next().addClass('active');
\t\t\tvar id = parseInt(current.data('slide-to'));
\t\t\tif(count == id) {
\t\t\t\t\$('.list-group li').first().addClass('active');\t
\t\t\t}
\t\t}
\t\tclickEvent = false;
\t});
</script>
\t";
        
        $__internal_2d333b75201c4b98c04a231f21bd6f8392153cd0c5b883215a6d91a730f5913f->leave($__internal_2d333b75201c4b98c04a231f21bd6f8392153cd0c5b883215a6d91a730f5913f_prof);

    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 13,  95 => 11,  90 => 10,  84 => 9,  76 => 5,  70 => 4,  58 => 1,  48 => 64,  44 => 62,  42 => 9,  37 => 6,  35 => 4,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("\t <title>{% block title %}Portfolio{% endblock %}</title>
\t{{include ('header.html.twig')}}
\t
        {% block body %}
\t\t\t
\t\t{% endblock %}\t
\t<!-- </body> -->
\t
\t{% block javascripts %}
\t\t\t{% javascripts '@FrontBundle/Resources/public/js/*'%}
\t\t\t\t<script src=\"{{ asset_url}}\"></script>
\t\t\t{%endjavascripts%}
\t\t\t  <script src=\"https://use.fontawesome.com/d22caca8be.js\"></script>
\t\t\t   <script>
\t\t\t\t\t\$('.carousel').carousel({
\t\t\t\t\t\tinterval: 2000 //changes the speed
\t\t\t\t\t})
\t\t\t\t\t</script>
\t\t\t\t\t<script>
\t\t\t\t        \t\$(window).scroll(function() {
\t\t\t\t\t\tif (\$(document).scrollTop() > 150) {
\t\t\t\t\t\t\$('.navbar').addClass('shrink');
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\$('.navbar').removeClass('shrink'); }
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\$('ul.nav li.dropdown').hover(function() {
\t\t\t\t\t\t\t\t  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
\t\t\t\t\t\t\t\t}, function() {
\t\t\t\t\t\t\t\t  \$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t<script>
\t\t\t\t\t\tvar boxheight = \$('.carousel-inner').height();
\tvar itemlength = \$('.item').length;
\tvar triggerheight = Math.round(boxheight/itemlength+1);
\t\$('.list-group-item').height(triggerheight);
\t
\tvar clickEvent = false;
\t\$('#myCarousel').carousel({
\t\tinterval:   4000\t
\t}).on('click', '.list-group li', function() {
\t\t\tclickEvent = true;
\t\t\t\$('.list-group li').removeClass('active');
\t\t\t\$(this).addClass('active');\t\t
\t}).on('slid.bs.carousel', function(e) {
\t\tif(!clickEvent) {
\t\t\tvar count = \$('.list-group').children().length -1;
\t\t\tvar current = \$('.list-group li.active');
\t\t\tcurrent.removeClass('active').next().addClass('active');
\t\t\tvar id = parseInt(current.data('slide-to'));
\t\t\tif(count == id) {
\t\t\t\t\$('.list-group li').first().addClass('active');\t
\t\t\t}
\t\t}
\t\tclickEvent = false;
\t});
</script>
\t{% endblock %}
\t\t  
    \t
\t{{include ('footer.html.twig')}}
 
", "::base2.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app/Resources\\views/base2.html.twig");
    }
}
