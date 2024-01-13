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

/* @bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php */
class __TwigTemplate_dec7c5549209f8ef1cb5bb32598b1c656ad8f962fa367d41bbdae297bfde8e85 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

class TimezoneResolver
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    public function __construct(
        CoreParametersHelper \$coreParametersHelper
    ) {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @param bool \$hasTimePart
     *
     * @return DateTimeHelper
     */
    public function getDefaultDate(\$hasTimePart)
    {
        /**
         * \$hasTimePart tells us if field in a database is date or datetime
         * All datetime fields are stored in UTC
         * Date field, however, is always stored in a local time (there is no time information, so it cannot be converted to UTC).
         *
         * We will generate default date according to this. We need midnight as a default date (for relative intervals like \"today\" or \"-1 day\"
         *  1) in UTC for datetime fields
         *  2) in the local timezone for date fields
         *
         * Later we use toLocalString() method - it gives us midnight in UTC for first condition and midnight in local timezone for second option.
         */
        \$timezone = \$hasTimePart ? 'UTC' : \$this->coreParametersHelper->get('default_timezone', 'UTC');

        \$date = new \\DateTime('midnight today', new \\DateTimeZone(\$timezone));

        return new DateTimeHelper(\$date, null, \$timezone);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php");
    }
}
