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
        $__internal_a937915a640fcc4cb943d2cbf27b07cf94843d772d0e53e6742dafeaa7463171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a937915a640fcc4cb943d2cbf27b07cf94843d772d0e53e6742dafeaa7463171->enter($__internal_a937915a640fcc4cb943d2cbf27b07cf94843d772d0e53e6742dafeaa7463171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
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
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Agencias<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_new");
            echo "\">Nueva</a></li>
                      <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Programas<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_new");
            echo "\">Nuevo</a></li>
                      <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Fondos o Lineas<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_new");
            echo "\">Nuevo</a></li>
                      <li><a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Concursos<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_new");
            echo "\">Nuevo</a></li>
                      <li><a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
            echo "\">Ver Listado</a></li>
                    </ul>
                  </li>
                ";
        }
        // line 60
        echo "              </ul>

              <ul class=\"nav navbar-nav navbar-right\">

                    ";
        // line 64
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(array(0 => "IS_AUTHENTICATED_FULLY", 1 => "IS_AUTHENTICATED_REMEMBERED"))) {
            // line 65
            echo "                      <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Cerrar Sesión</a></li>
                    ";
        } else {
            // line 67
            echo "                      <li><a href=\"/login\">Iniciar Sesión</a></li>
                    ";
        }
        // line 69
        echo "                  </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <body>
        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
        
        $__internal_a937915a640fcc4cb943d2cbf27b07cf94843d772d0e53e6742dafeaa7463171->leave($__internal_a937915a640fcc4cb943d2cbf27b07cf94843d772d0e53e6742dafeaa7463171_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ec79d42918e9c13b7dc467fd00581a31de491cc5c49cce51ad80ca7269ace6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec79d42918e9c13b7dc467fd00581a31de491cc5c49cce51ad80ca7269ace6->enter($__internal_a3ec79d42918e9c13b7dc467fd00581a31de491cc5c49cce51ad80ca7269ace6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gantter!";
        
        $__internal_a3ec79d42918e9c13b7dc467fd00581a31de491cc5c49cce51ad80ca7269ace6->leave($__internal_a3ec79d42918e9c13b7dc467fd00581a31de491cc5c49cce51ad80ca7269ace6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20460c5f44da6980aedd1f46fc399550891dd636c134ba71894f17aa5fe22de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20460c5f44da6980aedd1f46fc399550891dd636c134ba71894f17aa5fe22de2->enter($__internal_20460c5f44da6980aedd1f46fc399550891dd636c134ba71894f17aa5fe22de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_20460c5f44da6980aedd1f46fc399550891dd636c134ba71894f17aa5fe22de2->leave($__internal_20460c5f44da6980aedd1f46fc399550891dd636c134ba71894f17aa5fe22de2_prof);

    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        $__internal_5068295b118039bb470637395166acf8f292b5d0edd8df86ecc427be4d8ecad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5068295b118039bb470637395166acf8f292b5d0edd8df86ecc427be4d8ecad0->enter($__internal_5068295b118039bb470637395166acf8f292b5d0edd8df86ecc427be4d8ecad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5068295b118039bb470637395166acf8f292b5d0edd8df86ecc427be4d8ecad0->leave($__internal_5068295b118039bb470637395166acf8f292b5d0edd8df86ecc427be4d8ecad0_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_244c4da373d40f0e70adde342f2591ec8c75c7c88a3fa9c990353a189109df3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244c4da373d40f0e70adde342f2591ec8c75c7c88a3fa9c990353a189109df3d->enter($__internal_244c4da373d40f0e70adde342f2591ec8c75c7c88a3fa9c990353a189109df3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_244c4da373d40f0e70adde342f2591ec8c75c7c88a3fa9c990353a189109df3d->leave($__internal_244c4da373d40f0e70adde342f2591ec8c75c7c88a3fa9c990353a189109df3d_prof);

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
        return array (  209 => 80,  205 => 78,  199 => 77,  188 => 76,  179 => 9,  175 => 7,  169 => 6,  157 => 5,  148 => 82,  145 => 77,  143 => 76,  134 => 69,  130 => 67,  124 => 65,  122 => 64,  116 => 60,  109 => 56,  105 => 55,  96 => 49,  92 => 48,  83 => 42,  79 => 41,  70 => 35,  66 => 34,  61 => 31,  59 => 30,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
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

              <ul class=\"nav navbar-nav navbar-right\">

                    {% if is_granted(['IS_AUTHENTICATED_FULLY', 'IS_AUTHENTICATED_REMEMBERED']) %}
                      <li><a href=\"{{path('logout')}}\">Cerrar Sesión</a></li>
                    {% else %}
                      <li><a href=\"/login\">Iniciar Sesión</a></li>
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
