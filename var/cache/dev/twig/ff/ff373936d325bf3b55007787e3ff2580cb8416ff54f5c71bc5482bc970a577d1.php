<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cb4b599526197899711643ff88a522a3f5b65e3512ce80db6e0ce4e85bbfe94a extends Twig_Template
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
        $__internal_e4eb03e81b4b24e56797c14c9d08ab811665f62e42c6884518f84b35d2270424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eb03e81b4b24e56797c14c9d08ab811665f62e42c6884518f84b35d2270424->enter($__internal_e4eb03e81b4b24e56797c14c9d08ab811665f62e42c6884518f84b35d2270424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4eb0361e31ffa2f89b3551a315d6f3cc7d70b7c8e174a7e91b765a9bb038619a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb0361e31ffa2f89b3551a315d6f3cc7d70b7c8e174a7e91b765a9bb038619a->enter($__internal_4eb0361e31ffa2f89b3551a315d6f3cc7d70b7c8e174a7e91b765a9bb038619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e4eb03e81b4b24e56797c14c9d08ab811665f62e42c6884518f84b35d2270424->leave($__internal_e4eb03e81b4b24e56797c14c9d08ab811665f62e42c6884518f84b35d2270424_prof);

        
        $__internal_4eb0361e31ffa2f89b3551a315d6f3cc7d70b7c8e174a7e91b765a9bb038619a->leave($__internal_4eb0361e31ffa2f89b3551a315d6f3cc7d70b7c8e174a7e91b765a9bb038619a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
