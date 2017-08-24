<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7b9df416c1d43fa7499af6e53506184aade511d20779a751affb4673d102d815 extends Twig_Template
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
        $__internal_06effa0d849d4504161724834834c68e5589ab10bb484af6b24bcc71285e0b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06effa0d849d4504161724834834c68e5589ab10bb484af6b24bcc71285e0b19->enter($__internal_06effa0d849d4504161724834834c68e5589ab10bb484af6b24bcc71285e0b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_45468461ac8e7172874e61925419d52e0aac8f2e344df22579f3414a327799ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45468461ac8e7172874e61925419d52e0aac8f2e344df22579f3414a327799ce->enter($__internal_45468461ac8e7172874e61925419d52e0aac8f2e344df22579f3414a327799ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_06effa0d849d4504161724834834c68e5589ab10bb484af6b24bcc71285e0b19->leave($__internal_06effa0d849d4504161724834834c68e5589ab10bb484af6b24bcc71285e0b19_prof);

        
        $__internal_45468461ac8e7172874e61925419d52e0aac8f2e344df22579f3414a327799ce->leave($__internal_45468461ac8e7172874e61925419d52e0aac8f2e344df22579f3414a327799ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
