<?php

/* core/themes/classy/templates/views/views-view-unformatted.html.twig */
class __TwigTemplate_83bf2fab2c4b3ae387486525c042415a6dc37b4f0176f26cff71cbe037b66520 extends Twig_Template
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
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "  <h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
";
        }
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            echo "  ";
            // line 23
            $context["row_classes"] = array(0 => ((            // line 24
(isset($context["default_row_class"]) ? $context["default_row_class"] : null)) ? ("views-row") : ("")));
            // line 27
            echo "  <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => (isset($context["row_classes"]) ? $context["row_classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 28
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/views/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 28,  36 => 27,  34 => 24,  33 => 23,  31 => 22,  27 => 21,  21 => 19,  19 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a view of unformatted rows.*/
/*  **/
/*  * Available variables:*/
/*  * - title: The title of this group of rows. May be empty.*/
/*  * - rows: A list of the view's row items.*/
/*  *   - attributes: The row's HTML attributes.*/
/*  *   - content: The row's content.*/
/*  * - view: The view object.*/
/*  * - default_row_class: A flag indicating whether default classes should be*/
/*  *   used on rows.*/
/*  **/
/*  * @see template_preprocess_views_view_unformatted()*/
/*  *//* */
/* #}*/
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/* {% for row in rows %}*/
/*   {%*/
/*     set row_classes = [*/
/*       default_row_class ? 'views-row',*/
/*     ]*/
/*   %}*/
/*   <div{{ row.attributes.addClass(row_classes) }}>*/
/*     {{ row.content }}*/
/*   </div>*/
/* {% endfor %}*/
/* */
