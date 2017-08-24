<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_727a2e17670e5e46ccdf5171ddbf7bf1a191af0c0fe2d8eb2d42aa68f77e1643 extends Twig_Template
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
        $__internal_c34dc49f5d83969d0fb18b5092bdb7700e002837471463d82ba769d5f26c7436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34dc49f5d83969d0fb18b5092bdb7700e002837471463d82ba769d5f26c7436->enter($__internal_c34dc49f5d83969d0fb18b5092bdb7700e002837471463d82ba769d5f26c7436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_593dd39bca5b986070bfac8218d0259a2824bcf0bfc58489cc9afb021ee11d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593dd39bca5b986070bfac8218d0259a2824bcf0bfc58489cc9afb021ee11d59->enter($__internal_593dd39bca5b986070bfac8218d0259a2824bcf0bfc58489cc9afb021ee11d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c34dc49f5d83969d0fb18b5092bdb7700e002837471463d82ba769d5f26c7436->leave($__internal_c34dc49f5d83969d0fb18b5092bdb7700e002837471463d82ba769d5f26c7436_prof);

        
        $__internal_593dd39bca5b986070bfac8218d0259a2824bcf0bfc58489cc9afb021ee11d59->leave($__internal_593dd39bca5b986070bfac8218d0259a2824bcf0bfc58489cc9afb021ee11d59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
