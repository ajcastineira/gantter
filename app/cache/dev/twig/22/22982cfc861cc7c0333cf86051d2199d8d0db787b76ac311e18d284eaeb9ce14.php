<?php

/* agencia/new.html.twig */
class __TwigTemplate_273cef141cc346a3ebe612ec52c1c76e1eae4867a31f051548bb51943bf3b5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agencia/new.html.twig", 1);
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
        $__internal_82fc123c29320fb7557f047f1612b9c344f923455e09c800a097b4059ddeb1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fc123c29320fb7557f047f1612b9c344f923455e09c800a097b4059ddeb1ac->enter($__internal_82fc123c29320fb7557f047f1612b9c344f923455e09c800a097b4059ddeb1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82fc123c29320fb7557f047f1612b9c344f923455e09c800a097b4059ddeb1ac->leave($__internal_82fc123c29320fb7557f047f1612b9c344f923455e09c800a097b4059ddeb1ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dd26e25bf58237e9ea29b34d55c4889097916dccdd6a750848e30b58fcc9340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd26e25bf58237e9ea29b34d55c4889097916dccdd6a750848e30b58fcc9340->enter($__internal_2dd26e25bf58237e9ea29b34d55c4889097916dccdd6a750848e30b58fcc9340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Agencia</h1>

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
        
        $__internal_2dd26e25bf58237e9ea29b34d55c4889097916dccdd6a750848e30b58fcc9340->leave($__internal_2dd26e25bf58237e9ea29b34d55c4889097916dccdd6a750848e30b58fcc9340_prof);

    }

    public function getTemplateName()
    {
        return "agencia/new.html.twig";
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
    <h1>Crear Agencia</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    {{ form_end(form) }}

    <a href=\"{{ path('application_index') }}\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
{% endblock %}
", "agencia/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/agencia/new.html.twig");
    }
}
