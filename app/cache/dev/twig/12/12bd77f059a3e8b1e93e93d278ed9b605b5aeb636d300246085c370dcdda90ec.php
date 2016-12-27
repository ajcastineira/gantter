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
        $__internal_feab192a39a5cf7fa5c84c4b042be418806bcf87d842d181eb283c6cbf9ee1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feab192a39a5cf7fa5c84c4b042be418806bcf87d842d181eb283c6cbf9ee1d4->enter($__internal_feab192a39a5cf7fa5c84c4b042be418806bcf87d842d181eb283c6cbf9ee1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
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
              <a class=\"navbar-brand\" href=\"#\">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
              </form>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </header>
    <body>
        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
        
        $__internal_feab192a39a5cf7fa5c84c4b042be418806bcf87d842d181eb283c6cbf9ee1d4->leave($__internal_feab192a39a5cf7fa5c84c4b042be418806bcf87d842d181eb283c6cbf9ee1d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_333a4aabef61e82ea5edbb86d40f8470a6f02d9a874f67bd2f7b9d0077b00a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333a4aabef61e82ea5edbb86d40f8470a6f02d9a874f67bd2f7b9d0077b00a9a->enter($__internal_333a4aabef61e82ea5edbb86d40f8470a6f02d9a874f67bd2f7b9d0077b00a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_333a4aabef61e82ea5edbb86d40f8470a6f02d9a874f67bd2f7b9d0077b00a9a->leave($__internal_333a4aabef61e82ea5edbb86d40f8470a6f02d9a874f67bd2f7b9d0077b00a9a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a70aeca3c72c2f01aa32f0c61c6bd1c9281c6013898d752e00493e9911c74cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a70aeca3c72c2f01aa32f0c61c6bd1c9281c6013898d752e00493e9911c74cc->enter($__internal_5a70aeca3c72c2f01aa32f0c61c6bd1c9281c6013898d752e00493e9911c74cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_5a70aeca3c72c2f01aa32f0c61c6bd1c9281c6013898d752e00493e9911c74cc->leave($__internal_5a70aeca3c72c2f01aa32f0c61c6bd1c9281c6013898d752e00493e9911c74cc_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_76d41c1929912809fe72c08563f412fa389de3dd1ba20a68b34d7a8da5912e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d41c1929912809fe72c08563f412fa389de3dd1ba20a68b34d7a8da5912e3f->enter($__internal_76d41c1929912809fe72c08563f412fa389de3dd1ba20a68b34d7a8da5912e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_76d41c1929912809fe72c08563f412fa389de3dd1ba20a68b34d7a8da5912e3f->leave($__internal_76d41c1929912809fe72c08563f412fa389de3dd1ba20a68b34d7a8da5912e3f_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b3c9f57a2eebce7dae3abfafffc48d83913a930b2edc5599a156f6fba3bf4cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c9f57a2eebce7dae3abfafffc48d83913a930b2edc5599a156f6fba3bf4cd6->enter($__internal_b3c9f57a2eebce7dae3abfafffc48d83913a930b2edc5599a156f6fba3bf4cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>   
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b3c9f57a2eebce7dae3abfafffc48d83913a930b2edc5599a156f6fba3bf4cd6->leave($__internal_b3c9f57a2eebce7dae3abfafffc48d83913a930b2edc5599a156f6fba3bf4cd6_prof);

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
        return array (  169 => 73,  165 => 71,  159 => 70,  148 => 69,  139 => 8,  136 => 7,  130 => 6,  118 => 5,  109 => 75,  106 => 70,  104 => 69,  43 => 11,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\"/>
            <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
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
              <a class=\"navbar-brand\" href=\"#\">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
              </form>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                  </ul>
                </li>
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
