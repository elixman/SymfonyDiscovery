<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1e6aaf77aebfe4058cd961cb942d68cc7bc7dac5f169b4a5b0e811f401faf3ee extends Twig_Template
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
        $__internal_f13418487f4775b2138ed4f35837b1100af3b7357067700c92a584dc51cc5e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13418487f4775b2138ed4f35837b1100af3b7357067700c92a584dc51cc5e4c->enter($__internal_f13418487f4775b2138ed4f35837b1100af3b7357067700c92a584dc51cc5e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ad432d49d51f25cf5835a2578f955fc4f8f4e5e17fb02ebd28e865169525b997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad432d49d51f25cf5835a2578f955fc4f8f4e5e17fb02ebd28e865169525b997->enter($__internal_ad432d49d51f25cf5835a2578f955fc4f8f4e5e17fb02ebd28e865169525b997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f13418487f4775b2138ed4f35837b1100af3b7357067700c92a584dc51cc5e4c->leave($__internal_f13418487f4775b2138ed4f35837b1100af3b7357067700c92a584dc51cc5e4c_prof);

        
        $__internal_ad432d49d51f25cf5835a2578f955fc4f8f4e5e17fb02ebd28e865169525b997->leave($__internal_ad432d49d51f25cf5835a2578f955fc4f8f4e5e17fb02ebd28e865169525b997_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
