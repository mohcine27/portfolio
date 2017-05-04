<?php

/* ::header.html.twig */
class __TwigTemplate_ee027bf1fb6d10bed5fd53767dd7117ef533b2d9e7add2edd68397ed673033fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta charset=\"UTF-8\" />
       
\t\t\t\t";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "181fc31_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_181fc31_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/181fc31_part_1_images_1");
            // line 15
            echo "\t\t\t\t\t
\t\t\t\t";
        } else {
            // asset "181fc31"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_181fc31") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/181fc31");
            echo "\t\t\t\t\t
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t    <!-- Navigation -->
 <header class=\"navbar navbar-bright navbar-fixed-top\" role=\"navigation\">
\t  <div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t  <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t  </button>\t\t  
\t\t  <a class=\"navbar-brand\" id=\"brand\" href=\"#\" title=\"Portfolio\">Portfolio <span style=\"color:#18A1EC;font-weight:200;\"><strong><em>Assou Mohcine</em></strong></span></a>
\t\t\t\t<p>Date d'aujourd'hui: ";
        // line 31
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "medium", "none", "fr_FR", "Europe/Paris", "cccc d LLLL yyy à H:mm"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<nav class=\"collapse navbar-collapse\" role=\"navigation\">
\t\t      <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"#\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"#\">A Propos</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Projets <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
\t\t\t\t\t\t
                            <li>
                                <a href=\"portfolio-1-col.html\">Projets réalisés</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">Projets en cours</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\">Blog Home 1</a>
                            </li>
                            <li>
                                <a href=\"#\">Blog Home 2</a>
                            </li>
                            <li>
                                <a href=\"#\">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Other Pages <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            
                            <li>
                                <a href=\"faq.html\">FAQ</a>
                            </li>
                            <li>
                                <a href=\"404.html\">404</a>
                            </li>
                            <li>
                                <a href=\"pricing.html\">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                </ul>
\t\t</nav>
\t  </div>
</header>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"), "html", null, true);
        echo "\">
                        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6fee7ed_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed_part_1_bootstrap_1.css");
            // line 11
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            // asset "6fee7ed_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed_part_1_bootstrap.min_2.css");
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            // asset "6fee7ed_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed_part_1_carousel_3.css");
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            // asset "6fee7ed_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed_part_1_footer_4.css");
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            // asset "6fee7ed_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed_part_1_header_5.css");
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            // asset "6fee7ed_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed_part_1_modern-business_6.css");
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
        } else {
            // asset "6fee7ed"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6fee7ed") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6fee7ed.css");
            echo "\t\t\t\t\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\">
\t\t\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 13,  160 => 11,  156 => 10,  151 => 8,  147 => 7,  142 => 6,  139 => 5,  61 => 31,  43 => 17,  33 => 15,  28 => 14,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::header.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app/Resources\\views/header.html.twig");
    }
}
