<?php

/* programa/index.html.twig */
class __TwigTemplate_81b923f1b02a38e67fa23f327dcd67e446ad250f79f7d10caec5e7fbd0481db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programa/index.html.twig", 1);
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
        $__internal_e9ad507a9ce3570a0f11783e0af67d54daa4c14c55742f7f071fbbb771b4061a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ad507a9ce3570a0f11783e0af67d54daa4c14c55742f7f071fbbb771b4061a->enter($__internal_e9ad507a9ce3570a0f11783e0af67d54daa4c14c55742f7f071fbbb771b4061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ad507a9ce3570a0f11783e0af67d54daa4c14c55742f7f071fbbb771b4061a->leave($__internal_e9ad507a9ce3570a0f11783e0af67d54daa4c14c55742f7f071fbbb771b4061a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cd47d2cb7dae2499f259cf891cbab478526bf3bc308c0856687ec8bd9b00ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd47d2cb7dae2499f259cf891cbab478526bf3bc308c0856687ec8bd9b00ac6->enter($__internal_7cd47d2cb7dae2499f259cf891cbab478526bf3bc308c0856687ec8bd9b00ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Programas list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["programas"]) ? $context["programas"] : $this->getContext($context, "programas")));
        foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_show", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_show", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_edit", array("id" => $this->getAttribute($context["programa"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_new");
        echo "\">Create a new programa</a>
        </li>
    </ul>
";
        
        $__internal_7cd47d2cb7dae2499f259cf891cbab478526bf3bc308c0856687ec8bd9b00ac6->leave($__internal_7cd47d2cb7dae2499f259cf891cbab478526bf3bc308c0856687ec8bd9b00ac6_prof);

    }

    public function getTemplateName()
    {
        return "programa/index.html.twig";
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
    <h1>Programas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for programa in programas %}
            <tr>
                <td><a href=\"{{ path('programa_show', { 'id': programa.id }) }}\">{{ programa.id }}</a></td>
                <td>{{ programa.nombre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('programa_show', { 'id': programa.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('programa_edit', { 'id': programa.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('programa_new') }}\">Create a new programa</a>
        </li>
    </ul>
{% endblock %}
", "programa/index.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/programa/index.html.twig");
    }
}
