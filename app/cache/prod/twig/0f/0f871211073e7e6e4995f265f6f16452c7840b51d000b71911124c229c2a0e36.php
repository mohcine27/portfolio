<?php

/* ::base.html.twig */
class __TwigTemplate_f9b59cc8ff26119491f426b727f8719ce843613fc3a84c16b0a99be2ce849c33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t  <h1>Ma plateforme d'annonces</h1>
\t\t  <p>
\t\t\tCe projet est propulsé par Symfony,
\t\t\tet construit grâce au MOOC OpenClassrooms et Mohcine Assou.
\t\t  </p>
\t\t  <p>
\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
\t\t\t  Participer au MOOC »
\t\t\t</a>
\t\t  </p>
\t\t</div>
\t
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "\t<footer>
\t<!--Begin Social Icons-->
\t\t<div id=\"social\">
\t\t\t<a href=\"#\" class=\"fa fa-facebook-square fa-3x\"></a>
\t\t\t<a href=\"#\" class=\"fa fa-linkedin fa-3x\"></a>
\t\t\t<a href=\"#\" class=\"fa fa-google-plus-square fa-3x\"></a>\t\t
\t\t\t\t\t
\t\t</div>
\t\t<!--End Social Icons-->\t\t
      <p>massou.fr © ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Tous droits réservés. </p>
    </footer>
\t
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " Portfolio";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t\t <script src=\"https://use.fontawesome.com/d22caca8be.js\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  104 => 39,  99 => 26,  92 => 7,  89 => 6,  83 => 5,  77 => 44,  75 => 39,  69 => 36,  58 => 27,  56 => 26,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app/Resources\\views/base.html.twig");
    }
}
