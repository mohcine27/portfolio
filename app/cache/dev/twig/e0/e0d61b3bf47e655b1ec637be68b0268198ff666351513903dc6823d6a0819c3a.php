<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_c2ea3a489e5c24c4677b76a69ee30272172e29082c1a73534427c71034b8a613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_712eaa76c8723a645d332b48b81b9c3cf765985095c8115d7888d147197d5273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712eaa76c8723a645d332b48b81b9c3cf765985095c8115d7888d147197d5273->enter($__internal_712eaa76c8723a645d332b48b81b9c3cf765985095c8115d7888d147197d5273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712eaa76c8723a645d332b48b81b9c3cf765985095c8115d7888d147197d5273->leave($__internal_712eaa76c8723a645d332b48b81b9c3cf765985095c8115d7888d147197d5273_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c21b1fadd2409db2ef0bd49608495264dd201aeeed9189f86f141fecbee60da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c21b1fadd2409db2ef0bd49608495264dd201aeeed9189f86f141fecbee60da->enter($__internal_6c21b1fadd2409db2ef0bd49608495264dd201aeeed9189f86f141fecbee60da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6c21b1fadd2409db2ef0bd49608495264dd201aeeed9189f86f141fecbee60da->leave($__internal_6c21b1fadd2409db2ef0bd49608495264dd201aeeed9189f86f141fecbee60da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7835a745d45d387bc63507e2d37e13d4e8546a6006c9e23e2e3e268ad1c53b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7835a745d45d387bc63507e2d37e13d4e8546a6006c9e23e2e3e268ad1c53b1->enter($__internal_c7835a745d45d387bc63507e2d37e13d4e8546a6006c9e23e2e3e268ad1c53b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_c7835a745d45d387bc63507e2d37e13d4e8546a6006c9e23e2e3e268ad1c53b1->leave($__internal_c7835a745d45d387bc63507e2d37e13d4e8546a6006c9e23e2e3e268ad1c53b1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0660477bd9374227bc68e02d248c76d8132aa48f628a9399cf9e31b10cda5b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0660477bd9374227bc68e02d248c76d8132aa48f628a9399cf9e31b10cda5b8a->enter($__internal_0660477bd9374227bc68e02d248c76d8132aa48f628a9399cf9e31b10cda5b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_0660477bd9374227bc68e02d248c76d8132aa48f628a9399cf9e31b10cda5b8a->leave($__internal_0660477bd9374227bc68e02d248c76d8132aa48f628a9399cf9e31b10cda5b8a_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6705fa24f24136ac3f6b56b3cf2586f1e05d06fb57ca47df48cf98e6d50023c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6705fa24f24136ac3f6b56b3cf2586f1e05d06fb57ca47df48cf98e6d50023c->enter($__internal_a6705fa24f24136ac3f6b56b3cf2586f1e05d06fb57ca47df48cf98e6d50023c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a6705fa24f24136ac3f6b56b3cf2586f1e05d06fb57ca47df48cf98e6d50023c->leave($__internal_a6705fa24f24136ac3f6b56b3cf2586f1e05d06fb57ca47df48cf98e6d50023c_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
