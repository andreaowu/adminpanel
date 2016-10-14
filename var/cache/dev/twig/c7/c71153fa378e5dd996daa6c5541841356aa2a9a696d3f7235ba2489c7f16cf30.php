<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a805d23e563c11362b3beceb900a13603c9d3e94ea02c31c26e977f26cb880d extends Twig_Template
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
        $__internal_dec4dc451f2ff1a43fce590c5c44cd82376763e273ae5463e114c58b83415e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec4dc451f2ff1a43fce590c5c44cd82376763e273ae5463e114c58b83415e62->enter($__internal_dec4dc451f2ff1a43fce590c5c44cd82376763e273ae5463e114c58b83415e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec4dc451f2ff1a43fce590c5c44cd82376763e273ae5463e114c58b83415e62->leave($__internal_dec4dc451f2ff1a43fce590c5c44cd82376763e273ae5463e114c58b83415e62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31b6ac62a9431ff09e12899aa7d08192be17b8a1918bc4e9493e3b48dc05128f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b6ac62a9431ff09e12899aa7d08192be17b8a1918bc4e9493e3b48dc05128f->enter($__internal_31b6ac62a9431ff09e12899aa7d08192be17b8a1918bc4e9493e3b48dc05128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_31b6ac62a9431ff09e12899aa7d08192be17b8a1918bc4e9493e3b48dc05128f->leave($__internal_31b6ac62a9431ff09e12899aa7d08192be17b8a1918bc4e9493e3b48dc05128f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_add53d53862dba54df2096219679c12fea3b6cb6dc3e3e5543b765b40b91b0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add53d53862dba54df2096219679c12fea3b6cb6dc3e3e5543b765b40b91b0d0->enter($__internal_add53d53862dba54df2096219679c12fea3b6cb6dc3e3e5543b765b40b91b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_add53d53862dba54df2096219679c12fea3b6cb6dc3e3e5543b765b40b91b0d0->leave($__internal_add53d53862dba54df2096219679c12fea3b6cb6dc3e3e5543b765b40b91b0d0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6fd465f71cf8e7afd5b1b96cc87c6049b8106dde5133b28dee89597d96e0602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fd465f71cf8e7afd5b1b96cc87c6049b8106dde5133b28dee89597d96e0602->enter($__internal_c6fd465f71cf8e7afd5b1b96cc87c6049b8106dde5133b28dee89597d96e0602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6fd465f71cf8e7afd5b1b96cc87c6049b8106dde5133b28dee89597d96e0602->leave($__internal_c6fd465f71cf8e7afd5b1b96cc87c6049b8106dde5133b28dee89597d96e0602_prof);

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
