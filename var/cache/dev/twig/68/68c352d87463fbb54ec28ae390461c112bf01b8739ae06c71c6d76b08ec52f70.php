<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_92f4798e67e012fb47a2eea92088bc916bf15e413a9379135d5bb16245223e02 extends Twig_Template
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
        $__internal_86546aea6555a5374bf305fed86081304911a476566763a3c3b7cc251d4753dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86546aea6555a5374bf305fed86081304911a476566763a3c3b7cc251d4753dc->enter($__internal_86546aea6555a5374bf305fed86081304911a476566763a3c3b7cc251d4753dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_15510804e3de937e13c9492282314ffe804d80fa81ac28081c24002644500031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15510804e3de937e13c9492282314ffe804d80fa81ac28081c24002644500031->enter($__internal_15510804e3de937e13c9492282314ffe804d80fa81ac28081c24002644500031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_86546aea6555a5374bf305fed86081304911a476566763a3c3b7cc251d4753dc->leave($__internal_86546aea6555a5374bf305fed86081304911a476566763a3c3b7cc251d4753dc_prof);

        
        $__internal_15510804e3de937e13c9492282314ffe804d80fa81ac28081c24002644500031->leave($__internal_15510804e3de937e13c9492282314ffe804d80fa81ac28081c24002644500031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
