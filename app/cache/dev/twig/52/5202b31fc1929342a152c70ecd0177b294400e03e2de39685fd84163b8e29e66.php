<?php

/* concurso/new.html.twig */
class __TwigTemplate_4f1ad8f0f24a539e30d81dd524e65fa78e45fd8188efbd8ad9e1fd0736e109ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concurso/new.html.twig", 1);
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
        $__internal_bb5ab6a9107b392794a842d266523ec731b845e4a2b0ffa680a03d7eb44207d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5ab6a9107b392794a842d266523ec731b845e4a2b0ffa680a03d7eb44207d9->enter($__internal_bb5ab6a9107b392794a842d266523ec731b845e4a2b0ffa680a03d7eb44207d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5ab6a9107b392794a842d266523ec731b845e4a2b0ffa680a03d7eb44207d9->leave($__internal_bb5ab6a9107b392794a842d266523ec731b845e4a2b0ffa680a03d7eb44207d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40e50729e7dd7fa1729b0d22d6aa22ceb77ff04b402dc65a35bca6badda1602c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e50729e7dd7fa1729b0d22d6aa22ceb77ff04b402dc65a35bca6badda1602c->enter($__internal_40e50729e7dd7fa1729b0d22d6aa22ceb77ff04b402dc65a35bca6badda1602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"../js/jscolor.js\"></script>
    <h1>Concurso creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" value=\"Create\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
    <script>
</script>
";
        
        $__internal_40e50729e7dd7fa1729b0d22d6aa22ceb77ff04b402dc65a35bca6badda1602c->leave($__internal_40e50729e7dd7fa1729b0d22d6aa22ceb77ff04b402dc65a35bca6badda1602c_prof);

    }

    public function getTemplateName()
    {
        return "concurso/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  55 => 11,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <script src=\"../js/jscolor.js\"></script>
    <h1>Concurso creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}

        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('concurso_index') }}\">Back to the list</a>
        </li>
    </ul>
    <script>
</script>
{% endblock %}
", "concurso/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/new.html.twig");
    }
}
