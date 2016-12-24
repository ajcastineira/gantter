<?php

/* concurso/show.html.twig */
class __TwigTemplate_64bac04b3c61d3636fa8ac517e73720ba51a887cad0197168884adaee93f6721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concurso/show.html.twig", 1);
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
        $__internal_27f6438f24927948e5e71092198307e1db1bebb100629929d9672821bbd5a901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f6438f24927948e5e71092198307e1db1bebb100629929d9672821bbd5a901->enter($__internal_27f6438f24927948e5e71092198307e1db1bebb100629929d9672821bbd5a901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f6438f24927948e5e71092198307e1db1bebb100629929d9672821bbd5a901->leave($__internal_27f6438f24927948e5e71092198307e1db1bebb100629929d9672821bbd5a901_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59608dc8e39830c3b9c9c77fcb9051ff1dff833de29f80a60461fc76cd5fab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59608dc8e39830c3b9c9c77fcb9051ff1dff833de29f80a60461fc76cd5fab37->enter($__internal_59608dc8e39830c3b9c9c77fcb9051ff1dff833de29f80a60461fc76cd5fab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Concurso</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechainicio</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaInicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaInicio", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaFinal", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaFinal", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "link", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "color", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_edit", array("id" => $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_59608dc8e39830c3b9c9c77fcb9051ff1dff833de29f80a60461fc76cd5fab37->leave($__internal_59608dc8e39830c3b9c9c77fcb9051ff1dff833de29f80a60461fc76cd5fab37_prof);

    }

    public function getTemplateName()
    {
        return "concurso/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  116 => 47,  110 => 44,  104 => 41,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Concurso</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ concurso.id }}</td>
            </tr>
            <tr>
                <th>Fechainicio</th>
                <td>{% if concurso.fechaInicio %}{{ concurso.fechaInicio|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>{% if concurso.fechaFinal %}{{ concurso.fechaFinal|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ concurso.nombre }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ concurso.link }}</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>{{ concurso.descripcion }}</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>{{ concurso.color }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('concurso_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('concurso_edit', { 'id': concurso.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "concurso/show.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/concurso/show.html.twig");
    }
}
