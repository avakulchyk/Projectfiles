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

/* catalog/view/template/checkout/confirm.twig */
class __TwigTemplate_f4a92089173b96d2a7c42a6d0a29206ab7eb1c1c8362cd888b9ffeca7877ae9e extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>";
        // line 5
        yield ($context["column_product"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 6
        yield ($context["column_total"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            yield "        <tr>
          <td>";
            // line 12
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 12);
            yield "x <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
            yield "</a>

            <ul class=\"list-unstyled mb-0\">
              <li>
                <small> - ";
            // line 16
            yield ($context["text_model"] ?? null);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 16);
            yield "</small>
              </li>
              ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 19
                yield "                <li>
                  <small> - ";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                yield "</small>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "
              ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 24)) {
                // line 25
                yield "                <li>
                  <small> - ";
                // line 26
                yield ($context["text_subscription"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 26);
                yield "</small>
                </li>
              ";
            }
            // line 29
            yield "
              ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 30)) {
                // line 31
                yield "                <li>
                  <small> - ";
                // line 32
                yield ($context["text_points"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 32);
                yield "</small>
                </li>
              ";
            }
            // line 35
            yield "            </ul>

          </td>
          <td class=\"text-end\">";
            // line 38
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 38);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </tbody>
    <tfoot>
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 44
            yield "        <tr>
          <td class=\"text-end\"><strong>";
            // line 45
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 45);
            yield "</strong></td>
          <td class=\"text-end\">";
            // line 46
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 46);
            yield "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "    </tfoot>
  </table>
</div>
<div id=\"checkout-payment\">
  ";
        // line 53
        if (($context["payment"] ?? null)) {
            // line 54
            yield "    ";
            yield ($context["payment"] ?? null);
            yield "
  ";
        } else {
            // line 56
            yield "    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>";
            yield ($context["button_confirm"] ?? null);
            yield "</button></div>
  ";
        }
        // line 58
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/confirm.twig";
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
        return array (  192 => 58,  186 => 56,  180 => 54,  178 => 53,  172 => 49,  163 => 46,  159 => 45,  156 => 44,  152 => 43,  148 => 41,  139 => 38,  134 => 35,  126 => 32,  123 => 31,  121 => 30,  118 => 29,  110 => 26,  107 => 25,  105 => 24,  102 => 23,  91 => 20,  88 => 19,  84 => 18,  77 => 16,  66 => 12,  63 => 11,  59 => 10,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_product }}</th>
        <th class=\"text-end\">{{ column_total }}</th>
      </tr>
    </thead>
    <tbody>
      {% for product in products %}
        <tr>
          <td>{{ product.quantity }}x <a href=\"{{ product.href }}\">{{ product.name }}</a>

            <ul class=\"list-unstyled mb-0\">
              <li>
                <small> - {{ text_model }}: {{ product.model }}</small>
              </li>
              {% for option in product.option %}
                <li>
                  <small> - {{ option.name }}: {{ option.value }}</small>
                </li>
              {% endfor %}

              {% if product.subscription %}
                <li>
                  <small> - {{ text_subscription }}: {{ product.subscription }}</small>
                </li>
              {% endif %}

              {% if product.reward %}
                <li>
                  <small> - {{ text_points }}: {{ product.reward }}</small>
                </li>
              {% endif %}
            </ul>

          </td>
          <td class=\"text-end\">{{ product.total }}</td>
        </tr>
      {% endfor %}
    </tbody>
    <tfoot>
      {% for total in totals %}
        <tr>
          <td class=\"text-end\"><strong>{{ total.title }}</strong></td>
          <td class=\"text-end\">{{ total.text }}</td>
        </tr>
      {% endfor %}
    </tfoot>
  </table>
</div>
<div id=\"checkout-payment\">
  {% if payment %}
    {{ payment }}
  {% else %}
    <div class=\"text-end\"><button type=\"button\" class=\"btn btn-primary\" disabled>{{ button_confirm }}</button></div>
  {% endif %}
</div>
", "catalog/view/template/checkout/confirm.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/catalog/view/template/checkout/confirm.twig");
    }
}
