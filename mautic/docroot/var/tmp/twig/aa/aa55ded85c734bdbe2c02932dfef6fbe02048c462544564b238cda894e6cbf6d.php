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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php */
class __TwigTemplate_f20f850d53091a28c7a051956baf504c2af7813e05012b0f8fdc2cb7670becdb extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\ContactFinder\\Limiter;

use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;

class ContactLimiterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetters()
    {
        \$limiter = new ContactLimiter(1, 2, 3, 4, [1, 2, 3]);

        \$this->assertEquals(1, \$limiter->getBatchLimit());
        \$this->assertEquals(2, \$limiter->getContactId());
        \$this->assertEquals(3, \$limiter->getMinContactId());
        \$this->assertEquals(4, \$limiter->getMaxContactId());
        \$this->assertEquals([1, 2, 3], \$limiter->getContactIdList());
    }

    public function testBatchMinContactIsReturned()
    {
        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);

        \$limiter->setBatchMinContactId(5);
        \$this->assertEquals(5, \$limiter->getMinContactId());
    }

    public function testNoContactsFoundExceptionThrownIfIdIsLessThanMin()
    {
        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$limiter->setBatchMinContactId(1);
    }

    public function testNoContactsFoundExceptionThrownIfIdIsMoreThanMax()
    {
        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$limiter->setBatchMinContactId(11);
    }

    public function testNoContactsFoundExceptionThrownIfIdIsTheSameAsLastBatch()
    {
        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$limiter->setBatchMinContactId(5);
        \$limiter->setBatchMinContactId(5);
    }

    public function testExceptionNotThrownIfIdEqualsMinSoThatItsIsIncluded()
    {
        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$this->assertSame(\$limiter, \$limiter->setBatchMinContactId(3));
    }

    public function testExceptionNotThrownIfIdEqualsMaxSoThatItsIsIncluded()
    {
        \$limiter = new ContactLimiter(1, 2, 3, 10, [1, 2, 3]);
        \$this->assertSame(\$limiter, \$limiter->setBatchMinContactId(10));
    }

    public function testExceptionThrownIfThreadIdLargerThanMaxThreads()
    {
        \$this->expectException(\\InvalidArgumentException::class);

        new ContactLimiter(1, null, null, null, [], 5, 3);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/Limiter/ContactLimiterTest.php");
    }
}
