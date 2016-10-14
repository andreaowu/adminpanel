<?php

/* AppBundle:Main:success.html.twig */
class __TwigTemplate_c1b9c951640e6479fd70a42f47416c4834714cfc801ce5d925344dd1bfc7d622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Main:success.html.twig", 1);
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
        $__internal_55bb8493c1654441edffe40bbde5bd0fc1d77594e0f1c7fb3cd871edd1757e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bb8493c1654441edffe40bbde5bd0fc1d77594e0f1c7fb3cd871edd1757e48->enter($__internal_55bb8493c1654441edffe40bbde5bd0fc1d77594e0f1c7fb3cd871edd1757e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55bb8493c1654441edffe40bbde5bd0fc1d77594e0f1c7fb3cd871edd1757e48->leave($__internal_55bb8493c1654441edffe40bbde5bd0fc1d77594e0f1c7fb3cd871edd1757e48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f30b2852be8d565c87ce7c19bd9873b79e3e6587b9bc33f81b6c5541763f5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f30b2852be8d565c87ce7c19bd9873b79e3e6587b9bc33f81b6c5541763f5fb->enter($__internal_7f30b2852be8d565c87ce7c19bd9873b79e3e6587b9bc33f81b6c5541763f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["outcome"]) ? $context["outcome"] : $this->getContext($context, "outcome")), "html", null, true);
        
        $__internal_7f30b2852be8d565c87ce7c19bd9873b79e3e6587b9bc33f81b6c5541763f5fb->leave($__internal_7f30b2852be8d565c87ce7c19bd9873b79e3e6587b9bc33f81b6c5541763f5fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6ad7703a086145c33920155cc975715e2ed58b42b0776a4faa1e553170b3560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ad7703a086145c33920155cc975715e2ed58b42b0776a4faa1e553170b3560->enter($__internal_d6ad7703a086145c33920155cc975715e2ed58b42b0776a4faa1e553170b3560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h2>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["outcome"]) ? $context["outcome"] : $this->getContext($context, "outcome")), "html", null, true);
        echo "</h2>
<p>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "</p>
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["go_back_form"]) ? $context["go_back_form"] : $this->getContext($context, "go_back_form")), 'form_start');
        echo "
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["go_back_form"]) ? $context["go_back_form"] : $this->getContext($context, "go_back_form")), 'form_end');
        echo "

";
        
        $__internal_d6ad7703a086145c33920155cc975715e2ed58b42b0776a4faa1e553170b3560->leave($__internal_d6ad7703a086145c33920155cc975715e2ed58b42b0776a4faa1e553170b3560_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Main:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}{{ outcome }}{% endblock %}

{% block body %}

<h2>{{ outcome }}</h2>
<p>{{ msg  }}</p>
{{ form_start(go_back_form) }}
{{ form_end(go_back_form) }}

{% endblock %}
";
    }
}
