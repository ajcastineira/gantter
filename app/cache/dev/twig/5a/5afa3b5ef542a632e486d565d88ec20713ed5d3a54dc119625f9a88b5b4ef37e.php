<?php

/* GanttBundle:Default:index.html.twig */
class __TwigTemplate_b888c4a22cc6c7904ab575138fd73d775b3ba7908e004f7b01c930a8930fea5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "GanttBundle:Default:index.html.twig", 1);
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
        $__internal_2c21e9524c4d630e9670a1a4af9147a13b6a95f88df22b524969fde434ab01c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c21e9524c4d630e9670a1a4af9147a13b6a95f88df22b524969fde434ab01c9->enter($__internal_2c21e9524c4d630e9670a1a4af9147a13b6a95f88df22b524969fde434ab01c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GanttBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c21e9524c4d630e9670a1a4af9147a13b6a95f88df22b524969fde434ab01c9->leave($__internal_2c21e9524c4d630e9670a1a4af9147a13b6a95f88df22b524969fde434ab01c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ec7f9a18d666846d2c9af74a8be1a8c63055ce6abd1a963ac65f3f6205026ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec7f9a18d666846d2c9af74a8be1a8c63055ce6abd1a963ac65f3f6205026ab->enter($__internal_4ec7f9a18d666846d2c9af74a8be1a8c63055ce6abd1a963ac65f3f6205026ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bienvenido a Gantter</h1>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencias"]) ? $context["agencias"] : $this->getContext($context, "agencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["agencia"]) {
            // line 7
            echo "    \t<strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agencia"], "nombre", array()), "html", null, true);
            echo " </strong></br>

    \t<table class=\"table table-bordered\">

\t    \t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["agencia"], "getProgramas", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
                // line 12
                echo "\t    \t\t<thead>
\t\t            <tr>
\t\t                <th>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
                echo "</th>
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t                <th>Enero</th>
\t\t                <th>Febrero</th>
\t\t                <th>Marzo</th>
\t\t                <th>Abril</th>
\t\t                <th>Mayo</th>
\t\t                <th>Junio</th>
\t\t                <th>Julio</th>
\t\t                <th>Agosto</th>
\t\t                <th>Septiembre</th>
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t            </tr>
\t\t        </thead>
\t\t        <tbody>

\t\t    \t\t";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["programa"], "getFondosLineas", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["fondolinea"]) {
                    // line 31
                    echo "\t\t    \t\t\t<tr>
\t\t    \t\t\t\t<td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fondolinea"], "nombre", array()), "html", null, true);
                    echo "</td>

\t\t    \t\t\t\t<td></td>

\t\t    \t\t\t\t";
                    // line 36
                    if ((twig_length_filter($this->env, $this->getAttribute($context["fondolinea"], "getConcursos", array(), "method")) == 0)) {
                        // line 37
                        echo "\t\t    \t\t\t\t\t<td></td>
\t\t    \t\t\t\t\t<td></td>
\t\t    \t\t\t\t";
                    }
                    // line 40
                    echo "
\t\t\t\t    \t\t";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fondolinea"], "getConcursos", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["concurso"]) {
                        // line 42
                        echo "\t\t\t\t\t    \t\t<td style=\"background: #";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "color", array()), "html", null, true);
                        echo ";\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "link", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "nombre", array()), "html", null, true);
                        echo "</a></td>
\t\t\t\t\t    \t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concurso'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "
\t\t\t\t\t    \t
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    </tr>

\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fondolinea'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "\t\t    \t</tbody>

\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    \t</table>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4ec7f9a18d666846d2c9af74a8be1a8c63055ce6abd1a963ac65f3f6205026ab->leave($__internal_4ec7f9a18d666846d2c9af74a8be1a8c63055ce6abd1a963ac65f3f6205026ab_prof);

    }

    public function getTemplateName()
    {
        return "GanttBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 58,  140 => 55,  124 => 44,  111 => 42,  107 => 41,  104 => 40,  99 => 37,  97 => 36,  90 => 32,  87 => 31,  83 => 30,  64 => 14,  60 => 12,  56 => 11,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Bienvenido a Gantter</h1>

    {% for agencia in agencias %}
    \t<strong>{{ agencia.nombre }} </strong></br>

    \t<table class=\"table table-bordered\">

\t    \t{% for programa in agencia.getProgramas() %}
\t    \t\t<thead>
\t\t            <tr>
\t\t                <th>{{ programa.nombre }}</th>
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t                <th>Enero</th>
\t\t                <th>Febrero</th>
\t\t                <th>Marzo</th>
\t\t                <th>Abril</th>
\t\t                <th>Mayo</th>
\t\t                <th>Junio</th>
\t\t                <th>Julio</th>
\t\t                <th>Agosto</th>
\t\t                <th>Septiembre</th>
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t            </tr>
\t\t        </thead>
\t\t        <tbody>

\t\t    \t\t{% for fondolinea in programa.getFondosLineas() %}
\t\t    \t\t\t<tr>
\t\t    \t\t\t\t<td>{{ fondolinea.nombre }}</td>

\t\t    \t\t\t\t<td></td>

\t\t    \t\t\t\t{% if fondolinea.getConcursos()|length == 0 %}
\t\t    \t\t\t\t\t<td></td>
\t\t    \t\t\t\t\t<td></td>
\t\t    \t\t\t\t{% endif %}

\t\t\t\t    \t\t{% for concurso in fondolinea.getConcursos() %}
\t\t\t\t\t    \t\t<td style=\"background: #{{concurso.color}};\"><a href=\"{{ concurso.link}}\">{{ concurso.nombre }}</a></td>
\t\t\t\t\t    \t{% endfor %}

\t\t\t\t\t    \t
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    \t<td></td>
\t\t\t\t\t    </tr>

\t\t\t    \t{% endfor %}
\t\t    \t</tbody>

\t    \t{% endfor %}
    \t</table>

    {% endfor %}
{% endblock %}
", "GanttBundle:Default:index.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/src/GanttBundle/Resources/views/Default/index.html.twig");
    }
}
