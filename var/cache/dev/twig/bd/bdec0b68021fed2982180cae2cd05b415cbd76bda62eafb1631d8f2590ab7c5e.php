<?php

/* AppBundle:Main:success.html.twig */
class __TwigTemplate_aa079b8f31e00803ec7a045de866bcb40ed19cb455e460fa99a7a220b7687351 extends Twig_Template
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
        $__internal_ebd4cd6afe51042142be5b887bf9753b692c96f0573c1a94e91a9beb3eaf4e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd4cd6afe51042142be5b887bf9753b692c96f0573c1a94e91a9beb3eaf4e8c->enter($__internal_ebd4cd6afe51042142be5b887bf9753b692c96f0573c1a94e91a9beb3eaf4e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Main:success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd4cd6afe51042142be5b887bf9753b692c96f0573c1a94e91a9beb3eaf4e8c->leave($__internal_ebd4cd6afe51042142be5b887bf9753b692c96f0573c1a94e91a9beb3eaf4e8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d84d2ff116cde4f580cd028b7c7025a05d45992d6bd10dcb3666f3fee9da972c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84d2ff116cde4f580cd028b7c7025a05d45992d6bd10dcb3666f3fee9da972c->enter($__internal_d84d2ff116cde4f580cd028b7c7025a05d45992d6bd10dcb3666f3fee9da972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Success";
        
        $__internal_d84d2ff116cde4f580cd028b7c7025a05d45992d6bd10dcb3666f3fee9da972c->leave($__internal_d84d2ff116cde4f580cd028b7c7025a05d45992d6bd10dcb3666f3fee9da972c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58a4254dc3c1f533265d552fa267f3071bfd8e908b0b9f0cfd886364e57845fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a4254dc3c1f533265d552fa267f3071bfd8e908b0b9f0cfd886364e57845fa->enter($__internal_58a4254dc3c1f533265d552fa267f3071bfd8e908b0b9f0cfd886364e57845fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h2>Success!</h2>
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
        
        $__internal_58a4254dc3c1f533265d552fa267f3071bfd8e908b0b9f0cfd886364e57845fa->leave($__internal_58a4254dc3c1f533265d552fa267f3071bfd8e908b0b9f0cfd886364e57845fa_prof);

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
        return array (  65 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Success{% endblock %}

{% block body %}

<h2>Success!</h2>
<p>{{ msg  }}</p>
{{ form_start(go_back_form) }}
{{ form_end(go_back_form) }}

{% endblock %}
";
    }
}
