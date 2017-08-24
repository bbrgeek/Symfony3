<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8b5cadac00844026a325295f35f2dadcf177beb73bfeb3b3ecfacec03e71169a extends Twig_Template
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
        $__internal_c0749cfc487cc22e907d4654aa7fcc3358aea5c3b76fe0e72662f35739f84a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0749cfc487cc22e907d4654aa7fcc3358aea5c3b76fe0e72662f35739f84a25->enter($__internal_c0749cfc487cc22e907d4654aa7fcc3358aea5c3b76fe0e72662f35739f84a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0f3f7450f4cc8b01960ea8b5d5d77dfe075fd4952da1be88b3907d9cb806ab9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3f7450f4cc8b01960ea8b5d5d77dfe075fd4952da1be88b3907d9cb806ab9a->enter($__internal_0f3f7450f4cc8b01960ea8b5d5d77dfe075fd4952da1be88b3907d9cb806ab9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c0749cfc487cc22e907d4654aa7fcc3358aea5c3b76fe0e72662f35739f84a25->leave($__internal_c0749cfc487cc22e907d4654aa7fcc3358aea5c3b76fe0e72662f35739f84a25_prof);

        
        $__internal_0f3f7450f4cc8b01960ea8b5d5d77dfe075fd4952da1be88b3907d9cb806ab9a->leave($__internal_0f3f7450f4cc8b01960ea8b5d5d77dfe075fd4952da1be88b3907d9cb806ab9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
