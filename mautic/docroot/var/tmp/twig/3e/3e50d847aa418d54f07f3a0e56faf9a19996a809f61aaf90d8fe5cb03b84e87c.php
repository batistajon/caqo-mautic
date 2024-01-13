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

/* @bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php */
class __TwigTemplate_1b5ffff719fb4cc7f3e20955fb301366e59257e1933224423929dedcf85ebbad extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Scheduler\\Mode;

use Mautic\\CampaignBundle\\Entity\\Event;
use Psr\\Log\\LoggerInterface;

class DateTime implements ScheduleModeInterface
{
    /**
     * @var LoggerInterface
     */
    private \$logger;

    /**
     * DateTime constructor.
     */
    public function __construct(LoggerInterface \$logger)
    {
        \$this->logger = \$logger;
    }

    /**
     * @return \\DateTime
     */
    public function getExecutionDateTime(Event \$event, \\DateTime \$compareFromDateTime, \\DateTime \$comparedToDateTime)
    {
        \$triggerDate = \$event->getTriggerDate();

        if (null === \$triggerDate) {
            \$this->logger->debug('CAMPAIGN: Trigger date is null');

            return \$compareFromDateTime;
        }

        if (\$compareFromDateTime >= \$triggerDate) {
            \$this->logger->debug(
                'CAMPAIGN: ('.\$event->getId().') Date to execute ('.\$triggerDate->format('Y-m-d H:i:s T').') compared to now ('
                .\$compareFromDateTime->format('Y-m-d H:i:s T').') and is thus overdue'
            );

            return \$compareFromDateTime;
        }

        return \$triggerDate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php");
    }
}
