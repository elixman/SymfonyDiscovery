<?php

/* SBPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_42792460cbfd4c1e85aafd94dd198afc7a3bf220e44a5906629e347faf22a631 extends Twig_Template
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
        $__internal_8f7342b7baf7494f1af517d0c6287a1484ab76c07858d80f3d231213595bcb55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7342b7baf7494f1af517d0c6287a1484ab76c07858d80f3d231213595bcb55->enter($__internal_8f7342b7baf7494f1af517d0c6287a1484ab76c07858d80f3d231213595bcb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:index.html.twig"));

        $__internal_f873b9d2eb633a0faf9226257299a59fcd55b664287d799046c5b56737cdcd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f873b9d2eb633a0faf9226257299a59fcd55b664287d799046c5b56737cdcd51->enter($__internal_f873b9d2eb633a0faf9226257299a59fcd55b664287d799046c5b56737cdcd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:index.html.twig"));

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
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
</body>
</html>";
        
        $__internal_8f7342b7baf7494f1af517d0c6287a1484ab76c07858d80f3d231213595bcb55->leave($__internal_8f7342b7baf7494f1af517d0c6287a1484ab76c07858d80f3d231213595bcb55_prof);

        
        $__internal_f873b9d2eb633a0faf9226257299a59fcd55b664287d799046c5b56737cdcd51->leave($__internal_f873b9d2eb633a0faf9226257299a59fcd55b664287d799046c5b56737cdcd51_prof);

    }

    public function getTemplateName()
    {
        return "SBPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SB/PlatformBundle/Resources/views/Advert/index.html.twig #}

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
</body>
</html>", "SBPlatformBundle:Advert:index.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
