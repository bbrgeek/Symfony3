<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3940b76b9ed518b0afbf2ab4862db2ea02552777e8b91c4b8d9076485c0642cf extends Twig_Template
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
        $__internal_640828db8b17b83f4eec9fa25387e4cb04c55cb77d202d378429b352d9b28994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640828db8b17b83f4eec9fa25387e4cb04c55cb77d202d378429b352d9b28994->enter($__internal_640828db8b17b83f4eec9fa25387e4cb04c55cb77d202d378429b352d9b28994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d52c7ab3e34224b90b5d59f36526db24d1bf58b1a3713c69368252e2623ea038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52c7ab3e34224b90b5d59f36526db24d1bf58b1a3713c69368252e2623ea038->enter($__internal_d52c7ab3e34224b90b5d59f36526db24d1bf58b1a3713c69368252e2623ea038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_640828db8b17b83f4eec9fa25387e4cb04c55cb77d202d378429b352d9b28994->leave($__internal_640828db8b17b83f4eec9fa25387e4cb04c55cb77d202d378429b352d9b28994_prof);

        
        $__internal_d52c7ab3e34224b90b5d59f36526db24d1bf58b1a3713c69368252e2623ea038->leave($__internal_d52c7ab3e34224b90b5d59f36526db24d1bf58b1a3713c69368252e2623ea038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
