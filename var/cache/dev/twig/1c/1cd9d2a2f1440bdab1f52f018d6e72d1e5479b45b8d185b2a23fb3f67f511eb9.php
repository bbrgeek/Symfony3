<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ee04ff00d96dc63de58129d5d2de0b86f8ea06141bf552d167867b50c36dab88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19ed9a3e9f45254360acf7b192d863806f6271d83c9929fad051cd991c6057a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ed9a3e9f45254360acf7b192d863806f6271d83c9929fad051cd991c6057a4->enter($__internal_19ed9a3e9f45254360acf7b192d863806f6271d83c9929fad051cd991c6057a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3991cc6e9950fb86140f5224ea5f64370eff2b2d409643f3388c08df27fe078b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3991cc6e9950fb86140f5224ea5f64370eff2b2d409643f3388c08df27fe078b->enter($__internal_3991cc6e9950fb86140f5224ea5f64370eff2b2d409643f3388c08df27fe078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ed9a3e9f45254360acf7b192d863806f6271d83c9929fad051cd991c6057a4->leave($__internal_19ed9a3e9f45254360acf7b192d863806f6271d83c9929fad051cd991c6057a4_prof);

        
        $__internal_3991cc6e9950fb86140f5224ea5f64370eff2b2d409643f3388c08df27fe078b->leave($__internal_3991cc6e9950fb86140f5224ea5f64370eff2b2d409643f3388c08df27fe078b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fab02ee5c76b9e05a776ca01a98e9e9adaa6cdd71df812fe1e1acad050e436f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab02ee5c76b9e05a776ca01a98e9e9adaa6cdd71df812fe1e1acad050e436f3->enter($__internal_fab02ee5c76b9e05a776ca01a98e9e9adaa6cdd71df812fe1e1acad050e436f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a3c216d34e291556e332d104442166e06e9e3e656e51c0ec8f014904e7a103f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c216d34e291556e332d104442166e06e9e3e656e51c0ec8f014904e7a103f0->enter($__internal_a3c216d34e291556e332d104442166e06e9e3e656e51c0ec8f014904e7a103f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a3c216d34e291556e332d104442166e06e9e3e656e51c0ec8f014904e7a103f0->leave($__internal_a3c216d34e291556e332d104442166e06e9e3e656e51c0ec8f014904e7a103f0_prof);

        
        $__internal_fab02ee5c76b9e05a776ca01a98e9e9adaa6cdd71df812fe1e1acad050e436f3->leave($__internal_fab02ee5c76b9e05a776ca01a98e9e9adaa6cdd71df812fe1e1acad050e436f3_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3939a59230a17aecc0328742e0c4edffde11cd220d648a61a1c22b7cedf7a53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3939a59230a17aecc0328742e0c4edffde11cd220d648a61a1c22b7cedf7a53d->enter($__internal_3939a59230a17aecc0328742e0c4edffde11cd220d648a61a1c22b7cedf7a53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5860ee3d1bd604831695ac6fa3d370dce58bd6cf55fbfcc24b4173770ccca318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5860ee3d1bd604831695ac6fa3d370dce58bd6cf55fbfcc24b4173770ccca318->enter($__internal_5860ee3d1bd604831695ac6fa3d370dce58bd6cf55fbfcc24b4173770ccca318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5860ee3d1bd604831695ac6fa3d370dce58bd6cf55fbfcc24b4173770ccca318->leave($__internal_5860ee3d1bd604831695ac6fa3d370dce58bd6cf55fbfcc24b4173770ccca318_prof);

        
        $__internal_3939a59230a17aecc0328742e0c4edffde11cd220d648a61a1c22b7cedf7a53d->leave($__internal_3939a59230a17aecc0328742e0c4edffde11cd220d648a61a1c22b7cedf7a53d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
