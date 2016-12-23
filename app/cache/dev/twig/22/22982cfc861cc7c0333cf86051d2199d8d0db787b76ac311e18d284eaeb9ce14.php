<?php

/* agencia/new.html.twig */
class __TwigTemplate_273cef141cc346a3ebe612ec52c1c76e1eae4867a31f051548bb51943bf3b5e0 extends Twig_Template
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
        $__internal_19e399c54033cef6c5eea15372bfed14baf98fa10d7dbdecfdf9e09b251edddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e399c54033cef6c5eea15372bfed14baf98fa10d7dbdecfdf9e09b251edddb->enter($__internal_19e399c54033cef6c5eea15372bfed14baf98fa10d7dbdecfdf9e09b251edddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agencia/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19e399c54033cef6c5eea15372bfed14baf98fa10d7dbdecfdf9e09b251edddb->leave($__internal_19e399c54033cef6c5eea15372bfed14baf98fa10d7dbdecfdf9e09b251edddb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6556193aff3366f705f308437844f3cbe35573d8d081eaccfffcabf930296412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6556193aff3366f705f308437844f3cbe35573d8d081eaccfffcabf930296412->enter($__internal_6556193aff3366f705f308437844f3cbe35573d8d081eaccfffcabf930296412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6556193aff3366f705f308437844f3cbe35573d8d081eaccfffcabf930296412->leave($__internal_6556193aff3366f705f308437844f3cbe35573d8d081eaccfffcabf930296412_prof);

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
", "agencia/new.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/agencia/new.html.twig");
    }
}
