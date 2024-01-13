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

/* @bundles/PageBundle/Tests/Model/Tracking404ModelTest.php */
class __TwigTemplate_b7adad4d40af5f48197d4e467125a2bfb710dd4ae587f03843a552962b8f798c extends Template
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

namespace Mautic\\PageBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Model\\PageModel;
use Mautic\\PageBundle\\Model\\Tracking404Model;

class Tracking404ModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ContactTracker|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$mockContactTracker;

    /**
     * @var CoreParametersHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$mockCoreParametersHelper;

    /**
     * @var PageModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$mockPageModel;

    /**
     * @var Lead|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \$lead;

    public function setUp(): void
    {
        parent::setUp();
        \$this->mockCoreParametersHelper = \$this->createMock(CoreParametersHelper::class);

        \$this->mockContactTracker = \$this->createMock(ContactTracker::class);

        \$this->mockPageModel = \$this->createMock(PageModel::class);

        \$this->lead = new Lead();
    }

    public function testIsTrackableIfTracking404OptionEnabled(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(true);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertFalse(\$tracking404Model->isTrackable());
    }

    public function testIsTrackableIfTracking404OptionDisable(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(false);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertTrue(\$tracking404Model->isTrackable());
    }

    public function testIsTrackableForIdentifiedContacts(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(true);

        \$this->lead->setFirstname('identified');
        \$this->mockContactTracker->expects(\$this->any())
            ->method('getContactByTrackedDevice')
            ->willReturn(\$this->lead);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertTrue(\$tracking404Model->isTrackable());
    }

    public function testIsTrackableForAnonymouse(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(true);

        \$this->mockContactTracker->expects(\$this->any())
            ->method('getContactByTrackedDevice')
            ->willReturn(\$this->lead);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertFalse(\$tracking404Model->isTrackable());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Tests/Model/Tracking404ModelTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Model/Tracking404ModelTest.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Tests/Model/Tracking404ModelTest.php");
    }
}
