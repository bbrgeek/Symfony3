<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e1d9efed37919273e24a51644bb93c34d5c13287b784a293780d2166c8c7f37a extends Twig_Template
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
        $__internal_a54af0d8e1e040121d1e7d7dcc36063f5ce98d546e896b60fac58c7a590ce4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54af0d8e1e040121d1e7d7dcc36063f5ce98d546e896b60fac58c7a590ce4e8->enter($__internal_a54af0d8e1e040121d1e7d7dcc36063f5ce98d546e896b60fac58c7a590ce4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a7e6628dc38b6d7658f4f1917c933c93d6b1db3b14651356bd0ed16b2a59b446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e6628dc38b6d7658f4f1917c933c93d6b1db3b14651356bd0ed16b2a59b446->enter($__internal_a7e6628dc38b6d7658f4f1917c933c93d6b1db3b14651356bd0ed16b2a59b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a54af0d8e1e040121d1e7d7dcc36063f5ce98d546e896b60fac58c7a590ce4e8->leave($__internal_a54af0d8e1e040121d1e7d7dcc36063f5ce98d546e896b60fac58c7a590ce4e8_prof);

        
        $__internal_a7e6628dc38b6d7658f4f1917c933c93d6b1db3b14651356bd0ed16b2a59b446->leave($__internal_a7e6628dc38b6d7658f4f1917c933c93d6b1db3b14651356bd0ed16b2a59b446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
