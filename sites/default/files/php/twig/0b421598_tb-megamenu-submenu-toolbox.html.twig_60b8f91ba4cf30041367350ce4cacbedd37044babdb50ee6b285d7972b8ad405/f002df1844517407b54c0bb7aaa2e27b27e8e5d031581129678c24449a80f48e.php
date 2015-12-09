<?php

/* modules/tb_megamenu/templates/backend/tb-megamenu-submenu-toolbox.html.twig */
class __TwigTemplate_0cd9cac3be354b3f1e036b6aaf1242ba675a5b0ff16054870c1e275ea7407765 extends Twig_Template
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
        echo "<div id=\"tb-megamenu-admin-mm-toolsub\" class=\"admin-toolbox\">
  <h3>";
        // line 2
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu Configuration"));
        echo " (<a href=\"#\" class=\"back-megamenu-toolbox\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("MegaMenu Toolbox"));
        echo "</a>)</h3>
  <p>";
        // line 3
        echo $this->env->getExtension('drupal_core')->renderVar(t("Contains all the level 2+ items. Allows you to: add and remove row, set the submenu’s position, have it styled, edit its width..."));
        echo "</p>
  <ul>
    <li title=\"";
        // line 5
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add row"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add a new row to the selected submenu"));
        echo "\">
      <label class=\"hasTip\"> ";
        // line 6
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add row"));
        echo " </label>
      <fieldset class=\"btn-group\">
        <a href=\"\" class=\"btn toolsub-addrow toolbox-action\" data-action=\"addRow\"><i class=\"icon-plus\"></i></a>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li>
      <label class=\"hasTip\" title=\"";
        // line 14
        echo $this->env->getExtension('drupal_core')->renderVar(t("Hide when collapse"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Hide this column when the menu is collapsed on small screens"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Hide when collapse"));
        echo "</label>
      <fieldset class=\"radio btn-group toolsub-hidewhencollapse\">
        <input type=\"radio\" id=\"togglesubHideWhenCollapse0\" class=\"toolbox-toggle\" data-action=\"hideWhenCollapse\" name=\"togglesubHideWhenCollapse\" value=\"0\" checked=\"checked\"/>
        <label for=\"togglesubHideWhenCollapse0\" title=\"";
        // line 17
        echo $this->env->getExtension('drupal_core')->renderVar(t("Keep showing this submenu when the menu is collapsed on small screens"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"togglesubHideWhenCollapse1\" class=\"toolbox-toggle\" data-action=\"hideWhenCollapse\" name=\"togglesubHideWhenCollapse\" value=\"1\"/>
        <label for=\"togglesubHideWhenCollapse1\" title=\"";
        // line 19
        echo $this->env->getExtension('drupal_core')->renderVar(t("Hide this submenu when the menu is collapsed on small screens"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>                    
  <ul>
    <li title=\"";
        // line 24
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu width (px)"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Set submenu width (in pixel), this field must be a integer"));
        echo "\">
      <label class=\"hasTip\">";
        // line 25
        echo $this->env->getExtension('drupal_core')->renderVar(t("Submenu width (px)"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"toolsub-width toolbox-input input-small\" name=\"toolsub-width\" data-name=\"width\" value=\"\" />
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 32
        echo $this->env->getExtension('drupal_core')->renderVar(t("Alignment"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Align this submenu"));
        echo "\">
      <label class=\"hasTip\">";
        // line 33
        echo $this->env->getExtension('drupal_core')->renderVar(t("Alignment"));
        echo "</label>
      <fieldset class=\"toolsub-alignment\">
        <div class=\"btn-group\">
        <a class=\"btn toolsub-align-left toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"left\" title=\"";
        // line 36
        echo $this->env->getExtension('drupal_core')->renderVar(t("Left"));
        echo "\"><i class=\"icon-align-left\"></i></a>
        <a class=\"btn toolsub-align-right toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"right\" title=\"";
        // line 37
        echo $this->env->getExtension('drupal_core')->renderVar(t("Right"));
        echo "\"><i class=\"icon-align-right\"></i></a>
        <a class=\"btn toolsub-align-center toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"center\" title=\"";
        // line 38
        echo $this->env->getExtension('drupal_core')->renderVar(t("Center"));
        echo "\"><i class=\"icon-align-center\"></i></a>
        <a class=\"btn toolsub-align-justify toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"justify\" title=\"";
        // line 39
        echo $this->env->getExtension('drupal_core')->renderVar(t("Justify"));
        echo "\"><i class=\"icon-align-justify\"></i></a>
        </div>
      </fieldset>
    </li>
  </ul>          
  <ul>
    <li title=\"";
        // line 45
        echo $this->env->getExtension('drupal_core')->renderVar(t("Extra class"));
        echo " - ";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Add extra class to style megamenu"));
        echo "\">
      <label class=\"hasTip\">";
        // line 46
        echo $this->env->getExtension('drupal_core')->renderVar(t("Extra class"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"toolsub-exclass toolbox-input input-medium\" name=\"toolsub-exclass\" data-name=\"class\" value=\"\" />
      </fieldset>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-submenu-toolbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  126 => 45,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  99 => 33,  93 => 32,  83 => 25,  77 => 24,  67 => 19,  60 => 17,  50 => 14,  39 => 6,  33 => 5,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="tb-megamenu-admin-mm-toolsub" class="admin-toolbox">*/
/*   <h3>{{ 'Submenu Configuration'|t }} (<a href="#" class="back-megamenu-toolbox">{{ 'MegaMenu Toolbox'|t }}</a>)</h3>*/
/*   <p>{{ 'Contains all the level 2+ items. Allows you to: add and remove row, set the submenu’s position, have it styled, edit its width...'|t }}</p>*/
/*   <ul>*/
/*     <li title="{{ 'Add row'|t }} - {{ 'Add a new row to the selected submenu'|t }}">*/
/*       <label class="hasTip"> {{ 'Add row'|t }} </label>*/
/*       <fieldset class="btn-group">*/
/*         <a href="" class="btn toolsub-addrow toolbox-action" data-action="addRow"><i class="icon-plus"></i></a>*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul>*/
/*     <li>*/
/*       <label class="hasTip" title="{{ 'Hide when collapse'|t }} - {{ 'Hide this column when the menu is collapsed on small screens'|t }}">{{ 'Hide when collapse'|t }}</label>*/
/*       <fieldset class="radio btn-group toolsub-hidewhencollapse">*/
/*         <input type="radio" id="togglesubHideWhenCollapse0" class="toolbox-toggle" data-action="hideWhenCollapse" name="togglesubHideWhenCollapse" value="0" checked="checked"/>*/
/*         <label for="togglesubHideWhenCollapse0" title="{{ 'Keep showing this submenu when the menu is collapsed on small screens'|t }}">{{ 'No'|t }}</label>*/
/*         <input type="radio" id="togglesubHideWhenCollapse1" class="toolbox-toggle" data-action="hideWhenCollapse" name="togglesubHideWhenCollapse" value="1"/>*/
/*         <label for="togglesubHideWhenCollapse1" title="{{ 'Hide this submenu when the menu is collapsed on small screens'|t }}">{{ 'Yes'|t }}</label>*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>                    */
/*   <ul>*/
/*     <li title="{{ 'Submenu width (px)'|t }} - {{ 'Set submenu width (in pixel), this field must be a integer'|t }}">*/
/*       <label class="hasTip">{{ 'Submenu width (px)'|t }}</label>*/
/*       <fieldset class="">*/
/*         <input type="text" class="toolsub-width toolbox-input input-small" name="toolsub-width" data-name="width" value="" />*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/*   <ul>*/
/*     <li title="{{ 'Alignment'|t }} - {{ 'Align this submenu'|t }}">*/
/*       <label class="hasTip">{{ 'Alignment'|t }}</label>*/
/*       <fieldset class="toolsub-alignment">*/
/*         <div class="btn-group">*/
/*         <a class="btn toolsub-align-left toolbox-action" href="#" data-action="alignment" data-align="left" title="{{ 'Left'|t }}"><i class="icon-align-left"></i></a>*/
/*         <a class="btn toolsub-align-right toolbox-action" href="#" data-action="alignment" data-align="right" title="{{ 'Right'|t }}"><i class="icon-align-right"></i></a>*/
/*         <a class="btn toolsub-align-center toolbox-action" href="#" data-action="alignment" data-align="center" title="{{ 'Center'|t }}"><i class="icon-align-center"></i></a>*/
/*         <a class="btn toolsub-align-justify toolbox-action" href="#" data-action="alignment" data-align="justify" title="{{ 'Justify'|t }}"><i class="icon-align-justify"></i></a>*/
/*         </div>*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>          */
/*   <ul>*/
/*     <li title="{{ 'Extra class'|t }} - {{ 'Add extra class to style megamenu'|t }}">*/
/*       <label class="hasTip">{{ 'Extra class'|t }}</label>*/
/*       <fieldset class="">*/
/*         <input type="text" class="toolsub-exclass toolbox-input input-medium" name="toolsub-exclass" data-name="class" value="" />*/
/*       </fieldset>*/
/*     </li>*/
/*   </ul>*/
/* </div>*/
/* */
