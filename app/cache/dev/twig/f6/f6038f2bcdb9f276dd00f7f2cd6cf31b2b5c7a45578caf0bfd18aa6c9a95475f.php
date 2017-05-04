<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9c8dd165469524625b6eadbc80c49f7ec0c3fcc56e6ce54094b7433259fb031d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06eb9bb4e2b027bff7e5a2e5ae5d65501656092e5ef6dc7cd74fcc1061af8719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06eb9bb4e2b027bff7e5a2e5ae5d65501656092e5ef6dc7cd74fcc1061af8719->enter($__internal_06eb9bb4e2b027bff7e5a2e5ae5d65501656092e5ef6dc7cd74fcc1061af8719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_06eb9bb4e2b027bff7e5a2e5ae5d65501656092e5ef6dc7cd74fcc1061af8719->leave($__internal_06eb9bb4e2b027bff7e5a2e5ae5d65501656092e5ef6dc7cd74fcc1061af8719_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
