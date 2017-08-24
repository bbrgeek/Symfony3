<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a838fdceb437789545c5615274c888a09a672b1500894f539c776d0048af8ab9 extends Twig_Template
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
        $__internal_cf9f04336a052ed83d93d4a1a6172419c1d727acd34e9961675fbd4ec002b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9f04336a052ed83d93d4a1a6172419c1d727acd34e9961675fbd4ec002b048->enter($__internal_cf9f04336a052ed83d93d4a1a6172419c1d727acd34e9961675fbd4ec002b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_19e7497b9a834f5d855be10f93ade6122e304d1a957d74978fe2df058d8939ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e7497b9a834f5d855be10f93ade6122e304d1a957d74978fe2df058d8939ca->enter($__internal_19e7497b9a834f5d855be10f93ade6122e304d1a957d74978fe2df058d8939ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cf9f04336a052ed83d93d4a1a6172419c1d727acd34e9961675fbd4ec002b048->leave($__internal_cf9f04336a052ed83d93d4a1a6172419c1d727acd34e9961675fbd4ec002b048_prof);

        
        $__internal_19e7497b9a834f5d855be10f93ade6122e304d1a957d74978fe2df058d8939ca->leave($__internal_19e7497b9a834f5d855be10f93ade6122e304d1a957d74978fe2df058d8939ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/sibot/web/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
