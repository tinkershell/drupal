<?php

/* core/themes/classy/templates/navigation/vertical-tabs.html.twig */
class __TwigTemplate_9ce7bc9f82db19d03e5afe23b6d44cfb7eefac4ac2e5366ed1c02c4b99cc322c extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "setAttribute", array(0 => "data-vertical-tabs-panes", 1 => true), "method"), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/vertical-tabs.html.twig";
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
/*  * Theme override for vertical tabs.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the wrapper element.*/
/*  * - children: The rendered checkboxes.*/
/*  **/
/*  * @see template_preprocess_vertical_tabs()*/
/*  *//* */
/* #}*/
/* <div{{ attributes.setAttribute('data-vertical-tabs-panes', TRUE) }}>{{ children }}</div>*/
/* */
