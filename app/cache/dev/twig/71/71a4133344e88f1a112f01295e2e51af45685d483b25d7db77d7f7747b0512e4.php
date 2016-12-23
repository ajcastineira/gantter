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
        $__internal_c25a73088d2bd53b2bd65d0b934b0cce986bf141bc9492fb3a0ff3e2134d27ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25a73088d2bd53b2bd65d0b934b0cce986bf141bc9492fb3a0ff3e2134d27ba->enter($__internal_c25a73088d2bd53b2bd65d0b934b0cce986bf141bc9492fb3a0ff3e2134d27ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c25a73088d2bd53b2bd65d0b934b0cce986bf141bc9492fb3a0ff3e2134d27ba->leave($__internal_c25a73088d2bd53b2bd65d0b934b0cce986bf141bc9492fb3a0ff3e2134d27ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ff16d46c1bd8d5b245b5a212b1605aec30c1db4deb160e0b4c4467d16e7ec7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff16d46c1bd8d5b245b5a212b1605aec30c1db4deb160e0b4c4467d16e7ec7e->enter($__internal_1ff16d46c1bd8d5b245b5a212b1605aec30c1db4deb160e0b4c4467d16e7ec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ff16d46c1bd8d5b245b5a212b1605aec30c1db4deb160e0b4c4467d16e7ec7e->leave($__internal_1ff16d46c1bd8d5b245b5a212b1605aec30c1db4deb160e0b4c4467d16e7ec7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf99ca7d1781f0cdc31946af1e0f9d93993ba9ba3106fe613f784bfcc50d5162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf99ca7d1781f0cdc31946af1e0f9d93993ba9ba3106fe613f784bfcc50d5162->enter($__internal_bf99ca7d1781f0cdc31946af1e0f9d93993ba9ba3106fe613f784bfcc50d5162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bf99ca7d1781f0cdc31946af1e0f9d93993ba9ba3106fe613f784bfcc50d5162->leave($__internal_bf99ca7d1781f0cdc31946af1e0f9d93993ba9ba3106fe613f784bfcc50d5162_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3d1f4ed5ef1d6c1e9212ec8ac342f5991d36809760409f3a16b4027c4c6149b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d1f4ed5ef1d6c1e9212ec8ac342f5991d36809760409f3a16b4027c4c6149b->enter($__internal_c3d1f4ed5ef1d6c1e9212ec8ac342f5991d36809760409f3a16b4027c4c6149b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3d1f4ed5ef1d6c1e9212ec8ac342f5991d36809760409f3a16b4027c4c6149b->leave($__internal_c3d1f4ed5ef1d6c1e9212ec8ac342f5991d36809760409f3a16b4027c4c6149b_prof);

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
