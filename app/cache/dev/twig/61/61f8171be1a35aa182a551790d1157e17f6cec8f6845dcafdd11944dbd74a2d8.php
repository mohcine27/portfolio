<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_90c34de981eeaf6499feb4559ae601f10ea643eb1036028940ff71c8b37f8ca6 extends Twig_Template
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
        $__internal_acc2cd0a5a38e16e32550632acb6bcef98868f5115244c5a9f6e80f2e4435ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc2cd0a5a38e16e32550632acb6bcef98868f5115244c5a9f6e80f2e4435ae4->enter($__internal_acc2cd0a5a38e16e32550632acb6bcef98868f5115244c5a9f6e80f2e4435ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_acc2cd0a5a38e16e32550632acb6bcef98868f5115244c5a9f6e80f2e4435ae4->leave($__internal_acc2cd0a5a38e16e32550632acb6bcef98868f5115244c5a9f6e80f2e4435ae4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
