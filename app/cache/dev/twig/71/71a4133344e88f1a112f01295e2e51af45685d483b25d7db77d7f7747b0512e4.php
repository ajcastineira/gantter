<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5d06841897f21604e646cd0e15a7858753b670864064dfeae805ff35e2e46603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c42cd05fa525d84ffc10e4df97c40b4a393a3b9828a0e510273c96e94b9b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c42cd05fa525d84ffc10e4df97c40b4a393a3b9828a0e510273c96e94b9b9f->enter($__internal_72c42cd05fa525d84ffc10e4df97c40b4a393a3b9828a0e510273c96e94b9b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c42cd05fa525d84ffc10e4df97c40b4a393a3b9828a0e510273c96e94b9b9f->leave($__internal_72c42cd05fa525d84ffc10e4df97c40b4a393a3b9828a0e510273c96e94b9b9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_baba8a06a60f16827afe3beb503cc49bea1cdc1e6961d311c2017bc8187e42b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baba8a06a60f16827afe3beb503cc49bea1cdc1e6961d311c2017bc8187e42b2->enter($__internal_baba8a06a60f16827afe3beb503cc49bea1cdc1e6961d311c2017bc8187e42b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_baba8a06a60f16827afe3beb503cc49bea1cdc1e6961d311c2017bc8187e42b2->leave($__internal_baba8a06a60f16827afe3beb503cc49bea1cdc1e6961d311c2017bc8187e42b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0195606e91a7d97427e1ea49fd42f1723f44a7b5735b458efc0974e488900c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0195606e91a7d97427e1ea49fd42f1723f44a7b5735b458efc0974e488900c8c->enter($__internal_0195606e91a7d97427e1ea49fd42f1723f44a7b5735b458efc0974e488900c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0195606e91a7d97427e1ea49fd42f1723f44a7b5735b458efc0974e488900c8c->leave($__internal_0195606e91a7d97427e1ea49fd42f1723f44a7b5735b458efc0974e488900c8c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45272293088486e07fe30ec38de6bf991b13020e58616843dfe9e9369cca3713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45272293088486e07fe30ec38de6bf991b13020e58616843dfe9e9369cca3713->enter($__internal_45272293088486e07fe30ec38de6bf991b13020e58616843dfe9e9369cca3713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_45272293088486e07fe30ec38de6bf991b13020e58616843dfe9e9369cca3713->leave($__internal_45272293088486e07fe30ec38de6bf991b13020e58616843dfe9e9369cca3713_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/erick/Documents/Gantt/gantter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
