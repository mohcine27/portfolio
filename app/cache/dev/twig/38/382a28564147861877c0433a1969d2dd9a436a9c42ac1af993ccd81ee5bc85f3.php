<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_33229dc06fff083eae03136db210981a603a9edd0ff672f8f066667f604810af extends Twig_Template
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
        $__internal_f5ab09e79494c8394452cec014dfcf651e89ad1818e1f4ff3c8327e8a2b6018f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ab09e79494c8394452cec014dfcf651e89ad1818e1f4ff3c8327e8a2b6018f->enter($__internal_f5ab09e79494c8394452cec014dfcf651e89ad1818e1f4ff3c8327e8a2b6018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f5ab09e79494c8394452cec014dfcf651e89ad1818e1f4ff3c8327e8a2b6018f->leave($__internal_f5ab09e79494c8394452cec014dfcf651e89ad1818e1f4ff3c8327e8a2b6018f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
