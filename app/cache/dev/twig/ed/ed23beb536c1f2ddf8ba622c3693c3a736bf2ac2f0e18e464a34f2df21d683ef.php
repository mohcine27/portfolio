<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bfd83a7b131ce3473020ec380ac7e23e9bc149c16862badc65d42d270611d295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a169567e9c550de15cf8e64e1f2f296dbbd8110cbab7938f65c2c568a86e185a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a169567e9c550de15cf8e64e1f2f296dbbd8110cbab7938f65c2c568a86e185a->enter($__internal_a169567e9c550de15cf8e64e1f2f296dbbd8110cbab7938f65c2c568a86e185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a169567e9c550de15cf8e64e1f2f296dbbd8110cbab7938f65c2c568a86e185a->leave($__internal_a169567e9c550de15cf8e64e1f2f296dbbd8110cbab7938f65c2c568a86e185a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a1fe3352b51568aba6f272265922e48fd41806fd333324db9557e47ef023132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1fe3352b51568aba6f272265922e48fd41806fd333324db9557e47ef023132->enter($__internal_4a1fe3352b51568aba6f272265922e48fd41806fd333324db9557e47ef023132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a1fe3352b51568aba6f272265922e48fd41806fd333324db9557e47ef023132->leave($__internal_4a1fe3352b51568aba6f272265922e48fd41806fd333324db9557e47ef023132_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_228f53c80b947cadd500146d2c4d939817d0d0e819ea13d19eab6358b17a02c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228f53c80b947cadd500146d2c4d939817d0d0e819ea13d19eab6358b17a02c4->enter($__internal_228f53c80b947cadd500146d2c4d939817d0d0e819ea13d19eab6358b17a02c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_228f53c80b947cadd500146d2c4d939817d0d0e819ea13d19eab6358b17a02c4->leave($__internal_228f53c80b947cadd500146d2c4d939817d0d0e819ea13d19eab6358b17a02c4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9fe2d86c48e8ebdded0034d34a85c220dc55a123b2902312b372a1c02512004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fe2d86c48e8ebdded0034d34a85c220dc55a123b2902312b372a1c02512004->enter($__internal_f9fe2d86c48e8ebdded0034d34a85c220dc55a123b2902312b372a1c02512004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9fe2d86c48e8ebdded0034d34a85c220dc55a123b2902312b372a1c02512004->leave($__internal_f9fe2d86c48e8ebdded0034d34a85c220dc55a123b2902312b372a1c02512004_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
