<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2d7ccaf477841e010c7e5fc7a3570512dbfc641df381541eadebce404a957482 extends Twig_Template
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
        $__internal_4e3bcca9ac6dde653c630477a495b497dfacd8a90b7a250032a49a84a474a3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3bcca9ac6dde653c630477a495b497dfacd8a90b7a250032a49a84a474a3b2->enter($__internal_4e3bcca9ac6dde653c630477a495b497dfacd8a90b7a250032a49a84a474a3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_17caf4c630118623ee9c3d6e429201e2516bc51d85b5db2f6c5339c2efc1287f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17caf4c630118623ee9c3d6e429201e2516bc51d85b5db2f6c5339c2efc1287f->enter($__internal_17caf4c630118623ee9c3d6e429201e2516bc51d85b5db2f6c5339c2efc1287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4e3bcca9ac6dde653c630477a495b497dfacd8a90b7a250032a49a84a474a3b2->leave($__internal_4e3bcca9ac6dde653c630477a495b497dfacd8a90b7a250032a49a84a474a3b2_prof);

        
        $__internal_17caf4c630118623ee9c3d6e429201e2516bc51d85b5db2f6c5339c2efc1287f->leave($__internal_17caf4c630118623ee9c3d6e429201e2516bc51d85b5db2f6c5339c2efc1287f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
