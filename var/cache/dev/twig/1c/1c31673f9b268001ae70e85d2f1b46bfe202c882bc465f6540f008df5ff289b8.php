<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0383ea1afc234545b3e10509dc1bbf6b10eec4116f9dce1b8454df23f8749afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7985b6d30054e492e7decc28aab36c4933df47939ebb9a36dfbb9515bff0813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7985b6d30054e492e7decc28aab36c4933df47939ebb9a36dfbb9515bff0813->enter($__internal_d7985b6d30054e492e7decc28aab36c4933df47939ebb9a36dfbb9515bff0813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7985b6d30054e492e7decc28aab36c4933df47939ebb9a36dfbb9515bff0813->leave($__internal_d7985b6d30054e492e7decc28aab36c4933df47939ebb9a36dfbb9515bff0813_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d367d432bffef50fcdce60c514f250d7bf3d7e86987ea11cdc3b646a8cec743c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d367d432bffef50fcdce60c514f250d7bf3d7e86987ea11cdc3b646a8cec743c->enter($__internal_d367d432bffef50fcdce60c514f250d7bf3d7e86987ea11cdc3b646a8cec743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d367d432bffef50fcdce60c514f250d7bf3d7e86987ea11cdc3b646a8cec743c->leave($__internal_d367d432bffef50fcdce60c514f250d7bf3d7e86987ea11cdc3b646a8cec743c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bd1b4481aa4f3dda22c227d2476ef5104e6aee2200a47439a65d3a1a01c7e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd1b4481aa4f3dda22c227d2476ef5104e6aee2200a47439a65d3a1a01c7e58->enter($__internal_1bd1b4481aa4f3dda22c227d2476ef5104e6aee2200a47439a65d3a1a01c7e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1bd1b4481aa4f3dda22c227d2476ef5104e6aee2200a47439a65d3a1a01c7e58->leave($__internal_1bd1b4481aa4f3dda22c227d2476ef5104e6aee2200a47439a65d3a1a01c7e58_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ccfae33c14a4250a8e59a563b0cf7193bf027c66c103a11bda6fc4369e5a797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccfae33c14a4250a8e59a563b0cf7193bf027c66c103a11bda6fc4369e5a797->enter($__internal_9ccfae33c14a4250a8e59a563b0cf7193bf027c66c103a11bda6fc4369e5a797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ccfae33c14a4250a8e59a563b0cf7193bf027c66c103a11bda6fc4369e5a797->leave($__internal_9ccfae33c14a4250a8e59a563b0cf7193bf027c66c103a11bda6fc4369e5a797_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
