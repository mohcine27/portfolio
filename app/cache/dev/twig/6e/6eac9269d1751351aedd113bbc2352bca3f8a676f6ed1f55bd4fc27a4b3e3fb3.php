<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a8eff0ff4685da92504673a0c3224504c8988c7cd5db7f2f705791c6b74f5e70 extends Twig_Template
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
        $__internal_bcf28b6c9abc2f1ffeef4ed9b026d6826dabc58e9a8a8978e4fbb91322fb6a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf28b6c9abc2f1ffeef4ed9b026d6826dabc58e9a8a8978e4fbb91322fb6a37->enter($__internal_bcf28b6c9abc2f1ffeef4ed9b026d6826dabc58e9a8a8978e4fbb91322fb6a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bcf28b6c9abc2f1ffeef4ed9b026d6826dabc58e9a8a8978e4fbb91322fb6a37->leave($__internal_bcf28b6c9abc2f1ffeef4ed9b026d6826dabc58e9a8a8978e4fbb91322fb6a37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
