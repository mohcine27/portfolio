<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_91b161aa660c0c843b22f29a6a1483dd1027eec58e15c5eeef6af9cc29f0a0cb extends Twig_Template
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
        $__internal_82ce393c0faf4c79b6c4430d4257fb2c0c99b63096b6dab5e956e874ce63d91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ce393c0faf4c79b6c4430d4257fb2c0c99b63096b6dab5e956e874ce63d91c->enter($__internal_82ce393c0faf4c79b6c4430d4257fb2c0c99b63096b6dab5e956e874ce63d91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_82ce393c0faf4c79b6c4430d4257fb2c0c99b63096b6dab5e956e874ce63d91c->leave($__internal_82ce393c0faf4c79b6c4430d4257fb2c0c99b63096b6dab5e956e874ce63d91c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
