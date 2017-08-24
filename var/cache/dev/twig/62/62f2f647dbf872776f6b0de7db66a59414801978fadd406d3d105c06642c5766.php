<?php

/* ::base.html.twig */
class __TwigTemplate_7d3b4e223f2b045c2099b7f73c2078c34bac7cd551707f2a523b49cd7da0d796 extends Twig_Template
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
        $__internal_f9ca3fcd681777017d5f4bfbd8418e16e697213574533e6ae83521700523899c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ca3fcd681777017d5f4bfbd8418e16e697213574533e6ae83521700523899c->enter($__internal_f9ca3fcd681777017d5f4bfbd8418e16e697213574533e6ae83521700523899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_97fc7a85896e640edb7afe7f2b37e56e5656de355ea3561ff067cc41e72cebc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fc7a85896e640edb7afe7f2b37e56e5656de355ea3561ff067cc41e72cebc9->enter($__internal_97fc7a85896e640edb7afe7f2b37e56e5656de355ea3561ff067cc41e72cebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_f9ca3fcd681777017d5f4bfbd8418e16e697213574533e6ae83521700523899c->leave($__internal_f9ca3fcd681777017d5f4bfbd8418e16e697213574533e6ae83521700523899c_prof);

        
        $__internal_97fc7a85896e640edb7afe7f2b37e56e5656de355ea3561ff067cc41e72cebc9->leave($__internal_97fc7a85896e640edb7afe7f2b37e56e5656de355ea3561ff067cc41e72cebc9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd1af675790482f67621144bbb9bb471664dd171645930807716bc580855cba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1af675790482f67621144bbb9bb471664dd171645930807716bc580855cba7->enter($__internal_fd1af675790482f67621144bbb9bb471664dd171645930807716bc580855cba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35b1e82b4e6c7cb34f000a5082f0a8a41a76b15a2f0584fe986547bf2bc77015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b1e82b4e6c7cb34f000a5082f0a8a41a76b15a2f0584fe986547bf2bc77015->enter($__internal_35b1e82b4e6c7cb34f000a5082f0a8a41a76b15a2f0584fe986547bf2bc77015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_35b1e82b4e6c7cb34f000a5082f0a8a41a76b15a2f0584fe986547bf2bc77015->leave($__internal_35b1e82b4e6c7cb34f000a5082f0a8a41a76b15a2f0584fe986547bf2bc77015_prof);

        
        $__internal_fd1af675790482f67621144bbb9bb471664dd171645930807716bc580855cba7->leave($__internal_fd1af675790482f67621144bbb9bb471664dd171645930807716bc580855cba7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38acb17903d780a79da7a68abd4b62074b102b66146f64871c40374e6197fe27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38acb17903d780a79da7a68abd4b62074b102b66146f64871c40374e6197fe27->enter($__internal_38acb17903d780a79da7a68abd4b62074b102b66146f64871c40374e6197fe27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d03a9a760debb0b843d62914ffd88478ae66a3423a4c0f7c725b2a3c79fd19df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03a9a760debb0b843d62914ffd88478ae66a3423a4c0f7c725b2a3c79fd19df->enter($__internal_d03a9a760debb0b843d62914ffd88478ae66a3423a4c0f7c725b2a3c79fd19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d03a9a760debb0b843d62914ffd88478ae66a3423a4c0f7c725b2a3c79fd19df->leave($__internal_d03a9a760debb0b843d62914ffd88478ae66a3423a4c0f7c725b2a3c79fd19df_prof);

        
        $__internal_38acb17903d780a79da7a68abd4b62074b102b66146f64871c40374e6197fe27->leave($__internal_38acb17903d780a79da7a68abd4b62074b102b66146f64871c40374e6197fe27_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5522adb17c9e76818c5df5aaf9eca61c1d338727e4b227470958647c1fc2c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5522adb17c9e76818c5df5aaf9eca61c1d338727e4b227470958647c1fc2c6e->enter($__internal_c5522adb17c9e76818c5df5aaf9eca61c1d338727e4b227470958647c1fc2c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e70a459cdb04f0534401c5d180b96a50e020f968677abaf6789ac33cdf83a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e70a459cdb04f0534401c5d180b96a50e020f968677abaf6789ac33cdf83a7a->enter($__internal_8e70a459cdb04f0534401c5d180b96a50e020f968677abaf6789ac33cdf83a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e70a459cdb04f0534401c5d180b96a50e020f968677abaf6789ac33cdf83a7a->leave($__internal_8e70a459cdb04f0534401c5d180b96a50e020f968677abaf6789ac33cdf83a7a_prof);

        
        $__internal_c5522adb17c9e76818c5df5aaf9eca61c1d338727e4b227470958647c1fc2c6e->leave($__internal_c5522adb17c9e76818c5df5aaf9eca61c1d338727e4b227470958647c1fc2c6e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f143caf149b6d49b3470bafc7eb246d47639e4b567daed6e00798cf91001d4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f143caf149b6d49b3470bafc7eb246d47639e4b567daed6e00798cf91001d4cb->enter($__internal_f143caf149b6d49b3470bafc7eb246d47639e4b567daed6e00798cf91001d4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ef375e19fd72c598691d77d76c5edd93aebbac9f80eb42d1d1f4993c472ee3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef375e19fd72c598691d77d76c5edd93aebbac9f80eb42d1d1f4993c472ee3a9->enter($__internal_ef375e19fd72c598691d77d76c5edd93aebbac9f80eb42d1d1f4993c472ee3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ef375e19fd72c598691d77d76c5edd93aebbac9f80eb42d1d1f4993c472ee3a9->leave($__internal_ef375e19fd72c598691d77d76c5edd93aebbac9f80eb42d1d1f4993c472ee3a9_prof);

        
        $__internal_f143caf149b6d49b3470bafc7eb246d47639e4b567daed6e00798cf91001d4cb->leave($__internal_f143caf149b6d49b3470bafc7eb246d47639e4b567daed6e00798cf91001d4cb_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
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
", "::base.html.twig", "/home/sibot/web/Symfony/app/Resources/views/base.html.twig");
    }
}
