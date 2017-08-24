<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_76de621c20e8ebd7b211bb0ba78ed89cf0405274996d3f9f8f98f9c687d067f0 extends Twig_Template
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
        $__internal_0d3926dd2e5a08f92ed734a540bcb59697150f7604bf3020c41bacfa9602fafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d3926dd2e5a08f92ed734a540bcb59697150f7604bf3020c41bacfa9602fafa->enter($__internal_0d3926dd2e5a08f92ed734a540bcb59697150f7604bf3020c41bacfa9602fafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_39cf833f8e204d5b1517a40f04df9271d133ee0db5332cbc7cfc97d8bfec5ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cf833f8e204d5b1517a40f04df9271d133ee0db5332cbc7cfc97d8bfec5ec7->enter($__internal_39cf833f8e204d5b1517a40f04df9271d133ee0db5332cbc7cfc97d8bfec5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d3926dd2e5a08f92ed734a540bcb59697150f7604bf3020c41bacfa9602fafa->leave($__internal_0d3926dd2e5a08f92ed734a540bcb59697150f7604bf3020c41bacfa9602fafa_prof);

        
        $__internal_39cf833f8e204d5b1517a40f04df9271d133ee0db5332cbc7cfc97d8bfec5ec7->leave($__internal_39cf833f8e204d5b1517a40f04df9271d133ee0db5332cbc7cfc97d8bfec5ec7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7c1fbc7825d4fd5c99b9e191c9d0e09ff81f778b8b3f35ca8420a86e4479eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c1fbc7825d4fd5c99b9e191c9d0e09ff81f778b8b3f35ca8420a86e4479eda->enter($__internal_b7c1fbc7825d4fd5c99b9e191c9d0e09ff81f778b8b3f35ca8420a86e4479eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6eaeadafdbf1aab3a1b68fff2373e493936ae76a84ffa0402f3d50375b994f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaeadafdbf1aab3a1b68fff2373e493936ae76a84ffa0402f3d50375b994f8e->enter($__internal_6eaeadafdbf1aab3a1b68fff2373e493936ae76a84ffa0402f3d50375b994f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6eaeadafdbf1aab3a1b68fff2373e493936ae76a84ffa0402f3d50375b994f8e->leave($__internal_6eaeadafdbf1aab3a1b68fff2373e493936ae76a84ffa0402f3d50375b994f8e_prof);

        
        $__internal_b7c1fbc7825d4fd5c99b9e191c9d0e09ff81f778b8b3f35ca8420a86e4479eda->leave($__internal_b7c1fbc7825d4fd5c99b9e191c9d0e09ff81f778b8b3f35ca8420a86e4479eda_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c82f56ef12c1afaf5b381f97597f9a4b6fcb9613ecd2d000255ad341d6b3f713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82f56ef12c1afaf5b381f97597f9a4b6fcb9613ecd2d000255ad341d6b3f713->enter($__internal_c82f56ef12c1afaf5b381f97597f9a4b6fcb9613ecd2d000255ad341d6b3f713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96bc478ed3faf0bbc62ebf860e2cab411f35c3a0d282f555843aa7a62a9e3856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96bc478ed3faf0bbc62ebf860e2cab411f35c3a0d282f555843aa7a62a9e3856->enter($__internal_96bc478ed3faf0bbc62ebf860e2cab411f35c3a0d282f555843aa7a62a9e3856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_96bc478ed3faf0bbc62ebf860e2cab411f35c3a0d282f555843aa7a62a9e3856->leave($__internal_96bc478ed3faf0bbc62ebf860e2cab411f35c3a0d282f555843aa7a62a9e3856_prof);

        
        $__internal_c82f56ef12c1afaf5b381f97597f9a4b6fcb9613ecd2d000255ad341d6b3f713->leave($__internal_c82f56ef12c1afaf5b381f97597f9a4b6fcb9613ecd2d000255ad341d6b3f713_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c50b3a82be2a141a83b2bf38d4c23151ca18f695249e7c8fb84f8d5a971e19e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50b3a82be2a141a83b2bf38d4c23151ca18f695249e7c8fb84f8d5a971e19e6->enter($__internal_c50b3a82be2a141a83b2bf38d4c23151ca18f695249e7c8fb84f8d5a971e19e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c46d6eb060c344d042a8cd1fbf7ca8835932642490474428326d999b4d31681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c46d6eb060c344d042a8cd1fbf7ca8835932642490474428326d999b4d31681->enter($__internal_0c46d6eb060c344d042a8cd1fbf7ca8835932642490474428326d999b4d31681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0c46d6eb060c344d042a8cd1fbf7ca8835932642490474428326d999b4d31681->leave($__internal_0c46d6eb060c344d042a8cd1fbf7ca8835932642490474428326d999b4d31681_prof);

        
        $__internal_c50b3a82be2a141a83b2bf38d4c23151ca18f695249e7c8fb84f8d5a971e19e6->leave($__internal_c50b3a82be2a141a83b2bf38d4c23151ca18f695249e7c8fb84f8d5a971e19e6_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
