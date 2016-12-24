<?php

/* programa/show.html.twig */
class __TwigTemplate_025a3ae0a36ceee2d39f1c87dbfdb7d8e9b0af42b70d24213a8839cb2056ab9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programa/show.html.twig", 1);
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
        $__internal_700f2cf32c9f9810c13f6c5ece3eb44f8163757086b4beb4829e7a1288ae4575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700f2cf32c9f9810c13f6c5ece3eb44f8163757086b4beb4829e7a1288ae4575->enter($__internal_700f2cf32c9f9810c13f6c5ece3eb44f8163757086b4beb4829e7a1288ae4575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700f2cf32c9f9810c13f6c5ece3eb44f8163757086b4beb4829e7a1288ae4575->leave($__internal_700f2cf32c9f9810c13f6c5ece3eb44f8163757086b4beb4829e7a1288ae4575_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9225626a0ba730aa5329f45a9f051f467f13832616103524201a504eadc5c0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9225626a0ba730aa5329f45a9f051f467f13832616103524201a504eadc5c0d6->enter($__internal_9225626a0ba730aa5329f45a9f051f467f13832616103524201a504eadc5c0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Programa</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_edit", array("id" => $this->getAttribute((isset($context["programa"]) ? $context["programa"] : $this->getContext($context, "programa")), "id", array()))), "html", null, true);
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
        
        $__internal_9225626a0ba730aa5329f45a9f051f467f13832616103524201a504eadc5c0d6->leave($__internal_9225626a0ba730aa5329f45a9f051f467f13832616103524201a504eadc5c0d6_prof);

    }

    public function getTemplateName()
    {
        return "programa/show.html.twig";
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
    <h1>Programa</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ programa.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ programa.nombre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('programa_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('programa_edit', { 'id': programa.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "programa/show.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/programa/show.html.twig");
    }
}
