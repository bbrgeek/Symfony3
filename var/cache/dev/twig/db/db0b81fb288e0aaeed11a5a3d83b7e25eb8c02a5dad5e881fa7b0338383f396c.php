<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_75bb56057da89839dd3c283ca94398a1057730710c3855ecc39c36cd35182494 extends Twig_Template
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
        $__internal_b0ceebc91688cce67dda7890e0b8803f3a290ac671bd670d36fdcecbca1a399e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ceebc91688cce67dda7890e0b8803f3a290ac671bd670d36fdcecbca1a399e->enter($__internal_b0ceebc91688cce67dda7890e0b8803f3a290ac671bd670d36fdcecbca1a399e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_abfbde86fb9090c5cc6078e6c233a30212ab9c1392e39e255e81c0d74dcea94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfbde86fb9090c5cc6078e6c233a30212ab9c1392e39e255e81c0d74dcea94c->enter($__internal_abfbde86fb9090c5cc6078e6c233a30212ab9c1392e39e255e81c0d74dcea94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b0ceebc91688cce67dda7890e0b8803f3a290ac671bd670d36fdcecbca1a399e->leave($__internal_b0ceebc91688cce67dda7890e0b8803f3a290ac671bd670d36fdcecbca1a399e_prof);

        
        $__internal_abfbde86fb9090c5cc6078e6c233a30212ab9c1392e39e255e81c0d74dcea94c->leave($__internal_abfbde86fb9090c5cc6078e6c233a30212ab9c1392e39e255e81c0d74dcea94c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
