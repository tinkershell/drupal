<?php

/* modules/tb_megamenu/templates/backend/tb-megamenu-item-toolbox.html.twig */
class __TwigTemplate_8704608aa1d6fca9c9a54e99a6fcf4210af0be9148984077cbc49be6bd615972 extends Twig_Template
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
        echo "<div id=\"tb-megamenu-admin-mm-toolitem\" class=\"admin-toolbox\">
  <h3>";
        // line 2
        echo $this->env->getExtension('drupal_core')->renderVar(t("Item Configuration"));
        echo " (<a href=\"#\" class=\"back-megamenu-toolbox\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("MegaMenu Toolbox"));
        echo "</a>)</h3>
  <p>";
        // line 3
        echo $this->env->getExtension('drupal_core')->renderVar(t("This allows you to configure each link you added in the Drupal core menu. You can: add block, have it styled by adding extra class, set icon (Bootstrap icons) and add description."));
        echo "</p>
  <ul id=\"toogle-submenu-wrapper\">
    <li>
      <label class=\"hasTip\" title=\"";
        // line 6
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Enable or disable submenu"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu"));
        echo "</label>
      <fieldset class=\"radio btn-group toolitem-sub\">
        <input type=\"radio\" id=\"toggleSub0\" class=\"toolbox-toggle\" data-action=\"toggleSub\" name=\"toggleSub\" value=\"0\" />
        <label for=\"toggleSub0\" title=\"";
        // line 9
        echo $this->env->getExtension('drupal_core')->renderVar(t("Disable submenu"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"toggleSub1\" class=\"toolbox-toggle\" data-action=\"toggleSub\" name=\"toggleSub\" value=\"1\" checked=\"checked\"/>
        <label for=\"toggleSub1\" title=\"";
        // line 11
        echo $this->env->getExtension('drupal_core')->renderVar(t("Enable submenu"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>
  <ul id=\"toogle-group-wrapper\">
    <li>
      <label class=\"hasTip\" title=\"";
        // line 17
        echo $this->env->getExtension('drupal_core')->renderVar(t("Group"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Configure how this item’s submenu display"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Group"));
        echo "</label>
      <fieldset class=\"radio btn-group toolitem-group\">
        <input type=\"radio\" id=\"toggleGroup0\" class=\"toolbox-toggle\" data-action=\"toggleGroup\" name=\"toggleGroup\" value=\"0\" checked=\"checked\"/>
        <label for=\"toggleGroup0\" title=\"";
        // line 20
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu items show only when hover/click on this tem."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"toggleGroup1\" class=\"toolbox-toggle\" data-action=\"toggleGroup\" name=\"toggleGroup\" value=\"1\"/>
        <label for=\"toggleGroup1\" title=\"";
        // line 22
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu items are visible under this item."));
        echo " \">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>
  <ul id=\"toogle-break-column-wrapper\">
    <li>
      <label class=\"hasTip\" title=\"";
        // line 28
        echo $this->env->getExtension('drupal_core')->renderVar(t("Break column"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Move the item to the left/right column, create new column if there’s none on the chosen side."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Break column"));
        echo "</label>
      <fieldset class=\"btn-group\">
        <a href=\"\" class=\"btn toolitem-moveleft toolbox-action\" data-action=\"moveItemsLeft\" title=\"";
        // line 30
        echo $this->env->getExtension('drupal_core')->renderVar(t("Move the items to the left column."));
        echo "\"><i class=\"icon-arrow-left\"></i></a>
        <a href=\"\" class=\"btn toolitem-moveright toolbox-action\" data-action=\"moveItemsRight\" title=\"";
        // line 31
        echo $this->env->getExtension('drupal_core')->renderVar(t("Move the items to the right column."));
        echo "\"><i class=\"icon-arrow-right\"></i></a>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 36
        echo $this->env->getExtension('drupal_core')->renderVar(t("Extra class"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add extra class to style megamenu."));
        echo "\">
      <label class=\"hasTip\">";
        // line 37
        echo $this->env->getExtension('drupal_core')->renderVar(t("Extra class"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-medium toolitem-exclass toolbox-input\" name=\"toolitem-exclass\" data-name=\"class\" value=\"\" />
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 44
        echo $this->env->getExtension('drupal_core')->renderVar(t("Icon"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add Icon for Menu Item. Click Icon label to visit Bootstrap icons page and get Icon Class. E.g.: icon-search"));
        echo "\">
      <label class=\"hasTip\">
        <a href=\"http://twitter.github.com/bootstrap/base-css.html#icons\" target=\"_blank\"><i class=\"icon-search\"></i>";
        // line 46
        echo $this->env->getExtension('drupal_core')->renderVar(t("Icon"));
        echo "</a>
      </label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-medium toolitem-xicon toolbox-input\" name=\"toolitem-xicon\" data-name=\"xicon\" value=\"\" />
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 54
        echo $this->env->getExtension('drupal_core')->renderVar(t("Item caption"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add caption to this item"));
        echo "\">
      <label class=\"hasTip\">
        ";
        // line 56
        echo $this->env->getExtension('drupal_core')->renderVar(t("Item caption"));
        echo "
      </label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-large toolitem-caption toolbox-input\" name=\"toolitem-caption\" data-name=\"caption\" value=\"\" />
      </fieldset>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-item-toolbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  145 => 54,  134 => 46,  127 => 44,  117 => 37,  111 => 36,  103 => 31,  99 => 30,  90 => 28,  79 => 22,  72 => 20,  62 => 17,  51 => 11,  44 => 9,  34 => 6,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="tb-megamenu-admin-mm-toolitem" class="admin-toolbox">*/
/*   <h3>{{ 'Item Configuration'|t }} (<a href="#" class="back-megamenu-toolbox">{{ 'MegaMenu Toolbox'|t }}</a>)</h3>*/
/*   <p>{{ 'This allows you to configure each link you added in the Drupal core menu. You can: add block, have it styled by adding extra class, set icon (Bootstrap icons) and add description.'|t }}</p>*/
/*   <ul id="toogle-submenu-wrapper">*/
/*     <li>*/
/*       <label class="hasTip" title="{{ 'Submenu'|t }} - {{ 'Enable or disable submenu'|t }}">{{ 'Submenu'|t }}</label>*/
/*       <fieldset class="radio btn-group toolitem-sub">*/
/*         <input type="radio" id="toggleSub0" class="toolbox-toggle" data-action="toggleSub" name="toggleSub" value="0" />*/
/*         <label for="toggleSub0" title="{{ 'Disable submenu'|t }}">{{ 'No'|t }}</label>*/
/*         <input type="radio" id="toggleSub1" class="toolbox-toggle" data-action="toggleSub" name="toggleSub" value="1" checked="checked"/>*/
/*         <label for="toggleSub1" title="{{ 'Enable submenu'|t }}">{{ 'Yes'|t }}</label>*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul id="toogle-group-wrapper">*/
/*     <li>*/
/*       <label class="hasTip" title="{{ 'Group'|t }} - {{ 'Configure how this item’s submenu display'|t }}">{{ 'Group'|t }}</label>*/
/*       <fieldset class="radio btn-group toolitem-group">*/
/*         <input type="radio" id="toggleGroup0" class="toolbox-toggle" data-action="toggleGroup" name="toggleGroup" value="0" checked="checked"/>*/
/*         <label for="toggleGroup0" title="{{ 'Submenu items show only when hover/click on this tem.'|t }}">{{ 'No'|t }}</label>*/
/*         <input type="radio" id="toggleGroup1" class="toolbox-toggle" data-action="toggleGroup" name="toggleGroup" value="1"/>*/
/*         <label for="toggleGroup1" title="{{ 'Submenu items are visible under this item.'|t }} ">{{ 'Yes'|t }}</label>*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul id="toogle-break-column-wrapper">*/
/*     <li>*/
/*       <label class="hasTip" title="{{ 'Break column'|t }} - {{ 'Move the item to the left/right column, create new column if there’s none on the chosen side.'|t }}">{{ 'Break column'|t }}</label>*/
/*       <fieldset class="btn-group">*/
/*         <a href="" class="btn toolitem-moveleft toolbox-action" data-action="moveItemsLeft" title="{{ 'Move the items to the left column.'|t }}"><i class="icon-arrow-left"></i></a>*/
/*         <a href="" class="btn toolitem-moveright toolbox-action" data-action="moveItemsRight" title="{{ 'Move the items to the right column.'|t }}"><i class="icon-arrow-right"></i></a>*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul>*/
/*     <li title="{{ 'Extra class'|t }} - {{ 'Add extra class to style megamenu.'|t }}">*/
/*       <label class="hasTip">{{ 'Extra class'|t }}</label>*/
/*       <fieldset class="">*/
/*         <input type="text" class="input-medium toolitem-exclass toolbox-input" name="toolitem-exclass" data-name="class" value="" />*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul>*/
/*     <li title="{{ 'Icon'|t }} - {{ 'Add Icon for Menu Item. Click Icon label to visit Bootstrap icons page and get Icon Class. E.g.: icon-search'|t }}">*/
/*       <label class="hasTip">*/
/*         <a href="http://twitter.github.com/bootstrap/base-css.html#icons" target="_blank"><i class="icon-search"></i>{{ 'Icon'|t }}</a>*/
/*       </label>*/
/*       <fieldset class="">*/
/*         <input type="text" class="input-medium toolitem-xicon toolbox-input" name="toolitem-xicon" data-name="xicon" value="" />*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul>*/
/*     <li title="{{ 'Item caption'|t }} - {{ 'Add caption to this item'|t }}">*/
/*       <label class="hasTip">*/
/*         {{ 'Item caption'|t }}*/
/*       </label>*/
/*       <fieldset class="">*/
/*         <input type="text" class="input-large toolitem-caption toolbox-input" name="toolitem-caption" data-name="caption" value="" />*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/* </div>*/
/* */
