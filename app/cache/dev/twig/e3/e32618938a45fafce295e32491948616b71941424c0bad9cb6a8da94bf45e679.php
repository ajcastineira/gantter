<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_63fc9e1e6a62770c6a144d609b2d9d79573ff4944d45fc14d7eb294ab85ed7ba extends Twig_Template
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
        $__internal_0c404e5547e4aef3dbc8b345b24dbd666bf7e917cabf9351943aff9107c79c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c404e5547e4aef3dbc8b345b24dbd666bf7e917cabf9351943aff9107c79c58->enter($__internal_0c404e5547e4aef3dbc8b345b24dbd666bf7e917cabf9351943aff9107c79c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c404e5547e4aef3dbc8b345b24dbd666bf7e917cabf9351943aff9107c79c58->leave($__internal_0c404e5547e4aef3dbc8b345b24dbd666bf7e917cabf9351943aff9107c79c58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_359a6a459a94d8e03a77d853fc5ad308ea1e8bdde01cc14c6fbd7ec1b593d89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359a6a459a94d8e03a77d853fc5ad308ea1e8bdde01cc14c6fbd7ec1b593d89d->enter($__internal_359a6a459a94d8e03a77d853fc5ad308ea1e8bdde01cc14c6fbd7ec1b593d89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_359a6a459a94d8e03a77d853fc5ad308ea1e8bdde01cc14c6fbd7ec1b593d89d->leave($__internal_359a6a459a94d8e03a77d853fc5ad308ea1e8bdde01cc14c6fbd7ec1b593d89d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_013b9c7690b9fcb4c1be1fadb70763662bc77dbd6a3c871cded6de3509b579ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013b9c7690b9fcb4c1be1fadb70763662bc77dbd6a3c871cded6de3509b579ed->enter($__internal_013b9c7690b9fcb4c1be1fadb70763662bc77dbd6a3c871cded6de3509b579ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_013b9c7690b9fcb4c1be1fadb70763662bc77dbd6a3c871cded6de3509b579ed->leave($__internal_013b9c7690b9fcb4c1be1fadb70763662bc77dbd6a3c871cded6de3509b579ed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d5e885d334b1f2a36e649562a2918c4ae5890577e08a7702e4592e8af13a3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5e885d334b1f2a36e649562a2918c4ae5890577e08a7702e4592e8af13a3a7->enter($__internal_5d5e885d334b1f2a36e649562a2918c4ae5890577e08a7702e4592e8af13a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5d5e885d334b1f2a36e649562a2918c4ae5890577e08a7702e4592e8af13a3a7->leave($__internal_5d5e885d334b1f2a36e649562a2918c4ae5890577e08a7702e4592e8af13a3a7_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/erick/Documents/Gantt/gantter/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
