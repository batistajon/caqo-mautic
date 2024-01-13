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

/* @bundles/LeadBundle/Tests/Deduplicate/ContactDeduperTest.php */
class __TwigTemplate_dda4196466a3331e890e118fe4874fa79c5aab7028fc40a5f96001f7533c2551 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Deduplicate;

use Mautic\\LeadBundle\\Deduplicate\\ContactDeduper;
use Mautic\\LeadBundle\\Deduplicate\\ContactMerger;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\FieldModel;

class ContactDeduperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|FieldModel
     */
    private \$fieldModel;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|ContactMerger
     */
    private \$contactMerger;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LeadRepository
     */
    private \$leadRepository;

    protected function setUp(): void
    {
        \$this->fieldModel = \$this->getMockBuilder(FieldModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->contactMerger = \$this->getMockBuilder(ContactMerger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->leadRepository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testDuplicatesAreMergedWithMergeOlderIntoNewer()
    {
        \$this->leadRepository->expects(\$this->once())
            ->method('getIdentifiedContactCount')
            ->willReturn(4);

        \$lead1 = \$this->getLead(1, 'lead1@test.com');
        \$lead2 = \$this->getLead(2, 'lead2@test.com');
        \$lead3 = \$this->getLead(3, 'lead3@test.com');
        // Duplicate
        \$lead4 = \$this->getLead(4, 'lead1@test.com');

        \$this->leadRepository->expects(\$this->exactly(4))
            ->method('getNextIdentifiedContact')
            ->withConsecutive([0], [1], [2], [3])
            ->willReturnOnConsecutiveCalls(\$lead1, \$lead2, \$lead3, null);

        \$this->fieldModel->expects(\$this->exactly(3))
            ->method('getUniqueIdentifierFields')
            ->willReturn(['email' => 'email']);
        \$this->fieldModel->expects(\$this->once())
            ->method('getFieldList')
            ->willReturn(['email' => 'email']);

        \$this->leadRepository->expects(\$this->exactly(3))
            ->method('getLeadsByUniqueFields')
            // \$lead4 has a older dateAdded
            ->willReturnOnConsecutiveCalls([\$lead4, \$lead1], [], []);

        // \$lead4 is winner as the older contact
        \$this->contactMerger->expects(\$this->once())
            ->method('merge')
            ->with(\$lead4, \$lead1);

        \$this->getDeduper()->deduplicate();
    }

    public function testDuplicatesAreMergedWithMergeNewerIntoOlder()
    {
        \$this->leadRepository->expects(\$this->once())
            ->method('getIdentifiedContactCount')
            ->willReturn(4);

        \$lead1 = \$this->getLead(1, 'lead1@test.com');
        \$lead2 = \$this->getLead(2, 'lead2@test.com');
        \$lead3 = \$this->getLead(3, 'lead3@test.com');
        // Duplicate
        \$lead4 = \$this->getLead(4, 'lead1@test.com');

        \$this->leadRepository->expects(\$this->exactly(4))
            ->method('getNextIdentifiedContact')
            ->withConsecutive([0], [1], [2], [3])
            ->willReturnOnConsecutiveCalls(\$lead1, \$lead2, \$lead3, null);

        \$this->fieldModel->expects(\$this->exactly(3))
            ->method('getUniqueIdentifierFields')
            ->willReturn(['email' => 'email']);
        \$this->fieldModel->expects(\$this->once())
            ->method('getFieldList')
            ->willReturn(['email' => 'email']);

        \$this->leadRepository->expects(\$this->exactly(3))
            ->method('getLeadsByUniqueFields')
            // \$lead1 has a older dateAdded
            ->willReturnOnConsecutiveCalls([\$lead1, \$lead4], [], []);

        // \$lead1 is the winner as the newer contact
        \$this->contactMerger->expects(\$this->once())
            ->method('merge')
            ->with(\$lead1, \$lead4);

        \$this->getDeduper()->deduplicate();
    }

    /**
     * @param \$id
     * @param \$email
     *
     * @return Lead|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private function getLead(\$id, \$email)
    {
        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->any())
            ->method('getId')
            ->willReturn(\$id);
        \$lead->expects(\$this->any())
            ->method('getProfileFields')
            ->willReturn(
                [
                    'id'     => \$id,
                    'points' => 10,
                    'email'  => \$email,
                ]
            );
        \$lead->expects(\$this->any())
            ->method('getDateModified')
            ->willReturn(new \\DateTime());

        return \$lead;
    }

    /**
     * @return ContactDeduper
     */
    private function getDeduper()
    {
        return new ContactDeduper(
            \$this->fieldModel,
            \$this->contactMerger,
            \$this->leadRepository
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Deduplicate/ContactDeduperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Deduplicate/ContactDeduperTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Deduplicate/ContactDeduperTest.php");
    }
}