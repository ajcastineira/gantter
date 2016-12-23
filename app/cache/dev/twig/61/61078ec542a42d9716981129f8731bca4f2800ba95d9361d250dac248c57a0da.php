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
        $__internal_c2e9209f73b7ddc1dc6a66e83f454bd934561279beeafbec6b9ec0189e6a1b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e9209f73b7ddc1dc6a66e83f454bd934561279beeafbec6b9ec0189e6a1b2a->enter($__internal_c2e9209f73b7ddc1dc6a66e83f454bd934561279beeafbec6b9ec0189e6a1b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e9209f73b7ddc1dc6a66e83f454bd934561279beeafbec6b9ec0189e6a1b2a->leave($__internal_c2e9209f73b7ddc1dc6a66e83f454bd934561279beeafbec6b9ec0189e6a1b2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9924993916b8953aa58291f2f62d61ec13a9a956ee9132e03008a7ec31669fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9924993916b8953aa58291f2f62d61ec13a9a956ee9132e03008a7ec31669fc7->enter($__internal_9924993916b8953aa58291f2f62d61ec13a9a956ee9132e03008a7ec31669fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agencias list</h1>

    <table>
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
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_show", array("id" => $this->getAttribute($context["agencia"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_edit", array("id" => $this->getAttribute($context["agencia"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_new");
        echo "\">Create a new agencia</a>
        </li>
    </ul>
";
        
        $__internal_9924993916b8953aa58291f2f62d61ec13a9a956ee9132e03008a7ec31669fc7->leave($__internal_9924993916b8953aa58291f2f62d61ec13a9a956ee9132e03008a7ec31669fc7_prof);

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
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Agencias list</h1>

    <table>
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
                    <ul>
                        <li>
                            <a href=\"{{ path('agencia_show', { 'id': agencia.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('agencia_edit', { 'id': agencia.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('agencia_new') }}\">Create a new agencia</a>
        </li>
    </ul>
{% endblock %}
", "agencia/index.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/agencia/index.html.twig");
    }
}
