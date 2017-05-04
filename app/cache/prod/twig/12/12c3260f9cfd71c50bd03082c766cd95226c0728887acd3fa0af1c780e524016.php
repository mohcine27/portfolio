<?php

/* @Front/layout.html.twig */
class __TwigTemplate_ddd3290f4e4b1187182c788cafe7390b706cd3dcfbfc6b7ff747bc6e584c1d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base2.html.twig", "@Front/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'front_body' => array($this, 'block_front_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t\t
\t   ";
        // line 8
        $this->displayBlock('front_body', $context, $blocks);
        // line 11
        echo "\t   
    ";
    }

    // line 8
    public function block_front_body($context, array $blocks = array())
    {
        // line 9
        echo "\t   
\t   ";
    }

    public function getTemplateName()
    {
        return "@Front/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  49 => 8,  44 => 11,  42 => 8,  39 => 7,  36 => 6,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Front/layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle\\Resources\\views\\layout.html.twig");
    }
}
