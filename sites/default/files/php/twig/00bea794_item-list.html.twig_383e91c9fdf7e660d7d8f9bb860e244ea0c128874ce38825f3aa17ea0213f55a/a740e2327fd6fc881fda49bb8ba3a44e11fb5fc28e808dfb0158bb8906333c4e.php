<?php

/* core/themes/classy/templates/dataset/item-list.html.twig */
class __TwigTemplate_b68ce2bbb3de2fd148a89b149912092b03227f6a05d3abfccebf69e9e69acac4 extends Twig_Template
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
        // line 22
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "list_style", array())) {
            // line 23
            $context["wrapper_attributes"] = $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => ("item-list--" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "list_style", array()))), "method");
            // line 24
            $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => ("item-list__" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "list_style", array()))), "method");
        }
        // line 26
        if (((isset($context["items"]) ? $context["items"] : null) || (isset($context["empty"]) ? $context["empty"] : null))) {
            // line 27
            echo "<div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "item-list"), "method"), "html", null, true);
            echo ">";
            // line 28
            if ( !twig_test_empty((isset($context["title"]) ? $context["title"] : null))) {
                // line 29
                echo "<h3>";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</h3>";
            }
            // line 31
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "<";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true);
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
                echo ">";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    echo "<li";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "</";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["list_type"]) ? $context["list_type"] : null), "html", null, true);
                echo ">";
            } else {
                // line 38
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true);
            }
            // line 40
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/dataset/item-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 40,  65 => 38,  60 => 36,  50 => 34,  46 => 33,  41 => 32,  39 => 31,  34 => 29,  32 => 28,  28 => 27,  26 => 26,  23 => 24,  21 => 23,  19 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for an item list.*/
/*  **/
/*  * Available variables:*/
/*  * - items: A list of items. Each item contains:*/
/*  *   - attributes: HTML attributes to be applied to each list item.*/
/*  *   - value: The content of the list element.*/
/*  * - title: The title of the list.*/
/*  * - list_type: The tag for list element ("ul" or "ol").*/
/*  * - wrapper_attributes: HTML attributes to be applied to the list wrapper.*/
/*  * - attributes: HTML attributes to be applied to the list.*/
/*  * - empty: A message to display when there are no items. Allowed value is a*/
/*  *   string or render array.*/
/*  * - context: A list of contextual data associated with the list. May contain:*/
/*  *   - list_style: The custom list style.*/
/*  **/
/*  * @see template_preprocess_item_list()*/
/*  *//* */
/* #}*/
/* {% if context.list_style %}*/
/*   {%- set wrapper_attributes = wrapper_attributes.addClass('item-list--' ~ context.list_style) %}*/
/*   {%- set attributes = attributes.addClass('item-list__' ~ context.list_style) %}*/
/* {% endif %}*/
/* {% if items or empty -%}*/
/*   <div{{ wrapper_attributes.addClass('item-list') }}>*/
/*     {%- if title is not empty -%}*/
/*       <h3>{{ title }}</h3>*/
/*     {%- endif -%}*/
/*     {%- if items -%}*/
/*       <{{ list_type }}{{ attributes }}>*/
/*         {%- for item in items -%}*/
/*           <li{{ item.attributes }}>{{ item.value }}</li>*/
/*         {%- endfor -%}*/
/*       </{{ list_type }}>*/
/*     {%- else -%}*/
/*       {{- empty -}}*/
/*     {%- endif -%}*/
/*   </div>*/
/* {%- endif %}*/
/* */
