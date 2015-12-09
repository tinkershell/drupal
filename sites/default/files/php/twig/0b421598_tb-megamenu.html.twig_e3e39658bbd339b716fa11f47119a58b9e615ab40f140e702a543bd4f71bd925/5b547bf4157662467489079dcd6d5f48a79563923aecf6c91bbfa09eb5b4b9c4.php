<?php

/* modules/tb_megamenu/templates/tb-megamenu.html.twig */
class __TwigTemplate_0e59a1359348a414ae11615af705b6b9550d90fadffbae74be0f62ad3ba7853f extends Twig_Template
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
        // line 1
        if (array_key_exists("css_style", $context)) {
            // line 2
            echo "<style type=\"text/css\">
  .tb-megamenu.animate .mega > .mega-dropdown-menu, .tb-megamenu.animate.slide .mega > .mega-dropdown-menu > div {
  ";
            // line 4
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_style"]) ? $context["css_style"] : null), "html", null, true);
            echo "
  }
</style>
";
        }
        // line 8
        echo "<div ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 9
        if (((isset($context["section"]) ? $context["section"] : null) == "frontend")) {
            // line 10
            echo "    <button data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar tb-megamenu-button\" type=\"button\">
      <i class=\"fa fa-reorder\"></i>
    </button>
    <div class=\"nav-collapse ";
            // line 13
            echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "always-show-submenu", array(), "array")) ? (" always-show") : ("")));
            echo "\">
  ";
        }
        // line 15
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
        // line 16
        if (((isset($context["section"]) ? $context["section"] : null) == "frontend")) {
            // line 17
            echo "    </div>
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/tb-megamenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  56 => 17,  54 => 16,  49 => 15,  44 => 13,  39 => 10,  37 => 9,  32 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if css_style is defined %}*/
/* <style type="text/css">*/
/*   .tb-megamenu.animate .mega > .mega-dropdown-menu, .tb-megamenu.animate.slide .mega > .mega-dropdown-menu > div {*/
/*   {{ css_style }}*/
/*   }*/
/* </style>*/
/* {% endif %}*/
/* <div {{ attributes }}>*/
/*   {% if section == 'frontend' %}*/
/*     <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar tb-megamenu-button" type="button">*/
/*       <i class="fa fa-reorder"></i>*/
/*     </button>*/
/*     <div class="nav-collapse {{ block_config['always-show-submenu'] ? ' always-show' : '' }}">*/
/*   {% endif %}*/
/*   {{ content }}*/
/*   {% if section == 'frontend' %}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
