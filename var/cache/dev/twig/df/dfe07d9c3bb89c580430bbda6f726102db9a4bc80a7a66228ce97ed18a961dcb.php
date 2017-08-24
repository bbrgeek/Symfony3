<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ff1b554be7a87bec50c7764ea2d15dd04304ac75fa3a621cdb1ed3abdf4fcee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85c215cc2702c638c68e66e9c05c828d90fd75891d727ed18558bd754ef61e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c215cc2702c638c68e66e9c05c828d90fd75891d727ed18558bd754ef61e1a->enter($__internal_85c215cc2702c638c68e66e9c05c828d90fd75891d727ed18558bd754ef61e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_34e0e12fd5070a53eab004b97599ede307dfda0cef346bc2418e1d62dbd0b93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e0e12fd5070a53eab004b97599ede307dfda0cef346bc2418e1d62dbd0b93f->enter($__internal_34e0e12fd5070a53eab004b97599ede307dfda0cef346bc2418e1d62dbd0b93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85c215cc2702c638c68e66e9c05c828d90fd75891d727ed18558bd754ef61e1a->leave($__internal_85c215cc2702c638c68e66e9c05c828d90fd75891d727ed18558bd754ef61e1a_prof);

        
        $__internal_34e0e12fd5070a53eab004b97599ede307dfda0cef346bc2418e1d62dbd0b93f->leave($__internal_34e0e12fd5070a53eab004b97599ede307dfda0cef346bc2418e1d62dbd0b93f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b31d63161fa9ee6555ce2d4dcbdf2b824ed12a27b90a2dfe5c86c39d1f636764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31d63161fa9ee6555ce2d4dcbdf2b824ed12a27b90a2dfe5c86c39d1f636764->enter($__internal_b31d63161fa9ee6555ce2d4dcbdf2b824ed12a27b90a2dfe5c86c39d1f636764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c1e5d5ac734a14e3cb42fd10f36a4804d38e0bb9830285bdb98755e22ca1980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1e5d5ac734a14e3cb42fd10f36a4804d38e0bb9830285bdb98755e22ca1980->enter($__internal_3c1e5d5ac734a14e3cb42fd10f36a4804d38e0bb9830285bdb98755e22ca1980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3c1e5d5ac734a14e3cb42fd10f36a4804d38e0bb9830285bdb98755e22ca1980->leave($__internal_3c1e5d5ac734a14e3cb42fd10f36a4804d38e0bb9830285bdb98755e22ca1980_prof);

        
        $__internal_b31d63161fa9ee6555ce2d4dcbdf2b824ed12a27b90a2dfe5c86c39d1f636764->leave($__internal_b31d63161fa9ee6555ce2d4dcbdf2b824ed12a27b90a2dfe5c86c39d1f636764_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dfecfb0756242a67bbde91be39b5941148fe5ac325973e9b8abdfea9d376bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfecfb0756242a67bbde91be39b5941148fe5ac325973e9b8abdfea9d376bd1->enter($__internal_6dfecfb0756242a67bbde91be39b5941148fe5ac325973e9b8abdfea9d376bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7761ed32e322fe58743fe7318eeb685166478b0b9713858b51f9c0d22b6021d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7761ed32e322fe58743fe7318eeb685166478b0b9713858b51f9c0d22b6021d7->enter($__internal_7761ed32e322fe58743fe7318eeb685166478b0b9713858b51f9c0d22b6021d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7761ed32e322fe58743fe7318eeb685166478b0b9713858b51f9c0d22b6021d7->leave($__internal_7761ed32e322fe58743fe7318eeb685166478b0b9713858b51f9c0d22b6021d7_prof);

        
        $__internal_6dfecfb0756242a67bbde91be39b5941148fe5ac325973e9b8abdfea9d376bd1->leave($__internal_6dfecfb0756242a67bbde91be39b5941148fe5ac325973e9b8abdfea9d376bd1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
