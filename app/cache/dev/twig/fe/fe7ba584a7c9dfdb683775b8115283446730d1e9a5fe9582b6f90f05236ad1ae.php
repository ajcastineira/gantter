<?php

/* programa/new.html.twig */
class __TwigTemplate_3fa5bdc0b14b55f248781a1cd008449ec142832bb95069312020d20f7833e7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "programa/new.html.twig", 1);
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
        $__internal_254c6e218bbfa2f79ff624ca84e5bccf245790af7996cb7162acc1d9e6b19977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254c6e218bbfa2f79ff624ca84e5bccf245790af7996cb7162acc1d9e6b19977->enter($__internal_254c6e218bbfa2f79ff624ca84e5bccf245790af7996cb7162acc1d9e6b19977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254c6e218bbfa2f79ff624ca84e5bccf245790af7996cb7162acc1d9e6b19977->leave($__internal_254c6e218bbfa2f79ff624ca84e5bccf245790af7996cb7162acc1d9e6b19977_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbac34f9dd993a27dbd5e8fb54198b980a15378f055cecbdf93a8589b8e4623c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbac34f9dd993a27dbd5e8fb54198b980a15378f055cecbdf93a8589b8e4623c->enter($__internal_dbac34f9dd993a27dbd5e8fb54198b980a15378f055cecbdf93a8589b8e4623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear Programa</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("application_index");
        echo "\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
";
        
        $__internal_dbac34f9dd993a27dbd5e8fb54198b980a15378f055cecbdf93a8589b8e4623c->leave($__internal_dbac34f9dd993a27dbd5e8fb54198b980a15378f055cecbdf93a8589b8e4623c_prof);

    }

    public function getTemplateName()
    {
        return "programa/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Crear Programa</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-primary btn1\"  value=\"Postular\" />
    {{ form_end(form) }}

    <a href=\"{{ path('application_index') }}\" class=\"btn btn-danger btn2\" role=\"button\" >Cancelar</a>
{% endblock %}
", "programa/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/programa/new.html.twig");
    }
}
