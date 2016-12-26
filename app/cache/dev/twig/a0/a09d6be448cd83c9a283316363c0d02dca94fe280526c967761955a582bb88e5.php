<?php

/* concurso/edit.html.twig */
class __TwigTemplate_aca401af2c3077f68b75018a33b57278610642302e047b2a41fff5d1a23e5b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "concurso/edit.html.twig", 1);
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
        $__internal_099efa4f4b9a25d33ba02471f43fc4d54cc03ece46cd52feb9975debec39c407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099efa4f4b9a25d33ba02471f43fc4d54cc03ece46cd52feb9975debec39c407->enter($__internal_099efa4f4b9a25d33ba02471f43fc4d54cc03ece46cd52feb9975debec39c407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "concurso/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099efa4f4b9a25d33ba02471f43fc4d54cc03ece46cd52feb9975debec39c407->leave($__internal_099efa4f4b9a25d33ba02471f43fc4d54cc03ece46cd52feb9975debec39c407_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42dcc766f63212702b96fb5278af6752d7eb5ac9b1e1799e75d7468e724610d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dcc766f63212702b96fb5278af6752d7eb5ac9b1e1799e75d7468e724610d1->enter($__internal_42dcc766f63212702b96fb5278af6752d7eb5ac9b1e1799e75d7468e724610d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <script src=\"../js/jscolor.js\"></script>
    <h1>Concurso edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("concurso_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_42dcc766f63212702b96fb5278af6752d7eb5ac9b1e1799e75d7468e724610d1->leave($__internal_42dcc766f63212702b96fb5278af6752d7eb5ac9b1e1799e75d7468e724610d1_prof);

    }

    public function getTemplateName()
    {
        return "concurso/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Concurso edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('concurso_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "concurso/edit.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/concurso/edit.html.twig");
    }
}
