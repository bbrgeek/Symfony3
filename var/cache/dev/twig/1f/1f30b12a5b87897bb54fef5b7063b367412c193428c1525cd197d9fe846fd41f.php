<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9760cacbc238f4231bb070d619e5b3c98526da0dc626583b77c2f5a2b9494a60 extends Twig_Template
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
        $__internal_30c0637383e8cde6a443a647da726ae0f03e16055b1832a9c1f7ad3d07e736d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c0637383e8cde6a443a647da726ae0f03e16055b1832a9c1f7ad3d07e736d7->enter($__internal_30c0637383e8cde6a443a647da726ae0f03e16055b1832a9c1f7ad3d07e736d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7ee617d1797f37f132cd5af00128e89dd4718e9be46d2528416f24696c324f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee617d1797f37f132cd5af00128e89dd4718e9be46d2528416f24696c324f3f->enter($__internal_7ee617d1797f37f132cd5af00128e89dd4718e9be46d2528416f24696c324f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_30c0637383e8cde6a443a647da726ae0f03e16055b1832a9c1f7ad3d07e736d7->leave($__internal_30c0637383e8cde6a443a647da726ae0f03e16055b1832a9c1f7ad3d07e736d7_prof);

        
        $__internal_7ee617d1797f37f132cd5af00128e89dd4718e9be46d2528416f24696c324f3f->leave($__internal_7ee617d1797f37f132cd5af00128e89dd4718e9be46d2528416f24696c324f3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
