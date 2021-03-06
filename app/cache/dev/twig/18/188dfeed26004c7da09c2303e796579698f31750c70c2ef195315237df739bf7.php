<?php

/* agencia/show.html.twig */
class __TwigTemplate_c69d06da4ac4e84b71aad75d8c5e72b80726530d27eb64d2e821f898f04539eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agencia/show.html.twig", 1);
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
        $__internal_d94c6eac9f7c4048620cb3d2366c74a4ee2df47af5aa0909def39de35a260280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94c6eac9f7c4048620cb3d2366c74a4ee2df47af5aa0909def39de35a260280->enter($__internal_d94c6eac9f7c4048620cb3d2366c74a4ee2df47af5aa0909def39de35a260280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94c6eac9f7c4048620cb3d2366c74a4ee2df47af5aa0909def39de35a260280->leave($__internal_d94c6eac9f7c4048620cb3d2366c74a4ee2df47af5aa0909def39de35a260280_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98be139b998c2b31692980978b97be84b49a9fe576fe2b6aeb6a2e4490c3b237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98be139b998c2b31692980978b97be84b49a9fe576fe2b6aeb6a2e4490c3b237->enter($__internal_98be139b998c2b31692980978b97be84b49a9fe576fe2b6aeb6a2e4490c3b237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agencia</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agencia"]) ? $context["agencia"] : $this->getContext($context, "agencia")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agencia"]) ? $context["agencia"] : $this->getContext($context, "agencia")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_edit", array("id" => $this->getAttribute((isset($context["agencia"]) ? $context["agencia"] : $this->getContext($context, "agencia")), "id", array()))), "html", null, true);
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
        
        $__internal_98be139b998c2b31692980978b97be84b49a9fe576fe2b6aeb6a2e4490c3b237->leave($__internal_98be139b998c2b31692980978b97be84b49a9fe576fe2b6aeb6a2e4490c3b237_prof);

    }

    public function getTemplateName()
    {
        return "agencia/show.html.twig";
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
    <h1>Agencia</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ agencia.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ agencia.nombre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('agencia_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('agencia_edit', { 'id': agencia.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "agencia/show.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/agencia/show.html.twig");
    }
}
