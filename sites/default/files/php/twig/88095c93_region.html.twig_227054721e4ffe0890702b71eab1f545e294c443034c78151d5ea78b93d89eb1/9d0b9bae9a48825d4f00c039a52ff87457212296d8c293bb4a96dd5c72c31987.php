<?php

/* themes/adaptivetheme/at_core/templates/system/region.html.twig */
class __TwigTemplate_2919746ca085acec2659b61897b73e040ebfbbbb5bb13f57b730e75ad0a9cd89 extends Twig_Template
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
        // line 28
        $context["classes"] = array(0 => "l-r", 1 => "region", 2 => ((        // line 31
(isset($context["region_row"]) ? $context["region_row"] : null)) ? (((("pr-" . (isset($context["region_row"]) ? $context["region_row"] : null)) . "__") . \Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null)))) : (\Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null)))));
        // line 34
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 35
            echo "  <";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_element"]) ? $context["html_element"] : null), "html", null, true);
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 36
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </";
            // line 37
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_element"]) ? $context["html_element"] : null), "html", null, true);
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/system/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 37,  30 => 36,  24 => 35,  22 => 34,  20 => 31,  19 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a region.*/
/*  * AT sets the wrapper element in preprocess. For example by default*/
/*  * the main content region will get the <main> element.*/
/*  **/
/*  * Available variables:*/
/*  * - html_element: div or html5 element such as main, section etc. Set*/
/*  *   in preprocess.*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div, including:*/
/*  *   - class: Classes that can be used to style contextually through CSS,*/
/*  *     including:*/
/*  *     - region: The current template type (also know as "theming hook").*/
/*  *     - region__[name]: The name of the region with underscores replaced with*/
/*  *       dashes. For example, page_top region would have a region__page-top*/
/*  *       class.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'l-r',*/
/*     'region',*/
/*     region_row ? 'pr-' ~ region_row ~ '__' ~ region|clean_class : region|clean_class*/
/*   ]*/
/* %}*/
/* {% if content %}*/
/*   <{{ html_element }}{{ attributes.addClass(classes) }}>*/
/*     {{ content }}*/
/*   </{{ html_element }}>*/
/* {% endif %}*/
/* */
