<?php

/* BackEndBundle:Default:index.html.twig */
class __TwigTemplate_fb77548ca4b4d88d5ceed364ad8aa91149c633712f8554e758a60275075df252 extends Twig_Template
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
        $__internal_e61c613d1dfce9600775af091da4102bcf82bf7b398e2594df4cc186b4271bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61c613d1dfce9600775af091da4102bcf82bf7b398e2594df4cc186b4271bac->enter($__internal_e61c613d1dfce9600775af091da4102bcf82bf7b398e2594df4cc186b4271bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackEndBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e61c613d1dfce9600775af091da4102bcf82bf7b398e2594df4cc186b4271bac->leave($__internal_e61c613d1dfce9600775af091da4102bcf82bf7b398e2594df4cc186b4271bac_prof);

    }

    public function getTemplateName()
    {
        return "BackEndBundle:Default:index.html.twig";
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
", "BackEndBundle:Default:index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\BackEndBundle/Resources/views/Default/index.html.twig");
    }
}
