<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6449b6a77a385acbd9912463b1d8e928c8eb5e616f0a8ddc312e41ebe046423b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6449b6a77a385acbd9912463b1d8e928c8eb5e616f0a8ddc312e41ebe046423b->enter($__internal_6449b6a77a385acbd9912463b1d8e928c8eb5e616f0a8ddc312e41ebe046423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6410d4a72c718689b348ae7f4d8b09ae785ecf7a1509001bd2e6ab62fa23a921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6410d4a72c718689b348ae7f4d8b09ae785ecf7a1509001bd2e6ab62fa23a921->enter($__internal_6410d4a72c718689b348ae7f4d8b09ae785ecf7a1509001bd2e6ab62fa23a921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6449b6a77a385acbd9912463b1d8e928c8eb5e616f0a8ddc312e41ebe046423b->leave($__internal_6449b6a77a385acbd9912463b1d8e928c8eb5e616f0a8ddc312e41ebe046423b_prof);

        
        $__internal_6410d4a72c718689b348ae7f4d8b09ae785ecf7a1509001bd2e6ab62fa23a921->leave($__internal_6410d4a72c718689b348ae7f4d8b09ae785ecf7a1509001bd2e6ab62fa23a921_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7e71d2318131b633f219ec50927d6b859c7172929dc64e2b5fad71d3401f186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e71d2318131b633f219ec50927d6b859c7172929dc64e2b5fad71d3401f186->enter($__internal_a7e71d2318131b633f219ec50927d6b859c7172929dc64e2b5fad71d3401f186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c48512a34e082627cc967dd0bf166a9ceab7b9be7febfdd5403f5eca9566b878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48512a34e082627cc967dd0bf166a9ceab7b9be7febfdd5403f5eca9566b878->enter($__internal_c48512a34e082627cc967dd0bf166a9ceab7b9be7febfdd5403f5eca9566b878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c48512a34e082627cc967dd0bf166a9ceab7b9be7febfdd5403f5eca9566b878->leave($__internal_c48512a34e082627cc967dd0bf166a9ceab7b9be7febfdd5403f5eca9566b878_prof);

        
        $__internal_a7e71d2318131b633f219ec50927d6b859c7172929dc64e2b5fad71d3401f186->leave($__internal_a7e71d2318131b633f219ec50927d6b859c7172929dc64e2b5fad71d3401f186_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_172beef4a4fa8872a6099eecbf65e42f0d27092dfc1307c86c7cf0d0db56fc69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172beef4a4fa8872a6099eecbf65e42f0d27092dfc1307c86c7cf0d0db56fc69->enter($__internal_172beef4a4fa8872a6099eecbf65e42f0d27092dfc1307c86c7cf0d0db56fc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8763c4c9ee68b6d39f6006fbbf6894df7c57c68c8fe6c0f23f50468f548e5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8763c4c9ee68b6d39f6006fbbf6894df7c57c68c8fe6c0f23f50468f548e5a9->enter($__internal_b8763c4c9ee68b6d39f6006fbbf6894df7c57c68c8fe6c0f23f50468f548e5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b8763c4c9ee68b6d39f6006fbbf6894df7c57c68c8fe6c0f23f50468f548e5a9->leave($__internal_b8763c4c9ee68b6d39f6006fbbf6894df7c57c68c8fe6c0f23f50468f548e5a9_prof);

        
        $__internal_172beef4a4fa8872a6099eecbf65e42f0d27092dfc1307c86c7cf0d0db56fc69->leave($__internal_172beef4a4fa8872a6099eecbf65e42f0d27092dfc1307c86c7cf0d0db56fc69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
