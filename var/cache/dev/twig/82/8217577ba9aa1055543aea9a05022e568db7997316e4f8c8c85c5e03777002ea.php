<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_e4ef0eb3185af5ec83729723a7e38662b6b6da508323e4aa5dc3d5a6f18eaa55 extends Twig_Template
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
        $__internal_20e83c77ddb1023427eb6e7dd39257661cd3924a8d00ef2eeed131314139ddb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e83c77ddb1023427eb6e7dd39257661cd3924a8d00ef2eeed131314139ddb6->enter($__internal_20e83c77ddb1023427eb6e7dd39257661cd3924a8d00ef2eeed131314139ddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_706a085425759ec5a937aef16c03cfe305f18fa1cf321ae8f927a854489d6d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706a085425759ec5a937aef16c03cfe305f18fa1cf321ae8f927a854489d6d60->enter($__internal_706a085425759ec5a937aef16c03cfe305f18fa1cf321ae8f927a854489d6d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_20e83c77ddb1023427eb6e7dd39257661cd3924a8d00ef2eeed131314139ddb6->leave($__internal_20e83c77ddb1023427eb6e7dd39257661cd3924a8d00ef2eeed131314139ddb6_prof);

        
        $__internal_706a085425759ec5a937aef16c03cfe305f18fa1cf321ae8f927a854489d6d60->leave($__internal_706a085425759ec5a937aef16c03cfe305f18fa1cf321ae8f927a854489d6d60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
