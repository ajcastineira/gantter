<?php

/* fondolinea/show.html.twig */
class __TwigTemplate_5548e6665b3d68132ffa8bc17575565b2c6eeb756aeabc84c2e6559d48c8f92c extends Twig_Template
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
        $__internal_e1391224db9b268b7199b9e1d19e0506fe40555eefc0de1eda6b64c30143b825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1391224db9b268b7199b9e1d19e0506fe40555eefc0de1eda6b64c30143b825->enter($__internal_e1391224db9b268b7199b9e1d19e0506fe40555eefc0de1eda6b64c30143b825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1391224db9b268b7199b9e1d19e0506fe40555eefc0de1eda6b64c30143b825->leave($__internal_e1391224db9b268b7199b9e1d19e0506fe40555eefc0de1eda6b64c30143b825_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5d6ed1e68a4bd0ceeb19db65284352663dd7b350abd2c42c0c07e6db7bcb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5d6ed1e68a4bd0ceeb19db65284352663dd7b350abd2c42c0c07e6db7bcb4d->enter($__internal_6e5d6ed1e68a4bd0ceeb19db65284352663dd7b350abd2c42c0c07e6db7bcb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e5d6ed1e68a4bd0ceeb19db65284352663dd7b350abd2c42c0c07e6db7bcb4d->leave($__internal_6e5d6ed1e68a4bd0ceeb19db65284352663dd7b350abd2c42c0c07e6db7bcb4d_prof);

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
", "fondolinea/show.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/fondolinea/show.html.twig");
    }
}
