<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2d050283c628d67ae8cbe714e7605fa88168633eb46be7c444490c466b2302ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d050283c628d67ae8cbe714e7605fa88168633eb46be7c444490c466b2302ee->enter($__internal_2d050283c628d67ae8cbe714e7605fa88168633eb46be7c444490c466b2302ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cdc14426db815e6d56af35f86c2e427a307e280dc030d436fcc798d05506ba61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc14426db815e6d56af35f86c2e427a307e280dc030d436fcc798d05506ba61->enter($__internal_cdc14426db815e6d56af35f86c2e427a307e280dc030d436fcc798d05506ba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d050283c628d67ae8cbe714e7605fa88168633eb46be7c444490c466b2302ee->leave($__internal_2d050283c628d67ae8cbe714e7605fa88168633eb46be7c444490c466b2302ee_prof);

        
        $__internal_cdc14426db815e6d56af35f86c2e427a307e280dc030d436fcc798d05506ba61->leave($__internal_cdc14426db815e6d56af35f86c2e427a307e280dc030d436fcc798d05506ba61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_579bdd48324ded4659f8f28a6a242efdd0c319b887598d9e43f91dd943b7b697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_579bdd48324ded4659f8f28a6a242efdd0c319b887598d9e43f91dd943b7b697->enter($__internal_579bdd48324ded4659f8f28a6a242efdd0c319b887598d9e43f91dd943b7b697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf4d01ff341b76e9c5fec26969bb13390321c5b0bb4d326640fed4a547a5a84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4d01ff341b76e9c5fec26969bb13390321c5b0bb4d326640fed4a547a5a84a->enter($__internal_cf4d01ff341b76e9c5fec26969bb13390321c5b0bb4d326640fed4a547a5a84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cf4d01ff341b76e9c5fec26969bb13390321c5b0bb4d326640fed4a547a5a84a->leave($__internal_cf4d01ff341b76e9c5fec26969bb13390321c5b0bb4d326640fed4a547a5a84a_prof);

        
        $__internal_579bdd48324ded4659f8f28a6a242efdd0c319b887598d9e43f91dd943b7b697->leave($__internal_579bdd48324ded4659f8f28a6a242efdd0c319b887598d9e43f91dd943b7b697_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb238c74c3fef956f91ea44ab278cf1a5f9c3ffdf228008372246ca37114f8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb238c74c3fef956f91ea44ab278cf1a5f9c3ffdf228008372246ca37114f8b0->enter($__internal_bb238c74c3fef956f91ea44ab278cf1a5f9c3ffdf228008372246ca37114f8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96ad201540a36a8c7c61a2e9722b42a6fa8e78f261124cc6f04ba3b956711e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ad201540a36a8c7c61a2e9722b42a6fa8e78f261124cc6f04ba3b956711e87->enter($__internal_96ad201540a36a8c7c61a2e9722b42a6fa8e78f261124cc6f04ba3b956711e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_96ad201540a36a8c7c61a2e9722b42a6fa8e78f261124cc6f04ba3b956711e87->leave($__internal_96ad201540a36a8c7c61a2e9722b42a6fa8e78f261124cc6f04ba3b956711e87_prof);

        
        $__internal_bb238c74c3fef956f91ea44ab278cf1a5f9c3ffdf228008372246ca37114f8b0->leave($__internal_bb238c74c3fef956f91ea44ab278cf1a5f9c3ffdf228008372246ca37114f8b0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_88e86885305498997ebc201f6a1d49c2256ffeba9128f616abd5d597849200de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e86885305498997ebc201f6a1d49c2256ffeba9128f616abd5d597849200de->enter($__internal_88e86885305498997ebc201f6a1d49c2256ffeba9128f616abd5d597849200de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_443305809c557bc0fd0e6e97bfcba1667ed1c029c2857829a49483ff340d6a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443305809c557bc0fd0e6e97bfcba1667ed1c029c2857829a49483ff340d6a38->enter($__internal_443305809c557bc0fd0e6e97bfcba1667ed1c029c2857829a49483ff340d6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_443305809c557bc0fd0e6e97bfcba1667ed1c029c2857829a49483ff340d6a38->leave($__internal_443305809c557bc0fd0e6e97bfcba1667ed1c029c2857829a49483ff340d6a38_prof);

        
        $__internal_88e86885305498997ebc201f6a1d49c2256ffeba9128f616abd5d597849200de->leave($__internal_88e86885305498997ebc201f6a1d49c2256ffeba9128f616abd5d597849200de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
