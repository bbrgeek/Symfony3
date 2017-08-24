<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d744738987068416c29a65e41bdcc50eec37b7cd1e1996a12dc3bd199a1e85ae extends Twig_Template
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
        $__internal_e11bd780cb91ffbfb1ae062e46e6656d6cf5fda9ab46d3237b1d2c66774dc404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11bd780cb91ffbfb1ae062e46e6656d6cf5fda9ab46d3237b1d2c66774dc404->enter($__internal_e11bd780cb91ffbfb1ae062e46e6656d6cf5fda9ab46d3237b1d2c66774dc404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4ae38c4a775c4a5066c1bdf566b46454582e127ba6f1f3ff4407a934a2fe28f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae38c4a775c4a5066c1bdf566b46454582e127ba6f1f3ff4407a934a2fe28f2->enter($__internal_4ae38c4a775c4a5066c1bdf566b46454582e127ba6f1f3ff4407a934a2fe28f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e11bd780cb91ffbfb1ae062e46e6656d6cf5fda9ab46d3237b1d2c66774dc404->leave($__internal_e11bd780cb91ffbfb1ae062e46e6656d6cf5fda9ab46d3237b1d2c66774dc404_prof);

        
        $__internal_4ae38c4a775c4a5066c1bdf566b46454582e127ba6f1f3ff4407a934a2fe28f2->leave($__internal_4ae38c4a775c4a5066c1bdf566b46454582e127ba6f1f3ff4407a934a2fe28f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
