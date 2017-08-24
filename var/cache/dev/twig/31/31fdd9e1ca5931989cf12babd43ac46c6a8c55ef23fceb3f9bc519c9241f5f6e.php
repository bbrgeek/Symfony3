<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f95ac3f8141c5705e442ce581f7afeefb2048a8000b5baac2f3b7e473b7165d7 extends Twig_Template
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
        $__internal_407410c50c1cdfa5e57523017f6684927b4dfeea3d25f7821ec86064570e2b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407410c50c1cdfa5e57523017f6684927b4dfeea3d25f7821ec86064570e2b48->enter($__internal_407410c50c1cdfa5e57523017f6684927b4dfeea3d25f7821ec86064570e2b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7e189005e98ba3623abf4030dd68e7aee5b11c33ceefba58b5746fe9b3639779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e189005e98ba3623abf4030dd68e7aee5b11c33ceefba58b5746fe9b3639779->enter($__internal_7e189005e98ba3623abf4030dd68e7aee5b11c33ceefba58b5746fe9b3639779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_407410c50c1cdfa5e57523017f6684927b4dfeea3d25f7821ec86064570e2b48->leave($__internal_407410c50c1cdfa5e57523017f6684927b4dfeea3d25f7821ec86064570e2b48_prof);

        
        $__internal_7e189005e98ba3623abf4030dd68e7aee5b11c33ceefba58b5746fe9b3639779->leave($__internal_7e189005e98ba3623abf4030dd68e7aee5b11c33ceefba58b5746fe9b3639779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
