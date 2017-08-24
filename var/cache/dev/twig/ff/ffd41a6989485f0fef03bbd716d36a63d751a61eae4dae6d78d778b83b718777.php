<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_735e65fb3a52e04897bce23228121f4cdbe87952cc79946c867575719f50471f extends Twig_Template
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
        $__internal_a2165695eea1727082d6bdf5e662fe270b0136ea59550ea9d1e1237f7aab72dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2165695eea1727082d6bdf5e662fe270b0136ea59550ea9d1e1237f7aab72dc->enter($__internal_a2165695eea1727082d6bdf5e662fe270b0136ea59550ea9d1e1237f7aab72dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4a53a3f22770fd0c5a855d29ac0fcdd438f0b0faf677b9ac8a7bb3c0813c8349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a53a3f22770fd0c5a855d29ac0fcdd438f0b0faf677b9ac8a7bb3c0813c8349->enter($__internal_4a53a3f22770fd0c5a855d29ac0fcdd438f0b0faf677b9ac8a7bb3c0813c8349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a2165695eea1727082d6bdf5e662fe270b0136ea59550ea9d1e1237f7aab72dc->leave($__internal_a2165695eea1727082d6bdf5e662fe270b0136ea59550ea9d1e1237f7aab72dc_prof);

        
        $__internal_4a53a3f22770fd0c5a855d29ac0fcdd438f0b0faf677b9ac8a7bb3c0813c8349->leave($__internal_4a53a3f22770fd0c5a855d29ac0fcdd438f0b0faf677b9ac8a7bb3c0813c8349_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
