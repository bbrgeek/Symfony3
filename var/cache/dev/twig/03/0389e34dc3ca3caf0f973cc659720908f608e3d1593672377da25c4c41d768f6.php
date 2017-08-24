<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c18c05ef4879cce60de5d14b0c05d015728d1114ef24f3e1b4ddc68bc20a9604 extends Twig_Template
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
        $__internal_afd298a5c6c4f49128104c444669360f8f793994ff4203bc9a1c4d6bbcacbf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd298a5c6c4f49128104c444669360f8f793994ff4203bc9a1c4d6bbcacbf6d->enter($__internal_afd298a5c6c4f49128104c444669360f8f793994ff4203bc9a1c4d6bbcacbf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_389274947c2af3ba46ea97442659cf465272be35d043c85bd1b3151d8cd24612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389274947c2af3ba46ea97442659cf465272be35d043c85bd1b3151d8cd24612->enter($__internal_389274947c2af3ba46ea97442659cf465272be35d043c85bd1b3151d8cd24612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_afd298a5c6c4f49128104c444669360f8f793994ff4203bc9a1c4d6bbcacbf6d->leave($__internal_afd298a5c6c4f49128104c444669360f8f793994ff4203bc9a1c4d6bbcacbf6d_prof);

        
        $__internal_389274947c2af3ba46ea97442659cf465272be35d043c85bd1b3151d8cd24612->leave($__internal_389274947c2af3ba46ea97442659cf465272be35d043c85bd1b3151d8cd24612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
