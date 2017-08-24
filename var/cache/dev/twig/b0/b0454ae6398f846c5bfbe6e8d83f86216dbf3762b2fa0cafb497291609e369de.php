<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_926aab53788d632c90052617969ef966d7bf300320f8c1cdc291e5e8f3fb5e3c extends Twig_Template
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
        $__internal_a84d9f1cdcf4149fd10d8908016be6ff3150bc96fc42f6895b52d40fe1b361fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84d9f1cdcf4149fd10d8908016be6ff3150bc96fc42f6895b52d40fe1b361fc->enter($__internal_a84d9f1cdcf4149fd10d8908016be6ff3150bc96fc42f6895b52d40fe1b361fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_c63b5f68b5719ca8ea3c6012299ccecf100067c6079ffe150ae35aad7429cbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63b5f68b5719ca8ea3c6012299ccecf100067c6079ffe150ae35aad7429cbf5->enter($__internal_c63b5f68b5719ca8ea3c6012299ccecf100067c6079ffe150ae35aad7429cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Affichage de l'annonce ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
</head>
<body>
<h1>Affichage de l'annonce n°";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>

<div>
    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>

<p>
    Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
</body>
</html>
";
        
        $__internal_a84d9f1cdcf4149fd10d8908016be6ff3150bc96fc42f6895b52d40fe1b361fc->leave($__internal_a84d9f1cdcf4149fd10d8908016be6ff3150bc96fc42f6895b52d40fe1b361fc_prof);

        
        $__internal_c63b5f68b5719ca8ea3c6012299ccecf100067c6079ffe150ae35aad7429cbf5->leave($__internal_c63b5f68b5719ca8ea3c6012299ccecf100067c6079ffe150ae35aad7429cbf5_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  57 => 16,  48 => 14,  43 => 13,  37 => 9,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <title>Affichage de l'annonce {{ id }}</title>
</head>
<body>
<h1>Affichage de l'annonce n°{{ id }} !</h1>

<div>
    {# On affiche tous les messages flash dont le nom est « info » #}
    {% for message in app.session.flashbag.get('info') %}
        <p>Message flash : {{ message }}</p>
    {% endfor %}
</div>

<p>
    Ici nous pourrons lire l'annonce ayant comme id : {{ id }}<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
</body>
</html>
", "OCPlatformBundle:Advert:view.html.twig", "/home/sibot/web/Symfony/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
