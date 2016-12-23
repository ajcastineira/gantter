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
        $__internal_7da040c9dd8c3278c13f5c62b9193b301393272dab6ac7136054492ca9776e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da040c9dd8c3278c13f5c62b9193b301393272dab6ac7136054492ca9776e41->enter($__internal_7da040c9dd8c3278c13f5c62b9193b301393272dab6ac7136054492ca9776e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GanttBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da040c9dd8c3278c13f5c62b9193b301393272dab6ac7136054492ca9776e41->leave($__internal_7da040c9dd8c3278c13f5c62b9193b301393272dab6ac7136054492ca9776e41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_badad5227a60be71cf82961d3a0858a2785310530f2330730a8c2c259f25e177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badad5227a60be71cf82961d3a0858a2785310530f2330730a8c2c259f25e177->enter($__internal_badad5227a60be71cf82961d3a0858a2785310530f2330730a8c2c259f25e177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bienvenido a Gantter</h1>
";
        
        $__internal_badad5227a60be71cf82961d3a0858a2785310530f2330730a8c2c259f25e177->leave($__internal_badad5227a60be71cf82961d3a0858a2785310530f2330730a8c2c259f25e177_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% endblock %}
", "GanttBundle:Default:index.html.twig", "/Users/erick/Documents/Gantt/gantter/src/GanttBundle/Resources/views/Default/index.html.twig");
    }
}
