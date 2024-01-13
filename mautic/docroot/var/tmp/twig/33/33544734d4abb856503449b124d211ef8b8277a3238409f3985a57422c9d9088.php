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

/* @bundles/CoreBundle/Views/Helper/action_button_helper.php */
class __TwigTemplate_2b479151407c22141b5d0dc1bef3a0352001e504e96605bedda4f95022d4d6bc extends Template
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
        echo "<?php

if (isset(\$customButtons)) {
    \$view['buttons']->addButtons(\$customButtons);
}

//Function used to get identifier string for entity
\$nameGetter = (!empty(\$nameGetter)) ? \$nameGetter : 'getName';

//Dropdown direction
if (empty(\$pull)) {
    \$pull = 'left';
}

//Custom query parameters for URLs
if (!isset(\$query)) {
    \$query = [];
}

if (isset(\$tmpl)) {
    \$query['tmpl'] = \$tmpl;
}

//Edit mode for edit/actions (allows use of ajaxmodal)
if (!isset(\$editMode)) {
    \$editMode = 'ajax';
}

if (!isset(\$editAttr)) {
    \$editAttr = [];
}

//Template/common buttons
if (!isset(\$templateButtons)) {
    \$templateButtons = [];
}

//Set langVar to routeBase if not set
if (!isset(\$translationBase)) {
    if (!isset(\$langVar)) {
        \$langVar = (isset(\$routeBase)) ? \$routeBase : '';
    }
    \$translationBase = 'mautic.'.\$langVar;
}

// Set index and action routes
if (isset(\$route) && !isset(\$actionRoute)) {
    \$actionRoute = \$route;
} elseif (!isset(\$actionRoute)) {
    \$actionRoute = '';
    if (isset(\$routeBase)) {
        \$actionRoute = 'mautic_'.str_replace('mautic_', '', \$routeBase).'_action';
    }
}
if (!isset(\$indexRoute)) {
    \$indexRoute = '';
    if (isset(\$routeBase)) {
        \$indexRoute = 'mautic_'.str_replace('mautic_', '', \$routeBase).'_index';
    }
}

if (!isset(\$routeVars)) {
    \$routeVars = [];
}

//Extra HTML to be inserted after the buttons
if (!isset(\$extraHtml)) {
    \$extraHtml = '';
}

//Wrapper such as li
if (!isset(\$wrapOpeningTag)) {
    \$wrapOpeningTag = \$wrapClosingTag = '';
}
\$view['buttons']->setWrappingTags(\$wrapOpeningTag, \$wrapClosingTag);

//Builder for custom buttons
\$menuLink = (isset(\$menuLink)) ? \" data-menu-link=\\\"{\$menuLink}\\\"\" : '';
\$view['buttons']->setMenuLink(\$menuLink);

//Set a default button type (group or dropdown)
if (isset(\$groupType)) {
    \$view['buttons']->setGroupType(\$groupType);
}

\$buttonCount = \$view['buttons']->getButtonCount();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/action_button_helper.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/action_button_helper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/action_button_helper.php");
    }
}
