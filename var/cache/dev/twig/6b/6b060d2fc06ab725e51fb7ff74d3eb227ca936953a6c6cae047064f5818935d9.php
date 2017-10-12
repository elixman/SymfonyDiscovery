<?php

/* SBPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_4da9ac905724de1c509e1c12f988546daec431989e52fa37740850cf98408521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SBPlatformBundle::layout.html.twig", "SBPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SBPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfac2b8235791d0ebb2c0cfe0365a9b6d66cf129d7a952fecf9bafa66a200c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfac2b8235791d0ebb2c0cfe0365a9b6d66cf129d7a952fecf9bafa66a200c18->enter($__internal_bfac2b8235791d0ebb2c0cfe0365a9b6d66cf129d7a952fecf9bafa66a200c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:add.html.twig"));

        $__internal_e43b9d28c1f725b27c3630334483c186c15db65f29d82633254c6b6809c9e731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43b9d28c1f725b27c3630334483c186c15db65f29d82633254c6b6809c9e731->enter($__internal_e43b9d28c1f725b27c3630334483c186c15db65f29d82633254c6b6809c9e731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfac2b8235791d0ebb2c0cfe0365a9b6d66cf129d7a952fecf9bafa66a200c18->leave($__internal_bfac2b8235791d0ebb2c0cfe0365a9b6d66cf129d7a952fecf9bafa66a200c18_prof);

        
        $__internal_e43b9d28c1f725b27c3630334483c186c15db65f29d82633254c6b6809c9e731->leave($__internal_e43b9d28c1f725b27c3630334483c186c15db65f29d82633254c6b6809c9e731_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88ff8758a78f241c6c0fa4d927d26271d3ef9b07d870131ffbf1517dc8123da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ff8758a78f241c6c0fa4d927d26271d3ef9b07d870131ffbf1517dc8123da1->enter($__internal_88ff8758a78f241c6c0fa4d927d26271d3ef9b07d870131ffbf1517dc8123da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de11e1401eadab41f8c5955548afd65fbb37749527690c54eef4cbd1d145619b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de11e1401eadab41f8c5955548afd65fbb37749527690c54eef4cbd1d145619b->enter($__internal_de11e1401eadab41f8c5955548afd65fbb37749527690c54eef4cbd1d145619b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "SBPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_de11e1401eadab41f8c5955548afd65fbb37749527690c54eef4cbd1d145619b->leave($__internal_de11e1401eadab41f8c5955548afd65fbb37749527690c54eef4cbd1d145619b_prof);

        
        $__internal_88ff8758a78f241c6c0fa4d927d26271d3ef9b07d870131ffbf1517dc8123da1->leave($__internal_88ff8758a78f241c6c0fa4d927d26271d3ef9b07d870131ffbf1517dc8123da1_prof);

    }

    public function getTemplateName()
    {
        return "SBPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"SBPlatformBundle::layout.html.twig\" %}

{% block body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"SBPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "SBPlatformBundle:Advert:add.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
