<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_692b76be521f69f433007cbaa7cc259832790678d61dfa67c4a61f2cfc437a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_df34833ec2f2fe13c522972b0620c920008fc5f73a863806e92b7a3f4b613456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df34833ec2f2fe13c522972b0620c920008fc5f73a863806e92b7a3f4b613456->enter($__internal_df34833ec2f2fe13c522972b0620c920008fc5f73a863806e92b7a3f4b613456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df34833ec2f2fe13c522972b0620c920008fc5f73a863806e92b7a3f4b613456->leave($__internal_df34833ec2f2fe13c522972b0620c920008fc5f73a863806e92b7a3f4b613456_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0363038ab73b0b4924eb85ee1dca534e381ef3def3bb44b5cf77bd0d54c4ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0363038ab73b0b4924eb85ee1dca534e381ef3def3bb44b5cf77bd0d54c4ada->enter($__internal_a0363038ab73b0b4924eb85ee1dca534e381ef3def3bb44b5cf77bd0d54c4ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a0363038ab73b0b4924eb85ee1dca534e381ef3def3bb44b5cf77bd0d54c4ada->leave($__internal_a0363038ab73b0b4924eb85ee1dca534e381ef3def3bb44b5cf77bd0d54c4ada_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6e794f13fe2176877e0b95e2f5eead980ccfecabfe6e50b39e23824484a151c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e794f13fe2176877e0b95e2f5eead980ccfecabfe6e50b39e23824484a151c->enter($__internal_d6e794f13fe2176877e0b95e2f5eead980ccfecabfe6e50b39e23824484a151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d6e794f13fe2176877e0b95e2f5eead980ccfecabfe6e50b39e23824484a151c->leave($__internal_d6e794f13fe2176877e0b95e2f5eead980ccfecabfe6e50b39e23824484a151c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f722cc1b85d67ec0cdf4971778cc9123b6854e5cea954278a6cd00fc5d6f9ba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f722cc1b85d67ec0cdf4971778cc9123b6854e5cea954278a6cd00fc5d6f9ba9->enter($__internal_f722cc1b85d67ec0cdf4971778cc9123b6854e5cea954278a6cd00fc5d6f9ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f722cc1b85d67ec0cdf4971778cc9123b6854e5cea954278a6cd00fc5d6f9ba9->leave($__internal_f722cc1b85d67ec0cdf4971778cc9123b6854e5cea954278a6cd00fc5d6f9ba9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c2cde913e3174d10392c88fe52c2ed9bdc2787c3ff7df885d173100c6349836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2cde913e3174d10392c88fe52c2ed9bdc2787c3ff7df885d173100c6349836->enter($__internal_8c2cde913e3174d10392c88fe52c2ed9bdc2787c3ff7df885d173100c6349836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8c2cde913e3174d10392c88fe52c2ed9bdc2787c3ff7df885d173100c6349836->leave($__internal_8c2cde913e3174d10392c88fe52c2ed9bdc2787c3ff7df885d173100c6349836_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
", "SensioDistributionBundle::Configurator/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
