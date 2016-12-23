<?php

/* agencia/show.html.twig */
class __TwigTemplate_8320d93f1049cbd2795bf740be26184a0f3f29133c72a8ef6b6e3260dca0bd39 extends Twig_Template
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
        $__internal_13b69ca93c91752ad3478e76bb8164aa54bd84ae7134618f388349fe86030c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b69ca93c91752ad3478e76bb8164aa54bd84ae7134618f388349fe86030c42->enter($__internal_13b69ca93c91752ad3478e76bb8164aa54bd84ae7134618f388349fe86030c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b69ca93c91752ad3478e76bb8164aa54bd84ae7134618f388349fe86030c42->leave($__internal_13b69ca93c91752ad3478e76bb8164aa54bd84ae7134618f388349fe86030c42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_215f066adae505cbeadd414cd92036a6ad463311e2be4a9c3efe1caa8f1b5121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215f066adae505cbeadd414cd92036a6ad463311e2be4a9c3efe1caa8f1b5121->enter($__internal_215f066adae505cbeadd414cd92036a6ad463311e2be4a9c3efe1caa8f1b5121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_215f066adae505cbeadd414cd92036a6ad463311e2be4a9c3efe1caa8f1b5121->leave($__internal_215f066adae505cbeadd414cd92036a6ad463311e2be4a9c3efe1caa8f1b5121_prof);

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
", "agencia/show.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/agencia/show.html.twig");
    }
}
