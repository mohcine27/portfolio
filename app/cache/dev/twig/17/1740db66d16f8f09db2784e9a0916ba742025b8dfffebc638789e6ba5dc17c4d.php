<?php

/* @Front/Default/index.html.twig */
class __TwigTemplate_7344c1218afc314389035409a76a13bb4397c1b4d4e980269beec52a641f38dc extends Twig_Template
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
        $__internal_f5fc27c94a5c5ad9c8148bf7feb0a73575293da77e217ed014e2829b68fb79ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fc27c94a5c5ad9c8148bf7feb0a73575293da77e217ed014e2829b68fb79ce->enter($__internal_f5fc27c94a5c5ad9c8148bf7feb0a73575293da77e217ed014e2829b68fb79ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f5fc27c94a5c5ad9c8148bf7feb0a73575293da77e217ed014e2829b68fb79ce->leave($__internal_f5fc27c94a5c5ad9c8148bf7feb0a73575293da77e217ed014e2829b68fb79ce_prof);

    }

    public function getTemplateName()
    {
        return "@Front/Default/index.html.twig";
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
        return new Twig_Source("Hello World!
", "@Front/Default/index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
