<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_dafe8cfe084f6d349d106dcdff4d0442d1c8cdb1bc28b06df4aba3d3ac0fe5f9 extends Twig_Template
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
        $__internal_7a438ee665c452ad32cfd9ea8470256dc65dc96453e80d0d84f60b70101ecd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a438ee665c452ad32cfd9ea8470256dc65dc96453e80d0d84f60b70101ecd83->enter($__internal_7a438ee665c452ad32cfd9ea8470256dc65dc96453e80d0d84f60b70101ecd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0e77f5e1e3187b60c1d72eb241316d4a83a48258d25f44e0d848f9cddae84a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e77f5e1e3187b60c1d72eb241316d4a83a48258d25f44e0d848f9cddae84a07->enter($__internal_0e77f5e1e3187b60c1d72eb241316d4a83a48258d25f44e0d848f9cddae84a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7a438ee665c452ad32cfd9ea8470256dc65dc96453e80d0d84f60b70101ecd83->leave($__internal_7a438ee665c452ad32cfd9ea8470256dc65dc96453e80d0d84f60b70101ecd83_prof);

        
        $__internal_0e77f5e1e3187b60c1d72eb241316d4a83a48258d25f44e0d848f9cddae84a07->leave($__internal_0e77f5e1e3187b60c1d72eb241316d4a83a48258d25f44e0d848f9cddae84a07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
