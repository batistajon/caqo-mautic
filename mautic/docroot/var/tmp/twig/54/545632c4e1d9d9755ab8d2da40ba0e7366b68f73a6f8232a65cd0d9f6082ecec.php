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

/* @bundles/FormBundle/Tests/Entity/FieldTest.php */
class __TwigTemplate_22d3c97d93e6541cf45de3e0bc57ebbc1dd31d6441095989f0e653cdfae8d84f extends Template
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

namespace Mautic\\FormBundle\\Tests\\Entity;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;

final class FieldTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testShowForConditionalFieldWithNoParent(): void
    {
        \$field = new Field();
        \$this->assertTrue(\$field->showForConditionalField([]));
    }

    public function testShowForConditionalFieldWithParentButNoAlias(): void
    {
        \$parentFieldId = '55';
        \$field         = new Field();
        \$parentField   = \$this->createMock(Field::class);
        \$form          = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$parentField->method('getId')->willReturn(\$parentFieldId);

        \$this->assertFalse(\$field->showForConditionalField([]));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndNotInConditionAndBadValue(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => 'notIn', 'values' => []]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => 'value A'];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasWith0ValueAndNotInConditionAndBadValue(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => 'notIn', 'values' => [1]]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => 0];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndNotInConditionAndMatchingValue(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => 'notIn', 'values' => ['value A']]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => 'value A'];

        \$this->assertFalse(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndAnyValue(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => '', 'any' => true, 'values' => ['value A']]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => 'value A'];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentValue0AndAliasAndAnyValue(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => '', 'any' => true, 'values' => [1]]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => 0];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndInValueMatches(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => 'in', 'values' => ['value A']]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => ['value A']];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndInValueDoesNotMatch(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => 'in', 'values' => ['value B']]);
        \$parentField->method('getId')->willReturn(55);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => ['value A']];

        \$this->assertFalse(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndInValueMatchesWithDifferentTypes(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$field->setConditions(['expr' => 'in', 'values' => ['0']]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => [0]];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }

    public function testShowForConditionalFieldWithParentAndAliasAndInValueMatchesSpecialCharacters(): void
    {
        \$parentFieldId    = '55';
        \$parentFieldAlias = 'field_a';
        \$field            = new Field();
        \$parentField      = \$this->createMock(Field::class);
        \$form             = new Form();
        \$form->addField(0, \$parentField);
        \$field->setForm(\$form);
        \$field->setParent(\$parentFieldId);
        \$specialValue = 'čé+äà>&\"\\'è';
        \$field->setConditions(['expr' => 'in', 'values' => [InputHelper::clean(\$specialValue)]]);
        \$parentField->method('getId')->willReturn(\$parentFieldId);
        \$parentField->method('getAlias')->willReturn(\$parentFieldAlias);
        \$data = [\$parentFieldAlias => [\$specialValue]];

        \$this->assertTrue(\$field->showForConditionalField(\$data));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Entity/FieldTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Entity/FieldTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Entity/FieldTest.php");
    }
}
