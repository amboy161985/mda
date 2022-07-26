<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mda/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_bbdc5357b3514a852b60c31902eec170dce4a65b42b7c1c85b2f922af7626eba extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => "block", 1 => "block-branding", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 19
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 19), 19, $this->source))), 3 => ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 20
($context["plugin_id_clean"] ?? null), 20, $this->source))), 4 => ((        // line 21
($context["label"] ?? null)) ? ("has-title") : ("")), 5 => ((        // line 22
($context["site_logo"] ?? null)) ? ("has-logo") : ("")), 6 => ((        // line 23
($context["site_name"] ?? null)) ? ("has-name") : ("")), 7 => ((        // line 24
($context["site_slogan"] ?? null)) ? ("has-slogan") : (""))];
        // line 27
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ">
  <div class=\"block__inner block-branding__inner\">

    ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 30, $this->source), "html", null, true);
        // line 31
        if (($context["label"] ?? null)) {
            // line 32
            echo "<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block__title"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 32, $this->source), "html", null, true);
            echo "</span></h2>";
        }
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 34, $this->source), "html", null, true);
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>
</div>
";
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "block__content", 1 => "block-branding__content", 2 => "site-branding"], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">";
        // line 38
        if (($context["site_logo"] ?? null)) {
            // line 39
            echo "<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding__logo-link\"><img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 39, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" class=\"site-branding__logo-img\" /></a>";
        }
        // line 41
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 42
            echo "<span class=\"site-branding__text\">";
            // line 43
            if (($context["site_name"] ?? null)) {
                // line 44
                echo "<strong class=\"site-branding__name\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\" class=\"site-branding__name-link\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 44, $this->source), "html", null, true);
                echo "</a></strong>";
            }
            // line 46
            if (($context["site_slogan"] ?? null)) {
                // line 47
                echo "<em class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 47, $this->source), "html", null, true);
                echo "</em>";
            }
            // line 49
            echo "</span>";
        }
        // line 51
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mda/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 51,  119 => 49,  114 => 47,  112 => 46,  103 => 44,  101 => 43,  99 => 42,  97 => 41,  86 => 39,  84 => 38,  80 => 37,  76 => 36,  70 => 54,  68 => 36,  66 => 34,  59 => 32,  57 => 31,  55 => 30,  48 => 27,  46 => 24,  45 => 23,  44 => 22,  43 => 21,  42 => 20,  41 => 19,  40 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mda/templates/block/block--system-branding-block.html.twig", "/app/mda/web/themes/custom/mda/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 31, "block" => 36);
        static $filters = array("clean_class" => 19, "escape" => 27, "t" => 39);
        static $functions = array("path" => 39);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                ['path']
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
