<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84600a484ba483f1dabaa6e3125512004905a37ebdbd194c0c02930b15efdf5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84600a484ba483f1dabaa6e3125512004905a37ebdbd194c0c02930b15efdf5d->enter($__internal_84600a484ba483f1dabaa6e3125512004905a37ebdbd194c0c02930b15efdf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_10d9ebd0b13fc4b6bde0ffe8eabf487cf09c858097ca8ca52fbf3616a659cc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d9ebd0b13fc4b6bde0ffe8eabf487cf09c858097ca8ca52fbf3616a659cc58->enter($__internal_10d9ebd0b13fc4b6bde0ffe8eabf487cf09c858097ca8ca52fbf3616a659cc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84600a484ba483f1dabaa6e3125512004905a37ebdbd194c0c02930b15efdf5d->leave($__internal_84600a484ba483f1dabaa6e3125512004905a37ebdbd194c0c02930b15efdf5d_prof);

        
        $__internal_10d9ebd0b13fc4b6bde0ffe8eabf487cf09c858097ca8ca52fbf3616a659cc58->leave($__internal_10d9ebd0b13fc4b6bde0ffe8eabf487cf09c858097ca8ca52fbf3616a659cc58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d16186ba322194045e25004f978d9a2d2fd37f79f1da02cc9b23f5c9e162a697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16186ba322194045e25004f978d9a2d2fd37f79f1da02cc9b23f5c9e162a697->enter($__internal_d16186ba322194045e25004f978d9a2d2fd37f79f1da02cc9b23f5c9e162a697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_976b9be6d2c210928594fdca46e063e2928f37142e6bbd6d9aa75fb0215f5d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976b9be6d2c210928594fdca46e063e2928f37142e6bbd6d9aa75fb0215f5d9e->enter($__internal_976b9be6d2c210928594fdca46e063e2928f37142e6bbd6d9aa75fb0215f5d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_976b9be6d2c210928594fdca46e063e2928f37142e6bbd6d9aa75fb0215f5d9e->leave($__internal_976b9be6d2c210928594fdca46e063e2928f37142e6bbd6d9aa75fb0215f5d9e_prof);

        
        $__internal_d16186ba322194045e25004f978d9a2d2fd37f79f1da02cc9b23f5c9e162a697->leave($__internal_d16186ba322194045e25004f978d9a2d2fd37f79f1da02cc9b23f5c9e162a697_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_993b1c6d6bfe7abe5186cb919fd4e51ea5898556f5f74f118ef3cc67b891f67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993b1c6d6bfe7abe5186cb919fd4e51ea5898556f5f74f118ef3cc67b891f67d->enter($__internal_993b1c6d6bfe7abe5186cb919fd4e51ea5898556f5f74f118ef3cc67b891f67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_402d44a182ea9afd8c3c140532225617ba6b25206c2dfeb43705a5d5fe00755f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402d44a182ea9afd8c3c140532225617ba6b25206c2dfeb43705a5d5fe00755f->enter($__internal_402d44a182ea9afd8c3c140532225617ba6b25206c2dfeb43705a5d5fe00755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_402d44a182ea9afd8c3c140532225617ba6b25206c2dfeb43705a5d5fe00755f->leave($__internal_402d44a182ea9afd8c3c140532225617ba6b25206c2dfeb43705a5d5fe00755f_prof);

        
        $__internal_993b1c6d6bfe7abe5186cb919fd4e51ea5898556f5f74f118ef3cc67b891f67d->leave($__internal_993b1c6d6bfe7abe5186cb919fd4e51ea5898556f5f74f118ef3cc67b891f67d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab3e0098ad8df09f0789a6e5daa60a71e20479fbcb9fb388925d7f5b22e84c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3e0098ad8df09f0789a6e5daa60a71e20479fbcb9fb388925d7f5b22e84c8d->enter($__internal_ab3e0098ad8df09f0789a6e5daa60a71e20479fbcb9fb388925d7f5b22e84c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5b93d1400272415172ac44379489babfdd47d438c6a5e63b78747808d1ef151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b93d1400272415172ac44379489babfdd47d438c6a5e63b78747808d1ef151->enter($__internal_a5b93d1400272415172ac44379489babfdd47d438c6a5e63b78747808d1ef151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a5b93d1400272415172ac44379489babfdd47d438c6a5e63b78747808d1ef151->leave($__internal_a5b93d1400272415172ac44379489babfdd47d438c6a5e63b78747808d1ef151_prof);

        
        $__internal_ab3e0098ad8df09f0789a6e5daa60a71e20479fbcb9fb388925d7f5b22e84c8d->leave($__internal_ab3e0098ad8df09f0789a6e5daa60a71e20479fbcb9fb388925d7f5b22e84c8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
