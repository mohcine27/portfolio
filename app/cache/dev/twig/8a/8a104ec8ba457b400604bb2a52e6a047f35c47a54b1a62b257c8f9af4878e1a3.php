<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9414a1da14d413948da619f39fa20b85cc50aa70e61d92a5c6bf45893cd63b25 extends Twig_Template
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
        $__internal_ab189901a69ced8866818355f748f69797c73e8a604b86132ebb9310713049a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab189901a69ced8866818355f748f69797c73e8a604b86132ebb9310713049a8->enter($__internal_ab189901a69ced8866818355f748f69797c73e8a604b86132ebb9310713049a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ab189901a69ced8866818355f748f69797c73e8a604b86132ebb9310713049a8->leave($__internal_ab189901a69ced8866818355f748f69797c73e8a604b86132ebb9310713049a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
