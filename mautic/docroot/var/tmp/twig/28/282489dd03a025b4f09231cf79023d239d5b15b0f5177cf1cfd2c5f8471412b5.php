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

/* @bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php */
class __TwigTemplate_ba91f48a331fe69018194a5d0043ce7b7ab5604d653fe6979e11d43007910c4f extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field;

use Mautic\\LeadBundle\\Field\\FieldList;
use Mautic\\LeadBundle\\Field\\FieldsWithUniqueIdentifier;
use Mautic\\LeadBundle\\Field\\IdentifierFields;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class IdentifierFieldsTest extends TestCase
{
    /**
     * @var FieldsWithUniqueIdentifier&MockObject
     */
    private \$fieldsWithUniqueIdentifiers;

    /**
     * @var FieldList&MockObject
     */
    private \$fieldList;

    /**
     * @var IdentifierFields
     */
    private \$identifierFields;

    protected function setUp(): void
    {
        \$this->fieldsWithUniqueIdentifiers = \$this->createMock(FieldsWithUniqueIdentifier::class);
        \$this->fieldList                   = \$this->createMock(FieldList::class);
        \$this->identifierFields            = new IdentifierFields(\$this->fieldsWithUniqueIdentifiers, \$this->fieldList);
    }

    public function testLeadObjectReturnsDefaultFields(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'lead'])
            ->willReturn([]);

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'lead'])
            ->willReturn([]);

        \$fields = \$this->identifierFields->getFieldList('lead');

        \$this->assertEquals(
            [
                'firstname',
                'lastname',
                'company',
                'email',
            ],
            \$fields
        );
    }

    public function testCompanyObjectReturnsDefaultFields(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'company'])
            ->willReturn([]);

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'company'])
            ->willReturn([]);

        \$fields = \$this->identifierFields->getFieldList('company');

        \$this->assertEquals(
            [
                'companyname',
                'companyemail',
                'companywebsite',
                'city',
                'state',
                'country',
            ],
            \$fields
        );
    }

    public function testUniqueIdentifiersAreIncluded(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'lead'])
            ->willReturn(
                [
                    'unique_id' => 'Unique ID',
                ]
            );

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'lead'])
            ->willReturn([]);

        \$fields = \$this->identifierFields->getFieldList('lead');

        \$this->assertEquals(
            [
                'firstname',
                'lastname',
                'company',
                'email',
                'unique_id',
            ],
            \$fields
        );
    }

    public function testSocialFieldsAreIncluded(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'lead'])
            ->willReturn(
                [
                    'unique_id' => 'Unique ID',
                ]
            );

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'lead'])
            ->willReturn(
                [
                    'Social' => [
                        'twitter' => [
                            'alias' => 'twitter',
                            'label' => 'Twitter',
                            'type'  => 'text',
                        ],
                    ],
                    'Core' => [
                        'foo' => [
                            'alias' => 'foo',
                            'label' => 'Foo',
                            'type'  => 'text',
                        ],
                    ],
                ]
            );

        \$fields = \$this->identifierFields->getFieldList('lead');

        \$this->assertEquals(
            [
                'firstname',
                'lastname',
                'company',
                'email',
                'unique_id',
                'twitter',
            ],
            \$fields
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
        return "@bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php");
    }
}
