<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9f8d99aefcfee4ccb353f55e0c639c9126bee81ff0fe84dfbe12507fb81e069a extends Twig_Template
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
        $__internal_cf8282f45e7f4f3996b3041e1f94353ff22e2412035b079cf0cdec94afad453e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8282f45e7f4f3996b3041e1f94353ff22e2412035b079cf0cdec94afad453e->enter($__internal_cf8282f45e7f4f3996b3041e1f94353ff22e2412035b079cf0cdec94afad453e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c9c01738f18a55f24e8b75767ee70854b9db6316535d4ac4207d0e1000c686eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c01738f18a55f24e8b75767ee70854b9db6316535d4ac4207d0e1000c686eb->enter($__internal_c9c01738f18a55f24e8b75767ee70854b9db6316535d4ac4207d0e1000c686eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cf8282f45e7f4f3996b3041e1f94353ff22e2412035b079cf0cdec94afad453e->leave($__internal_cf8282f45e7f4f3996b3041e1f94353ff22e2412035b079cf0cdec94afad453e_prof);

        
        $__internal_c9c01738f18a55f24e8b75767ee70854b9db6316535d4ac4207d0e1000c686eb->leave($__internal_c9c01738f18a55f24e8b75767ee70854b9db6316535d4ac4207d0e1000c686eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
