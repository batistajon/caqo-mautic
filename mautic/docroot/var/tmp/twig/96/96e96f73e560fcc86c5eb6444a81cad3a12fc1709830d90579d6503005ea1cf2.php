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

/* @bundles/EmailBundle/Helper/StatsCollectionHelper.php */
class __TwigTemplate_52725ef6bcaa3082adc06d67e722c5d525228d48e98f58ec70cde2e19f8d5791 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\EmailBundle\\Stats\\Helper\\BouncedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\ClickedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\FailedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\FilterTrait;
use Mautic\\EmailBundle\\Stats\\Helper\\OpenedHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\SentHelper;
use Mautic\\EmailBundle\\Stats\\Helper\\UnsubscribedHelper;
use Mautic\\EmailBundle\\Stats\\StatHelperContainer;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class StatsCollectionHelper
{
    use FilterTrait;

    const GENERAL_STAT_PREFIX = 'email';

    /**
     * @var StatHelperContainer
     */
    private \$helperContainer;

    /**
     * StatsCollectionHelper constructor.
     */
    public function __construct(StatHelperContainer \$helperContainer)
    {
        \$this->helperContainer = \$helperContainer;
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchSentStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(SentHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchOpenedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(OpenedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchFailedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(FailedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchClickedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(ClickedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchBouncedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(BouncedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Fetch stats from listeners.
     *
     * @return mixed
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function fetchUnsubscribedStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options)
    {
        return \$this->helperContainer->getHelper(UnsubscribedHelper::NAME)->fetchStats(\$fromDateTime, \$toDateTime, \$options);
    }

    /**
     * Generate stats from Mautic's raw data.
     *
     * @param \$statName
     *
     * @throws \\Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException
     */
    public function generateStats(
        \$statName,
        \\DateTime \$fromDateTime,
        \\DateTime \$toDateTime,
        EmailStatOptions \$options,
        StatCollection \$statCollection
    ) {
        \$this->helperContainer->getHelper(\$statName)->generateStats(\$fromDateTime, \$toDateTime, \$options, \$statCollection);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Helper/StatsCollectionHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/StatsCollectionHelper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Helper/StatsCollectionHelper.php");
    }
}
