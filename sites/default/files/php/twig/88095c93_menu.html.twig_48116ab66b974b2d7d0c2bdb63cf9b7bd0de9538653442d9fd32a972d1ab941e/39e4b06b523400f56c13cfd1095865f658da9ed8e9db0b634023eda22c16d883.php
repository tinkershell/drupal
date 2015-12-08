<?php

/* themes/adaptivetheme/at_core/templates/menu/menu.html.twig */
class __TwigTemplate_a2a4d1a9ab1959ec1f7f461ad0809d5ee4762db02c4b880d39454f7a8f4382ac extends Twig_Template
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 33
                    echo "      ";
                    // line 34
                    $context["menu_classes"] = array(0 => "menu", 1 => "odd", 2 => "menu-level-1");
                    // line 40
                    echo "      <ul";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 42
                    echo "      <ul class=\"menu ";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["menu_level"]) ? $context["menu_level"] : null)), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, ("menu-level-" . ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)), "html", null, true);
                    echo "\">
    ";
                }
                // line 44
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "        ";
                    // line 46
                    $context["item_classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 48
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 49
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 50
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")));
                    // line 53
                    echo "        ";
                    ob_start();
                    // line 54
                    echo "          <li";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true);
                    echo ">
            ";
                    // line 55
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array())), "html", null, true);
                    echo "
            ";
                    // line 56
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 57
                        echo "              ";
                        echo $this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)));
                        echo "
            ";
                    }
                    // line 59
                    echo "          </li>
        ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 61
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 62,  108 => 61,  104 => 59,  98 => 57,  96 => 56,  92 => 55,  87 => 54,  84 => 53,  82 => 50,  81 => 49,  80 => 48,  79 => 46,  77 => 45,  72 => 44,  64 => 42,  58 => 40,  56 => 34,  54 => 33,  51 => 32,  48 => 31,  45 => 30,  31 => 29,  24 => 27,  21 => 22,  19 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a menu.*/
/*  * AT adds extra classes including menu-level, and odd*/
/*  * even classes for granular theming of nested menus where*/
/*  * nth-child() or other pseudo classes are tricky.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       {%*/
/*         set menu_classes = [*/
/*           'menu',*/
/*           'odd',*/
/*           'menu-level-1',*/
/*         ]*/
/*       %}*/
/*       <ul{{ attributes.addClass(menu_classes) }}>*/
/*     {% else %}*/
/*       <ul class="menu {{ cycle(["odd", "even"], menu_level) }} {{ 'menu-level-' ~ (menu_level + 1) }}">*/
/*     {% endif %}*/
/*       {% for item in items %}*/
/*         {%*/
/*           set item_classes = [*/
/*             'menu-item',*/
/*             item.is_expanded ? 'menu-item--expanded',*/
/*             item.is_collapsed ? 'menu-item--collapsed',*/
/*             item.in_active_trail ? 'menu-item--active-trail',*/
/*           ]*/
/*         %}*/
/*         {% spaceless %}*/
/*           <li{{ item.attributes.addClass(item_classes) }}>*/
/*             {{ link(item.title, item.url) }}*/
/*             {% if item.below %}*/
/*               {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endspaceless %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
