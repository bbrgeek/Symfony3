<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_82603353033912788113faabcdf831d1888a5e08676a5efa740208970bbbd1ca extends Twig_Template
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
        $__internal_53b7f37daad978b841f4ee740d0c363356af6cfc6b1f58c94f7bb06cfb992f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b7f37daad978b841f4ee740d0c363356af6cfc6b1f58c94f7bb06cfb992f9f->enter($__internal_53b7f37daad978b841f4ee740d0c363356af6cfc6b1f58c94f7bb06cfb992f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ad0cbd53ddd192ea6f70522d2a2be6ed721c8f4bc27c6012faa89fa6d8a0fa6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0cbd53ddd192ea6f70522d2a2be6ed721c8f4bc27c6012faa89fa6d8a0fa6a->enter($__internal_ad0cbd53ddd192ea6f70522d2a2be6ed721c8f4bc27c6012faa89fa6d8a0fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_53b7f37daad978b841f4ee740d0c363356af6cfc6b1f58c94f7bb06cfb992f9f->leave($__internal_53b7f37daad978b841f4ee740d0c363356af6cfc6b1f58c94f7bb06cfb992f9f_prof);

        
        $__internal_ad0cbd53ddd192ea6f70522d2a2be6ed721c8f4bc27c6012faa89fa6d8a0fa6a->leave($__internal_ad0cbd53ddd192ea6f70522d2a2be6ed721c8f4bc27c6012faa89fa6d8a0fa6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
