<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_1471969770f6093c6ca418fa1f2e7e78a4e6d2fac4b857dd8f0e4cb0a7acb049 extends Twig_Template
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
        $__internal_00d4b19f905ec2f684aacb98de49ede5b29dc2f25e656a52cf1ec94a153bde23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d4b19f905ec2f684aacb98de49ede5b29dc2f25e656a52cf1ec94a153bde23->enter($__internal_00d4b19f905ec2f684aacb98de49ede5b29dc2f25e656a52cf1ec94a153bde23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_9f0fff3c315ce69c82027d283810ca61849f7c932bbe65486bdbf4ae11f5e958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0fff3c315ce69c82027d283810ca61849f7c932bbe65486bdbf4ae11f5e958->enter($__internal_9f0fff3c315ce69c82027d283810ca61849f7c932bbe65486bdbf4ae11f5e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_00d4b19f905ec2f684aacb98de49ede5b29dc2f25e656a52cf1ec94a153bde23->leave($__internal_00d4b19f905ec2f684aacb98de49ede5b29dc2f25e656a52cf1ec94a153bde23_prof);

        
        $__internal_9f0fff3c315ce69c82027d283810ca61849f7c932bbe65486bdbf4ae11f5e958->leave($__internal_9f0fff3c315ce69c82027d283810ca61849f7c932bbe65486bdbf4ae11f5e958_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
