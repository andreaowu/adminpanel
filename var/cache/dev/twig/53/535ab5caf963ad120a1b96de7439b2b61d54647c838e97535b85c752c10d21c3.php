<?php

/* AppBundle:Main:index.html.twig */
class __TwigTemplate_4f5bd97a81f27eb8146386186b2e6ece9067650f2b34b17eed883b59a547ad5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Main:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e6f5313300ca799fb99a98bd8a34aa38683f4578865f6453b2e70ab8b620de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6f5313300ca799fb99a98bd8a34aa38683f4578865f6453b2e70ab8b620de3->enter($__internal_4e6f5313300ca799fb99a98bd8a34aa38683f4578865f6453b2e70ab8b620de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e6f5313300ca799fb99a98bd8a34aa38683f4578865f6453b2e70ab8b620de3->leave($__internal_4e6f5313300ca799fb99a98bd8a34aa38683f4578865f6453b2e70ab8b620de3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_489435fd79829f864684a469abd3c2ca790977dc6521ec90086e31d4e7417282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489435fd79829f864684a469abd3c2ca790977dc6521ec90086e31d4e7417282->enter($__internal_489435fd79829f864684a469abd3c2ca790977dc6521ec90086e31d4e7417282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_489435fd79829f864684a469abd3c2ca790977dc6521ec90086e31d4e7417282->leave($__internal_489435fd79829f864684a469abd3c2ca790977dc6521ec90086e31d4e7417282_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb9e7ecb1d6ef6d928fdcb1d96489fad73a238dd85e539c8b020766dbfd52f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9e7ecb1d6ef6d928fdcb1d96489fad73a238dd85e539c8b020766dbfd52f56->enter($__internal_cb9e7ecb1d6ef6d928fdcb1d96489fad73a238dd85e539c8b020766dbfd52f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["user_create_form"]) ? $context["user_create_form"] : $this->getContext($context, "user_create_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "
<h2>User Management System</h2>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["user_create_form"]) ? $context["user_create_form"] : $this->getContext($context, "user_create_form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_create_form"]) ? $context["user_create_form"] : $this->getContext($context, "user_create_form")), "first", array()), 'widget', array("attr" => array("placeholder" => "First Name")));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_create_form"]) ? $context["user_create_form"] : $this->getContext($context, "user_create_form")), "last", array()), 'widget', array("attr" => array("placeholder" => "Last Name")));
        echo "
";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["user_create_form"]) ? $context["user_create_form"] : $this->getContext($context, "user_create_form")), 'form_end');
        echo "

<br>

";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["user_delete_form"]) ? $context["user_delete_form"] : $this->getContext($context, "user_delete_form")), 'form_start');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_delete_form"]) ? $context["user_delete_form"] : $this->getContext($context, "user_delete_form")), "name", array()), 'widget');
        echo "
";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["user_delete_form"]) ? $context["user_delete_form"] : $this->getContext($context, "user_delete_form")), 'form_end');
        echo "

<br>

";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["assign_user_form"]) ? $context["assign_user_form"] : $this->getContext($context, "assign_user_form")), 'form_start');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["assign_user_form"]) ? $context["assign_user_form"] : $this->getContext($context, "assign_user_form")), "users", array()), 'widget');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["assign_user_form"]) ? $context["assign_user_form"] : $this->getContext($context, "assign_user_form")), "groups", array()), 'widget');
        echo "
";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["assign_user_form"]) ? $context["assign_user_form"] : $this->getContext($context, "assign_user_form")), 'form_end');
        echo "

<br>

";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_user_group_form"]) ? $context["delete_user_group_form"] : $this->getContext($context, "delete_user_group_form")), 'form_start');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_user_group_form"]) ? $context["delete_user_group_form"] : $this->getContext($context, "delete_user_group_form")), "users", array()), 'widget');
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["delete_user_group_form"]) ? $context["delete_user_group_form"] : $this->getContext($context, "delete_user_group_form")), "groups", array()), 'widget');
        echo "
";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_user_group_form"]) ? $context["delete_user_group_form"] : $this->getContext($context, "delete_user_group_form")), 'form_end');
        echo "

<br>

";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["group_create_form"]) ? $context["group_create_form"] : $this->getContext($context, "group_create_form")), 'form_start');
        echo "
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_create_form"]) ? $context["group_create_form"] : $this->getContext($context, "group_create_form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Name")));
        echo "
";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["group_create_form"]) ? $context["group_create_form"] : $this->getContext($context, "group_create_form")), 'form_end');
        echo "

<br>

";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["group_delete_form"]) ? $context["group_delete_form"] : $this->getContext($context, "group_delete_form")), 'form_start');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_delete_form"]) ? $context["group_delete_form"] : $this->getContext($context, "group_delete_form")), "name", array()), 'widget');
        echo "
";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["group_delete_form"]) ? $context["group_delete_form"] : $this->getContext($context, "group_delete_form")), 'form_end');
        echo "

<br>

";
        
        $__internal_cb9e7ecb1d6ef6d928fdcb1d96489fad73a238dd85e539c8b020766dbfd52f56->leave($__internal_cb9e7ecb1d6ef6d928fdcb1d96489fad73a238dd85e539c8b020766dbfd52f56_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  150 => 43,  146 => 42,  139 => 38,  135 => 37,  131 => 36,  124 => 32,  120 => 31,  116 => 30,  112 => 29,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  86 => 18,  82 => 17,  78 => 16,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Admin{% endblock %}

{% block body %}
{% form_theme user_create_form 'bootstrap_3_layout.html.twig' %}

<h2>User Management System</h2>
{{ form_start(user_create_form) }}
    {{ form_widget(user_create_form.first, {'attr': {'placeholder': 'First Name'}}) }}
    {{ form_widget(user_create_form.last, {'attr': {'placeholder': 'Last Name'}}) }}
{{ form_end(user_create_form) }}

<br>

{{ form_start(user_delete_form) }}
    {{ form_widget(user_delete_form.name) }}
{{ form_end(user_delete_form) }}

<br>

{{ form_start(assign_user_form) }}
    {{ form_widget(assign_user_form.users) }}
    {{ form_widget(assign_user_form.groups) }}
{{ form_end(assign_user_form) }}

<br>

{{ form_start(delete_user_group_form) }}
    {{ form_widget(delete_user_group_form.users) }}
    {{ form_widget(delete_user_group_form.groups) }}
{{ form_end(delete_user_group_form) }}

<br>

{{ form_start(group_create_form) }}
    {{ form_widget(group_create_form.name, {'attr': {'placeholder': 'Name'}}) }}
{{ form_end(group_create_form) }}

<br>

{{ form_start(group_delete_form) }}
    {{ form_widget(group_delete_form.name) }}
{{ form_end(group_delete_form) }}

<br>

{% endblock %}
";
    }
}
