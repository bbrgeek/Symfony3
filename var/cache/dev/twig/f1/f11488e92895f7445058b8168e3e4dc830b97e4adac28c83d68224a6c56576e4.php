<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ae3a5459f83e5be312a415c1050018da9ca5c912c7b1a0b0bb186d3eae9cf2fd extends Twig_Template
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
        $__internal_0e7567a4910f2ed0485109e697762ee827a28c01397a98147e6d675727cdf7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7567a4910f2ed0485109e697762ee827a28c01397a98147e6d675727cdf7b9->enter($__internal_0e7567a4910f2ed0485109e697762ee827a28c01397a98147e6d675727cdf7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_25aa0e7772130ff8770ff1a134a46b325cf393b3527297545d6d370094fa2945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25aa0e7772130ff8770ff1a134a46b325cf393b3527297545d6d370094fa2945->enter($__internal_25aa0e7772130ff8770ff1a134a46b325cf393b3527297545d6d370094fa2945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0e7567a4910f2ed0485109e697762ee827a28c01397a98147e6d675727cdf7b9->leave($__internal_0e7567a4910f2ed0485109e697762ee827a28c01397a98147e6d675727cdf7b9_prof);

        
        $__internal_25aa0e7772130ff8770ff1a134a46b325cf393b3527297545d6d370094fa2945->leave($__internal_25aa0e7772130ff8770ff1a134a46b325cf393b3527297545d6d370094fa2945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
