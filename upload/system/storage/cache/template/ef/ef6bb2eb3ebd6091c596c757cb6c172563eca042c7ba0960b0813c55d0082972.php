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

/* extension/opencart/catalog/view/template/module/featured.twig */
class __TwigTemplate_138092ef194f299a0d0e7bb079f452e8689953c68aefc592c91ce26593aa4c14 extends Template
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
        yield "<h3>";
        yield ($context["heading_title"] ?? null);
        yield "</h3>
<div class=\"row";
        // line 2
        if ((($context["axis"] ?? null) == "horizontal")) {
            yield " row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4";
        }
        yield "\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            yield "    <div class=\"col mb-3\">";
            yield $context["product"];
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/module/featured.twig";
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
        return array (  66 => 6,  57 => 4,  53 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h3>{{ heading_title }}</h3>
<div class=\"row{% if axis == 'horizontal' %} row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4{% endif %}\">
  {% for product in products %}
    <div class=\"col mb-3\">{{ product }}</div>
  {% endfor %}
</div>
", "extension/opencart/catalog/view/template/module/featured.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/extension/opencart/catalog/view/template/module/featured.twig");
    }
}
