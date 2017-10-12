<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20dfdc0d5d774875b0b664c9f749df8d96013f30da90b7420c676d4c54956663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20dfdc0d5d774875b0b664c9f749df8d96013f30da90b7420c676d4c54956663->enter($__internal_20dfdc0d5d774875b0b664c9f749df8d96013f30da90b7420c676d4c54956663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ffa92daa7b8211c49fd487294518ff50a6304e8994607c03d01b00e3856f65e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa92daa7b8211c49fd487294518ff50a6304e8994607c03d01b00e3856f65e7->enter($__internal_ffa92daa7b8211c49fd487294518ff50a6304e8994607c03d01b00e3856f65e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20dfdc0d5d774875b0b664c9f749df8d96013f30da90b7420c676d4c54956663->leave($__internal_20dfdc0d5d774875b0b664c9f749df8d96013f30da90b7420c676d4c54956663_prof);

        
        $__internal_ffa92daa7b8211c49fd487294518ff50a6304e8994607c03d01b00e3856f65e7->leave($__internal_ffa92daa7b8211c49fd487294518ff50a6304e8994607c03d01b00e3856f65e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9171f4d82de141d855b656f38991a202cbdcebe7e75d79d87fd41dec2b6fc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9171f4d82de141d855b656f38991a202cbdcebe7e75d79d87fd41dec2b6fc85->enter($__internal_d9171f4d82de141d855b656f38991a202cbdcebe7e75d79d87fd41dec2b6fc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f599506a6e8b069af24616346514466f550d2adbe798a4ba6df47f187959adbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f599506a6e8b069af24616346514466f550d2adbe798a4ba6df47f187959adbe->enter($__internal_f599506a6e8b069af24616346514466f550d2adbe798a4ba6df47f187959adbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f599506a6e8b069af24616346514466f550d2adbe798a4ba6df47f187959adbe->leave($__internal_f599506a6e8b069af24616346514466f550d2adbe798a4ba6df47f187959adbe_prof);

        
        $__internal_d9171f4d82de141d855b656f38991a202cbdcebe7e75d79d87fd41dec2b6fc85->leave($__internal_d9171f4d82de141d855b656f38991a202cbdcebe7e75d79d87fd41dec2b6fc85_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9fde7c0bd0edf12dd6bdab67df475503ac6e20b81341aec669d326fa65553134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fde7c0bd0edf12dd6bdab67df475503ac6e20b81341aec669d326fa65553134->enter($__internal_9fde7c0bd0edf12dd6bdab67df475503ac6e20b81341aec669d326fa65553134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96f1cd5b7c71214ea6a41de190df24e4f58c0fd96073065cbb7a8bdae0f270e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f1cd5b7c71214ea6a41de190df24e4f58c0fd96073065cbb7a8bdae0f270e5->enter($__internal_96f1cd5b7c71214ea6a41de190df24e4f58c0fd96073065cbb7a8bdae0f270e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96f1cd5b7c71214ea6a41de190df24e4f58c0fd96073065cbb7a8bdae0f270e5->leave($__internal_96f1cd5b7c71214ea6a41de190df24e4f58c0fd96073065cbb7a8bdae0f270e5_prof);

        
        $__internal_9fde7c0bd0edf12dd6bdab67df475503ac6e20b81341aec669d326fa65553134->leave($__internal_9fde7c0bd0edf12dd6bdab67df475503ac6e20b81341aec669d326fa65553134_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_957d2c4efb22ea0dcce9d2eefc9e5bcaa95abc4a0f7c36c7589677baee8d20a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957d2c4efb22ea0dcce9d2eefc9e5bcaa95abc4a0f7c36c7589677baee8d20a2->enter($__internal_957d2c4efb22ea0dcce9d2eefc9e5bcaa95abc4a0f7c36c7589677baee8d20a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e666ef02d0139d41f6182352963c92c391027d0e5587decea4c3b086d48870d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e666ef02d0139d41f6182352963c92c391027d0e5587decea4c3b086d48870d->enter($__internal_6e666ef02d0139d41f6182352963c92c391027d0e5587decea4c3b086d48870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6e666ef02d0139d41f6182352963c92c391027d0e5587decea4c3b086d48870d->leave($__internal_6e666ef02d0139d41f6182352963c92c391027d0e5587decea4c3b086d48870d_prof);

        
        $__internal_957d2c4efb22ea0dcce9d2eefc9e5bcaa95abc4a0f7c36c7589677baee8d20a2->leave($__internal_957d2c4efb22ea0dcce9d2eefc9e5bcaa95abc4a0f7c36c7589677baee8d20a2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
