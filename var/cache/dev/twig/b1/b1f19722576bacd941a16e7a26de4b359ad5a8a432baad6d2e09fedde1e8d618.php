<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91ad5d8294da51db3278d5e4dc76843ba52b4ab016df09603254c52d50fca82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ad5d8294da51db3278d5e4dc76843ba52b4ab016df09603254c52d50fca82b->enter($__internal_91ad5d8294da51db3278d5e4dc76843ba52b4ab016df09603254c52d50fca82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da6f5e1f1d1873c704e71e1c902469782d24acb771c49033ce93c3193fb42bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6f5e1f1d1873c704e71e1c902469782d24acb771c49033ce93c3193fb42bb4->enter($__internal_da6f5e1f1d1873c704e71e1c902469782d24acb771c49033ce93c3193fb42bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_91ad5d8294da51db3278d5e4dc76843ba52b4ab016df09603254c52d50fca82b->leave($__internal_91ad5d8294da51db3278d5e4dc76843ba52b4ab016df09603254c52d50fca82b_prof);

        
        $__internal_da6f5e1f1d1873c704e71e1c902469782d24acb771c49033ce93c3193fb42bb4->leave($__internal_da6f5e1f1d1873c704e71e1c902469782d24acb771c49033ce93c3193fb42bb4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52f345e8878eebfe226a920758fa0ca478c6217794c57d00638ea8481c2c9ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f345e8878eebfe226a920758fa0ca478c6217794c57d00638ea8481c2c9ad0->enter($__internal_52f345e8878eebfe226a920758fa0ca478c6217794c57d00638ea8481c2c9ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75477181dc0cbcc64a93649fe1260188dfae76d713690a0ddcb95d0ab7dd535b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75477181dc0cbcc64a93649fe1260188dfae76d713690a0ddcb95d0ab7dd535b->enter($__internal_75477181dc0cbcc64a93649fe1260188dfae76d713690a0ddcb95d0ab7dd535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75477181dc0cbcc64a93649fe1260188dfae76d713690a0ddcb95d0ab7dd535b->leave($__internal_75477181dc0cbcc64a93649fe1260188dfae76d713690a0ddcb95d0ab7dd535b_prof);

        
        $__internal_52f345e8878eebfe226a920758fa0ca478c6217794c57d00638ea8481c2c9ad0->leave($__internal_52f345e8878eebfe226a920758fa0ca478c6217794c57d00638ea8481c2c9ad0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62621310bd678343d0a7e4435d5f28a2d08916ed6a95303f46f7184277730854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62621310bd678343d0a7e4435d5f28a2d08916ed6a95303f46f7184277730854->enter($__internal_62621310bd678343d0a7e4435d5f28a2d08916ed6a95303f46f7184277730854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a349477460bf700016f91893b39298576739ff8a5b62fb110c112c2cbae6326c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a349477460bf700016f91893b39298576739ff8a5b62fb110c112c2cbae6326c->enter($__internal_a349477460bf700016f91893b39298576739ff8a5b62fb110c112c2cbae6326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a349477460bf700016f91893b39298576739ff8a5b62fb110c112c2cbae6326c->leave($__internal_a349477460bf700016f91893b39298576739ff8a5b62fb110c112c2cbae6326c_prof);

        
        $__internal_62621310bd678343d0a7e4435d5f28a2d08916ed6a95303f46f7184277730854->leave($__internal_62621310bd678343d0a7e4435d5f28a2d08916ed6a95303f46f7184277730854_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f8da96a4fd471e4cbbaa7eaac236141d83ed91c77fdcc09b47a909c86a8bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f8da96a4fd471e4cbbaa7eaac236141d83ed91c77fdcc09b47a909c86a8bc6->enter($__internal_04f8da96a4fd471e4cbbaa7eaac236141d83ed91c77fdcc09b47a909c86a8bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f87e81ea5042c61f69ba45844cb1a5da99db4fe23aa76c6da4c0862aaedf4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f87e81ea5042c61f69ba45844cb1a5da99db4fe23aa76c6da4c0862aaedf4e0->enter($__internal_4f87e81ea5042c61f69ba45844cb1a5da99db4fe23aa76c6da4c0862aaedf4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f87e81ea5042c61f69ba45844cb1a5da99db4fe23aa76c6da4c0862aaedf4e0->leave($__internal_4f87e81ea5042c61f69ba45844cb1a5da99db4fe23aa76c6da4c0862aaedf4e0_prof);

        
        $__internal_04f8da96a4fd471e4cbbaa7eaac236141d83ed91c77fdcc09b47a909c86a8bc6->leave($__internal_04f8da96a4fd471e4cbbaa7eaac236141d83ed91c77fdcc09b47a909c86a8bc6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_269bae0aa79c70da9df3f470a6f9fdb72a53cdc354d08fd993b563544ab171a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269bae0aa79c70da9df3f470a6f9fdb72a53cdc354d08fd993b563544ab171a3->enter($__internal_269bae0aa79c70da9df3f470a6f9fdb72a53cdc354d08fd993b563544ab171a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_10b4606f262aaf72fa00e0129902760542ca10cea8fa81c048386cda06075f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b4606f262aaf72fa00e0129902760542ca10cea8fa81c048386cda06075f78->enter($__internal_10b4606f262aaf72fa00e0129902760542ca10cea8fa81c048386cda06075f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10b4606f262aaf72fa00e0129902760542ca10cea8fa81c048386cda06075f78->leave($__internal_10b4606f262aaf72fa00e0129902760542ca10cea8fa81c048386cda06075f78_prof);

        
        $__internal_269bae0aa79c70da9df3f470a6f9fdb72a53cdc354d08fd993b563544ab171a3->leave($__internal_269bae0aa79c70da9df3f470a6f9fdb72a53cdc354d08fd993b563544ab171a3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/app/Resources/views/base.html.twig");
    }
}
