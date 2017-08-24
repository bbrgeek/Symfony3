<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a790cb649db1b9cbbc736ae0e8e862f6d58692215e7da81b7dd84406518fb7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e06d08b04fa476c9c9dab1788ddc7f8c3726a7683e243959287dff2b6e8f0b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06d08b04fa476c9c9dab1788ddc7f8c3726a7683e243959287dff2b6e8f0b06->enter($__internal_e06d08b04fa476c9c9dab1788ddc7f8c3726a7683e243959287dff2b6e8f0b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_54b4923dfccc18c188bd57103928b53bb54c0144436be9b924d7d3efe3667443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b4923dfccc18c188bd57103928b53bb54c0144436be9b924d7d3efe3667443->enter($__internal_54b4923dfccc18c188bd57103928b53bb54c0144436be9b924d7d3efe3667443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e06d08b04fa476c9c9dab1788ddc7f8c3726a7683e243959287dff2b6e8f0b06->leave($__internal_e06d08b04fa476c9c9dab1788ddc7f8c3726a7683e243959287dff2b6e8f0b06_prof);

        
        $__internal_54b4923dfccc18c188bd57103928b53bb54c0144436be9b924d7d3efe3667443->leave($__internal_54b4923dfccc18c188bd57103928b53bb54c0144436be9b924d7d3efe3667443_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c347f3dbc3d890b744ea427fabb136a8c562a5e79bb368c5986f55825d85a84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c347f3dbc3d890b744ea427fabb136a8c562a5e79bb368c5986f55825d85a84e->enter($__internal_c347f3dbc3d890b744ea427fabb136a8c562a5e79bb368c5986f55825d85a84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d09162fd1792dceb5949c3109a5bda0d43ee394a5c58c97a0dab9a3db21416c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09162fd1792dceb5949c3109a5bda0d43ee394a5c58c97a0dab9a3db21416c4->enter($__internal_d09162fd1792dceb5949c3109a5bda0d43ee394a5c58c97a0dab9a3db21416c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d09162fd1792dceb5949c3109a5bda0d43ee394a5c58c97a0dab9a3db21416c4->leave($__internal_d09162fd1792dceb5949c3109a5bda0d43ee394a5c58c97a0dab9a3db21416c4_prof);

        
        $__internal_c347f3dbc3d890b744ea427fabb136a8c562a5e79bb368c5986f55825d85a84e->leave($__internal_c347f3dbc3d890b744ea427fabb136a8c562a5e79bb368c5986f55825d85a84e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9b2e5ac030dbeda5ec8fac31d8184935bbb26792774d585d30ad0e7caec5394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b2e5ac030dbeda5ec8fac31d8184935bbb26792774d585d30ad0e7caec5394->enter($__internal_e9b2e5ac030dbeda5ec8fac31d8184935bbb26792774d585d30ad0e7caec5394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45876594a267d2f250859834cdcf8f04538e5a181805ec002272e586a6799734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45876594a267d2f250859834cdcf8f04538e5a181805ec002272e586a6799734->enter($__internal_45876594a267d2f250859834cdcf8f04538e5a181805ec002272e586a6799734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_45876594a267d2f250859834cdcf8f04538e5a181805ec002272e586a6799734->leave($__internal_45876594a267d2f250859834cdcf8f04538e5a181805ec002272e586a6799734_prof);

        
        $__internal_e9b2e5ac030dbeda5ec8fac31d8184935bbb26792774d585d30ad0e7caec5394->leave($__internal_e9b2e5ac030dbeda5ec8fac31d8184935bbb26792774d585d30ad0e7caec5394_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
