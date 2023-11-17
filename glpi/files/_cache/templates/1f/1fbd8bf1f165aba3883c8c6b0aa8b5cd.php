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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_2026647387cd3f887baf2371ae12f86a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_task.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 43
        $context["rand"] = twig_random($this->env);
        // line 44
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["formoptions"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["formoptions"] ?? null) : null)) : (""));
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_task.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 48
            echo "      <div class=\"read-only-content ";
            echo ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            echo "\">
         <div class=\"rich_text_container text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["content"] ?? null) : null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            ";
            // line 51
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 54
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 58
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id_tech"] ?? null) : null)) {
                // line 59
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 60
                $context["is_current_tech"] = ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["users_id_tech"] ?? null) : null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
                // line 61
                echo "                  ";
                $context["anonym_tech"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_tech"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
                // line 62
                echo "                  ";
                echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($__internal_compile_8 =                 // line 63
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 64
($context["anonym_tech"] ?? null)], false);
                // line 65
                echo "
               </span>
            ";
            }
            // line 68
            echo "
            ";
            // line 69
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["groups_id_tech"] ?? null) : null)) {
                // line 70
                echo "               <span class=\"badge bg-orange-lt\">
                  <i class=\"fas fa-users me-1\"></i>
                  ";
                // line 72
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                echo "
               </span>
            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["taskcategories_id"] ?? null) : null)) {
                // line 77
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["taskcategories_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 81
            echo "
            ";
            // line 82
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["actiontime"] ?? null) : null)) {
                // line 83
                echo "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"fas fa-stopwatch me-1\"></i>
                  ";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["actiontime"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 88
            echo "
            ";
            // line 89
            if ((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["begin"] ?? null) : null)) {
                // line 90
                echo "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"fas fa-calendar me-1\"></i>
                  ";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["begin"] ?? null) : null)), "html", null, true);
                echo "
                  &rArr;
                  ";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["end"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 97
            echo "
            ";
            // line 98
            if ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["sourceitems_id"] ?? null) : null)) {
                // line 99
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 101
                ob_start(function () { return ''; });
                // line 102
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 103
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 106
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 109
            echo "
            ";
            // line 110
            if ((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["sourceof_items_id"] ?? null) : null)) {
                // line 111
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 113
                ob_start(function () { return ''; });
                // line 114
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 115
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 118
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 121
            echo "
            ";
            // line 122
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post('";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
            echo "',
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 131), "html", null, true);
            echo "',
                  '";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 132), "html", null, true);
            echo "': ";
            echo twig_escape_filter($this->env, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 132)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), "html", null, true);
            echo "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 156
            echo "      <div class=\"itiltask\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 158), "html", null, true);
            echo "\"  enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once ";
            echo ($context["formoptions"] ?? null);
            echo ">
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 159), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 160), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 165
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 167
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 167)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 175
($context["item"] ?? null), "fields", [], "any", false, false, false, 175)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["entities_id"] ?? null) : null), "rand" =>             // line 176
($context["rand"] ?? null)]], 165, $context, $this->getSourceContext());
            // line 178
            echo "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                  <div class=\"row\">

                     ";
            // line 183
            ob_start(function () { return ''; });
            // line 184
            echo "                        <i class=\"fas fa-reply fa-fw me-1\"
                           title=\"";
            // line 185
            echo twig_escape_filter($this->env, _n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 187
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskTemplate", "tasktemplates_id", (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 190
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["tasktemplates_id"] ?? null) : null),             // line 191
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .             // line 195
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 196
($context["item"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null), "rand" =>             // line 197
($context["rand"] ?? null)]], 187, $context, $this->getSourceContext());
            // line 199
            echo "

                     ";
            // line 201
            ob_start(function () { return ''; });
            // line 202
            echo "                        <i class=\"fas fa-calendar fa-fw me-1\"
                           title=\"";
            // line 203
            echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_date_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 205
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 207
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 207)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["date"] ?? null) : null),             // line 208
($context["task_date_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 212
($context["rand"] ?? null)]], 205, $context, $this->getSourceContext());
            // line 214
            echo "

                     ";
            // line 217
            echo "                     ";
            ob_start(function () { return ''; });
            // line 218
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_category_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskCategory", "taskcategories_id", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,             // line 223
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 223)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["taskcategories_id"] ?? null) : null),             // line 224
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 228
($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["entities_id"] ?? null) : null), "condition" => ["is_active" => 1], "rand" =>             // line 232
($context["rand"] ?? null)]], 220, $context, $this->getSourceContext());
            // line 234
            echo "

                     ";
            // line 237
            echo "                     ";
            ob_start(function () { return ''; });
            // line 238
            echo "                        <i class=\"fas fa-tasks fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Status"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_state_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 240
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["state", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 240)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["state"] ?? null) : null), [0 => _n("Information", "Information", 1), 1 => __("To do"), 2 => __("Done")],             // line 244
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 247
($context["rand"] ?? null)]], 240, $context, $this->getSourceContext());
            // line 248
            echo "


                     ";
            // line 251
            ob_start(function () { return ''; });
            // line 252
            echo "                        <i class=\"ti ti-lock fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 254
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 256
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 256)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["is_private"] ?? null) : null),             // line 257
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 261
($context["rand"] ?? null)]], 254, $context, $this->getSourceContext());
            // line 263
            echo "

                     ";
            // line 265
            if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                // line 266
                echo "                        ";
                ob_start(function () { return ''; });
                // line 267
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 268
                echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 270
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                 // line 273
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 277
($context["rand"] ?? null), "yes_value" =>                 // line 278
($context["kb_id_toload"] ?? null)]], 270, $context, $this->getSourceContext());
                // line 280
                echo "
                     ";
            }
            // line 282
            echo "
                     ";
            // line 283
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 284
                echo "                        ";
                ob_start(function () { return ''; });
                // line 285
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["task_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 288
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_task_to_kb", 0,                 // line 291
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 295
($context["rand"] ?? null)]], 288, $context, $this->getSourceContext());
                // line 297
                echo "
                     ";
            }
            // line 299
            echo "
                     ";
            // line 301
            echo "                     ";
            ob_start(function () { return ''; });
            // line 302
            echo "                        <i class=\"fas fa-stopwatch fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Duration"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_actiontime_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 304
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["actiontime"] ?? null) : null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 307
($context["rand"] ?? null), "min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" => twig_array_map($this->env, range(9, 100),             // line 312
function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return (($context["i"] ?? null) * twig_constant("HOUR_TIMESTAMP")); })]], 304, $context, $this->getSourceContext());
            // line 313
            echo "

                     ";
            // line 316
            echo "                     ";
            ob_start(function () { return ''; });
            // line 317
            echo "                        <i class=\"fas fa-user fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_user_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 319
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 322
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 322), "users_id_tech", [], "array", true, true, false, 322)) ? (_twig_default_filter((($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 322)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),             // line 323
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 327
($context["item"] ?? null), "fields", [], "any", false, false, false, 327)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>             // line 329
($context["rand"] ?? null)]], 319, $context, $this->getSourceContext());
            // line 331
            echo "

                     ";
            // line 334
            echo "                     ";
            ob_start(function () { return ''; });
            // line 335
            echo "                        <i class=\"fas fa-users fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_group_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 337
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_36 = twig_get_attribute($this->env, $this->source,             // line 340
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 340)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["groups_id_tech"] ?? null) : null),             // line 341
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_37 = twig_get_attribute($this->env, $this->source,             // line 345
($context["item"] ?? null), "fields", [], "any", false, false, false, 345)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>             // line 347
($context["rand"] ?? null)]], 337, $context, $this->getSourceContext());
            // line 349
            echo "

                     <script type=\"text/javascript\">
                        function showPlanUpdate";
            // line 352
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(e) {
                           \$('#plan";
            // line 353
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').hide();
                           \$('#viewplan";
            // line 354
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').load('";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/planning.php"), "html", null, true);
            echo "', {
                              action: \"add_event_classic_form\",
                              form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                              entity: ";
            // line 357
            echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 357)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["entities_id"] ?? null) : null), "html", null, true);
            echo ",
                              rand_user: ";
            // line 358
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              rand_group: ";
            // line 359
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              itemtype: \"";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 360), "html", null, true);
            echo "\",
                              items_id: ";
            // line 361
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 361), "id", [], "array", true, true, false, 361)) ? (_twig_default_filter((($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 361)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null),  -1)) : ( -1)), "html", null, true);
            echo ",
                              parent_itemtype: \"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 362), "html", null, true);
            echo "\",
                              parent_items_id: ";
            // line 363
            echo twig_escape_filter($this->env, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 363)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["id"] ?? null) : null), "html", null, true);
            echo ",
                              parent_fk_field: \"";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 364), "html", null, true);
            echo "\",
                              begin: \"";
            // line 365
            echo twig_escape_filter($this->env, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 365)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["begin"] ?? null) : null), "html", null, true);
            echo "\",
                              end: \"";
            // line 366
            echo twig_escape_filter($this->env, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 366)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["end"] ?? null) : null), "html", null, true);
            echo "\",
                           });
                        }
                     </script>
                     <div class=\"col-12\">
                        ";
            // line 371
            if ((twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => (($__internal_compile_43 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 371)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["id"] ?? null) : null), 1 => twig_constant("UPDATE")], "method", false, false, false, 371) && (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 371)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["begin"] ?? null) : null))) {
                // line 372
                echo "                           <script type=\"text/javascript\">
                              showPlanUpdate";
                // line 373
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "();
                           </script>
                           <button id=\"unplan";
                // line 375
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-outline-warning\" type=\"submit\" name=\"unplan\"
                                 onclick=\"return confirm('";
                // line 376
                echo twig_escape_filter($this->env, __("Confirm the deletion of planning?"), "html", null, true);
                echo "');\">
                              <i class=\"fas ti ti-calendar-off\"></i>
                              <span>";
                // line 378
                echo twig_escape_filter($this->env, __("Unplan"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            } else {
                // line 381
                echo "                           <button id=\"plan";
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-outline-secondary text-truncate\" onclick=\"showPlanUpdate";
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "()\" type=\"button\">
                              <i class=\"fas fa-calendar\"></i>
                              <span>";
                // line 383
                echo twig_escape_filter($this->env, __("Plan this task"), "html", null, true);
                echo "</span>
                           </button>
                        ";
            }
            // line 386
            echo "                        <div id=\"viewplan";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
                     </div>
                  </div>
               </div>
            </div>

            ";
            // line 392
            ob_start(function () { return ''; });
            // line 393
            echo "               ";
            $context["show_pending_reasons_actions"] = (((($__internal_compile_45 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 393)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["status"] ?? null) : null) == twig_constant("CommonITILObject::WAITING")) &&  !($context["has_pending_reason"] ?? null));
            // line 394
            echo "               <span
                  class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
            // line 395
            echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("flex-fill") : (""));
            echo "\"
                  id=\"pending-reasons-control-";
            // line 396
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
               >
                  <span class=\"d-inline-flex align-items-center\" title=\"";
            // line 398
            echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
            echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                     <i class=\"fas fa-pause me-2\"></i>
                     <label class=\"form-check form-switch pt-2\">
                        <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                        <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                              id=\"enable-pending-reasons-";
            // line 404
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                              role=\"button\"
                              ";
            // line 406
            echo ((((($__internal_compile_46 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 406)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["status"] ?? null) : null) == twig_constant("CommonITILObject::WAITING"))) ? ("checked") : (""));
            echo "
                              data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
            // line 407
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" />
                     </label>
                  </span>

                  ";
            // line 411
            if ( !($context["has_pending_reason"] ?? null)) {
                // line 412
                echo "                     <div
                        class=\"collapse ps-2 py-1 flex-fill ";
                // line 413
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("show") : (""));
                echo "\"
                        aria-expanded=\"";
                // line 414
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("true") : ("false"));
                echo "\"
                        id=\"pending-reasons-setup-";
                // line 415
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                     >
                        ";
                // line 417
                echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                echo "
                     </div>
                  ";
            }
            // line 420
            echo "               </span>
            ";
            $context["pending_reasons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 422
            echo "
            ";
            // line 423
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 425
            if (((($__internal_compile_47 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 425)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["id"] ?? null) : null) <= 0)) {
                // line 426
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 429
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     ";
                // line 431
                echo ($context["pending_reasons"] ?? null);
                echo "
                  </div>
               ";
            } else {
                // line 434
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_48 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 434)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 437
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 440
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => (($__internal_compile_49 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 440)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["id"] ?? null) : null), 1 => twig_constant("PURGE")], "method", false, false, false, 440)) {
                    // line 441
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 442
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 444
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 447
                echo "                  ";
                echo ($context["pending_reasons"] ?? null);
                echo "
               ";
            }
            // line 449
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 451
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 456
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 458
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/task.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 462
            echo twig_escape_filter($this->env, (($__internal_compile_50 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 462)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 463
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 463), "html", null, true);
            echo "'
               }
            }).done(function (data) {
                if (data.content !== undefined) {
                    // set textarea content
                    if (tasktinymce = tinymce.get(\"content_";
            // line 468
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                        tasktinymce.setContent(data.content);
                    }
                }

                if (data.taskcategories_id !== undefined) {
                    // set category
                    const taskcategories_id = isNaN(parseInt(data.taskcategories_id))
                        ? 0
                        : parseInt(data.taskcategories_id);

                     //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
                     //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
                     var newOption = new Option(data.taskcategories_name, taskcategories_id, true, true);
                     \$(\"#dropdown_taskcategories_id";
            // line 482
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").append(newOption).trigger('change');
                }

                if (data.is_private !== undefined) {
                    // set is_private
                    \$(\"#is_private_";
            // line 487
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                        .prop(\"checked\", data.is_private == \"0\"
                            ? false
                            : true);
                }

                if (data.state !== undefined) {
                    // Set state
                    \$(\"#dropdown_state";
            // line 495
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.state);
                }

                if (data.actiontime !== undefined) {
                    // Set duration
                    \$(\"#dropdown_actiontime";
            // line 500
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.actiontime);
                }

                if (data.users_id_tech !== undefined) {
                    // Set user
                    \$(\"#dropdown_users_id_tech";
            // line 505
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.users_id_tech);
                }

               if (data.groups_id_tech !== undefined) {
                   // Set group
                   \$(\"#dropdown_groups_id_tech";
            // line 510
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.groups_id_tech);
               }
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  860 => 510,  852 => 505,  844 => 500,  836 => 495,  825 => 487,  817 => 482,  800 => 468,  792 => 463,  788 => 462,  781 => 458,  776 => 456,  768 => 451,  764 => 449,  758 => 447,  752 => 444,  747 => 442,  744 => 441,  742 => 440,  736 => 437,  729 => 434,  723 => 431,  718 => 429,  713 => 426,  711 => 425,  706 => 423,  703 => 422,  699 => 420,  693 => 417,  688 => 415,  684 => 414,  680 => 413,  677 => 412,  675 => 411,  668 => 407,  664 => 406,  659 => 404,  650 => 398,  645 => 396,  641 => 395,  638 => 394,  635 => 393,  633 => 392,  623 => 386,  617 => 383,  609 => 381,  603 => 378,  598 => 376,  594 => 375,  589 => 373,  586 => 372,  584 => 371,  576 => 366,  572 => 365,  568 => 364,  564 => 363,  560 => 362,  556 => 361,  552 => 360,  548 => 359,  544 => 358,  540 => 357,  532 => 354,  528 => 353,  524 => 352,  519 => 349,  517 => 347,  516 => 345,  515 => 341,  514 => 340,  512 => 337,  506 => 335,  503 => 334,  499 => 331,  497 => 329,  496 => 327,  495 => 323,  494 => 322,  492 => 319,  486 => 317,  483 => 316,  479 => 313,  477 => 312,  476 => 307,  474 => 304,  468 => 302,  465 => 301,  462 => 299,  458 => 297,  456 => 295,  455 => 291,  453 => 288,  446 => 285,  443 => 284,  441 => 283,  438 => 282,  434 => 280,  432 => 278,  431 => 277,  430 => 273,  428 => 270,  423 => 268,  420 => 267,  417 => 266,  415 => 265,  411 => 263,  409 => 261,  408 => 257,  407 => 256,  405 => 254,  399 => 252,  397 => 251,  392 => 248,  390 => 247,  389 => 244,  387 => 240,  381 => 238,  378 => 237,  374 => 234,  372 => 232,  371 => 228,  370 => 224,  369 => 223,  367 => 220,  361 => 218,  358 => 217,  354 => 214,  352 => 212,  351 => 208,  350 => 207,  348 => 205,  343 => 203,  340 => 202,  338 => 201,  334 => 199,  332 => 197,  331 => 196,  330 => 195,  329 => 191,  328 => 190,  326 => 187,  321 => 185,  318 => 184,  316 => 183,  309 => 178,  307 => 176,  306 => 175,  305 => 167,  304 => 165,  297 => 161,  291 => 160,  287 => 159,  281 => 158,  277 => 156,  248 => 132,  244 => 131,  238 => 128,  229 => 122,  226 => 121,  219 => 118,  213 => 115,  210 => 114,  208 => 113,  204 => 111,  202 => 110,  199 => 109,  192 => 106,  186 => 103,  183 => 102,  181 => 101,  177 => 99,  175 => 98,  172 => 97,  166 => 94,  161 => 92,  157 => 90,  155 => 89,  152 => 88,  146 => 85,  142 => 83,  140 => 82,  137 => 81,  131 => 78,  128 => 77,  126 => 76,  123 => 75,  117 => 72,  113 => 70,  111 => 69,  108 => 68,  103 => 65,  101 => 64,  100 => 63,  98 => 62,  95 => 61,  93 => 60,  90 => 59,  88 => 58,  82 => 54,  80 => 51,  76 => 50,  70 => 48,  67 => 47,  63 => 46,  58 => 34,  56 => 44,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "C:\\xampp\\htdocs\\glpi-10.0.7\\glpi\\templates\\components\\itilobject\\timeline\\form_task.html.twig");
    }
}
