<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_d7a002e2993f09f7fb585482b220481a75dec8a5b67553242a792a8b168698ec extends Twig_Template
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
        $__internal_f2a51eff7696558b2a0af7dbbb633156bc73735fd4a3fa641993fe495e0d5a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a51eff7696558b2a0af7dbbb633156bc73735fd4a3fa641993fe495e0d5a47->enter($__internal_f2a51eff7696558b2a0af7dbbb633156bc73735fd4a3fa641993fe495e0d5a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_33c88267790be990d01afc52a0f3a20907b07fad70fa5ff4f3a6eb97e0d566b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c88267790be990d01afc52a0f3a20907b07fad70fa5ff4f3a6eb97e0d566b7->enter($__internal_33c88267790be990d01afc52a0f3a20907b07fad70fa5ff4f3a6eb97e0d566b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => (isset($context["advert_id"]) ? $context["advert_id"] : $this->getContext($context, "advert_id")))), "html", null, true);
        echo "\">
    Lien vers l'annonce d'id ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["advert_id"]) ? $context["advert_id"] : $this->getContext($context, "advert_id")), "html", null, true);
        echo "
</a>
</body>
</html>
";
        
        $__internal_f2a51eff7696558b2a0af7dbbb633156bc73735fd4a3fa641993fe495e0d5a47->leave($__internal_f2a51eff7696558b2a0af7dbbb633156bc73735fd4a3fa641993fe495e0d5a47_prof);

        
        $__internal_33c88267790be990d01afc52a0f3a20907b07fad70fa5ff4f3a6eb97e0d566b7->leave($__internal_33c88267790be990d01afc52a0f3a20907b07fad70fa5ff4f3a6eb97e0d566b7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  45 => 17,  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello {{ nom }} !</h1>

<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
<a href=\"{{ path('oc_platform_view', { 'id': advert_id }) }}\">
    Lien vers l'annonce d'id {{ advert_id }}
</a>
</body>
</html>
", "OCPlatformBundle:Advert:index.html.twig", "/home/sibot/web/Symfony/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
