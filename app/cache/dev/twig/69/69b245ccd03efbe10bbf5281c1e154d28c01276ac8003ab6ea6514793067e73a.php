<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2bc62f086bf282dde11097f973fe09a6d03e6c16e48e36f7afd15679649bbd12 extends Twig_Template
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
        $__internal_7bd3b6520c1095036d89fd248ecf3fb7ee6b6f44e3f3242dd8fd4bfbd68eda54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd3b6520c1095036d89fd248ecf3fb7ee6b6f44e3f3242dd8fd4bfbd68eda54->enter($__internal_7bd3b6520c1095036d89fd248ecf3fb7ee6b6f44e3f3242dd8fd4bfbd68eda54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7bd3b6520c1095036d89fd248ecf3fb7ee6b6f44e3f3242dd8fd4bfbd68eda54->leave($__internal_7bd3b6520c1095036d89fd248ecf3fb7ee6b6f44e3f3242dd8fd4bfbd68eda54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
