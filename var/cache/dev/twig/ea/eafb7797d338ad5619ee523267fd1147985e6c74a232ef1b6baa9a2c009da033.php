<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a7ccdc2e6a79f08f390b5eefe43c276cc42f978c171ac368e09e5de4ef324de9 extends Twig_Template
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
        $__internal_6c008b3219ba8053b385ced0c60ab0e74845c0d362bc85eb1f1e81729aaaefd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c008b3219ba8053b385ced0c60ab0e74845c0d362bc85eb1f1e81729aaaefd7->enter($__internal_6c008b3219ba8053b385ced0c60ab0e74845c0d362bc85eb1f1e81729aaaefd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6dfcadb891149fef2540220e1263168c39b9c08695fe7bc01b0fcf7ccce98a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfcadb891149fef2540220e1263168c39b9c08695fe7bc01b0fcf7ccce98a55->enter($__internal_6dfcadb891149fef2540220e1263168c39b9c08695fe7bc01b0fcf7ccce98a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6c008b3219ba8053b385ced0c60ab0e74845c0d362bc85eb1f1e81729aaaefd7->leave($__internal_6c008b3219ba8053b385ced0c60ab0e74845c0d362bc85eb1f1e81729aaaefd7_prof);

        
        $__internal_6dfcadb891149fef2540220e1263168c39b9c08695fe7bc01b0fcf7ccce98a55->leave($__internal_6dfcadb891149fef2540220e1263168c39b9c08695fe7bc01b0fcf7ccce98a55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
