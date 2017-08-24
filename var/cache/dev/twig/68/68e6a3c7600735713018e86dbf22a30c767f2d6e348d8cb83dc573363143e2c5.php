<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_9d2ab53e2c27f2f1692bb80e3f4b3b82910b6ab67260aba18043683d05311d7e extends Twig_Template
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
        $__internal_f569eed877dce91af833f0c94d6d52cd3ab121e89d8d89c83441c57bf0787822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f569eed877dce91af833f0c94d6d52cd3ab121e89d8d89c83441c57bf0787822->enter($__internal_f569eed877dce91af833f0c94d6d52cd3ab121e89d8d89c83441c57bf0787822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a00f86aafd27e867d9822b18346db773d48c79ef1b41d81e302562ca409b0803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00f86aafd27e867d9822b18346db773d48c79ef1b41d81e302562ca409b0803->enter($__internal_a00f86aafd27e867d9822b18346db773d48c79ef1b41d81e302562ca409b0803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f569eed877dce91af833f0c94d6d52cd3ab121e89d8d89c83441c57bf0787822->leave($__internal_f569eed877dce91af833f0c94d6d52cd3ab121e89d8d89c83441c57bf0787822_prof);

        
        $__internal_a00f86aafd27e867d9822b18346db773d48c79ef1b41d81e302562ca409b0803->leave($__internal_a00f86aafd27e867d9822b18346db773d48c79ef1b41d81e302562ca409b0803_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
