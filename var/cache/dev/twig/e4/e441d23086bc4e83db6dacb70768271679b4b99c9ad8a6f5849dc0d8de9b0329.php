<?php

/* SBPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_3096b56608cbdae39074ed8ff640023db3710306de9b59a95df4a2dcd609dfb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SBPlatformBundle::layout.html.twig", "SBPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_e7987112c789d2e90f3ad4d9a27c802ae0fdf67ac6c3446ecd9ffe2cf8168142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7987112c789d2e90f3ad4d9a27c802ae0fdf67ac6c3446ecd9ffe2cf8168142->enter($__internal_e7987112c789d2e90f3ad4d9a27c802ae0fdf67ac6c3446ecd9ffe2cf8168142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:view.html.twig"));

        $__internal_3be60c58f7943955ccf3611b77a219ac564ad70ff6941db1775015f23ab8c599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be60c58f7943955ccf3611b77a219ac564ad70ff6941db1775015f23ab8c599->enter($__internal_3be60c58f7943955ccf3611b77a219ac564ad70ff6941db1775015f23ab8c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7987112c789d2e90f3ad4d9a27c802ae0fdf67ac6c3446ecd9ffe2cf8168142->leave($__internal_e7987112c789d2e90f3ad4d9a27c802ae0fdf67ac6c3446ecd9ffe2cf8168142_prof);

        
        $__internal_3be60c58f7943955ccf3611b77a219ac564ad70ff6941db1775015f23ab8c599->leave($__internal_3be60c58f7943955ccf3611b77a219ac564ad70ff6941db1775015f23ab8c599_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a17e75744a48b20472460922d698dbc8c5b835e64d555d5debe0953c99f6cc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17e75744a48b20472460922d698dbc8c5b835e64d555d5debe0953c99f6cc47->enter($__internal_a17e75744a48b20472460922d698dbc8c5b835e64d555d5debe0953c99f6cc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a9a22164eb113647103a35f62bb3ecb3f0adf350f14c814a73dd14c449c83ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9a22164eb113647103a35f62bb3ecb3f0adf350f14c814a73dd14c449c83ea->enter($__internal_3a9a22164eb113647103a35f62bb3ecb3f0adf350f14c814a73dd14c449c83ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a9a22164eb113647103a35f62bb3ecb3f0adf350f14c814a73dd14c449c83ea->leave($__internal_3a9a22164eb113647103a35f62bb3ecb3f0adf350f14c814a73dd14c449c83ea_prof);

        
        $__internal_a17e75744a48b20472460922d698dbc8c5b835e64d555d5debe0953c99f6cc47->leave($__internal_a17e75744a48b20472460922d698dbc8c5b835e64d555d5debe0953c99f6cc47_prof);

    }

    // line 9
    public function block_sbplatform_body($context, array $blocks = array())
    {
        $__internal_f52b05810024f22b47947f3c5d7ff5b92993e37a9f02e85dbad0aeff103749db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52b05810024f22b47947f3c5d7ff5b92993e37a9f02e85dbad0aeff103749db->enter($__internal_f52b05810024f22b47947f3c5d7ff5b92993e37a9f02e85dbad0aeff103749db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        $__internal_83f8cd04f24bb429cda5d806c567432d4a109520947895cc18b0bd7107077471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f8cd04f24bb429cda5d806c567432d4a109520947895cc18b0bd7107077471->enter($__internal_83f8cd04f24bb429cda5d806c567432d4a109520947895cc18b0bd7107077471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_83f8cd04f24bb429cda5d806c567432d4a109520947895cc18b0bd7107077471->leave($__internal_83f8cd04f24bb429cda5d806c567432d4a109520947895cc18b0bd7107077471_prof);

        
        $__internal_f52b05810024f22b47947f3c5d7ff5b92993e37a9f02e85dbad0aeff103749db->leave($__internal_f52b05810024f22b47947f3c5d7ff5b92993e37a9f02e85dbad0aeff103749db_prof);

    }

    public function getTemplateName()
    {
        return "SBPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  101 => 23,  94 => 19,  87 => 15,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

{% extends \"SBPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block sbplatform_body %}

    <h2>{{ advert.title }}</h2>
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        {{ advert.content }}
    </div>

    <p>
        <a href=\"{{ path('sb_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('sb_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('sb_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

{% endblock %}
", "SBPlatformBundle:Advert:view.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
