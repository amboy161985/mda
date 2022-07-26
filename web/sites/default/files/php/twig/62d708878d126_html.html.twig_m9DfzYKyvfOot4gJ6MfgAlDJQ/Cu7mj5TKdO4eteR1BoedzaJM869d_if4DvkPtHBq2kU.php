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

/* themes/custom/mda/templates/layout/html.html.twig */
class __TwigTemplate_a7b4bdc79c11a832b41704d98ffc90a57bb6a708710ad67173dc003a48a84886 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("at_core/at.breakpoints"), "html", null, true);
        // line 27
        echo "<!DOCTYPE html>
<html";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["html_attributes"] ?? null), "addClass", [0 => "no-js", 1 => "adaptivetheme"], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo ">
  <head>
    ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["touch_icons"] ?? null), 30, $this->source), "html", null, true);
        echo "
    <head-placeholder token=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 31, $this->source));
        echo "\">
    <link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">";
        // line 33
        if (($context["google_dns_prefetch"] ?? null)) {
            // line 34
            echo "<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">";
        }
        // line 36
        if (($context["typekit_dns_prefetch"] ?? null)) {
            // line 37
            echo "<link rel=\"dns-prefetch\" href=\"//use.typekit.net\">";
        }
        // line 39
        echo "<title>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 39, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source));
        echo "\">
  </head>";
        // line 44
        $context["body_classes"] = [0 => ((        // line 45
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-logged-out")), 1 => ((        // line 46
($context["is_front"] ?? null)) ? ("path-frontpage") : ("path-not-frontpage")), 2 => ((        // line 47
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 47, $this->source)))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 48
($context["path_info"] ?? null), "args", [], "any", false, false, true, 48)) ? (("path-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "args", [], "any", false, false, true, 48), 48, $this->source))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 49
($context["path_info"] ?? null), "query", [], "any", false, false, true, 49)) ? (("path-query-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "query", [], "any", false, false, true, 49), 49, $this->source))) : ("")), 5 => ((        // line 50
($context["node_type"] ?? null)) ? (("page-node-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 50, $this->source)))) : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 51
($context["head_title_array"] ?? null), "name", [], "any", false, false, true, 51)) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["head_title_array"] ?? null), "name", [], "any", false, false, true, 51), 51, $this->source)))) : ("")), 7 => ((twig_get_attribute($this->env, $this->source,         // line 52
($context["theme"] ?? null), "name", [], "any", false, false, true, 52)) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, true, 52), 52, $this->source)))) : ("")), 8 => ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 56
        echo "<body ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "role"), "html", null, true);
        echo ">
    ";
        // line 58
        echo "    <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skip_link_target"] ?? null), 58, $this->source), "html", null, true);
        echo "\" class=\"visually-hidden focusable skip-link\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "</a>
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 59, $this->source), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 60, $this->source), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 61, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 62, $this->source));
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mda/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 62,  111 => 61,  107 => 60,  103 => 59,  96 => 58,  91 => 56,  89 => 53,  88 => 52,  87 => 51,  86 => 50,  85 => 49,  84 => 48,  83 => 47,  82 => 46,  81 => 45,  80 => 44,  76 => 41,  72 => 40,  67 => 39,  64 => 37,  62 => 36,  59 => 34,  57 => 33,  53 => 31,  49 => 30,  44 => 28,  41 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mda/templates/layout/html.html.twig", "/app/mda/web/themes/custom/mda/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33, "set" => 44);
        static $filters = array("escape" => 26, "raw" => 31, "safe_join" => 39, "clean_class" => 47, "without" => 56, "t" => 58);
        static $functions = array("attach_library" => 26);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'raw', 'safe_join', 'clean_class', 'without', 't'],
                ['attach_library']
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
