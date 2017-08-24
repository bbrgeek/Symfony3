<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ed3dbeedd929a28a4f3afdf915b9603846e438eb7c99c121729816ed2a018603 extends Twig_Template
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
        $__internal_8ba9d50b2c976b87642d9c0392f0a2a34424ba3e5459d7b05b2cb873499eb50d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba9d50b2c976b87642d9c0392f0a2a34424ba3e5459d7b05b2cb873499eb50d->enter($__internal_8ba9d50b2c976b87642d9c0392f0a2a34424ba3e5459d7b05b2cb873499eb50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_96d211ee945e86bc0222970928f98aa53fe4d5722059afe462e81ef87b8fa591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d211ee945e86bc0222970928f98aa53fe4d5722059afe462e81ef87b8fa591->enter($__internal_96d211ee945e86bc0222970928f98aa53fe4d5722059afe462e81ef87b8fa591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8ba9d50b2c976b87642d9c0392f0a2a34424ba3e5459d7b05b2cb873499eb50d->leave($__internal_8ba9d50b2c976b87642d9c0392f0a2a34424ba3e5459d7b05b2cb873499eb50d_prof);

        
        $__internal_96d211ee945e86bc0222970928f98aa53fe4d5722059afe462e81ef87b8fa591->leave($__internal_96d211ee945e86bc0222970928f98aa53fe4d5722059afe462e81ef87b8fa591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
