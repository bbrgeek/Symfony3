<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ccf2d6444d1fa6c0e58ea4f45fa4090ca0e3facb1a5349753e9b92d3dc1cb94f extends Twig_Template
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
        $__internal_500ea860c65424ac27e2f1fc4b75925f14c7f7b2601aa1ee03a096dadca741b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500ea860c65424ac27e2f1fc4b75925f14c7f7b2601aa1ee03a096dadca741b1->enter($__internal_500ea860c65424ac27e2f1fc4b75925f14c7f7b2601aa1ee03a096dadca741b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c1481cebba08865488afefcd197d8a8db16e97d35c069a70a4e38c269fed6325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1481cebba08865488afefcd197d8a8db16e97d35c069a70a4e38c269fed6325->enter($__internal_c1481cebba08865488afefcd197d8a8db16e97d35c069a70a4e38c269fed6325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_500ea860c65424ac27e2f1fc4b75925f14c7f7b2601aa1ee03a096dadca741b1->leave($__internal_500ea860c65424ac27e2f1fc4b75925f14c7f7b2601aa1ee03a096dadca741b1_prof);

        
        $__internal_c1481cebba08865488afefcd197d8a8db16e97d35c069a70a4e38c269fed6325->leave($__internal_c1481cebba08865488afefcd197d8a8db16e97d35c069a70a4e38c269fed6325_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
