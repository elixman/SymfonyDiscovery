<?php

/* SBPlatformBundle::layout.html.twig */
class __TwigTemplate_bb8c4acd648d19ec74a62b98025bac264f57f8b1253868af66e509e05a37ac50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "SBPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sbplatform_body' => array($this, 'block_sbplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e9532bd1621ffe91cca36a85639caf9217d19d30ba0a15f02f91c227e2bc546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9532bd1621ffe91cca36a85639caf9217d19d30ba0a15f02f91c227e2bc546->enter($__internal_2e9532bd1621ffe91cca36a85639caf9217d19d30ba0a15f02f91c227e2bc546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle::layout.html.twig"));

        $__internal_062a86fd4a7f467dd5b8d45c3ff640f34a8b087600e55869f7a4edc6552bf66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062a86fd4a7f467dd5b8d45c3ff640f34a8b087600e55869f7a4edc6552bf66c->enter($__internal_062a86fd4a7f467dd5b8d45c3ff640f34a8b087600e55869f7a4edc6552bf66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9532bd1621ffe91cca36a85639caf9217d19d30ba0a15f02f91c227e2bc546->leave($__internal_2e9532bd1621ffe91cca36a85639caf9217d19d30ba0a15f02f91c227e2bc546_prof);

        
        $__internal_062a86fd4a7f467dd5b8d45c3ff640f34a8b087600e55869f7a4edc6552bf66c->leave($__internal_062a86fd4a7f467dd5b8d45c3ff640f34a8b087600e55869f7a4edc6552bf66c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d278b594406487636e5d604a8c15201d26f816d12d88bc04717fac7ee2a7bc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d278b594406487636e5d604a8c15201d26f816d12d88bc04717fac7ee2a7bc8f->enter($__internal_d278b594406487636e5d604a8c15201d26f816d12d88bc04717fac7ee2a7bc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcd0b4256838151a7b69513e6f9b11ada73a4bdda6c8841a034da2a1dbe1b7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd0b4256838151a7b69513e6f9b11ada73a4bdda6c8841a034da2a1dbe1b7c9->enter($__internal_bcd0b4256838151a7b69513e6f9b11ada73a4bdda6c8841a034da2a1dbe1b7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bcd0b4256838151a7b69513e6f9b11ada73a4bdda6c8841a034da2a1dbe1b7c9->leave($__internal_bcd0b4256838151a7b69513e6f9b11ada73a4bdda6c8841a034da2a1dbe1b7c9_prof);

        
        $__internal_d278b594406487636e5d604a8c15201d26f816d12d88bc04717fac7ee2a7bc8f->leave($__internal_d278b594406487636e5d604a8c15201d26f816d12d88bc04717fac7ee2a7bc8f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e752ead98fb35a775471d47ac6d0a121c047ca931adf1c2e163af2b7a2c1a6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e752ead98fb35a775471d47ac6d0a121c047ca931adf1c2e163af2b7a2c1a6d4->enter($__internal_e752ead98fb35a775471d47ac6d0a121c047ca931adf1c2e163af2b7a2c1a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd773542995cc3cce25d5ac68e62bfa2f43a639b313963a51691843dad71a4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd773542995cc3cce25d5ac68e62bfa2f43a639b313963a51691843dad71a4a7->enter($__internal_cd773542995cc3cce25d5ac68e62bfa2f43a639b313963a51691843dad71a4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('sbplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_cd773542995cc3cce25d5ac68e62bfa2f43a639b313963a51691843dad71a4a7->leave($__internal_cd773542995cc3cce25d5ac68e62bfa2f43a639b313963a51691843dad71a4a7_prof);

        
        $__internal_e752ead98fb35a775471d47ac6d0a121c047ca931adf1c2e163af2b7a2c1a6d4->leave($__internal_e752ead98fb35a775471d47ac6d0a121c047ca931adf1c2e163af2b7a2c1a6d4_prof);

    }

    // line 17
    public function block_sbplatform_body($context, array $blocks = array())
    {
        $__internal_698f462cb98d091f667ba08faeb94c57889f6e68b13efe5ebc97fe8bc6f7b6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698f462cb98d091f667ba08faeb94c57889f6e68b13efe5ebc97fe8bc6f7b6fd->enter($__internal_698f462cb98d091f667ba08faeb94c57889f6e68b13efe5ebc97fe8bc6f7b6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        $__internal_14270f62594928d99f2eb26017f2172fc7ef322b99f289824b028ef529f0325d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14270f62594928d99f2eb26017f2172fc7ef322b99f289824b028ef529f0325d->enter($__internal_14270f62594928d99f2eb26017f2172fc7ef322b99f289824b028ef529f0325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_14270f62594928d99f2eb26017f2172fc7ef322b99f289824b028ef529f0325d->leave($__internal_14270f62594928d99f2eb26017f2172fc7ef322b99f289824b028ef529f0325d_prof);

        
        $__internal_698f462cb98d091f667ba08faeb94c57889f6e68b13efe5ebc97fe8bc6f7b6fd->leave($__internal_698f462cb98d091f667ba08faeb94c57889f6e68b13efe5ebc97fe8bc6f7b6fd_prof);

    }

    public function getTemplateName()
    {
        return "SBPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/SB/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block sbplatform_body %}
    {% endblock %}

{% endblock %}", "SBPlatformBundle::layout.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/layout.html.twig");
    }
}
