<?php

/* concurso/index.html.twig */
class __TwigTemplate_325303047e166ab59e85809c9bcb69b586a1d1c67a5e7425c639955e559df7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concurso/index.html.twig", 1);
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
        $__internal_18f6df6585b4a50988dfd0fcce5aaccd8bc96c0897cd97e3cf230ac956fae965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f6df6585b4a50988dfd0fcce5aaccd8bc96c0897cd97e3cf230ac956fae965->enter($__internal_18f6df6585b4a50988dfd0fcce5aaccd8bc96c0897cd97e3cf230ac956fae965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18f6df6585b4a50988dfd0fcce5aaccd8bc96c0897cd97e3cf230ac956fae965->leave($__internal_18f6df6585b4a50988dfd0fcce5aaccd8bc96c0897cd97e3cf230ac956fae965_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12b20e3a6ce26fb56f548b6c843b9ad06377d6cc74f771bcdb316bfee4c7acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b20e3a6ce26fb56f548b6c843b9ad06377d6cc74f771bcdb316bfee4c7acdc->enter($__internal_12b20e3a6ce26fb56f548b6c843b9ad06377d6cc74f771bcdb316bfee4c7acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Concursos</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fechainicio</th>
                <th>Fechafinal</th>
                <th>Nombre</th>
                <th>Link</th>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["concursos"]) ? $context["concursos"] : $this->getContext($context, "concursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["concurso"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_show", array("id" => $this->getAttribute($context["concurso"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "fechaInicio", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["concurso"], "fechaFinal", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "fechaFinal", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "color", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_show", array("id" => $this->getAttribute($context["concurso"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_edit", array("id" => $this->getAttribute($context["concurso"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concurso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_new");
        echo "\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>
";
        
        $__internal_12b20e3a6ce26fb56f548b6c843b9ad06377d6cc74f771bcdb316bfee4c7acdc->leave($__internal_12b20e3a6ce26fb56f548b6c843b9ad06377d6cc74f771bcdb316bfee4c7acdc_prof);

    }

    public function getTemplateName()
    {
        return "concurso/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  112 => 35,  102 => 31,  98 => 30,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Concursos</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fechainicio</th>
                <th>Fechafinal</th>
                <th>Nombre</th>
                <th>Link</th>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for concurso in concursos %}
            <tr>
                <td><a href=\"{{ path('concurso_show', { 'id': concurso.id }) }}\">{{ concurso.id }}</a></td>
                <td>{{ concurso.fechaInicio|date('d-m-Y H:i:s') }}</td>
                <td>{% if concurso.fechaFinal %}{{ concurso.fechaFinal|date('d-m-Y H:i:s') }}{% endif %}</td>
                <td>{{ concurso.nombre }}</td>
                <td>{{ concurso.link }}</td>
                <td>{{ concurso.descripcion }}</td>
                <td>{{ concurso.color }}</td>
                <td>
                    <a href=\"{{ path('concurso_show', { 'id': concurso.id }) }}\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"{{ path('concurso_edit', { 'id': concurso.id }) }}\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('concurso_new') }}\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>
{% endblock %}
", "concurso/index.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/index.html.twig");
    }
}
