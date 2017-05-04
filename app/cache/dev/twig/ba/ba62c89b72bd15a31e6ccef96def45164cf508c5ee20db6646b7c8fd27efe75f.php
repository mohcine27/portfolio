<?php

/* @Front/layout.html.twig */
class __TwigTemplate_ca8d167b63ea955dd33adb7fdedfa7f0cedfaf5cf108fec42226eaee0184fa4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "@Front/layout.html.twig", 1);
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
        $__internal_7c136116c543dd9e5e4b0334b3414607ea9c23799c8fa1ee639a859d37868b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c136116c543dd9e5e4b0334b3414607ea9c23799c8fa1ee639a859d37868b79->enter($__internal_7c136116c543dd9e5e4b0334b3414607ea9c23799c8fa1ee639a859d37868b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c136116c543dd9e5e4b0334b3414607ea9c23799c8fa1ee639a859d37868b79->leave($__internal_7c136116c543dd9e5e4b0334b3414607ea9c23799c8fa1ee639a859d37868b79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f40ffe19e3e475e376fda97fb52a7f1c9b8df3e5b172835dd34ebd523e1d61a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40ffe19e3e475e376fda97fb52a7f1c9b8df3e5b172835dd34ebd523e1d61a3->enter($__internal_f40ffe19e3e475e376fda97fb52a7f1c9b8df3e5b172835dd34ebd523e1d61a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_f40ffe19e3e475e376fda97fb52a7f1c9b8df3e5b172835dd34ebd523e1d61a3->leave($__internal_f40ffe19e3e475e376fda97fb52a7f1c9b8df3e5b172835dd34ebd523e1d61a3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_592c66a826b4998fb074debd419a6dae698fc7f9d9864b2555baf6cf41570f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592c66a826b4998fb074debd419a6dae698fc7f9d9864b2555baf6cf41570f9e->enter($__internal_592c66a826b4998fb074debd419a6dae698fc7f9d9864b2555baf6cf41570f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t\t
\t   ";
        // line 8
        $this->displayBlock('front_body', $context, $blocks);
        // line 11
        echo "\t   
    ";
        
        $__internal_592c66a826b4998fb074debd419a6dae698fc7f9d9864b2555baf6cf41570f9e->leave($__internal_592c66a826b4998fb074debd419a6dae698fc7f9d9864b2555baf6cf41570f9e_prof);

    }

    // line 8
    public function block_front_body($context, array $blocks = array())
    {
        $__internal_8f4d55c1dd7cacd04e386f6f82ee9556641312fd5c90177ae850126abf0a15cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4d55c1dd7cacd04e386f6f82ee9556641312fd5c90177ae850126abf0a15cf->enter($__internal_8f4d55c1dd7cacd04e386f6f82ee9556641312fd5c90177ae850126abf0a15cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "front_body"));

        // line 9
        echo "\t   
\t   ";
        
        $__internal_8f4d55c1dd7cacd04e386f6f82ee9556641312fd5c90177ae850126abf0a15cf->leave($__internal_8f4d55c1dd7cacd04e386f6f82ee9556641312fd5c90177ae850126abf0a15cf_prof);

    }

    public function getTemplateName()
    {
        return "@Front/layout.html.twig";
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

             
", "@Front/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle\\Resources\\views\\layout.html.twig");
    }
}
