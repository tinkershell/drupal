<?php

/* themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_74901b79ba7e7ac2e21ce8c3f580ef8dff108c83d54258794c9dcd358c78f25f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        $context["classes"] = array(0 => "block", 1 => "block-branding", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 23
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 24
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 4 => ((        // line 25
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 28
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  <div class=\"block__inner block-branding__inner\">

    ";
        // line 31
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 32
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 33
            echo "      <h2";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title"), "method"), "html", null, true);
            echo "><span>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</span></h2>
    ";
        }
        // line 35
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
  </div>
</div>
";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "      <div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content", 1 => "block-branding__content", 2 => "site-branding"), "method"), "html", null, true);
        echo ">
        ";
        // line 39
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 40
            echo "          <a href=\"";
            echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__logo-link\">
            <img src=\"";
            // line 41
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" itemprop=\"logo\" class=\"site-branding__logo-img\" />
          </a>
        ";
        }
        // line 44
        echo "        ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 45
            echo "          <span class=\"site-branding__text\">
            ";
            // line 46
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 47
                echo "              <strong class=\"site-branding__name\">
                <a href=\"";
                // line 48
                echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getUrl("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                echo "\" itemprop=\"url\" rel=\"home\" class=\"site-branding__name-link\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null));
                echo "</a>
              </strong>
            ";
            }
            // line 51
            echo "            ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 52
                echo "              <em class=\"site-branding__slogan\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "</em>
            ";
            }
            // line 54
            echo "          </span>
        ";
        }
        // line 56
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 56,  116 => 54,  110 => 52,  107 => 51,  97 => 48,  94 => 47,  92 => 46,  89 => 45,  86 => 44,  78 => 41,  71 => 40,  69 => 39,  64 => 38,  61 => 37,  54 => 58,  52 => 37,  46 => 35,  38 => 33,  36 => 32,  32 => 31,  25 => 28,  23 => 25,  22 => 24,  21 => 23,  20 => 20,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for a branding block.*/
/*  **/
/*  * SEE: block.html.twig for more details on available variables.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-branding',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*     label ? 'has-title'*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   <div class="block__inner block-branding__inner">*/
/* */
/*     {{ title_prefix }}*/
/*     {% if label %}*/
/*       <h2{{ title_attributes.addClass('block__title') }}><span>{{ label }}</span></h2>*/
/*     {% endif %}*/
/*     {{ title_suffix }}*/
/* */
/*     {% block content %}*/
/*       <div{{ content_attributes.addClass('block__content', 'block-branding__content', 'site-branding') }}>*/
/*         {% if site_logo %}*/
/*           <a href="{{ url('<front>') }}" title="{{ 'Home'|t }}" itemprop="url" rel="home" class="site-branding__logo-link">*/
/*             <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" itemprop="logo" class="site-branding__logo-img" />*/
/*           </a>*/
/*         {% endif %}*/
/*         {% if site_name or site_slogan %}*/
/*           <span class="site-branding__text">*/
/*             {% if site_name %}*/
/*               <strong class="site-branding__name">*/
/*                 <a href="{{ url('<front>') }}" title="{{ 'Home'|t }}" itemprop="url" rel="home" class="site-branding__name-link">{{ site_name|e }}</a>*/
/*               </strong>*/
/*             {% endif %}*/
/*             {% if site_slogan %}*/
/*               <em class="site-branding__slogan">{{ site_slogan }}</em>*/
/*             {% endif %}*/
/*           </span>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*   </div>*/
/* </div>*/
/* */
