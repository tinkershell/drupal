<?php

/* core/modules/system/templates/tablesort-indicator.html.twig */
class __TwigTemplate_c8af432dbc0376c0893d377152b1b3d45ab00993e94e04c330c066f50e61e251 extends Twig_Template
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
        // line 15
        $context["classes"] = array(0 => "tablesort", 1 => ("tablesort--" .         // line 17
(isset($context["style"]) ? $context["style"] : null)));
        // line 20
        echo "<span";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  <span class=\"visually-hidden\">
    ";
        // line 22
        if (((isset($context["style"]) ? $context["style"] : null) == "asc")) {
            // line 23
            echo $this->env->getExtension('drupal_core')->renderVar(t("Sort ascending"));
            echo "
    ";
        } else {
            // line 25
            echo $this->env->getExtension('drupal_core')->renderVar(t("Sort descending"));
            echo "
    ";
        }
        // line 27
        echo "  </span>
</span>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/tablesort-indicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 27,  35 => 25,  30 => 23,  28 => 22,  22 => 20,  20 => 17,  19 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying a tablesort indicator.*/
/*  **/
/*  * Available variables:*/
/*  * - style: Either 'asc' or 'desc', indicating the sorting direction.*/
/*  **/
/*  * @see template_preprocess_tablesort_indicator()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'tablesort',*/
/*     'tablesort--' ~ style,*/
/*   ]*/
/* %}*/
/* <span{{ attributes.addClass(classes) }}>*/
/*   <span class="visually-hidden">*/
/*     {% if style == 'asc' -%}*/
/*       {{ 'Sort ascending'|t }}*/
/*     {% else -%}*/
/*       {{ 'Sort descending'|t }}*/
/*     {% endif %}*/
/*   </span>*/
/* </span>*/
/* */
