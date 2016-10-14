<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9379a6f5a83611fcc2d4bf7e4d202f0444e7eddf5e3437390ae78efba34c884c extends Twig_Template
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
        $__internal_cb6b6c8df38fff970444de30f20755842f1d04ad4e9abbaf2440996eb41cd79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6b6c8df38fff970444de30f20755842f1d04ad4e9abbaf2440996eb41cd79b->enter($__internal_cb6b6c8df38fff970444de30f20755842f1d04ad4e9abbaf2440996eb41cd79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6b6c8df38fff970444de30f20755842f1d04ad4e9abbaf2440996eb41cd79b->leave($__internal_cb6b6c8df38fff970444de30f20755842f1d04ad4e9abbaf2440996eb41cd79b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83707583f9cafde92a2240360e4f1c85e5f32fa8a4cbc20d4183405732cd11c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83707583f9cafde92a2240360e4f1c85e5f32fa8a4cbc20d4183405732cd11c2->enter($__internal_83707583f9cafde92a2240360e4f1c85e5f32fa8a4cbc20d4183405732cd11c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83707583f9cafde92a2240360e4f1c85e5f32fa8a4cbc20d4183405732cd11c2->leave($__internal_83707583f9cafde92a2240360e4f1c85e5f32fa8a4cbc20d4183405732cd11c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e846504813bdbc0352b2e569f666dd1e44d2edf4f8966882fe7c1f817e905a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e846504813bdbc0352b2e569f666dd1e44d2edf4f8966882fe7c1f817e905a98->enter($__internal_e846504813bdbc0352b2e569f666dd1e44d2edf4f8966882fe7c1f817e905a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e846504813bdbc0352b2e569f666dd1e44d2edf4f8966882fe7c1f817e905a98->leave($__internal_e846504813bdbc0352b2e569f666dd1e44d2edf4f8966882fe7c1f817e905a98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_81761316cdf35bf73fb49dd47c0f017d75dc11446e196782f01b5bfd4cb95bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81761316cdf35bf73fb49dd47c0f017d75dc11446e196782f01b5bfd4cb95bb8->enter($__internal_81761316cdf35bf73fb49dd47c0f017d75dc11446e196782f01b5bfd4cb95bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81761316cdf35bf73fb49dd47c0f017d75dc11446e196782f01b5bfd4cb95bb8->leave($__internal_81761316cdf35bf73fb49dd47c0f017d75dc11446e196782f01b5bfd4cb95bb8_prof);

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
