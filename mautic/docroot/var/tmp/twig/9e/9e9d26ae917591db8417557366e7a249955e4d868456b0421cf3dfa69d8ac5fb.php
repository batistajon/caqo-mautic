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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/mixins.less */
class __TwigTemplate_73b2d7d4b26443a62e742dfa2b96445c5eb46e1a134c4cb3339a6464c81843c3 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "// Mixins
// --------------------------------------------------

// Utilities
@import \"mixins/hide-text.less\";
@import \"mixins/opacity.less\";
@import \"mixins/image.less\";
@import \"mixins/labels.less\";
@import \"mixins/reset-filter.less\";
@import \"mixins/resize.less\";
@import \"mixins/responsive-visibility.less\";
@import \"mixins/size.less\";
@import \"mixins/tab-focus.less\";
@import \"mixins/reset-text.less\";
@import \"mixins/text-emphasis.less\";
@import \"mixins/text-overflow.less\";
@import \"mixins/vendor-prefixes.less\";

// Components
@import \"mixins/alerts.less\";
@import \"mixins/buttons.less\";
@import \"mixins/panels.less\";
@import \"mixins/pagination.less\";
@import \"mixins/list-group.less\";
@import \"mixins/nav-divider.less\";
@import \"mixins/forms.less\";
@import \"mixins/progress-bar.less\";
@import \"mixins/table-row.less\";

// Skins
@import \"mixins/background-variant.less\";
@import \"mixins/border-radius.less\";
@import \"mixins/gradients.less\";

// Layout
@import \"mixins/clearfix.less\";
@import \"mixins/center-block.less\";
@import \"mixins/nav-vertical-align.less\";
@import \"mixins/grid-framework.less\";
@import \"mixins/grid.less\";
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/mixins.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/mixins.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/mixins.less");
    }
}
