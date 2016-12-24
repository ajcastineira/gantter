<?php

/* fondolinea/new.html.twig */
class __TwigTemplate_c8169c2d9f95aab1758c0c3b9b3c79e43ce2aa233ac312c30a532c646b27e493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fondolinea/new.html.twig", 1);
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
        $__internal_f113bf08c6b5dc4a0843fa27283f51650459db1fd252cb993326ce33cf07707b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f113bf08c6b5dc4a0843fa27283f51650459db1fd252cb993326ce33cf07707b->enter($__internal_f113bf08c6b5dc4a0843fa27283f51650459db1fd252cb993326ce33cf07707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f113bf08c6b5dc4a0843fa27283f51650459db1fd252cb993326ce33cf07707b->leave($__internal_f113bf08c6b5dc4a0843fa27283f51650459db1fd252cb993326ce33cf07707b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_853ecacf830477c7d66ec2c0c32c266fbfe68164d208d70e19c8ce86057ee55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853ecacf830477c7d66ec2c0c32c266fbfe68164d208d70e19c8ce86057ee55a->enter($__internal_853ecacf830477c7d66ec2c0c32c266fbfe68164d208d70e19c8ce86057ee55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Fondolinea creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fondolinea_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_853ecacf830477c7d66ec2c0c32c266fbfe68164d208d70e19c8ce86057ee55a->leave($__internal_853ecacf830477c7d66ec2c0c32c266fbfe68164d208d70e19c8ce86057ee55a_prof);

    }

    public function getTemplateName()
    {
        return "fondolinea/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Fondolinea creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('fondolinea_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "fondolinea/new.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/fondolinea/new.html.twig");
    }
}
