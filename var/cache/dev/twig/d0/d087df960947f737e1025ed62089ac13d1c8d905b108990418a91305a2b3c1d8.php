<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_964b972a800f4d984fbc596a52049af860ba5b22630be58ab8bcadf83757eed2 extends Twig_Template
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
        $__internal_66d40b80008bec932e6c6f87ee6fe6a0129ac5474d365a01952e2e0ed7056977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d40b80008bec932e6c6f87ee6fe6a0129ac5474d365a01952e2e0ed7056977->enter($__internal_66d40b80008bec932e6c6f87ee6fe6a0129ac5474d365a01952e2e0ed7056977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_da9063f742a497caa2cae32a4bd0171e8981c118c8c114fea81d6f4cd56b04bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9063f742a497caa2cae32a4bd0171e8981c118c8c114fea81d6f4cd56b04bf->enter($__internal_da9063f742a497caa2cae32a4bd0171e8981c118c8c114fea81d6f4cd56b04bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_66d40b80008bec932e6c6f87ee6fe6a0129ac5474d365a01952e2e0ed7056977->leave($__internal_66d40b80008bec932e6c6f87ee6fe6a0129ac5474d365a01952e2e0ed7056977_prof);

        
        $__internal_da9063f742a497caa2cae32a4bd0171e8981c118c8c114fea81d6f4cd56b04bf->leave($__internal_da9063f742a497caa2cae32a4bd0171e8981c118c8c114fea81d6f4cd56b04bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
