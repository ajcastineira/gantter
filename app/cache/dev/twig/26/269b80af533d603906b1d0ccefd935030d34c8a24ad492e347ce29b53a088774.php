<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_932e05bba0b97de4c98db63e616850139946e5f782b61bb8af6f7ae27ee9125e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01cc7c15a40ef1ba149b3d06ffedbb3af5a623167f64c116e17e2151ab775a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cc7c15a40ef1ba149b3d06ffedbb3af5a623167f64c116e17e2151ab775a4d->enter($__internal_01cc7c15a40ef1ba149b3d06ffedbb3af5a623167f64c116e17e2151ab775a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cc7c15a40ef1ba149b3d06ffedbb3af5a623167f64c116e17e2151ab775a4d->leave($__internal_01cc7c15a40ef1ba149b3d06ffedbb3af5a623167f64c116e17e2151ab775a4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0db655b98f948648cae91f473e0a9a8bac4f80915fe8c2b7a81b23627c51eff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db655b98f948648cae91f473e0a9a8bac4f80915fe8c2b7a81b23627c51eff4->enter($__internal_0db655b98f948648cae91f473e0a9a8bac4f80915fe8c2b7a81b23627c51eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0db655b98f948648cae91f473e0a9a8bac4f80915fe8c2b7a81b23627c51eff4->leave($__internal_0db655b98f948648cae91f473e0a9a8bac4f80915fe8c2b7a81b23627c51eff4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18507cd113220e6c4fda405f437a4d59634b5e40cf30d735eb4be38d1ed17651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18507cd113220e6c4fda405f437a4d59634b5e40cf30d735eb4be38d1ed17651->enter($__internal_18507cd113220e6c4fda405f437a4d59634b5e40cf30d735eb4be38d1ed17651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_18507cd113220e6c4fda405f437a4d59634b5e40cf30d735eb4be38d1ed17651->leave($__internal_18507cd113220e6c4fda405f437a4d59634b5e40cf30d735eb4be38d1ed17651_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4031ef62c26fa24155d4632e48143d5ae97091653199246a82a83ad5a9ea05c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4031ef62c26fa24155d4632e48143d5ae97091653199246a82a83ad5a9ea05c9->enter($__internal_4031ef62c26fa24155d4632e48143d5ae97091653199246a82a83ad5a9ea05c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4031ef62c26fa24155d4632e48143d5ae97091653199246a82a83ad5a9ea05c9->leave($__internal_4031ef62c26fa24155d4632e48143d5ae97091653199246a82a83ad5a9ea05c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
