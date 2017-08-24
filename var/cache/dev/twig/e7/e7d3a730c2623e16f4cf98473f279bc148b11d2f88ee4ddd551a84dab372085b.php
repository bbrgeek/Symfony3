<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9dd04bcf9381600c75b8f32e259bee98ce15b88eb72b9bcf3e6a92bbdad641fa extends Twig_Template
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
        $__internal_1628a0d7a2a37a2b51e04a54167581bdcdaa49cdb377f7be8e0a9a53356e5dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1628a0d7a2a37a2b51e04a54167581bdcdaa49cdb377f7be8e0a9a53356e5dc0->enter($__internal_1628a0d7a2a37a2b51e04a54167581bdcdaa49cdb377f7be8e0a9a53356e5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f0a4543ff841bab854ec451d4cf89803815922403321c3bc1dcc0d0eeb29996b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a4543ff841bab854ec451d4cf89803815922403321c3bc1dcc0d0eeb29996b->enter($__internal_f0a4543ff841bab854ec451d4cf89803815922403321c3bc1dcc0d0eeb29996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1628a0d7a2a37a2b51e04a54167581bdcdaa49cdb377f7be8e0a9a53356e5dc0->leave($__internal_1628a0d7a2a37a2b51e04a54167581bdcdaa49cdb377f7be8e0a9a53356e5dc0_prof);

        
        $__internal_f0a4543ff841bab854ec451d4cf89803815922403321c3bc1dcc0d0eeb29996b->leave($__internal_f0a4543ff841bab854ec451d4cf89803815922403321c3bc1dcc0d0eeb29996b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
