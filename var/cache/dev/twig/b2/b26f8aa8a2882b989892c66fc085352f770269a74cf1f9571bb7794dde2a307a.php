<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f39db8e3401a8efd9791c3eb40bede65f7b793042b3a5d0846b13f593bec4942 extends Twig_Template
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
        $__internal_7b615441a018740cabe0627e1a655412e0a73d2a5438a9fd77babb0f6edc2149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b615441a018740cabe0627e1a655412e0a73d2a5438a9fd77babb0f6edc2149->enter($__internal_7b615441a018740cabe0627e1a655412e0a73d2a5438a9fd77babb0f6edc2149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8cd609b06afbc6bac76be735b8837b6eb8c92c0c84e83c53b160e66d98d697be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd609b06afbc6bac76be735b8837b6eb8c92c0c84e83c53b160e66d98d697be->enter($__internal_8cd609b06afbc6bac76be735b8837b6eb8c92c0c84e83c53b160e66d98d697be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7b615441a018740cabe0627e1a655412e0a73d2a5438a9fd77babb0f6edc2149->leave($__internal_7b615441a018740cabe0627e1a655412e0a73d2a5438a9fd77babb0f6edc2149_prof);

        
        $__internal_8cd609b06afbc6bac76be735b8837b6eb8c92c0c84e83c53b160e66d98d697be->leave($__internal_8cd609b06afbc6bac76be735b8837b6eb8c92c0c84e83c53b160e66d98d697be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
