<?php

/* core/themes/bartik/templates/field--node--field-tags.html.twig */
class __TwigTemplate_7e7ec8123c5161a412551b75602a5b8ed2c56a17032e68fab825c4ac83309921 extends Twig_Template
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
        // line 25
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 27
(isset($context["field_name"]) ? $context["field_name"] : null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 28
(isset($context["field_type"]) ? $context["field_type"] : null))), 3 => ("field--label-" .         // line 29
(isset($context["label_display"]) ? $context["label_display"] : null)), 4 => "clearfix");
        // line 34
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 36
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("inline") : ("")));
        // line 39
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 40
        if ( !(isset($context["label_hidden"]) ? $context["label_hidden"] : null)) {
            // line 41
            echo "    <h3";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h3>
  ";
        }
        // line 43
        echo "  <ul class='links field__items'>
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "      <li";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/field--node--field-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 47,  49 => 45,  45 => 44,  42 => 43,  34 => 41,  32 => 40,  27 => 39,  25 => 36,  24 => 34,  22 => 29,  21 => 28,  20 => 27,  19 => 25,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik theme override for taxonomy term fields.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the label.*/
/*  * - label: The label for the field.*/
/*  * - content_attributes: HTML attributes for the content.*/
/*  * - items: List of all the field items. Each item contains:*/
/*  *   - attributes: List of HTML attributes for each item.*/
/*  *   - content: The field item's content.*/
/*  * - entity_type: The entity type to which the field belongs.*/
/*  * - field_name: The name of the field.*/
/*  * - field_type: The type of the field.*/
/*  * - label_display: The display settings for the label.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  * @see bartik_preprocess_field()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'field',*/
/*     'field--name-' ~ field_name|clean_class,*/
/*     'field--type-' ~ field_type|clean_class,*/
/*     'field--label-' ~ label_display,*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* {%*/
/*   set title_classes = [*/
/*     'field__label',*/
/*     label_display == 'inline' ? 'inline',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {% if not label_hidden %}*/
/*     <h3{{ title_attributes.addClass(title_classes) }}>{{ label }}</h3>*/
/*   {% endif %}*/
/*   <ul class='links field__items'>*/
/*     {% for item in items %}*/
/*       <li{{ item.attributes }}>{{ item.content }}</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
