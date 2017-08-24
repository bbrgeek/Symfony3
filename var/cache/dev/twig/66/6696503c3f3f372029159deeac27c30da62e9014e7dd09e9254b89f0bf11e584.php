<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_97b1071070aa475ec7d14047fb4cd90415460e4bcb5a82c46b500688cf6cf7a9 extends Twig_Template
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
        $__internal_b8c84f38255c47f07f59b7a340360913f643a1948dab6cb70ef477371903c7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c84f38255c47f07f59b7a340360913f643a1948dab6cb70ef477371903c7a5->enter($__internal_b8c84f38255c47f07f59b7a340360913f643a1948dab6cb70ef477371903c7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d8d8b993e963585538b19712ed9a06ea9823419f1d8a35361419db732f65c488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d8b993e963585538b19712ed9a06ea9823419f1d8a35361419db732f65c488->enter($__internal_d8d8b993e963585538b19712ed9a06ea9823419f1d8a35361419db732f65c488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b8c84f38255c47f07f59b7a340360913f643a1948dab6cb70ef477371903c7a5->leave($__internal_b8c84f38255c47f07f59b7a340360913f643a1948dab6cb70ef477371903c7a5_prof);

        
        $__internal_d8d8b993e963585538b19712ed9a06ea9823419f1d8a35361419db732f65c488->leave($__internal_d8d8b993e963585538b19712ed9a06ea9823419f1d8a35361419db732f65c488_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
