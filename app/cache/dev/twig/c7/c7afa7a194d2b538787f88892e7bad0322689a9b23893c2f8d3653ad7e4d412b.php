<?php

/* security/login.html.twig */
class __TwigTemplate_e6309318234f8332137a6186b191b0b7437941a5087548247d085bc962c76e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_cb25806d0714adfe2a2a650065dadf2d58e1af2c96107f3153fc4f5f50d283dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb25806d0714adfe2a2a650065dadf2d58e1af2c96107f3153fc4f5f50d283dc->enter($__internal_cb25806d0714adfe2a2a650065dadf2d58e1af2c96107f3153fc4f5f50d283dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb25806d0714adfe2a2a650065dadf2d58e1af2c96107f3153fc4f5f50d283dc->leave($__internal_cb25806d0714adfe2a2a650065dadf2d58e1af2c96107f3153fc4f5f50d283dc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2671e668e0c1330cdb55dd6762c6992ccb9eaade041ba5c48fd2454f888c10b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2671e668e0c1330cdb55dd6762c6992ccb9eaade041ba5c48fd2454f888c10b5->enter($__internal_2671e668e0c1330cdb55dd6762c6992ccb9eaade041ba5c48fd2454f888c10b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "<div class=\"col-md-4 col-md-offset-4\">
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" class=\"input-group-addon\" lenght=\"300px\" method=\"post\">
        <label for=\"username\">Nombre de usuario o Email:</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        </br>
        </br>

        <label for=\"password\">Contraseña:</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 23
        echo "        <input type=\"hidden\" name=\"/\" value=\"/account\" />

        </br>
        </br>

        <button class=\"btn btn-default\"  type=\"submit\">login</button>
    </form>
    <!-- Button trigger modal -->

    <a href=\"https://intrawww.ing.puc.cl/siding/problemas.phtml\" >¿Olvidó su contraseña?</a>


    </div>
";
        
        $__internal_2671e668e0c1330cdb55dd6762c6992ccb9eaade041ba5c48fd2454f888c10b5->leave($__internal_2671e668e0c1330cdb55dd6762c6992ccb9eaade041ba5c48fd2454f888c10b5_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  56 => 11,  51 => 9,  48 => 8,  42 => 6,  40 => 5,  34 => 4,  11 => 1,);
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
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"col-md-4 col-md-offset-4\">
    <form action=\"{{ path('login_check') }}\" class=\"input-group-addon\" lenght=\"300px\" method=\"post\">
        <label for=\"username\">Nombre de usuario o Email:</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        </br>
        </br>

        <label for=\"password\">Contraseña:</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />

        {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        #}
        <input type=\"hidden\" name=\"/\" value=\"/account\" />

        </br>
        </br>

        <button class=\"btn btn-default\"  type=\"submit\">login</button>
    </form>
    <!-- Button trigger modal -->

    <a href=\"https://intrawww.ing.puc.cl/siding/problemas.phtml\" >¿Olvidó su contraseña?</a>


    </div>
{% endblock %}", "security/login.html.twig", "/Users/erick/Documents/Gantt/gantter/app/Resources/views/security/login.html.twig");
    }
}
