<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_ecb03994eb04df12f0718f424f22146145c05e07985164dfd3af89d0e6e2a17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "FrontBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'front_body' => array($this, 'block_front_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62715874d6c0201018623e7881bb279c9ac0992afff28cb3346510b8adf4892c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62715874d6c0201018623e7881bb279c9ac0992afff28cb3346510b8adf4892c->enter($__internal_62715874d6c0201018623e7881bb279c9ac0992afff28cb3346510b8adf4892c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62715874d6c0201018623e7881bb279c9ac0992afff28cb3346510b8adf4892c->leave($__internal_62715874d6c0201018623e7881bb279c9ac0992afff28cb3346510b8adf4892c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2255fe97da086c9adf296d58457d2c88922670b7657385ea9f2708b6255956b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2255fe97da086c9adf296d58457d2c88922670b7657385ea9f2708b6255956b9->enter($__internal_2255fe97da086c9adf296d58457d2c88922670b7657385ea9f2708b6255956b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_2255fe97da086c9adf296d58457d2c88922670b7657385ea9f2708b6255956b9->leave($__internal_2255fe97da086c9adf296d58457d2c88922670b7657385ea9f2708b6255956b9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_746f7de02abb702c5e4ae8a2ec91179ef16496e3a5513390980862491167216b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746f7de02abb702c5e4ae8a2ec91179ef16496e3a5513390980862491167216b->enter($__internal_746f7de02abb702c5e4ae8a2ec91179ef16496e3a5513390980862491167216b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t\t
\t   ";
        // line 8
        $this->displayBlock('front_body', $context, $blocks);
        // line 11
        echo "\t   
    ";
        
        $__internal_746f7de02abb702c5e4ae8a2ec91179ef16496e3a5513390980862491167216b->leave($__internal_746f7de02abb702c5e4ae8a2ec91179ef16496e3a5513390980862491167216b_prof);

    }

    // line 8
    public function block_front_body($context, array $blocks = array())
    {
        $__internal_0f5274113fb44b39cf6804fd4c9ee01249ed39e9203654e5258b780fe221ce62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5274113fb44b39cf6804fd4c9ee01249ed39e9203654e5258b780fe221ce62->enter($__internal_0f5274113fb44b39cf6804fd4c9ee01249ed39e9203654e5258b780fe221ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "front_body"));

        // line 9
        echo "\t   
\t   ";
        
        $__internal_0f5274113fb44b39cf6804fd4c9ee01249ed39e9203654e5258b780fe221ce62->leave($__internal_0f5274113fb44b39cf6804fd4c9ee01249ed39e9203654e5258b780fe221ce62_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  67 => 8,  59 => 11,  57 => 8,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends '::base2.html.twig' %}

       {% block title %}{{parent()}}{% endblock %}
       

    {% block body %}
\t\t
\t   {% block front_body%}
\t   
\t   {% endblock%}
\t   
    {% endblock %}

             
", "FrontBundle::layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle\\Resources\\views\\layout.html.twig");
    }
}
