<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7e03c55dbdb748cd628ccf5d964334552f30991e55046dc837b4b3efb77f2ee8 extends Twig_Template
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
        $__internal_4bd4e2cb46995e4fe3672396031fb87c795f2ff1fcd4539e528d26dfc92eecb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd4e2cb46995e4fe3672396031fb87c795f2ff1fcd4539e528d26dfc92eecb6->enter($__internal_4bd4e2cb46995e4fe3672396031fb87c795f2ff1fcd4539e528d26dfc92eecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_768923505b0e09572b3820f090d23adf0eafd09e3f545dabe289b7229b6cf1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768923505b0e09572b3820f090d23adf0eafd09e3f545dabe289b7229b6cf1f9->enter($__internal_768923505b0e09572b3820f090d23adf0eafd09e3f545dabe289b7229b6cf1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4bd4e2cb46995e4fe3672396031fb87c795f2ff1fcd4539e528d26dfc92eecb6->leave($__internal_4bd4e2cb46995e4fe3672396031fb87c795f2ff1fcd4539e528d26dfc92eecb6_prof);

        
        $__internal_768923505b0e09572b3820f090d23adf0eafd09e3f545dabe289b7229b6cf1f9->leave($__internal_768923505b0e09572b3820f090d23adf0eafd09e3f545dabe289b7229b6cf1f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
