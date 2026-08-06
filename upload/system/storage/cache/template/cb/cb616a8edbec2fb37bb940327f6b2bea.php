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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_c88ead6f6e71b9da38eb15a418dd3f2d extends Template
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
<div id=\"product-search\" class=\"container\">
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
  <div class=\"row\">
    ";
        // line 9
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">
      ";
        // line 11
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <div class=\"row\">
        <div class=\"col\"><label for=\"input-search\" class=\"col-form-label\">";
        // line 14
        yield ($context["entry_search"] ?? null);
        yield "</label></div>
      </div>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 18
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_keyword"] ?? null);
        yield "\" id=\"input-search\" class=\"form-control mb-1\"/>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"";
        // line 20
        if (($context["description"] ?? null)) {
            yield " checked";
        }
        yield "/>
            <label for=\"input-description\" class=\"form-check-label\">";
        // line 21
        yield ($context["entry_description"] ?? null);
        yield "</label>
          </div>
        </div>
        <div class=\"col mb-3\">
          <select name=\"category_id\" id=\"input-category\" class=\"form-select mb-1\">
            <option value=\"0\">";
        // line 26
        yield ($context["text_category"] ?? null);
        yield "</option>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 28
            yield "              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 28) == ($context["category_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 28);
            yield "</option>
              ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 30
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 30) == ($context["category_id"] ?? null))) {
                    yield " selected";
                }
                yield ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 30);
                yield "</option>
                ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 32
                    yield "                  <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 32);
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 32) == ($context["category_id"] ?? null))) {
                        yield " selected";
                    }
                    yield ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 32);
                    yield "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "          </select>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"";
        // line 38
        if (($context["sub_category"] ?? null)) {
            yield " checked";
        }
        yield "/>
            <label for=\"input-sub-category\" class=\"form-check-label\">";
        // line 39
        yield ($context["text_sub_category"] ?? null);
        yield "</label>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col text-end\">
          <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">";
        // line 45
        yield ($context["button_search"] ?? null);
        yield "</button>
        </div>
      </div>
      <hr/>
      <h2>";
        // line 49
        yield ($context["text_search"] ?? null);
        yield "</h2>
      ";
        // line 50
        if (($context["products"] ?? null)) {
            // line 51
            yield "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 54
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-inline d-md-none d-lg-inline\">";
            yield ($context["text_compare"] ?? null);
            yield "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 59
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 60
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">";
            // line 65
            yield ($context["text_sort"] ?? null);
            yield "</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 68
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 68);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 68) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 68);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">";
            // line 75
            yield ($context["text_limit"] ?? null);
            yield "</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 78
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 78);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 78) == ($context["limit"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 78);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "              </select>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 86
                yield "            <div class=\"col mb-3\">";
                yield $context["product"];
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 90
            yield ($context["pagination"] ?? null);
            yield "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 91
            yield ($context["results"] ?? null);
            yield "</div>
        </div>
      ";
        } else {
            // line 94
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
      ";
        }
        // line 96
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
    ";
        // line 98
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
    url = 'index.php?route=product/search&language=";
        // line 103
        yield ($context["language"] ?? null);
        yield "';

    var search = \$('#input-search').val();

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var description = \$('#input-description:checked').prop('value');

    if (description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function(e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function() {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
";
        // line 144
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
        return "catalog/view/template/product/search.twig";
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
        return array (  386 => 144,  342 => 103,  334 => 98,  328 => 96,  322 => 94,  316 => 91,  312 => 90,  308 => 88,  299 => 86,  295 => 85,  288 => 80,  273 => 78,  269 => 77,  264 => 75,  257 => 70,  242 => 68,  238 => 67,  233 => 65,  225 => 60,  221 => 59,  211 => 54,  206 => 51,  204 => 50,  200 => 49,  193 => 45,  184 => 39,  178 => 38,  174 => 36,  168 => 35,  162 => 34,  147 => 32,  143 => 31,  132 => 30,  128 => 29,  117 => 28,  113 => 27,  109 => 26,  101 => 21,  95 => 20,  88 => 18,  81 => 14,  76 => 12,  72 => 11,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-search\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">
    {{ column_left }}
    <div id=\"content\" class=\"col\">
      {{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"row\">
        <div class=\"col\"><label for=\"input-search\" class=\"col-form-label\">{{ entry_search }}</label></div>
      </div>
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_keyword }}\" id=\"input-search\" class=\"form-control mb-1\"/>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"{% if description %} checked{% endif %}/>
            <label for=\"input-description\" class=\"form-check-label\">{{ entry_description }}</label>
          </div>
        </div>
        <div class=\"col mb-3\">
          <select name=\"category_id\" id=\"input-category\" class=\"form-select mb-1\">
            <option value=\"0\">{{ text_category }}</option>
            {% for category_1 in categories %}
              <option value=\"{{ category_1.category_id }}\"{% if category_1.category_id == category_id %} selected{% endif %}>{{ category_1.name }}</option>
              {% for category_2 in category_1.children %}
                <option value=\"{{ category_2.category_id }}\"{% if category_2.category_id == category_id %} selected{% endif %}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>
                {% for category_3 in category_2.children %}
                  <option value=\"{{ category_3.category_id }}\"{% if category_3.category_id == category_id %} selected{% endif %}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>
                {% endfor %}
              {% endfor %}
            {% endfor %}
          </select>
          <div class=\"form-check\">
            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"{% if sub_category %} checked{% endif %}/>
            <label for=\"input-sub-category\" class=\"form-check-label\">{{ text_sub_category }}</label>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col text-end\">
          <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">{{ button_search }}</button>
        </div>
      </div>
      <hr/>
      <h2>{{ text_search }}</h2>
      {% if products %}
        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"{{ compare }}\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-inline d-md-none d-lg-inline\">{{ text_compare }}</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">{{ text_sort }}</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for sorts in sorts %}
                  <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">{{ text_limit }}</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for limits in limits %}
                  <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
        </div>
        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          {% for product in products %}
            <div class=\"col mb-3\">{{ product }}</div>
          {% endfor %}
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-end\">{{ results }}</div>
        </div>
      {% else %}
        <p>{{ text_no_results }}</p>
      {% endif %}
      {{ content_bottom }}
    </div>
    {{ column_right }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
    url = 'index.php?route=product/search&language={{ language }}';

    var search = \$('#input-search').val();

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var description = \$('#input-description:checked').prop('value');

    if (description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function(e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function() {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
{{ footer }}
", "catalog/view/template/product/search.twig", "/var/www/html/catalog/view/template/product/search.twig");
    }
}
