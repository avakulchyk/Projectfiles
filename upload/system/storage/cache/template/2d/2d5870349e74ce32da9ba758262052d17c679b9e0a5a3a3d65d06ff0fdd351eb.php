<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/account/edit.twig */
class __TwigTemplate_a4f1342fe3d0427ff64d26f5192525fe2b6d092fab2235bcdb726cba7924f9fb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-edit\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <form id=\"form-customer\" action=\"";
        // line 11
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 13
        yield ($context["text_your_details"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 15
        yield ($context["entry_firstname"] ?? null);
        yield " </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 17
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 24
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 31
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 36
        if (($context["config_telephone_display"] ?? null)) {
            // line 37
            yield "            <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 38
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"";
            // line 40
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
        }
        // line 45
        yield "
          ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 47
            yield "
            ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 48) == "select")) {
                // line 49
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 49)) {
                    yield " required";
                }
                yield " custom-field\">
                <label for=\"input-custom-field-";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 50);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 50);
                yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 52);
                yield "]\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 52);
                yield "\" class=\"form-select\">
                    <option value=\"\">";
                // line 53
                yield ($context["text_select"] ?? null);
                yield "</option>
                    ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 55
                    yield "                      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 55);
                    yield "\"";
                    if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 55)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 55) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 55)] ?? null) : null)))) {
                        yield " selected";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 55);
                    yield "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                  </select>
                  <div id=\"error-custom-field-";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 58);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 62
            yield "
            ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 63) == "radio")) {
                // line 64
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 64)) {
                    yield " required";
                }
                yield " custom-field\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 65
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 65);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                yield "\">
                    ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 69
                    yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 70
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 70);
                    yield "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "                  </div>
                  <div id=\"error-custom-field-";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 78
            yield "
            ";
            // line 79
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 79) == "checkbox")) {
                // line 80
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 80)) {
                    yield " required";
                }
                yield " custom-field\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                yield "\">
                    ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 84));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 85
                    yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 86
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                    yield "\" class=\"form-check-input\"";
                    if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 86)] ?? null) : null)))) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 86);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                    yield "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                yield "                  </div>
                  <div id=\"error-custom-field-";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 94
            yield "
            ";
            // line 95
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 95) == "text")) {
                // line 96
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 96)) {
                    yield " required";
                }
                yield " custom-field\">
                <label for=\"input-custom-field-";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 99
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                yield "]\" value=\"";
                if ((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null)) {
                    yield (($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 99);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 99);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 100
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 104
            yield "
            ";
            // line 105
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 105) == "textarea")) {
                // line 106
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 106)) {
                    yield " required";
                }
                yield " custom-field\">
                <label for=\"input-custom-field-";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 109
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 109);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                yield "\" class=\"form-control\">";
                if ((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null)) {
                    yield (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 109);
                }
                yield "</textarea>
                  <div id=\"error-custom-field-";
                // line 110
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 114
            yield "
            ";
            // line 115
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "file")) {
                // line 116
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 116)) {
                    yield " required";
                }
                yield " custom-field\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                yield "</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 120
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "]\" value=\"";
                if ((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null)) {
                    yield (($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null);
                }
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 127
            yield "
            ";
            // line 128
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "date")) {
                // line 129
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 129)) {
                    yield " required";
                }
                yield " custom-field\">
                <label for=\"input-custom-field-";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"date\" name=\"custom_field[";
                // line 132
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                yield "]\" value=\"";
                if ((($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null)) {
                    yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 132);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 133
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 137
            yield "
            ";
            // line 138
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "time")) {
                // line 139
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 139)) {
                    yield " required";
                }
                yield " custom-field\">
                <label for=\"input-custom-field-";
                // line 140
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"time\" name=\"custom_field[";
                // line 142
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                yield "]\" value=\"";
                if ((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null)) {
                    yield (($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 142);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 143
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 147
            yield "
            ";
            // line 148
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "datetime")) {
                // line 149
                yield "              <div class=\"row mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 149)) {
                    yield " required";
                }
                yield " custom-field\">
                <label for=\"input-custom-field-";
                // line 150
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                yield "\" class=\"col-sm-2 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"datetime-local\" name=\"custom_field[";
                // line 152
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                yield "]\" value=\"";
                if ((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) {
                    yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 152);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                yield "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 157
            yield "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"";
        // line 162
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 165
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </div>
      </form>
      ";
        // line 169
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 170
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 172
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/edit.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  624 => 172,  619 => 170,  615 => 169,  608 => 165,  600 => 162,  595 => 159,  588 => 157,  581 => 153,  567 => 152,  560 => 150,  553 => 149,  551 => 148,  548 => 147,  541 => 143,  527 => 142,  520 => 140,  513 => 139,  511 => 138,  508 => 137,  501 => 133,  487 => 132,  480 => 130,  473 => 129,  471 => 128,  468 => 127,  461 => 123,  450 => 121,  438 => 120,  432 => 117,  425 => 116,  423 => 115,  420 => 114,  413 => 110,  399 => 109,  392 => 107,  385 => 106,  383 => 105,  380 => 104,  373 => 100,  359 => 99,  352 => 97,  345 => 96,  343 => 95,  340 => 94,  333 => 90,  330 => 89,  309 => 86,  306 => 85,  302 => 84,  298 => 83,  293 => 81,  286 => 80,  284 => 79,  281 => 78,  274 => 74,  271 => 73,  250 => 70,  247 => 69,  243 => 68,  239 => 67,  234 => 65,  227 => 64,  225 => 63,  222 => 62,  215 => 58,  212 => 57,  197 => 55,  193 => 54,  189 => 53,  183 => 52,  176 => 50,  169 => 49,  167 => 48,  164 => 47,  160 => 46,  157 => 45,  147 => 40,  142 => 38,  135 => 37,  133 => 36,  123 => 31,  118 => 29,  108 => 24,  103 => 22,  93 => 17,  88 => 15,  83 => 13,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-edit\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>{{ text_your_details }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }} </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          {% if config_telephone_display %}
            <div class=\"row mb-3{% if config_telephone_required %} required{% endif %}\">
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endif %}

          {% for custom_field in custom_fields %}

            {% if custom_field.type == 'select' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'checkbox' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'text' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'textarea' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'file' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'date' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'time' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            {% endif %}

          {% endfor %}
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/edit.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/account/edit.twig");
    }
}
