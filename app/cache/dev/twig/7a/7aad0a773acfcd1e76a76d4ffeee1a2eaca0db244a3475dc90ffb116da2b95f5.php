<?php

/* agencia/new.html.twig */
class __TwigTemplate_141364c8659fe7ff02aa49cc8ddb7009194b3f397ac9315f4386dfb50a411af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agencia/new.html.twig", 1);
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
        $__internal_6c08ab34dd17b3445e7a79612b092a309338f9224c5b327a9abebd867e265d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c08ab34dd17b3445e7a79612b092a309338f9224c5b327a9abebd867e265d62->enter($__internal_6c08ab34dd17b3445e7a79612b092a309338f9224c5b327a9abebd867e265d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c08ab34dd17b3445e7a79612b092a309338f9224c5b327a9abebd867e265d62->leave($__internal_6c08ab34dd17b3445e7a79612b092a309338f9224c5b327a9abebd867e265d62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_36ae1cc4beb1d71e884fb08aff79e4ebff87a123e224691187b4af864854e310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ae1cc4beb1d71e884fb08aff79e4ebff87a123e224691187b4af864854e310->enter($__internal_36ae1cc4beb1d71e884fb08aff79e4ebff87a123e224691187b4af864854e310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Agencia creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agencia_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_36ae1cc4beb1d71e884fb08aff79e4ebff87a123e224691187b4af864854e310->leave($__internal_36ae1cc4beb1d71e884fb08aff79e4ebff87a123e224691187b4af864854e310_prof);

    }

    public function getTemplateName()
    {
        return "agencia/new.html.twig";
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
    <h1>Agencia creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('agencia_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "agencia/new.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/agencia/new.html.twig");
    }
}
