<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ab1ba3d41f8b79fc6507cb08973d239f365928dc5b580de1cb04c52c6f4bfb75 extends Twig_Template
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
        $__internal_9860c8424321dc2649e2eb40d5005fbaec79b1f600da4029aa15b5eb4099e52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9860c8424321dc2649e2eb40d5005fbaec79b1f600da4029aa15b5eb4099e52b->enter($__internal_9860c8424321dc2649e2eb40d5005fbaec79b1f600da4029aa15b5eb4099e52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_9ad8f066e614d83ce543db7c9128db31ebd5aecb6422a280a1bdcdbc875da27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad8f066e614d83ce543db7c9128db31ebd5aecb6422a280a1bdcdbc875da27d->enter($__internal_9ad8f066e614d83ce543db7c9128db31ebd5aecb6422a280a1bdcdbc875da27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9860c8424321dc2649e2eb40d5005fbaec79b1f600da4029aa15b5eb4099e52b->leave($__internal_9860c8424321dc2649e2eb40d5005fbaec79b1f600da4029aa15b5eb4099e52b_prof);

        
        $__internal_9ad8f066e614d83ce543db7c9128db31ebd5aecb6422a280a1bdcdbc875da27d->leave($__internal_9ad8f066e614d83ce543db7c9128db31ebd5aecb6422a280a1bdcdbc875da27d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
