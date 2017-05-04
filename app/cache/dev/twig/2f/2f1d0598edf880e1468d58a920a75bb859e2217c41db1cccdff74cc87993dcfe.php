<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0b2928c5522bff0f4b5ce24ab518e0691c1c8884d81e3bf58f740f03c5ecd77d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_014f815564b92d9645377dcc7f44766f465730347097fbf3a2ab3646e1a79fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014f815564b92d9645377dcc7f44766f465730347097fbf3a2ab3646e1a79fb1->enter($__internal_014f815564b92d9645377dcc7f44766f465730347097fbf3a2ab3646e1a79fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_014f815564b92d9645377dcc7f44766f465730347097fbf3a2ab3646e1a79fb1->leave($__internal_014f815564b92d9645377dcc7f44766f465730347097fbf3a2ab3646e1a79fb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06d6585a916eba9fcf91a5e9788876ee451d6979baf785caedffc845b6982eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d6585a916eba9fcf91a5e9788876ee451d6979baf785caedffc845b6982eb3->enter($__internal_06d6585a916eba9fcf91a5e9788876ee451d6979baf785caedffc845b6982eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06d6585a916eba9fcf91a5e9788876ee451d6979baf785caedffc845b6982eb3->leave($__internal_06d6585a916eba9fcf91a5e9788876ee451d6979baf785caedffc845b6982eb3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da4aaa5e174a82ed34cfaaf5ac6fd129f84e6c61dc5be45dd634107b8ab30814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4aaa5e174a82ed34cfaaf5ac6fd129f84e6c61dc5be45dd634107b8ab30814->enter($__internal_da4aaa5e174a82ed34cfaaf5ac6fd129f84e6c61dc5be45dd634107b8ab30814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da4aaa5e174a82ed34cfaaf5ac6fd129f84e6c61dc5be45dd634107b8ab30814->leave($__internal_da4aaa5e174a82ed34cfaaf5ac6fd129f84e6c61dc5be45dd634107b8ab30814_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7135432162fdc24f381283c5800548aec0095fe60522b9578bf63341280f78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7135432162fdc24f381283c5800548aec0095fe60522b9578bf63341280f78e->enter($__internal_b7135432162fdc24f381283c5800548aec0095fe60522b9578bf63341280f78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7135432162fdc24f381283c5800548aec0095fe60522b9578bf63341280f78e->leave($__internal_b7135432162fdc24f381283c5800548aec0095fe60522b9578bf63341280f78e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
