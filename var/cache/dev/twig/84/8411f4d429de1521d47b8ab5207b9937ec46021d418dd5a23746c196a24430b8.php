<?php

/* ::layout.html.twig */
class __TwigTemplate_e1f7f87ec41b48af8fed1342f5b3c528629f552ceb88412bb55db66d74a240ad extends Twig_Template
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
        $__internal_986d110a95fdb741839bd877f337ced63559249de813edbab35855df6450fe90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986d110a95fdb741839bd877f337ced63559249de813edbab35855df6450fe90->enter($__internal_986d110a95fdb741839bd877f337ced63559249de813edbab35855df6450fe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_16d2db7209b09943d804d0facfe625284ba569f1e2dc27bfb3efee989a6186de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d2db7209b09943d804d0facfe625284ba569f1e2dc27bfb3efee989a6186de->enter($__internal_16d2db7209b09943d804d0facfe625284ba569f1e2dc27bfb3efee989a6186de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sb_platform_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SBPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_986d110a95fdb741839bd877f337ced63559249de813edbab35855df6450fe90->leave($__internal_986d110a95fdb741839bd877f337ced63559249de813edbab35855df6450fe90_prof);

        
        $__internal_16d2db7209b09943d804d0facfe625284ba569f1e2dc27bfb3efee989a6186de->leave($__internal_16d2db7209b09943d804d0facfe625284ba569f1e2dc27bfb3efee989a6186de_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f784a837d04b39c3019241bab7c316339279dfae5225b33770c3a8aa22264962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f784a837d04b39c3019241bab7c316339279dfae5225b33770c3a8aa22264962->enter($__internal_f784a837d04b39c3019241bab7c316339279dfae5225b33770c3a8aa22264962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1823352012e8ba15f86d25dc7a2ee9b4845fc346ef6505092bb881e34354707b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1823352012e8ba15f86d25dc7a2ee9b4845fc346ef6505092bb881e34354707b->enter($__internal_1823352012e8ba15f86d25dc7a2ee9b4845fc346ef6505092bb881e34354707b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_1823352012e8ba15f86d25dc7a2ee9b4845fc346ef6505092bb881e34354707b->leave($__internal_1823352012e8ba15f86d25dc7a2ee9b4845fc346ef6505092bb881e34354707b_prof);

        
        $__internal_f784a837d04b39c3019241bab7c316339279dfae5225b33770c3a8aa22264962->leave($__internal_f784a837d04b39c3019241bab7c316339279dfae5225b33770c3a8aa22264962_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cc489003119a51bb13de42e1b49048b8e1b29e29aa1494a7bd13a624c491ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc489003119a51bb13de42e1b49048b8e1b29e29aa1494a7bd13a624c491ad0->enter($__internal_0cc489003119a51bb13de42e1b49048b8e1b29e29aa1494a7bd13a624c491ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3a564cf422ff8dafc498df9b400d8fc0a96990a3c0d62e1298bc7ade2599b7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a564cf422ff8dafc498df9b400d8fc0a96990a3c0d62e1298bc7ade2599b7a3->enter($__internal_3a564cf422ff8dafc498df9b400d8fc0a96990a3c0d62e1298bc7ade2599b7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_3a564cf422ff8dafc498df9b400d8fc0a96990a3c0d62e1298bc7ade2599b7a3->leave($__internal_3a564cf422ff8dafc498df9b400d8fc0a96990a3c0d62e1298bc7ade2599b7a3_prof);

        
        $__internal_0cc489003119a51bb13de42e1b49048b8e1b29e29aa1494a7bd13a624c491ad0->leave($__internal_0cc489003119a51bb13de42e1b49048b8e1b29e29aa1494a7bd13a624c491ad0_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cd38fda484457f4eb50c0573a0cc22b2a355d4e9bf26a62e27ef253806501a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cd38fda484457f4eb50c0573a0cc22b2a355d4e9bf26a62e27ef253806501a5->enter($__internal_5cd38fda484457f4eb50c0573a0cc22b2a355d4e9bf26a62e27ef253806501a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7315815584c391972e9cc0f5981d70e34bea6f63ed6d4dd7cfb4e9a17a8b3066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7315815584c391972e9cc0f5981d70e34bea6f63ed6d4dd7cfb4e9a17a8b3066->enter($__internal_7315815584c391972e9cc0f5981d70e34bea6f63ed6d4dd7cfb4e9a17a8b3066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "            ";
        
        $__internal_7315815584c391972e9cc0f5981d70e34bea6f63ed6d4dd7cfb4e9a17a8b3066->leave($__internal_7315815584c391972e9cc0f5981d70e34bea6f63ed6d4dd7cfb4e9a17a8b3066_prof);

        
        $__internal_5cd38fda484457f4eb50c0573a0cc22b2a355d4e9bf26a62e27ef253806501a5->leave($__internal_5cd38fda484457f4eb50c0573a0cc22b2a355d4e9bf26a62e27ef253806501a5_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4c8d72896ec8f00ca6d9f4ad992e3dab37888622848defd7a17af7d6d07a592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c8d72896ec8f00ca6d9f4ad992e3dab37888622848defd7a17af7d6d07a592->enter($__internal_b4c8d72896ec8f00ca6d9f4ad992e3dab37888622848defd7a17af7d6d07a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b1202a878ca4d4d908c30316680044221469cbd8c479acf9fa0deb85c5d131d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1202a878ca4d4d908c30316680044221469cbd8c479acf9fa0deb85c5d131d1->enter($__internal_b1202a878ca4d4d908c30316680044221469cbd8c479acf9fa0deb85c5d131d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_b1202a878ca4d4d908c30316680044221469cbd8c479acf9fa0deb85c5d131d1->leave($__internal_b1202a878ca4d4d908c30316680044221469cbd8c479acf9fa0deb85c5d131d1_prof);

        
        $__internal_b4c8d72896ec8f00ca6d9f4ad992e3dab37888622848defd7a17af7d6d07a592->leave($__internal_b4c8d72896ec8f00ca6d9f4ad992e3dab37888622848defd7a17af7d6d07a592_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  184 => 57,  175 => 56,  165 => 45,  156 => 44,  145 => 13,  143 => 12,  134 => 11,  116 => 9,  104 => 61,  102 => 56,  95 => 52,  87 => 46,  85 => 44,  79 => 41,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path('sb_platform_home') }}\">Accueil</a></li>
                <li><a href=\"{{ path('sb_platform_add') }}\">Ajouter une annonce</a></li>
            </ul>

            <h4>Dernières annonces</h4>
            {{ render(controller(\"SBPlatformBundle:Advert:menu\", {'limit': 3})) }}
        </div>
        <div id=\"content\" class=\"col-md-9\">
            {% block body %}
            {% endblock %}
        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
</div>

{% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "::layout.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/app/Resources/views/layout.html.twig");
    }
}
