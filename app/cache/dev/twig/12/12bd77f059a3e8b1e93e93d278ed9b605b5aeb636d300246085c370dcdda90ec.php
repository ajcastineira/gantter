<?php

/* base.html.twig */
class __TwigTemplate_7b49eff814dc27a54b50b7d9b396fedf64edbd17d98b32ab8d129e70224aab16 extends Twig_Template
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
        $__internal_ac9e5c5fe70e128c59456d762db635c13d47125c374578a4f9f2ca203e0e6cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9e5c5fe70e128c59456d762db635c13d47125c374578a4f9f2ca203e0e6cdc->enter($__internal_ac9e5c5fe70e128c59456d762db635c13d47125c374578a4f9f2ca203e0e6cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"http://ipre.investigacion.ing.uc.cl/wp-content/uploads/2016/09/cropped-UC-favicon-1-1-32x32.png\" />
    </head>
    <header>
        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Gantter</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Agencias<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_new");
            echo "\">Nueva</a></li>
                      <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Programas<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_new");
            echo "\">Nuevo</a></li>
                      <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Fondos o Lineas<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_new");
            echo "\">Nuevo</a></li>
                      <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Concursos<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_new");
            echo "\">Nuevo</a></li>
                      <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                ";
        }
        // line 59
        echo "              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <body>
        ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </body>
</html>
";
        
        $__internal_ac9e5c5fe70e128c59456d762db635c13d47125c374578a4f9f2ca203e0e6cdc->leave($__internal_ac9e5c5fe70e128c59456d762db635c13d47125c374578a4f9f2ca203e0e6cdc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77d9968883ada4b0e8dffc4ac9f8b5269807eb9aca6b54276ecee226f8cdb54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d9968883ada4b0e8dffc4ac9f8b5269807eb9aca6b54276ecee226f8cdb54f->enter($__internal_77d9968883ada4b0e8dffc4ac9f8b5269807eb9aca6b54276ecee226f8cdb54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gantter!";
        
        $__internal_77d9968883ada4b0e8dffc4ac9f8b5269807eb9aca6b54276ecee226f8cdb54f->leave($__internal_77d9968883ada4b0e8dffc4ac9f8b5269807eb9aca6b54276ecee226f8cdb54f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f68624dd00fc53f780bbdcedf86a19d61cc6e448c9a5714ac4e01b14cc8ce4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f68624dd00fc53f780bbdcedf86a19d61cc6e448c9a5714ac4e01b14cc8ce4b->enter($__internal_6f68624dd00fc53f780bbdcedf86a19d61cc6e448c9a5714ac4e01b14cc8ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_6f68624dd00fc53f780bbdcedf86a19d61cc6e448c9a5714ac4e01b14cc8ce4b->leave($__internal_6f68624dd00fc53f780bbdcedf86a19d61cc6e448c9a5714ac4e01b14cc8ce4b_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1af86ce124f81d19e2f972b7eca917be8cf292ceb0caedcace05520ae8ec5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1af86ce124f81d19e2f972b7eca917be8cf292ceb0caedcace05520ae8ec5e->enter($__internal_3b1af86ce124f81d19e2f972b7eca917be8cf292ceb0caedcace05520ae8ec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b1af86ce124f81d19e2f972b7eca917be8cf292ceb0caedcace05520ae8ec5e->leave($__internal_3b1af86ce124f81d19e2f972b7eca917be8cf292ceb0caedcace05520ae8ec5e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_530db862571b8360c962f05acdf1d8fca76494e60f4119a2b0ded7a31619ce02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530db862571b8360c962f05acdf1d8fca76494e60f4119a2b0ded7a31619ce02->enter($__internal_530db862571b8360c962f05acdf1d8fca76494e60f4119a2b0ded7a31619ce02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>   
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_530db862571b8360c962f05acdf1d8fca76494e60f4119a2b0ded7a31619ce02->leave($__internal_530db862571b8360c962f05acdf1d8fca76494e60f4119a2b0ded7a31619ce02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 69,  185 => 67,  179 => 66,  168 => 65,  159 => 8,  156 => 7,  150 => 6,  138 => 5,  129 => 71,  126 => 66,  124 => 65,  116 => 59,  109 => 55,  105 => 54,  96 => 48,  92 => 47,  83 => 41,  79 => 40,  70 => 34,  66 => 33,  61 => 30,  59 => 29,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Gantter!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"http://ipre.investigacion.ing.uc.cl/wp-content/uploads/2016/09/cropped-UC-favicon-1-1-32x32.png\" />
    </head>
    <header>
        <nav class=\"navbar navbar-default\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">Gantter</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                {% if is_granted('ROLE_ADMIN')%}
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Agencias<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"{{path('agencia_new')}}\">Nueva</a></li>
                      <li><a href=\"{{path('agencia_index')}}\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Programas<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"{{path('programa_new')}}\">Nuevo</a></li>
                      <li><a href=\"{{path('programa_index')}}\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Fondos o Lineas<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"{{path('fondolinea_new')}}\">Nuevo</a></li>
                      <li><a href=\"{{path('fondolinea_index')}}\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Concursos<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"{{path('concurso_new')}}\">Nuevo</a></li>
                      <li><a href=\"{{path('concurso_index')}}\">Ver Listado</a></li>
                    </ul>
                  </li>
                {% endif %}
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>   
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/base.html.twig");
    }
}
