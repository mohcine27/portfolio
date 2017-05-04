<?php

/* ::layout.html.twig */
class __TwigTemplate_d5dab87f1d6cc1e70528cbfdac4fbbcfda2013fcc98e8ce127a27c22b4fa7861 extends Twig_Template
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
        $__internal_9f47fbd9654fb82908e8c9d6a6fe187c31bc872813bb1935eebd1d67abbd45f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f47fbd9654fb82908e8c9d6a6fe187c31bc872813bb1935eebd1d67abbd45f8->enter($__internal_9f47fbd9654fb82908e8c9d6a6fe187c31bc872813bb1935eebd1d67abbd45f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo "       
       <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
   </head>
   
   <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et Mohcine Assou.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_backend_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_backend_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCBackEndBundle:Advert:menu", array("limit" => 9)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>";
        
        $__internal_9f47fbd9654fb82908e8c9d6a6fe187c31bc872813bb1935eebd1d67abbd45f8->leave($__internal_9f47fbd9654fb82908e8c9d6a6fe187c31bc872813bb1935eebd1d67abbd45f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_19a9d8d4cc1db0ecb2b430b8cdd4454fc03a6904ba14cb44a4afdd308e21a442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a9d8d4cc1db0ecb2b430b8cdd4454fc03a6904ba14cb44a4afdd308e21a442->enter($__internal_19a9d8d4cc1db0ecb2b430b8cdd4454fc03a6904ba14cb44a4afdd308e21a442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_19a9d8d4cc1db0ecb2b430b8cdd4454fc03a6904ba14cb44a4afdd308e21a442->leave($__internal_19a9d8d4cc1db0ecb2b430b8cdd4454fc03a6904ba14cb44a4afdd308e21a442_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_316e5b422762fdf1a0083c1492ea3efca450263dc65ce4bb4f46fbce7736a406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316e5b422762fdf1a0083c1492ea3efca450263dc65ce4bb4f46fbce7736a406->enter($__internal_316e5b422762fdf1a0083c1492ea3efca450263dc65ce4bb4f46fbce7736a406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">                           
                ";
        
        $__internal_316e5b422762fdf1a0083c1492ea3efca450263dc65ce4bb4f46fbce7736a406->leave($__internal_316e5b422762fdf1a0083c1492ea3efca450263dc65ce4bb4f46fbce7736a406_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_801542a9db7a7f1ec27054cd2909bbf5be714d4146970e9e244711fb13213a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801542a9db7a7f1ec27054cd2909bbf5be714d4146970e9e244711fb13213a4a->enter($__internal_801542a9db7a7f1ec27054cd2909bbf5be714d4146970e9e244711fb13213a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "        ";
        
        $__internal_801542a9db7a7f1ec27054cd2909bbf5be714d4146970e9e244711fb13213a4a->leave($__internal_801542a9db7a7f1ec27054cd2909bbf5be714d4146970e9e244711fb13213a4a_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5420005e95dd1f4f2f46b9048da4d65c31dcde1638d34aa5879f365f25816c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5420005e95dd1f4f2f46b9048da4d65c31dcde1638d34aa5879f365f25816c60->enter($__internal_5420005e95dd1f4f2f46b9048da4d65c31dcde1638d34aa5879f365f25816c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_5420005e95dd1f4f2f46b9048da4d65c31dcde1638d34aa5879f365f25816c60->leave($__internal_5420005e95dd1f4f2f46b9048da4d65c31dcde1638d34aa5879f365f25816c60_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  158 => 53,  152 => 52,  145 => 41,  139 => 40,  129 => 7,  123 => 6,  111 => 5,  102 => 57,  100 => 52,  93 => 48,  85 => 42,  83 => 40,  77 => 37,  70 => 33,  66 => 32,  41 => 10,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
       <title>{% block title %}OC Plateforme{% endblock %}</title>
                {% block stylesheets %}
                   <link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}\">                           
                {% endblock %}
       
       <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
   </head>
   
   <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et Mohcine Assou.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_backend_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_backend_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCBackEndBundle:Advert:menu\", {'limit': 9})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "::layout.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app/Resources\\views/layout.html.twig");
    }
}
