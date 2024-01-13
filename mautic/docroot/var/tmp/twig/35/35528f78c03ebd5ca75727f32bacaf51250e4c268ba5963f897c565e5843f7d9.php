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

/* @bundles/IntegrationsBundle/Sync/DAO/DateRange.php */
class __TwigTemplate_96ca9db278309e3f6f40efb809ab930b45a50dc55971d8c303e5cec6189bbe6f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO;

use DateTimeInterface;

class DateRange
{
    /**
     * @var DateTimeInterface|null
     */
    private \$fromDate;

    /**
     * @var DateTimeInterface|null
     */
    private \$toDate;

    public function __construct(?DateTimeInterface \$fromDate, ?DateTimeInterface \$toDate)
    {
        \$this->fromDate = \$fromDate;
        \$this->toDate   = \$toDate;
    }

    /**
     * Get the value of fromDate.
     */
    public function getFromDate()
    {
        return \$this->fromDate;
    }

    /**
     * Get the value of toDate.
     */
    public function getToDate()
    {
        return \$this->toDate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/DateRange.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/DateRange.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/DateRange.php");
    }
}
