<?php

/* agencia/index.html.twig */
class __TwigTemplate_86342ba952c07cd080a1744e0ae904a329dd0dffbb24c9785e8193dc7bda844f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agencia/index.html.twig", 1);
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
        $__internal_76fe0434eca12d0e9c225af1d2ab974436e05fe92fbecde2416fa1e594ab3866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fe0434eca12d0e9c225af1d2ab974436e05fe92fbecde2416fa1e594ab3866->enter($__internal_76fe0434eca12d0e9c225af1d2ab974436e05fe92fbecde2416fa1e594ab3866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76fe0434eca12d0e9c225af1d2ab974436e05fe92fbecde2416fa1e594ab3866->leave($__internal_76fe0434eca12d0e9c225af1d2ab974436e05fe92fbecde2416fa1e594ab3866_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ed26622a819389c0534f9a89b8c2531bb2f09dc52f17caac97a1a46cd3bf3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed26622a819389c0534f9a89b8c2531bb2f09dc52f17caac97a1a46cd3bf3a8->enter($__internal_9ed26622a819389c0534f9a89b8c2531bb2f09dc52f17caac97a1a46cd3bf3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agencias</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["agencias"]) ? $context["agencias"] : $this->getContext($context, "agencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["agencia"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_show", array("id" => $this->getAttribute($context["agencia"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agencia"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["agencia"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_show", array("id" => $this->getAttribute($context["agencia"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_edit", array("id" => $this->getAttribute($context["agencia"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_new");
        echo "\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>
";
        
        $__internal_9ed26622a819389c0534f9a89b8c2531bb2f09dc52f17caac97a1a46cd3bf3a8->leave($__internal_9ed26622a819389c0534f9a89b8c2531bb2f09dc52f17caac97a1a46cd3bf3a8_prof);

    }

    public function getTemplateName()
    {
        return "agencia/index.html.twig";
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
    <h1>Agencias</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for agencia in agencias %}
            <tr>
                <td><a href=\"{{ path('agencia_show', { 'id': agencia.id }) }}\">{{ agencia.id }}</a></td>
                <td>{{ agencia.nombre }}</td>
                <td>
                    <a href=\"{{ path('agencia_show', { 'id': agencia.id }) }}\" class=\"btn btn-info btn1\" role=\"button\">Ver</a>
                    <a href=\"{{ path('agencia_edit', { 'id': agencia.id }) }}\" class=\"btn btn-primary btn1\" role=\"button\">Editar</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('agencia_new') }}\"class=\"btn btn-primary \" role=\"button\">Nuevo</a>
{% endblock %}
", "agencia/index.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/agencia/index.html.twig");
    }
}
