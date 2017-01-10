<?php

/* concurso/new.html.twig */
class __TwigTemplate_4f1ad8f0f24a539e30d81dd524e65fa78e45fd8188efbd8ad9e1fd0736e109ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concurso/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bfb8b88e18db1086c98cb91ca307c07bd82b807b11a9103306e7507bc1e0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bfb8b88e18db1086c98cb91ca307c07bd82b807b11a9103306e7507bc1e0b4->enter($__internal_d8bfb8b88e18db1086c98cb91ca307c07bd82b807b11a9103306e7507bc1e0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bfb8b88e18db1086c98cb91ca307c07bd82b807b11a9103306e7507bc1e0b4->leave($__internal_d8bfb8b88e18db1086c98cb91ca307c07bd82b807b11a9103306e7507bc1e0b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50c46af10ca8b3f315618dc6ba9d3844f804dbf9e58beaf1af785a7dfacf1b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c46af10ca8b3f315618dc6ba9d3844f804dbf9e58beaf1af785a7dfacf1b26->enter($__internal_50c46af10ca8b3f315618dc6ba9d3844f804dbf9e58beaf1af785a7dfacf1b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"../js/jscolor.js\"></script>
    <h1>Crear Concurso</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaInicio", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaFinal", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fondolinea", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hitos", array()), 'label');
        echo "
        <ul class=\"hitos\" data-prototype=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hitos", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
        \t
\t\t</ul>
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Crear\" />
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
        echo "\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
    


    <script type=\"text/javascript\">
    \tvar \$collectionHolder;

\t\t// setup an \"add a tag\" link
\t\tvar \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Agregar un Hito</a>');
\t\tvar \$newLinkLi = \$('<div></div>').append(\$addTagLink);

\t\tjQuery(document).ready(function() {
\t\t    // Get the ul that holds the collection of hitos
\t\t    \$collectionHolder = \$('ul.hitos');

\t\t    // add the \"add a tag\" anchor and li to the hitos ul
\t\t    \$collectionHolder.append(\$newLinkLi);

\t\t    // count the current form inputs we have (e.g. 2), use that as the new
\t\t    // index when inserting a new item (e.g. 2)
\t\t    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

\t\t    \$addTagLink.on('click', function(e) {
\t\t        // prevent the link from creating a \"#\" on the URL
\t\t        e.preventDefault();

\t\t        // add a new tag form (see next code block)
\t\t        addTagForm(\$collectionHolder, \$newLinkLi);
\t\t    });

\t\t    \$('#ganttbundle_concurso_hitos').parent().hide();
\t\t});

\t\tfunction addTagForm(\$collectionHolder, \$newLinkLi) {
\t\t    // Get the data-prototype explained earlier
\t\t    var prototype = \$collectionHolder.data('prototype');

\t\t    // get the new index
\t\t    var index = \$collectionHolder.data('index');

\t\t    // Replace '__name__' in the prototype's HTML to
\t\t    // instead be a number based on how many items we have
\t\t    var newForm = prototype.replace(/__name__/g, index);

\t\t    // increase the index with one for the next item
\t\t    \$collectionHolder.data('index', index + 1);

\t\t    // Display the form in the page in an li, before the \"Add a tag\" link li
\t\t    var \$newFormLi = \$('<div class=\"panel panel-default\" style=\"padding: 10px 20px 20px 20px;\"></div>').append(newForm);
\t\t    \$newLinkLi.before(\$newFormLi);
\t\t}
\t</script>

";
        
        $__internal_50c46af10ca8b3f315618dc6ba9d3844f804dbf9e58beaf1af785a7dfacf1b26->leave($__internal_50c46af10ca8b3f315618dc6ba9d3844f804dbf9e58beaf1af785a7dfacf1b26_prof);

    }

    public function getTemplateName()
    {
        return "concurso/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  88 => 20,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <script src=\"../js/jscolor.js\"></script>
    <h1>Crear Concurso</h1>

    {{ form_start(form) }}
        {{ form_row(form.nombre) }}
        {{ form_row(form.fechaInicio) }}
        {{ form_row(form.fechaFinal) }}
        {{ form_row(form.descripcion) }}
        {{ form_row(form.link) }}
        {{ form_row(form.color) }}
        {{ form_row(form.fondolinea) }}
        {{ form_label(form.hitos) }}
        <ul class=\"hitos\" data-prototype=\"{{ form_widget(form.hitos.vars.prototype)|e('html_attr') }}\">
        \t
\t\t</ul>
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Crear\" />
    {{ form_end(form) }}

    <a href=\"{{ path('concurso_index') }}\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
    


    <script type=\"text/javascript\">
    \tvar \$collectionHolder;

\t\t// setup an \"add a tag\" link
\t\tvar \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link\">Agregar un Hito</a>');
\t\tvar \$newLinkLi = \$('<div></div>').append(\$addTagLink);

\t\tjQuery(document).ready(function() {
\t\t    // Get the ul that holds the collection of hitos
\t\t    \$collectionHolder = \$('ul.hitos');

\t\t    // add the \"add a tag\" anchor and li to the hitos ul
\t\t    \$collectionHolder.append(\$newLinkLi);

\t\t    // count the current form inputs we have (e.g. 2), use that as the new
\t\t    // index when inserting a new item (e.g. 2)
\t\t    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

\t\t    \$addTagLink.on('click', function(e) {
\t\t        // prevent the link from creating a \"#\" on the URL
\t\t        e.preventDefault();

\t\t        // add a new tag form (see next code block)
\t\t        addTagForm(\$collectionHolder, \$newLinkLi);
\t\t    });

\t\t    \$('#ganttbundle_concurso_hitos').parent().hide();
\t\t});

\t\tfunction addTagForm(\$collectionHolder, \$newLinkLi) {
\t\t    // Get the data-prototype explained earlier
\t\t    var prototype = \$collectionHolder.data('prototype');

\t\t    // get the new index
\t\t    var index = \$collectionHolder.data('index');

\t\t    // Replace '__name__' in the prototype's HTML to
\t\t    // instead be a number based on how many items we have
\t\t    var newForm = prototype.replace(/__name__/g, index);

\t\t    // increase the index with one for the next item
\t\t    \$collectionHolder.data('index', index + 1);

\t\t    // Display the form in the page in an li, before the \"Add a tag\" link li
\t\t    var \$newFormLi = \$('<div class=\"panel panel-default\" style=\"padding: 10px 20px 20px 20px;\"></div>').append(newForm);
\t\t    \$newLinkLi.before(\$newFormLi);
\t\t}
\t</script>

{% endblock %}
", "concurso/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/new.html.twig");
    }
}
