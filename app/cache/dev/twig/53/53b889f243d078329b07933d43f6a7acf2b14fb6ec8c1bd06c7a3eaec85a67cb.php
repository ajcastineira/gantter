<?php

/* fondolinea/index.html.twig */
class __TwigTemplate_6596d772413b226bfe860db8b8fcefd6d6bb724f0a97faefad3f2c769f2b1aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fondolinea/index.html.twig", 1);
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
        $__internal_8b034706b664035224b4b6e9ff4a5839918ec93cf5e76aa5938527b2cf22af25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b034706b664035224b4b6e9ff4a5839918ec93cf5e76aa5938527b2cf22af25->enter($__internal_8b034706b664035224b4b6e9ff4a5839918ec93cf5e76aa5938527b2cf22af25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b034706b664035224b4b6e9ff4a5839918ec93cf5e76aa5938527b2cf22af25->leave($__internal_8b034706b664035224b4b6e9ff4a5839918ec93cf5e76aa5938527b2cf22af25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1cc3d2e1aa9cf1aa3c6cbb613d2d52ebbdba516ad9eae7abac083521c5188b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cc3d2e1aa9cf1aa3c6cbb613d2d52ebbdba516ad9eae7abac083521c5188b8->enter($__internal_b1cc3d2e1aa9cf1aa3c6cbb613d2d52ebbdba516ad9eae7abac083521c5188b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fondolineas list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["fondoLineas"]) ? $context["fondoLineas"] : $this->getContext($context, "fondoLineas")));
        foreach ($context['_seq'] as $context["_key"] => $context["fondoLinea"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_show", array("id" => $this->getAttribute($context["fondoLinea"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fondoLinea"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["fondoLinea"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_show", array("id" => $this->getAttribute($context["fondoLinea"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_edit", array("id" => $this->getAttribute($context["fondoLinea"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fondoLinea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_new");
        echo "\">Create a new fondoLinea</a>
        </li>
    </ul>
";
        
        $__internal_b1cc3d2e1aa9cf1aa3c6cbb613d2d52ebbdba516ad9eae7abac083521c5188b8->leave($__internal_b1cc3d2e1aa9cf1aa3c6cbb613d2d52ebbdba516ad9eae7abac083521c5188b8_prof);

    }

    public function getTemplateName()
    {
        return "fondolinea/index.html.twig";
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
    <h1>Fondolineas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fondoLinea in fondoLineas %}
            <tr>
                <td><a href=\"{{ path('fondolinea_show', { 'id': fondoLinea.id }) }}\">{{ fondoLinea.id }}</a></td>
                <td>{{ fondoLinea.nombre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('fondolinea_show', { 'id': fondoLinea.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('fondolinea_edit', { 'id': fondoLinea.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('fondolinea_new') }}\">Create a new fondoLinea</a>
        </li>
    </ul>
{% endblock %}
", "fondolinea/index.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/fondolinea/index.html.twig");
    }
}
