<?php

/* hito/new.html.twig */
class __TwigTemplate_ee44b9ab6c317af5faf8e71c63d16665dbfdb708f28162c1974288203b569717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hito/new.html.twig", 1);
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
        $__internal_e073dc40aca4c340099ecc3a46dc7f7b2334ca99b192e939e7128b2beb475b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e073dc40aca4c340099ecc3a46dc7f7b2334ca99b192e939e7128b2beb475b43->enter($__internal_e073dc40aca4c340099ecc3a46dc7f7b2334ca99b192e939e7128b2beb475b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hito/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e073dc40aca4c340099ecc3a46dc7f7b2334ca99b192e939e7128b2beb475b43->leave($__internal_e073dc40aca4c340099ecc3a46dc7f7b2334ca99b192e939e7128b2beb475b43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98c937978bb54f38e61664df3e0683e3910fa8c296e8573257d3973e46e73f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c937978bb54f38e61664df3e0683e3910fa8c296e8573257d3973e46e73f21->enter($__internal_98c937978bb54f38e61664df3e0683e3910fa8c296e8573257d3973e46e73f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hito creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("hito_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_98c937978bb54f38e61664df3e0683e3910fa8c296e8573257d3973e46e73f21->leave($__internal_98c937978bb54f38e61664df3e0683e3910fa8c296e8573257d3973e46e73f21_prof);

    }

    public function getTemplateName()
    {
        return "hito/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Hito creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('hito_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "hito/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/hito/new.html.twig");
    }
}
