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

/* admin/view/template/user/api_history.twig */
class __TwigTemplate_0580e129e27d35330364c121ee39bd2036c83802bdb5b1da847fade24b51da22 extends Template
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
  <table id=\"history\" class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>";
        // line 5
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_call"] ?? null);
        yield "</th>
        <th>";
        // line 7
        yield ($context["column_date_added"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["histories"] ?? null)) {
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 13
                yield "          <tr>
            <td>";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "ip", [], "any", false, false, false, 14);
                yield "</td>
            <td>";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "call", [], "any", false, false, false, 15);
                yield "</td>
            <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 16);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "      ";
        } else {
            // line 20
            yield "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 21
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 24
        yield "    </tbody>
  </table>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/user/api_history.twig";
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
        return array (  102 => 24,  96 => 21,  93 => 20,  90 => 19,  81 => 16,  77 => 15,  73 => 14,  70 => 13,  65 => 12,  63 => 11,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table id=\"history\" class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_ip }}</th>
        <th>{{ column_call }}</th>
        <th>{{ column_date_added }}</th>
      </tr>
    </thead>
    <tbody>
      {% if histories %}
        {% for history in histories %}
          <tr>
            <td>{{ history.ip }}</td>
            <td>{{ history.call }}</td>
            <td>{{ history.date_added }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>", "admin/view/template/user/api_history.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/admin/view/template/user/api_history.twig");
    }
}
