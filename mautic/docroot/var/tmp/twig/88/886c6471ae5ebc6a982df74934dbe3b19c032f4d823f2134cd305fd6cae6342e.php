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

/* @bundles/CoreBundle/Event/MaintenanceEvent.php */
class __TwigTemplate_e69eb7ad47f4a2a5554a89168fecf345d92f2d39bd982ee7fb41c5a9a5b76df9 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class MaintenanceEvent.
 */
class MaintenanceEvent extends Event
{
    /**
     * @var int
     */
    protected \$daysOld;

    /**
     * @var \\DateTime
     */
    protected \$date;

    /**
     * @var array
     */
    protected \$stats = [];

    /**
     * @var bool
     */
    protected \$dryRun = false;

    /**
     * @var bool
     */
    protected \$gdpr = false;

    /**
     * @var array
     */
    protected \$debug = [];

    /**
     * MaintenanceEvent constructor.
     *
     * @param int  \$daysOld
     * @param bool \$dryRun
     */
    public function __construct(\$daysOld, \$dryRun, \$gdpr)
    {
        \$this->daysOld = (int) \$daysOld;
        \$this->dryRun  = (bool) \$dryRun;
        \$this->date    = new \\DateTime(\"\$daysOld days ago\", new \\DateTimeZone('UTC'));
        \$this->gdpr    = (bool) \$gdpr;
    }

    /**
     * Get integer for number of days ago to purge data.
     *
     * @return int
     */
    public function getDays()
    {
        return \$this->daysOld;
    }

    /**
     * Returns a DateTime in UTC for the date to delete records older than the given date.
     *
     * @return \\DateTime
     */
    public function getDate()
    {
        return \$this->date;
    }

    /**
     * Set the number of records purged by the listener.
     *
     * @param string \$key
     * @param int    \$recordCount
     */
    public function setStat(\$key, \$recordCount, \$sql = null, \$parameters = [])
    {
        \$this->stats[\$key] = (int) \$recordCount;

        if (\$sql) {
            foreach (\$parameters as \$paramKey => \$value) {
                \$sql = str_replace(\":\$paramKey\", \$value, \$sql);
            }
            \$this->debug[\$key] = \$sql;
        }
    }

    /**
     * @return array
     */
    public function getStats()
    {
        ksort(\$this->stats, SORT_NATURAL);

        return \$this->stats;
    }

    /**
     * Return if this is to be a dry run.
     *
     * @return bool
     */
    public function isDryRun()
    {
        return \$this->dryRun;
    }

    /**
     * @return array
     */
    public function getDebug()
    {
        return \$this->debug;
    }

    /**
     * @return bool
     */
    public function isGdpr()
    {
        return \$this->gdpr;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/MaintenanceEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/MaintenanceEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/MaintenanceEvent.php");
    }
}
