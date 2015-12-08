<?php

/* themes/adaptivetheme/at_core/templates/system/pager.html.twig */
class __TwigTemplate_47a13d1326b751d47d06c072ff196f92434ac77f4e6855b870a03e6d77adb7c2 extends Twig_Template
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
        // line 37
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 38
            echo "  <nav class=\"pager pager--full\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 39
            echo $this->env->getExtension('drupal_core')->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"pager__items\">

      ";
            // line 43
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array())) {
                // line 44
                echo "        <li class=\"pager__item pager__item--first\">
          <a href=\"";
                // line 45
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "href", array()), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 46
                echo $this->env->getExtension('drupal_core')->renderVar(t("First page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 47
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "first", array(), "any", false, true), "text", array()), t("« first"))) : (t("« first"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 51
            echo "
      ";
            // line 53
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 54
                echo "        <li class=\"pager__item pager__item--previous\">
          <a href=\"";
                // line 55
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 56
                echo $this->env->getExtension('drupal_core')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 57
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹ previous"))) : (t("‹ previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 61
            echo "
      ";
            // line 63
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "pages", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 64
                echo "        ";
                // line 65
                $context["classes"] = array(0 => "pager__item", 1 => "pager__item--num", 2 => (($this->getAttribute(                // line 68
$context["loop"], "first", array())) ? ("pager__item--num-first") : ("")), 3 => (($this->getAttribute(                // line 69
$context["loop"], "last", array())) ? ("pager__item--num-last") : ("")), 4 => (((                // line 70
(isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" is-active") : ("")));
                // line 73
                echo "        <li class=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, trim(twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")), "html", null, true);
                echo "\">
          ";
                // line 74
                if (((isset($context["current"]) ? $context["current"] : null) == $context["key"])) {
                    // line 75
                    echo "            ";
                    $context["title"] = t("Current page");
                    // line 76
                    echo "          ";
                } else {
                    // line 77
                    echo "            ";
                    $context["title"] = t("Go to page @key", array("@key" => $context["key"]));
                    // line 78
                    echo "          ";
                }
                // line 79
                echo "          <a href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
                echo "\" class=\"pager__link";
                echo $this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (" pager__link--is-active") : ("")));
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 80
                echo $this->env->getExtension('drupal_core')->renderVar(((((isset($context["current"]) ? $context["current"] : null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "</span>
            ";
                // line 82
                echo "            ";
                if (($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "previous", array()) && $this->getAttribute($context["loop"], "first", array()))) {
                    // line 83
                    echo "              <span class=\"pager__ellipsis pager__ellipsis--before\" role=\"presentation\">&hellip;</span>
            ";
                }
                // line 85
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 87
                echo "            ";
                if (($this->getAttribute((isset($context["ellipses"]) ? $context["ellipses"] : null), "next", array()) && $this->getAttribute($context["loop"], "last", array()))) {
                    // line 88
                    echo "              <span class=\"pager__ellipsis pager__ellipsis--after\" role=\"presentation\">&hellip;</span>
            ";
                }
                // line 90
                echo "          </a>
        </li>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
      ";
            // line 95
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 96
                echo "        <li class=\"pager__item pager__item--next\">
          <a href=\"";
                // line 97
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 98
                echo $this->env->getExtension('drupal_core')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 99
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("next ›"))) : (t("next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 103
            echo "
      ";
            // line 105
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array())) {
                // line 106
                echo "        <li class=\"pager__item pager__item--last\">
          <a href=\"";
                // line 107
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "href", array()), "html", null, true);
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array()), "attributes", array()), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 108
                echo $this->env->getExtension('drupal_core')->renderVar(t("Last page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 109
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "last", array(), "any", false, true), "text", array()), t("last »"))) : (t("last »"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 113
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/system/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 113,  226 => 109,  222 => 108,  214 => 107,  211 => 106,  208 => 105,  205 => 103,  198 => 99,  194 => 98,  186 => 97,  183 => 96,  180 => 95,  177 => 93,  161 => 90,  157 => 88,  154 => 87,  152 => 85,  148 => 83,  145 => 82,  141 => 80,  130 => 79,  127 => 78,  124 => 77,  121 => 76,  118 => 75,  116 => 74,  111 => 73,  109 => 70,  108 => 69,  107 => 68,  106 => 65,  104 => 64,  86 => 63,  83 => 61,  76 => 57,  72 => 56,  64 => 55,  61 => 54,  58 => 53,  55 => 51,  48 => 47,  44 => 46,  36 => 45,  33 => 44,  30 => 43,  24 => 39,  21 => 38,  19 => 37,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a pager.*/
/*  * Notable differences to core include removal of li items for ellipsis and*/
/*  * instead placing ellipsis inside the first or last anchors on numeric items.*/
/*  * Also we add many classes for theming pager items and states.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  *   The list is keyed by the following elements:*/
/*  *   - first: Item for the first page; not present on the first page of results.*/
/*  *   - previous: Item for the previous page; not present on the first page*/
/*  *     of results.*/
/*  *   - next: Item for the next page; not present on the last page of results.*/
/*  *   - last: Item for the last page; not present on the last page of results.*/
/*  *   - pages: List of pages, keyed by page number.*/
/*  *   Sub-sub elements:*/
/*  *   items.first, items.previous, items.next, items.last, and each item inside*/
/*  *   items.pages contain the following elements:*/
/*  *   - href: URL with appropriate query parameters for the item.*/
/*  *   - attributes: A keyed list of HTML attributes for the item.*/
/*  *   - text: The visible text used for the item link, such as "‹ previous"*/
/*  *     or "next ›".*/
/*  * - current: The page number of the current page.*/
/*  * - ellipses: If there are more pages than the quantity allows, then an*/
/*  *   ellipsis before or after the listed pages may be present.*/
/*  *   - previous: Present if the currently visible list of pages does not start*/
/*  *     at the first page.*/
/*  *   - next: Present if the visible list of pages ends before the last page.*/
/*  **/
/*  * @see template_preprocess_pager()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if items %}*/
/*   <nav class="pager pager--full" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 id="pagination-heading" class="visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items">*/
/* */
/*       {# Print first item if we are not on the first page. #}*/
/*       {% if items.first %}*/
/*         <li class="pager__item pager__item--first">*/
/*           <a href="{{ items.first.href }}" class="pager__link" title="{{ 'Go to first page'|t }}"{{ items.first.attributes }}>*/
/*             <span class="visually-hidden">{{ 'First page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.first.text|default('« first'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {# Print previous item if we are not on the first page. #}*/
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous">*/
/*           <a href="{{ items.previous.href }}" class="pager__link" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.previous.text|default('‹ previous'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {# Now generate the actual pager piece. #}*/
/*       {% for key, item in items.pages %}*/
/*         {%*/
/*           set classes = [*/
/*             'pager__item',*/
/*             'pager__item--num',*/
/*             loop.first ? 'pager__item--num-first',*/
/*             loop.last ? 'pager__item--num-last',*/
/*             current == key ? ' is-active' : ''*/
/*           ]*/
/*         %}*/
/*         <li class="{{ classes|join(' ')|trim }}">*/
/*           {% if current == key %}*/
/*             {% set title = 'Current page'|t %}*/
/*           {% else %}*/
/*             {% set title = 'Go to page @key'|t({'@key': key}) %}*/
/*           {% endif %}*/
/*           <a href="{{ item.href }}" class="pager__link{{ current == key ? ' pager__link--is-active' : '' }}" title="{{ title }}"{{ item.attributes }}>*/
/*             <span class="visually-hidden">{{ current == key ? 'Current page'|t : 'Page'|t }}</span>*/
/*             {# Add an ellipsis if there are further previous pages. #}*/
/*             {% if ellipses.previous and loop.first %}*/
/*               <span class="pager__ellipsis pager__ellipsis--before" role="presentation">&hellip;</span>*/
/*             {% endif %}*/
/*             {{- key -}}*/
/*             {# Add an ellipsis if there are further next pages. #}*/
/*             {% if ellipses.next and loop.last %}*/
/*               <span class="pager__ellipsis pager__ellipsis--after" role="presentation">&hellip;</span>*/
/*             {% endif %}*/
/*           </a>*/
/*         </li>*/
/*       {% endfor %}*/
/* */
/*       {# Print next item if we are not on the last page. #}*/
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next">*/
/*           <a href="{{ items.next.href }}" class="pager__link" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.next.text|default('next ›'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {# Print last item if we are not on the last page. #}*/
/*       {% if items.last %}*/
/*         <li class="pager__item pager__item--last">*/
/*           <a href="{{ items.last.href }}" class="pager__link" title="{{ 'Go to last page'|t }}"{{ items.last.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Last page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.last.text|default('last »'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
