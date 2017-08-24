<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a16bb96d7056b48fb2579d8e1e2e3dc17d00383d6984f57026306c4e8fa2ad0a extends Twig_Template
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
        $__internal_56c0d917c99903e97b8bc9d10a767b7cbf847393d865282d192a7cf2bb3ae6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c0d917c99903e97b8bc9d10a767b7cbf847393d865282d192a7cf2bb3ae6f6->enter($__internal_56c0d917c99903e97b8bc9d10a767b7cbf847393d865282d192a7cf2bb3ae6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f85c82c7e10a51b6edae73c5bc6ecef0ff9924f0917be1e60d7a3f6fae039052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85c82c7e10a51b6edae73c5bc6ecef0ff9924f0917be1e60d7a3f6fae039052->enter($__internal_f85c82c7e10a51b6edae73c5bc6ecef0ff9924f0917be1e60d7a3f6fae039052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_56c0d917c99903e97b8bc9d10a767b7cbf847393d865282d192a7cf2bb3ae6f6->leave($__internal_56c0d917c99903e97b8bc9d10a767b7cbf847393d865282d192a7cf2bb3ae6f6_prof);

        
        $__internal_f85c82c7e10a51b6edae73c5bc6ecef0ff9924f0917be1e60d7a3f6fae039052->leave($__internal_f85c82c7e10a51b6edae73c5bc6ecef0ff9924f0917be1e60d7a3f6fae039052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
