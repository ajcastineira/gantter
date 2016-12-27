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
        $__internal_57230805fa3185a7213ba7717aad465c7e407b341ff03af41986d94309d14b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57230805fa3185a7213ba7717aad465c7e407b341ff03af41986d94309d14b2d->enter($__internal_57230805fa3185a7213ba7717aad465c7e407b341ff03af41986d94309d14b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GanttBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57230805fa3185a7213ba7717aad465c7e407b341ff03af41986d94309d14b2d->leave($__internal_57230805fa3185a7213ba7717aad465c7e407b341ff03af41986d94309d14b2d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29c57bfbc0e3ff26834a7defaff87760f123f3f69ecef5b290a84de4a4485be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c57bfbc0e3ff26834a7defaff87760f123f3f69ecef5b290a84de4a4485be4->enter($__internal_29c57bfbc0e3ff26834a7defaff87760f123f3f69ecef5b290a84de4a4485be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bienvenido a Gantter</h1>

    <div style=\"max-width:1024px; overflow-x:scroll;\">
\t    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencias"]) ? $context["agencias"] : $this->getContext($context, "agencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["agencia"]) {
            // line 8
            echo "\t    \t<strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agencia"], "nombre", array()), "html", null, true);
            echo " </strong></br>

\t    \t<table class=\"table table-bordered\" style=\"width: initial;\">

\t\t    \t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["agencia"], "getProgramas", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["programa"]) {
                // line 13
                echo "\t\t    \t\t<thead>
\t\t\t            <tr>
\t\t\t                <th>
\t\t\t                \t<div style=\"width:200px;\">
\t\t\t                \t\t";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["programa"], "nombre", array()), "html", null, true);
                echo "
\t\t\t\t    \t\t\t</div>
\t\t\t\t    \t\t</th>
\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["monthsInterval"]) ? $context["monthsInterval"] : $this->getContext($context, "monthsInterval"))));
                foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                    // line 22
                    echo "\t\t\t                \t<th>
\t\t\t                \t\t<div style=\"width:98px;\">
\t\t\t                \t\t\t";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, (isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")), (("+" . $context["m"]) . "months")), "M-y"), "html", null, true);
                    echo "
\t\t\t                \t\t</div>
\t\t\t                \t</th>
\t\t\t                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t            </tr>
\t\t\t        </thead>
\t\t\t        <tbody>

\t\t\t    \t\t";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["programa"], "getFondosLineas", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["fondolinea"]) {
                    // line 34
                    echo "\t\t\t    \t\t\t<tr>
\t\t\t    \t\t\t\t<td style=\"width:200px;\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["fondolinea"], "nombre", array()), "html", null, true);
                    echo "</td>
\t\t\t    \t\t\t\t";
                    // line 36
                    $context["busyLeft"] = 0;
                    // line 37
                    echo "
\t\t\t\t\t\t    \t<!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t\t                ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, (isset($context["monthsInterval"]) ? $context["monthsInterval"] : $this->getContext($context, "monthsInterval"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                        // line 40
                        echo "\t\t\t\t                \t";
                        if (((isset($context["busyLeft"]) ? $context["busyLeft"] : $this->getContext($context, "busyLeft")) > 0)) {
                            // line 41
                            echo "\t\t\t\t                \t\t";
                            $context["busyLeft"] = ((isset($context["busyLeft"]) ? $context["busyLeft"] : $this->getContext($context, "busyLeft")) - 1);
                            // line 42
                            echo "\t\t\t\t                \t";
                        } else {
                            // line 43
                            echo "
\t\t\t\t\t                \t";
                            // line 44
                            $context["columnDate"] = twig_date_modify_filter($this->env, (isset($context["hoy"]) ? $context["hoy"] : $this->getContext($context, "hoy")), (("+" . $context["m"]) . "months"));
                            // line 45
                            echo "\t\t\t\t\t                \t";
                            $context["free"] = true;
                            // line 46
                            echo "
\t\t\t\t\t                \t";
                            // line 47
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fondolinea"], "getConcursos", array(), "method"));
                            foreach ($context['_seq'] as $context["_key"] => $context["concurso"]) {
                                // line 48
                                echo "\t\t\t\t\t                \t\t";
                                if ((twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "getFechaInicio", array(), "method"), "Y-m") == twig_date_format_filter($this->env, (isset($context["columnDate"]) ? $context["columnDate"] : $this->getContext($context, "columnDate")), "Y-m"))) {
                                    // line 49
                                    echo "\t\t\t\t\t\t\t\t    \t\t\t";
                                    $context["pl"] = twig_round((twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "fechaInicio", array()), "d") * 3));
                                    // line 50
                                    echo "\t\t\t\t\t\t\t\t    \t\t\t";
                                    $context["pr"] = twig_round(((31 - twig_date_format_filter($this->env, $this->getAttribute($context["concurso"], "fechaFinal", array()), "d")) * 3));
                                    // line 51
                                    echo "\t\t\t\t\t\t\t\t    \t\t\t<td padding: 4px;\" colspan=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["concurso"], "getMonthsLength", array(), "method"), "html", null, true);
                                    echo "\">
\t\t\t\t\t\t\t\t    \t\t\t\t<a tabindex=\"0\" class=\"btn btn-primary btn-sm\" style=\"width: ";
                                    // line 52
                                    echo twig_escape_filter($this->env, ((((115 * $this->getAttribute($context["concurso"], "getMonthsLength", array(), "method")) - (isset($context["pl"]) ? $context["pl"] : $this->getContext($context, "pl"))) - (isset($context["pr"]) ? $context["pr"] : $this->getContext($context, "pr"))) - 18), "html", null, true);
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
                                    echo " </a>
\t\t\t\t\t\t\t\t    \t\t\t</td>
\t\t\t\t\t\t\t\t    \t\t\t";
                                    // line 54
                                    $context["free"] = false;
                                    // line 55
                                    echo "\t\t\t\t\t\t\t\t    \t\t\t\t";
                                    $context["busyLeft"] = ($this->getAttribute($context["concurso"], "getMonthsLength", array(), "method") - 1);
                                    // line 56
                                    echo "\t\t\t\t\t                \t\t";
                                }
                                // line 57
                                echo "\t\t\t\t\t\t\t\t    \t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['concurso'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 58
                            echo "
\t\t\t\t\t\t\t\t    \t";
                            // line 59
                            if ((isset($context["free"]) ? $context["free"] : $this->getContext($context, "free"))) {
                                // line 60
                                echo "\t\t\t\t\t\t\t\t    \t\t<td style=\"width:101px; padding: 4px;\">
\t\t\t\t\t\t\t\t    \t\t\t<div style=\"width:98px;\">
\t\t\t\t\t\t\t\t    \t\t\t</div>
\t\t\t\t\t\t\t\t    \t\t</td>
\t\t\t\t\t\t\t\t    \t";
                            }
                            // line 65
                            echo "\t\t\t\t\t\t\t\t    ";
                        }
                        // line 66
                        echo "\t\t\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "
\t\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

\t\t\t\t\t\t    </tr>

\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fondolinea'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t    \t</tbody>

\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t    \t</table>

\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t</div>

    <script type=\"text/javascript\">
\t\twindow.onload = function() {
\t\t    \$('[data-toggle=\"popover\"]').popover() 
\t\t};
    </script>

";
        
        $__internal_29c57bfbc0e3ff26834a7defaff87760f123f3f69ecef5b290a84de4a4485be4->leave($__internal_29c57bfbc0e3ff26834a7defaff87760f123f3f69ecef5b290a84de4a4485be4_prof);

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
        return array (  243 => 79,  235 => 76,  227 => 73,  216 => 67,  210 => 66,  207 => 65,  200 => 60,  198 => 59,  195 => 58,  189 => 57,  186 => 56,  183 => 55,  181 => 54,  158 => 52,  153 => 51,  150 => 50,  147 => 49,  144 => 48,  140 => 47,  137 => 46,  134 => 45,  132 => 44,  129 => 43,  126 => 42,  123 => 41,  120 => 40,  116 => 39,  112 => 37,  110 => 36,  106 => 35,  103 => 34,  99 => 33,  92 => 28,  82 => 24,  78 => 22,  74 => 21,  67 => 17,  61 => 13,  57 => 12,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

    <div style=\"max-width:1024px; overflow-x:scroll;\">
\t    {% for agencia in agencias %}
\t    \t<strong>{{ agencia.nombre }} </strong></br>

\t    \t<table class=\"table table-bordered\" style=\"width: initial;\">

\t\t    \t{% for programa in agencia.getProgramas() %}
\t\t    \t\t<thead>
\t\t\t            <tr>
\t\t\t                <th>
\t\t\t                \t<div style=\"width:200px;\">
\t\t\t                \t\t{{ programa.nombre }}
\t\t\t\t    \t\t\t</div>
\t\t\t\t    \t\t</th>
\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t                {% for m in range(0, monthsInterval) %}
\t\t\t                \t<th>
\t\t\t                \t\t<div style=\"width:98px;\">
\t\t\t                \t\t\t{{ hoy|date_modify('+' ~ m ~ 'months') | date('M-y') }}
\t\t\t                \t\t</div>
\t\t\t                \t</th>
\t\t\t                {% endfor %}
\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t            </tr>
\t\t\t        </thead>
\t\t\t        <tbody>

\t\t\t    \t\t{% for fondolinea in programa.getFondosLineas() %}
\t\t\t    \t\t\t<tr>
\t\t\t    \t\t\t\t<td style=\"width:200px;\">{{ fondolinea.nombre }}</td>
\t\t\t    \t\t\t\t{% set busyLeft = 0 %}

\t\t\t\t\t\t    \t<!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
\t\t\t\t                {% for m in range(0, monthsInterval) %}
\t\t\t\t                \t{% if busyLeft > 0 %}
\t\t\t\t                \t\t{% set busyLeft = busyLeft - 1 %}
\t\t\t\t                \t{% else %}

\t\t\t\t\t                \t{% set columnDate =  hoy|date_modify('+' ~ m ~ 'months') %}
\t\t\t\t\t                \t{% set free = true %}

\t\t\t\t\t                \t{% for concurso in fondolinea.getConcursos() %}
\t\t\t\t\t                \t\t{% if concurso.getFechaInicio()|date('Y-m') == columnDate | date('Y-m')%}
\t\t\t\t\t\t\t\t    \t\t\t{% set pl = (concurso.fechaInicio|date('d') * 3)|round %}
\t\t\t\t\t\t\t\t    \t\t\t{% set pr = ((31 - concurso.fechaFinal|date('d'))*3)|round %}
\t\t\t\t\t\t\t\t    \t\t\t<td padding: 4px;\" colspan=\"{{concurso.getMonthsLength()}}\">
\t\t\t\t\t\t\t\t    \t\t\t\t<a tabindex=\"0\" class=\"btn btn-primary btn-sm\" style=\"width: {{ 115 * concurso.getMonthsLength() - pl - pr - 18 }}px; background-color: #{{concurso.color}};position: relative;left: {{pl}}px;\" role=\"button\" data-toggle=\"popover\" data-trigger=\"focus\"  data-html=\"true\" title=\"{{ concurso.nombre }} ({{ concurso.getFechaInicio()|date('d-m') }}&nbsp; al &nbsp;{{ concurso.getFechaFinal()|date('d-m') }})\" data-content=\"{{concurso.descripcion}}</br><a href='{{concurso.link}}' target='_blank'>Web Oficial</a>\">{{ concurso.getFechaInicio()|date('d-m') }}&nbsp; al &nbsp;{{ concurso.getFechaFinal()|date('d-m') }} </a>
\t\t\t\t\t\t\t\t    \t\t\t</td>
\t\t\t\t\t\t\t\t    \t\t\t{% set free = false %}
\t\t\t\t\t\t\t\t    \t\t\t\t{% set busyLeft =  concurso.getMonthsLength() -1 %}
\t\t\t\t\t                \t\t{% endif %}
\t\t\t\t\t\t\t\t    \t{% endfor %}

\t\t\t\t\t\t\t\t    \t{% if free %}
\t\t\t\t\t\t\t\t    \t\t<td style=\"width:101px; padding: 4px;\">
\t\t\t\t\t\t\t\t    \t\t\t<div style=\"width:98px;\">
\t\t\t\t\t\t\t\t    \t\t\t</div>
\t\t\t\t\t\t\t\t    \t\t</td>
\t\t\t\t\t\t\t\t    \t{% endif %}
\t\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t                {% endfor %}

\t\t\t\t                <!-- cambiar aqui!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

\t\t\t\t\t\t    </tr>

\t\t\t\t    \t{% endfor %}
\t\t\t    \t</tbody>

\t\t    \t{% endfor %}
\t    \t</table>

\t    {% endfor %}
\t</div>

    <script type=\"text/javascript\">
\t\twindow.onload = function() {
\t\t    \$('[data-toggle=\"popover\"]').popover() 
\t\t};
    </script>

{% endblock %}
", "GanttBundle:Default:index.html.twig", "/Users/erick/Documents/Gantt/gantter/src/GanttBundle/Resources/views/Default/index.html.twig");
    }
}
