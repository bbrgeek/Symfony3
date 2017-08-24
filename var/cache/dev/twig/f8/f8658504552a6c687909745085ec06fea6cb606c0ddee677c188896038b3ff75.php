<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ad06d41bda712bf60e9d671f64fb1f7d3bfe4cb05631746476d094f90e893c67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43f70cbe2b2916300384075dc9ca6c855ce87fc4886888f8f0c087f8d22822c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f70cbe2b2916300384075dc9ca6c855ce87fc4886888f8f0c087f8d22822c4->enter($__internal_43f70cbe2b2916300384075dc9ca6c855ce87fc4886888f8f0c087f8d22822c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_7986c54195eb3c354aa20400b76f156da20b1b0a4376da63a4f0420220a7ac38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7986c54195eb3c354aa20400b76f156da20b1b0a4376da63a4f0420220a7ac38->enter($__internal_7986c54195eb3c354aa20400b76f156da20b1b0a4376da63a4f0420220a7ac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_43f70cbe2b2916300384075dc9ca6c855ce87fc4886888f8f0c087f8d22822c4->leave($__internal_43f70cbe2b2916300384075dc9ca6c855ce87fc4886888f8f0c087f8d22822c4_prof);

        
        $__internal_7986c54195eb3c354aa20400b76f156da20b1b0a4376da63a4f0420220a7ac38->leave($__internal_7986c54195eb3c354aa20400b76f156da20b1b0a4376da63a4f0420220a7ac38_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
