<?php

/* ::base.html.twig */
class __TwigTemplate_1e514f5154df1ec4406697193f79b6b97c6b99f5008d1ae5a5df0ada76b06abf extends Twig_Template
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
        $__internal_21946cde9b2b173f905cd9155cc5d171e87156427a66db8d2713c55cdbe188bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21946cde9b2b173f905cd9155cc5d171e87156427a66db8d2713c55cdbe188bf->enter($__internal_21946cde9b2b173f905cd9155cc5d171e87156427a66db8d2713c55cdbe188bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_21946cde9b2b173f905cd9155cc5d171e87156427a66db8d2713c55cdbe188bf->leave($__internal_21946cde9b2b173f905cd9155cc5d171e87156427a66db8d2713c55cdbe188bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_338d7504c56936f6a8cc4238ee968a8325a8f9c0c366ff6a09b99b84ed111cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338d7504c56936f6a8cc4238ee968a8325a8f9c0c366ff6a09b99b84ed111cba->enter($__internal_338d7504c56936f6a8cc4238ee968a8325a8f9c0c366ff6a09b99b84ed111cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Portfolio";
        
        $__internal_338d7504c56936f6a8cc4238ee968a8325a8f9c0c366ff6a09b99b84ed111cba->leave($__internal_338d7504c56936f6a8cc4238ee968a8325a8f9c0c366ff6a09b99b84ed111cba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ff79b4a48af7a2e9be4cf0e82a532347e5f51603360078baf552cd5dca214eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff79b4a48af7a2e9be4cf0e82a532347e5f51603360078baf552cd5dca214eb->enter($__internal_2ff79b4a48af7a2e9be4cf0e82a532347e5f51603360078baf552cd5dca214eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t";
        
        $__internal_2ff79b4a48af7a2e9be4cf0e82a532347e5f51603360078baf552cd5dca214eb->leave($__internal_2ff79b4a48af7a2e9be4cf0e82a532347e5f51603360078baf552cd5dca214eb_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2e82ec2b3340a0299c5acfa0de50fc7d81a1c383443ff015d79dfbf59d7e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2e82ec2b3340a0299c5acfa0de50fc7d81a1c383443ff015d79dfbf59d7e29->enter($__internal_0c2e82ec2b3340a0299c5acfa0de50fc7d81a1c383443ff015d79dfbf59d7e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c2e82ec2b3340a0299c5acfa0de50fc7d81a1c383443ff015d79dfbf59d7e29->leave($__internal_0c2e82ec2b3340a0299c5acfa0de50fc7d81a1c383443ff015d79dfbf59d7e29_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_932a17ad063184bafb4c9fcc747ba2a0afa1f0bbf3a651f82d0c8ea7086fc874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932a17ad063184bafb4c9fcc747ba2a0afa1f0bbf3a651f82d0c8ea7086fc874->enter($__internal_932a17ad063184bafb4c9fcc747ba2a0afa1f0bbf3a651f82d0c8ea7086fc874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "\t\t\t <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t\t <script src=\"https://use.fontawesome.com/d22caca8be.js\"></script>
\t\t";
        
        $__internal_932a17ad063184bafb4c9fcc747ba2a0afa1f0bbf3a651f82d0c8ea7086fc874->leave($__internal_932a17ad063184bafb4c9fcc747ba2a0afa1f0bbf3a651f82d0c8ea7086fc874_prof);

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
        return array (  134 => 40,  128 => 39,  117 => 26,  107 => 7,  101 => 6,  89 => 5,  80 => 44,  78 => 39,  72 => 36,  61 => 27,  59 => 26,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %} Portfolio{% endblock %}</title>
        {% block stylesheets %}
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}\">
\t\t{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
        {% block body %}{% endblock %}
\t<footer>
\t<!--Begin Social Icons-->
\t\t<div id=\"social\">
\t\t\t<a href=\"#\" class=\"fa fa-facebook-square fa-3x\"></a>
\t\t\t<a href=\"#\" class=\"fa fa-linkedin fa-3x\"></a>
\t\t\t<a href=\"#\" class=\"fa fa-google-plus-square fa-3x\"></a>\t\t
\t\t\t\t\t
\t\t</div>
\t\t<!--End Social Icons-->\t\t
      <p>massou.fr © {{ 'now'|date('Y') }} Tous droits réservés. </p>
    </footer>
\t
        {% block javascripts %}
\t\t\t <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t\t\t <script src=\"https://use.fontawesome.com/d22caca8be.js\"></script>
\t\t{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app/Resources\\views/base.html.twig");
    }
}
