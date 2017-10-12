<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_28c24bc10e6709ed918184f9bcb86ad16547110ac4a2dbc1b644d6c12a79f08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c24bc10e6709ed918184f9bcb86ad16547110ac4a2dbc1b644d6c12a79f08c->enter($__internal_28c24bc10e6709ed918184f9bcb86ad16547110ac4a2dbc1b644d6c12a79f08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2d89297ed77e88044ddf5e0cc43867ca4df423922ed56799024bd7f1915da447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d89297ed77e88044ddf5e0cc43867ca4df423922ed56799024bd7f1915da447->enter($__internal_2d89297ed77e88044ddf5e0cc43867ca4df423922ed56799024bd7f1915da447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_28c24bc10e6709ed918184f9bcb86ad16547110ac4a2dbc1b644d6c12a79f08c->leave($__internal_28c24bc10e6709ed918184f9bcb86ad16547110ac4a2dbc1b644d6c12a79f08c_prof);

        
        $__internal_2d89297ed77e88044ddf5e0cc43867ca4df423922ed56799024bd7f1915da447->leave($__internal_2d89297ed77e88044ddf5e0cc43867ca4df423922ed56799024bd7f1915da447_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
