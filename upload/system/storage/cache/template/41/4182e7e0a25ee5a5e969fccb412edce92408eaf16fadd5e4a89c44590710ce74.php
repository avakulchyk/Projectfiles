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

/* install/view/template/upgrade/upgrade.twig */
class __TwigTemplate_b61c182fbec8fdae0ca95b09ed8e0f79bd68c00c4a30058e5f664308c1b5fabc extends Template
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
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-right\">";
        // line 5
        yield ($context["language"] ?? null);
        yield "</div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fab fa-opencart\"></i>&nbsp;&nbsp;";
        // line 11
        yield ($context["text_upgrade"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 14
        yield ($context["text_server"] ?? null);
        yield "</legend>
          <ol>
            <li>";
        // line 16
        yield ($context["text_error"] ?? null);
        yield "</li>
            <li>";
        // line 17
        yield ($context["text_clear"] ?? null);
        yield "</li>
            <li>";
        // line 18
        yield ($context["text_refresh"] ?? null);
        yield "</li>
            <li>";
        // line 19
        yield ($context["text_user"] ?? null);
        yield "</li>
            <li>";
        // line 20
        yield ($context["text_setting"] ?? null);
        yield "</li>
            <li>";
        // line 21
        yield ($context["text_store"] ?? null);
        yield "</li>
          </ol>
        </fieldset>
        <fieldset>
          <legend>";
        // line 25
        yield ($context["text_admin"] ?? null);
        yield "</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\">";
        // line 27
        yield ($context["entry_admin"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\">";
        // line 29
        yield ($context["server"] ?? null);
        yield "</div>
              <input type=\"text\" name=\"admin\" value=\"admin\" id=\"input-admin\" class=\"form-control\"/>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 35
        yield ($context["text_steps"] ?? null);
        yield "</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\">";
        // line 37
        yield ($context["entry_progress"] ?? null);
        yield "</label>
            <div class=\"progress\">
              <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
            </div>
            <div id=\"progress-text\"></div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col text-end\"><button type=\"button\" id=\"button-continue\" data-loading=\"";
        // line 45
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-continue').on('click', function() {
    var element = this;

    var step = 1;

    \$(element).prop('disabled', true);

    \$('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');
    \$('#progress-text').html('');

    var next = 'index.php?route=upgrade/upgrade_1&admin=' + \$('#input-admin').val();

    var upgrade = function() {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#progress-bar').addClass('progress-bar-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$(element).prop('disabled', false);
                }

                if (json['text']) {
                    \$('#progress-text').html('<span class=\"text-success\">' + json['text'] + '</span>');
                }

                if (json['success']) {
                    \$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

                    \$(element).prop('disabled', false);
                }

                \$('#progress-bar').css('width', Math.round((step / ";
        // line 92
        yield ($context["total"] ?? null);
        yield ") * 100) + '%');

                step++;

                if (json['next']) {
                    next = json['next'];

                    chain.attach(upgrade);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).prop('disabled', false);
            }
        });
    }

    chain.attach(upgrade);
});
//--></script>
";
        // line 113
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "install/view/template/upgrade/upgrade.twig";
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
        return array (  210 => 113,  186 => 92,  134 => 45,  123 => 37,  118 => 35,  109 => 29,  104 => 27,  99 => 25,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  61 => 11,  53 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container\">
      <div class=\"float-right\">{{ language }}</div>
      <h1>{{ heading_title }}</h1>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fab fa-opencart\"></i>&nbsp;&nbsp;{{ text_upgrade }}</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>{{ text_server }}</legend>
          <ol>
            <li>{{ text_error }}</li>
            <li>{{ text_clear }}</li>
            <li>{{ text_refresh }}</li>
            <li>{{ text_user }}</li>
            <li>{{ text_setting }}</li>
            <li>{{ text_store }}</li>
          </ol>
        </fieldset>
        <fieldset>
          <legend>{{ text_admin }}</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\">{{ entry_admin }}</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\">{{ server }}</div>
              <input type=\"text\" name=\"admin\" value=\"admin\" id=\"input-admin\" class=\"form-control\"/>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_steps }}</legend>
          <div class=\"mb-3\">
            <label class=\"form-label\">{{ entry_progress }}</label>
            <div class=\"progress\">
              <div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
            </div>
            <div id=\"progress-text\"></div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col text-end\"><button type=\"button\" id=\"button-continue\" data-loading=\"{{ text_loading }}\" class=\"btn btn-primary\">{{ button_continue }}</button></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-continue').on('click', function() {
    var element = this;

    var step = 1;

    \$(element).prop('disabled', true);

    \$('#progress-bar').addClass('progress-bar-success').css('width', '0%').removeClass('progress-bar-danger');
    \$('#progress-text').html('');

    var next = 'index.php?route=upgrade/upgrade_1&admin=' + \$('#input-admin').val();

    var upgrade = function() {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#progress-bar').addClass('progress-bar-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$(element).prop('disabled', false);
                }

                if (json['text']) {
                    \$('#progress-text').html('<span class=\"text-success\">' + json['text'] + '</span>');
                }

                if (json['success']) {
                    \$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');

                    \$(element).prop('disabled', false);
                }

                \$('#progress-bar').css('width', Math.round((step / {{ total }}) * 100) + '%');

                step++;

                if (json['next']) {
                    next = json['next'];

                    chain.attach(upgrade);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).prop('disabled', false);
            }
        });
    }

    chain.attach(upgrade);
});
//--></script>
{{ footer }}", "install/view/template/upgrade/upgrade.twig", "/Applications/XAMPP/xamppfiles/htdocs/opencart/upload/install/view/template/upgrade/upgrade.twig");
    }
}
