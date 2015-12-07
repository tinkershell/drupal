<?php

/* core/themes/seven/templates/maintenance-page.html.twig */
class __TwigTemplate_2c9aa02c8abadf546af8425369b446cdaf95ea693660cef96aa87684d2d37316 extends Twig_Template
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
        // line 12
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 15
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 16
            echo "      <h1 class=\"page-title\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 18
        echo "  </header>

  ";
        // line 20
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 21
            echo "    <aside class=\"layout-sidebar-first\" role=\"complementary\">
      ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
    </aside>";
            // line 24
            echo "  ";
        }
        // line 25
        echo "
  <main role=\"main\">
    ";
        // line 27
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 28
            echo "      <h1>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 30
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "
    ";
        // line 31
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
  </main>

  ";
        // line 34
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array())) {
            // line 35
            echo "    <footer role=\"contentinfo\">
      ";
            // line 36
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_bottom", array()), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 39
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 39,  76 => 36,  73 => 35,  71 => 34,  65 => 31,  60 => 30,  54 => 28,  52 => 27,  48 => 25,  45 => 24,  41 => 22,  38 => 21,  36 => 20,  32 => 18,  26 => 16,  24 => 15,  19 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Seven's theme implementation to display a single Drupal page while offline.*/
/*  **/
/*  * All available variables are mirrored in page.html.twig.*/
/*  * Some may be blank but they are provided for consistency.*/
/*  **/
/*  * @see template_preprocess_maintenance_page()*/
/*  *//* */
/* #}*/
/* <div class="layout-container">*/
/* */
/*   <header role="banner">*/
/*     {% if site_name %}*/
/*       <h1 class="page-title">{{ site_name }}</h1>*/
/*     {% endif %}*/
/*   </header>*/
/* */
/*   {% if page.sidebar_first %}*/
/*     <aside class="layout-sidebar-first" role="complementary">*/
/*       {{ page.sidebar_first }}*/
/*     </aside>{# /.layout-sidebar-first #}*/
/*   {% endif %}*/
/* */
/*   <main role="main">*/
/*     {% if title %}*/
/*       <h1>{{ title }}</h1>*/
/*     {% endif %}*/
/*     {{ page.highlighted }}*/
/*     {{ page.content }}*/
/*   </main>*/
/* */
/*   {% if page.page_bottom %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.page_bottom }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
