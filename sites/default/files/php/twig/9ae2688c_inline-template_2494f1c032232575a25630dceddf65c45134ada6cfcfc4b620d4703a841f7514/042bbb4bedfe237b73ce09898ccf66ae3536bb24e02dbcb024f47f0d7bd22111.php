<?php

/* {# inline_template_start #}{{ raw_arguments.tid }} */
class __TwigTemplate_72d9ed82b8b0287cd2d75b2d47a7a6b256ab25016b87ab9838091bbb6a39c43b extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["raw_arguments"]) ? $context["raw_arguments"] : null), "tid", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ raw_arguments.tid }}";
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
/* {# inline_template_start #}{{ raw_arguments.tid }}*/
