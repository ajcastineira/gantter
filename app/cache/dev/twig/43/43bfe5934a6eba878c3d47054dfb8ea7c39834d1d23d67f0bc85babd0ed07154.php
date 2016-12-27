<?php

/* fondolinea/new.html.twig */
class __TwigTemplate_93b9b376b82f1b5573bf6d86a4864d00080a94be13173700a97068bb58baf5cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fondolinea/new.html.twig", 1);
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
        $__internal_229721c1c77d572e5d07fdf63c6078622177608955d77b83daade071309e2bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229721c1c77d572e5d07fdf63c6078622177608955d77b83daade071309e2bc8->enter($__internal_229721c1c77d572e5d07fdf63c6078622177608955d77b83daade071309e2bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229721c1c77d572e5d07fdf63c6078622177608955d77b83daade071309e2bc8->leave($__internal_229721c1c77d572e5d07fdf63c6078622177608955d77b83daade071309e2bc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e67474681193fddfffc5baa5e5b2254c0555ae853221b5051d25c387595331a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67474681193fddfffc5baa5e5b2254c0555ae853221b5051d25c387595331a3->enter($__internal_e67474681193fddfffc5baa5e5b2254c0555ae853221b5051d25c387595331a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Fondo o Linea</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_index");
        echo "\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
";
        
        $__internal_e67474681193fddfffc5baa5e5b2254c0555ae853221b5051d25c387595331a3->leave($__internal_e67474681193fddfffc5baa5e5b2254c0555ae853221b5051d25c387595331a3_prof);

    }

    public function getTemplateName()
    {
        return "fondolinea/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Crear Fondo o Linea</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    {{ form_end(form) }}

    <a href=\"{{ path('application_index') }}\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
{% endblock %}
", "fondolinea/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/fondolinea/new.html.twig");
    }
}
