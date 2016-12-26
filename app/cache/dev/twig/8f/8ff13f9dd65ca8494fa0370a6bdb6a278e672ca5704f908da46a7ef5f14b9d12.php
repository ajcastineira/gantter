<?php

/* GanttBundle:Default:index.html.twig */
class __TwigTemplate_3f6de22638b049008ed31d5ae4eeb114ea9b5ad16c8b27e0a467fcf86999c82f extends Twig_Template
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
        $__internal_c0d86a2b8dbe2b3c62d59c443ba9b976504cb4b7ef177b1bc87aa4ff1a6ea1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d86a2b8dbe2b3c62d59c443ba9b976504cb4b7ef177b1bc87aa4ff1a6ea1a7->enter($__internal_c0d86a2b8dbe2b3c62d59c443ba9b976504cb4b7ef177b1bc87aa4ff1a6ea1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GanttBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d86a2b8dbe2b3c62d59c443ba9b976504cb4b7ef177b1bc87aa4ff1a6ea1a7->leave($__internal_c0d86a2b8dbe2b3c62d59c443ba9b976504cb4b7ef177b1bc87aa4ff1a6ea1a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38884393cf03b9da1741ebf97e0ea24c30b78fd26e1009b2692c247c7be73574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38884393cf03b9da1741ebf97e0ea24c30b78fd26e1009b2692c247c7be73574->enter($__internal_38884393cf03b9da1741ebf97e0ea24c30b78fd26e1009b2692c247c7be73574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bienvenido a Gantter ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["latestDeadline"]) ? $context["latestDeadline"] : $this->getContext($context, "latestDeadline")), "d/m/Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["monthsInterval"]) ? $context["monthsInterval"] : $this->getContext($context, "monthsInterval")), "html", null, true);
        echo "</h1>

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
\t\t                ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["monthsInterval"]) ? $context["monthsInterval"] : $this->getContext($context, "monthsInterval"))));
                foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                    // line 17
                    echo "\t\t                \t<th>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")), (("+" . $context["m"]) . "months")), "M"), "html", null, true);
                    echo "</th>
\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t            </tr>
\t\t        </thead>
\t\t        <tbody>

\t\t    \t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["programa"], "getFondosLineas", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["fondolinea"]) {
                    // line 25
                    echo "\t\t    \t\t\t<tr>
\t\t    \t\t\t\t<td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fondolinea"], "nombre", array()), "html", null, true);
                    echo "</td>
\t\t    \t\t\t\t";
                    // line 27
                    $context["busyLeft"] = 0;
                    // line 28
                    echo "
\t\t\t\t\t    \t<!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t                ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["monthsInterval"]) ? $context["monthsInterval"] : $this->getContext($context, "monthsInterval"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                        // line 31
                        echo "\t\t\t                \t";
                        if (((isset($context["busyLeft"]) ? $context["busyLeft"] : $this->getContext($context, "busyLeft")) > 0)) {
                            // line 32
                            echo "\t\t\t                \t\t";
                            $context["busyLeft"] = ((isset($context["busyLeft"]) ? $context["busyLeft"] : $this->getContext($context, "busyLeft")) - 1);
                            // line 33
                            echo "\t\t\t                \t";
                        } else {
                            // line 34
                            echo "
\t\t\t\t                \t";
                            // line 35
                            $context["columnDate"] = twig_date_modify_filter($this->env, (isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")), (("+" . $context["m"]) . "months"));
                            // line 36
                            echo "\t\t\t\t                \t";
                            $context["free"] = true;
                            // line 37
                            echo "
\t\t\t\t                \t";
                            // line 38
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fondolinea"], "getConcursos", array(), "method"));
                            foreach ($context['_seq'] as $context["_key"] => $context["concurso"]) {
                                // line 39
                                echo "\t\t\t\t                \t\t";
                                if ((twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "getFechaInicio", array(), "method"), "Y-m") == twig_date_format_filter($this->env, (isset($context["columnDate"]) ? $context["columnDate"] : $this->getContext($context, "columnDate")), "Y-m"))) {
                                    // line 40
                                    echo "\t\t\t\t\t\t\t    \t\t\t<td colspan=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "getMonthsLength", array(), "method"), "html", null, true);
                                    echo "\" style=\"background: #";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "color", array()), "html", null, true);
                                    echo ";\"><a href=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "link", array()), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "nombre", array()), "html", null, true);
                                    echo "</a></td>
\t\t\t\t\t\t\t    \t\t\t";
                                    // line 41
                                    $context["free"] = false;
                                    // line 42
                                    echo "\t\t\t\t\t\t\t    \t\t\t\t";
                                    $context["busyLeft"] = ($this->getAttribute($context["concurso"], "getMonthsLength", array(), "method") - 1);
                                    // line 43
                                    echo "\t\t\t\t                \t\t";
                                }
                                // line 44
                                echo "\t\t\t\t\t\t\t    \t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concurso'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 45
                            echo "
\t\t\t\t\t\t\t    \t";
                            // line 46
                            if ((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free"))) {
                                // line 47
                                echo "\t\t\t\t\t\t\t    \t\t<td></td>
\t\t\t\t\t\t\t    \t";
                            }
                            // line 49
                            echo "\t\t\t\t\t\t\t    ";
                        }
                        // line 50
                        echo "\t\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "
\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

\t\t\t\t\t    </tr>

\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fondolinea'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t    \t</tbody>

\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    \t</table>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_38884393cf03b9da1741ebf97e0ea24c30b78fd26e1009b2692c247c7be73574->leave($__internal_38884393cf03b9da1741ebf97e0ea24c30b78fd26e1009b2692c247c7be73574_prof);

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
        return array (  203 => 60,  195 => 57,  184 => 51,  178 => 50,  175 => 49,  171 => 47,  169 => 46,  166 => 45,  160 => 44,  157 => 43,  154 => 42,  152 => 41,  141 => 40,  138 => 39,  134 => 38,  131 => 37,  128 => 36,  126 => 35,  123 => 34,  120 => 33,  117 => 32,  114 => 31,  110 => 30,  106 => 28,  104 => 27,  100 => 26,  97 => 25,  93 => 24,  86 => 19,  77 => 17,  73 => 16,  68 => 14,  64 => 12,  60 => 11,  52 => 7,  48 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Bienvenido a Gantter {{latestDeadline|date(\"d/m/Y\")}} {{monthsInterval}}</h1>

    {% for agencia in agencias %}
    \t<strong>{{ agencia.nombre }} </strong></br>

    \t<table class=\"table table-bordered\">

\t    \t{% for programa in agencia.getProgramas() %}
\t    \t\t<thead>
\t\t            <tr>
\t\t                <th>{{ programa.nombre }}</th>
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t                {% for m in range(0, monthsInterval) %}
\t\t                \t<th>{{ hoy|date_modify('+' ~ m ~ 'months') | date('M') }}</th>
\t\t                {% endfor %}
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t            </tr>
\t\t        </thead>
\t\t        <tbody>

\t\t    \t\t{% for fondolinea in programa.getFondosLineas() %}
\t\t    \t\t\t<tr>
\t\t    \t\t\t\t<td>{{ fondolinea.nombre }}</td>
\t\t    \t\t\t\t{% set busyLeft = 0 %}

\t\t\t\t\t    \t<!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t                {% for m in range(0, monthsInterval) %}
\t\t\t                \t{% if busyLeft > 0 %}
\t\t\t                \t\t{% set busyLeft = busyLeft - 1 %}
\t\t\t                \t{% else %}

\t\t\t\t                \t{% set columnDate =  hoy|date_modify('+' ~ m ~ 'months') %}
\t\t\t\t                \t{% set free = true %}

\t\t\t\t                \t{% for concurso in fondolinea.getConcursos() %}
\t\t\t\t                \t\t{% if concurso.getFechaInicio()|date('Y-m') == columnDate | date('Y-m')%}
\t\t\t\t\t\t\t    \t\t\t<td colspan=\"{{concurso.getMonthsLength()}}\" style=\"background: #{{concurso.color}};\"><a href=\"{{ concurso.link}}\">{{ concurso.nombre }}</a></td>
\t\t\t\t\t\t\t    \t\t\t{% set free = false %}
\t\t\t\t\t\t\t    \t\t\t\t{% set busyLeft =  concurso.getMonthsLength() -1 %}
\t\t\t\t                \t\t{% endif %}
\t\t\t\t\t\t\t    \t{% endfor %}

\t\t\t\t\t\t\t    \t{% if free %}
\t\t\t\t\t\t\t    \t\t<td></td>
\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t\t\t\t    {% endif %}
\t\t\t                {% endfor %}

\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

\t\t\t\t\t    </tr>

\t\t\t    \t{% endfor %}
\t\t    \t</tbody>

\t    \t{% endfor %}
    \t</table>

    {% endfor %}
{% endblock %}
", "GanttBundle:Default:index.html.twig", "/Users/erick/Documents/Gantt/gantter/src/GanttBundle/Resources/views/Default/index.html.twig");
    }
}
