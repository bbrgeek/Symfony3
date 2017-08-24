<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c75ed666da4bcd613e5c7a900ee5bccef74a26b859cc1d8712d1debfd4eeac03 extends Twig_Template
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
        $__internal_f46a357a84c589ca4c180698a985f67482141178e3274a26f213face80da4f59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f46a357a84c589ca4c180698a985f67482141178e3274a26f213face80da4f59->enter($__internal_f46a357a84c589ca4c180698a985f67482141178e3274a26f213face80da4f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ebd893fc9731b75866fa9fb05cd8bf92ae30dbd51a24fd5584abfde4931ab64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd893fc9731b75866fa9fb05cd8bf92ae30dbd51a24fd5584abfde4931ab64b->enter($__internal_ebd893fc9731b75866fa9fb05cd8bf92ae30dbd51a24fd5584abfde4931ab64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f46a357a84c589ca4c180698a985f67482141178e3274a26f213face80da4f59->leave($__internal_f46a357a84c589ca4c180698a985f67482141178e3274a26f213face80da4f59_prof);

        
        $__internal_ebd893fc9731b75866fa9fb05cd8bf92ae30dbd51a24fd5584abfde4931ab64b->leave($__internal_ebd893fc9731b75866fa9fb05cd8bf92ae30dbd51a24fd5584abfde4931ab64b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
