<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54a87dac2d63e94a591bfbc97b0b227d3dcffebc990fdd1d3532294b3a471b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a87dac2d63e94a591bfbc97b0b227d3dcffebc990fdd1d3532294b3a471b23->enter($__internal_54a87dac2d63e94a591bfbc97b0b227d3dcffebc990fdd1d3532294b3a471b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6dafc0c41c1c9e64457156cb041b906ba1df5c252a243ee0f65c7ea2d66cae7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dafc0c41c1c9e64457156cb041b906ba1df5c252a243ee0f65c7ea2d66cae7e->enter($__internal_6dafc0c41c1c9e64457156cb041b906ba1df5c252a243ee0f65c7ea2d66cae7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_54a87dac2d63e94a591bfbc97b0b227d3dcffebc990fdd1d3532294b3a471b23->leave($__internal_54a87dac2d63e94a591bfbc97b0b227d3dcffebc990fdd1d3532294b3a471b23_prof);

        
        $__internal_6dafc0c41c1c9e64457156cb041b906ba1df5c252a243ee0f65c7ea2d66cae7e->leave($__internal_6dafc0c41c1c9e64457156cb041b906ba1df5c252a243ee0f65c7ea2d66cae7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67106b35265521e4ef9e5de313b5756ba32bf9a3b47051d4a25a51bcd59abbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67106b35265521e4ef9e5de313b5756ba32bf9a3b47051d4a25a51bcd59abbd6->enter($__internal_67106b35265521e4ef9e5de313b5756ba32bf9a3b47051d4a25a51bcd59abbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3be686105c051fe176dbc24e7cfd4f8c4cb8e6590aa69ccdbbad6fb6e9eb1e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be686105c051fe176dbc24e7cfd4f8c4cb8e6590aa69ccdbbad6fb6e9eb1e8f->enter($__internal_3be686105c051fe176dbc24e7cfd4f8c4cb8e6590aa69ccdbbad6fb6e9eb1e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3be686105c051fe176dbc24e7cfd4f8c4cb8e6590aa69ccdbbad6fb6e9eb1e8f->leave($__internal_3be686105c051fe176dbc24e7cfd4f8c4cb8e6590aa69ccdbbad6fb6e9eb1e8f_prof);

        
        $__internal_67106b35265521e4ef9e5de313b5756ba32bf9a3b47051d4a25a51bcd59abbd6->leave($__internal_67106b35265521e4ef9e5de313b5756ba32bf9a3b47051d4a25a51bcd59abbd6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_be9e5594e1e81835825ff8ec83b73a3b895024a04dc3bce7af7824e32521fc92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9e5594e1e81835825ff8ec83b73a3b895024a04dc3bce7af7824e32521fc92->enter($__internal_be9e5594e1e81835825ff8ec83b73a3b895024a04dc3bce7af7824e32521fc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a0b317b8443c57f353f07c45e835d7b6a35e3a883c6d748906104c04a53224eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b317b8443c57f353f07c45e835d7b6a35e3a883c6d748906104c04a53224eb->enter($__internal_a0b317b8443c57f353f07c45e835d7b6a35e3a883c6d748906104c04a53224eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a0b317b8443c57f353f07c45e835d7b6a35e3a883c6d748906104c04a53224eb->leave($__internal_a0b317b8443c57f353f07c45e835d7b6a35e3a883c6d748906104c04a53224eb_prof);

        
        $__internal_be9e5594e1e81835825ff8ec83b73a3b895024a04dc3bce7af7824e32521fc92->leave($__internal_be9e5594e1e81835825ff8ec83b73a3b895024a04dc3bce7af7824e32521fc92_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff18ea12da18bedfcff8077179e7a92535dbc1270215da862f3d964f880b926c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff18ea12da18bedfcff8077179e7a92535dbc1270215da862f3d964f880b926c->enter($__internal_ff18ea12da18bedfcff8077179e7a92535dbc1270215da862f3d964f880b926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_541800383b787a8b83abcc7075fe715f13f1c9ee0268f649bd1f53d272ab61c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541800383b787a8b83abcc7075fe715f13f1c9ee0268f649bd1f53d272ab61c8->enter($__internal_541800383b787a8b83abcc7075fe715f13f1c9ee0268f649bd1f53d272ab61c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_541800383b787a8b83abcc7075fe715f13f1c9ee0268f649bd1f53d272ab61c8->leave($__internal_541800383b787a8b83abcc7075fe715f13f1c9ee0268f649bd1f53d272ab61c8_prof);

        
        $__internal_ff18ea12da18bedfcff8077179e7a92535dbc1270215da862f3d964f880b926c->leave($__internal_ff18ea12da18bedfcff8077179e7a92535dbc1270215da862f3d964f880b926c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
