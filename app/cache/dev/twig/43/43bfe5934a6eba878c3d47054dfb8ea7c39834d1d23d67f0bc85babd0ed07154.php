<?php

/* fondolinea/new.html.twig */
class __TwigTemplate_93b9b376b82f1b5573bf6d86a4864d00080a94be13173700a97068bb58baf5cc extends Twig_Template
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
        $__internal_d0c174920f55d1a41c76289e34b10d30cf8182055c962834268714cdbce915da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c174920f55d1a41c76289e34b10d30cf8182055c962834268714cdbce915da->enter($__internal_d0c174920f55d1a41c76289e34b10d30cf8182055c962834268714cdbce915da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fondolinea/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c174920f55d1a41c76289e34b10d30cf8182055c962834268714cdbce915da->leave($__internal_d0c174920f55d1a41c76289e34b10d30cf8182055c962834268714cdbce915da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fce488c4f35051c3822d8e8b620ca67bf4d6f6d4cb8d48eefb0b101672a0f188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce488c4f35051c3822d8e8b620ca67bf4d6f6d4cb8d48eefb0b101672a0f188->enter($__internal_fce488c4f35051c3822d8e8b620ca67bf4d6f6d4cb8d48eefb0b101672a0f188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fce488c4f35051c3822d8e8b620ca67bf4d6f6d4cb8d48eefb0b101672a0f188->leave($__internal_fce488c4f35051c3822d8e8b620ca67bf4d6f6d4cb8d48eefb0b101672a0f188_prof);

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
", "fondolinea/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/fondolinea/new.html.twig");
    }
}
