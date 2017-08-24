<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d02647f8328e7c08b524b687b6fd7912de4fb7c27d4cfbd6e5e076e82c069453 extends Twig_Template
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
        $__internal_050b41533bd08ba3d0113224f5a3eacb908123779e81840b508995b51a256847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050b41533bd08ba3d0113224f5a3eacb908123779e81840b508995b51a256847->enter($__internal_050b41533bd08ba3d0113224f5a3eacb908123779e81840b508995b51a256847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a44750fdd3e81c65c0965c7db92403f2165ac4e546f52ec00d0af331630681f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44750fdd3e81c65c0965c7db92403f2165ac4e546f52ec00d0af331630681f7->enter($__internal_a44750fdd3e81c65c0965c7db92403f2165ac4e546f52ec00d0af331630681f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_050b41533bd08ba3d0113224f5a3eacb908123779e81840b508995b51a256847->leave($__internal_050b41533bd08ba3d0113224f5a3eacb908123779e81840b508995b51a256847_prof);

        
        $__internal_a44750fdd3e81c65c0965c7db92403f2165ac4e546f52ec00d0af331630681f7->leave($__internal_a44750fdd3e81c65c0965c7db92403f2165ac4e546f52ec00d0af331630681f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
