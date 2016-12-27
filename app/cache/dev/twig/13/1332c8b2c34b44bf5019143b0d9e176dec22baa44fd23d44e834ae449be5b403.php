<?php

/* programa/edit.html.twig */
class __TwigTemplate_fc46f9a92e8cdc4df760d219e1e9fba997cbcbd6859c3776142da8a6de09fc23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programa/edit.html.twig", 1);
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
        $__internal_a9cf6b3667a6ee9bab2906b296532784ac234348f79d51b2880cfd6d51171e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9cf6b3667a6ee9bab2906b296532784ac234348f79d51b2880cfd6d51171e62->enter($__internal_a9cf6b3667a6ee9bab2906b296532784ac234348f79d51b2880cfd6d51171e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9cf6b3667a6ee9bab2906b296532784ac234348f79d51b2880cfd6d51171e62->leave($__internal_a9cf6b3667a6ee9bab2906b296532784ac234348f79d51b2880cfd6d51171e62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e59af3267e48a221ebd67f32d22f6dc1c86f5550ec8e2ec9014b9a7d9740f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e59af3267e48a221ebd67f32d22f6dc1c86f5550ec8e2ec9014b9a7d9740f2->enter($__internal_55e59af3267e48a221ebd67f32d22f6dc1c86f5550ec8e2ec9014b9a7d9740f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Programa</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_index");
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
        
        $__internal_55e59af3267e48a221ebd67f32d22f6dc1c86f5550ec8e2ec9014b9a7d9740f2->leave($__internal_55e59af3267e48a221ebd67f32d22f6dc1c86f5550ec8e2ec9014b9a7d9740f2_prof);

    }

    public function getTemplateName()
    {
        return "programa/edit.html.twig";
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
    <h1>Editar Programa</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\" role=\"button\" value=\"Guardar\" />
    {{ form_end(edit_form) }}

    <a href=\"{{ path('programa_index') }}\" class=\"btn btn-info btn2\" role=\"button\" >Ver Lista</a>
    {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Eliminar\" class=\"btn btn-danger btn3\" role=\"button\">
    {{ form_end(delete_form) }}
{% endblock %}
", "programa/edit.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/programa/edit.html.twig");
    }
}
