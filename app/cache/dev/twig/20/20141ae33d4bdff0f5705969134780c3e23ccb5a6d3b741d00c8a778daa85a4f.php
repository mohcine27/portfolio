<?php

/* ::base2.html.twig */
class __TwigTemplate_7e2eb634c52a4f3d5d6fcfc1e13e1606419ca3b259852d4306cbdcb95a243375 extends Twig_Template
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
        $__internal_2c6d08f69c7f08fe5ebed467a2ead7446c4508a00dc639f4d47c06328879acb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6d08f69c7f08fe5ebed467a2ead7446c4508a00dc639f4d47c06328879acb1->enter($__internal_2c6d08f69c7f08fe5ebed467a2ead7446c4508a00dc639f4d47c06328879acb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base2.html.twig"));

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
        
        $__internal_2c6d08f69c7f08fe5ebed467a2ead7446c4508a00dc639f4d47c06328879acb1->leave($__internal_2c6d08f69c7f08fe5ebed467a2ead7446c4508a00dc639f4d47c06328879acb1_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_ada98fa22cb8378ea94de32aa8b9616397a394d356feb346a17e77375cf6a95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada98fa22cb8378ea94de32aa8b9616397a394d356feb346a17e77375cf6a95a->enter($__internal_ada98fa22cb8378ea94de32aa8b9616397a394d356feb346a17e77375cf6a95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Portfolio";
        
        $__internal_ada98fa22cb8378ea94de32aa8b9616397a394d356feb346a17e77375cf6a95a->leave($__internal_ada98fa22cb8378ea94de32aa8b9616397a394d356feb346a17e77375cf6a95a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_46f9f0558a0840229f8015bdc8793e65d113c48f59dd5f8a52d3f3c51d336386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f9f0558a0840229f8015bdc8793e65d113c48f59dd5f8a52d3f3c51d336386->enter($__internal_46f9f0558a0840229f8015bdc8793e65d113c48f59dd5f8a52d3f3c51d336386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t\t\t
\t\t";
        
        $__internal_46f9f0558a0840229f8015bdc8793e65d113c48f59dd5f8a52d3f3c51d336386->leave($__internal_46f9f0558a0840229f8015bdc8793e65d113c48f59dd5f8a52d3f3c51d336386_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b0d0672efebda21c99826ab1e0bae6e3817b59c15b1b51869236d415c84ce90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0d0672efebda21c99826ab1e0bae6e3817b59c15b1b51869236d415c84ce90->enter($__internal_3b0d0672efebda21c99826ab1e0bae6e3817b59c15b1b51869236d415c84ce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3b0d0672efebda21c99826ab1e0bae6e3817b59c15b1b51869236d415c84ce90->leave($__internal_3b0d0672efebda21c99826ab1e0bae6e3817b59c15b1b51869236d415c84ce90_prof);

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
 
", "::base2.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app\\Resources\\views\\base2.html.twig");
    }
}
