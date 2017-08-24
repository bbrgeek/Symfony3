<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_782dfa552829ed96479f2f9035fa7fafe32bba975fd1c2accb099c008cfaba5d extends Twig_Template
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
        $__internal_ad7b60a4db59774ee6dda4fd48953851f906800da09b58076723a91b2f796669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad7b60a4db59774ee6dda4fd48953851f906800da09b58076723a91b2f796669->enter($__internal_ad7b60a4db59774ee6dda4fd48953851f906800da09b58076723a91b2f796669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f27574ce0c89b7290d8831fdcddfc49700e921d86688690e52ab8f194aebb152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27574ce0c89b7290d8831fdcddfc49700e921d86688690e52ab8f194aebb152->enter($__internal_f27574ce0c89b7290d8831fdcddfc49700e921d86688690e52ab8f194aebb152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ad7b60a4db59774ee6dda4fd48953851f906800da09b58076723a91b2f796669->leave($__internal_ad7b60a4db59774ee6dda4fd48953851f906800da09b58076723a91b2f796669_prof);

        
        $__internal_f27574ce0c89b7290d8831fdcddfc49700e921d86688690e52ab8f194aebb152->leave($__internal_f27574ce0c89b7290d8831fdcddfc49700e921d86688690e52ab8f194aebb152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
