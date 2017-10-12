<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_d9a90b39f85dd6befbeb37ae2b90604f3adbca801d9111ba0ade9410c1c3dace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a90b39f85dd6befbeb37ae2b90604f3adbca801d9111ba0ade9410c1c3dace->enter($__internal_d9a90b39f85dd6befbeb37ae2b90604f3adbca801d9111ba0ade9410c1c3dace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_8d0f88c267d757330901ef075eadcc17b34e1d04e9e41914b298ed63080bc20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0f88c267d757330901ef075eadcc17b34e1d04e9e41914b298ed63080bc20a->enter($__internal_8d0f88c267d757330901ef075eadcc17b34e1d04e9e41914b298ed63080bc20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d9a90b39f85dd6befbeb37ae2b90604f3adbca801d9111ba0ade9410c1c3dace->leave($__internal_d9a90b39f85dd6befbeb37ae2b90604f3adbca801d9111ba0ade9410c1c3dace_prof);

        
        $__internal_8d0f88c267d757330901ef075eadcc17b34e1d04e9e41914b298ed63080bc20a->leave($__internal_8d0f88c267d757330901ef075eadcc17b34e1d04e9e41914b298ed63080bc20a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
