<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c1fe119e9c781967a83c2b242ebc8d38dbacc833db42a38ede8290eaebb6ba1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58922e92f4ff33442f6b3cf37b022a870b62f0d7fa8741f28b05be16d8981bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58922e92f4ff33442f6b3cf37b022a870b62f0d7fa8741f28b05be16d8981bc3->enter($__internal_58922e92f4ff33442f6b3cf37b022a870b62f0d7fa8741f28b05be16d8981bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_58922e92f4ff33442f6b3cf37b022a870b62f0d7fa8741f28b05be16d8981bc3->leave($__internal_58922e92f4ff33442f6b3cf37b022a870b62f0d7fa8741f28b05be16d8981bc3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_28b066277f7bb729e2fc150476159fb5764d6778ebf8cb83b7c6fd5b680c1172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b066277f7bb729e2fc150476159fb5764d6778ebf8cb83b7c6fd5b680c1172->enter($__internal_28b066277f7bb729e2fc150476159fb5764d6778ebf8cb83b7c6fd5b680c1172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_28b066277f7bb729e2fc150476159fb5764d6778ebf8cb83b7c6fd5b680c1172->leave($__internal_28b066277f7bb729e2fc150476159fb5764d6778ebf8cb83b7c6fd5b680c1172_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
