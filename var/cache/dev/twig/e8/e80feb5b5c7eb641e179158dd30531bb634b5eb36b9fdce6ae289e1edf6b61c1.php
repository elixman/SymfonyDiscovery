<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_8d00a791ea5bd6ca92b7da6ca7ca5dab84ba2cc0acc80db64f7c7765cd799721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d00a791ea5bd6ca92b7da6ca7ca5dab84ba2cc0acc80db64f7c7765cd799721->enter($__internal_8d00a791ea5bd6ca92b7da6ca7ca5dab84ba2cc0acc80db64f7c7765cd799721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dd0ed538c0040f8206c8d8e4f43a2db83e898898f8417e75324fc14685d54721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0ed538c0040f8206c8d8e4f43a2db83e898898f8417e75324fc14685d54721->enter($__internal_dd0ed538c0040f8206c8d8e4f43a2db83e898898f8417e75324fc14685d54721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8d00a791ea5bd6ca92b7da6ca7ca5dab84ba2cc0acc80db64f7c7765cd799721->leave($__internal_8d00a791ea5bd6ca92b7da6ca7ca5dab84ba2cc0acc80db64f7c7765cd799721_prof);

        
        $__internal_dd0ed538c0040f8206c8d8e4f43a2db83e898898f8417e75324fc14685d54721->leave($__internal_dd0ed538c0040f8206c8d8e4f43a2db83e898898f8417e75324fc14685d54721_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
