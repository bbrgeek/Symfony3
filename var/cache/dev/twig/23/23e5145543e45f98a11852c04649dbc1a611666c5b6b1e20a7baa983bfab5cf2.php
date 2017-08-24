<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_96d72bc4183ab984b4f73fc63cd886cb61aa6769774c348cbfd26010bcbc8276 extends Twig_Template
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
        $__internal_c653a6d1c2405aaa2e4944bac5d1b160d28a27f8d350ebede492d6970bd42830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c653a6d1c2405aaa2e4944bac5d1b160d28a27f8d350ebede492d6970bd42830->enter($__internal_c653a6d1c2405aaa2e4944bac5d1b160d28a27f8d350ebede492d6970bd42830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c51153d0d8443341de6197fddde55df6f89ebfe0eca3be2bc291f6407b02672e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51153d0d8443341de6197fddde55df6f89ebfe0eca3be2bc291f6407b02672e->enter($__internal_c51153d0d8443341de6197fddde55df6f89ebfe0eca3be2bc291f6407b02672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c653a6d1c2405aaa2e4944bac5d1b160d28a27f8d350ebede492d6970bd42830->leave($__internal_c653a6d1c2405aaa2e4944bac5d1b160d28a27f8d350ebede492d6970bd42830_prof);

        
        $__internal_c51153d0d8443341de6197fddde55df6f89ebfe0eca3be2bc291f6407b02672e->leave($__internal_c51153d0d8443341de6197fddde55df6f89ebfe0eca3be2bc291f6407b02672e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
