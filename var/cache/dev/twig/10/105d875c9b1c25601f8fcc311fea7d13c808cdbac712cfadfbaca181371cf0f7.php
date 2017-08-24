<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5ab4ba3966ff7b0c9565a31a74100dd8f8029dcb8becf6ff89a3055500deee1e extends Twig_Template
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
        $__internal_91aed42f4aa8503f5ba2a41fe1d6c844e8b93c40798c86a010167a8a6a7936c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91aed42f4aa8503f5ba2a41fe1d6c844e8b93c40798c86a010167a8a6a7936c5->enter($__internal_91aed42f4aa8503f5ba2a41fe1d6c844e8b93c40798c86a010167a8a6a7936c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bf9d3aa5f40ffc5f45e1c489537a2352c712104c523c8e565dde977f548bd091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9d3aa5f40ffc5f45e1c489537a2352c712104c523c8e565dde977f548bd091->enter($__internal_bf9d3aa5f40ffc5f45e1c489537a2352c712104c523c8e565dde977f548bd091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_91aed42f4aa8503f5ba2a41fe1d6c844e8b93c40798c86a010167a8a6a7936c5->leave($__internal_91aed42f4aa8503f5ba2a41fe1d6c844e8b93c40798c86a010167a8a6a7936c5_prof);

        
        $__internal_bf9d3aa5f40ffc5f45e1c489537a2352c712104c523c8e565dde977f548bd091->leave($__internal_bf9d3aa5f40ffc5f45e1c489537a2352c712104c523c8e565dde977f548bd091_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
