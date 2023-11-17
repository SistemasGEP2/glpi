<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/user/info_card.html.twig */
class __TwigTemplate_1c1f0b9b1f6a9c7dfa93ca5d07c1a54c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["enable_anonymization"] = (($context["enable_anonymization"]) ?? (false));
        // line 35
        echo "
<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col pt-1\">
         ";
        // line 39
        if ((($__internal_compile_0 = ($context["user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null)) {
            // line 40
            echo "            ";
            echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($__internal_compile_1 =             // line 41
($context["user"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["id"] ?? null) : null), "enable_anonymization" =>             // line 42
($context["enable_anonymization"] ?? null)]);
            // line 43
            echo "
         ";
        }
        // line 45
        echo "      </div>
      <div class=\"col-auto ms-2\">
         <h4 class=\"card-title mb-1\">
            ";
        // line 48
        if ((($__internal_compile_2 = ($context["user"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)) {
            // line 49
            echo "               <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("User", (($__internal_compile_3 = ($context["user"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["user"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["user_name"] ?? null) : null), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 51
            echo "               ";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["user"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["user_name"] ?? null) : null), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "         </h4>

         <div class=\"text-muted\">
            ";
        // line 56
        if ((twig_length_filter($this->env, (($__internal_compile_6 = ($context["user"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["email"] ?? null) : null)) > 0)) {
            // line 57
            echo "               <div>
                  <i class=\"fas fa-fw fa-envelope\"></i>
                  <a href=\"mailto:";
            // line 59
            echo twig_escape_filter($this->env, (($__internal_compile_7 = ($context["user"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["email"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["user"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["email"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 62
        echo "            ";
        if (( !twig_test_empty((($__internal_compile_9 = ($context["user"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["phone"] ?? null) : null)) ||  !twig_test_empty((($__internal_compile_10 = ($context["user"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["phone2"] ?? null) : null)))) {
            // line 63
            echo "               <div>
                  ";
            // line 64
            if ( !twig_test_empty((($__internal_compile_11 = ($context["user"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["phone"] ?? null) : null))) {
                // line 65
                echo "                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:";
                // line 66
                echo twig_escape_filter($this->env, (($__internal_compile_12 = ($context["user"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["phone"] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_13 = ($context["user"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["phone"] ?? null) : null), "html", null, true);
                echo "</a>
                  ";
            }
            // line 68
            echo "                  ";
            if (( !twig_test_empty((($__internal_compile_14 = ($context["user"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["phone"] ?? null) : null)) &&  !twig_test_empty((($__internal_compile_15 = ($context["user"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["phone2"] ?? null) : null)))) {
                // line 69
                echo "                     <span> - </span>
                  ";
            }
            // line 71
            echo "                  ";
            if ( !twig_test_empty((($__internal_compile_16 = ($context["user"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["phone2"] ?? null) : null))) {
                // line 72
                echo "                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:";
                // line 73
                echo twig_escape_filter($this->env, (($__internal_compile_17 = ($context["user"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["phone2"] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_18 = ($context["user"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["phone2"] ?? null) : null), "html", null, true);
                echo "</a>
                  ";
            }
            // line 75
            echo "               </div>
            ";
        }
        // line 77
        echo "            ";
        if ((twig_length_filter($this->env, (($__internal_compile_19 = ($context["user"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["mobile"] ?? null) : null)) > 0)) {
            // line 78
            echo "               <div>
                  <i class=\"fas fa-fw fa-mobile\"></i>
                  <a href=\"tel:";
            // line 80
            echo twig_escape_filter($this->env, (($__internal_compile_20 = ($context["user"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["mobile"] ?? null) : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_21 = ($context["user"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["mobile"] ?? null) : null), "html", null, true);
            echo "</a>
               </div>
            ";
        }
        // line 83
        echo "            ";
        if (((($__internal_compile_22 = ($context["user"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["locations_id"] ?? null) : null) > 0)) {
            // line 84
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-map-marker-alt\"></i>
                  ";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Location", (($__internal_compile_23 = ($context["user"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["locations_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 89
        echo "            ";
        if (((($__internal_compile_24 = ($context["user"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["usertitles_id"] ?? null) : null) > 0)) {
            // line 90
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _x("person", "Title"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tie\"></i>
                  ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserTitle", (($__internal_compile_25 = ($context["user"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["usertitles_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 95
        echo "            ";
        if (((($__internal_compile_26 = ($context["user"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["usercategories_id"] ?? null) : null) > 0)) {
            // line 96
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tag\"></i>
                  ";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("UserCategory", (($__internal_compile_27 = ($context["user"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["usercategories_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 101
        echo "            ";
        if (((($__internal_compile_28 = ($context["user"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["groups_id"] ?? null) : null) > 0)) {
            // line 102
            echo "               <div title=\"";
            echo twig_escape_filter($this->env, __("Default group"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-users\"></i>
                  ";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Group", (($__internal_compile_29 = ($context["user"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["groups_id"] ?? null) : null)), "html", null, true);
            echo "
               </div>
            ";
        }
        // line 107
        echo "         </div>
      </div>

      ";
        // line 110
        if (($context["can_edit"] ?? null)) {
            // line 111
            echo "         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/preference.php"), "html", null, true);
            echo "\"
               title=\"";
            // line 113
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"fas fa-user-edit\"></i>
            </a>
         </div>
      ";
        }
        // line 118
        echo "   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/user/info_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 118,  230 => 113,  226 => 112,  223 => 111,  221 => 110,  216 => 107,  210 => 104,  204 => 102,  201 => 101,  195 => 98,  189 => 96,  186 => 95,  180 => 92,  174 => 90,  171 => 89,  165 => 86,  159 => 84,  156 => 83,  148 => 80,  144 => 78,  141 => 77,  137 => 75,  130 => 73,  127 => 72,  124 => 71,  120 => 69,  117 => 68,  110 => 66,  107 => 65,  105 => 64,  102 => 63,  99 => 62,  91 => 59,  87 => 57,  85 => 56,  80 => 53,  74 => 51,  66 => 49,  64 => 48,  59 => 45,  55 => 43,  53 => 42,  52 => 41,  50 => 40,  48 => 39,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2023 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set enable_anonymization = enable_anonymization ?? false %}

<div class=\"p-0 user-info-card\">
   <div class=\"row\">
      <div class=\"col pt-1\">
         {% if user['id'] %}
            {{ include('components/user/picture.html.twig', {
               'users_id': user['id'],
               'enable_anonymization': enable_anonymization
            }) }}
         {% endif %}
      </div>
      <div class=\"col-auto ms-2\">
         <h4 class=\"card-title mb-1\">
            {% if user['id'] %}
               <a href=\"{{ 'User'|itemtype_form_path(user['id']) }}\">{{ user['user_name'] }}</a>
            {% else %}
               {{ user['user_name'] }}
            {% endif %}
         </h4>

         <div class=\"text-muted\">
            {% if user['email']|length > 0 %}
               <div>
                  <i class=\"fas fa-fw fa-envelope\"></i>
                  <a href=\"mailto:{{ user['email'] }}\">{{ user['email'] }}</a>
               </div>
            {% endif %}
            {% if not user['phone'] is empty or not user['phone2'] is empty %}
               <div>
                  {% if not user['phone'] is empty %}
                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:{{ user['phone'] }}\">{{ user['phone'] }}</a>
                  {% endif %}
                  {% if not user['phone'] is empty and not user['phone2'] is empty %}
                     <span> - </span>
                  {% endif %}
                  {% if not user['phone2'] is empty %}
                     <i class=\"fas fa-fw fa-phone\"></i>
                     <a href=\"tel:{{ user['phone2'] }}\">{{ user['phone2'] }}</a>
                  {% endif %}
               </div>
            {% endif %}
            {% if user['mobile']|length > 0 %}
               <div>
                  <i class=\"fas fa-fw fa-mobile\"></i>
                  <a href=\"tel:{{ user['mobile'] }}\">{{ user['mobile'] }}</a>
               </div>
            {% endif %}
            {% if user['locations_id'] > 0 %}
               <div title=\"{{ 'Location'|itemtype_name }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-map-marker-alt\"></i>
                  {{ get_item_name('Location', user['locations_id']) }}
               </div>
            {% endif %}
            {% if user['usertitles_id'] > 0 %}
               <div title=\"{{ _x('person', 'Title') }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tie\"></i>
                  {{ get_item_name('UserTitle', user['usertitles_id']) }}
               </div>
            {% endif %}
            {% if user['usercategories_id'] > 0 %}
               <div title=\"{{ _n('Category', 'Categories', 1) }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-user-tag\"></i>
                  {{ get_item_name('UserCategory', user['usercategories_id']) }}
               </div>
            {% endif %}
            {% if user['groups_id'] > 0 %}
               <div title=\"{{ __('Default group') }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                  <i class=\"fas fa-fw fa-users\"></i>
                  {{ get_item_name('Group', user['groups_id']) }}
               </div>
            {% endif %}
         </div>
      </div>

      {% if can_edit %}
         <div class=\"col\">
            <a class=\"btn btn-icon btn-sm btn-outline-secondary\" href=\"{{ path('front/preference.php') }}\"
               title=\"{{ __('Edit') }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\">
               <i class=\"fas fa-user-edit\"></i>
            </a>
         </div>
      {% endif %}
   </div>
</div>
", "components/user/info_card.html.twig", "C:\\xampp\\htdocs\\glpi-10.0.7\\glpi\\templates\\components\\user\\info_card.html.twig");
    }
}
