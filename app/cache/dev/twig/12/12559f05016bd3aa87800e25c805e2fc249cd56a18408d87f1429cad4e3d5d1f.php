<?php

/* concurso/show.html.twig */
class __TwigTemplate_dd6e4f40b68a2ac16f36008f5ae192f4dedb89a1c2b69728fadfc210f4761edb extends Twig_Template
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
        $__internal_fd13154d48e1e40047b8d2097d0a98b59a214b85bc5e9f384c01d6ff96015905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd13154d48e1e40047b8d2097d0a98b59a214b85bc5e9f384c01d6ff96015905->enter($__internal_fd13154d48e1e40047b8d2097d0a98b59a214b85bc5e9f384c01d6ff96015905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd13154d48e1e40047b8d2097d0a98b59a214b85bc5e9f384c01d6ff96015905->leave($__internal_fd13154d48e1e40047b8d2097d0a98b59a214b85bc5e9f384c01d6ff96015905_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08b766b2bb123a470dba853ab2216ddf75bac8cac7ee82380123c6ac9926ecaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b766b2bb123a470dba853ab2216ddf75bac8cac7ee82380123c6ac9926ecaa->enter($__internal_08b766b2bb123a470dba853ab2216ddf75bac8cac7ee82380123c6ac9926ecaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Concurso</h1>

    <table class=\"table\">
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaInicio", array()), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaFinal", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "fechaFinal", array()), "d-m-Y H:i:s"), "html", null, true);
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

    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
        echo "\" class=\"btn btn-info btn1\" role=\"button\" >Ver listado</a>
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_edit", array("id" => $this->getAttribute((isset($context["concurso"]) ? $context["concurso"] : $this->getContext($context, "concurso")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn2\" role=\"button\">Editar</a>
        <li>
            ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_08b766b2bb123a470dba853ab2216ddf75bac8cac7ee82380123c6ac9926ecaa->leave($__internal_08b766b2bb123a470dba853ab2216ddf75bac8cac7ee82380123c6ac9926ecaa_prof);

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
        return array (  116 => 44,  111 => 42,  106 => 40,  102 => 39,  94 => 34,  87 => 30,  80 => 26,  73 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ concurso.id }}</td>
            </tr>
            <tr>
                <th>Fechainicio</th>
                <td>{% if concurso.fechaInicio %}{{ concurso.fechaInicio|date('d-m-Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>{% if concurso.fechaFinal %}{{ concurso.fechaFinal|date('d-m-Y H:i:s') }}{% endif %}</td>
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

    <a href=\"{{ path('concurso_index') }}\" class=\"btn btn-info btn1\" role=\"button\" >Ver listado</a>
    <a href=\"{{ path('concurso_edit', { 'id': concurso.id }) }}\" class=\"btn btn-primary btn2\" role=\"button\">Editar</a>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "concurso/show.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/show.html.twig");
    }
}
