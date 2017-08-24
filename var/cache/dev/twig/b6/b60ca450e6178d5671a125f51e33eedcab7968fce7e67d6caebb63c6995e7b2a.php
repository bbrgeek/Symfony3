<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c7649aa78914edf63cc8fb09984113c50976f056e6f8adf96f363a151908154b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c198380b7dd2218d33212b552bcf960aad2166b81aa3666fcca6d788977741c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c198380b7dd2218d33212b552bcf960aad2166b81aa3666fcca6d788977741c0->enter($__internal_c198380b7dd2218d33212b552bcf960aad2166b81aa3666fcca6d788977741c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_02a1561d9e0034f534468a8203b33fcc00d17db50ee4c8e4dd5483d710c8e851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a1561d9e0034f534468a8203b33fcc00d17db50ee4c8e4dd5483d710c8e851->enter($__internal_02a1561d9e0034f534468a8203b33fcc00d17db50ee4c8e4dd5483d710c8e851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c198380b7dd2218d33212b552bcf960aad2166b81aa3666fcca6d788977741c0->leave($__internal_c198380b7dd2218d33212b552bcf960aad2166b81aa3666fcca6d788977741c0_prof);

        
        $__internal_02a1561d9e0034f534468a8203b33fcc00d17db50ee4c8e4dd5483d710c8e851->leave($__internal_02a1561d9e0034f534468a8203b33fcc00d17db50ee4c8e4dd5483d710c8e851_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5982bd421c0a9f9979e2d96eb32d8bcc6a12803795d8bc858ae0f575ad3ae870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5982bd421c0a9f9979e2d96eb32d8bcc6a12803795d8bc858ae0f575ad3ae870->enter($__internal_5982bd421c0a9f9979e2d96eb32d8bcc6a12803795d8bc858ae0f575ad3ae870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a8189d5844c35eb9ab3bb2b4e2dd4ada41697f8bb601cbfcf4029053c7101c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8189d5844c35eb9ab3bb2b4e2dd4ada41697f8bb601cbfcf4029053c7101c7->enter($__internal_2a8189d5844c35eb9ab3bb2b4e2dd4ada41697f8bb601cbfcf4029053c7101c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2a8189d5844c35eb9ab3bb2b4e2dd4ada41697f8bb601cbfcf4029053c7101c7->leave($__internal_2a8189d5844c35eb9ab3bb2b4e2dd4ada41697f8bb601cbfcf4029053c7101c7_prof);

        
        $__internal_5982bd421c0a9f9979e2d96eb32d8bcc6a12803795d8bc858ae0f575ad3ae870->leave($__internal_5982bd421c0a9f9979e2d96eb32d8bcc6a12803795d8bc858ae0f575ad3ae870_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_237d27cea979dc0f0dbbac3aaf90c7994bf8cd932e90f7a6331c189f68bc1e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237d27cea979dc0f0dbbac3aaf90c7994bf8cd932e90f7a6331c189f68bc1e75->enter($__internal_237d27cea979dc0f0dbbac3aaf90c7994bf8cd932e90f7a6331c189f68bc1e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72608bcecbdcc21571136b2b7994b59c6e65bd4211364fecf335546ed69cb73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72608bcecbdcc21571136b2b7994b59c6e65bd4211364fecf335546ed69cb73f->enter($__internal_72608bcecbdcc21571136b2b7994b59c6e65bd4211364fecf335546ed69cb73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_72608bcecbdcc21571136b2b7994b59c6e65bd4211364fecf335546ed69cb73f->leave($__internal_72608bcecbdcc21571136b2b7994b59c6e65bd4211364fecf335546ed69cb73f_prof);

        
        $__internal_237d27cea979dc0f0dbbac3aaf90c7994bf8cd932e90f7a6331c189f68bc1e75->leave($__internal_237d27cea979dc0f0dbbac3aaf90c7994bf8cd932e90f7a6331c189f68bc1e75_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_216e8af342297ab5965ad1f5ca26bc759e486ce17a0ac0b76941411340ba02ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216e8af342297ab5965ad1f5ca26bc759e486ce17a0ac0b76941411340ba02ac->enter($__internal_216e8af342297ab5965ad1f5ca26bc759e486ce17a0ac0b76941411340ba02ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73386ae05aac051f712b9099a3b59418b6f4614d9b2cc4287d835d31a5e71299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73386ae05aac051f712b9099a3b59418b6f4614d9b2cc4287d835d31a5e71299->enter($__internal_73386ae05aac051f712b9099a3b59418b6f4614d9b2cc4287d835d31a5e71299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73386ae05aac051f712b9099a3b59418b6f4614d9b2cc4287d835d31a5e71299->leave($__internal_73386ae05aac051f712b9099a3b59418b6f4614d9b2cc4287d835d31a5e71299_prof);

        
        $__internal_216e8af342297ab5965ad1f5ca26bc759e486ce17a0ac0b76941411340ba02ac->leave($__internal_216e8af342297ab5965ad1f5ca26bc759e486ce17a0ac0b76941411340ba02ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
