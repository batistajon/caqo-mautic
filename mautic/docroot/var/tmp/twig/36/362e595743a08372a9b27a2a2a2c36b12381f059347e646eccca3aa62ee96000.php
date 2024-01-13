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

/* @bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php */
class __TwigTemplate_b5280de8e9eb70a33fd38a4c2133fa95fd5873db5e0370abca2eedd3d5c8dbf8 extends Template
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

namespace Mautic\\CategoryBundle\\Tests\\Model;

use Mautic\\CategoryBundle\\Model\\ContactActionModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class ContactActionModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var Lead
     */
    private \$contactMock5;

    /**
     * @var Lead
     */
    private \$contactMock6;

    /**
     * @var MockObject|LeadModel
     */
    private \$contactModelMock;

    /**
     * @var ContactActionModel
     */
    private \$actionModel;

    protected function setUp(): void
    {
        \$this->contactMock5     = new Lead();
        \$this->contactMock6     = new Lead();
        \$this->contactModelMock = \$this->createMock(LeadModel::class);
        \$this->actionModel      = new ContactActionModel(\$this->contactModelMock);
    }

    public function testAddContactsToCategoriesEntityAccess()
    {
        \$contacts   = [5, 6];
        \$categories = [4, 5];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('addToCategory')
            ->with(\$this->contactMock6);

        \$this->actionModel->addContactsToCategories(\$contacts, \$categories);
    }

    public function testRemoveContactsFromCategoriesEntityAccess()
    {
        \$contacts   = [5, 6];
        \$categories = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadCategories')
            ->with(\$this->contactMock6)
            ->willReturn([45, 2]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('removeFromCategories')
            ->with([1 => 2]);

        \$this->actionModel->removeContactsFromCategories(\$contacts, \$categories);
    }

    public function testAddContactsToCategories()
    {
        \$contacts   = [5, 6];
        \$categories = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('addToCategory')
            ->withConsecutive([\$this->contactMock5, \$categories], [\$this->contactMock6, \$categories]);

        \$this->actionModel->addContactsToCategories(\$contacts, \$categories);
    }

    public function testRemoveContactsFromCategories(): void
    {
        \$contacts   = [5, 6];
        \$categories = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('getLeadCategories')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls([1, 2], [2, 3]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('removeFromCategories')
            ->withConsecutive([\$categories], [[2]]);

        \$this->actionModel->removeContactsFromCategories(\$contacts, \$categories);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php";
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
        return new Source("", "@bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php", "/var/www/html/mautic/docroot/app/bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php");
    }
}
