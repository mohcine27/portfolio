<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_0db397c5262f24d9a1b2870e22a9e48edfe660629d0eab531fad39f82a2e5113 extends Twig_Template
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
        $__internal_96dbe24b3e119904ac88520eb1d07cba2d6a455f50740b54f9eb023656dd1c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96dbe24b3e119904ac88520eb1d07cba2d6a455f50740b54f9eb023656dd1c1b->enter($__internal_96dbe24b3e119904ac88520eb1d07cba2d6a455f50740b54f9eb023656dd1c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_96dbe24b3e119904ac88520eb1d07cba2d6a455f50740b54f9eb023656dd1c1b->leave($__internal_96dbe24b3e119904ac88520eb1d07cba2d6a455f50740b54f9eb023656dd1c1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
