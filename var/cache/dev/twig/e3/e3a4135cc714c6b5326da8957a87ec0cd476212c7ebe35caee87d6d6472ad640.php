<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_86e587ecd23bb842ca6fee3502ed01390e52f5da5af5287f3c5008b68c3aa954 extends Twig_Template
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
        $__internal_2e155df5533c4ba213a953e04eaffe4d469aea3e4b37fa1e679376c1def1df07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e155df5533c4ba213a953e04eaffe4d469aea3e4b37fa1e679376c1def1df07->enter($__internal_2e155df5533c4ba213a953e04eaffe4d469aea3e4b37fa1e679376c1def1df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_555176bfcb8bc1fabd9693d7335e05328798fe393a37a7c5ca8b4ce10af9fd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555176bfcb8bc1fabd9693d7335e05328798fe393a37a7c5ca8b4ce10af9fd1c->enter($__internal_555176bfcb8bc1fabd9693d7335e05328798fe393a37a7c5ca8b4ce10af9fd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2e155df5533c4ba213a953e04eaffe4d469aea3e4b37fa1e679376c1def1df07->leave($__internal_2e155df5533c4ba213a953e04eaffe4d469aea3e4b37fa1e679376c1def1df07_prof);

        
        $__internal_555176bfcb8bc1fabd9693d7335e05328798fe393a37a7c5ca8b4ce10af9fd1c->leave($__internal_555176bfcb8bc1fabd9693d7335e05328798fe393a37a7c5ca8b4ce10af9fd1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
