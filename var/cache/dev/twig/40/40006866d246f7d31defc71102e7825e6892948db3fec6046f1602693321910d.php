<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3f5796225a734c39ce017c3c96a9f288f2cbb8b57399ed39119675a51b28910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f5796225a734c39ce017c3c96a9f288f2cbb8b57399ed39119675a51b28910->enter($__internal_f3f5796225a734c39ce017c3c96a9f288f2cbb8b57399ed39119675a51b28910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3404332a7405451e18fcc30bac07faa54e4b80b962d928d716f36eba8827f8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3404332a7405451e18fcc30bac07faa54e4b80b962d928d716f36eba8827f8a4->enter($__internal_3404332a7405451e18fcc30bac07faa54e4b80b962d928d716f36eba8827f8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f5796225a734c39ce017c3c96a9f288f2cbb8b57399ed39119675a51b28910->leave($__internal_f3f5796225a734c39ce017c3c96a9f288f2cbb8b57399ed39119675a51b28910_prof);

        
        $__internal_3404332a7405451e18fcc30bac07faa54e4b80b962d928d716f36eba8827f8a4->leave($__internal_3404332a7405451e18fcc30bac07faa54e4b80b962d928d716f36eba8827f8a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25f28fe9cd1d1bf03db5096118ca30fd8214e8f61758c6caaaeb331c8dbdcdef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f28fe9cd1d1bf03db5096118ca30fd8214e8f61758c6caaaeb331c8dbdcdef->enter($__internal_25f28fe9cd1d1bf03db5096118ca30fd8214e8f61758c6caaaeb331c8dbdcdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_033f1c290c36e6a2e7866358523e1e3e07dea1cc050dc217a6f479cc721b991e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033f1c290c36e6a2e7866358523e1e3e07dea1cc050dc217a6f479cc721b991e->enter($__internal_033f1c290c36e6a2e7866358523e1e3e07dea1cc050dc217a6f479cc721b991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_033f1c290c36e6a2e7866358523e1e3e07dea1cc050dc217a6f479cc721b991e->leave($__internal_033f1c290c36e6a2e7866358523e1e3e07dea1cc050dc217a6f479cc721b991e_prof);

        
        $__internal_25f28fe9cd1d1bf03db5096118ca30fd8214e8f61758c6caaaeb331c8dbdcdef->leave($__internal_25f28fe9cd1d1bf03db5096118ca30fd8214e8f61758c6caaaeb331c8dbdcdef_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bb5a47b698a95c95a7b61dddaaf417a16c7e86e82b376bff5229ee24b7769ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb5a47b698a95c95a7b61dddaaf417a16c7e86e82b376bff5229ee24b7769ec->enter($__internal_0bb5a47b698a95c95a7b61dddaaf417a16c7e86e82b376bff5229ee24b7769ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b6f7e4e7ad1e3f5ac69a00c5e3654b3578e4eee33a906ce3b012a211cb136b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6f7e4e7ad1e3f5ac69a00c5e3654b3578e4eee33a906ce3b012a211cb136b5->enter($__internal_6b6f7e4e7ad1e3f5ac69a00c5e3654b3578e4eee33a906ce3b012a211cb136b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6b6f7e4e7ad1e3f5ac69a00c5e3654b3578e4eee33a906ce3b012a211cb136b5->leave($__internal_6b6f7e4e7ad1e3f5ac69a00c5e3654b3578e4eee33a906ce3b012a211cb136b5_prof);

        
        $__internal_0bb5a47b698a95c95a7b61dddaaf417a16c7e86e82b376bff5229ee24b7769ec->leave($__internal_0bb5a47b698a95c95a7b61dddaaf417a16c7e86e82b376bff5229ee24b7769ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
