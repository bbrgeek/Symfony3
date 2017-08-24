<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9184d51525f2523581917741866f5bc11bc324c27c6184df6dcf8d9fe4749604 extends Twig_Template
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
        $__internal_7e94b455f58ca2a56e5c1246aa0a211cc9bca2a5a28b7d8fa9be8789e5a6faef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e94b455f58ca2a56e5c1246aa0a211cc9bca2a5a28b7d8fa9be8789e5a6faef->enter($__internal_7e94b455f58ca2a56e5c1246aa0a211cc9bca2a5a28b7d8fa9be8789e5a6faef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fda45f7f32a7fe7e0709cfa3841508b43f9b123c101c6581395f715f9f51e596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda45f7f32a7fe7e0709cfa3841508b43f9b123c101c6581395f715f9f51e596->enter($__internal_fda45f7f32a7fe7e0709cfa3841508b43f9b123c101c6581395f715f9f51e596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7e94b455f58ca2a56e5c1246aa0a211cc9bca2a5a28b7d8fa9be8789e5a6faef->leave($__internal_7e94b455f58ca2a56e5c1246aa0a211cc9bca2a5a28b7d8fa9be8789e5a6faef_prof);

        
        $__internal_fda45f7f32a7fe7e0709cfa3841508b43f9b123c101c6581395f715f9f51e596->leave($__internal_fda45f7f32a7fe7e0709cfa3841508b43f9b123c101c6581395f715f9f51e596_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
