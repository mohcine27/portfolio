<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3e4914c1bbed037ec93628c644e177fe0b2034a2f0bac0012760ee1561f900db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a7bc70d5261fd1ceac2ddd289bee64c8653804eeee6a343a6e8f5574c0cc7519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bc70d5261fd1ceac2ddd289bee64c8653804eeee6a343a6e8f5574c0cc7519->enter($__internal_a7bc70d5261fd1ceac2ddd289bee64c8653804eeee6a343a6e8f5574c0cc7519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7bc70d5261fd1ceac2ddd289bee64c8653804eeee6a343a6e8f5574c0cc7519->leave($__internal_a7bc70d5261fd1ceac2ddd289bee64c8653804eeee6a343a6e8f5574c0cc7519_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e102ee547e52ae2dbc00430888b5fafa21eebd41305ef1ae4e30389c59bd9e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e102ee547e52ae2dbc00430888b5fafa21eebd41305ef1ae4e30389c59bd9e7c->enter($__internal_e102ee547e52ae2dbc00430888b5fafa21eebd41305ef1ae4e30389c59bd9e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e102ee547e52ae2dbc00430888b5fafa21eebd41305ef1ae4e30389c59bd9e7c->leave($__internal_e102ee547e52ae2dbc00430888b5fafa21eebd41305ef1ae4e30389c59bd9e7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_761dec46aa11eaab2306b845e669994ea342a7b0eb778e48bd16e8c89fee93a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761dec46aa11eaab2306b845e669994ea342a7b0eb778e48bd16e8c89fee93a5->enter($__internal_761dec46aa11eaab2306b845e669994ea342a7b0eb778e48bd16e8c89fee93a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_761dec46aa11eaab2306b845e669994ea342a7b0eb778e48bd16e8c89fee93a5->leave($__internal_761dec46aa11eaab2306b845e669994ea342a7b0eb778e48bd16e8c89fee93a5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_38ea9ea33ac25f3dc4b5b1eb2fb68e5dfa4231cdc4219ef65390cd9b86b67152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ea9ea33ac25f3dc4b5b1eb2fb68e5dfa4231cdc4219ef65390cd9b86b67152->enter($__internal_38ea9ea33ac25f3dc4b5b1eb2fb68e5dfa4231cdc4219ef65390cd9b86b67152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_38ea9ea33ac25f3dc4b5b1eb2fb68e5dfa4231cdc4219ef65390cd9b86b67152->leave($__internal_38ea9ea33ac25f3dc4b5b1eb2fb68e5dfa4231cdc4219ef65390cd9b86b67152_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
