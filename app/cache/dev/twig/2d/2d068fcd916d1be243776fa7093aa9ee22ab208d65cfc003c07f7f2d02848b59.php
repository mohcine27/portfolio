<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_460fe727d03ea62aa11568a9d64141d733b15cd19891d37e92860458376852aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_26d57413f7d724c509574ff6a77e17bd9296ba1e812aeda96ff64c2faba12fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d57413f7d724c509574ff6a77e17bd9296ba1e812aeda96ff64c2faba12fc0->enter($__internal_26d57413f7d724c509574ff6a77e17bd9296ba1e812aeda96ff64c2faba12fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d57413f7d724c509574ff6a77e17bd9296ba1e812aeda96ff64c2faba12fc0->leave($__internal_26d57413f7d724c509574ff6a77e17bd9296ba1e812aeda96ff64c2faba12fc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6069b54643e749b012e1ca454bbae1e22fa49d4ee0df014e482a9c2a253c628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6069b54643e749b012e1ca454bbae1e22fa49d4ee0df014e482a9c2a253c628->enter($__internal_b6069b54643e749b012e1ca454bbae1e22fa49d4ee0df014e482a9c2a253c628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6069b54643e749b012e1ca454bbae1e22fa49d4ee0df014e482a9c2a253c628->leave($__internal_b6069b54643e749b012e1ca454bbae1e22fa49d4ee0df014e482a9c2a253c628_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e0a45fdce60ea22ddaff879a810ceb6288b54f686048674ca7d3a39a95fb60d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0a45fdce60ea22ddaff879a810ceb6288b54f686048674ca7d3a39a95fb60d->enter($__internal_3e0a45fdce60ea22ddaff879a810ceb6288b54f686048674ca7d3a39a95fb60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3e0a45fdce60ea22ddaff879a810ceb6288b54f686048674ca7d3a39a95fb60d->leave($__internal_3e0a45fdce60ea22ddaff879a810ceb6288b54f686048674ca7d3a39a95fb60d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ec199de4d6b811d57406bc6049c63dc835d3c24d55ed25f21ec35bf1da6edd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec199de4d6b811d57406bc6049c63dc835d3c24d55ed25f21ec35bf1da6edd7->enter($__internal_0ec199de4d6b811d57406bc6049c63dc835d3c24d55ed25f21ec35bf1da6edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0ec199de4d6b811d57406bc6049c63dc835d3c24d55ed25f21ec35bf1da6edd7->leave($__internal_0ec199de4d6b811d57406bc6049c63dc835d3c24d55ed25f21ec35bf1da6edd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
