<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_a60684b92b25a00043d8990eacfa3c6f9e4e7adfe74a5443d057347d7129b7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60684b92b25a00043d8990eacfa3c6f9e4e7adfe74a5443d057347d7129b7a2->enter($__internal_a60684b92b25a00043d8990eacfa3c6f9e4e7adfe74a5443d057347d7129b7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c8fcf773c9d41a02bae3130d8d1bd62d85510e359ceb81475eed1504bd3ef5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fcf773c9d41a02bae3130d8d1bd62d85510e359ceb81475eed1504bd3ef5e1->enter($__internal_c8fcf773c9d41a02bae3130d8d1bd62d85510e359ceb81475eed1504bd3ef5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a60684b92b25a00043d8990eacfa3c6f9e4e7adfe74a5443d057347d7129b7a2->leave($__internal_a60684b92b25a00043d8990eacfa3c6f9e4e7adfe74a5443d057347d7129b7a2_prof);

        
        $__internal_c8fcf773c9d41a02bae3130d8d1bd62d85510e359ceb81475eed1504bd3ef5e1->leave($__internal_c8fcf773c9d41a02bae3130d8d1bd62d85510e359ceb81475eed1504bd3ef5e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
