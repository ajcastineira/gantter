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
        $__internal_282ced92f517cf6f490b38199e2dfea2b9764c0399884af9bdf2879929270f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282ced92f517cf6f490b38199e2dfea2b9764c0399884af9bdf2879929270f59->enter($__internal_282ced92f517cf6f490b38199e2dfea2b9764c0399884af9bdf2879929270f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282ced92f517cf6f490b38199e2dfea2b9764c0399884af9bdf2879929270f59->leave($__internal_282ced92f517cf6f490b38199e2dfea2b9764c0399884af9bdf2879929270f59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7e36fa48137467e8cfed8b764220e69430aa4473ece6c289a9f4becda4a1042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e36fa48137467e8cfed8b764220e69430aa4473ece6c289a9f4becda4a1042->enter($__internal_e7e36fa48137467e8cfed8b764220e69430aa4473ece6c289a9f4becda4a1042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e7e36fa48137467e8cfed8b764220e69430aa4473ece6c289a9f4becda4a1042->leave($__internal_e7e36fa48137467e8cfed8b764220e69430aa4473ece6c289a9f4becda4a1042_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a5dd8cc788131292f6b0a0b77841c24dc9a4bbf512925e94ecff34ae4762f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5dd8cc788131292f6b0a0b77841c24dc9a4bbf512925e94ecff34ae4762f00->enter($__internal_7a5dd8cc788131292f6b0a0b77841c24dc9a4bbf512925e94ecff34ae4762f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a5dd8cc788131292f6b0a0b77841c24dc9a4bbf512925e94ecff34ae4762f00->leave($__internal_7a5dd8cc788131292f6b0a0b77841c24dc9a4bbf512925e94ecff34ae4762f00_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d34892812b87f89f9f2bef28605dd04b424750951d6f87b050f7e532a45f752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d34892812b87f89f9f2bef28605dd04b424750951d6f87b050f7e532a45f752->enter($__internal_3d34892812b87f89f9f2bef28605dd04b424750951d6f87b050f7e532a45f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3d34892812b87f89f9f2bef28605dd04b424750951d6f87b050f7e532a45f752->leave($__internal_3d34892812b87f89f9f2bef28605dd04b424750951d6f87b050f7e532a45f752_prof);

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
