<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_a23f54533e4d5facddbabbf7524dd90425cf7fddb07783746625d0a4a13b5b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23f54533e4d5facddbabbf7524dd90425cf7fddb07783746625d0a4a13b5b3c->enter($__internal_a23f54533e4d5facddbabbf7524dd90425cf7fddb07783746625d0a4a13b5b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_21a732839bc757f98edca69845af96182d5e38a0787d7ac3cbdee0e52eb2f2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a732839bc757f98edca69845af96182d5e38a0787d7ac3cbdee0e52eb2f2cb->enter($__internal_21a732839bc757f98edca69845af96182d5e38a0787d7ac3cbdee0e52eb2f2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a23f54533e4d5facddbabbf7524dd90425cf7fddb07783746625d0a4a13b5b3c->leave($__internal_a23f54533e4d5facddbabbf7524dd90425cf7fddb07783746625d0a4a13b5b3c_prof);

        
        $__internal_21a732839bc757f98edca69845af96182d5e38a0787d7ac3cbdee0e52eb2f2cb->leave($__internal_21a732839bc757f98edca69845af96182d5e38a0787d7ac3cbdee0e52eb2f2cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
