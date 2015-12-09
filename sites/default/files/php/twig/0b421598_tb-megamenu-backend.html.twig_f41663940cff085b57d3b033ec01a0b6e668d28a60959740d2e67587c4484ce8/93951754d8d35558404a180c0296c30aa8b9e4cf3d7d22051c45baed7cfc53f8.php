<?php

/* modules/tb_megamenu/templates/backend/tb-megamenu-backend.html.twig */
class __TwigTemplate_a2c05e2dfabb06fffe61cbd3955f02a2ffc648edffe9a7cfbd23dddd6900b6ab extends Twig_Template
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
        echo "<div id=\"tb-megamenu-admin\" class=\"hidden tb-megamenu-admin tb-megamenu\">
  <div class=\"admin-inline-toolbox clearfix\">
    <div class=\"tb-megamenu-admin-mm-row clearfix\">
      <div id=\"tb-megamenu-admin-mm-tb\">
        <div id=\"toolbox-loading\" class=\"toolbox-loading\">&nbsp;</div>
        <div id=\"toolbox-message\" class=\"toolbox-message\">&nbsp;</div>
        <div id=\"tb-megamenu-admin-mm-intro\" class=\"pull-left admin-toolbox\">
          <h3>";
        // line 8
        echo $this->env->getExtension('drupal_core')->renderVar(t("MegaMenu Toolbox"));
        echo "</h3>
          <p>";
        // line 9
        echo $this->env->getExtension('drupal_core')->renderVar(t("This toolbox includes all settings of megamenu, just select menu then configure. There are 3 level of configuration: sub-megamenu setting, column setting and menu item setting."));
        echo "</p>
          <ul>
            <li id=\"tb-megamenu-style-wrapper\" title=\"";
        // line 11
        echo $this->env->getExtension('drupal_core')->renderVar(t("Select style for this megamenu"));
        echo "\">
              <label class=\"hasTip\">";
        // line 12
        echo $this->env->getExtension('drupal_core')->renderVar(t("Style"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <select name=\"tb-megamenu-style\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["style_options"]) ? $context["style_options"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["title"]) {
            // line 17
            echo "                      <option value='";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true);
            echo "' ";
            echo $this->env->getExtension('drupal_core')->renderVar(((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "style", array(), "array") == $context["value"])) ? ("selected") : ("")));
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["title"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                  </select>
                </div>
              </fieldset>
            </li>
            <li id=\"tb-megamenu-animation-wrapper\" title=\"";
        // line 23
        echo $this->env->getExtension('drupal_core')->renderVar(t("Select animation for this megamenu - CSS3 Animation"));
        echo "\">
              <label class=\"hasTip\">";
        // line 24
        echo $this->env->getExtension('drupal_core')->renderVar(t("Animation"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <select name=\"tb-megamenu-animation\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["animation_options"]) ? $context["animation_options"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["title"]) {
            // line 29
            echo "                      <option value='";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true);
            echo "' ";
            echo $this->env->getExtension('drupal_core')->renderVar(((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "animation", array(), "array") == $context["value"])) ? ("selected") : ("")));
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["title"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                  </select>
                </div>
              </fieldset>
            </li>
            <li id=\"tb-megamenu-delay-wrapper\" style=\"display: ";
        // line 35
        echo $this->env->getExtension('drupal_core')->renderVar(((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "animation", array(), "array") == "none")) ? ("none") : ("inline-block")));
        echo ";\" title=\"";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Delay time of the animation - this field must be an integer."));
        echo "\">
              <label class=\"hasTip\">";
        // line 36
        echo $this->env->getExtension('drupal_core')->renderVar(t("Delay (ms)"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <input class=\"input-medium toolitem-delay toolbox-input\" name=\"tb-megamenu-delay\" type=\"text\" value=\"";
        // line 39
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "delay", array(), "array"), "html", null, true);
        echo "\" data-name=\"delay\"></input>
                </div>
              </fieldset>
            </li>
            <li id=\"tb-megamenu-duration-wrapper\" style=\"display: ";
        // line 43
        echo $this->env->getExtension('drupal_core')->renderVar(((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "animation", array(), "array") == "none")) ? ("none") : ("inline-block")));
        echo ";\" title=\"";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Duration of the animation - this field must be an integer."));
        echo "\">
              <label class=\"hasTip\">";
        // line 44
        echo $this->env->getExtension('drupal_core')->renderVar(t("Duration (ms)"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <input class=\"input-medium toolitem-duration toolbox-input\" name=\"tb-megamenu-duration\" type=\"text\" value=\"";
        // line 47
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "duration", array(), "array"), "html", null, true);
        echo "\" data-name=\"duration\"></input>
                </div>
              </fieldset>
            </li>
            <li>
              <label class=\"hasTip\" title=\"";
        // line 52
        echo $this->env->getExtension('drupal_core')->renderVar(t("Show/hide the arrow next to items that have submenu."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Auto arrow"));
        echo "</label>
              <fieldset class=\"radio btn-group toolitem-auto-arrow\" data-auto-arrow=\"";
        // line 53
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "auto-arrow", array(), "array"), "html", null, true);
        echo "\">
                <input type=\"radio\" ";
        // line 54
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "auto-arrow", array(), "array")) ? ("") : ("checked=\"checked\"")));
        echo " value=\"0\" name=\"tb-megamenu-auto-arrow\" data-action=\"toggleAutoArrow\" class=\"toolbox-toggle\" id=\"toggleAutoArrow0\">
                <label for=\"toggleAutoArrow0\" class=\"btn ";
        // line 55
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "auto-arrow", array(), "array")) ? ("") : ("active btn-danger")));
        echo "\" title=\"";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Hide the arrow next to items that have submenu."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("No"));
        echo "</label>
                <input type=\"radio\" ";
        // line 56
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "auto-arrow", array(), "array")) ? ("checked=\"checked\"") : ("")));
        echo " value=\"1\" name=\"tb-megamenu-auto-arrow\" data-action=\"toggleAutoArrow\" class=\"toolbox-toggle\" id=\"toggleAutoArrow1\">
                <label for=\"toggleAutoArrow1\" class=\"btn ";
        // line 57
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "auto-arrow", array(), "array")) ? ("active btn-success") : ("")));
        echo "\" title=\"";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Show the arrow next to items that have submenu."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Yes"));
        echo "</label>
              </fieldset>        
            </li>
            <li>
              <label class=\"hasTip\" title=\"";
        // line 61
        echo $this->env->getExtension('drupal_core')->renderVar(t("Show or collapse submenus when browsing on small screens"));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Always show submenu"));
        echo "</label>
              <fieldset class=\"radio btn-group toolitem-always-show-submenu\" data-always-show-submenu=\"";
        // line 62
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "always-show-submenu", array(), "array"), "html", null, true);
        echo "\">
                <input type=\"radio\" ";
        // line 63
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "always-show-submenu", array(), "array")) ? ("") : ("checked=\"checked\"")));
        echo " value=\"0\" name=\"tb-megamenu-always-show-submenu\" data-action=\"toggleAlwayShowSubmenu\" class=\"toolbox-toggle\" id=\"toggleAlwayShowSubmenu0\">
                <label for=\"toggleAlwayShowSubmenu0\" class=\"btn ";
        // line 64
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "always-show-submenu", array(), "array")) ? ("") : ("active btn-danger")));
        echo "\" title=\"";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Collapse submenus when browsing on small screens."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("No"));
        echo "</label>
                <input type=\"radio\" ";
        // line 65
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "always-show-submenu", array(), "array")) ? ("checked=\"checked\"") : ("")));
        echo " value=\"1\" name=\"tb-megamenu-always-show-submenu\" data-action=\"toggleAlwayShowSubmenu\" class=\"toolbox-toggle\" id=\"toggleAlwayShowSubmenu1\">
                <label for=\"toggleAlwayShowSubmenu1\" class=\"btn ";
        // line 66
        echo $this->env->getExtension('drupal_core')->renderVar((($this->getAttribute((isset($context["block_config"]) ? $context["block_config"] : null), "always-show-submenu", array(), "array")) ? ("active btn-success") : ("")));
        echo "\" title=\"";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Show submenus when browsing on small screens."));
        echo "\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Yes"));
        echo "</label>
              </fieldset>
            </li>
          </ul>
        </div>
        ";
        // line 71
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_toolbox"]) ? $context["item_toolbox"] : null), "html", null, true);
        echo "
        ";
        // line 72
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submenu_toolbox"]) ? $context["submenu_toolbox"] : null), "html", null, true);
        echo "
        ";
        // line 73
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["column_toolbox"]) ? $context["column_toolbox"] : null), "html", null, true);
        echo "
      </div>
      <div class=\"toolbox-actions-group\">
        <button class=\"btn btn-success toolbox-action toolbox-saveConfig\" data-action=\"saveConfig\"><i class=\"fa fa-save\"></i> ";
        // line 76
        echo $this->env->getExtension('drupal_core')->renderVar(t("Save"));
        echo "</button>
        <button class=\"btn btn-danger toolbox-action toolbox-resetConfig\" data-action=\"resetConfig\"><i class=\"fa fa-undo\"></i> ";
        // line 77
        echo $this->env->getExtension('drupal_core')->renderVar(t("Reset"));
        echo "</button>
      </div>
      <div class=\"toolbox-links-groups\">
        <a href=\"";
        // line 80
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["edit_links"]) ? $context["edit_links"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('drupal_core')->renderVar(t("Edit links"));
        echo "</a>
      </div>
    </div>
  </div>
  <div id=\"tb-megamenu-admin-mm-container\" class=\"navbar clearfix\">
    ";
        // line 85
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["menu_content"]) ? $context["menu_content"] : null), "html", null, true);
        echo "
  </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 85,  243 => 80,  237 => 77,  233 => 76,  227 => 73,  223 => 72,  219 => 71,  207 => 66,  203 => 65,  195 => 64,  191 => 63,  187 => 62,  181 => 61,  170 => 57,  166 => 56,  158 => 55,  154 => 54,  150 => 53,  144 => 52,  136 => 47,  130 => 44,  124 => 43,  117 => 39,  111 => 36,  105 => 35,  99 => 31,  86 => 29,  82 => 28,  75 => 24,  71 => 23,  65 => 19,  52 => 17,  48 => 16,  41 => 12,  37 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div id="tb-megamenu-admin" class="hidden tb-megamenu-admin tb-megamenu">*/
/*   <div class="admin-inline-toolbox clearfix">*/
/*     <div class="tb-megamenu-admin-mm-row clearfix">*/
/*       <div id="tb-megamenu-admin-mm-tb">*/
/*         <div id="toolbox-loading" class="toolbox-loading">&nbsp;</div>*/
/*         <div id="toolbox-message" class="toolbox-message">&nbsp;</div>*/
/*         <div id="tb-megamenu-admin-mm-intro" class="pull-left admin-toolbox">*/
/*           <h3>{{ 'MegaMenu Toolbox'|t }}</h3>*/
/*           <p>{{ 'This toolbox includes all settings of megamenu, just select menu then configure. There are 3 level of configuration: sub-megamenu setting, column setting and menu item setting.'|t }}</p>*/
/*           <ul>*/
/*             <li id="tb-megamenu-style-wrapper" title="{{ 'Select style for this megamenu'|t }}">*/
/*               <label class="hasTip">{{ 'Style'|t }}</label>*/
/*               <fieldset class="btn-group">*/
/*                 <div class="controls tb-controls">*/
/*                   <select name="tb-megamenu-style">*/
/*                     {% for value, title in style_options %}*/
/*                       <option value='{{ value }}' {{ block_config['style'] == value ? 'selected' : '' }}>{{ title }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </li>*/
/*             <li id="tb-megamenu-animation-wrapper" title="{{ 'Select animation for this megamenu - CSS3 Animation'|t }}">*/
/*               <label class="hasTip">{{ 'Animation'|t }}</label>*/
/*               <fieldset class="btn-group">*/
/*                 <div class="controls tb-controls">*/
/*                   <select name="tb-megamenu-animation">*/
/*                     {% for value, title in animation_options %}*/
/*                       <option value='{{ value }}' {{ block_config['animation'] == value ? 'selected' : '' }}>{{ title }}</option>*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </li>*/
/*             <li id="tb-megamenu-delay-wrapper" style="display: {{ block_config['animation'] == 'none' ? 'none' : 'inline-block' }};" title="{{ 'Delay time of the animation - this field must be an integer.'|t }}">*/
/*               <label class="hasTip">{{ 'Delay (ms)'|t }}</label>*/
/*               <fieldset class="btn-group">*/
/*                 <div class="controls tb-controls">*/
/*                   <input class="input-medium toolitem-delay toolbox-input" name="tb-megamenu-delay" type="text" value="{{ block_config['delay'] }}" data-name="delay"></input>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </li>*/
/*             <li id="tb-megamenu-duration-wrapper" style="display: {{ block_config['animation'] == 'none' ? 'none' : 'inline-block' }};" title="{{ 'Duration of the animation - this field must be an integer.'|t }}">*/
/*               <label class="hasTip">{{ 'Duration (ms)'|t }}</label>*/
/*               <fieldset class="btn-group">*/
/*                 <div class="controls tb-controls">*/
/*                   <input class="input-medium toolitem-duration toolbox-input" name="tb-megamenu-duration" type="text" value="{{ block_config['duration'] }}" data-name="duration"></input>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </li>*/
/*             <li>*/
/*               <label class="hasTip" title="{{ 'Show/hide the arrow next to items that have submenu.'|t }}">{{ 'Auto arrow'|t }}</label>*/
/*               <fieldset class="radio btn-group toolitem-auto-arrow" data-auto-arrow="{{ block_config['auto-arrow'] }}">*/
/*                 <input type="radio" {{ block_config['auto-arrow'] ? '' : 'checked="checked"' }} value="0" name="tb-megamenu-auto-arrow" data-action="toggleAutoArrow" class="toolbox-toggle" id="toggleAutoArrow0">*/
/*                 <label for="toggleAutoArrow0" class="btn {{ block_config['auto-arrow'] ? '' : 'active btn-danger' }}" title="{{ 'Hide the arrow next to items that have submenu.'|t }}">{{ 'No'|t }}</label>*/
/*                 <input type="radio" {{ block_config['auto-arrow'] ? 'checked="checked"' : '' }} value="1" name="tb-megamenu-auto-arrow" data-action="toggleAutoArrow" class="toolbox-toggle" id="toggleAutoArrow1">*/
/*                 <label for="toggleAutoArrow1" class="btn {{ block_config['auto-arrow'] ? 'active btn-success' : '' }}" title="{{ 'Show the arrow next to items that have submenu.'|t }}">{{ 'Yes'|t }}</label>*/
/*               </fieldset>        */
/*             </li>*/
/*             <li>*/
/*               <label class="hasTip" title="{{ 'Show or collapse submenus when browsing on small screens'|t }}">{{ 'Always show submenu'|t }}</label>*/
/*               <fieldset class="radio btn-group toolitem-always-show-submenu" data-always-show-submenu="{{ block_config['always-show-submenu'] }}">*/
/*                 <input type="radio" {{ block_config['always-show-submenu'] ? '' : 'checked="checked"' }} value="0" name="tb-megamenu-always-show-submenu" data-action="toggleAlwayShowSubmenu" class="toolbox-toggle" id="toggleAlwayShowSubmenu0">*/
/*                 <label for="toggleAlwayShowSubmenu0" class="btn {{ block_config['always-show-submenu'] ? '' : 'active btn-danger' }}" title="{{ 'Collapse submenus when browsing on small screens.'|t }}">{{ 'No'|t }}</label>*/
/*                 <input type="radio" {{ block_config['always-show-submenu'] ? 'checked="checked"' : '' }} value="1" name="tb-megamenu-always-show-submenu" data-action="toggleAlwayShowSubmenu" class="toolbox-toggle" id="toggleAlwayShowSubmenu1">*/
/*                 <label for="toggleAlwayShowSubmenu1" class="btn {{ block_config['always-show-submenu'] ? 'active btn-success' : '' }}" title="{{ 'Show submenus when browsing on small screens.'|t }}">{{ 'Yes'|t }}</label>*/
/*               </fieldset>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*         {{ item_toolbox }}*/
/*         {{ submenu_toolbox }}*/
/*         {{ column_toolbox }}*/
/*       </div>*/
/*       <div class="toolbox-actions-group">*/
/*         <button class="btn btn-success toolbox-action toolbox-saveConfig" data-action="saveConfig"><i class="fa fa-save"></i> {{ 'Save'|t }}</button>*/
/*         <button class="btn btn-danger toolbox-action toolbox-resetConfig" data-action="resetConfig"><i class="fa fa-undo"></i> {{ 'Reset'|t }}</button>*/
/*       </div>*/
/*       <div class="toolbox-links-groups">*/
/*         <a href="{{ edit_links }}" target="_blank">{{ 'Edit links'|t }}</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div id="tb-megamenu-admin-mm-container" class="navbar clearfix">*/
/*     {{ menu_content }}*/
/*   </div> */
/* </div>*/
/* */
