<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0c0609c7d68c3cb8f7653099127267df3a683810d14e334964bf0ef386d708ff extends Twig_Template
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
        $__internal_fb8f7a2a4f5c6a4324dacdc3b0f7018b2866ecd518751f1c5cc4842f3c370944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8f7a2a4f5c6a4324dacdc3b0f7018b2866ecd518751f1c5cc4842f3c370944->enter($__internal_fb8f7a2a4f5c6a4324dacdc3b0f7018b2866ecd518751f1c5cc4842f3c370944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_fb8f7a2a4f5c6a4324dacdc3b0f7018b2866ecd518751f1c5cc4842f3c370944->leave($__internal_fb8f7a2a4f5c6a4324dacdc3b0f7018b2866ecd518751f1c5cc4842f3c370944_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
