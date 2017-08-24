<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5b0fe037b71f8a01d559c3e0bdc0451cafbe472364b4d3f9c9b9383ae5cef850 extends Twig_Template
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
        $__internal_1069196c58f55cc2ce909e3544ec86f66b2c0885748cbd69fbf022f9194fd804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1069196c58f55cc2ce909e3544ec86f66b2c0885748cbd69fbf022f9194fd804->enter($__internal_1069196c58f55cc2ce909e3544ec86f66b2c0885748cbd69fbf022f9194fd804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_6474944560faa3819a1a17d30d23e7377bf3a2a1fa73dc51ae71d69c8323d72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6474944560faa3819a1a17d30d23e7377bf3a2a1fa73dc51ae71d69c8323d72a->enter($__internal_6474944560faa3819a1a17d30d23e7377bf3a2a1fa73dc51ae71d69c8323d72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1069196c58f55cc2ce909e3544ec86f66b2c0885748cbd69fbf022f9194fd804->leave($__internal_1069196c58f55cc2ce909e3544ec86f66b2c0885748cbd69fbf022f9194fd804_prof);

        
        $__internal_6474944560faa3819a1a17d30d23e7377bf3a2a1fa73dc51ae71d69c8323d72a->leave($__internal_6474944560faa3819a1a17d30d23e7377bf3a2a1fa73dc51ae71d69c8323d72a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
