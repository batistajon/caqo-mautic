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

/* @bundles/LeadBundle/Field/Settings/BackgroundSettings.php */
class __TwigTemplate_c6e356da70e21b0bed373ba713da21ec37eaba9a969850d9b5625120bf3f46b4 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field\\Settings;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class BackgroundSettings
{
    public const CREATE_CUSTOM_FIELD_IN_BACKGROUND = 'create_custom_field_in_background';

    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    public function shouldProcessColumnChangeInBackground(): bool
    {
        return (bool) \$this->coreParametersHelper->get(self::CREATE_CUSTOM_FIELD_IN_BACKGROUND, false);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Settings/BackgroundSettings.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Settings/BackgroundSettings.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Settings/BackgroundSettings.php");
    }
}
