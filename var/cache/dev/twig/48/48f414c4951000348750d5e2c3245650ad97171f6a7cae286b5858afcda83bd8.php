<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e5ef3e1f5674fcb63ed6f6a471988e62adafa15f186218fca6294977bc833c2 extends Twig_Template
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
        $__internal_ff266ed3966a91addd2bf7556ab95f2433208e2eb6fcd20dcd60687ec3811e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff266ed3966a91addd2bf7556ab95f2433208e2eb6fcd20dcd60687ec3811e53->enter($__internal_ff266ed3966a91addd2bf7556ab95f2433208e2eb6fcd20dcd60687ec3811e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e13d75559ca62635fa0ca1860b8c1bc4a809c21c4cfa3ee3f279dc093d41f32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13d75559ca62635fa0ca1860b8c1bc4a809c21c4cfa3ee3f279dc093d41f32b->enter($__internal_e13d75559ca62635fa0ca1860b8c1bc4a809c21c4cfa3ee3f279dc093d41f32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ff266ed3966a91addd2bf7556ab95f2433208e2eb6fcd20dcd60687ec3811e53->leave($__internal_ff266ed3966a91addd2bf7556ab95f2433208e2eb6fcd20dcd60687ec3811e53_prof);

        
        $__internal_e13d75559ca62635fa0ca1860b8c1bc4a809c21c4cfa3ee3f279dc093d41f32b->leave($__internal_e13d75559ca62635fa0ca1860b8c1bc4a809c21c4cfa3ee3f279dc093d41f32b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
