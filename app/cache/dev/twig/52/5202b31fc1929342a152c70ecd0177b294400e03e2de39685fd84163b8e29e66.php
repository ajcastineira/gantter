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
        $__internal_579eb4fb4139a2fb2cdde028dd4ad4b39923a1a9d06495072076e478e59afd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579eb4fb4139a2fb2cdde028dd4ad4b39923a1a9d06495072076e478e59afd19->enter($__internal_579eb4fb4139a2fb2cdde028dd4ad4b39923a1a9d06495072076e478e59afd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579eb4fb4139a2fb2cdde028dd4ad4b39923a1a9d06495072076e478e59afd19->leave($__internal_579eb4fb4139a2fb2cdde028dd4ad4b39923a1a9d06495072076e478e59afd19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_efdb395a9e6dc394a577b754b703d5a374a7f05ea5b4efc853ee5f9accdfc156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdb395a9e6dc394a577b754b703d5a374a7f05ea5b4efc853ee5f9accdfc156->enter($__internal_efdb395a9e6dc394a577b754b703d5a374a7f05ea5b4efc853ee5f9accdfc156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"../js/jscolor.js\"></script>
    <h1>Crear Concurso</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_index");
        echo "\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
    
";
        
        $__internal_efdb395a9e6dc394a577b754b703d5a374a7f05ea5b4efc853ee5f9accdfc156->leave($__internal_efdb395a9e6dc394a577b754b703d5a374a7f05ea5b4efc853ee5f9accdfc156_prof);

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
        return array (  59 => 12,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    {{ form_end(form) }}

    <a href=\"{{ path('application_index') }}\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
    
{% endblock %}
", "concurso/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/new.html.twig");
    }
}
