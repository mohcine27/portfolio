<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7e4d3e7c52e29467258dd6dc0c1302cc687ec8d72aa395b45cae8a07009fc543 extends Twig_Template
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
        $__internal_446bfc3e8a47cb9efb96ba7702c4228bb4ede1343998caf1c4e5e5e057170a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446bfc3e8a47cb9efb96ba7702c4228bb4ede1343998caf1c4e5e5e057170a64->enter($__internal_446bfc3e8a47cb9efb96ba7702c4228bb4ede1343998caf1c4e5e5e057170a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_446bfc3e8a47cb9efb96ba7702c4228bb4ede1343998caf1c4e5e5e057170a64->leave($__internal_446bfc3e8a47cb9efb96ba7702c4228bb4ede1343998caf1c4e5e5e057170a64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
