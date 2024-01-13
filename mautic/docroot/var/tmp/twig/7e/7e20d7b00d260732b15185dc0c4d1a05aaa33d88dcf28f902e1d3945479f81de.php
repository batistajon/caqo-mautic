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

/* @bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php */
class __TwigTemplate_933322672bebf9767cc27660d244bd72b1449becec83501e1ff29b177704e48b extends Template
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

namespace Mautic\\FormBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;

class FieldModelFunctionalTest extends MauticMysqlTestCase
{
    public function testGetObjectFieldsUnpublishedField(): void
    {
        /** @var \\Mautic\\FormBundle\\Model\\FieldModel \$fieldModel */
        \$fieldModel   = self::\$container->get('mautic.form.model.field');
        \$fieldsBefore = \$fieldModel->getObjectFields('lead');

        /** @var LeadFieldRepository \$leadFieldRepository */
        \$leadFieldRepository = \$this->em->getRepository(LeadField::class);
        \$field               = \$leadFieldRepository->findOneBy(['alias' => 'firstname']);
        \$field->setIsPublished(false);
        \$leadFieldRepository->saveEntity(\$field);

        \$fieldsAfter = \$fieldModel->getObjectFields('lead');

        self::assertTrue(array_key_exists('firstname', array_flip(\$fieldsBefore[1]['Core'])));
        self::assertFalse(array_key_exists('firstname', array_flip(\$fieldsAfter[1]['Core'])));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Model/FieldModelFunctionalTest.php");
    }
}
