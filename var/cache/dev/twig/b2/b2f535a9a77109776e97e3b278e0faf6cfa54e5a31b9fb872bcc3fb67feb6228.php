<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_aa4e046203d82a171b92ce211624f241cfb9255a0de7f5bd844d80448d086128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_890fafaee587170165c84b18377728d0ec1c39ff4a0cefcec4abdf4e00661b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890fafaee587170165c84b18377728d0ec1c39ff4a0cefcec4abdf4e00661b30->enter($__internal_890fafaee587170165c84b18377728d0ec1c39ff4a0cefcec4abdf4e00661b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_5a21acbf4bd6d4fb28db5d24b90c4ca7d6b2a39e58be0a025cea8653995d4915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a21acbf4bd6d4fb28db5d24b90c4ca7d6b2a39e58be0a025cea8653995d4915->enter($__internal_5a21acbf4bd6d4fb28db5d24b90c4ca7d6b2a39e58be0a025cea8653995d4915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_890fafaee587170165c84b18377728d0ec1c39ff4a0cefcec4abdf4e00661b30->leave($__internal_890fafaee587170165c84b18377728d0ec1c39ff4a0cefcec4abdf4e00661b30_prof);

        
        $__internal_5a21acbf4bd6d4fb28db5d24b90c4ca7d6b2a39e58be0a025cea8653995d4915->leave($__internal_5a21acbf4bd6d4fb28db5d24b90c4ca7d6b2a39e58be0a025cea8653995d4915_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
