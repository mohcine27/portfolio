<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_bba01fed64542cb3ced768c68f92bc72a786547eb1ee67464b9a09e5ce8f42a5 extends Twig_Template
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
        $__internal_8187f5cf53b7a283bb0d9a3c855efee724b21124f12c708d8e03a2b5cc5773a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8187f5cf53b7a283bb0d9a3c855efee724b21124f12c708d8e03a2b5cc5773a1->enter($__internal_8187f5cf53b7a283bb0d9a3c855efee724b21124f12c708d8e03a2b5cc5773a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8187f5cf53b7a283bb0d9a3c855efee724b21124f12c708d8e03a2b5cc5773a1->leave($__internal_8187f5cf53b7a283bb0d9a3c855efee724b21124f12c708d8e03a2b5cc5773a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
