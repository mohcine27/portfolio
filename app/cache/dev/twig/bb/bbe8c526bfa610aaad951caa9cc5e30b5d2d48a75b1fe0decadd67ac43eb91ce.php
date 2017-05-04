<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f02eed138edc3d5f75a3095fbecb9f498d627deb911ce856543cd7319b5bbd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a2dc089a74a563150b6c0061e6601b60715d35dfdf29124416c990c51593425e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dc089a74a563150b6c0061e6601b60715d35dfdf29124416c990c51593425e->enter($__internal_a2dc089a74a563150b6c0061e6601b60715d35dfdf29124416c990c51593425e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2dc089a74a563150b6c0061e6601b60715d35dfdf29124416c990c51593425e->leave($__internal_a2dc089a74a563150b6c0061e6601b60715d35dfdf29124416c990c51593425e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47078635e2f609d30b3e1061e8a63705fbf9473339c40248137cd46ffb9a3e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47078635e2f609d30b3e1061e8a63705fbf9473339c40248137cd46ffb9a3e0e->enter($__internal_47078635e2f609d30b3e1061e8a63705fbf9473339c40248137cd46ffb9a3e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_47078635e2f609d30b3e1061e8a63705fbf9473339c40248137cd46ffb9a3e0e->leave($__internal_47078635e2f609d30b3e1061e8a63705fbf9473339c40248137cd46ffb9a3e0e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7813958cc68db36cf820e8c9e76132ef6871c1dab11428d07074068b7e224631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7813958cc68db36cf820e8c9e76132ef6871c1dab11428d07074068b7e224631->enter($__internal_7813958cc68db36cf820e8c9e76132ef6871c1dab11428d07074068b7e224631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7813958cc68db36cf820e8c9e76132ef6871c1dab11428d07074068b7e224631->leave($__internal_7813958cc68db36cf820e8c9e76132ef6871c1dab11428d07074068b7e224631_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
