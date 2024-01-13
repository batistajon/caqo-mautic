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

/* @bundles/LeadBundle/Tests/Controller/FieldFunctionalTest.php */
class __TwigTemplate_00c80b65fb1a8d39762e11d4fb828ab096daafd710dcc7b551be4034a4a712a5 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadField;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class FieldFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    public function testNewFieldVarcharFieldWith191Length(): void
    {
        \$fieldModel = self::\$container->get('mautic.lead.model.field');
        \$field      = \$this->createField('a');
        \$fieldModel->saveEntity(\$field);

        \$tablePrefix = self::\$container->getParameter('mautic.db_table_prefix');
        \$columns     = \$this->connection->getSchemaManager()->listTableColumns(\"{\$tablePrefix}leads\");
        \$this->assertEquals(ClassMetadataBuilder::MAX_VARCHAR_INDEXED_LENGTH, \$columns[\$field->getAlias()]->getLength());
    }

    public function testNewDateField(): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, 's/contacts/fields/new');

        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());

        \$form = \$crawler->selectButton('Save')->form();

        \$form['leadfield[label]']->setValue('Best Date Ever');
        \$form['leadfield[type]']->setValue('date');

        \$this->client->submit(\$form);

        \$text = strip_tags(\$this->client->getResponse()->getContent());

        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$text);
        Assert::assertStringNotContainsString('New Custom Field', \$text);
        Assert::assertStringNotContainsString('This form should not contain extra fields.', \$text);
        Assert::assertStringContainsString('Edit Custom Field - Best Date Ever', \$text);
    }

    private function createField(string \$suffix): LeadField
    {
        \$field = new LeadField();
        \$field->setName(\"Field \$suffix\");
        \$field->setAlias(\"field_\$suffix\");
        \$field->setDateAdded(new \\DateTime());
        \$field->setDateAdded(new \\DateTime());
        \$field->setDateModified(new \\DateTime());
        \$field->setType('text');
        \$field->setObject('lead');

        return \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Controller/FieldFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/FieldFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Controller/FieldFunctionalTest.php");
    }
}
