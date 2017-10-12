<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f185c892a079f3a61343d18a554bfadbfe3d22f863210100b14f902f1b470c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f185c892a079f3a61343d18a554bfadbfe3d22f863210100b14f902f1b470c16->enter($__internal_f185c892a079f3a61343d18a554bfadbfe3d22f863210100b14f902f1b470c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e05c53150984048c12b6cee6e286aab85df1f35412bd682336ee84d38d4b2fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05c53150984048c12b6cee6e286aab85df1f35412bd682336ee84d38d4b2fe4->enter($__internal_e05c53150984048c12b6cee6e286aab85df1f35412bd682336ee84d38d4b2fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f185c892a079f3a61343d18a554bfadbfe3d22f863210100b14f902f1b470c16->leave($__internal_f185c892a079f3a61343d18a554bfadbfe3d22f863210100b14f902f1b470c16_prof);

        
        $__internal_e05c53150984048c12b6cee6e286aab85df1f35412bd682336ee84d38d4b2fe4->leave($__internal_e05c53150984048c12b6cee6e286aab85df1f35412bd682336ee84d38d4b2fe4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da84924e0896e7232a3abf718955c60e4e001fa4fddfe17d6f42975930f22148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da84924e0896e7232a3abf718955c60e4e001fa4fddfe17d6f42975930f22148->enter($__internal_da84924e0896e7232a3abf718955c60e4e001fa4fddfe17d6f42975930f22148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33f985d04aea023e4d9ae34b37e7a3d5822f7a6bf47e23820c745dcdd178b4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f985d04aea023e4d9ae34b37e7a3d5822f7a6bf47e23820c745dcdd178b4c1->enter($__internal_33f985d04aea023e4d9ae34b37e7a3d5822f7a6bf47e23820c745dcdd178b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_33f985d04aea023e4d9ae34b37e7a3d5822f7a6bf47e23820c745dcdd178b4c1->leave($__internal_33f985d04aea023e4d9ae34b37e7a3d5822f7a6bf47e23820c745dcdd178b4c1_prof);

        
        $__internal_da84924e0896e7232a3abf718955c60e4e001fa4fddfe17d6f42975930f22148->leave($__internal_da84924e0896e7232a3abf718955c60e4e001fa4fddfe17d6f42975930f22148_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
