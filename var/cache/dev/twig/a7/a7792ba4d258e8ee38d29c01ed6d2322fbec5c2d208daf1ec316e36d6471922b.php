<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f291794dcd83af45cd0cd3d9a4ee200127751659fb5056c58971ed543e300852 extends Twig_Template
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
        $__internal_06f523ecc2a8ee6e4086ee0ca9cd4b7ff74a3589be700fcbd9c534a3e74bc243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f523ecc2a8ee6e4086ee0ca9cd4b7ff74a3589be700fcbd9c534a3e74bc243->enter($__internal_06f523ecc2a8ee6e4086ee0ca9cd4b7ff74a3589be700fcbd9c534a3e74bc243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_77de7a23d00d741eb8f0966008142c94a9acf50eef64a90ac4935dd670bfcd10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77de7a23d00d741eb8f0966008142c94a9acf50eef64a90ac4935dd670bfcd10->enter($__internal_77de7a23d00d741eb8f0966008142c94a9acf50eef64a90ac4935dd670bfcd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_06f523ecc2a8ee6e4086ee0ca9cd4b7ff74a3589be700fcbd9c534a3e74bc243->leave($__internal_06f523ecc2a8ee6e4086ee0ca9cd4b7ff74a3589be700fcbd9c534a3e74bc243_prof);

        
        $__internal_77de7a23d00d741eb8f0966008142c94a9acf50eef64a90ac4935dd670bfcd10->leave($__internal_77de7a23d00d741eb8f0966008142c94a9acf50eef64a90ac4935dd670bfcd10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
