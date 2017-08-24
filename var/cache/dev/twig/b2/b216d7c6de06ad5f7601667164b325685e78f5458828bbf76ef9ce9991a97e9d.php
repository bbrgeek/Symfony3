<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a839e81a40099c2cf87fa6a9c5da6172e5c9354862232016707f67469c54a070 extends Twig_Template
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
        $__internal_a0b275525f694f69c381ab29c2b4b6124692308c0401a5d85ed6fc330f2176ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b275525f694f69c381ab29c2b4b6124692308c0401a5d85ed6fc330f2176ad->enter($__internal_a0b275525f694f69c381ab29c2b4b6124692308c0401a5d85ed6fc330f2176ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_aafc1b5f0144d7b2d2c75ad6bc6a6c0bf61a5aa558969913dfa5577c90623b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafc1b5f0144d7b2d2c75ad6bc6a6c0bf61a5aa558969913dfa5577c90623b0e->enter($__internal_aafc1b5f0144d7b2d2c75ad6bc6a6c0bf61a5aa558969913dfa5577c90623b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a0b275525f694f69c381ab29c2b4b6124692308c0401a5d85ed6fc330f2176ad->leave($__internal_a0b275525f694f69c381ab29c2b4b6124692308c0401a5d85ed6fc330f2176ad_prof);

        
        $__internal_aafc1b5f0144d7b2d2c75ad6bc6a6c0bf61a5aa558969913dfa5577c90623b0e->leave($__internal_aafc1b5f0144d7b2d2c75ad6bc6a6c0bf61a5aa558969913dfa5577c90623b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
