<?php

/* themes/vm_adaptive/templates/page/page.html.twig */
class __TwigTemplate_f53ae4ceb605ad169e81cae5b28ff64bb417ded3753c444e97f53a6476508c7f extends Twig_Template
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
        // line 7
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("vm_adaptive/vm_adaptive.layout.page"), "html", null, true);
        echo "
<div";
        // line 8
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 9
        if (($this->getAttribute((isset($context["leaderboard__regions"]) ? $context["leaderboard__regions"] : null), "active", array()) == true)) {
            // line 10
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["leaderboard__wrapper_attributes"]) ? $context["leaderboard__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 11
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["leaderboard__container_attributes"]) ? $context["leaderboard__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 12
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "leaderboard", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 16
        echo "  ";
        if (($this->getAttribute((isset($context["header__regions"]) ? $context["header__regions"] : null), "active", array()) == true)) {
            // line 17
            echo "    <header";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header__wrapper_attributes"]) ? $context["header__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 18
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header__container_attributes"]) ? $context["header__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 19
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true);
            echo "
        ";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array()), "html", null, true);
            echo "
      </div>
    </header>
  ";
        }
        // line 24
        echo "  ";
        if (($this->getAttribute((isset($context["navbar__regions"]) ? $context["navbar__regions"] : null), "active", array()) == true)) {
            // line 25
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navbar__wrapper_attributes"]) ? $context["navbar__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 26
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["navbar__container_attributes"]) ? $context["navbar__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 27
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navbar", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 31
        echo "  ";
        if (($this->getAttribute((isset($context["highlighted__regions"]) ? $context["highlighted__regions"] : null), "active", array()) == true)) {
            // line 32
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted__wrapper_attributes"]) ? $context["highlighted__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 33
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["highlighted__container_attributes"]) ? $context["highlighted__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 34
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 38
        echo "  ";
        if (($this->getAttribute((isset($context["features__regions"]) ? $context["features__regions"] : null), "active", array()) == true)) {
            // line 39
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["features__wrapper_attributes"]) ? $context["features__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 40
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["features__container_attributes"]) ? $context["features__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 41
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_first", array()), "html", null, true);
            echo "
        ";
            // line 42
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_second", array()), "html", null, true);
            echo "
        ";
            // line 43
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "features_third", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 47
        echo "  ";
        if (($this->getAttribute((isset($context["content_prefix__regions"]) ? $context["content_prefix__regions"] : null), "active", array()) == true)) {
            // line 48
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_prefix__wrapper_attributes"]) ? $context["content_prefix__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 49
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_prefix__container_attributes"]) ? $context["content_prefix__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 50
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_prefix", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 54
        echo "  ";
        if (($this->getAttribute((isset($context["main__regions"]) ? $context["main__regions"] : null), "active", array()) == true)) {
            // line 55
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main__wrapper_attributes"]) ? $context["main__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 56
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main__container_attributes"]) ? $context["main__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 57
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
            echo "
        ";
            // line 58
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
        ";
            // line 59
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 63
        echo "  ";
        if (($this->getAttribute((isset($context["content_suffix__regions"]) ? $context["content_suffix__regions"] : null), "active", array()) == true)) {
            // line 64
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_suffix__wrapper_attributes"]) ? $context["content_suffix__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 65
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_suffix__container_attributes"]) ? $context["content_suffix__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 66
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_suffix", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 70
        echo "  ";
        if (($this->getAttribute((isset($context["subfeatures__regions"]) ? $context["subfeatures__regions"] : null), "active", array()) == true)) {
            // line 71
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfeatures__wrapper_attributes"]) ? $context["subfeatures__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 72
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["subfeatures__container_attributes"]) ? $context["subfeatures__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 73
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_first", array()), "html", null, true);
            echo "
        ";
            // line 74
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_second", array()), "html", null, true);
            echo "
        ";
            // line 75
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_third", array()), "html", null, true);
            echo "
        ";
            // line 76
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "subfeatures_fourth", array()), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 80
        echo "  ";
        if (($this->getAttribute((isset($context["footer__regions"]) ? $context["footer__regions"] : null), "active", array()) == true)) {
            // line 81
            echo "    <footer";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer__wrapper_attributes"]) ? $context["footer__wrapper_attributes"] : null), "html", null, true);
            echo ">
      <div";
            // line 82
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer__container_attributes"]) ? $context["footer__container_attributes"] : null), "html", null, true);
            echo ">
        ";
            // line 83
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 87
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attribution"]) ? $context["attribution"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/vm_adaptive/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 87,  241 => 83,  237 => 82,  232 => 81,  229 => 80,  222 => 76,  218 => 75,  214 => 74,  210 => 73,  206 => 72,  201 => 71,  198 => 70,  191 => 66,  187 => 65,  182 => 64,  179 => 63,  172 => 59,  168 => 58,  164 => 57,  160 => 56,  155 => 55,  152 => 54,  145 => 50,  141 => 49,  136 => 48,  133 => 47,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  109 => 39,  106 => 38,  99 => 34,  95 => 33,  90 => 32,  87 => 31,  80 => 27,  76 => 26,  71 => 25,  68 => 24,  61 => 20,  57 => 19,  53 => 18,  48 => 17,  45 => 16,  38 => 12,  34 => 11,  29 => 10,  27 => 9,  23 => 8,  19 => 7,);
    }
}
/* {#*/
/* /***/
/*  * site-builder page template.*/
/*  * Generated on: Thu, 15 Oct 15 22:09:28 +1300*/
/*  *//* */
/* #}*/
/* {{ attach_library('vm_adaptive/vm_adaptive.layout.page') }}*/
/* <div{{ attributes }}>*/
/*   {% if leaderboard__regions.active == true %}*/
/*     <div{{ leaderboard__wrapper_attributes }}>*/
/*       <div{{ leaderboard__container_attributes }}>*/
/*         {{ page.leaderboard }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if header__regions.active == true %}*/
/*     <header{{ header__wrapper_attributes }}>*/
/*       <div{{ header__container_attributes }}>*/
/*         {{ page.header_first }}*/
/*         {{ page.header_second }}*/
/*       </div>*/
/*     </header>*/
/*   {% endif %}*/
/*   {% if navbar__regions.active == true %}*/
/*     <div{{ navbar__wrapper_attributes }}>*/
/*       <div{{ navbar__container_attributes }}>*/
/*         {{ page.navbar }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if highlighted__regions.active == true %}*/
/*     <div{{ highlighted__wrapper_attributes }}>*/
/*       <div{{ highlighted__container_attributes }}>*/
/*         {{ page.highlighted }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if features__regions.active == true %}*/
/*     <div{{ features__wrapper_attributes }}>*/
/*       <div{{ features__container_attributes }}>*/
/*         {{ page.features_first }}*/
/*         {{ page.features_second }}*/
/*         {{ page.features_third }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if content_prefix__regions.active == true %}*/
/*     <div{{ content_prefix__wrapper_attributes }}>*/
/*       <div{{ content_prefix__container_attributes }}>*/
/*         {{ page.content_prefix }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if main__regions.active == true %}*/
/*     <div{{ main__wrapper_attributes }}>*/
/*       <div{{ main__container_attributes }}>*/
/*         {{ page.content }}*/
/*         {{ page.sidebar_first }}*/
/*         {{ page.sidebar_second }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if content_suffix__regions.active == true %}*/
/*     <div{{ content_suffix__wrapper_attributes }}>*/
/*       <div{{ content_suffix__container_attributes }}>*/
/*         {{ page.content_suffix }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if subfeatures__regions.active == true %}*/
/*     <div{{ subfeatures__wrapper_attributes }}>*/
/*       <div{{ subfeatures__container_attributes }}>*/
/*         {{ page.subfeatures_first }}*/
/*         {{ page.subfeatures_second }}*/
/*         {{ page.subfeatures_third }}*/
/*         {{ page.subfeatures_fourth }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if footer__regions.active == true %}*/
/*     <footer{{ footer__wrapper_attributes }}>*/
/*       <div{{ footer__container_attributes }}>*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/*   {{ attribution }}*/
/* </div>*/
/* */
