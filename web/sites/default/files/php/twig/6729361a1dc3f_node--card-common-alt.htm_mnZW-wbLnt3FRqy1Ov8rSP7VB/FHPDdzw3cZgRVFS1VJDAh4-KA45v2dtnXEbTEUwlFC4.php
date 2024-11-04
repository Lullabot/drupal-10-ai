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

/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig */
class __TwigTemplate_f350bf594dc9986632a5a713f49a172f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "bundle", [], "any", false, false, true, 66), 66, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 67)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 68)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 69)) ? ("node--unpublished") : ("")), ((        // line 70
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 70, $this->source)))) : ("")), "umami-card--alt"];
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("umami/classy.node"), "html", null, true);
        yield "

";
        // line 76
        $context["read_more"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 77
            yield t("View @node.type.entity.label", array("@node.type.entity.label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "type", [], "any", false, false, true, 77), "entity", [], "any", false, false, true, 77), "label", [], "method", false, false, true, 77), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "
";
        // line 80
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 80, "1075511710")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 81), "content" =>         // line 82
($context["content"] ?? null), "content_attributes" =>         // line 83
($context["content_attributes"] ?? null), "label" =>         // line 84
($context["label"] ?? null), "title_attributes" =>         // line 85
($context["title_attributes"] ?? null), "title_prefix" =>         // line 86
($context["title_prefix"] ?? null), "title_suffix" =>         // line 87
($context["title_suffix"] ?? null), "read_more" =>         // line 88
($context["read_more"] ?? null), "url" =>         // line 89
($context["url"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "content_attributes", "label", "title_attributes", "title_prefix", "title_suffix", "url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  70 => 89,  69 => 88,  68 => 87,  67 => 86,  66 => 85,  65 => 84,  64 => 83,  63 => 82,  62 => 81,  61 => 80,  58 => 79,  54 => 77,  52 => 76,  47 => 74,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 64, "trans" => 77, "embed" => 80);
        static $filters = array("clean_class" => 66, "escape" => 74);
        static $functions = array("attach_library" => 74);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'embed'],
                ['clean_class', 'escape'],
                ['attach_library'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}


/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig */
class __TwigTemplate_f350bf594dc9986632a5a713f49a172f___1075511710 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 80
        return "umami:card";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:card", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 80);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content_attributes", "content", "title_attributes", "label", "title_prefix", "title_suffix", "read_more", "url"]);    }

    // line 91
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["umami-card__content"], "method", false, false, true, 92), 92, $this->source), "html", null, true);
        yield ">
      ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 93, $this->source), "html", null, true);
        yield "
    </div>
    ";
        // line 95
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 95, "1448945716")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["title_attributes"] ?? null), "addClass", ["umami-card__title"], "method", false, false, true, 96), "label" => ((        // line 97
($context["label"] ?? null)) ? (($context["label"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 97))), "title_prefix" =>         // line 98
($context["title_prefix"] ?? null), "title_suffix" =>         // line 99
($context["title_suffix"] ?? null)]));
        // line 108
        yield "    ";
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 108, "1856024683")->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ["umami-card__read-more"]]), "read_more" =>         // line 110
($context["read_more"] ?? null), "label" =>         // line 111
($context["label"] ?? null), "url" =>         // line 112
($context["url"] ?? null)]));
        // line 121
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  195 => 121,  193 => 112,  192 => 111,  191 => 110,  189 => 108,  187 => 99,  186 => 98,  185 => 97,  184 => 96,  183 => 95,  178 => 93,  173 => 92,  169 => 91,  157 => 80,  70 => 89,  69 => 88,  68 => 87,  67 => 86,  66 => 85,  65 => 84,  64 => 83,  63 => 82,  62 => 81,  61 => 80,  58 => 79,  54 => 77,  52 => 76,  47 => 74,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 95);
        static $filters = array("escape" => 92);
        static $functions = array("create_attribute" => 109);

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                ['escape'],
                ['create_attribute'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}


/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig */
class __TwigTemplate_f350bf594dc9986632a5a713f49a172f___1448945716 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title_prefix' => [$this, 'block_title_prefix'],
            'title_suffix' => [$this, 'block_title_suffix'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 95
        return "umami:title";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:title", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 95);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix"]);    }

    // line 101
    public function block_title_prefix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 102, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 104
    public function block_title_suffix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 105, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  310 => 105,  306 => 104,  298 => 102,  294 => 101,  282 => 95,  195 => 121,  193 => 112,  192 => 111,  191 => 110,  189 => 108,  187 => 99,  186 => 98,  185 => 97,  184 => 96,  183 => 95,  178 => 93,  173 => 92,  169 => 91,  157 => 80,  70 => 89,  69 => 88,  68 => 87,  67 => 86,  66 => 85,  65 => 84,  64 => 83,  63 => 82,  62 => 81,  61 => 80,  58 => 79,  54 => 77,  52 => 76,  47 => 74,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 102);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}


/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig */
class __TwigTemplate_f350bf594dc9986632a5a713f49a172f___1856024683 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'a11y' => [$this, 'block_a11y'],
            'text' => [$this, 'block_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 108
        return "umami:read-more";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:read-more", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", 108);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "read_more"]);    }

    // line 114
    public function block_a11y($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 115, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 117
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["read_more"] ?? null), 118, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  428 => 118,  424 => 117,  416 => 115,  412 => 114,  400 => 108,  310 => 105,  306 => 104,  298 => 102,  294 => 101,  282 => 95,  195 => 121,  193 => 112,  192 => 111,  191 => 110,  189 => 108,  187 => 99,  186 => 98,  185 => 97,  184 => 96,  183 => 95,  178 => 93,  173 => 92,  169 => 91,  157 => 80,  70 => 89,  69 => 88,  68 => 87,  67 => 86,  66 => 85,  65 => 84,  64 => 83,  63 => 82,  62 => 81,  61 => 80,  58 => 79,  54 => 77,  52 => 76,  47 => 74,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common-alt.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 115);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
