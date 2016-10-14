<?php

/* ::base.html.twig */
class __TwigTemplate_a923f302a6e0a487ac382dfb2d85207106bf851d3b999fa4aee09b4853b561b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_651f8f3cc24290605413c55c23c62114da273def36aed82eb473dc9deceeb49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651f8f3cc24290605413c55c23c62114da273def36aed82eb473dc9deceeb49d->enter($__internal_651f8f3cc24290605413c55c23c62114da273def36aed82eb473dc9deceeb49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_651f8f3cc24290605413c55c23c62114da273def36aed82eb473dc9deceeb49d->leave($__internal_651f8f3cc24290605413c55c23c62114da273def36aed82eb473dc9deceeb49d_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdb150096a63ef5728bb6540b87e8da07fb9566ed7d4bec2030b53ea1c078172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb150096a63ef5728bb6540b87e8da07fb9566ed7d4bec2030b53ea1c078172->enter($__internal_cdb150096a63ef5728bb6540b87e8da07fb9566ed7d4bec2030b53ea1c078172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cdb150096a63ef5728bb6540b87e8da07fb9566ed7d4bec2030b53ea1c078172->leave($__internal_cdb150096a63ef5728bb6540b87e8da07fb9566ed7d4bec2030b53ea1c078172_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a86fbe7f9845ac46d84d119f47045b07af72a561cdf80a1f293cd6837d4cdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a86fbe7f9845ac46d84d119f47045b07af72a561cdf80a1f293cd6837d4cdbd->enter($__internal_2a86fbe7f9845ac46d84d119f47045b07af72a561cdf80a1f293cd6837d4cdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2a86fbe7f9845ac46d84d119f47045b07af72a561cdf80a1f293cd6837d4cdbd->leave($__internal_2a86fbe7f9845ac46d84d119f47045b07af72a561cdf80a1f293cd6837d4cdbd_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_b65e8f119ef5f6306d9653c230a16fbf9f07f33b35ccdc5f2dcae5b1a1e2048a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65e8f119ef5f6306d9653c230a16fbf9f07f33b35ccdc5f2dcae5b1a1e2048a->enter($__internal_b65e8f119ef5f6306d9653c230a16fbf9f07f33b35ccdc5f2dcae5b1a1e2048a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b65e8f119ef5f6306d9653c230a16fbf9f07f33b35ccdc5f2dcae5b1a1e2048a->leave($__internal_b65e8f119ef5f6306d9653c230a16fbf9f07f33b35ccdc5f2dcae5b1a1e2048a_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b63feff7af858a97567137fdd286f35395cd093616548f9567741cc0f8974a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63feff7af858a97567137fdd286f35395cd093616548f9567741cc0f8974a07->enter($__internal_b63feff7af858a97567137fdd286f35395cd093616548f9567741cc0f8974a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b63feff7af858a97567137fdd286f35395cd093616548f9567741cc0f8974a07->leave($__internal_b63feff7af858a97567137fdd286f35395cd093616548f9567741cc0f8974a07_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 15,  89 => 14,  78 => 10,  66 => 9,  57 => 16,  54 => 15,  52 => 14,  45 => 11,  43 => 10,  39 => 9,  31 => 4,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css\">
    <link href=\"{{ asset('bundles/framework/css/custom.css') }}\" rel=\"stylesheet\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
