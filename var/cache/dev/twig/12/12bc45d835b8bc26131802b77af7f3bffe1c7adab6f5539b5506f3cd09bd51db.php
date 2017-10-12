<?php

/* SBPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_42792460cbfd4c1e85aafd94dd198afc7a3bf220e44a5906629e347faf22a631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("SBPlatformBundle::layout.html.twig", "SBPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_0f825a9f5cc1679cf17b8b147d0ca1d4ee751bb686ea8fe1680c49f511d85b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f825a9f5cc1679cf17b8b147d0ca1d4ee751bb686ea8fe1680c49f511d85b3f->enter($__internal_0f825a9f5cc1679cf17b8b147d0ca1d4ee751bb686ea8fe1680c49f511d85b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:index.html.twig"));

        $__internal_36d7a26a519df3815fdaaf75d677eceb1fda7ea0ce274f180bee97e2c986dd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d7a26a519df3815fdaaf75d677eceb1fda7ea0ce274f180bee97e2c986dd48->enter($__internal_36d7a26a519df3815fdaaf75d677eceb1fda7ea0ce274f180bee97e2c986dd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SBPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f825a9f5cc1679cf17b8b147d0ca1d4ee751bb686ea8fe1680c49f511d85b3f->leave($__internal_0f825a9f5cc1679cf17b8b147d0ca1d4ee751bb686ea8fe1680c49f511d85b3f_prof);

        
        $__internal_36d7a26a519df3815fdaaf75d677eceb1fda7ea0ce274f180bee97e2c986dd48->leave($__internal_36d7a26a519df3815fdaaf75d677eceb1fda7ea0ce274f180bee97e2c986dd48_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe07f1432323a3bb15c837538d5d9e9ae0c494e6b388c3d8025d94df9e986797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe07f1432323a3bb15c837538d5d9e9ae0c494e6b388c3d8025d94df9e986797->enter($__internal_fe07f1432323a3bb15c837538d5d9e9ae0c494e6b388c3d8025d94df9e986797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_872ec6f598959e9d14a3835c019bfa06197a8072540b475e104136f50ee8500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872ec6f598959e9d14a3835c019bfa06197a8072540b475e104136f50ee8500f->enter($__internal_872ec6f598959e9d14a3835c019bfa06197a8072540b475e104136f50ee8500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_872ec6f598959e9d14a3835c019bfa06197a8072540b475e104136f50ee8500f->leave($__internal_872ec6f598959e9d14a3835c019bfa06197a8072540b475e104136f50ee8500f_prof);

        
        $__internal_fe07f1432323a3bb15c837538d5d9e9ae0c494e6b388c3d8025d94df9e986797->leave($__internal_fe07f1432323a3bb15c837538d5d9e9ae0c494e6b388c3d8025d94df9e986797_prof);

    }

    // line 9
    public function block_sbplatform_body($context, array $blocks = array())
    {
        $__internal_5711c51d51d049c0e085c15f9b4d467ac2acdaaa2b1ab40f04439f46b1914d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5711c51d51d049c0e085c15f9b4d467ac2acdaaa2b1ab40f04439f46b1914d56->enter($__internal_5711c51d51d049c0e085c15f9b4d467ac2acdaaa2b1ab40f04439f46b1914d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        $__internal_79050e61fc4878205313fd5b1cbe0d402c0ea3d7e480c05a42dcf93bb27f7bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79050e61fc4878205313fd5b1cbe0d402c0ea3d7e480c05a42dcf93bb27f7bfa->enter($__internal_79050e61fc4878205313fd5b1cbe0d402c0ea3d7e480c05a42dcf93bb27f7bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sbplatform_body"));

        // line 10
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_79050e61fc4878205313fd5b1cbe0d402c0ea3d7e480c05a42dcf93bb27f7bfa->leave($__internal_79050e61fc4878205313fd5b1cbe0d402c0ea3d7e480c05a42dcf93bb27f7bfa_prof);

        
        $__internal_5711c51d51d049c0e085c15f9b4d467ac2acdaaa2b1ab40f04439f46b1914d56->leave($__internal_5711c51d51d049c0e085c15f9b4d467ac2acdaaa2b1ab40f04439f46b1914d56_prof);

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
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

{% extends \"SBPlatformBundle::layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block sbplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('sb_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

{% endblock %}", "SBPlatformBundle:Advert:index.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/src/SB/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
