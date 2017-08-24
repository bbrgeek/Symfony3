<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fbfc85d55813dac5435aaa89e7afb983469d9fef2635020ab72e32c83a39154b extends Twig_Template
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
        $__internal_05a9ddfa4610764cca9aeb5927f9d4425b0e5b6401d772e73a85fa7da7f729f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a9ddfa4610764cca9aeb5927f9d4425b0e5b6401d772e73a85fa7da7f729f0->enter($__internal_05a9ddfa4610764cca9aeb5927f9d4425b0e5b6401d772e73a85fa7da7f729f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_407df10292b0a5997dc1dd412bc9319722e1316996de3ea051d63bb337edd38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407df10292b0a5997dc1dd412bc9319722e1316996de3ea051d63bb337edd38f->enter($__internal_407df10292b0a5997dc1dd412bc9319722e1316996de3ea051d63bb337edd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_05a9ddfa4610764cca9aeb5927f9d4425b0e5b6401d772e73a85fa7da7f729f0->leave($__internal_05a9ddfa4610764cca9aeb5927f9d4425b0e5b6401d772e73a85fa7da7f729f0_prof);

        
        $__internal_407df10292b0a5997dc1dd412bc9319722e1316996de3ea051d63bb337edd38f->leave($__internal_407df10292b0a5997dc1dd412bc9319722e1316996de3ea051d63bb337edd38f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
