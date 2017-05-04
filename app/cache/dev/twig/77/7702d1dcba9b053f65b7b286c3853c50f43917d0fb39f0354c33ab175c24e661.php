<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_91145adeae30dc04a2ee7785301275b377c8819910178682ca71dc685640fa73 extends Twig_Template
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
        $__internal_5f2cc627a14021143c079849b83d9acf003a4fa9cfe2e308786be9554a00e9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2cc627a14021143c079849b83d9acf003a4fa9cfe2e308786be9554a00e9ae->enter($__internal_5f2cc627a14021143c079849b83d9acf003a4fa9cfe2e308786be9554a00e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f2cc627a14021143c079849b83d9acf003a4fa9cfe2e308786be9554a00e9ae->leave($__internal_5f2cc627a14021143c079849b83d9acf003a4fa9cfe2e308786be9554a00e9ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cf79cccf3ba4c97dc4c369c2e07a74e138fa52adbd7be2a322fa1170bace76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf79cccf3ba4c97dc4c369c2e07a74e138fa52adbd7be2a322fa1170bace76e->enter($__internal_9cf79cccf3ba4c97dc4c369c2e07a74e138fa52adbd7be2a322fa1170bace76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_9cf79cccf3ba4c97dc4c369c2e07a74e138fa52adbd7be2a322fa1170bace76e->leave($__internal_9cf79cccf3ba4c97dc4c369c2e07a74e138fa52adbd7be2a322fa1170bace76e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_40936b4a095bf0b3c3ac16dbf59ebbcffb9ef485b741d09633ed530cadbd34b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40936b4a095bf0b3c3ac16dbf59ebbcffb9ef485b741d09633ed530cadbd34b3->enter($__internal_40936b4a095bf0b3c3ac16dbf59ebbcffb9ef485b741d09633ed530cadbd34b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t\t
\t   ";
        // line 8
        $this->displayBlock('front_body', $context, $blocks);
        // line 11
        echo "\t   
    ";
        
        $__internal_40936b4a095bf0b3c3ac16dbf59ebbcffb9ef485b741d09633ed530cadbd34b3->leave($__internal_40936b4a095bf0b3c3ac16dbf59ebbcffb9ef485b741d09633ed530cadbd34b3_prof);

    }

    // line 8
    public function block_front_body($context, array $blocks = array())
    {
        $__internal_a6e0beb9bc037b8bdd44759c35b3d3a8dad49598ca75e708d0be449396544fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e0beb9bc037b8bdd44759c35b3d3a8dad49598ca75e708d0be449396544fce->enter($__internal_a6e0beb9bc037b8bdd44759c35b3d3a8dad49598ca75e708d0be449396544fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "front_body"));

        // line 9
        echo "\t   
\t   ";
        
        $__internal_a6e0beb9bc037b8bdd44759c35b3d3a8dad49598ca75e708d0be449396544fce->leave($__internal_a6e0beb9bc037b8bdd44759c35b3d3a8dad49598ca75e708d0be449396544fce_prof);

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

             
", "FrontBundle::layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle/Resources/views/layout.html.twig");
    }
}
