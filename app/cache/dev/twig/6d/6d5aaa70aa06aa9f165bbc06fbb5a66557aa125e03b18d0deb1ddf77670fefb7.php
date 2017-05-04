<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8cc3cc5938c8102d8c8b44f1b97b3c6588f879acc6b9b9b1b99c5c9d2b0c4707 extends Twig_Template
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
        $__internal_aecb39180b173944138f98a96fdf1006045e9ff9c37af136a267bbe71adac2a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecb39180b173944138f98a96fdf1006045e9ff9c37af136a267bbe71adac2a8->enter($__internal_aecb39180b173944138f98a96fdf1006045e9ff9c37af136a267bbe71adac2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_aecb39180b173944138f98a96fdf1006045e9ff9c37af136a267bbe71adac2a8->leave($__internal_aecb39180b173944138f98a96fdf1006045e9ff9c37af136a267bbe71adac2a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
