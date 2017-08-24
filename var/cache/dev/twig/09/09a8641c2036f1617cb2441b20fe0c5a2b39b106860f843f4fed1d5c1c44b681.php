<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_fcbda94412cca49a53ef93380a7733dd04a24ff77f5c92cdc5b5fbcefa40705b extends Twig_Template
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
        $__internal_d20a4c9bb8e89ff30ae2d433fb82437a636fb787950bf522bd20bd66d351415e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20a4c9bb8e89ff30ae2d433fb82437a636fb787950bf522bd20bd66d351415e->enter($__internal_d20a4c9bb8e89ff30ae2d433fb82437a636fb787950bf522bd20bd66d351415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c7aa887b379c94e75a2bad073751d71665550428966d1f0d18f7567840ff0e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7aa887b379c94e75a2bad073751d71665550428966d1f0d18f7567840ff0e17->enter($__internal_c7aa887b379c94e75a2bad073751d71665550428966d1f0d18f7567840ff0e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d20a4c9bb8e89ff30ae2d433fb82437a636fb787950bf522bd20bd66d351415e->leave($__internal_d20a4c9bb8e89ff30ae2d433fb82437a636fb787950bf522bd20bd66d351415e_prof);

        
        $__internal_c7aa887b379c94e75a2bad073751d71665550428966d1f0d18f7567840ff0e17->leave($__internal_c7aa887b379c94e75a2bad073751d71665550428966d1f0d18f7567840ff0e17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
