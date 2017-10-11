<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_ed15de330d8ff648d35de2eb389f7fe582e05304af385d1f7c94b4f42056243e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed15de330d8ff648d35de2eb389f7fe582e05304af385d1f7c94b4f42056243e->enter($__internal_ed15de330d8ff648d35de2eb389f7fe582e05304af385d1f7c94b4f42056243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c95207d44854383837cadb9b2a579ebb8ed39fab6b4cbe2d15a6e4b5e58c6c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95207d44854383837cadb9b2a579ebb8ed39fab6b4cbe2d15a6e4b5e58c6c97->enter($__internal_c95207d44854383837cadb9b2a579ebb8ed39fab6b4cbe2d15a6e4b5e58c6c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed15de330d8ff648d35de2eb389f7fe582e05304af385d1f7c94b4f42056243e->leave($__internal_ed15de330d8ff648d35de2eb389f7fe582e05304af385d1f7c94b4f42056243e_prof);

        
        $__internal_c95207d44854383837cadb9b2a579ebb8ed39fab6b4cbe2d15a6e4b5e58c6c97->leave($__internal_c95207d44854383837cadb9b2a579ebb8ed39fab6b4cbe2d15a6e4b5e58c6c97_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_726d352fc727446b9d5f877ba0d492a709e7949e3e96cf72bc0453b225a9451c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726d352fc727446b9d5f877ba0d492a709e7949e3e96cf72bc0453b225a9451c->enter($__internal_726d352fc727446b9d5f877ba0d492a709e7949e3e96cf72bc0453b225a9451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea6054ac96f30590ab9d792a0f4e7f308965a69851862795015539cb9a86825b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6054ac96f30590ab9d792a0f4e7f308965a69851862795015539cb9a86825b->enter($__internal_ea6054ac96f30590ab9d792a0f4e7f308965a69851862795015539cb9a86825b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea6054ac96f30590ab9d792a0f4e7f308965a69851862795015539cb9a86825b->leave($__internal_ea6054ac96f30590ab9d792a0f4e7f308965a69851862795015539cb9a86825b_prof);

        
        $__internal_726d352fc727446b9d5f877ba0d492a709e7949e3e96cf72bc0453b225a9451c->leave($__internal_726d352fc727446b9d5f877ba0d492a709e7949e3e96cf72bc0453b225a9451c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7431343d6af0c28c57b4278bb7eb9b8ecc2f1bad8d677e12b111db633944d40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7431343d6af0c28c57b4278bb7eb9b8ecc2f1bad8d677e12b111db633944d40d->enter($__internal_7431343d6af0c28c57b4278bb7eb9b8ecc2f1bad8d677e12b111db633944d40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24795a2899503aea1ad25e1b9864e2a4c0ba6d9e040e595150ac7280d7d86ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24795a2899503aea1ad25e1b9864e2a4c0ba6d9e040e595150ac7280d7d86ef4->enter($__internal_24795a2899503aea1ad25e1b9864e2a4c0ba6d9e040e595150ac7280d7d86ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24795a2899503aea1ad25e1b9864e2a4c0ba6d9e040e595150ac7280d7d86ef4->leave($__internal_24795a2899503aea1ad25e1b9864e2a4c0ba6d9e040e595150ac7280d7d86ef4_prof);

        
        $__internal_7431343d6af0c28c57b4278bb7eb9b8ecc2f1bad8d677e12b111db633944d40d->leave($__internal_7431343d6af0c28c57b4278bb7eb9b8ecc2f1bad8d677e12b111db633944d40d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e496d2ae0c3bce3f632367212bf1c5c537d1aa7954f232cb84c24e85635fd3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e496d2ae0c3bce3f632367212bf1c5c537d1aa7954f232cb84c24e85635fd3a3->enter($__internal_e496d2ae0c3bce3f632367212bf1c5c537d1aa7954f232cb84c24e85635fd3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba22842558960b94ba550129fe01380493dbf2fb56279fdd43375f6abe7628e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba22842558960b94ba550129fe01380493dbf2fb56279fdd43375f6abe7628e4->enter($__internal_ba22842558960b94ba550129fe01380493dbf2fb56279fdd43375f6abe7628e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ba22842558960b94ba550129fe01380493dbf2fb56279fdd43375f6abe7628e4->leave($__internal_ba22842558960b94ba550129fe01380493dbf2fb56279fdd43375f6abe7628e4_prof);

        
        $__internal_e496d2ae0c3bce3f632367212bf1c5c537d1aa7954f232cb84c24e85635fd3a3->leave($__internal_e496d2ae0c3bce3f632367212bf1c5c537d1aa7954f232cb84c24e85635fd3a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
