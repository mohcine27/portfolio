<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_887ceb797f0aa8cdc033b6867cabf7e037344bfd80bcbd21f9975b653bd5cb61 extends Twig_Template
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
        $__internal_0283afe033c8d21596abf7ad5ca756f228c16fdeddf103408eddb5fb29d22ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0283afe033c8d21596abf7ad5ca756f228c16fdeddf103408eddb5fb29d22ab7->enter($__internal_0283afe033c8d21596abf7ad5ca756f228c16fdeddf103408eddb5fb29d22ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0283afe033c8d21596abf7ad5ca756f228c16fdeddf103408eddb5fb29d22ab7->leave($__internal_0283afe033c8d21596abf7ad5ca756f228c16fdeddf103408eddb5fb29d22ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
