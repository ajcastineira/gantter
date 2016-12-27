<?php

/* agencia/edit.html.twig */
class __TwigTemplate_115db1bf855ef2368ebdfc77d93655495decf03aedc8cb71435fd27dba2140e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agencia/edit.html.twig", 1);
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
        $__internal_060a1eab39cc94fc95f91e1cc470e7f33a4058c43887c383a8d6691fc83b0e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060a1eab39cc94fc95f91e1cc470e7f33a4058c43887c383a8d6691fc83b0e65->enter($__internal_060a1eab39cc94fc95f91e1cc470e7f33a4058c43887c383a8d6691fc83b0e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060a1eab39cc94fc95f91e1cc470e7f33a4058c43887c383a8d6691fc83b0e65->leave($__internal_060a1eab39cc94fc95f91e1cc470e7f33a4058c43887c383a8d6691fc83b0e65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b8ab5ef8fcb83f6c57c3960fc0fccbaea599b67fae55b84694c32356ea1a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b8ab5ef8fcb83f6c57c3960fc0fccbaea599b67fae55b84694c32356ea1a6c->enter($__internal_36b8ab5ef8fcb83f6c57c3960fc0fccbaea599b67fae55b84694c32356ea1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Agencia</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_index");
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
        
        $__internal_36b8ab5ef8fcb83f6c57c3960fc0fccbaea599b67fae55b84694c32356ea1a6c->leave($__internal_36b8ab5ef8fcb83f6c57c3960fc0fccbaea599b67fae55b84694c32356ea1a6c_prof);

    }

    public function getTemplateName()
    {
        return "agencia/edit.html.twig";
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
    <h1>Editar Agencia</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\" role=\"button\" value=\"Guardar\" />
    {{ form_end(edit_form) }}

    <a href=\"{{ path('agencia_index') }}\" class=\"btn btn-info btn2\" role=\"button\" >Ver Lista</a>
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-danger btn3\" role=\"button\">
    {{ form_end(delete_form) }}

{% endblock %}
", "agencia/edit.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/agencia/edit.html.twig");
    }
}
