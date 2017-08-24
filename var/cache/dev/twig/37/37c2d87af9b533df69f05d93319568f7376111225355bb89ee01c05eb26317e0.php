<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_409fc48e18740e6730726c543cf322f73066112a4ba74e8c989438e5546a205e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_527238cc9379f6a0ae3c4046b48e8c270dd25ca6748946bcbdc0d2d18351b630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527238cc9379f6a0ae3c4046b48e8c270dd25ca6748946bcbdc0d2d18351b630->enter($__internal_527238cc9379f6a0ae3c4046b48e8c270dd25ca6748946bcbdc0d2d18351b630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_04c03ffc88f55256e060336add2a0545abec1583e60a37ac3c2ac283e32515f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c03ffc88f55256e060336add2a0545abec1583e60a37ac3c2ac283e32515f4->enter($__internal_04c03ffc88f55256e060336add2a0545abec1583e60a37ac3c2ac283e32515f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527238cc9379f6a0ae3c4046b48e8c270dd25ca6748946bcbdc0d2d18351b630->leave($__internal_527238cc9379f6a0ae3c4046b48e8c270dd25ca6748946bcbdc0d2d18351b630_prof);

        
        $__internal_04c03ffc88f55256e060336add2a0545abec1583e60a37ac3c2ac283e32515f4->leave($__internal_04c03ffc88f55256e060336add2a0545abec1583e60a37ac3c2ac283e32515f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61b62d0dca7e9b200592e7d54aa12cb17587a719746299d85f4e411ca6808ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b62d0dca7e9b200592e7d54aa12cb17587a719746299d85f4e411ca6808ed1->enter($__internal_61b62d0dca7e9b200592e7d54aa12cb17587a719746299d85f4e411ca6808ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22d0158193eb83e539cbba86286092a897fd3c353391f29bf33951da6423802a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d0158193eb83e539cbba86286092a897fd3c353391f29bf33951da6423802a->enter($__internal_22d0158193eb83e539cbba86286092a897fd3c353391f29bf33951da6423802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_22d0158193eb83e539cbba86286092a897fd3c353391f29bf33951da6423802a->leave($__internal_22d0158193eb83e539cbba86286092a897fd3c353391f29bf33951da6423802a_prof);

        
        $__internal_61b62d0dca7e9b200592e7d54aa12cb17587a719746299d85f4e411ca6808ed1->leave($__internal_61b62d0dca7e9b200592e7d54aa12cb17587a719746299d85f4e411ca6808ed1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
