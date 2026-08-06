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

/* admin/view/template/user/api_form.twig */
class __TwigTemplate_749beb2159f54b548236c612d8c086b7224156def3f684315baeea17abeba52c extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-api\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-api\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 22
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 23
        yield ($context["tab_ip"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-username\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_username"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"";
        // line 31
        yield ($context["username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\"/>
                  <div id=\"error-username\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_key"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"";
        // line 38
        yield ($context["entry_key"] ?? null);
        yield "\" rows=\"5\" id=\"input-key\" class=\"form-control mb-1\">";
        yield ($context["key"] ?? null);
        yield "</textarea>
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i> ";
        // line 39
        yield ($context["button_generate"] ?? null);
        yield "</button>
                  <div id=\"error-key\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 48
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 54
        yield ($context["text_ip"] ?? null);
        yield "</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 59
        yield ($context["entry_ip"] ?? null);
        yield "</th>
                      <th class=\"text-end\"></th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 64
        $context["ip_row"] = 0;
        // line 65
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["api_ips"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api_ip"]) {
            // line 66
            yield "                      <tr id=\"ip-row-";
            yield ($context["ip_row"] ?? null);
            yield "\">
                        <td><input type=\"text\" name=\"api_ip[]\" value=\"";
            // line 67
            yield $context["api_ip"];
            yield "\" placeholder=\"";
            yield ($context["entry_ip"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#ip-row-";
            // line 68
            yield ($context["ip_row"] ?? null);
            yield "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 70
            $context["ip_row"] = (($context["ip_row"] ?? null) + 1);
            // line 71
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api_ip'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-ip\" data-bs-toggle=\"tooltip\" title=\"";
        // line 76
        yield ($context["button_ip_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 84
        yield ($context["text_history"] ?? null);
        yield "</legend>
                <div id=\"history\">";
        // line 85
        yield ($context["history"] ?? null);
        yield "</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"api_id\" value=\"";
        // line 89
        yield ($context["api_id"] ?? null);
        yield "\" id=\"input-api-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function() {
    rand = '';

    string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    for (i = 0; i < 256; i++) {
        rand += string[Math.floor(Math.random() * (string.length - 1))];
    }

    \$('#input-key').val(rand);
});

var ip_row = ";
        // line 108
        yield ($context["ip_row"] ?? null);
        yield ";

\$('#button-ip').on('click', function() {
    html = '<tr id=\"ip-row-' + ip_row + '\">';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_ip"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#ip-row-' + ip_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#ip tbody').append(html);

    ip_row++;
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
";
        // line 127
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/user/api_form.twig";
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
        return array (  293 => 127,  276 => 113,  272 => 112,  265 => 108,  243 => 89,  236 => 85,  232 => 84,  221 => 76,  215 => 72,  209 => 71,  207 => 70,  200 => 68,  194 => 67,  189 => 66,  184 => 65,  182 => 64,  174 => 59,  166 => 54,  155 => 48,  148 => 44,  140 => 39,  134 => 38,  129 => 36,  119 => 31,  114 => 29,  106 => 24,  102 => 23,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-api\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-api\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-ip\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_ip }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_history }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-username\" class=\"col-sm-2 col-form-label\">{{ entry_username }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"{{ username }}\" placeholder=\"{{ entry_username }}\" id=\"input-username\" class=\"form-control\"/>
                  <div id=\"error-username\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-key\" class=\"col-sm-2 col-form-label\">{{ entry_key }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"{{ entry_key }}\" rows=\"5\" id=\"input-key\" class=\"form-control mb-1\">{{ key }}</textarea>
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-rotate\"></i> {{ button_generate }}</button>
                  <div id=\"error-key\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"form-check form-switch form-switch-lg\">
                    <input type=\"hidden\" name=\"status\" value=\"0\"/>
                    <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-ip\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_ip }}</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_ip }}</th>
                      <th class=\"text-end\"></th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set ip_row = 0 %}
                    {% for api_ip in api_ips %}
                      <tr id=\"ip-row-{{ ip_row }}\">
                        <td><input type=\"text\" name=\"api_ip[]\" value=\"{{ api_ip }}\" placeholder=\"{{ entry_ip }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#ip-row-{{ ip_row }}').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set ip_row = ip_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-ip\" data-bs-toggle=\"tooltip\" title=\"{{ button_ip_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-history\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_history }}</legend>
                <div id=\"history\">{{ history }}</div>
              </fieldset>
            </div>
          </div>
          <input type=\"hidden\" name=\"api_id\" value=\"{{ api_id }}\" id=\"input-api-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function() {
    rand = '';

    string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    for (i = 0; i < 256; i++) {
        rand += string[Math.floor(Math.random() * (string.length - 1))];
    }

    \$('#input-key').val(rand);
});

var ip_row = {{ ip_row }};

\$('#button-ip').on('click', function() {
    html = '<tr id=\"ip-row-' + ip_row + '\">';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"{{ entry_ip|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#ip-row-' + ip_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#ip tbody').append(html);

    ip_row++;
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>
{{ footer }}", "admin/view/template/user/api_form.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/admin/view/template/user/api_form.twig");
    }
}
