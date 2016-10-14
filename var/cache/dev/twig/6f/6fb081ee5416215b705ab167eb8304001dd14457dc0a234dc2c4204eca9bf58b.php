<?php

/* AppBundle:Main:index.html.twig */
class __TwigTemplate_712bde42725df3870a3037fd064c54ca0edd0cc8f6bc263107fadb71065386c1 extends Twig_Template
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
        $__internal_d7be59b0f5664c4d4a051820407566f9cac1f2a155773f05a2b0cf46c651262d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7be59b0f5664c4d4a051820407566f9cac1f2a155773f05a2b0cf46c651262d->enter($__internal_d7be59b0f5664c4d4a051820407566f9cac1f2a155773f05a2b0cf46c651262d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7be59b0f5664c4d4a051820407566f9cac1f2a155773f05a2b0cf46c651262d->leave($__internal_d7be59b0f5664c4d4a051820407566f9cac1f2a155773f05a2b0cf46c651262d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_315d1bb6ae3e8d758c3ec2a58618e2042fba4af45532bbbfabc4e67e61dd0ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315d1bb6ae3e8d758c3ec2a58618e2042fba4af45532bbbfabc4e67e61dd0ea3->enter($__internal_315d1bb6ae3e8d758c3ec2a58618e2042fba4af45532bbbfabc4e67e61dd0ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_315d1bb6ae3e8d758c3ec2a58618e2042fba4af45532bbbfabc4e67e61dd0ea3->leave($__internal_315d1bb6ae3e8d758c3ec2a58618e2042fba4af45532bbbfabc4e67e61dd0ea3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8187f0fc7de6ef6d7ee2a75bf39863812057cee7cd19f2935fd00196ecda9857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8187f0fc7de6ef6d7ee2a75bf39863812057cee7cd19f2935fd00196ecda9857->enter($__internal_8187f0fc7de6ef6d7ee2a75bf39863812057cee7cd19f2935fd00196ecda9857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["user_delete_form"]) ? $context["user_delete_form"] : $this->getContext($context, "user_delete_form")), "Name", array()), 'widget');
        echo "
";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["user_delete_form"]) ? $context["user_delete_form"] : $this->getContext($context, "user_delete_form")), 'form_end');
        echo "

<br>

<div class=\"container\">
    <select class=\"form-control\">
        <option>User</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <select class=\"form-control\">
        <option>Group</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <button type=\"submit\" class=\"btn btn-default\">Assign User to Group</button>
</div>
<br>

<div class=\"container\">
    <select class=\"form-control\">
        <option>User</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <select class=\"form-control\">
        <option>Group</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <button type=\"submit\" class=\"btn btn-default\">Remove User from Group</button>
</div>
<br>

";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["group_create_form"]) ? $context["group_create_form"] : $this->getContext($context, "group_create_form")), 'form_start');
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_create_form"]) ? $context["group_create_form"] : $this->getContext($context, "group_create_form")), "name", array()), 'widget', array("attr" => array("placeholder" => "Name")));
        echo "
";
        // line 62
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["group_create_form"]) ? $context["group_create_form"] : $this->getContext($context, "group_create_form")), 'form_end');
        echo "

<br>
<br>

<div class=\"container\">
    <select class=\"form-control\">
        <option>Group</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>
    <button type=\"submit\" class=\"btn btn-default\">Delete Group</button>
    </div>
</div>
<br>

";
        
        $__internal_8187f0fc7de6ef6d7ee2a75bf39863812057cee7cd19f2935fd00196ecda9857->leave($__internal_8187f0fc7de6ef6d7ee2a75bf39863812057cee7cd19f2935fd00196ecda9857_prof);

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
        return array (  139 => 62,  135 => 61,  131 => 60,  86 => 18,  82 => 17,  78 => 16,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    {{ form_widget(user_delete_form.Name) }}
{{ form_end(user_delete_form) }}

<br>

<div class=\"container\">
    <select class=\"form-control\">
        <option>User</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <select class=\"form-control\">
        <option>Group</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <button type=\"submit\" class=\"btn btn-default\">Assign User to Group</button>
</div>
<br>

<div class=\"container\">
    <select class=\"form-control\">
        <option>User</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <select class=\"form-control\">
        <option>Group</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>

    <button type=\"submit\" class=\"btn btn-default\">Remove User from Group</button>
</div>
<br>

{{ form_start(group_create_form) }}
    {{ form_widget(group_create_form.name, {'attr': {'placeholder': 'Name'}}) }}
{{ form_end(group_create_form) }}

<br>
<br>

<div class=\"container\">
    <select class=\"form-control\">
        <option>Group</option>
        <option>HTML</option>
        <option>CSS</option>
        <option>Hello</option>
    </select>
    <button type=\"submit\" class=\"btn btn-default\">Delete Group</button>
    </div>
</div>
<br>

{% endblock %}
";
    }
}
