<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_84b6a10efed0804e2964cc9fa60db2ae3a98ca8f547db5249670fb8fe6f6257d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b6a10efed0804e2964cc9fa60db2ae3a98ca8f547db5249670fb8fe6f6257d->enter($__internal_84b6a10efed0804e2964cc9fa60db2ae3a98ca8f547db5249670fb8fe6f6257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f7f048147a902c9ae7596b61aea5acb66bae140447548b2bdf6baa3211a63f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f048147a902c9ae7596b61aea5acb66bae140447548b2bdf6baa3211a63f4f->enter($__internal_f7f048147a902c9ae7596b61aea5acb66bae140447548b2bdf6baa3211a63f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_84b6a10efed0804e2964cc9fa60db2ae3a98ca8f547db5249670fb8fe6f6257d->leave($__internal_84b6a10efed0804e2964cc9fa60db2ae3a98ca8f547db5249670fb8fe6f6257d_prof);

        
        $__internal_f7f048147a902c9ae7596b61aea5acb66bae140447548b2bdf6baa3211a63f4f->leave($__internal_f7f048147a902c9ae7596b61aea5acb66bae140447548b2bdf6baa3211a63f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
