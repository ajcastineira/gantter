<?php

/* programa/new.html.twig */
class __TwigTemplate_f7dedc04eff54c3e6e95fe18ba1f98d63f602c08c2db30ecccb086fe0088bcde extends Twig_Template
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
        $__internal_fbf76fecc469a04b49cb08c3472dfe7b43d0c3fbb18dda2426571168c2307d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf76fecc469a04b49cb08c3472dfe7b43d0c3fbb18dda2426571168c2307d98->enter($__internal_fbf76fecc469a04b49cb08c3472dfe7b43d0c3fbb18dda2426571168c2307d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf76fecc469a04b49cb08c3472dfe7b43d0c3fbb18dda2426571168c2307d98->leave($__internal_fbf76fecc469a04b49cb08c3472dfe7b43d0c3fbb18dda2426571168c2307d98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da51db73669f14b0ec56f8ebf95b7b0cc023459748fef6c9053241f1327a202a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da51db73669f14b0ec56f8ebf95b7b0cc023459748fef6c9053241f1327a202a->enter($__internal_da51db73669f14b0ec56f8ebf95b7b0cc023459748fef6c9053241f1327a202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Programa creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_da51db73669f14b0ec56f8ebf95b7b0cc023459748fef6c9053241f1327a202a->leave($__internal_da51db73669f14b0ec56f8ebf95b7b0cc023459748fef6c9053241f1327a202a_prof);

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
    <h1>Programa creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('programa_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "programa/new.html.twig", "/Users/ericksho/Documents/Trabajo/gantter/app/Resources/views/programa/new.html.twig");
    }
}
