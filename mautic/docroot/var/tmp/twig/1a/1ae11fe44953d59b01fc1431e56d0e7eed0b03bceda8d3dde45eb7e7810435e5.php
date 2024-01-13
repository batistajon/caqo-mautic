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

/* @bundles/EmailBundle/Tests/Entity/StatTest.php */
class __TwigTemplate_6891bd241b9c2b084493bff6ce8193453918f02c7ecffab46dfb2547fa3b173e extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Entity;

use Mautic\\EmailBundle\\Entity\\Stat;
use PHPUnit\\Framework\\TestCase;

class StatTest extends TestCase
{
    /**
     * @param int \$count How many openDetails to add to the entity
     * @dataProvider addOpenDetailsTestProvider
     */
    public function testAddOpenDetails(int \$count)
    {
        \$stat = new Stat();

        // Add as many openDetails entries as specified in \$count
        for (\$i = 0; \$i < \$count; ++\$i) {
            \$stat->addOpenDetails(sprintf('Open %d of %d', \$i + 1, \$count));
        }

        // Assert that the openCount reflects the total number of openDetails
        \$this->assertEquals(\$count, \$stat->getOpenCount());

        // Assert that the number of entries stored in the openDetails array
        // is equal to the lower of the two values openCount and
        // Stat::MAX_OPEN_DETAILS
        \$this->assertEquals(
            min(Stat::MAX_OPEN_DETAILS, \$stat->getOpenCount()),
            count(\$stat->getOpenDetails())
        );
    }

    /**
     * Data provider for addOpenDetails.
     */
    public function addOpenDetailsTestProvider(): array
    {
        return [
            'no openDetails'            => [0],
            'one openDetail'            => [1],
            'low number of openDetails' => [10],
            'one away from threshold'   => [Stat::MAX_OPEN_DETAILS - 1],
            'exactly at threshold'      => [Stat::MAX_OPEN_DETAILS],
            'one past threshold'        => [Stat::MAX_OPEN_DETAILS + 1],
            'slightly above threshold'  => [Stat::MAX_OPEN_DETAILS + 10],
            'well beyond threshold'     => [Stat::MAX_OPEN_DETAILS * 10],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Entity/StatTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Entity/StatTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Entity/StatTest.php");
    }
}
