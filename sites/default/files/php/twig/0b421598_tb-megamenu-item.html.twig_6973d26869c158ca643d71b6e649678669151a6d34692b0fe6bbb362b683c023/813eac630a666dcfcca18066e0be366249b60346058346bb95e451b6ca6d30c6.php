<?php

/* modules/tb_megamenu/templates/tb-megamenu-item.html.twig */
class __TwigTemplate_85d8a5d9606cd89e4353b652140049635324930d69d46c0fcdbab9320151a51d extends Twig_Template
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
        echo "<li ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo " >
  <a href=\"";
        // line 2
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url", array(), "array"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "attributes", array(), "array"), "html", null, true);
        echo ">
    ";
        // line 3
        if ($this->getAttribute((isset($context["item_config"]) ? $context["item_config"] : null), "xicon", array(), "array")) {
            // line 4
            echo "      <i class=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["item_config"]) ? $context["item_config"] : null), "xicon", array(), "array"), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 6
        echo "    ";
        echo $this->env->getExtension('drupal_core')->renderVar(t($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "title", array(), "array")));
        echo "
    ";
        // line 7
        if (((isset($context["submenu"]) ? $context["submenu"] : null) && $this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "auto-arrow", array(), "array"))) {
            // line 8
            echo "      <span class=\"caret\"></span>
    ";
        }
        // line 10
        echo "    ";
        if ($this->getAttribute((isset($context["item_config"]) ? $context["item_config"] : null), "caption", array(), "array")) {
            // line 11
            echo "      <span class=\"mega-caption\"> ";
            echo $this->env->getExtension('drupal_core')->renderVar(t($this->getAttribute((isset($context["item_config"]) ? $context["item_config"] : null), "caption", array(), "array")));
            echo "</span>
    ";
        }
        // line 13
        echo "  </a>
  ";
        // line 14
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submenu"]) ? $context["submenu"] : null), "html", null, true);
        echo "
</li>";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/tb-megamenu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  58 => 13,  52 => 11,  49 => 10,  45 => 8,  43 => 7,  38 => 6,  32 => 4,  30 => 3,  24 => 2,  19 => 1,);
    }
}
/* <li {{ attributes }} >*/
/*   <a href="{{ link['url'] }}" {{ link['attributes'] }}>*/
/*     {% if  item_config['xicon'] %}*/
/*       <i class="{{ item_config['xicon'] }}"></i>*/
/*     {% endif %}*/
/*     {{ link['title']|t }}*/
/*     {% if submenu and block_config['auto-arrow'] %}*/
/*       <span class="caret"></span>*/
/*     {% endif %}*/
/*     {% if item_config['caption'] %}*/
/*       <span class="mega-caption"> {{ item_config['caption']|t }}</span>*/
/*     {% endif %}*/
/*   </a>*/
/*   {{ submenu }}*/
/* </li>*/
