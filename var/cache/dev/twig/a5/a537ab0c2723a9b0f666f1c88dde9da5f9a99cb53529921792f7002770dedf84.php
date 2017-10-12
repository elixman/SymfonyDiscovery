<?php

/* SBPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_71519132e20f68c1bfd1272b4a80db6424585152ff7d77ec2547331c37feb8ff extends Twig_Template
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
        $__internal_e5bade7739be20abd21105b030353b6e31d9428e68919d374b1fd80527568575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5bade7739be20abd21105b030353b6e31d9428e68919d374b1fd80527568575->enter($__internal_e5bade7739be20abd21105b030353b6e31d9428e68919d374b1fd80527568575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:form.html.twig"));

        $__internal_cd1490162e5294d00d581801766fef0b07329a8a969554fda8bef92ba1a6dde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1490162e5294d00d581801766fef0b07329a8a969554fda8bef92ba1a6dde9->enter($__internal_cd1490162e5294d00d581801766fef0b07329a8a969554fda8bef92ba1a6dde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
    Ici se trouvera le formulaire.
</div>";
        
        $__internal_e5bade7739be20abd21105b030353b6e31d9428e68919d374b1fd80527568575->leave($__internal_e5bade7739be20abd21105b030353b6e31d9428e68919d374b1fd80527568575_prof);

        
        $__internal_cd1490162e5294d00d581801766fef0b07329a8a969554fda8bef92ba1a6dde9->leave($__internal_cd1490162e5294d00d581801766fef0b07329a8a969554fda8bef92ba1a6dde9_prof);

    }

    public function getTemplateName()
    {
        return "SBPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  28 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

{# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,
   elles, hériteront probablement du layout. Je dis « probablement » car,
   ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
    Ici se trouvera le formulaire.
</div>", "SBPlatformBundle:Advert:form.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
