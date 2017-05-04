<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_b742deef90652aa9216bfebee656e6960553cef502ccea289066e7b0939afc5d extends Twig_Template
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
        $__internal_c41c1bd8061bd4c8a454e17d89154513e4eea32fe41e839e1ebd6fba578da77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41c1bd8061bd4c8a454e17d89154513e4eea32fe41e839e1ebd6fba578da77b->enter($__internal_c41c1bd8061bd4c8a454e17d89154513e4eea32fe41e839e1ebd6fba578da77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c41c1bd8061bd4c8a454e17d89154513e4eea32fe41e839e1ebd6fba578da77b->leave($__internal_c41c1bd8061bd4c8a454e17d89154513e4eea32fe41e839e1ebd6fba578da77b_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
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
", "FrontBundle:Default:index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle/Resources/views/Default/index.html.twig");
    }
}
