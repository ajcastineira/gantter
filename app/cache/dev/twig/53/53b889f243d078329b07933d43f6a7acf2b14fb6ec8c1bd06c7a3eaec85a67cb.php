<?php

/* fondolinea/index.html.twig */
class __TwigTemplate_6596d772413b226bfe860db8b8fcefd6d6bb724f0a97faefad3f2c769f2b1aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fondolinea/index.html.twig", 1);
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
        $__internal_29bc8f0e62d474d3d29aad7ccca869dd1238ae9ecb34c3536589ba7e9ddddc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29bc8f0e62d474d3d29aad7ccca869dd1238ae9ecb34c3536589ba7e9ddddc70->enter($__internal_29bc8f0e62d474d3d29aad7ccca869dd1238ae9ecb34c3536589ba7e9ddddc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29bc8f0e62d474d3d29aad7ccca869dd1238ae9ecb34c3536589ba7e9ddddc70->leave($__internal_29bc8f0e62d474d3d29aad7ccca869dd1238ae9ecb34c3536589ba7e9ddddc70_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd2be51a9b6fc9b966d6d3ce7ae9c1f04318752e0227e0c4e692321862b6c892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2be51a9b6fc9b966d6d3ce7ae9c1f04318752e0227e0c4e692321862b6c892->enter($__internal_cd2be51a9b6fc9b966d6d3ce7ae9c1f04318752e0227e0c4e692321862b6c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fondolineas</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fondoLineas"]) ? $context["fondoLineas"] : $this->getContext($context, "fondoLineas")));
        foreach ($context['_seq'] as $context["_key"] => $context["fondoLinea"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_show", array("id" => $this->getAttribute($context["fondoLinea"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fondoLinea"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["fondoLinea"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_show", array("id" => $this->getAttribute($context["fondoLinea"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_edit", array("id" => $this->getAttribute($context["fondoLinea"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fondoLinea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_new");
        echo "\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>

";
        
        $__internal_cd2be51a9b6fc9b966d6d3ce7ae9c1f04318752e0227e0c4e692321862b6c892->leave($__internal_cd2be51a9b6fc9b966d6d3ce7ae9c1f04318752e0227e0c4e692321862b6c892_prof);

    }

    public function getTemplateName()
    {
        return "fondolinea/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 28,  85 => 25,  75 => 21,  71 => 20,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fondolineas</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fondoLinea in fondoLineas %}
            <tr>
                <td><a href=\"{{ path('fondolinea_show', { 'id': fondoLinea.id }) }}\">{{ fondoLinea.id }}</a></td>
                <td>{{ fondoLinea.nombre }}</td>
                <td>
                    <a href=\"{{ path('fondolinea_show', { 'id': fondoLinea.id }) }}\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"{{ path('fondolinea_edit', { 'id': fondoLinea.id }) }}\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('fondolinea_new') }}\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>

{% endblock %}
", "fondolinea/index.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/fondolinea/index.html.twig");
    }
}
