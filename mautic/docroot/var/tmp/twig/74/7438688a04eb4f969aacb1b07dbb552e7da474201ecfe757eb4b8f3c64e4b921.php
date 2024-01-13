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

/* @bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php */
class __TwigTemplate_d08a80c433c4eddde297c0f8ffa0763d01663f76093d467d9ee22e62fdf85d67 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Model\\SegmentActionModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class SegmentActionModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject
     */
    private \$contactMock5;

    /**
     * @var MockObject
     */
    private \$contactMock6;

    /**
     * @var MockObject
     */
    private \$contactModelMock;

    /**
     * @var SegmentActionModel
     */
    private \$actionModel;

    protected function setUp(): void
    {
        \$this->contactMock5        = \$this->createMock(Lead::class);
        \$this->contactMock6        = \$this->createMock(Lead::class);
        \$this->contactModelMock    = \$this->createMock(LeadModel::class);
        \$this->actionModel         = new SegmentActionModel(\$this->contactModelMock);
    }

    public function testAddContactsToSegmentsEntityAccess(): void
    {
        \$contacts = [5, 6];
        \$segments = [4, 5];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('addToLists')
            ->with(\$this->contactMock6, \$segments);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->addContacts(\$contacts, \$segments);
    }

    public function testRemoveContactsFromSementsEntityAccess(): void
    {
        \$contacts = [5, 6];
        \$segments = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('removeFromLists')
            ->with(\$this->contactMock6, \$segments);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->removeContacts(\$contacts, \$segments);
    }

    public function testAddContactsToSegments(): void
    {
        \$contacts = [5, 6];
        \$segments = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('addToLists')
            ->withConsecutive([\$this->contactMock5, \$segments], [\$this->contactMock6, \$segments]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->addContacts(\$contacts, \$segments);
    }

    public function testRemoveContactsFromCategories(): void
    {
        \$contacts = [5, 6];
        \$segments = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('removeFromLists')
            ->withConsecutive([\$this->contactMock5, \$segments], [\$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->removeContacts(\$contacts, \$segments);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php");
    }
}
