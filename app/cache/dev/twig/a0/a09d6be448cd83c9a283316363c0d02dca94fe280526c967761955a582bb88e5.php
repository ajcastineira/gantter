<?php

/* concurso/edit.html.twig */
class __TwigTemplate_aca401af2c3077f68b75018a33b57278610642302e047b2a41fff5d1a23e5b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concurso/edit.html.twig", 1);
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
        $__internal_5140ed99333cabfb6a3c8c03e6233ebb1f0a28efc28654701f940303453b1e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140ed99333cabfb6a3c8c03e6233ebb1f0a28efc28654701f940303453b1e44->enter($__internal_5140ed99333cabfb6a3c8c03e6233ebb1f0a28efc28654701f940303453b1e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5140ed99333cabfb6a3c8c03e6233ebb1f0a28efc28654701f940303453b1e44->leave($__internal_5140ed99333cabfb6a3c8c03e6233ebb1f0a28efc28654701f940303453b1e44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c07743f4d5466d4cfb355ea724b283183f7481d6bf31813bc46fd6fb76d5aa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07743f4d5466d4cfb355ea724b283183f7481d6bf31813bc46fd6fb76d5aa3a->enter($__internal_c07743f4d5466d4cfb355ea724b283183f7481d6bf31813bc46fd6fb76d5aa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"../../js/jscolor.js\"></script>
    <h1>Editar Concurso</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary btn1\" role=\"button\" value=\"Guardar\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
        echo "\" class=\"btn btn-info btn2\" role=\"button\" >Ver Lista</a>
    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-danger btn3\" role=\"button\">
    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_c07743f4d5466d4cfb355ea724b283183f7481d6bf31813bc46fd6fb76d5aa3a->leave($__internal_c07743f4d5466d4cfb355ea724b283183f7481d6bf31813bc46fd6fb76d5aa3a_prof);

    }

    public function getTemplateName()
    {
        return "concurso/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  63 => 13,  59 => 12,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <script src=\"../../js/jscolor.js\"></script>
    <h1>Editar Concurso</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\" role=\"button\" value=\"Guardar\" />
    {{ form_end(edit_form) }}

    <a href=\"{{ path('concurso_index') }}\" class=\"btn btn-info btn2\" role=\"button\" >Ver Lista</a>
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-danger btn3\" role=\"button\">
    {{ form_end(delete_form) }}

{% endblock %}
", "concurso/edit.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/edit.html.twig");
    }
}
