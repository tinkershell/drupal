<?php

/* core/themes/classy/templates/form/radios.html.twig */
class __TwigTemplate_9aea708a2f5a75300552ea234a5b8b365125f240a4833bf7cb4ff2d3a40b8fe0 extends Twig_Template
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
        // line 13
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-radios"), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a 'radios' #type form element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered radios.*/
/*  **/
/*  * @see template_preprocess_radios()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.addClass('form-radios') }}>{{ children }}</div>*/
/* */
