<?php

/* programa/index.html.twig */
class __TwigTemplate_d2c058e5ebb0452e4e4fad0fca1b6387767c46a24f8219e29add814e1a7e9bf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programa/index.html.twig", 1);
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
        $__internal_35088a9dc9678a62b61766732dc9b2afc2b96380c1050cb403a3e40b7b9a4838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35088a9dc9678a62b61766732dc9b2afc2b96380c1050cb403a3e40b7b9a4838->enter($__internal_35088a9dc9678a62b61766732dc9b2afc2b96380c1050cb403a3e40b7b9a4838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35088a9dc9678a62b61766732dc9b2afc2b96380c1050cb403a3e40b7b9a4838->leave($__internal_35088a9dc9678a62b61766732dc9b2afc2b96380c1050cb403a3e40b7b9a4838_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40c67c43bd095e089ea46c8d229843b619d19ed77e1171d0c7590841d593ef7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c67c43bd095e089ea46c8d229843b619d19ed77e1171d0c7590841d593ef7e->enter($__internal_40c67c43bd095e089ea46c8d229843b619d19ed77e1171d0c7590841d593ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Programas</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_show", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_show", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_edit", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_new");
        echo "\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>

";
        
        $__internal_40c67c43bd095e089ea46c8d229843b619d19ed77e1171d0c7590841d593ef7e->leave($__internal_40c67c43bd095e089ea46c8d229843b619d19ed77e1171d0c7590841d593ef7e_prof);

    }

    public function getTemplateName()
    {
        return "programa/index.html.twig";
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
    <h1>Programas</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for programa in programas %}
            <tr>
                <td><a href=\"{{ path('programa_show', { 'id': programa.id }) }}\">{{ programa.id }}</a></td>
                <td>{{ programa.nombre }}</td>
                <td>
                    <a href=\"{{ path('programa_show', { 'id': programa.id }) }}\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"{{ path('programa_edit', { 'id': programa.id }) }}\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('programa_new') }}\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>

{% endblock %}
", "programa/index.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/programa/index.html.twig");
    }
}
