<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_dd5223b95a56d6251ddba6b70dadbf3fe9d83d82959bbc926e80bf39924e447c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5223b95a56d6251ddba6b70dadbf3fe9d83d82959bbc926e80bf39924e447c->enter($__internal_dd5223b95a56d6251ddba6b70dadbf3fe9d83d82959bbc926e80bf39924e447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1a757d77e9e74aa9059148bd7a5e8a4d936feded56bb824636453e23e8665f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a757d77e9e74aa9059148bd7a5e8a4d936feded56bb824636453e23e8665f39->enter($__internal_1a757d77e9e74aa9059148bd7a5e8a4d936feded56bb824636453e23e8665f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5223b95a56d6251ddba6b70dadbf3fe9d83d82959bbc926e80bf39924e447c->leave($__internal_dd5223b95a56d6251ddba6b70dadbf3fe9d83d82959bbc926e80bf39924e447c_prof);

        
        $__internal_1a757d77e9e74aa9059148bd7a5e8a4d936feded56bb824636453e23e8665f39->leave($__internal_1a757d77e9e74aa9059148bd7a5e8a4d936feded56bb824636453e23e8665f39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8619f17a9626f785a367213feb5d000ae6e2e5afd74af8fb8ccdb5c6333cc7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8619f17a9626f785a367213feb5d000ae6e2e5afd74af8fb8ccdb5c6333cc7c->enter($__internal_f8619f17a9626f785a367213feb5d000ae6e2e5afd74af8fb8ccdb5c6333cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c192197937470a2e1ebb946ca3b294a89e71fc23fd93140880d71b05c1fa3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c192197937470a2e1ebb946ca3b294a89e71fc23fd93140880d71b05c1fa3b4->enter($__internal_7c192197937470a2e1ebb946ca3b294a89e71fc23fd93140880d71b05c1fa3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_7c192197937470a2e1ebb946ca3b294a89e71fc23fd93140880d71b05c1fa3b4->leave($__internal_7c192197937470a2e1ebb946ca3b294a89e71fc23fd93140880d71b05c1fa3b4_prof);

        
        $__internal_f8619f17a9626f785a367213feb5d000ae6e2e5afd74af8fb8ccdb5c6333cc7c->leave($__internal_f8619f17a9626f785a367213feb5d000ae6e2e5afd74af8fb8ccdb5c6333cc7c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d807395fbebfec5861c37caff7b13fd1ff70e54d5c426617d85ce16656940ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d807395fbebfec5861c37caff7b13fd1ff70e54d5c426617d85ce16656940ba9->enter($__internal_d807395fbebfec5861c37caff7b13fd1ff70e54d5c426617d85ce16656940ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a83e26292f15de3a803bf0df4ef83684b36dc34831ed0e2b4c69a25c55a632a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83e26292f15de3a803bf0df4ef83684b36dc34831ed0e2b4c69a25c55a632a9->enter($__internal_a83e26292f15de3a803bf0df4ef83684b36dc34831ed0e2b4c69a25c55a632a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a83e26292f15de3a803bf0df4ef83684b36dc34831ed0e2b4c69a25c55a632a9->leave($__internal_a83e26292f15de3a803bf0df4ef83684b36dc34831ed0e2b4c69a25c55a632a9_prof);

        
        $__internal_d807395fbebfec5861c37caff7b13fd1ff70e54d5c426617d85ce16656940ba9->leave($__internal_d807395fbebfec5861c37caff7b13fd1ff70e54d5c426617d85ce16656940ba9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b50a4fc5e3759df23e62a6117528238aae66ab06210ba18e56eaee79bc0d093b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50a4fc5e3759df23e62a6117528238aae66ab06210ba18e56eaee79bc0d093b->enter($__internal_b50a4fc5e3759df23e62a6117528238aae66ab06210ba18e56eaee79bc0d093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff6e4e20e26337e690dc91170066d08c13c3774ace0c101dbbada65af48b665f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6e4e20e26337e690dc91170066d08c13c3774ace0c101dbbada65af48b665f->enter($__internal_ff6e4e20e26337e690dc91170066d08c13c3774ace0c101dbbada65af48b665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ff6e4e20e26337e690dc91170066d08c13c3774ace0c101dbbada65af48b665f->leave($__internal_ff6e4e20e26337e690dc91170066d08c13c3774ace0c101dbbada65af48b665f_prof);

        
        $__internal_b50a4fc5e3759df23e62a6117528238aae66ab06210ba18e56eaee79bc0d093b->leave($__internal_b50a4fc5e3759df23e62a6117528238aae66ab06210ba18e56eaee79bc0d093b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
