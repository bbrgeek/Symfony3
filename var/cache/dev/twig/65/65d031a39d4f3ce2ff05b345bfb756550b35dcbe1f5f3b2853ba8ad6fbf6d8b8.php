<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76363b58e96be021c28253fd37bef70b91d536e0dcc762f06bc4170d14697c7c extends Twig_Template
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
        $__internal_3ae4c7998ca2714d0627001cc60770c8ec5f798ed9036e863b394c49e0a12d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae4c7998ca2714d0627001cc60770c8ec5f798ed9036e863b394c49e0a12d1e->enter($__internal_3ae4c7998ca2714d0627001cc60770c8ec5f798ed9036e863b394c49e0a12d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5c15a70604c75e4df5a1460c19e1f6da50e2002267a5db7b22b25ba57ada3ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c15a70604c75e4df5a1460c19e1f6da50e2002267a5db7b22b25ba57ada3ff8->enter($__internal_5c15a70604c75e4df5a1460c19e1f6da50e2002267a5db7b22b25ba57ada3ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae4c7998ca2714d0627001cc60770c8ec5f798ed9036e863b394c49e0a12d1e->leave($__internal_3ae4c7998ca2714d0627001cc60770c8ec5f798ed9036e863b394c49e0a12d1e_prof);

        
        $__internal_5c15a70604c75e4df5a1460c19e1f6da50e2002267a5db7b22b25ba57ada3ff8->leave($__internal_5c15a70604c75e4df5a1460c19e1f6da50e2002267a5db7b22b25ba57ada3ff8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86938c587d5ecf7180055e268ce350fb447201693c5ea9ee28620cbdbf77de3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86938c587d5ecf7180055e268ce350fb447201693c5ea9ee28620cbdbf77de3a->enter($__internal_86938c587d5ecf7180055e268ce350fb447201693c5ea9ee28620cbdbf77de3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62ab49a94d7859ea717646b289aa83283b63af7d127f8c8194ff1198530f0818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ab49a94d7859ea717646b289aa83283b63af7d127f8c8194ff1198530f0818->enter($__internal_62ab49a94d7859ea717646b289aa83283b63af7d127f8c8194ff1198530f0818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62ab49a94d7859ea717646b289aa83283b63af7d127f8c8194ff1198530f0818->leave($__internal_62ab49a94d7859ea717646b289aa83283b63af7d127f8c8194ff1198530f0818_prof);

        
        $__internal_86938c587d5ecf7180055e268ce350fb447201693c5ea9ee28620cbdbf77de3a->leave($__internal_86938c587d5ecf7180055e268ce350fb447201693c5ea9ee28620cbdbf77de3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be0099c71a4713f88e4bae4da89c7655bcb498b9f99383a7caa9865e72247b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0099c71a4713f88e4bae4da89c7655bcb498b9f99383a7caa9865e72247b66->enter($__internal_be0099c71a4713f88e4bae4da89c7655bcb498b9f99383a7caa9865e72247b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aaeb307943ca3cc1281e49447101011041a2c0126bcb4e67aa597d45b7cd6c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaeb307943ca3cc1281e49447101011041a2c0126bcb4e67aa597d45b7cd6c11->enter($__internal_aaeb307943ca3cc1281e49447101011041a2c0126bcb4e67aa597d45b7cd6c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aaeb307943ca3cc1281e49447101011041a2c0126bcb4e67aa597d45b7cd6c11->leave($__internal_aaeb307943ca3cc1281e49447101011041a2c0126bcb4e67aa597d45b7cd6c11_prof);

        
        $__internal_be0099c71a4713f88e4bae4da89c7655bcb498b9f99383a7caa9865e72247b66->leave($__internal_be0099c71a4713f88e4bae4da89c7655bcb498b9f99383a7caa9865e72247b66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b15f6cdd2cb752d3172191bc3b284d9b345ad724fc584722df920a6729e5cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b15f6cdd2cb752d3172191bc3b284d9b345ad724fc584722df920a6729e5cfa->enter($__internal_0b15f6cdd2cb752d3172191bc3b284d9b345ad724fc584722df920a6729e5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ce64b2aeb4b5140d463118c48f06843ddd79281d352eb33f1e6aa47157af062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce64b2aeb4b5140d463118c48f06843ddd79281d352eb33f1e6aa47157af062->enter($__internal_7ce64b2aeb4b5140d463118c48f06843ddd79281d352eb33f1e6aa47157af062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ce64b2aeb4b5140d463118c48f06843ddd79281d352eb33f1e6aa47157af062->leave($__internal_7ce64b2aeb4b5140d463118c48f06843ddd79281d352eb33f1e6aa47157af062_prof);

        
        $__internal_0b15f6cdd2cb752d3172191bc3b284d9b345ad724fc584722df920a6729e5cfa->leave($__internal_0b15f6cdd2cb752d3172191bc3b284d9b345ad724fc584722df920a6729e5cfa_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
