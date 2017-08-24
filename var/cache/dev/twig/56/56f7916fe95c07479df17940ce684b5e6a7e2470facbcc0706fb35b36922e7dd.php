<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_41000fb4129038e1eabac571ae60cae9ec5b101816b939dfa001d6f751d6e915 extends Twig_Template
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
        $__internal_2fcba264a481429d4f36465dd331e8db5014a3da2483bdbc13e65c1f61b4b035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcba264a481429d4f36465dd331e8db5014a3da2483bdbc13e65c1f61b4b035->enter($__internal_2fcba264a481429d4f36465dd331e8db5014a3da2483bdbc13e65c1f61b4b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0672b1572b51a9ba341841237b949b385c93db522b37831521950f2488e84877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0672b1572b51a9ba341841237b949b385c93db522b37831521950f2488e84877->enter($__internal_0672b1572b51a9ba341841237b949b385c93db522b37831521950f2488e84877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2fcba264a481429d4f36465dd331e8db5014a3da2483bdbc13e65c1f61b4b035->leave($__internal_2fcba264a481429d4f36465dd331e8db5014a3da2483bdbc13e65c1f61b4b035_prof);

        
        $__internal_0672b1572b51a9ba341841237b949b385c93db522b37831521950f2488e84877->leave($__internal_0672b1572b51a9ba341841237b949b385c93db522b37831521950f2488e84877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
