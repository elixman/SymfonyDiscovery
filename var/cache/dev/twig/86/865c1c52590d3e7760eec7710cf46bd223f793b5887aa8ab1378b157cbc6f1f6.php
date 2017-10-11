<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_921bd6cec73d28edebcb75869e8a0be5372b5c906c0ecd793891c6005334fa14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921bd6cec73d28edebcb75869e8a0be5372b5c906c0ecd793891c6005334fa14->enter($__internal_921bd6cec73d28edebcb75869e8a0be5372b5c906c0ecd793891c6005334fa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bef90346e8c92c835ebb6401b4675d0a8e405f76e72c3ebf2284837eb7fa60d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef90346e8c92c835ebb6401b4675d0a8e405f76e72c3ebf2284837eb7fa60d0->enter($__internal_bef90346e8c92c835ebb6401b4675d0a8e405f76e72c3ebf2284837eb7fa60d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921bd6cec73d28edebcb75869e8a0be5372b5c906c0ecd793891c6005334fa14->leave($__internal_921bd6cec73d28edebcb75869e8a0be5372b5c906c0ecd793891c6005334fa14_prof);

        
        $__internal_bef90346e8c92c835ebb6401b4675d0a8e405f76e72c3ebf2284837eb7fa60d0->leave($__internal_bef90346e8c92c835ebb6401b4675d0a8e405f76e72c3ebf2284837eb7fa60d0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e935d0a425137adeb6ea162f67e016c6bee45baa9cc6c1baf2892a041d0440ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e935d0a425137adeb6ea162f67e016c6bee45baa9cc6c1baf2892a041d0440ae->enter($__internal_e935d0a425137adeb6ea162f67e016c6bee45baa9cc6c1baf2892a041d0440ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bbb80931f258d0d785bc74f24bc010899e7fcd7ba2a21139cf58b011571bfc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb80931f258d0d785bc74f24bc010899e7fcd7ba2a21139cf58b011571bfc07->enter($__internal_bbb80931f258d0d785bc74f24bc010899e7fcd7ba2a21139cf58b011571bfc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbb80931f258d0d785bc74f24bc010899e7fcd7ba2a21139cf58b011571bfc07->leave($__internal_bbb80931f258d0d785bc74f24bc010899e7fcd7ba2a21139cf58b011571bfc07_prof);

        
        $__internal_e935d0a425137adeb6ea162f67e016c6bee45baa9cc6c1baf2892a041d0440ae->leave($__internal_e935d0a425137adeb6ea162f67e016c6bee45baa9cc6c1baf2892a041d0440ae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40d66976eb85add8d7168b2d6656eeb68f66af30870de53f5e069ca21cef353e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d66976eb85add8d7168b2d6656eeb68f66af30870de53f5e069ca21cef353e->enter($__internal_40d66976eb85add8d7168b2d6656eeb68f66af30870de53f5e069ca21cef353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0087bbe4b993307ba7774cffa20cbda45a577c788db4a46bedf94703f93a3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0087bbe4b993307ba7774cffa20cbda45a577c788db4a46bedf94703f93a3bb->enter($__internal_e0087bbe4b993307ba7774cffa20cbda45a577c788db4a46bedf94703f93a3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0087bbe4b993307ba7774cffa20cbda45a577c788db4a46bedf94703f93a3bb->leave($__internal_e0087bbe4b993307ba7774cffa20cbda45a577c788db4a46bedf94703f93a3bb_prof);

        
        $__internal_40d66976eb85add8d7168b2d6656eeb68f66af30870de53f5e069ca21cef353e->leave($__internal_40d66976eb85add8d7168b2d6656eeb68f66af30870de53f5e069ca21cef353e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c020119e5b23f29c6bb8b90fc34f13121418b67b43e13f49680c828674b66161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c020119e5b23f29c6bb8b90fc34f13121418b67b43e13f49680c828674b66161->enter($__internal_c020119e5b23f29c6bb8b90fc34f13121418b67b43e13f49680c828674b66161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83b73e0cf14904053437ee8e6c948c343bd74cdd6e3abfb646d70c9ad12aa3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b73e0cf14904053437ee8e6c948c343bd74cdd6e3abfb646d70c9ad12aa3b0->enter($__internal_83b73e0cf14904053437ee8e6c948c343bd74cdd6e3abfb646d70c9ad12aa3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83b73e0cf14904053437ee8e6c948c343bd74cdd6e3abfb646d70c9ad12aa3b0->leave($__internal_83b73e0cf14904053437ee8e6c948c343bd74cdd6e3abfb646d70c9ad12aa3b0_prof);

        
        $__internal_c020119e5b23f29c6bb8b90fc34f13121418b67b43e13f49680c828674b66161->leave($__internal_c020119e5b23f29c6bb8b90fc34f13121418b67b43e13f49680c828674b66161_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
