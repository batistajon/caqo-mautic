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

/* @bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php */
class __TwigTemplate_da0a84070b6626ff71ebd2987ce80a4f1647e4d71828a31151a71f7c06161cc3 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\CustomFieldRepositoryTrait;
use Mautic\\LeadBundle\\Tests\\StandardImportTestHelper;

class CustomFieldRepositoryTraitTest extends StandardImportTestHelper
{
    private \$fields = [
        'firstname' => [
            'id'       => 2,
            'label'    => 'First Name',
            'alias'    => 'firstname',
            'type'     => 'text',
            'group'    => 'core',
            'object'   => 'lead',
            'is_fixed' => 1,
        ],
        'lastname' => [
            'id'       => 3,
            'label'    => 'Last Name',
            'alias'    => 'lastname',
            'type'     => 'text',
            'group'    => 'core',
            'object'   => 'lead',
            'is_fixed' => 1,
        ],
        'twitter' => [
            'id'       => 27,
            'label'    => 'Twitter',
            'alias'    => 'twitter',
            'type'     => 'text',
            'group'    => 'social',
            'object'   => 'lead',
            'is_fixed' => 0,
        ],
    ];

    private \$fieldValues = [
        'preferred_profile_image' => 'gravatar',
        'firstname'               => 'John',
        'lastname'                => 'Doe',
        'twitter'                 => 'johndoe',
    ];

    protected \$fixedFields = [
        'firstname' => 'firstname',
        'lastname'  => 'lastname',
    ];

    protected \$baseColumns = [
        'preferred_profile_image',
        'firstname',
        'lastname',
    ];

    protected \$fieldGroups = [
        'core',
        'social',
        'personal',
        'professional',
    ];

    public function testFormatFieldValues()
    {
        \$mockTrait = \$this->getMockForTrait(CustomFieldRepositoryTrait::class, [], '', false, true, true, ['getCustomFieldList', 'getBaseColumns', 'getClassName', 'getFieldGroups']);
        \$mockTrait->method('getCustomFieldList')
            ->will(\$this->returnValue([\$this->fields, \$this->fixedFields]));

        \$mockTrait->method('getBaseColumns')
            ->will(\$this->returnValue(\$this->baseColumns));

        \$mockTrait->method('getClassName')
            ->will(\$this->returnValue('Mautic\\LeadBundle\\Entity\\Lead'));

        \$mockTrait->method('getFieldGroups')
            ->will(\$this->returnValue(\$this->fieldGroups));

        \$reflectedMockTrait = new \\ReflectionObject(\$mockTrait);
        \$method             = \$reflectedMockTrait->getMethod('formatFieldValues');
        \$method->setAccessible(true);

        \$expected = [
            'core' => [
                'firstname' => [
                    'id'       => 2,
                    'label'    => 'First Name',
                    'alias'    => 'firstname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 'John',
                ],
                'lastname' => [
                    'id'       => 3,
                    'label'    => 'Last Name',
                    'alias'    => 'lastname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 'Doe',
                ],
            ],
            'social' => [
                'twitter' => [
                    'id'       => 27,
                    'label'    => 'Twitter',
                    'alias'    => 'twitter',
                    'type'     => 'text',
                    'group'    => 'social',
                    'object'   => 'lead',
                    'is_fixed' => 0,
                    'value'    => 'johndoe',
                ],
            ],
            'personal'     => [],
            'professional' => [],
        ];

        \$result = \$method->invokeArgs(\$mockTrait, [\$this->fieldValues]);
        \$this->assertSame(\$expected, \$result);
    }

    public function testFormatFieldValuesWhenAFieldIsUnpublished()
    {
        \$mockTrait = \$this->getMockForTrait(CustomFieldRepositoryTrait::class, [], '', false, true, true, ['getCustomFieldList', 'getBaseColumns', 'getClassName', 'getFieldGroups']);
        \$mockTrait->method('getCustomFieldList')
            ->will(\$this->returnValue([\$this->fields, \$this->fixedFields]));

        \$mockTrait->method('getBaseColumns')
            ->will(\$this->returnValue(\$this->baseColumns));

        \$mockTrait->method('getClassName')
            ->will(\$this->returnValue('Mautic\\LeadBundle\\Entity\\Lead'));

        \$mockTrait->method('getFieldGroups')
            ->will(\$this->returnValue(\$this->fieldGroups));

        \$reflectedMockTrait = new \\ReflectionObject(\$mockTrait);
        \$method             = \$reflectedMockTrait->getMethod('formatFieldValues');
        \$method->setAccessible(true);

        \$expected = [
            'core' => [
                'firstname' => [
                    'id'       => 2,
                    'label'    => 'First Name',
                    'alias'    => 'firstname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 'John',
                ],
                'lastname' => [
                    'id'       => 3,
                    'label'    => 'Last Name',
                    'alias'    => 'lastname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 1,
                ],
            ],
            'social' => [
                'twitter' => [
                    'id'       => 27,
                    'label'    => 'Twitter',
                    'alias'    => 'twitter',
                    'type'     => 'text',
                    'group'    => 'social',
                    'object'   => 'lead',
                    'is_fixed' => 0,
                    'value'    => 'johndoe',
                ],
            ],
            'personal'     => [],
            'professional' => [],
        ];

        \$values = \$this->fieldValues;

        // Simulate unpublished field:
        unset(\$values['lastname']);

        \$result = \$method->invokeArgs(\$mockTrait, [\$values]);
        \$this->assertEquals(\$expected, \$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php");
    }
}
