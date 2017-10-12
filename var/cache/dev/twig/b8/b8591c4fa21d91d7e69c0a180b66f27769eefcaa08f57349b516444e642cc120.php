<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
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
        $__internal_cd7bf54177fcda6c989d6a0c321c9cfed0295570860eb0cb2cb06cda605c1398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7bf54177fcda6c989d6a0c321c9cfed0295570860eb0cb2cb06cda605c1398->enter($__internal_cd7bf54177fcda6c989d6a0c321c9cfed0295570860eb0cb2cb06cda605c1398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_16281739217bc0c0e00fab7d6b85b3a305684a2c1fc9014628e7ac287b81dacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16281739217bc0c0e00fab7d6b85b3a305684a2c1fc9014628e7ac287b81dacd->enter($__internal_16281739217bc0c0e00fab7d6b85b3a305684a2c1fc9014628e7ac287b81dacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cd7bf54177fcda6c989d6a0c321c9cfed0295570860eb0cb2cb06cda605c1398->leave($__internal_cd7bf54177fcda6c989d6a0c321c9cfed0295570860eb0cb2cb06cda605c1398_prof);

        
        $__internal_16281739217bc0c0e00fab7d6b85b3a305684a2c1fc9014628e7ac287b81dacd->leave($__internal_16281739217bc0c0e00fab7d6b85b3a305684a2c1fc9014628e7ac287b81dacd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
