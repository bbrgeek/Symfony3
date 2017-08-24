<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_694513e01bff423af1e6d33221fe88de2a4e81e57aa9b7d04cc3720fb5bb8239 extends Twig_Template
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
        $__internal_6aaf60299933624f7c16fc5c6c3591cfa03b9c80cf041bc5d2df322c139ac3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aaf60299933624f7c16fc5c6c3591cfa03b9c80cf041bc5d2df322c139ac3b7->enter($__internal_6aaf60299933624f7c16fc5c6c3591cfa03b9c80cf041bc5d2df322c139ac3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0c641602869aed8a9d825c92e4ebcd32dc5f6efe0383ac40b0b23be9164b33a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c641602869aed8a9d825c92e4ebcd32dc5f6efe0383ac40b0b23be9164b33a8->enter($__internal_0c641602869aed8a9d825c92e4ebcd32dc5f6efe0383ac40b0b23be9164b33a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6aaf60299933624f7c16fc5c6c3591cfa03b9c80cf041bc5d2df322c139ac3b7->leave($__internal_6aaf60299933624f7c16fc5c6c3591cfa03b9c80cf041bc5d2df322c139ac3b7_prof);

        
        $__internal_0c641602869aed8a9d825c92e4ebcd32dc5f6efe0383ac40b0b23be9164b33a8->leave($__internal_0c641602869aed8a9d825c92e4ebcd32dc5f6efe0383ac40b0b23be9164b33a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
