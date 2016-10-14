<?php

/* ::base.html.twig */
class __TwigTemplate_063a9562ec696ac0dfa9177baedc1604f34380f70abc57ac9243acbc48a23b47 extends Twig_Template
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
        $__internal_80ca7c7d8c8333753940328808af8573fcb9ac87cd7138028ec7e5bc933aec88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ca7c7d8c8333753940328808af8573fcb9ac87cd7138028ec7e5bc933aec88->enter($__internal_80ca7c7d8c8333753940328808af8573fcb9ac87cd7138028ec7e5bc933aec88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_80ca7c7d8c8333753940328808af8573fcb9ac87cd7138028ec7e5bc933aec88->leave($__internal_80ca7c7d8c8333753940328808af8573fcb9ac87cd7138028ec7e5bc933aec88_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_b312c5cc17b440029a86ba350a59576078519f9ad0f8d6e6531899f058d10d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b312c5cc17b440029a86ba350a59576078519f9ad0f8d6e6531899f058d10d71->enter($__internal_b312c5cc17b440029a86ba350a59576078519f9ad0f8d6e6531899f058d10d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b312c5cc17b440029a86ba350a59576078519f9ad0f8d6e6531899f058d10d71->leave($__internal_b312c5cc17b440029a86ba350a59576078519f9ad0f8d6e6531899f058d10d71_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b9e8736d7930c3026ed5b37f695f6e372706a7cecc00ea2a2501f88e9128614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9e8736d7930c3026ed5b37f695f6e372706a7cecc00ea2a2501f88e9128614->enter($__internal_5b9e8736d7930c3026ed5b37f695f6e372706a7cecc00ea2a2501f88e9128614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b9e8736d7930c3026ed5b37f695f6e372706a7cecc00ea2a2501f88e9128614->leave($__internal_5b9e8736d7930c3026ed5b37f695f6e372706a7cecc00ea2a2501f88e9128614_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_166ff6d4061b334e41b59aa0be1207fbbb108c1ba6e208269cb3b08bd92a3208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166ff6d4061b334e41b59aa0be1207fbbb108c1ba6e208269cb3b08bd92a3208->enter($__internal_166ff6d4061b334e41b59aa0be1207fbbb108c1ba6e208269cb3b08bd92a3208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_166ff6d4061b334e41b59aa0be1207fbbb108c1ba6e208269cb3b08bd92a3208->leave($__internal_166ff6d4061b334e41b59aa0be1207fbbb108c1ba6e208269cb3b08bd92a3208_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8576d99021c54911bb67e8a10130463788978161e653f4d26d01f639c70cf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8576d99021c54911bb67e8a10130463788978161e653f4d26d01f639c70cf41->enter($__internal_a8576d99021c54911bb67e8a10130463788978161e653f4d26d01f639c70cf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8576d99021c54911bb67e8a10130463788978161e653f4d26d01f639c70cf41->leave($__internal_a8576d99021c54911bb67e8a10130463788978161e653f4d26d01f639c70cf41_prof);

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
