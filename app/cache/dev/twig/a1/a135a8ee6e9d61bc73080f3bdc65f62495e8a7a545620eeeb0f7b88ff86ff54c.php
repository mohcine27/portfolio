<?php

/* @BackEnd/Default/index.html.twig */
class __TwigTemplate_ff9d7eca1c1a938d88fb22b1d442a3904d799497fda5ca6a2dbfe83909a827cb extends Twig_Template
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
        $__internal_33a30364a43424efea3ecee1fb032df780cde8e3c71709684c86a70ea74064a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a30364a43424efea3ecee1fb032df780cde8e3c71709684c86a70ea74064a2->enter($__internal_33a30364a43424efea3ecee1fb032df780cde8e3c71709684c86a70ea74064a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BackEnd/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_33a30364a43424efea3ecee1fb032df780cde8e3c71709684c86a70ea74064a2->leave($__internal_33a30364a43424efea3ecee1fb032df780cde8e3c71709684c86a70ea74064a2_prof);

    }

    public function getTemplateName()
    {
        return "@BackEnd/Default/index.html.twig";
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
", "@BackEnd/Default/index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\BackEndBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
