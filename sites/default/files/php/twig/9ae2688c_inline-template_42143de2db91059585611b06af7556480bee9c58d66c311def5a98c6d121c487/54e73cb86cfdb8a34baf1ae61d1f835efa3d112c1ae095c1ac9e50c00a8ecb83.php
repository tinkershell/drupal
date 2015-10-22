<?php

/* {# inline_template_start #}{{ arguments.tid }} */
class __TwigTemplate_94e33fb394624abfc76f319108f91797bc8157d5182c6e4c8223d82155305e61 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["arguments"]) ? $context["arguments"] : null), "tid", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ arguments.tid }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {# inline_template_start #}{{ arguments.tid }}*/
