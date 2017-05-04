<?php

/* FrontBundle:Front:index.html.twig */
class __TwigTemplate_77daa2f72a7fed1c9e12ecadd771962f170d5430565bf0e6ed9f650e8587d19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'front_body' => array($this, 'block_front_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_front_body($context, array $blocks = array())
    {
        // line 6
        echo "
\t";
        // line 8
        echo "\t\t<header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide One');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>
<div class=\"background\">
\t<div class=\"container\">
\t
        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">
                    Bievenue sur mon Portfolio
                </h2>
            </div>
            <div class=\"row\">
            <!-- Sidebar Column -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<h4 style=\"color:red\">Présentation</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-male fa-fw\"></i><em>&nbsp;Mohcine Assou</em></br>
\t\t\t\t\t\t\t<i class=\"fa fa-calendar fa-fw\"></i><em>&nbsp;25 ans</em></br>
\t\t\t\t\t\t\t<i class=\"fa fa-university fa-fw\"></i><em>&nbsp;Jeune diplômé en ingénieurie logiciels</em></br>
\t\t\t\t\t\t\t<i class=\"fa fa-credit-card fa-fw\"></i><em>&nbsp;Permis B</em></br>\t</br>\t\t\t\t
\t\t\t\t\t\t\t<a class=\"btn btn-primary right\" href=\"#\">Savoir plus <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t<h4 style=\"color:red\">Présentation</h4>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-male fa-fw\"></i><em>&nbsp;Mohcine Assou</em></br>
\t\t\t\t\t\t\t<i class=\"fa fa-calendar fa-fw\"></i><em>&nbsp;25 ans</em></br>
\t\t\t\t\t\t\t<i class=\"fa fa-university fa-fw\"></i><em>&nbsp;Jeune diplômé en ingénieurie logiciels</em></br>
\t\t\t\t\t\t\t<i class=\"fa fa-credit-card fa-fw\"></i><em>&nbsp;Permis B</em></br>\t</br>\t\t\t\t
\t\t\t\t\t\t\t<a class=\"btn btn-primary right\" href=\"#\">Savoir plus <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div><!-- end sidebar column-->
\t\t\t\t<h2 style=\"color: #6890D7\">Projet en cours</h2>
\t\t\t\t<div class=\"col-md-9 \">\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>
\t\t\t\t\t\t\t<hr>\t\t\t\t\t
\t\t\t\t\t\t<h2 style=\"color: #6890D7\">Derniers Projets terminés<h2>
                    <div class=\"col-md-12\" data-wow-delay=\"0.2s\">
                        <div class=\"carousel slide\" data-ride=\"carousel\" id=\"quote-carousel\">
                            <!-- Bottom Carousel Indicators -->
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#quote-carousel\" data-slide-to=\"0\" class=\"active\"><img class=\"img-responsive \" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg\" alt=\"\">
                                </li>
                                <li data-target=\"#quote-carousel\" data-slide-to=\"1\"><img class=\"img-responsive\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg\" alt=\"\">
                                </li>
                                <li data-target=\"#quote-carousel\" data-slide-to=\"2\"><img class=\"img-responsive\" src=\"https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg\" alt=\"\">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class=\"carousel-inner text-center\">

                                <!-- Quote 1 -->
                                <div class=\"item active\">
                                    <blockquote>
                                        <div class=\"row\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class=\"item\">
                                    <blockquote>
                                        <div class=\"row\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class=\"item\">
                                    <blockquote>
                                        <div class=\"row\">
                                            <div class=\"col-sm-8 col-sm-offset-2\">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide=\"prev\" href=\"#quote-carousel\" class=\"left carousel-control\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a data-slide=\"next\" href=\"#quote-carousel\" class=\"right carousel-control\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                </div>
\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t
</div> <!--end container-->
";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontBundle:Front:index.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\src\\FrontBundle/Resources/views/Front/index.html.twig");
    }
}
