<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_13f9f81fac40ee5408d2ca7273de6408defd51f433053d7ef99510c0d8203f1a extends Twig_Template
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
        $__internal_323d4386d03b26c0f5d4d3ebccc2d2c7c3cac5b3d3c61f811b5a8e352d0889c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323d4386d03b26c0f5d4d3ebccc2d2c7c3cac5b3d3c61f811b5a8e352d0889c7->enter($__internal_323d4386d03b26c0f5d4d3ebccc2d2c7c3cac5b3d3c61f811b5a8e352d0889c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cde055fe907d602d74bf3421edbf31c1d67f8425f3fe0245dcdb2e5f97266634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde055fe907d602d74bf3421edbf31c1d67f8425f3fe0245dcdb2e5f97266634->enter($__internal_cde055fe907d602d74bf3421edbf31c1d67f8425f3fe0245dcdb2e5f97266634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_323d4386d03b26c0f5d4d3ebccc2d2c7c3cac5b3d3c61f811b5a8e352d0889c7->leave($__internal_323d4386d03b26c0f5d4d3ebccc2d2c7c3cac5b3d3c61f811b5a8e352d0889c7_prof);

        
        $__internal_cde055fe907d602d74bf3421edbf31c1d67f8425f3fe0245dcdb2e5f97266634->leave($__internal_cde055fe907d602d74bf3421edbf31c1d67f8425f3fe0245dcdb2e5f97266634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
