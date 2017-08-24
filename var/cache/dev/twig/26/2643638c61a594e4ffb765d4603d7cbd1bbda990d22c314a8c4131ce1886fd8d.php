<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ad708a1e226e9bfb378532f7fa2525eaafed6d04126e6ef6a4ab6c88525b720f extends Twig_Template
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
        $__internal_fc7cca608f39fc525342a51980d87ee32ffec378e86282e4337ee138ffe06c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7cca608f39fc525342a51980d87ee32ffec378e86282e4337ee138ffe06c13->enter($__internal_fc7cca608f39fc525342a51980d87ee32ffec378e86282e4337ee138ffe06c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6d7cebb70dc458b438dcb55ce004b8e182506a48f810b494d3aa44e6272a8fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7cebb70dc458b438dcb55ce004b8e182506a48f810b494d3aa44e6272a8fc9->enter($__internal_6d7cebb70dc458b438dcb55ce004b8e182506a48f810b494d3aa44e6272a8fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fc7cca608f39fc525342a51980d87ee32ffec378e86282e4337ee138ffe06c13->leave($__internal_fc7cca608f39fc525342a51980d87ee32ffec378e86282e4337ee138ffe06c13_prof);

        
        $__internal_6d7cebb70dc458b438dcb55ce004b8e182506a48f810b494d3aa44e6272a8fc9->leave($__internal_6d7cebb70dc458b438dcb55ce004b8e182506a48f810b494d3aa44e6272a8fc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
