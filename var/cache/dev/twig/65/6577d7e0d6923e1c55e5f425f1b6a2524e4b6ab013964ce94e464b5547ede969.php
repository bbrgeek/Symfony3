<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_baa5e67ab9fbbfa07317333ceeb87a037d0853180d94a64f3b93776945c4649e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23fd5ce2d94da07d56f59c4e2dc399ec5c609753f6fb62e56f89e0dbab28315a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fd5ce2d94da07d56f59c4e2dc399ec5c609753f6fb62e56f89e0dbab28315a->enter($__internal_23fd5ce2d94da07d56f59c4e2dc399ec5c609753f6fb62e56f89e0dbab28315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_55fd95e9c2f2799d8a81b81ee528e60fea478187bce37e6e64b47e391707ae47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fd95e9c2f2799d8a81b81ee528e60fea478187bce37e6e64b47e391707ae47->enter($__internal_55fd95e9c2f2799d8a81b81ee528e60fea478187bce37e6e64b47e391707ae47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_23fd5ce2d94da07d56f59c4e2dc399ec5c609753f6fb62e56f89e0dbab28315a->leave($__internal_23fd5ce2d94da07d56f59c4e2dc399ec5c609753f6fb62e56f89e0dbab28315a_prof);

        
        $__internal_55fd95e9c2f2799d8a81b81ee528e60fea478187bce37e6e64b47e391707ae47->leave($__internal_55fd95e9c2f2799d8a81b81ee528e60fea478187bce37e6e64b47e391707ae47_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6afdc96d2f5d0e6e2f540898db2cad7603ec2cbba23e2c98b34850c71f50c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6afdc96d2f5d0e6e2f540898db2cad7603ec2cbba23e2c98b34850c71f50c2d->enter($__internal_e6afdc96d2f5d0e6e2f540898db2cad7603ec2cbba23e2c98b34850c71f50c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed95675e4249a493d6293ce610ed52ac540a924341c7ca631d44069e4fbb86d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed95675e4249a493d6293ce610ed52ac540a924341c7ca631d44069e4fbb86d0->enter($__internal_ed95675e4249a493d6293ce610ed52ac540a924341c7ca631d44069e4fbb86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ed95675e4249a493d6293ce610ed52ac540a924341c7ca631d44069e4fbb86d0->leave($__internal_ed95675e4249a493d6293ce610ed52ac540a924341c7ca631d44069e4fbb86d0_prof);

        
        $__internal_e6afdc96d2f5d0e6e2f540898db2cad7603ec2cbba23e2c98b34850c71f50c2d->leave($__internal_e6afdc96d2f5d0e6e2f540898db2cad7603ec2cbba23e2c98b34850c71f50c2d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
