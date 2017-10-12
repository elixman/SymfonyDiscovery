<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_d5e33fa65d41625a9ae86ae7458f5a6673d3e0ea225b748673a0dcbcfeaa14bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e33fa65d41625a9ae86ae7458f5a6673d3e0ea225b748673a0dcbcfeaa14bc->enter($__internal_d5e33fa65d41625a9ae86ae7458f5a6673d3e0ea225b748673a0dcbcfeaa14bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_460e2992a56f70ba2d36534d8e31f9eb4c0d5fe2d5e211e5e047d277c3064781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460e2992a56f70ba2d36534d8e31f9eb4c0d5fe2d5e211e5e047d277c3064781->enter($__internal_460e2992a56f70ba2d36534d8e31f9eb4c0d5fe2d5e211e5e047d277c3064781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d5e33fa65d41625a9ae86ae7458f5a6673d3e0ea225b748673a0dcbcfeaa14bc->leave($__internal_d5e33fa65d41625a9ae86ae7458f5a6673d3e0ea225b748673a0dcbcfeaa14bc_prof);

        
        $__internal_460e2992a56f70ba2d36534d8e31f9eb4c0d5fe2d5e211e5e047d277c3064781->leave($__internal_460e2992a56f70ba2d36534d8e31f9eb4c0d5fe2d5e211e5e047d277c3064781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
