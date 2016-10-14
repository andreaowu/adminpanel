<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e14c714d0e33283cf686e22f488330451405e2fb8fd529487243980f56999da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ae544a1a10927acd5905765fd72b3e89e7a17370171b7ca1da743a2abac820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ae544a1a10927acd5905765fd72b3e89e7a17370171b7ca1da743a2abac820->enter($__internal_86ae544a1a10927acd5905765fd72b3e89e7a17370171b7ca1da743a2abac820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ae544a1a10927acd5905765fd72b3e89e7a17370171b7ca1da743a2abac820->leave($__internal_86ae544a1a10927acd5905765fd72b3e89e7a17370171b7ca1da743a2abac820_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_057c30401e53341ec3617a7926459b12bb4dcd531f81ed70f8c16a5a5e88ee13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057c30401e53341ec3617a7926459b12bb4dcd531f81ed70f8c16a5a5e88ee13->enter($__internal_057c30401e53341ec3617a7926459b12bb4dcd531f81ed70f8c16a5a5e88ee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_057c30401e53341ec3617a7926459b12bb4dcd531f81ed70f8c16a5a5e88ee13->leave($__internal_057c30401e53341ec3617a7926459b12bb4dcd531f81ed70f8c16a5a5e88ee13_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d4dadf0e719f7507d94438b7e6d226c094546b5fed363b038336bd34d1b2bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4dadf0e719f7507d94438b7e6d226c094546b5fed363b038336bd34d1b2bf5->enter($__internal_1d4dadf0e719f7507d94438b7e6d226c094546b5fed363b038336bd34d1b2bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d4dadf0e719f7507d94438b7e6d226c094546b5fed363b038336bd34d1b2bf5->leave($__internal_1d4dadf0e719f7507d94438b7e6d226c094546b5fed363b038336bd34d1b2bf5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1df18f40b9b0cf4c54ce0dd3df7cc92b630c672baa39d58899e8a5d5eec18436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df18f40b9b0cf4c54ce0dd3df7cc92b630c672baa39d58899e8a5d5eec18436->enter($__internal_1df18f40b9b0cf4c54ce0dd3df7cc92b630c672baa39d58899e8a5d5eec18436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1df18f40b9b0cf4c54ce0dd3df7cc92b630c672baa39d58899e8a5d5eec18436->leave($__internal_1df18f40b9b0cf4c54ce0dd3df7cc92b630c672baa39d58899e8a5d5eec18436_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
