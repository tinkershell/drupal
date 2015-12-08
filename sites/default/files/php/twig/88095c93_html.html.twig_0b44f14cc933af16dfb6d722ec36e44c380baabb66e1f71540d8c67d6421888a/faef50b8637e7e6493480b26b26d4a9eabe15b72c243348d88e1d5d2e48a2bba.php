<?php

/* themes/adaptivetheme/at_core/templates/system/html.html.twig */
class __TwigTemplate_90c8b911a707af6013bcd067cf548d14443b0266bc522493814ef2cfd11e9bf7 extends Twig_Template
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
        // line 40
        $context["body_classes"] = array(0 => ((        // line 41
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 42
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 43
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => (($this->getAttribute(        // line 44
(isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())) ? (("site-name-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["head_title_array"]) ? $context["head_title_array"] : null), "name", array())))) : ("")), 4 => (($this->getAttribute(        // line 45
(isset($context["theme"]) ? $context["theme"] : null), "name", array())) ? (("theme-name-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())))) : ("")), 5 => ((        // line 46
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")));
        // line 49
        echo "<!DOCTYPE html>
<html";
        // line 50
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    ";
        // line 52
        if (((isset($context["touch_icons"]) ? $context["touch_icons"] : null) == true)) {
            // line 53
            echo "      ";
            if ((isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null)) {
                echo "<link href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad_retina"]) ? $context["touch_icon_ipad_retina"] : null), "html", null, true);
                echo "\" rel=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true);
                echo "\" sizes=\"152x152\" />";
            }
            // line 54
            echo "      ";
            if ((isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null)) {
                echo "<link href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_iphone_retina"]) ? $context["touch_icon_iphone_retina"] : null), "html", null, true);
                echo "\" rel=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true);
                echo "\" sizes=\"120x120\" />";
            }
            // line 55
            echo "      ";
            if ((isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null)) {
                echo "<link href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_ipad"]) ? $context["touch_icon_ipad"] : null), "html", null, true);
                echo "\" rel=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true);
                echo "\" sizes=\"76x76\" />";
            }
            // line 56
            echo "      ";
            if ((isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null)) {
                echo "<link href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_default"]) ? $context["touch_icon_default"] : null), "html", null, true);
                echo "\" rel=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_rel"]) ? $context["touch_rel"] : null), "html", null, true);
                echo "\" sizes=\"60x60\" />";
            }
            // line 57
            echo "      ";
            if ((isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null)) {
                echo "<link href=\"";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["touch_icon_nokia"]) ? $context["touch_icon_nokia"] : null), "html", null, true);
                echo "\" rel=\"shortcut icon\" />";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "    <head-placeholder token=\"";
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
    <title>";
        // line 60
        echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | "));
        echo "</title>
    ";
        // line 61
        if ((isset($context["googlefonts_url"]) ? $context["googlefonts_url"] : null)) {
            // line 62
            echo "      <link href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["googlefonts_url"]) ? $context["googlefonts_url"] : null), "html", null, true);
            echo "\" rel='stylesheet' type='text/css'>
    ";
        }
        // line 64
        echo "    ";
        if ((isset($context["typekit_id"]) ? $context["typekit_id"] : null)) {
            // line 65
            echo "      <script src=\"//use.typekit.net/";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["typekit_id"]) ? $context["typekit_id"] : null), "html", null, true);
            echo ".js\"></script>
      <script>try{Typekit.load();}catch(e){}</script>
    ";
        }
        // line 68
        echo "    <css-placeholder token=\"";
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
    <js-placeholder token=\"";
        // line 69
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
  </head>
  <body";
        // line 71
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true);
        echo ">
    <a href=\"";
        // line 72
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["skip_link_target"]) ? $context["skip_link_target"] : null), "html", null, true);
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Skip to main content"));
        echo "</a>
    ";
        // line 73
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 74
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
        echo "
    ";
        // line 75
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 76
        echo $this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 76,  138 => 75,  134 => 74,  130 => 73,  124 => 72,  120 => 71,  115 => 69,  110 => 68,  103 => 65,  100 => 64,  94 => 62,  92 => 61,  88 => 60,  83 => 59,  80 => 58,  73 => 57,  64 => 56,  55 => 55,  46 => 54,  37 => 53,  35 => 52,  30 => 50,  27 => 49,  25 => 46,  24 => 45,  23 => 44,  22 => 43,  21 => 42,  20 => 41,  19 => 40,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for the basic structure of a single Drupal page.*/
/*  **/
/*  * Variables:*/
/*  * - placeholder_token: The token for generating head, css, js and js-bottom*/
/*  *   placeholders.*/
/*  * - head_title: A modified version of the page title, for use in the TITLE tag.*/
/*  * - head_title_array: List of text elements that make up the head_title*/
/*  *   variable. May contain or more of the following:*/
/*  *   - title: The title of the page.*/
/*  *   - name: The name of the site.*/
/*  *   - slogan: The slogan of the site.*/
/*  * - page_top: Initial rendered markup. This should be printed before 'page'.*/
/*  * - page: The rendered page markup.*/
/*  * - page_bottom: Closing rendered markup. This variable should be printed after*/
/*  *   'page'.*/
/*  * - db_offline: A flag indicating if the database is offline.*/
/*  * - touch_icons: bool, true if touch icons extension is enabled.*/
/*  * - touch_rel: string, defaults to apple-touch-icon, or apple-touch-icon-precomposed*/
/*  *   if set in appearance settings.*/
/*  * - touch_icon_ipad_retina: path to ipad retina touch icon.*/
/*  * - touch_icon_iphone_retina: path to iphone retina touch icon.*/
/*  * - touch_icon_ipad: path to ipad touch icon.*/
/*  * - touch_icon_default: path to old iphone touch icon.*/
/*  * - touch_icon_nokia: path to old school nokia touch icon.*/
/*  * - googlefonts_url: URL as supplied by the Google fonts wizard.*/
/*  * - typekit_id: Typekit ID as supplied by the Typekit embed wizard.*/
/*  * - theme: List (array) with two or more items, at least:*/
/*  *   - name: The name of the theme.*/
/*  *   - path: The path to the active theme.*/
/*  **/
/*  * @see template_preprocess_html()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set body_classes = [*/
/*     logged_in ? 'user-logged-in',*/
/*     not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,*/
/*     node_type ? 'node--type-' ~ node_type|clean_class,*/
/*     head_title_array.name ? 'site-name-' ~ head_title_array.name|clean_class,*/
/*     theme.name ? 'theme-name-' ~ theme.name|clean_class,*/
/*     db_offline ? 'db-offline',*/
/*   ]*/
/* %}*/
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*   <head>*/
/*     {% if touch_icons == true %}*/
/*       {% if touch_icon_ipad_retina %}<link href="{{ touch_icon_ipad_retina }}" rel="{{ touch_rel }}" sizes="152x152" />{% endif %}*/
/*       {% if touch_icon_iphone_retina %}<link href="{{ touch_icon_iphone_retina }}" rel="{{ touch_rel }}" sizes="120x120" />{% endif %}*/
/*       {% if touch_icon_ipad %}<link href="{{ touch_icon_ipad }}" rel="{{ touch_rel }}" sizes="76x76" />{% endif %}*/
/*       {% if touch_icon_default %}<link href="{{ touch_icon_default }}" rel="{{ touch_rel }}" sizes="60x60" />{% endif %}*/
/*       {% if touch_icon_nokia %}<link href="{{ touch_icon_nokia }}" rel="shortcut icon" />{% endif %}*/
/*     {% endif %}*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     {% if googlefonts_url %}*/
/*       <link href="{{ googlefonts_url }}" rel='stylesheet' type='text/css'>*/
/*     {% endif %}*/
/*     {% if typekit_id %}*/
/*       <script src="//use.typekit.net/{{ typekit_id }}.js"></script>*/
/*       <script>try{Typekit.load();}catch(e){}</script>*/
/*     {% endif %}*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*   </head>*/
/*   <body{{ attributes.addClass(body_classes) }}>*/
/*     <a href="{{ skip_link_target }}" class="visually-hidden focusable skip-link">{{ 'Skip to main content'|t }}</a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
