<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8acc2b4ebbcfc2f6ea37a6d428f54b8dab89161db0cfa95ae78160fb397c8e11 extends Twig_Template
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
        $__internal_fcea5560a8671d31809740c96ebde272a453b7677d85abd66966f81294a19c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcea5560a8671d31809740c96ebde272a453b7677d85abd66966f81294a19c35->enter($__internal_fcea5560a8671d31809740c96ebde272a453b7677d85abd66966f81294a19c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcea5560a8671d31809740c96ebde272a453b7677d85abd66966f81294a19c35->leave($__internal_fcea5560a8671d31809740c96ebde272a453b7677d85abd66966f81294a19c35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_88b233a8781d95f5dfc753dbbb396fb5797d6d498999f0f4054cbf7622d5c7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b233a8781d95f5dfc753dbbb396fb5797d6d498999f0f4054cbf7622d5c7cd->enter($__internal_88b233a8781d95f5dfc753dbbb396fb5797d6d498999f0f4054cbf7622d5c7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88b233a8781d95f5dfc753dbbb396fb5797d6d498999f0f4054cbf7622d5c7cd->leave($__internal_88b233a8781d95f5dfc753dbbb396fb5797d6d498999f0f4054cbf7622d5c7cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08699c59ba865cfaf177bdb4a5102c5967906e9be3cc89df0af0a973fb270072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08699c59ba865cfaf177bdb4a5102c5967906e9be3cc89df0af0a973fb270072->enter($__internal_08699c59ba865cfaf177bdb4a5102c5967906e9be3cc89df0af0a973fb270072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08699c59ba865cfaf177bdb4a5102c5967906e9be3cc89df0af0a973fb270072->leave($__internal_08699c59ba865cfaf177bdb4a5102c5967906e9be3cc89df0af0a973fb270072_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3996fd11905720b51b15956aafbbd001124d1988c9f71f0d1248e4f362bf0248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3996fd11905720b51b15956aafbbd001124d1988c9f71f0d1248e4f362bf0248->enter($__internal_3996fd11905720b51b15956aafbbd001124d1988c9f71f0d1248e4f362bf0248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3996fd11905720b51b15956aafbbd001124d1988c9f71f0d1248e4f362bf0248->leave($__internal_3996fd11905720b51b15956aafbbd001124d1988c9f71f0d1248e4f362bf0248_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
