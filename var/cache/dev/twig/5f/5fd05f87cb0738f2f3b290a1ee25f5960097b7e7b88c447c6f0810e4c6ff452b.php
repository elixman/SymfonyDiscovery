<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_eca285dc6a3f23d3bb6f70f98d4df29bf124fa189f33408a0ae611a8fb32bca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca285dc6a3f23d3bb6f70f98d4df29bf124fa189f33408a0ae611a8fb32bca2->enter($__internal_eca285dc6a3f23d3bb6f70f98d4df29bf124fa189f33408a0ae611a8fb32bca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_30558b2fcae1ec802f0f16b5eb22fa0586bd7e6a9bba5279242c08e1f2639173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30558b2fcae1ec802f0f16b5eb22fa0586bd7e6a9bba5279242c08e1f2639173->enter($__internal_30558b2fcae1ec802f0f16b5eb22fa0586bd7e6a9bba5279242c08e1f2639173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_eca285dc6a3f23d3bb6f70f98d4df29bf124fa189f33408a0ae611a8fb32bca2->leave($__internal_eca285dc6a3f23d3bb6f70f98d4df29bf124fa189f33408a0ae611a8fb32bca2_prof);

        
        $__internal_30558b2fcae1ec802f0f16b5eb22fa0586bd7e6a9bba5279242c08e1f2639173->leave($__internal_30558b2fcae1ec802f0f16b5eb22fa0586bd7e6a9bba5279242c08e1f2639173_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
