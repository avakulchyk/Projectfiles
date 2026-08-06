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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_7020a10189835dd80704ff781bc77a5bee2a3b4a3c53be1461caecf60687e0b7 extends Template
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
<div id=\"information-contact\" class=\"container\">
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
      <h3>";
        // line 11
        yield ($context["text_location"] ?? null);
        yield "</h3>
      <div class=\"card mb-3\">
        <div class=\"card-body\">
          <div class=\"row\">
            ";
        // line 15
        if (($context["image"] ?? null)) {
            // line 16
            yield "              <div class=\"col-sm-3\"><img src=\"";
            yield ($context["image"] ?? null);
            yield "\" alt=\"";
            yield ($context["store"] ?? null);
            yield "\" title=\"";
            yield ($context["store"] ?? null);
            yield "\" class=\"img-thumbnail\"/></div>
            ";
        }
        // line 18
        yield "            <div class=\"col-sm-3\"><strong>";
        yield ($context["store"] ?? null);
        yield "</strong>
              <br/>
              <address>
                ";
        // line 21
        yield ($context["address"] ?? null);
        yield "
              </address>
              ";
        // line 23
        if (($context["geocode"] ?? null)) {
            // line 24
            yield "                <a href=\"https://maps.google.com/maps?q=";
            yield Twig\Extension\CoreExtension::urlencode(($context["geocode"] ?? null));
            yield "&hl=";
            yield ($context["geocode_hl"] ?? null);
            yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> ";
            yield ($context["button_map"] ?? null);
            yield "</a>
              ";
        }
        // line 26
        yield "            </div>
            ";
        // line 27
        if (($context["telephone"] ?? null)) {
            // line 28
            yield "              <div class=\"col-sm-3\"><strong>";
            yield ($context["text_telephone"] ?? null);
            yield "</strong>
                <br/>
                ";
            // line 30
            yield ($context["telephone"] ?? null);
            yield "
                <br/>
                <br/>
              </div>
            ";
        }
        // line 35
        yield "            <div class=\"col-sm-3\">
              ";
        // line 36
        if (($context["open"] ?? null)) {
            // line 37
            yield "                <strong>";
            yield ($context["text_open"] ?? null);
            yield "</strong>
                <br/>
                ";
            // line 39
            yield ($context["open"] ?? null);
            yield "
                <br/>
                <br/>
              ";
        }
        // line 43
        yield "              ";
        if (($context["comment"] ?? null)) {
            // line 44
            yield "                <strong>";
            yield ($context["text_comment"] ?? null);
            yield "</strong>
                <br/>
                ";
            // line 46
            yield ($context["comment"] ?? null);
            yield "
              ";
        }
        // line 48
        yield "            </div>
          </div>
        </div>
      </div>
      ";
        // line 52
        if (($context["locations"] ?? null)) {
            // line 53
            yield "        <h3>";
            yield ($context["text_store"] ?? null);
            yield "</h3>
        <div id=\"accordion\" class=\"accordion mb-3\">

          ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 57
                yield "
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-location-";
                // line 60
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 60);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 60);
                yield "</button>
              </h2>

              <div id=\"collapse-location-";
                // line 63
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 63);
                yield "\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">

                <div class=\"accordion-body\">
                  <div class=\"row\">
                    ";
                // line 67
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 67)) {
                    // line 68
                    yield "                      <div class=\"col-sm-3\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 68);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 68);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 68);
                    yield "\" class=\"img-thumbnail\"/></div>
                    ";
                }
                // line 70
                yield "                    <div class=\"col-sm-3\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 70);
                yield "</strong>
                      <br/>
                      <address>
                        ";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 73);
                yield "
                      </address>
                      ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 75)) {
                    // line 76
                    yield "                        <a href=\"https://maps.google.com/maps?q=";
                    yield Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 76));
                    yield "&hl=";
                    yield ($context["geocode_hl"] ?? null);
                    yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-location-dot\"></i> ";
                    yield ($context["button_map"] ?? null);
                    yield "</a>
                      ";
                }
                // line 78
                yield "                    </div>
                    <div class=\"col-sm-3\"><strong>";
                // line 79
                yield ($context["text_telephone"] ?? null);
                yield "</strong>
                      <br/>
                      ";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 81);
                yield "
                      <br/>
                      <br/>
                    </div>
                    <div class=\"col-sm-3\">
                      ";
                // line 86
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 86)) {
                    // line 87
                    yield "                        <strong>";
                    yield ($context["text_open"] ?? null);
                    yield "</strong>
                        <br/>
                        ";
                    // line 89
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 89);
                    yield "
                        <br/>
                      ";
                }
                // line 92
                yield "                      ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 92)) {
                    // line 93
                    yield "                        ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 93);
                    yield "
                      ";
                }
                // line 95
                yield "                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "        </div>
      ";
        }
        // line 103
        yield "      <form id=\"form-contact\" action=\"";
        yield ($context["send"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 105
        yield ($context["text_contact"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 107
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 109
        yield ($context["name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 114
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 116
        yield ($context["email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-enquiry\" class=\"col-sm-2 col-form-label\">";
        // line 121
        yield ($context["entry_enquiry"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
              <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        // line 127
        yield ($context["captcha"] ?? null);
        yield "
        </fieldset>
        <div class=\"text-end\">
          <button type=\"submit\" class=\"btn btn-primary\">";
        // line 130
        yield ($context["button_submit"] ?? null);
        yield "</button>
        </div>
      </form>
      ";
        // line 133
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 134
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 136
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
        return "catalog/view/template/information/contact.twig";
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
        return array (  368 => 136,  363 => 134,  359 => 133,  353 => 130,  347 => 127,  338 => 121,  330 => 116,  325 => 114,  317 => 109,  312 => 107,  307 => 105,  301 => 103,  297 => 101,  286 => 95,  280 => 93,  277 => 92,  271 => 89,  265 => 87,  263 => 86,  255 => 81,  250 => 79,  247 => 78,  237 => 76,  235 => 75,  230 => 73,  223 => 70,  213 => 68,  211 => 67,  204 => 63,  196 => 60,  191 => 57,  187 => 56,  180 => 53,  178 => 52,  172 => 48,  167 => 46,  161 => 44,  158 => 43,  151 => 39,  145 => 37,  143 => 36,  140 => 35,  132 => 30,  126 => 28,  124 => 27,  121 => 26,  111 => 24,  109 => 23,  104 => 21,  97 => 18,  87 => 16,  85 => 15,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <h3>{{ text_location }}</h3>
      <div class=\"card mb-3\">
        <div class=\"card-body\">
          <div class=\"row\">
            {% if image %}
              <div class=\"col-sm-3\"><img src=\"{{ image }}\" alt=\"{{ store }}\" title=\"{{ store }}\" class=\"img-thumbnail\"/></div>
            {% endif %}
            <div class=\"col-sm-3\"><strong>{{ store }}</strong>
              <br/>
              <address>
                {{ address }}
              </address>
              {% if geocode %}
                <a href=\"https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa-solid fa-location-dot\"></i> {{ button_map }}</a>
              {% endif %}
            </div>
            {% if telephone %}
              <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong>
                <br/>
                {{ telephone }}
                <br/>
                <br/>
              </div>
            {% endif %}
            <div class=\"col-sm-3\">
              {% if open %}
                <strong>{{ text_open }}</strong>
                <br/>
                {{ open }}
                <br/>
                <br/>
              {% endif %}
              {% if comment %}
                <strong>{{ text_comment }}</strong>
                <br/>
                {{ comment }}
              {% endif %}
            </div>
          </div>
        </div>
      </div>
      {% if locations %}
        <h3>{{ text_store }}</h3>
        <div id=\"accordion\" class=\"accordion mb-3\">

          {% for location in locations %}

            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\">
                <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-location-{{ location.location_id }}\">{{ location.name }}</button>
              </h2>

              <div id=\"collapse-location-{{ location.location_id }}\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion\">

                <div class=\"accordion-body\">
                  <div class=\"row\">
                    {% if location.image %}
                      <div class=\"col-sm-3\"><img src=\"{{ location.image }}\" alt=\"{{ location.name }}\" title=\"{{ location.name }}\" class=\"img-thumbnail\"/></div>
                    {% endif %}
                    <div class=\"col-sm-3\"><strong>{{ location.name }}</strong>
                      <br/>
                      <address>
                        {{ location.address }}
                      </address>
                      {% if location.geocode %}
                        <a href=\"https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15\" target=\"_blank\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-location-dot\"></i> {{ button_map }}</a>
                      {% endif %}
                    </div>
                    <div class=\"col-sm-3\"><strong>{{ text_telephone }}</strong>
                      <br/>
                      {{ location.telephone }}
                      <br/>
                      <br/>
                    </div>
                    <div class=\"col-sm-3\">
                      {% if location.open %}
                        <strong>{{ text_open }}</strong>
                        <br/>
                        {{ location.open }}
                        <br/>
                      {% endif %}
                      {% if location.comment %}
                        {{ location.comment }}
                      {% endif %}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      {% endif %}
      <form id=\"form-contact\" action=\"{{ send }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>{{ text_contact }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-enquiry\" class=\"col-sm-2 col-form-label\">{{ entry_enquiry }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
              <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          {{ captcha }}
        </fieldset>
        <div class=\"text-end\">
          <button type=\"submit\" class=\"btn btn-primary\">{{ button_submit }}</button>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/information/contact.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/information/contact.twig");
    }
}
