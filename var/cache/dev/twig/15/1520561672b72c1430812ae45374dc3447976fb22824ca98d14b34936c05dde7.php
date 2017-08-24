<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_403c51a6cabae0d151ba476f85598a58249a32597ab7463dd8ead8188e2ff937 extends Twig_Template
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
        $__internal_7cb5313354c86f958d1dda1f070329b391f2c154158db29d56aec3dce6a7202e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb5313354c86f958d1dda1f070329b391f2c154158db29d56aec3dce6a7202e->enter($__internal_7cb5313354c86f958d1dda1f070329b391f2c154158db29d56aec3dce6a7202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7cfbeef7044c23a6221eb4c0dd79ab66fafb37bd10d8affebac9aa9b53421f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfbeef7044c23a6221eb4c0dd79ab66fafb37bd10d8affebac9aa9b53421f5c->enter($__internal_7cfbeef7044c23a6221eb4c0dd79ab66fafb37bd10d8affebac9aa9b53421f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7cb5313354c86f958d1dda1f070329b391f2c154158db29d56aec3dce6a7202e->leave($__internal_7cb5313354c86f958d1dda1f070329b391f2c154158db29d56aec3dce6a7202e_prof);

        
        $__internal_7cfbeef7044c23a6221eb4c0dd79ab66fafb37bd10d8affebac9aa9b53421f5c->leave($__internal_7cfbeef7044c23a6221eb4c0dd79ab66fafb37bd10d8affebac9aa9b53421f5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
