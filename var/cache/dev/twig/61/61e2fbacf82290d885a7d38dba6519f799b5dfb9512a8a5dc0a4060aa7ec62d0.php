<?php

/* SBPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_66486dd1974d7b92b37cbb6aa6f59de9cdac15d0a5a7852443ac52751dc963d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SBPlatformBundle::layout.html.twig", "SBPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sbplatform_body' => array($this, 'block_sbplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SBPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f66d8fc6dbb8b589936544663d41ec17cf44e27aea11480d01b3484f7b54d45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66d8fc6dbb8b589936544663d41ec17cf44e27aea11480d01b3484f7b54d45f->enter($__internal_f66d8fc6dbb8b589936544663d41ec17cf44e27aea11480d01b3484f7b54d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:edit.html.twig"));

        $__internal_1eea41ce96b4c337c2c38fec52133d6427808144c9740c01b7467021091a4d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eea41ce96b4c337c2c38fec52133d6427808144c9740c01b7467021091a4d1e->enter($__internal_1eea41ce96b4c337c2c38fec52133d6427808144c9740c01b7467021091a4d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f66d8fc6dbb8b589936544663d41ec17cf44e27aea11480d01b3484f7b54d45f->leave($__internal_f66d8fc6dbb8b589936544663d41ec17cf44e27aea11480d01b3484f7b54d45f_prof);

        
        $__internal_1eea41ce96b4c337c2c38fec52133d6427808144c9740c01b7467021091a4d1e->leave($__internal_1eea41ce96b4c337c2c38fec52133d6427808144c9740c01b7467021091a4d1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27f055bd871c89e5dba71bf22359a426d4917d116a16aa13d0c832a64b6b483d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f055bd871c89e5dba71bf22359a426d4917d116a16aa13d0c832a64b6b483d->enter($__internal_27f055bd871c89e5dba71bf22359a426d4917d116a16aa13d0c832a64b6b483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4f28965f06bc280d7604f33edce730f5d517005f0ca6dc535d837a1d572a919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f28965f06bc280d7604f33edce730f5d517005f0ca6dc535d837a1d572a919->enter($__internal_f4f28965f06bc280d7604f33edce730f5d517005f0ca6dc535d837a1d572a919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f4f28965f06bc280d7604f33edce730f5d517005f0ca6dc535d837a1d572a919->leave($__internal_f4f28965f06bc280d7604f33edce730f5d517005f0ca6dc535d837a1d572a919_prof);

        
        $__internal_27f055bd871c89e5dba71bf22359a426d4917d116a16aa13d0c832a64b6b483d->leave($__internal_27f055bd871c89e5dba71bf22359a426d4917d116a16aa13d0c832a64b6b483d_prof);

    }

    // line 9
    public function block_sbplatform_body($context, array $blocks = array())
    {
        $__internal_bebfd38aa8186cdd327364fce8e9cfa7cb8329eb399c3894a175cde9bdc59983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebfd38aa8186cdd327364fce8e9cfa7cb8329eb399c3894a175cde9bdc59983->enter($__internal_bebfd38aa8186cdd327364fce8e9cfa7cb8329eb399c3894a175cde9bdc59983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        $__internal_ab6f5c1aa88bdbcfffd4f65a022e89214e57dd15fea955edafab07d288659232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6f5c1aa88bdbcfffd4f65a022e89214e57dd15fea955edafab07d288659232->enter($__internal_ab6f5c1aa88bdbcfffd4f65a022e89214e57dd15fea955edafab07d288659232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        // line 10
        echo "
    <h2>Modifier une annonce</h2>

    ";
        // line 13
        echo twig_include($this->env, $context, "SBPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

";
        
        $__internal_ab6f5c1aa88bdbcfffd4f65a022e89214e57dd15fea955edafab07d288659232->leave($__internal_ab6f5c1aa88bdbcfffd4f65a022e89214e57dd15fea955edafab07d288659232_prof);

        
        $__internal_bebfd38aa8186cdd327364fce8e9cfa7cb8329eb399c3894a175cde9bdc59983->leave($__internal_bebfd38aa8186cdd327364fce8e9cfa7cb8329eb399c3894a175cde9bdc59983_prof);

    }

    public function getTemplateName()
    {
        return "SBPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SB/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"SBPlatformBundle::layout.html.twig\" %}

{% block title %}
    Modifier une annonce - {{ parent() }}
{% endblock %}

{% block sbplatform_body %}

    <h2>Modifier une annonce</h2>

    {{ include(\"SBPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Vous éditez une annonce déjà existante, merci de ne pas changer
        l'esprit général de l'annonce déjà publiée.
    </p>

    <p>
        <a href=\"{{ path('sb_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>

{% endblock %}", "SBPlatformBundle:Advert:edit.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
