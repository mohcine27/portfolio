<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ad487d8a3d0062bd16738d219189afc02dd519ac7d9471c1e00b765c8df45397 extends Twig_Template
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
        $__internal_e2b11e86a055a1e13009e2373b15b4b6c025191ad416ffe0c5695ded39f5c7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b11e86a055a1e13009e2373b15b4b6c025191ad416ffe0c5695ded39f5c7f1->enter($__internal_e2b11e86a055a1e13009e2373b15b4b6c025191ad416ffe0c5695ded39f5c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e2b11e86a055a1e13009e2373b15b4b6c025191ad416ffe0c5695ded39f5c7f1->leave($__internal_e2b11e86a055a1e13009e2373b15b4b6c025191ad416ffe0c5695ded39f5c7f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
