<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_d824fb4bd27bebf142377709a603d060979b4317d8866bd4e4ce04d487823692 extends Twig_Template
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
        $__internal_4dbfc1aead2c885757e8421f18aa81adbd94fc25a382ce1d0e5de983f2ce3dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbfc1aead2c885757e8421f18aa81adbd94fc25a382ce1d0e5de983f2ce3dd8->enter($__internal_4dbfc1aead2c885757e8421f18aa81adbd94fc25a382ce1d0e5de983f2ce3dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_bfee9c4441e127e2a10cc011a4ddf815d90690d2af6bdf6f3f72ee1a519b2efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfee9c4441e127e2a10cc011a4ddf815d90690d2af6bdf6f3f72ee1a519b2efd->enter($__internal_bfee9c4441e127e2a10cc011a4ddf815d90690d2af6bdf6f3f72ee1a519b2efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_4dbfc1aead2c885757e8421f18aa81adbd94fc25a382ce1d0e5de983f2ce3dd8->leave($__internal_4dbfc1aead2c885757e8421f18aa81adbd94fc25a382ce1d0e5de983f2ce3dd8_prof);

        
        $__internal_bfee9c4441e127e2a10cc011a4ddf815d90690d2af6bdf6f3f72ee1a519b2efd->leave($__internal_bfee9c4441e127e2a10cc011a4ddf815d90690d2af6bdf6f3f72ee1a519b2efd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
