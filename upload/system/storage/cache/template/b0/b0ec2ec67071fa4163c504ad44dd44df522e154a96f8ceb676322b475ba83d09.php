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

/* catalog/view/template/checkout/register.twig */
class __TwigTemplate_08b3f2ace755c52ed1f5b7edc1b93400e755b99424bb5cf723ed8372c3511978 extends Template
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
        yield "<form id=\"form-register\">
  <p>";
        // line 2
        yield ($context["text_login"] ?? null);
        yield "</p>
  <fieldset>
    <legend>";
        // line 4
        yield ($context["heading_title"] ?? null);
        yield "</legend>
    <div class=\"row\">
      ";
        // line 6
        if (($context["config_checkout_guest"] ?? null)) {
            // line 7
            yield "        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"";
            // line 9
            if (($context["account"] ?? null)) {
                yield " checked";
            }
            yield "/> <label for=\"input-register\" class=\"form-check-label\">";
            yield ($context["text_register"] ?? null);
            yield "</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"";
            // line 12
            if ( !($context["account"] ?? null)) {
                yield " checked";
            }
            yield "/> <label for=\"input-guest\" class=\"form-check-label\">";
            yield ($context["text_guest"] ?? null);
            yield "</label>
          </div>
        </div>
      ";
        }
        // line 16
        yield "      <div class=\"col mb-3";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) <= 1)) {
            yield " d-none";
        }
        yield "\">
        <label class=\"form-label\">";
        // line 17
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 20
            yield "            <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 20) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 20);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">";
        // line 32
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"lastname\" value=\"";
        // line 33
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">";
        // line 37
        yield ($context["entry_email"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 38
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 41
        if (($context["config_telephone_display"] ?? null)) {
            // line 42
            yield "        <div class=\"col mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">
          <label for=\"input-telephone\" class=\"form-label\">";
            // line 43
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"telephone\" value=\"";
            // line 44
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 48
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 49
            yield "
        ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 50) == "account")) {
                // line 51
                yield "
          ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 52) == "select")) {
                    // line 53
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 53);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 54
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 54);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 54);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "]\" id=\"input-customer-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    yield "\" class=\"form-select\">
                <option value=\"\">";
                    // line 55
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 57
                        yield "                  <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 57);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "              </select>
              <div id=\"error-custom-field-";
                    // line 60
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 63
                yield "
          ";
                // line 64
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 64) == "radio")) {
                    // line 65
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 65);
                    yield "\">
              <label class=\"form-label\">";
                    // line 66
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 66);
                    yield "</label>
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
                        yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                        // line 70
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 70);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-custom-value-";
                        // line 71
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 71);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 71);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    yield "              </div>
              <div id=\"error-custom-field-";
                    // line 75
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 78
                yield "
          ";
                // line 79
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 79) == "checkbox")) {
                    // line 80
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    yield "\">
              <label class=\"form-label\">";
                    // line 81
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                    yield "</label>
              <div id=\"input-custom-field-";
                    // line 82
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    yield "\">
                ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 84
                        yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 85
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 85);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-custom-value-";
                        // line 86
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
                    yield "              </div>
              <div id=\"error-custom-field-";
                    // line 90
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 93
                yield "
          ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "text")) {
                    // line 95
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 96
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    yield "</label>
              <input type=\"text\" name=\"custom_field[";
                    // line 97
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 97);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    yield "]\" value=\"";
                    if ((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null)) {
                        yield (($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 97);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 101
                yield "
          ";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "textarea")) {
                    // line 103
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    yield "</label> <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 104);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-control\">";
                    if ((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)) {
                        yield (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 104);
                    }
                    yield "</textarea>
              <div id=\"error-custom-field-";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 108
                yield "
          ";
                // line 109
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "file")) {
                    // line 110
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                    yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 113
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                <input type=\"hidden\" name=\"custom_field[";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    yield "]\" value=\"";
                    if ((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)) {
                        yield (($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    yield "\"/>
              </div>
              <div id=\"error-custom-field-";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 119
                yield "
          ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "date")) {
                    // line 121
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 122
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                    yield "</label>
              <input type=\"date\" name=\"custom_field[";
                    // line 123
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    yield "]\" value=\"";
                    if ((($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) {
                        yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 124
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 127
                yield "
          ";
                // line 128
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "time")) {
                    // line 129
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                    yield "</label>
              <input type=\"time\" name=\"custom_field[";
                    // line 131
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 131);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "]\" value=\"";
                    if ((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) {
                        yield (($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 132
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 135
                yield "
          ";
                // line 136
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "datetime")) {
                    // line 137
                    yield "            <div class=\"col mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    yield "\">
              <label for=\"input-custom-field-";
                    // line 138
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                    yield "</label>
              <input type=\"datetime-local\" name=\"custom_field[";
                    // line 139
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    yield "]\" value=\"";
                    if ((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null)) {
                        yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 139);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-custom-field-";
                    // line 140
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 143
                yield "
        ";
            }
            // line 145
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "    </div>
  </fieldset>
  ";
        // line 148
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 149
            yield "    <fieldset>
      <legend>";
            // line 150
            yield ($context["text_payment_address"] ?? null);
            yield "</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
            // line 153
            yield ($context["entry_company"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"payment_company\" value=\"";
            // line 154
            yield ($context["payment_company"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_company"] ?? null);
            yield "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
            // line 157
            yield ($context["entry_address_1"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"payment_address_1\" value=\"";
            // line 158
            yield ($context["payment_address_1"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_address_1"] ?? null);
            yield "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
            // line 162
            yield ($context["entry_address_2"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"payment_address_2\" value=\"";
            // line 163
            yield ($context["payment_address_2"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_address_2"] ?? null);
            yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
            // line 166
            yield ($context["entry_city"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"payment_city\" value=\"";
            // line 167
            yield ($context["payment_city"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_city"] ?? null);
            yield "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
            // line 171
            yield ($context["entry_postcode"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"payment_postcode\" value=\"";
            // line 172
            yield ($context["payment_postcode"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_postcode"] ?? null);
            yield "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
            // line 176
            yield ($context["entry_country"] ?? null);
            yield "</label>
          <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">";
            // line 178
            yield ($context["text_select"] ?? null);
            yield "</option>
            ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 180
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 180);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 180) == ($context["payment_country_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 180);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
            // line 186
            yield ($context["entry_zone"] ?? null);
            yield "</label>
          <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"";
            // line 187
            yield ($context["payment_zone_id"] ?? null);
            yield "\">
            <option value=\"\">";
            // line 188
            yield ($context["text_select"] ?? null);
            yield "</option>
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_zones"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
                // line 190
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 190);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 190) == ($context["payment_zone_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 190);
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            yield "          </select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 196
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 196) == "address")) {
                    // line 197
                    yield "
            ";
                    // line 198
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 198) == "select")) {
                        // line 199
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 199)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 200
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                        yield "</label> <select name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 200);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                        yield "]\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                        yield "\" class=\"form-select\">
                  <option value=\"\">";
                        // line 201
                        yield ($context["text_select"] ?? null);
                        yield "</option>
                  ";
                        // line 202
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 202));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 203
                            yield "                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 203);
                            yield "\"";
                            if (((($_v18 = ($context["payment_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 203) == (($_v19 = ($context["payment_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null)))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 203);
                            yield "</option>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 205
                        yield "                </select>
                <div id=\"error-payment-custom-field-";
                        // line 206
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 209
                    yield "
            ";
                    // line 210
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 210) == "radio")) {
                        // line 211
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 211)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                        yield "\">
                <label class=\"form-label\">";
                        // line 212
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                        yield "</label>
                <div id=\"input-payment-custom-field-";
                        // line 213
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                        yield "\">
                  ";
                        // line 214
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 214));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 215
                            yield "                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[";
                            // line 216
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 216);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 216);
                            yield "\" id=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 216);
                            yield "\" class=\"form-check-input\"";
                            if (((($_v20 = ($context["payment_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 216) == (($_v21 = ($context["payment_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null)))) {
                                yield " checked";
                            }
                            yield "/> <label for=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 216);
                            yield "\" class=\"form-check-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 216);
                            yield "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 219
                        yield "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 220
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 223
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 223) == "checkbox")) {
                        // line 224
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 224)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                        yield "\">
                <label class=\"form-label\">";
                        // line 225
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 225);
                        yield "</label>
                <div id=\"input-payment-custom-field-";
                        // line 226
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                        yield "\">
                  ";
                        // line 227
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 227));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                            // line 228
                            yield "                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[";
                            // line 229
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 229);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 229);
                            yield "\" id=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 229);
                            yield "\" class=\"form-check-input\"";
                            if (((($_v22 = ($context["address_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 229), (($_v23 = ($context["address_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null)))) {
                                yield " checked";
                            }
                            yield "/> <label for=\"input-payment-custom-value-";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 229);
                            yield "\" class=\"form-check-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 229);
                            yield "</label>
                    </div>
                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 232
                        yield "                </div>
                <div id=\"error-payment-custom-field-";
                        // line 233
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 236
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 236) == "text")) {
                        // line 237
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 237)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 238
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 238);
                        yield "</label>
                <input type=\"text\" name=\"payment_custom_field[";
                        // line 239
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 239);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                        yield "]\" value=\"";
                        if ((($_v24 = ($context["address_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null)) {
                            yield (($_v25 = ($context["address_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 239);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 239);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 240
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 243
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 243) == "textarea")) {
                        // line 244
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 244)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 244);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 245
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 245);
                        yield "</label> <textarea name=\"payment_custom_field[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 245);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                        yield "]\" rows=\"5\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 245);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245);
                        yield "\" class=\"form-control\">";
                        if ((($_v26 = ($context["address_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null)) {
                            yield (($_v27 = ($context["address_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 245)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 245);
                        }
                        yield "</textarea>
                <div id=\"error-payment-custom-field-";
                        // line 246
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 249
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 249) == "file")) {
                        // line 250
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 250)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                        yield "\">
                <label class=\"form-label\">";
                        // line 251
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 251);
                        yield "</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        // line 253
                        yield ($context["upload"] ?? null);
                        yield "\" data-oc-size-max=\"";
                        yield ($context["config_file_max_size"] ?? null);
                        yield "\" data-oc-size-error=\"";
                        yield ($context["error_upload_size"] ?? null);
                        yield "\" data-oc-target=\"#input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                        yield ($context["button_upload"] ?? null);
                        yield "</button>
                  <input type=\"hidden\" name=\"payment_custom_field[";
                        // line 254
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 254);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                        yield "]\" value=\"";
                        if ((($_v28 = ($context["payment_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254)] ?? null) : null)) {
                            yield (($_v29 = ($context["payment_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254)] ?? null) : null);
                        }
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                        yield "\"/>
                </div>
                <div id=\"error-payment-custom-field-";
                        // line 256
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 259
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 259) == "date")) {
                        // line 260
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 260)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 261
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 261);
                        yield "</label>
                <input type=\"date\" name=\"payment_custom_field[";
                        // line 262
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 262);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                        yield "]\" value=\"";
                        if ((($_v30 = ($context["payment_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262)] ?? null) : null)) {
                            yield (($_v31 = ($context["payment_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 262);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 262);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 263
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 266
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 266) == "time")) {
                        // line 267
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 267)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 268
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 268);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 268);
                        yield "</label>
                <input type=\"time\" name=\"payment_custom_field[";
                        // line 269
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 269);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269);
                        yield "]\" value=\"";
                        if ((($_v32 = ($context["payment_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null)) {
                            yield (($_v33 = ($context["payment_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 269);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 269);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 270
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 273
                    yield "
            ";
                    // line 274
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 274) == "datetime")) {
                        // line 275
                        yield "              <div class=\"col mb-3";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 275)) {
                            yield " required";
                        }
                        yield " custom-field custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 275);
                        yield "\">
                <label for=\"input-payment-custom-field-";
                        // line 276
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 276);
                        yield "\" class=\"form-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 276);
                        yield "</label>
                <input type=\"datetime-local\" name=\"payment_custom_field[";
                        // line 277
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 277);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                        yield "]\" value=\"";
                        if ((($_v34 = ($context["payment_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277)] ?? null) : null)) {
                            yield (($_v35 = ($context["payment_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277)] ?? null) : null);
                        } else {
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 277);
                        }
                        yield "\" placeholder=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 277);
                        yield "\" id=\"input-payment-custom-field-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 277);
                        yield "\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-";
                        // line 278
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                        yield "\" class=\"invalid-feedback\"></div>
              </div>
            ";
                    }
                    // line 281
                    yield "
          ";
                }
                // line 283
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            yield "
        ";
            // line 285
            if (($context["shipping_required"] ?? null)) {
                // line 286
                yield "          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">";
                // line 288
                yield ($context["entry_match"] ?? null);
                yield "</label>
            </div>
          </div>
        ";
            }
            // line 292
            yield "
      </div>
    </fieldset>
  ";
        }
        // line 296
        yield "  <fieldset id=\"shipping-address\" style=\"display: ";
        if ( !($context["config_checkout_payment_address"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <legend>";
        // line 297
        yield ($context["text_shipping_address"] ?? null);
        yield "</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      ";
        // line 299
        if (($context["config_checkout_payment_address"] ?? null)) {
            // line 300
            yield "        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
            // line 301
            yield ($context["entry_firstname"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"shipping_firstname\" value=\"";
            // line 302
            yield ($context["shipping_firstname"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_firstname"] ?? null);
            yield "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
            // line 306
            yield ($context["entry_lastname"] ?? null);
            yield "</label>
          <input type=\"text\" name=\"shipping_lastname\" value=\"";
            // line 307
            yield ($context["shipping_lastname"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_lastname"] ?? null);
            yield "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      ";
        }
        // line 311
        yield "      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 312
        yield ($context["entry_company"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_company\" value=\"";
        // line 313
        yield ($context["shipping_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 316
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_address_1\" value=\"";
        // line 317
        yield ($context["shipping_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 321
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_address_2\" value=\"";
        // line 322
        yield ($context["shipping_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 325
        yield ($context["entry_city"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_city\" value=\"";
        // line 326
        yield ($context["shipping_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 330
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"shipping_postcode\" value=\"";
        // line 331
        yield ($context["shipping_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 335
        yield ($context["entry_country"] ?? null);
        yield "</label>
        <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">";
        // line 337
        yield ($context["text_select"] ?? null);
        yield "</option>
          ";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 339
            yield "            <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 339);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 339) == ($context["shipping_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 339);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        yield "        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 345
        yield ($context["entry_zone"] ?? null);
        yield "</label>
        <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"";
        // line 346
        yield ($context["shipping_zone_id"] ?? null);
        yield "\">
          <option value=\"\">";
        // line 347
        yield ($context["text_select"] ?? null);
        yield "</option>
          ";
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shipping_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 349
            yield "            <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 349);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 349) == ($context["shipping_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 349);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        yield "        </select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 355
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 355) == "address")) {
                // line 356
                yield "
          ";
                // line 357
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 357) == "select")) {
                    // line 358
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 358)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 358);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 359
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 359);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 359);
                    yield "</label>
              <select name=\"shipping_custom_field[";
                    // line 360
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 360);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360);
                    yield "]\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 360);
                    yield "\" class=\"form-select\">
                <option value=\"\">";
                    // line 361
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 362));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 363
                        yield "                  <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 363);
                        yield "\"";
                        if (((($_v36 = ($context["shipping_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 363)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 363) == (($_v37 = ($context["shipping_custom_field"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 363)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 363);
                        yield "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 365
                    yield "              </select>
              <div id=\"error-shipping-custom-field-";
                    // line 366
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 366);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 369
                yield "
          ";
                // line 370
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 370) == "radio")) {
                    // line 371
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 371)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 371);
                    yield "\">
              <label class=\"form-label\">";
                    // line 372
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 372);
                    yield "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 373
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 373);
                    yield "\">
                ";
                    // line 374
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 374));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 375
                        yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 376
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 376);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 376);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 376);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 376);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v38 = ($context["shipping_custom_field"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 376)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 376), (($_v39 = ($context["shipping_custom_field"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 376)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-shipping-custom-value-";
                        // line 377
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 377);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 377);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 380
                    yield "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 381
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 381);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 384
                yield "
          ";
                // line 385
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 385) == "checkbox")) {
                    // line 386
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 386)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 386);
                    yield "\">
              <label class=\"form-label\">";
                    // line 387
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 387);
                    yield "</label>
              <div id=\"input-shipping-custom-field-";
                    // line 388
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 388);
                    yield "\">
                ";
                    // line 389
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 389));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 390
                        yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 391
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 391);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 391);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 391);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v40 = ($context["shipping_custom_field"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 391), (($_v41 = ($context["shipping_custom_field"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 391)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                    <label for=\"input-shipping-custom-value-";
                        // line 392
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 392);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 392);
                        yield "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 395
                    yield "              </div>
              <div id=\"error-shipping-custom-field-";
                    // line 396
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 396);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 399
                yield "
          ";
                // line 400
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 400) == "text")) {
                    // line 401
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 401)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 401);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 402
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 402);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 402);
                    yield "</label>
              <input type=\"text\" name=\"shipping_custom_field[";
                    // line 403
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 403);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                    yield "]\" value=\"";
                    if ((($_v42 = ($context["shipping_custom_field"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null)) {
                        yield (($_v43 = ($context["shipping_custom_field"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 403);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 403);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 403);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 404
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 404);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 407
                yield "
          ";
                // line 408
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 408) == "textarea")) {
                    // line 409
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 409)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 409);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 410
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 410);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 410);
                    yield "</label>
              <textarea name=\"shipping_custom_field[";
                    // line 411
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 411);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                    yield "]\" rows=\"5\" placeholder=\"";
                    if ((($_v44 = ($context["shipping_custom_field"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411)] ?? null) : null)) {
                        yield (($_v45 = ($context["shipping_custom_field"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 411);
                    }
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 411);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 411);
                    yield "</textarea>
              <div id=\"error-shipping-custom-field-";
                    // line 412
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 412);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 415
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 415) == "file")) {
                    // line 416
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 416)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 416);
                    yield "\">
              <label class=\"form-label\">";
                    // line 417
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 417);
                    yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 419
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 419);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                <input type=\"hidden\" name=\"shipping_custom_field[";
                    // line 420
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 420);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                    yield "]\" value=\"";
                    if ((($_v46 = ($context["shipping_custom_field"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420)] ?? null) : null)) {
                        yield (($_v47 = ($context["shipping_custom_field"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420)] ?? null) : null);
                    }
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                    yield "\"/>
                <div id=\"error-shipping-custom-field-";
                    // line 421
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 421);
                    yield "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
                }
                // line 425
                yield "
          ";
                // line 426
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 426) == "date")) {
                    // line 427
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 427)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 427);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 428
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 428);
                    yield "</label>
              <input type=\"date\" name=\"shipping_custom_field[";
                    // line 429
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 429);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    yield "]\" value=\"";
                    if ((($_v48 = ($context["shipping_custom_field"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null)) {
                        yield (($_v49 = ($context["shipping_custom_field"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 429);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 429);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 429);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 430
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 430);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 433
                yield "
          ";
                // line 434
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 434) == "time")) {
                    // line 435
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 435)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 435);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 436
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 436);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 436);
                    yield "</label>
              <input type=\"time\" name=\"shipping_custom_field[";
                    // line 437
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 437);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437);
                    yield "]\" value=\"";
                    if ((($_v50 = ($context["shipping_custom_field"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437)] ?? null) : null)) {
                        yield (($_v51 = ($context["shipping_custom_field"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 437);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 437);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 437);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 438
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 438);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 441
                yield "
          ";
                // line 442
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 442) == "datetime")) {
                    // line 443
                    yield "            <div class=\"col mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 443)) {
                        yield " required";
                    }
                    yield " custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 443);
                    yield "\">
              <label for=\"input-shipping-custom-field-";
                    // line 444
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 444);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 444);
                    yield "</label>
              <input type=\"datetime-local\" name=\"shipping_custom_field[";
                    // line 445
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 445);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 445);
                    yield "]\" value=\"";
                    if ((($_v52 = ($context["shipping_custom_field"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 445)] ?? null) : null)) {
                        yield (($_v53 = ($context["shipping_custom_field"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 445)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 445);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 445);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 445);
                    yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                    // line 446
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 446);
                    yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
                }
                // line 449
                yield "        ";
            }
            // line 450
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        yield "    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>";
        // line 456
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">";
        // line 459
        yield ($context["entry_password"] ?? null);
        yield "</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">";
        // line 465
        yield ($context["captcha"] ?? null);
        yield "</div>
  </div>
  <div id class=\"row\">
    <div class=\"col\">
      <div class=\"form-check form-switch form-switch-lg\">
        <label for=\"input-newsletter\" class=\"form-check-label\">";
        // line 470
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
        <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      ";
        // line 473
        if (($context["text_agree"] ?? null)) {
            // line 474
            yield "        <div id=\"register-agree\" class=\"form-check form-switch form-switch-lg\">
          <label for=\"input-register-agree\" class=\"form-check-label\">";
            // line 475
            yield ($context["text_agree"] ?? null);
            yield "</label>
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"";
            // line 476
            if (($context["agree"] ?? null)) {
                yield " checked";
            }
            yield "/>
        </div>
      ";
        }
        // line 479
        yield "      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">";
        yield ($context["button_continue"] ?? null);
        yield "</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function() {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#register-agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#register-agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language=";
        // line 509
        yield ($context["language"] ?? null);
        yield "&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

                    if (custom_field['required']) {
                        \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function() {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/register.save&language=";
        // line 555
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-register').button('loading');
            },
            complete: function() {
                \$('#button-register').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 601
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function() {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 617
        yield ($context["language"] ?? null);
        yield "&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-' + type + '-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-' + type + '-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 647
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/register.twig";
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
        return array (  2104 => 647,  2088 => 634,  2068 => 617,  2049 => 601,  2000 => 555,  1951 => 509,  1917 => 479,  1909 => 476,  1905 => 475,  1902 => 474,  1900 => 473,  1894 => 470,  1886 => 465,  1875 => 459,  1869 => 456,  1862 => 451,  1856 => 450,  1853 => 449,  1847 => 446,  1831 => 445,  1825 => 444,  1816 => 443,  1814 => 442,  1811 => 441,  1805 => 438,  1789 => 437,  1783 => 436,  1774 => 435,  1772 => 434,  1769 => 433,  1763 => 430,  1747 => 429,  1741 => 428,  1732 => 427,  1730 => 426,  1727 => 425,  1720 => 421,  1708 => 420,  1696 => 419,  1691 => 417,  1682 => 416,  1679 => 415,  1673 => 412,  1657 => 411,  1651 => 410,  1642 => 409,  1640 => 408,  1637 => 407,  1631 => 404,  1615 => 403,  1609 => 402,  1600 => 401,  1598 => 400,  1595 => 399,  1589 => 396,  1586 => 395,  1575 => 392,  1561 => 391,  1558 => 390,  1554 => 389,  1550 => 388,  1546 => 387,  1537 => 386,  1535 => 385,  1532 => 384,  1526 => 381,  1523 => 380,  1512 => 377,  1498 => 376,  1495 => 375,  1491 => 374,  1487 => 373,  1483 => 372,  1474 => 371,  1472 => 370,  1469 => 369,  1463 => 366,  1460 => 365,  1445 => 363,  1441 => 362,  1437 => 361,  1429 => 360,  1423 => 359,  1414 => 358,  1412 => 357,  1409 => 356,  1406 => 355,  1402 => 354,  1397 => 351,  1382 => 349,  1378 => 348,  1374 => 347,  1370 => 346,  1366 => 345,  1360 => 341,  1345 => 339,  1341 => 338,  1337 => 337,  1332 => 335,  1323 => 331,  1319 => 330,  1310 => 326,  1306 => 325,  1298 => 322,  1294 => 321,  1285 => 317,  1281 => 316,  1273 => 313,  1269 => 312,  1266 => 311,  1257 => 307,  1253 => 306,  1244 => 302,  1240 => 301,  1237 => 300,  1235 => 299,  1230 => 297,  1221 => 296,  1215 => 292,  1208 => 288,  1204 => 286,  1202 => 285,  1199 => 284,  1193 => 283,  1189 => 281,  1183 => 278,  1167 => 277,  1161 => 276,  1152 => 275,  1150 => 274,  1147 => 273,  1141 => 270,  1125 => 269,  1119 => 268,  1110 => 267,  1107 => 266,  1101 => 263,  1085 => 262,  1079 => 261,  1070 => 260,  1067 => 259,  1061 => 256,  1048 => 254,  1036 => 253,  1031 => 251,  1022 => 250,  1019 => 249,  1013 => 246,  993 => 245,  984 => 244,  981 => 243,  975 => 240,  959 => 239,  953 => 238,  944 => 237,  941 => 236,  935 => 233,  932 => 232,  909 => 229,  906 => 228,  902 => 227,  898 => 226,  894 => 225,  885 => 224,  882 => 223,  876 => 220,  873 => 219,  850 => 216,  847 => 215,  843 => 214,  839 => 213,  835 => 212,  826 => 211,  824 => 210,  821 => 209,  815 => 206,  812 => 205,  797 => 203,  793 => 202,  789 => 201,  777 => 200,  768 => 199,  766 => 198,  763 => 197,  760 => 196,  756 => 195,  751 => 192,  736 => 190,  732 => 189,  728 => 188,  724 => 187,  720 => 186,  714 => 182,  699 => 180,  695 => 179,  691 => 178,  686 => 176,  677 => 172,  673 => 171,  664 => 167,  660 => 166,  652 => 163,  648 => 162,  639 => 158,  635 => 157,  627 => 154,  623 => 153,  617 => 150,  614 => 149,  612 => 148,  608 => 146,  602 => 145,  598 => 143,  592 => 140,  576 => 139,  570 => 138,  565 => 137,  563 => 136,  560 => 135,  554 => 132,  538 => 131,  532 => 130,  527 => 129,  525 => 128,  522 => 127,  516 => 124,  500 => 123,  494 => 122,  489 => 121,  487 => 120,  484 => 119,  478 => 116,  465 => 114,  453 => 113,  446 => 111,  441 => 110,  439 => 109,  436 => 108,  430 => 105,  410 => 104,  405 => 103,  403 => 102,  400 => 101,  394 => 98,  378 => 97,  372 => 96,  367 => 95,  365 => 94,  362 => 93,  356 => 90,  353 => 89,  342 => 86,  328 => 85,  325 => 84,  321 => 83,  317 => 82,  313 => 81,  308 => 80,  306 => 79,  303 => 78,  297 => 75,  294 => 74,  283 => 71,  269 => 70,  266 => 69,  262 => 68,  258 => 67,  254 => 66,  249 => 65,  247 => 64,  244 => 63,  238 => 60,  235 => 59,  220 => 57,  216 => 56,  212 => 55,  200 => 54,  195 => 53,  193 => 52,  190 => 51,  188 => 50,  185 => 49,  180 => 48,  171 => 44,  167 => 43,  160 => 42,  158 => 41,  150 => 38,  146 => 37,  137 => 33,  133 => 32,  124 => 28,  120 => 27,  113 => 22,  98 => 20,  94 => 19,  89 => 17,  82 => 16,  71 => 12,  61 => 9,  57 => 7,  55 => 6,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-register\">
  <p>{{ text_login }}</p>
  <fieldset>
    <legend>{{ heading_title }}</legend>
    <div class=\"row\">
      {% if config_checkout_guest %}
        <div class=\"col mb-3 required\">
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"1\" id=\"input-register\" class=\"form-check-input\"{% if account %} checked{% endif %}/> <label for=\"input-register\" class=\"form-check-label\">{{ text_register }}</label>
          </div>
          <div class=\"form-check form-check-inline\">
            <input type=\"radio\" name=\"account\" value=\"0\" id=\"input-guest\" class=\"form-check-input\"{% if not account %} checked{% endif %}/> <label for=\"input-guest\" class=\"form-check-label\">{{ text_guest }}</label>
          </div>
        </div>
      {% endif %}
      <div class=\"col mb-3{% if customer_groups|length <= 1 %} d-none{% endif %}\">
        <label class=\"form-label\">{{ entry_customer_group }}</label>
        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
          {% for customer_group in customer_groups %}
            <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
          {% endfor %}
        </select>
      </div>
    </div>
    <div class=\"row row-cols-1 row-cols-md-2\">
      <div class=\"col mb-3 required\">
        <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
        <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
        <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
        <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
        <div id=\"error-email\" class=\"invalid-feedback\"></div>
      </div>
      {% if config_telephone_display %}
        <div class=\"col mb-3{% if config_telephone_required %} required{% endif %}\">
          <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label>
          <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
      {% endif %}
      {% for custom_field in custom_fields %}

        {% if custom_field.location == 'account' %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-customer-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
              </div>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

        {% endif %}
      {% endfor %}
    </div>
  </fieldset>
  {% if config_checkout_payment_address %}
    <fieldset>
      <legend>{{ text_payment_address }}</legend>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label>
          <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
          <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
          <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label>
          <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
          <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label>
          <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"\">{{ text_select }}</option>
            {% for country in countries %}
              <option value=\"{{ country.country_id }}\"{% if country.country_id == payment_country_id %} selected{% endif %}>{{ country.name }}</option>
            {% endfor %}
          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
          <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\" data-oc-value=\"{{ payment_zone_id }}\">
            <option value=\"\">{{ text_select }}</option>
            {% for zone in payment_zones %}
              <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == payment_zone_id %} selected{% endif %}>{{ zone.name }}</option>
            {% endfor %}
          </select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>
        {% for custom_field in custom_fields %}
          {% if custom_field.location == 'address' %}

            {% if custom_field.type == 'select' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                  <option value=\"\">{{ text_select }}</option>
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                  {% endfor %}
                </select>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'radio' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"radio\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'checkbox' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                  {% for custom_field_value in custom_field.custom_field_value %}
                    <div class=\"form-check\">
                      <input type=\"checkbox\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                    </div>
                  {% endfor %}
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'text' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"text\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'textarea' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'file' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label class=\"form-label\">{{ custom_field.name }}</label>
                <div>
                  <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                  <input type=\"hidden\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\"/>
                </div>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'date' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"date\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            {% if custom_field.type == 'time' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"time\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

            {% if custom_field.type == 'datetime' %}
              <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
                <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
                <input type=\"datetime-local\" name=\"payment_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if payment_custom_field[custom_field.custom_field_id] %}{{ payment_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}

          {% endif %}
        {% endfor %}

        {% if shipping_required %}
          <div class=\"col mb-3\">
            <div class=\"form-check\">
              <input type=\"checkbox\" name=\"address_match\" value=\"1\" id=\"input-address-match\" class=\"form-check-input\" checked/> <label for=\"input-address-match\" class=\"form-check-label\">{{ entry_match }}</label>
            </div>
          </div>
        {% endif %}

      </div>
    </fieldset>
  {% endif %}
  <fieldset id=\"shipping-address\" style=\"display: {% if not config_checkout_payment_address %}block{% else %}none{% endif %};\">
    <legend>{{ text_shipping_address }}</legend>
    <div class=\"row row-cols-1 row-cols-md-2\">
      {% if config_checkout_payment_address %}
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
          <input type=\"text\" name=\"shipping_firstname\" value=\"{{ shipping_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\"/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
          <input type=\"text\" name=\"shipping_lastname\" value=\"{{ shipping_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\"/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
      {% endif %}
      <div class=\"col mb-3\">
        <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label>
        <input type=\"text\" name=\"shipping_company\" value=\"{{ shipping_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
        <input type=\"text\" name=\"shipping_address_1\" value=\"{{ shipping_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\"/>
        <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3\">
        <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
        <input type=\"text\" name=\"shipping_address_2\" value=\"{{ shipping_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label>
        <input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\"/>
        <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
        <input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\"/>
        <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label>
        <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
          <option value=\"\">{{ text_select }}</option>
          {% for country in countries %}
            <option value=\"{{ country.country_id }}\"{% if country.country_id == shipping_country_id %} selected{% endif %}>{{ country.name }}</option>
          {% endfor %}
        </select>
        <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
      </div>
      <div class=\"col mb-3 required\">
        <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label>
        <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\" data-oc-value=\"{{ shipping_zone_id }}\">
          <option value=\"\">{{ text_select }}</option>
          {% for zone in shipping_zones %}
            <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == shipping_zone_id %} selected{% endif %}>{{ zone.name }}</option>
          {% endfor %}
        </select>
        <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
      </div>
      {% for custom_field in custom_fields %}
        {% if custom_field.location == 'address' %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <select name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                    <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <textarea name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}
          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\"/>
                <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"shipping_custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]\" value=\"{% if shipping_custom_field[custom_field.custom_field_id] %}{{ shipping_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}
        {% endif %}
      {% endfor %}
    </div>
  </fieldset>
  <div id class=\"row row-cols-1 row-cols-md-2\">
    <div id=\"password\" class=\"col mb-3 required\">
      <fieldset>
        <legend>{{ text_your_password }}</legend>
        <div class=\"row\">
          <div class=\"col mb-3 required\">
            <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label> <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
            <div id=\"error-password\" class=\"invalid-feedback\"></div>
          </div>
        </div>
      </fieldset>
    </div>
    <div class=\"col mb-3 required\">{{ captcha }}</div>
  </div>
  <div id class=\"row\">
    <div class=\"col\">
      <div class=\"form-check form-switch form-switch-lg\">
        <label for=\"input-newsletter\" class=\"form-check-label\">{{ entry_newsletter }}</label>
        <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
      </div>
      {% if text_agree %}
        <div id=\"register-agree\" class=\"form-check form-switch form-switch-lg\">
          <label for=\"input-register-agree\" class=\"form-check-label\">{{ text_agree }}</label>
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-register-agree\" class=\"form-check-input\"{% if agree %} checked{% endif %}/>
        </div>
      {% endif %}
      <button type=\"submit\" id=\"button-register\" class=\"btn btn-primary mt-2\">{{ button_continue }}</button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Account
\$('input[name=\\'account\\']').on('click', function() {
    if (\$(this).val() == 1) {
        \$('#password').removeClass('d-none');
    } else {
        // If guest hide password field
        \$('#password').addClass('d-none');
    }

    if (\$(this).val() == 1) {
        \$('#register-agree').removeClass('d-none');
    } else {
        // If guest hide register agree field
        \$('#register-agree').addClass('d-none');
    }
});

\$('input[name=\\'account\\']:checked').trigger('click');

// Customer Group
\$('#input-customer-group').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=account/custom_field&language={{ language }}&customer_group_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                \$('.custom-field').addClass('d-none');
                \$('.custom-field').removeClass('required');

                for (i = 0; i < json.length; i++) {
                    custom_field = json[i];

                    \$('.custom-field-' + custom_field['custom_field_id']).removeClass('d-none');

                    if (custom_field['required']) {
                        \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-address-match').on('change', function() {
    if (\$(this).prop('checked')) {
        \$('#shipping-address').hide();
    } else {
        \$('#shipping-address').show();
    }
});

\$('#form-register').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/register.save&language={{ language }}',
            type: 'post',
            dataType: 'json',
            data: \$('#form-register').serialize(),
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-register').button('loading');
            },
            complete: function() {
                \$('#button-register').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-register').find('.is-invalid').removeClass('is-invalid');
                \$('#form-register').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    if (\$('#input-register').prop('checked')) {
                        \$('input[name=\\'account\\']').prop('disabled', true);
                        \$('#input-customer-group').prop('disabled', true);
                        \$('#input-password').prop('disabled', true);
                        \$('#input-captcha').prop('disabled', true);
                        \$('#input-register-agree').prop('disabled', true);
                    }

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('select[name\$=\\'_country_id\\']').on('change', function() {
    var element = this;
    var type = \$(this).attr('name').slice(0, -11);

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language={{ language }}&country_id=' + \$('#input-' + type + '-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-' + type + '-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-' + type + '-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-' + type + '-postcode').parent().addClass('required');
                } else {
                    \$('#input-' + type + '-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                        if (json['zone'][i]['zone_id'] == \$('#input-' + type + '-zone').attr('data-oc-value')) {
                            html += ' selected';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
                }

                \$('#input-' + type + '-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
", "catalog/view/template/checkout/register.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/register.twig");
    }
}
