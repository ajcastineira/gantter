<?php

/* programa/new.html.twig */
class __TwigTemplate_3fa5bdc0b14b55f248781a1cd008449ec142832bb95069312020d20f7833e7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programa/new.html.twig", 1);
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
        $__internal_c3265848b969c48b6ef3f6bb18b7a30dff1613940c9ee72e8f91ba3dce3cc343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3265848b969c48b6ef3f6bb18b7a30dff1613940c9ee72e8f91ba3dce3cc343->enter($__internal_c3265848b969c48b6ef3f6bb18b7a30dff1613940c9ee72e8f91ba3dce3cc343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3265848b969c48b6ef3f6bb18b7a30dff1613940c9ee72e8f91ba3dce3cc343->leave($__internal_c3265848b969c48b6ef3f6bb18b7a30dff1613940c9ee72e8f91ba3dce3cc343_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c0d3483a570cceabb9330ff1362e062631ab215821572f291f9f8f684706ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0d3483a570cceabb9330ff1362e062631ab215821572f291f9f8f684706ddd->enter($__internal_1c0d3483a570cceabb9330ff1362e062631ab215821572f291f9f8f684706ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Programa creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1c0d3483a570cceabb9330ff1362e062631ab215821572f291f9f8f684706ddd->leave($__internal_1c0d3483a570cceabb9330ff1362e062631ab215821572f291f9f8f684706ddd_prof);

    }

    public function getTemplateName()
    {
        return "programa/new.html.twig";
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
    <h1>Programa creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('programa_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "programa/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/programa/new.html.twig");
    }
}
