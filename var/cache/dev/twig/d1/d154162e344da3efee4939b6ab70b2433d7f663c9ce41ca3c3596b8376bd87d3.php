<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c72119c949737b18c2466d28b4569e761e9c441deeec08bbe1bb9a577478abef extends Twig_Template
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
        $__internal_39474fc8a6da3abaf5585433ef60cd7e76346baab132fb5d229461ca72242149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39474fc8a6da3abaf5585433ef60cd7e76346baab132fb5d229461ca72242149->enter($__internal_39474fc8a6da3abaf5585433ef60cd7e76346baab132fb5d229461ca72242149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8a72191e73f5915a14f36fd70f42ec534ee6efc047286d5ce825d5e55b0132a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a72191e73f5915a14f36fd70f42ec534ee6efc047286d5ce825d5e55b0132a8->enter($__internal_8a72191e73f5915a14f36fd70f42ec534ee6efc047286d5ce825d5e55b0132a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_39474fc8a6da3abaf5585433ef60cd7e76346baab132fb5d229461ca72242149->leave($__internal_39474fc8a6da3abaf5585433ef60cd7e76346baab132fb5d229461ca72242149_prof);

        
        $__internal_8a72191e73f5915a14f36fd70f42ec534ee6efc047286d5ce825d5e55b0132a8->leave($__internal_8a72191e73f5915a14f36fd70f42ec534ee6efc047286d5ce825d5e55b0132a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
