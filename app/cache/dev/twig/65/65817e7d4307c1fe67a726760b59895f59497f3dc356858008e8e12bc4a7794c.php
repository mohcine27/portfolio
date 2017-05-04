<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e6a6f74776a8ecbe44e3905a5f8c6b0ee969000740dc2c912a2f2e796160425b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa78ba6d8c335748add04cd70306861f93fb8e77d46c3bbf27c66b818e56260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa78ba6d8c335748add04cd70306861f93fb8e77d46c3bbf27c66b818e56260->enter($__internal_7aa78ba6d8c335748add04cd70306861f93fb8e77d46c3bbf27c66b818e56260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa78ba6d8c335748add04cd70306861f93fb8e77d46c3bbf27c66b818e56260->leave($__internal_7aa78ba6d8c335748add04cd70306861f93fb8e77d46c3bbf27c66b818e56260_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce06475f224bb25567a637afcc930792923284e569d23fddac3a261d88d35ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce06475f224bb25567a637afcc930792923284e569d23fddac3a261d88d35ff->enter($__internal_6ce06475f224bb25567a637afcc930792923284e569d23fddac3a261d88d35ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6ce06475f224bb25567a637afcc930792923284e569d23fddac3a261d88d35ff->leave($__internal_6ce06475f224bb25567a637afcc930792923284e569d23fddac3a261d88d35ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80270a3c1b0f5552a32d6163002b4f83809bdcdc81a52d978501fbdd1991fd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80270a3c1b0f5552a32d6163002b4f83809bdcdc81a52d978501fbdd1991fd7f->enter($__internal_80270a3c1b0f5552a32d6163002b4f83809bdcdc81a52d978501fbdd1991fd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_80270a3c1b0f5552a32d6163002b4f83809bdcdc81a52d978501fbdd1991fd7f->leave($__internal_80270a3c1b0f5552a32d6163002b4f83809bdcdc81a52d978501fbdd1991fd7f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
