<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5b756a7677ed61712c7f43985cae3dfec42545925c5d7076d8e9be581ecdca4b extends Twig_Template
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
        $__internal_b3bf2bcc7444e7116e9df8f03e1cfa3e0daa49bd64e5e08a0291e06db5d82b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bf2bcc7444e7116e9df8f03e1cfa3e0daa49bd64e5e08a0291e06db5d82b0f->enter($__internal_b3bf2bcc7444e7116e9df8f03e1cfa3e0daa49bd64e5e08a0291e06db5d82b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_69c77cffaf6a0648ce7b5c2260f38d76ea2cec687dcb32adabc54d83823a5c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c77cffaf6a0648ce7b5c2260f38d76ea2cec687dcb32adabc54d83823a5c91->enter($__internal_69c77cffaf6a0648ce7b5c2260f38d76ea2cec687dcb32adabc54d83823a5c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b3bf2bcc7444e7116e9df8f03e1cfa3e0daa49bd64e5e08a0291e06db5d82b0f->leave($__internal_b3bf2bcc7444e7116e9df8f03e1cfa3e0daa49bd64e5e08a0291e06db5d82b0f_prof);

        
        $__internal_69c77cffaf6a0648ce7b5c2260f38d76ea2cec687dcb32adabc54d83823a5c91->leave($__internal_69c77cffaf6a0648ce7b5c2260f38d76ea2cec687dcb32adabc54d83823a5c91_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
