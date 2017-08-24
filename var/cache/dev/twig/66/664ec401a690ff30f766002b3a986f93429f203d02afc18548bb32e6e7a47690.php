<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fa84366c70e296534c441478761d3ec1fae5306b1fe7b6cce4727d2859bd7125 extends Twig_Template
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
        $__internal_3cc1adae725c9ae4579d1f9ef0da0c2a7d661d3c72085f9623a04b025aae5668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc1adae725c9ae4579d1f9ef0da0c2a7d661d3c72085f9623a04b025aae5668->enter($__internal_3cc1adae725c9ae4579d1f9ef0da0c2a7d661d3c72085f9623a04b025aae5668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b026f905ab5cea6c38b73c847353a878616273443648e509d3b62d2a1c9a3607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b026f905ab5cea6c38b73c847353a878616273443648e509d3b62d2a1c9a3607->enter($__internal_b026f905ab5cea6c38b73c847353a878616273443648e509d3b62d2a1c9a3607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3cc1adae725c9ae4579d1f9ef0da0c2a7d661d3c72085f9623a04b025aae5668->leave($__internal_3cc1adae725c9ae4579d1f9ef0da0c2a7d661d3c72085f9623a04b025aae5668_prof);

        
        $__internal_b026f905ab5cea6c38b73c847353a878616273443648e509d3b62d2a1c9a3607->leave($__internal_b026f905ab5cea6c38b73c847353a878616273443648e509d3b62d2a1c9a3607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
