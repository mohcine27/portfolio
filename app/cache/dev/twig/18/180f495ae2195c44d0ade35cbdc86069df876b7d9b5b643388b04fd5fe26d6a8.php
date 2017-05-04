<?php

/* footer.html.twig */
class __TwigTemplate_2175ca2c0eafd11945acd15f90727dfa0214d3b92104761215383a6208ed6b99 extends Twig_Template
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
        $__internal_75ad61cb7cb00bfa43032cfb371d49245d4b6db72cdbc534e067bbfdca62b987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ad61cb7cb00bfa43032cfb371d49245d4b6db72cdbc534e067bbfdca62b987->enter($__internal_75ad61cb7cb00bfa43032cfb371d49245d4b6db72cdbc534e067bbfdca62b987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"clearfix\">
      <div id=\"footer-widgets\">

        <div class=\"container\">

        <div id=\"footer-wrapper\">

          <div class=\"row\">
            <div class=\"col-sm-6 col-md-2\">
              <div id=\"meta-3\" class=\"widget widgetFooter widget_meta\">
              <h4 class=\"widgettitle\">Page Importante :</h4>
              <ul>
    \t\t  <li><a href=\"#\"><i class=\"fa fa-home fa-2x fa-fw\"></i> A Propos</a></li>
\t\t\t  <li><a href=\"#\"><i class=\"fa fa-cogs fa-2x fa-fw\"></i>   Projets</a></li>
\t\t\t  <li><a href=\"#\"><i class=\"fa fa-wrench fa-2x fa-fw\"></i>   Projets en cours</a></li>
\t\t\t  <li><a href=\"#\"><i class=\"fa fa-envelope fa-2x fa-fw\"></i> Contact </a></li>
             </ul>
\t\t</div>      </div> <!-- end widget1 -->

            <div class=\"col-sm-6 col-md-2\">
              \t\t<div id=\"recent-posts-3\" class=\"widget widgetFooter widget_recent_entries\">
                    <h4 class=\"widgettitle\">Réseaux sociaux :</h4>
                    <ul>
\t\t\t\t\t<li>
\t\t\t\t      <a href='#'><i class=\"fa fa-facebook fa-2x fa-fw\"></i>Facebook</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t      <a href=\"#\"><i class=\"fa fa-github fa-2x fa-fw\"></i>Github</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t      <a href=\"#\"><i class=\"fa fa-google-plus-official fa-2x fa-fw\"></i>Google Plus </a>
\t\t\t\t   </li>
\t\t\t\t   \t<li><a href='#'>
\t\t\t\t      <a href=\"#\"><i class=\"fa fa-linkedin fa-2x fa-fw\"></i>Linkedin</a>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t</div>            </div> <!-- end widget1 -->

            <div class=\"col-sm-6 col-md-4\">
              <div id=\"meta-4\" class=\"widget widgetFooter widget_meta\">
              <h4 class=\"widgettitle\">Portfolio :</h4>
\t\t\t  <blockquote>
\t\t\t\t<h5 class=\"text-muted\" >
\t\t\t\t\t<em>Bienvenue sur mon portfolio, je suis Mohcine Assou, Développeur en ingénieurie logiciels.
\t\t\t\t\tJ'ai utilisé pas mal de langage de programmation et Framework par exemple PHP, Symfony.
\t\t\t\t\tCe site est l'un de mes projets réalisé en Symfony.
\t\t\t\t\tJe travaille fréquement sur le Symfony car je le trouve intéressant, et qui répond parfaitement
\t\t\t\t\tà mes besoins.</em>
\t\t\t\t</h5>
              </blockquote>

              </div>
             </div> <!-- end widget1 -->

            <div class=\"col-sm-6 col-md-4\">
              <div id=\"search-3\" class=\"widget widgetFooter widget_search\"><h4 class=\"widgettitle\">Recherche :</h4>

                <div class=\"form-group\">
                                
                                <div class=\"input-group\">
                                  <span class=\"input-group-addon\">Mots-clés :</span>
                                  <input class=\"form-control\" placeholder=\"mots-clés ...\" type=\"text\">
                                   <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" type=\"button\">Recherche !</button>
                                  </span>
                                </div>
                              </div>

                </div>
\t\t\t <div id=\"search-3\" class=\"widget widgetFooter widget_search\"><h4 class=\"widgettitle\">Adresse :</h4>
\t\t\t\t<blockquote>
\t\t\t\t\t<h5><i class=\"fa fa-map-marker fa-2x fa-fw\"></i> Rue des docteurs charcot,42100 St Etienne, France</h5>
\t\t\t\t</blockquote>
\t
\t\t\t\t</div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id=\"sub-floor\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 copyright\">
             massou.fr © ";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Tous droits réservés. 
            </div>
            <div class=\"col-md-4 col-md-offset-4 attribution\">
             <a target=\"_blank\" href=\"#\">Copy Right MASSOU</a>.
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer>
";
        
        $__internal_75ad61cb7cb00bfa43032cfb371d49245d4b6db72cdbc534e067bbfdca62b987->leave($__internal_75ad61cb7cb00bfa43032cfb371d49245d4b6db72cdbc534e067bbfdca62b987_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 88,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class=\"clearfix\">
      <div id=\"footer-widgets\">

        <div class=\"container\">

        <div id=\"footer-wrapper\">

          <div class=\"row\">
            <div class=\"col-sm-6 col-md-2\">
              <div id=\"meta-3\" class=\"widget widgetFooter widget_meta\">
              <h4 class=\"widgettitle\">Page Importante :</h4>
              <ul>
    \t\t  <li><a href=\"#\"><i class=\"fa fa-home fa-2x fa-fw\"></i> A Propos</a></li>
\t\t\t  <li><a href=\"#\"><i class=\"fa fa-cogs fa-2x fa-fw\"></i>   Projets</a></li>
\t\t\t  <li><a href=\"#\"><i class=\"fa fa-wrench fa-2x fa-fw\"></i>   Projets en cours</a></li>
\t\t\t  <li><a href=\"#\"><i class=\"fa fa-envelope fa-2x fa-fw\"></i> Contact </a></li>
             </ul>
\t\t</div>      </div> <!-- end widget1 -->

            <div class=\"col-sm-6 col-md-2\">
              \t\t<div id=\"recent-posts-3\" class=\"widget widgetFooter widget_recent_entries\">
                    <h4 class=\"widgettitle\">Réseaux sociaux :</h4>
                    <ul>
\t\t\t\t\t<li>
\t\t\t\t      <a href='#'><i class=\"fa fa-facebook fa-2x fa-fw\"></i>Facebook</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t      <a href=\"#\"><i class=\"fa fa-github fa-2x fa-fw\"></i>Github</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t      <a href=\"#\"><i class=\"fa fa-google-plus-official fa-2x fa-fw\"></i>Google Plus </a>
\t\t\t\t   </li>
\t\t\t\t   \t<li><a href='#'>
\t\t\t\t      <a href=\"#\"><i class=\"fa fa-linkedin fa-2x fa-fw\"></i>Linkedin</a>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t</div>            </div> <!-- end widget1 -->

            <div class=\"col-sm-6 col-md-4\">
              <div id=\"meta-4\" class=\"widget widgetFooter widget_meta\">
              <h4 class=\"widgettitle\">Portfolio :</h4>
\t\t\t  <blockquote>
\t\t\t\t<h5 class=\"text-muted\" >
\t\t\t\t\t<em>Bienvenue sur mon portfolio, je suis Mohcine Assou, Développeur en ingénieurie logiciels.
\t\t\t\t\tJ'ai utilisé pas mal de langage de programmation et Framework par exemple PHP, Symfony.
\t\t\t\t\tCe site est l'un de mes projets réalisé en Symfony.
\t\t\t\t\tJe travaille fréquement sur le Symfony car je le trouve intéressant, et qui répond parfaitement
\t\t\t\t\tà mes besoins.</em>
\t\t\t\t</h5>
              </blockquote>

              </div>
             </div> <!-- end widget1 -->

            <div class=\"col-sm-6 col-md-4\">
              <div id=\"search-3\" class=\"widget widgetFooter widget_search\"><h4 class=\"widgettitle\">Recherche :</h4>

                <div class=\"form-group\">
                                
                                <div class=\"input-group\">
                                  <span class=\"input-group-addon\">Mots-clés :</span>
                                  <input class=\"form-control\" placeholder=\"mots-clés ...\" type=\"text\">
                                   <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" type=\"button\">Recherche !</button>
                                  </span>
                                </div>
                              </div>

                </div>
\t\t\t <div id=\"search-3\" class=\"widget widgetFooter widget_search\"><h4 class=\"widgettitle\">Adresse :</h4>
\t\t\t\t<blockquote>
\t\t\t\t\t<h5><i class=\"fa fa-map-marker fa-2x fa-fw\"></i> Rue des docteurs charcot,42100 St Etienne, France</h5>
\t\t\t\t</blockquote>
\t
\t\t\t\t</div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id=\"sub-floor\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4 copyright\">
             massou.fr © {{ 'now'|date('Y') }} Tous droits réservés. 
            </div>
            <div class=\"col-md-4 col-md-offset-4 attribution\">
             <a target=\"_blank\" href=\"#\">Copy Right MASSOU</a>.
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer>
", "footer.html.twig", "D:\\wamp64\\www\\SiteSymfony\\portfolio\\app\\Resources\\views\\footer.html.twig");
    }
}
