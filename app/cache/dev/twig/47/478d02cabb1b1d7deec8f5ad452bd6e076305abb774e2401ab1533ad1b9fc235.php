<?php

/* fondolinea/edit.html.twig */
class __TwigTemplate_11afa126000c0cceea0129a88aa748b0ac6069430a31e509c145aa2d7e74b5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fondolinea/edit.html.twig", 1);
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
        $__internal_c7299ee2221ffdbf50509e21638627f6b995a587494111cc8976ea56cf480eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7299ee2221ffdbf50509e21638627f6b995a587494111cc8976ea56cf480eae->enter($__internal_c7299ee2221ffdbf50509e21638627f6b995a587494111cc8976ea56cf480eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7299ee2221ffdbf50509e21638627f6b995a587494111cc8976ea56cf480eae->leave($__internal_c7299ee2221ffdbf50509e21638627f6b995a587494111cc8976ea56cf480eae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39376fc9d9ff3f22ed779f4437f8cb2d2ffcaf9a14140eb84bf2d9d53bcff711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39376fc9d9ff3f22ed779f4437f8cb2d2ffcaf9a14140eb84bf2d9d53bcff711->enter($__internal_39376fc9d9ff3f22ed779f4437f8cb2d2ffcaf9a14140eb84bf2d9d53bcff711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Fondo o Linea</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary btn1\" role=\"button\" value=\"Guardar\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_index");
        echo "\" class=\"btn btn-info btn2\" role=\"button\" >Ver Lista</a>
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-danger btn3\" role=\"button\">
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_39376fc9d9ff3f22ed779f4437f8cb2d2ffcaf9a14140eb84bf2d9d53bcff711->leave($__internal_39376fc9d9ff3f22ed779f4437f8cb2d2ffcaf9a14140eb84bf2d9d53bcff711_prof);

    }

    public function getTemplateName()
    {
        return "fondolinea/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  62 => 12,  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Editar Fondo o Linea</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\" role=\"button\" value=\"Guardar\" />
    {{ form_end(edit_form) }}

    <a href=\"{{ path('fondolinea_index') }}\" class=\"btn btn-info btn2\" role=\"button\" >Ver Lista</a>
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-danger btn3\" role=\"button\">
    {{ form_end(delete_form) }}
{% endblock %}
", "fondolinea/edit.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/fondolinea/edit.html.twig");
    }
}
