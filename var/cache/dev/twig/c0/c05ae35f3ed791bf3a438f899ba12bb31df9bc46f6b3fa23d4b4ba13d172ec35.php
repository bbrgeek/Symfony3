<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7a4ddf605ece7b4678264a36af29ec36c78a2445c540b3572796946f994e9e4c extends Twig_Template
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
        $__internal_4eb960c8753ecbb7accf7485156d29ee2b4870cb028d26b4db5517f0c95eaa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb960c8753ecbb7accf7485156d29ee2b4870cb028d26b4db5517f0c95eaa39->enter($__internal_4eb960c8753ecbb7accf7485156d29ee2b4870cb028d26b4db5517f0c95eaa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_56aaf290a9dfdd3dd59504f43b28cad81913e103393b7020749775211231f383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56aaf290a9dfdd3dd59504f43b28cad81913e103393b7020749775211231f383->enter($__internal_56aaf290a9dfdd3dd59504f43b28cad81913e103393b7020749775211231f383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4eb960c8753ecbb7accf7485156d29ee2b4870cb028d26b4db5517f0c95eaa39->leave($__internal_4eb960c8753ecbb7accf7485156d29ee2b4870cb028d26b4db5517f0c95eaa39_prof);

        
        $__internal_56aaf290a9dfdd3dd59504f43b28cad81913e103393b7020749775211231f383->leave($__internal_56aaf290a9dfdd3dd59504f43b28cad81913e103393b7020749775211231f383_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
