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
        $__internal_c56ae532c870fcbfab701d74aa7159f38a69dc320700cd82f66a409f222be3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56ae532c870fcbfab701d74aa7159f38a69dc320700cd82f66a409f222be3dd->enter($__internal_c56ae532c870fcbfab701d74aa7159f38a69dc320700cd82f66a409f222be3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GanttBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c56ae532c870fcbfab701d74aa7159f38a69dc320700cd82f66a409f222be3dd->leave($__internal_c56ae532c870fcbfab701d74aa7159f38a69dc320700cd82f66a409f222be3dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c93cfdb02986a1654e3fa2fc36cf2cdf10e9a72e8e3fbb93fa3011cc4830e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c93cfdb02986a1654e3fa2fc36cf2cdf10e9a72e8e3fbb93fa3011cc4830e2->enter($__internal_72c93cfdb02986a1654e3fa2fc36cf2cdf10e9a72e8e3fbb93fa3011cc4830e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bienvenido a Gantter ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["latestDeadline"]) ? $context["latestDeadline"] : $this->getContext($context, "latestDeadline")), "d/m/Y"), "html", null, true);
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

    \t<table class=\"table table-bordered\" style=\"width: initial;\">

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
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")), (("+" . $context["m"]) . "months")), "M-y"), "html", null, true);
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
\t\t    \t\t\t\t<td style=\"width:200px;\">";
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
                                    echo "\t\t\t\t\t\t\t    \t\t\t";
                                    $context["pl"] = twig_round((twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "fechaInicio", array()), "d") * 3));
                                    // line 41
                                    echo "\t\t\t\t\t\t\t    \t\t\t";
                                    $context["pr"] = twig_round(((31 - twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "fechaFinal", array()), "d")) * 3));
                                    // line 42
                                    echo "\t\t\t\t\t\t\t    \t\t\t<td style=\"width:101px; padding: 4px;\" colspan=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "getMonthsLength", array(), "method"), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t    \t\t\t\t<a tabindex=\"0\" class=\"btn btn-primary btn-sm\" style=\"width: ";
                                    // line 43
                                    echo twig_escape_filter($this->env, ((((101 * $this->getAttribute($context["concurso"], "getMonthsLength", array(), "method")) - (isset($context["pl"]) ? $context["pl"] : $this->getContext($context, "pl"))) - (isset($context["pr"]) ? $context["pr"] : $this->getContext($context, "pr"))) - 8), "html", null, true);
                                    echo "px; background-color: #";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "color", array()), "html", null, true);
                                    echo ";position: relative;left: ";
                                    echo twig_escape_filter($this->env, (isset($context["pl"]) ? $context["pl"] : $this->getContext($context, "pl")), "html", null, true);
                                    echo "px;\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\"  data-html=\"true\" title=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "nombre", array()), "html", null, true);
                                    echo " (";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "getFechaInicio", array(), "method"), "d-m"), "html", null, true);
                                    echo "&nbsp; al &nbsp;";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "getFechaFinal", array(), "method"), "d-m"), "html", null, true);
                                    echo ")\" data-content=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "descripcion", array()), "html", null, true);
                                    echo "</br><a href='";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "link", array()), "html", null, true);
                                    echo "' target='_blank'>Web Oficial</a>\">";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "getFechaInicio", array(), "method"), "d-m"), "html", null, true);
                                    echo "&nbsp; al &nbsp;";
                                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "getFechaFinal", array(), "method"), "d-m"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t    \t\t\t</td>
\t\t\t\t\t\t\t    \t\t\t";
                                    // line 45
                                    $context["free"] = false;
                                    // line 46
                                    echo "\t\t\t\t\t\t\t    \t\t\t\t";
                                    $context["busyLeft"] = ($this->getAttribute($context["concurso"], "getMonthsLength", array(), "method") - 1);
                                    // line 47
                                    echo "\t\t\t\t                \t\t";
                                }
                                // line 48
                                echo "\t\t\t\t\t\t\t    \t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concurso'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 49
                            echo "
\t\t\t\t\t\t\t    \t";
                            // line 50
                            if ((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free"))) {
                                // line 51
                                echo "\t\t\t\t\t\t\t    \t\t<td style=\"width:101px; padding: 4px;\"></td>
\t\t\t\t\t\t\t    \t";
                            }
                            // line 53
                            echo "\t\t\t\t\t\t\t    ";
                        }
                        // line 54
                        echo "\t\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "
\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

\t\t\t\t\t    </tr>

\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fondolinea'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t    \t</tbody>

\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "    \t</table>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    <script type=\"text/javascript\">
\t\twindow.onload = function() {
\t\t    \$('[data-toggle=\"popover\"]').popover() 
\t\t};
    </script>

";
        
        $__internal_72c93cfdb02986a1654e3fa2fc36cf2cdf10e9a72e8e3fbb93fa3011cc4830e2->leave($__internal_72c93cfdb02986a1654e3fa2fc36cf2cdf10e9a72e8e3fbb93fa3011cc4830e2_prof);

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
        return array (  232 => 67,  224 => 64,  216 => 61,  205 => 55,  199 => 54,  196 => 53,  192 => 51,  190 => 50,  187 => 49,  181 => 48,  178 => 47,  175 => 46,  173 => 45,  150 => 43,  145 => 42,  142 => 41,  139 => 40,  136 => 39,  132 => 38,  129 => 37,  126 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 32,  112 => 31,  108 => 30,  104 => 28,  102 => 27,  98 => 26,  95 => 25,  91 => 24,  84 => 19,  75 => 17,  71 => 16,  66 => 14,  62 => 12,  58 => 11,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Bienvenido a Gantter {{latestDeadline|date(\"d/m/Y\")}}</h1>

    {% for agencia in agencias %}
    \t<strong>{{ agencia.nombre }} </strong></br>

    \t<table class=\"table table-bordered\" style=\"width: initial;\">

\t    \t{% for programa in agencia.getProgramas() %}
\t    \t\t<thead>
\t\t            <tr>
\t\t                <th>{{ programa.nombre }}</th>
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t                {% for m in range(0, monthsInterval) %}
\t\t                \t<th>{{ hoy|date_modify('+' ~ m ~ 'months') | date('M-y') }}</th>
\t\t                {% endfor %}
\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t            </tr>
\t\t        </thead>
\t\t        <tbody>

\t\t    \t\t{% for fondolinea in programa.getFondosLineas() %}
\t\t    \t\t\t<tr>
\t\t    \t\t\t\t<td style=\"width:200px;\">{{ fondolinea.nombre }}</td>
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
\t\t\t\t\t\t\t    \t\t\t{% set pl = (concurso.fechaInicio|date('d') * 3)|round %}
\t\t\t\t\t\t\t    \t\t\t{% set pr = ((31 - concurso.fechaFinal|date('d'))*3)|round %}
\t\t\t\t\t\t\t    \t\t\t<td style=\"width:101px; padding: 4px;\" colspan=\"{{concurso.getMonthsLength()}}\">
\t\t\t\t\t\t\t    \t\t\t\t<a tabindex=\"0\" class=\"btn btn-primary btn-sm\" style=\"width: {{ 101 * concurso.getMonthsLength() - pl - pr - 8 }}px; background-color: #{{concurso.color}};position: relative;left: {{pl}}px;\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\"  data-html=\"true\" title=\"{{ concurso.nombre }} ({{ concurso.getFechaInicio()|date('d-m') }}&nbsp; al &nbsp;{{ concurso.getFechaFinal()|date('d-m') }})\" data-content=\"{{concurso.descripcion}}</br><a href='{{concurso.link}}' target='_blank'>Web Oficial</a>\">{{ concurso.getFechaInicio()|date('d-m') }}&nbsp; al &nbsp;{{ concurso.getFechaFinal()|date('d-m') }}</a>
\t\t\t\t\t\t\t    \t\t\t</td>
\t\t\t\t\t\t\t    \t\t\t{% set free = false %}
\t\t\t\t\t\t\t    \t\t\t\t{% set busyLeft =  concurso.getMonthsLength() -1 %}
\t\t\t\t                \t\t{% endif %}
\t\t\t\t\t\t\t    \t{% endfor %}

\t\t\t\t\t\t\t    \t{% if free %}
\t\t\t\t\t\t\t    \t\t<td style=\"width:101px; padding: 4px;\"></td>
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

    <script type=\"text/javascript\">
\t\twindow.onload = function() {
\t\t    \$('[data-toggle=\"popover\"]').popover() 
\t\t};
    </script>

{% endblock %}
", "GanttBundle:Default:index.html.twig", "/Users/erick/Documents/Gantt/gantter/src/GanttBundle/Resources/views/Default/index.html.twig");
    }
}
