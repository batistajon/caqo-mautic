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

/* @bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php */
class __TwigTemplate_cd99d4c0070bfda0bff4fb0dee4f1447aa296aa27b43091b45563b2244abe00d extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Monolog;

use DateTime;
use Mautic\\CoreBundle\\Monolog\\LogProcessor;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class LogProcessorTest extends TestCase
{
    public function testLogProcessor(): void
    {
        \$logProcessor = new LogProcessor();
        \$record       = [
            'message'    => 'This is debug message',
            'context'    => [],
            'level'      => 100,
            'level_name' => 'DEBUG',
            'channel'    => 'mautic',
            'datetime'   => new DateTime(),
            'extra'      => [],
        ];
        \$outputRecord = \$logProcessor(\$record);

        \$record['extra']['hostname'] = gethostname();
        \$record['extra']['pid']      = getmypid();

        Assert::assertSame(\$record, \$outputRecord);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php");
    }
}
