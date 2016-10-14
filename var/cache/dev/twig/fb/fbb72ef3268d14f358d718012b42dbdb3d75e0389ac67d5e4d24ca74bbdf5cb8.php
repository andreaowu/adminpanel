<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3b618abe74633393d777b246455b39ad73cd642fa2cf6b6b613919bc3e6a0651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_985d8cd170d01aca60129f5dfdf6b11abb1aaf9de36d06cf05a45d38a3ade47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985d8cd170d01aca60129f5dfdf6b11abb1aaf9de36d06cf05a45d38a3ade47a->enter($__internal_985d8cd170d01aca60129f5dfdf6b11abb1aaf9de36d06cf05a45d38a3ade47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985d8cd170d01aca60129f5dfdf6b11abb1aaf9de36d06cf05a45d38a3ade47a->leave($__internal_985d8cd170d01aca60129f5dfdf6b11abb1aaf9de36d06cf05a45d38a3ade47a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51e91dbf8f5f6dc6d53c09c88b3f8f993bb5ad241179adbb6ee1eece302058be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e91dbf8f5f6dc6d53c09c88b3f8f993bb5ad241179adbb6ee1eece302058be->enter($__internal_51e91dbf8f5f6dc6d53c09c88b3f8f993bb5ad241179adbb6ee1eece302058be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_51e91dbf8f5f6dc6d53c09c88b3f8f993bb5ad241179adbb6ee1eece302058be->leave($__internal_51e91dbf8f5f6dc6d53c09c88b3f8f993bb5ad241179adbb6ee1eece302058be_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8285e258ae37e60efa4f4f9ae4837edd089d1e673c86c4068740b9bf757f9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8285e258ae37e60efa4f4f9ae4837edd089d1e673c86c4068740b9bf757f9ed->enter($__internal_f8285e258ae37e60efa4f4f9ae4837edd089d1e673c86c4068740b9bf757f9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f8285e258ae37e60efa4f4f9ae4837edd089d1e673c86c4068740b9bf757f9ed->leave($__internal_f8285e258ae37e60efa4f4f9ae4837edd089d1e673c86c4068740b9bf757f9ed_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f55a83ff27ba8384192ff1e9e24f184cfc4cd760e31618bcf0d391c745c17a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55a83ff27ba8384192ff1e9e24f184cfc4cd760e31618bcf0d391c745c17a29->enter($__internal_f55a83ff27ba8384192ff1e9e24f184cfc4cd760e31618bcf0d391c745c17a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f55a83ff27ba8384192ff1e9e24f184cfc4cd760e31618bcf0d391c745c17a29->leave($__internal_f55a83ff27ba8384192ff1e9e24f184cfc4cd760e31618bcf0d391c745c17a29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
