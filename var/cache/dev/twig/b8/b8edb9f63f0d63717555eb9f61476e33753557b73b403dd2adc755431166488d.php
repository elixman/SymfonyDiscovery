<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5c4d8d6626aadd7448af515d45f1844697a2a6c17ace7a60416a12c95f6c4f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5c4d8d6626aadd7448af515d45f1844697a2a6c17ace7a60416a12c95f6c4f7->enter($__internal_e5c4d8d6626aadd7448af515d45f1844697a2a6c17ace7a60416a12c95f6c4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8cc00c86a8893d8025f1c0aeb347c7ba0b2728c5eda6efbd3ad87348c065c528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc00c86a8893d8025f1c0aeb347c7ba0b2728c5eda6efbd3ad87348c065c528->enter($__internal_8cc00c86a8893d8025f1c0aeb347c7ba0b2728c5eda6efbd3ad87348c065c528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5c4d8d6626aadd7448af515d45f1844697a2a6c17ace7a60416a12c95f6c4f7->leave($__internal_e5c4d8d6626aadd7448af515d45f1844697a2a6c17ace7a60416a12c95f6c4f7_prof);

        
        $__internal_8cc00c86a8893d8025f1c0aeb347c7ba0b2728c5eda6efbd3ad87348c065c528->leave($__internal_8cc00c86a8893d8025f1c0aeb347c7ba0b2728c5eda6efbd3ad87348c065c528_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_344143e35a966e3e2e6981bb8568898774f8611f8098de9ca300e19ac317dabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344143e35a966e3e2e6981bb8568898774f8611f8098de9ca300e19ac317dabc->enter($__internal_344143e35a966e3e2e6981bb8568898774f8611f8098de9ca300e19ac317dabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_809cc2372d29b604810a52fea86897da882c19561df132046f0d2ed4fdd6533c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809cc2372d29b604810a52fea86897da882c19561df132046f0d2ed4fdd6533c->enter($__internal_809cc2372d29b604810a52fea86897da882c19561df132046f0d2ed4fdd6533c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_809cc2372d29b604810a52fea86897da882c19561df132046f0d2ed4fdd6533c->leave($__internal_809cc2372d29b604810a52fea86897da882c19561df132046f0d2ed4fdd6533c_prof);

        
        $__internal_344143e35a966e3e2e6981bb8568898774f8611f8098de9ca300e19ac317dabc->leave($__internal_344143e35a966e3e2e6981bb8568898774f8611f8098de9ca300e19ac317dabc_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26a6f10e449806cc611243310ac3d7d2835de5de40e2fd1037a16ed39a57da94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a6f10e449806cc611243310ac3d7d2835de5de40e2fd1037a16ed39a57da94->enter($__internal_26a6f10e449806cc611243310ac3d7d2835de5de40e2fd1037a16ed39a57da94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ab18ae3a79a3ac16b4485bee690c9ff3a50c6a4c6e57b69f1b72ae15baef1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab18ae3a79a3ac16b4485bee690c9ff3a50c6a4c6e57b69f1b72ae15baef1a0->enter($__internal_1ab18ae3a79a3ac16b4485bee690c9ff3a50c6a4c6e57b69f1b72ae15baef1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1ab18ae3a79a3ac16b4485bee690c9ff3a50c6a4c6e57b69f1b72ae15baef1a0->leave($__internal_1ab18ae3a79a3ac16b4485bee690c9ff3a50c6a4c6e57b69f1b72ae15baef1a0_prof);

        
        $__internal_26a6f10e449806cc611243310ac3d7d2835de5de40e2fd1037a16ed39a57da94->leave($__internal_26a6f10e449806cc611243310ac3d7d2835de5de40e2fd1037a16ed39a57da94_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
