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
        $__internal_aec1d4738d8ba8ba403a0a96f77fb60853445fe2119f7a056d507626a17f74a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec1d4738d8ba8ba403a0a96f77fb60853445fe2119f7a056d507626a17f74a6->enter($__internal_aec1d4738d8ba8ba403a0a96f77fb60853445fe2119f7a056d507626a17f74a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <body>
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "    </body>
</html>
";
        
        $__internal_aec1d4738d8ba8ba403a0a96f77fb60853445fe2119f7a056d507626a17f74a6->leave($__internal_aec1d4738d8ba8ba403a0a96f77fb60853445fe2119f7a056d507626a17f74a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_460317893f385739a884ed70b7d6b4648c39e50a0a159374695c718bd819dfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460317893f385739a884ed70b7d6b4648c39e50a0a159374695c718bd819dfbf->enter($__internal_460317893f385739a884ed70b7d6b4648c39e50a0a159374695c718bd819dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gantter!";
        
        $__internal_460317893f385739a884ed70b7d6b4648c39e50a0a159374695c718bd819dfbf->leave($__internal_460317893f385739a884ed70b7d6b4648c39e50a0a159374695c718bd819dfbf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_958212bbd6ed32de2afb336459944cf531e7973a5ea522f029917340373bb3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958212bbd6ed32de2afb336459944cf531e7973a5ea522f029917340373bb3c3->enter($__internal_958212bbd6ed32de2afb336459944cf531e7973a5ea522f029917340373bb3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_958212bbd6ed32de2afb336459944cf531e7973a5ea522f029917340373bb3c3->leave($__internal_958212bbd6ed32de2afb336459944cf531e7973a5ea522f029917340373bb3c3_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_8de4b771aa53de456bc72f8d3409a61d23806ca08937f2999da5da5d35051c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de4b771aa53de456bc72f8d3409a61d23806ca08937f2999da5da5d35051c0d->enter($__internal_8de4b771aa53de456bc72f8d3409a61d23806ca08937f2999da5da5d35051c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8de4b771aa53de456bc72f8d3409a61d23806ca08937f2999da5da5d35051c0d->leave($__internal_8de4b771aa53de456bc72f8d3409a61d23806ca08937f2999da5da5d35051c0d_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b292ca1bf83567d7e8e4fcf98e2c3b7b829409a271588c084bbe87fc9bc782c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b292ca1bf83567d7e8e4fcf98e2c3b7b829409a271588c084bbe87fc9bc782c3->enter($__internal_b292ca1bf83567d7e8e4fcf98e2c3b7b829409a271588c084bbe87fc9bc782c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b292ca1bf83567d7e8e4fcf98e2c3b7b829409a271588c084bbe87fc9bc782c3->leave($__internal_b292ca1bf83567d7e8e4fcf98e2c3b7b829409a271588c084bbe87fc9bc782c3_prof);

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
        return array (  190 => 70,  186 => 68,  180 => 67,  169 => 66,  160 => 9,  156 => 7,  150 => 6,  138 => 5,  129 => 72,  126 => 67,  124 => 66,  116 => 60,  109 => 56,  105 => 55,  96 => 49,  92 => 48,  83 => 42,  79 => 41,  70 => 35,  66 => 34,  61 => 31,  59 => 30,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
