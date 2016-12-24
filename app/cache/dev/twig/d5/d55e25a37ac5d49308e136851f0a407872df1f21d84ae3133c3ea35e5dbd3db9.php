<?php

/* fondolinea/show.html.twig */
class __TwigTemplate_9cded863d717bfc72aa7be546ff9b4ca8055d083a947d5dc08ff52379836e3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fondolinea/show.html.twig", 1);
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
        $__internal_2147ff944b146ad2f90a14c6629136452041879c19b4b05f0c0886ab51e6325f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2147ff944b146ad2f90a14c6629136452041879c19b4b05f0c0886ab51e6325f->enter($__internal_2147ff944b146ad2f90a14c6629136452041879c19b4b05f0c0886ab51e6325f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2147ff944b146ad2f90a14c6629136452041879c19b4b05f0c0886ab51e6325f->leave($__internal_2147ff944b146ad2f90a14c6629136452041879c19b4b05f0c0886ab51e6325f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_949ab5eb381c344a496e9e101d3183556fc233ffb3c2dab1eb64f49b38d115b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949ab5eb381c344a496e9e101d3183556fc233ffb3c2dab1eb64f49b38d115b3->enter($__internal_949ab5eb381c344a496e9e101d3183556fc233ffb3c2dab1eb64f49b38d115b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fondolinea</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fondoLinea"]) ? $context["fondoLinea"] : $this->getContext($context, "fondoLinea")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fondoLinea"]) ? $context["fondoLinea"] : $this->getContext($context, "fondoLinea")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_edit", array("id" => $this->getAttribute((isset($context["fondoLinea"]) ? $context["fondoLinea"] : $this->getContext($context, "fondoLinea")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_949ab5eb381c344a496e9e101d3183556fc233ffb3c2dab1eb64f49b38d115b3->leave($__internal_949ab5eb381c344a496e9e101d3183556fc233ffb3c2dab1eb64f49b38d115b3_prof);

    }

    public function getTemplateName()
    {
        return "fondolinea/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fondolinea</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fondoLinea.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ fondoLinea.nombre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fondolinea_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('fondolinea_edit', { 'id': fondoLinea.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "fondolinea/show.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/fondolinea/show.html.twig");
    }
}
